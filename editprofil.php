<?php
// Shortcode pour afficher et gérer le formulaire d'édition du profil.
add_shortcode('profile_editor', 'render_profile_editor');

function render_profile_editor() {
    // Obtenir l'utilisateur connecté.
    $current_user = wp_get_current_user();

    if (!$current_user->exists()) {
        return '<p>Veuillez vous connecter pour modifier votre profil.</p>';
    }

    // Gestion de l'envoi du formulaire.
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['profile_editor_nonce']) && wp_verify_nonce($_POST['profile_editor_nonce'], 'profile_editor_action')) {
        // Mettre à jour les informations du profil.
        if (isset($_POST['description'])) {
            wp_update_user([ 'ID' => $current_user->ID, 'description' => sanitize_textarea_field($_POST['description']) ]);
        }

        // Mettre à jour la photo de profil.
        if (!empty($_FILES['profile_picture']['name'])) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            $uploadedfile = $_FILES['profile_picture'];
            $upload_overrides = ['test_form' => false];
            $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

            if (isset($movefile['file'])) {
                $attachment_id = wp_insert_attachment(
                    [
                        'guid' => $movefile['url'],
                        'post_mime_type' => $movefile['type'],
                        'post_title' => basename($movefile['file']),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    ],
                    $movefile['file']
                );

                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attach_data = wp_generate_attachment_metadata($attachment_id, $movefile['file']);
                wp_update_attachment_metadata($attachment_id, $attach_data);

                update_user_meta($current_user->ID, 'profile_picture', $attachment_id);
            }
        }

        echo '<p>Profil mis à jour avec succès.</p>';
    }

    // Récupérer la photo de profil actuelle.
    $profile_picture_id = get_user_meta($current_user->ID, 'profile_picture', true);
    $profile_picture_url = $profile_picture_id ? wp_get_attachment_url($profile_picture_id) : 'https://via.placeholder.com/150';

    ob_start();
    ?>
    <form method="post" enctype="multipart/form-data">
        <?php wp_nonce_field('profile_editor_action', 'profile_editor_nonce'); ?>

        <div class="profile-section">
            <label for="profile_picture">Photo de profil :</label>
            <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
            <img src="<?php echo esc_url($profile_picture_url); ?>" alt="Photo de profil" class="profile-picture-preview">
        </div>

        <div class="profile-details">
            <label for="description">Description :</label>
            <textarea name="description" id="description" rows="5"><?php echo esc_textarea($current_user->description); ?></textarea>
        </div>

        <div class="audio-section">
            <label for="audio_files">Ajouter des fichiers audio :</label>
            <input type="file" name="audio_files[]" id="audio_files" accept="audio/*" multiple>
            <p class="note">Vous pouvez ajouter plusieurs fichiers audio.</p>
        </div>

        <button type="submit">Enregistrer les modifications</button>
    </form>

    <style>
        .profile-section, .profile-details, .audio-section {
            margin-bottom: 20px;
        }
        .profile-picture-preview {
            display: block;
            margin-top: 10px;
            max-width: 150px;
            height: auto;
        }
    </style>

    <script>
        document.getElementById('profile_picture').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.querySelector('.profile-picture-preview');
                preview.src = URL.createObjectURL(file);
            }
        });
    </script>
    <?php
    return ob_get_clean();
}

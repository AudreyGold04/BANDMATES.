<?php
/*
Template Name: Formulaire d'inscription
*/
get_header();
?>
<a href="/wordpress" class="clickable_logo">
    <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png">
</a>

<div class="steps-wrapper">

    <div class="profile-container active">
        
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">ENTRE TON EMAIL ET CRÉE TON MOT DE PASSE</h1>
        
        <form class="profile-form">
            <label for="prenom">Email</label>
            <input type="text" name="mail" placeholder="JESSICA@EXEMPLE.COM" required>
        
            <label for="nom">Mot de passe</label>
            <div class="password-container">
                <input type="password" id="password_input" name="password" placeholder="*********" required>
                <img class="eye" src="/wordpress/wp-content/themes/BANDMATES./images/close_eye.png" alt="eye icon" id="eye_icon">
            </div>

            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
            </div>
        </form>
    </div>

    <div class="profile-container active">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">DÉTAILS DU PROFIL</h1>

        <div class="profile-pic">
            <img src="/wordpress/wp-content/themes/BANDMATES./images/photo_profile.png" alt="Photo de profil" id="profileImage">
            <label for="fileInput" class="upload-icon">
                📷
            </label>
            <input type="file" id="fileInput" accept="image/*" style="display: none;">
        </div>
        
        <form class="profile-form">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="JESSICA" required>
        
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="MAES" required>
        
            <label for="anniversaire">Anniversaire</label>
            <div class="birthday-input">
                <input type="date" id="anniversaire" name="anniversaire">
            </div>
        
            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
            </div>
        </form>
    </div>

    <div class="profile-container">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">JE SUIS...</h1>
        
        <form class="profile-form">
            <button type="button" class="inactive">
                <p>UNE FEMME</p>
            </button>

            <button type="button" class="inactive">
                <p>UN HOMME</p>
            </button>

            <button type="button" class="inactive">
                <p>AUTRE</p>
            </button>
        
            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
            </div>
        </form>
    </div>

    <div class="profile-container">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">QUEL EST TON INSTRUMENT PRINCIPAL ?</h1>
        
        <form class="profile-form choice">
            <button type="button" class="inactive_2">
                <p>GUITARE</p>
            </button>

            <button type="button" class="inactive_2">
                <p>PIANO</p>
            </button>

            <button type="button" class="inactive_2">
                <p>BASSE</p>
            </button>

            <button type="button" class="inactive_2">
                <p>CHANT</p>
            </button>

            <button type="button" class="inactive_2">
                <p>BATTERIE</p>
            </button>

            <button type="button" class="inactive_2">
                <p>AUTRE</p>
            </button>
        
        </form>
        <div class="back_and_go">
            <button type="button" class="btn-back">RETOUR</button>
            <button type="button" class="btn-continue">CONTINUER</button>
        </div>
    </div>

    <div class="profile-container">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">QUEL EST TON STYLE MUSICAL PRÉFÉRÉ ?</h1>
        
        <form class="profile-form choice">
            <button type="button" class="inactive_2">
                <p>ROCK</p>
            </button>

            <button type="button" class="inactive_2">
                <p>JAZZ</p>
            </button>

            <button type="button" class="inactive_2">
                <p>BLUES</p>
            </button>

            <button type="button" class="inactive_2">
                <p>CLASSIQUE</p>
            </button>

            <button type="button" class="inactive_2">
                <p>MÉTAL</p>
            </button>

            <button type="button" class="inactive_2">
                <p>POP</p>
            </button>

            <button type="button" class="inactive_2">
                <p>RAP</p>
            </button>

            <button type="button" class="inactive_2">
                <p>ELECTRO</p>
            </button>

            <button type="button" class="inactive_2">
                <p>AUTRE</p>
            </button>
        
        </form>
        <div class="back_and_go">
            <button type="button" class="btn-back">RETOUR</button>
            <button type="button" class="btn-continue">CONTINUER</button>
        </div>
    </div>

    <div class="profile-container">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">QUEL EST TON NIVEAU ?</h1>
        
        <form class="profile-form">
            <button type="button" class="inactive">
                <p>DÉBUTANT</p>
            </button>

            <button type="button" class="inactive">
                <p>INTERMÉDIAIRE</p>
            </button>

            <button type="button" class="inactive">
                <p>AVANCÉ</p>
            </button>

            <button type="button" class="inactive">
                <p>PROFESSIONNEL</p>
            </button>
        
            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
            </div>
        </form>
    </div>

    <div class="profile-container">
        
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>
    
        <h1 class="profile-title">AJOUTE TES MEILLEURES PHOTOS/VIDÉOS</h1>
        
        <form class="profile-form">

            <div class="card-pos">
                <label for="fileInput2" class="upload-plus">
                    <div class="card">
                        <span>+</span>
                        <img src="" alt="Photo de profil" id="image2">
                    </div>
                    <input type="file" id="fileInput2" accept="image/*" style="display: none;">          
                </label>

                <label for="fileInput3" class="upload-plus">
                    <div class="card">
                        <span>+</span>
                        <img src="" alt="Photo de profil" id="image3">
                    </div>
                    <input type="file" id="fileInput3" accept="image/*" style="display: none;">          
                </label>

                <label for="fileInput4" class="upload-plus">
                    <div class="card">
                        <span>+</span>
                        <img src="" alt="Photo de profil" id="image4">
                    </div>
                    <input type="file" id="fileInput4" accept="image/*" style="display: none;">          
                </label>

                <label for="fileInput5" class="upload-plus">
                    <div class="card">
                        <span>+</span>
                        <img src="" alt="Photo de profil" id="image5">
                    </div>
                    <input type="file" id="fileInput5" accept="image/*" style="display: none;">          
                </label>
            </div>
        
            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
            </div>
        </form>
    </div>

    <div class="profile-container">
        <div class="progress-bar">
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
            <div class="progress"></div>
        </div>

        <h1 class="profile-title">PRÉSENTE TOI EN QUELQUES MOTS</h1>

        <textarea placeholder="Écrivez ici..."></textarea>

        <div class="audio-upload-container">
            <h2>VEUX-TU PRÉSENTER UNE DÉMO ?</h2>
            <label for="audioInput" class="audio-upload-label">
                <div class="audio-button">
                    <span class="audio-icon">↓</span>
                </div>
                <input type="file" id="audioInput" accept="audio/*" style="display: none;">
            </label>
            <div class="audio-player" style="display: none;">
                <audio controls id="audioPlayer">
                    <source id="audioSource" src="">
                </audio>
            </div>
        </div>

        <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="btn-continue">CONTINUER</button>
        </div>
    </div>

    <div class="profile-container">
        <div class="end-form">
            <h1>BRAVO ! TU AS FINI TON PROFIL !</h1>
            <img src="/wordpress/wp-content/themes/BANDMATES./images/etoiles-noires.png" alt="etoile" class="etoile-1">
            <img src="/wordpress/wp-content/themes/BANDMATES./images/etoiles-noires.png" alt="etoile" class="etoile-2">
        </div>
        <div class="back_and_go">
            <button type="button" class="btn-back">RETOUR</button>
            <button type="button" class="last-btn">
                <a href="<?php echo home_url('/dashboard/'); ?>" class="btn">CONTINUER</a>
            </button>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

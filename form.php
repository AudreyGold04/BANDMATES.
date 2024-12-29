<?php
/*
Template Name: Formulaire d'inscription
*/
get_header();
?>
<a href="<?php echo home_url(); ?>" class="clickable_logo" style="z-index: 10;">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/black_logo.png">
</a>

<div class="steps-wrapper">
    <form method="POST" action="">
        <input type="hidden" name="custom_registration_form" value="1">

        <div class="profile-container">
            
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        
            <h1 class="profile-title">ENTRE TON EMAIL ET CRÉE TON MOT DE PASSE</h1>
            
            <div class="profile-form">
                <label for="prenom">Email</label>
                <input type="text" name="mail" placeholder="JESSICA@EXEMPLE.COM" required>
            
                <label for="nom">Mot de passe</label>
                <div class="password-container">
                    <input type="password" id="password_input" name="password" placeholder="*********" required>
                    <img class="eye" src="<?php echo get_stylesheet_directory_uri()?>/images/close_eye.png" alt="eye icon" id="eye_icon">
                    <img class="eye" src="<?php echo get_stylesheet_directory_uri()?>/images/open_eye.png" alt="eye icon" id="eye_icon2" style="display: none;">
                </div>

                <div class="back_and_go">
                    <button type="button" class="btn-back">RETOUR</button>
                    <button type="button" class="btn-continue">CONTINUER</button>
                </div>
            </div>
        </div>

        <div class="profile-container active">
            
            <div class="progress-bar">
                <div class="progress"></div>
                <div class="progress"></div>
            </div>
        
            <h1 class="profile-title">DÉTAILS DU PROFIL</h1>

            <div class="profile-pic">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/photo_profile.png" alt="Photo de profil" id="profileImage">
                <label for="fileInput" class="upload-icon">
                    📷
                </label>
                <input type="file" id="fileInput" accept="image/*" style="display: none;">
            </div>
            
            <div class="profile-form">
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
            </div>
        </div>

        <div class="profile-container">
            
            <div class="progress-bar">
                <div class="progress"></div>
                <div class="progress"></div>
                <div class="progress"></div>
            </div>
        
            <h1 class="profile-title">JE SUIS...</h1>
            
            <div class="profile-form">
                <input type="hidden" id="genre" name="genre" value="">

                <button type="button" class="unique-choice inactive" data-value="femme">
                    <p>UNE FEMME</p>
                </button>

                <button type="button" class="unique-choice inactive" data-value="homme">
                    <p>UN HOMME</p>
                </button>

                <button type="button" class="unique-choice inactive" data-value="autre">
                    <p>AUTRE</p>
                </button>
            
                <div class="back_and_go">
                    <button type="button" class="btn-back">RETOUR</button>
                    <button type="button" class="btn-continue">CONTINUER</button>
                </div>
            </div>
        </div>

        <div class="profile-container">
            
            <div class="progress-bar">
                <div class="progress"></div>
                <div class="progress"></div>
                <div class="progress"></div>
                <div class="progress"></div>
            </div>
        
            <h1 class="profile-title">QUEL EST TON INSTRUMENT PRINCIPAL ?</h1>
            
            <div class="profile-form choice">
                <input type="hidden" name="instruments[]" value="">
                <input type="hidden" name="instruments[]" value="">
                <input type="hidden" name="instruments[]" value="">
                <input type="hidden" name="instruments[]" value="">
                <input type="hidden" name="instruments[]" value="">
                <input type="hidden" name="instruments[]" value="">

                <button type="button" class="inactive_2 multiple-choice" data-value="guitare">
                    <p>GUITARE</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="piano">
                    <p>PIANO</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="basse">
                    <p>BASSE</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="chant">
                    <p>CHANT</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="batterie">
                    <p>BATTERIE</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="autre">
                    <p>AUTRE</p>
                </button>
            
            </div>
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
            
            <div class="profile-form choice">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">
                <input type="hidden" name="genres_musicaux[]" value="">

                <button type="button" class="inactive_2 multiple-choice" data-value="rock">
                    <p>ROCK</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="jazz">
                    <p>JAZZ</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="blues">
                    <p>BLUES</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="classique">
                    <p>CLASSIQUE</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="metal">
                    <p>MÉTAL</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="pop">
                    <p>POP</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="rap">
                    <p>RAP</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="electro">
                    <p>ELECTRO</p>
                </button>

                <button type="button" class="inactive_2 multiple-choice" data-value="autre">
                    <p>AUTRE</p>
                </button>
            
            </div>
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
            
            <div class="profile-form">
                <input type="hidden" id="genre" name="niveau" value="">
                <button type="button" class="unique-choice inactive" data-value="debutant">
                    <p>DÉBUTANT</p>
                </button>

                <button type="button" class="unique-choice inactive" data-value="intermediaire">
                    <p>INTERMÉDIAIRE</p>
                </button>

                <button type="button" class="unique-choice inactive" data-value="avance">
                    <p>AVANCÉ</p>
                </button>

                <button type="button" class="unique-choice inactive" data-value="professionnel">
                    <p>PROFESSIONNEL</p>
                </button>
            
                <div class="back_and_go">
                    <button type="button" class="btn-back">RETOUR</button>
                    <button type="button" class="btn-continue">CONTINUER</button>
                </div>
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
                <div class="progress"></div>
            </div>
        
            <h1 class="profile-title">AJOUTE TES MEILLEURES PHOTOS/VIDÉOS</h1>
            
            <div class="profile-form">

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
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/etoiles-noires.png" alt="etoile" class="etoile-1">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/etoiles-noires.png" alt="etoile" class="etoile-2">
            </div>
            <div class="back_and_go">
                <button type="button" class="btn-back">RETOUR</button>
                <button type="button" class="last-btn">
                    <a href="<?php echo home_url('/dashboard/'); ?>" class="btn">CONTINUER</a>
                </button>
            </div>
        </div>
    </form>
</div>
<?php wp_footer(); ?>
</body>
</html>

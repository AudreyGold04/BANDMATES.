<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulaire d'insription </title>
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style.css">
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style-form.css">
    </head>
    <body>
        <a href="/wordpress" class="clickable_logo">
            <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png">
        </a>

        <div class="steps-wrapper">
            <div class="profile-container active">
                
                <div class="progress-bar">
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
                </div>
            
                <h1 class="profile-title">QUEL EST TON INSTRUMENT PRINCIPAL ?</h1>
                
                <form class="profile-form">
                    <button type="button" class="inactive">
                        <p>GUITARE</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>PIANO</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>BASSE</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>CHANT</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>BATTERIE</p>
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
            
                <h1 class="profile-title">QUEL EST TON STYLE MUSICAL PRÉFÉRÉ ?</h1>
                
                <form class="profile-form">
                    <button type="button" class="inactive">
                        <p>ROCK</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>JAZZ</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>BLUES</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>CLASSIQUE</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>MÉTAL</p>
                    </button>

                    <button type="button" class="inactive">
                        <p>POP</p>
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
                            ahhhh
                        </audio>
                    </div>
                </div>

                <div class="back_and_go">
                    <button type="button" class="btn-back">RETOUR</button>
                    <button type="button" class="last-btn">
                        <a href="/wordpress/wp-content/themes/BANDMATES./dashboard.php">CONTINUER</a>
                    </button>
                </div>
            </div>
        </div>
        <script src="formulaire-inscription.js"></script>
    </body>
</html>

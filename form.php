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
                    <button class="inactive">
                        <p>UNE FEMME</p>
                    </button>

                    <button class="inactive">
                        <p>UN HOMME</p>
                    </button>

                    <button class="inactive">
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
            
                <h1 class="profile-title">QUEL EST VOTRE INSTRUMENT PRINCIPAL ?</h1>
                
                <form class="profile-form">
                    <button class="inactive">
                        <p>GUITARE</p>
                    </button>

                    <button class="inactive">
                        <p>PIANO</p>
                    </button>

                    <button class="inactive">
                        <p>BASSE</p>
                    </button>

                    <button class="inactive">
                        <p>CHANT</p>
                    </button>

                    <button class="inactive">
                        <p>BATTERIE</p>
                    </button>

                    <button class="inactive">
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
            
                <h1 class="profile-title">QUEL EST VOTRE STYLE MUSICAL PRÉFÉRÉ ?</h1>
                
                <form class="profile-form">
                    <button class="inactive">
                        <p>ROCK</p>
                    </button>

                    <button class="inactive">
                        <p>JAZZ</p>
                    </button>

                    <button class="inactive">
                        <p>BLUES</p>
                    </button>

                    <button class="inactive">
                        <p>CLASSIQUE</p>
                    </button>

                    <button class="inactive">
                        <p>MÉTAL</p>
                    </button>

                    <button class="inactive">
                        <p>POP</p>
                    </button>

                    <button class="inactive">
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
            
                <h1 class="profile-title">QUEL EST VOTRE NIVEAU ?</h1>
                
                <form class="profile-form">
                    <button class="inactive">
                        <p>DÉBUTANT</p>
                    </button>

                    <button class="inactive">
                        <p>INTERMÉDIAIRE</p>
                    </button>

                    <button class="inactive">
                        <p>AVANCÉ</p>
                    </button>

                    <button class="inactive">
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
                    <input type="image">
                    <input type="image">
                    <input type="image">
                    <input type="image">
                
                    <div class="back_and_go">
                        <button type="button" class="btn-back">RETOUR</button>
                        <button type="button" class="btn-continue">CONTINUER</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="formulaire-inscription.js"></script>
    </body>
</html>

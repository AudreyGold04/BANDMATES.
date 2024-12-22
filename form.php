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
        <div>
            <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png">
        </div>
        <a href="/wordpress">back to homepage </a>
        <div class="profile-container">
            
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
        

            <h2 class="profile-title">DÉTAILS DU PROFIL</h2>
        
    
            <div class="profile-pic">
                <img src="path/to/photo.jpg" alt="Photo de profil" id="profileImage">
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
        
            
            <button type="submit" class="btn-continue">CONTINUER</button>
            </form>
        </div>
        <!-- <script src="formulaire-inscription.js"></script> -->
    </body>
</html>

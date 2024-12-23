<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulaire d'insription </title>
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style.css">
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style-dashboard.css">
    </head>
    <body>
        <a href="/wordpress" class="clickable_logo">
            <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png">
        </a>

        <div class="container">
        <!-- Left Sidebar -->
        <aside class="sidebar">
            <img src="profile-picture.jpg" alt="Jessica" class="profile-picture">
            <h2>Jessica</h2>
            <nav>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Connexions</a></li>
                    <li><a href="#">Paramètres</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Swipeable Profile Section -->
        <main class="profile-section">
            <div class="swipeable-profile">
                <div class="profile">
                    <img src="profile-olivia.jpg" alt="Olivia" class="profile-image">
                    <h2>Olivia</h2>
                    <p class="distance">À 5km de toi</p>
                    <div class="tags">
                        <span>Guitare</span>
                        <span>Rock</span>
                        <span>Blues</span>
                    </div>
                    <p class="description">
                        Salut ! Je m'appelle Olivia, guitariste depuis 8 ans et passionnée par le rock et le blues.
                        Je cherche à rejoindre ou former un groupe sérieux pour composer... <a href="#">Lire plus</a>
                    </p>
                    <div class="actions">
                        <button class="dislike">✖️</button>
                        <button class="like">⚡</button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Chat Section -->
        <aside class="chat-section">
            <div class="chat-header">
                <h3>Messages</h3>
                <a href="#">Voir tout</a>
            </div>
            <ul class="chat-list">
                <li>
                    <img src="user-julie.jpg" alt="Julie">
                    <div>
                        <h4>Julie</h4>
                        <p>C'est quoi ton groupe préféré ?</p>
                    </div>
                </li>
                <li>
                    <img src="user-jade.jpg" alt="Jade">
                    <div>
                        <h4>Jade</h4>
                        <p>Oui, jeudi prochain ?</p>
                    </div>
                </li>
                <li>
                    <img src="user-max.jpg" alt="Max">
                    <div>
                        <h4>Max</h4>
                        <p>Ah d'accord ! T'es dispo quand ?</p>
                    </div>
                </li>
                <li>
                    <img src="user-josh.jpg" alt="Josh">
                    <div>
                        <h4>Josh</h4>
                        <p>Super ! On fait comme ça !</p>
                    </div>
                </li>
            </ul>
        </aside>
    </div>
    <script src="/wordpress/wp-content/themes/BANDMATES./dashboard.js"></script>
    </body>
</html>

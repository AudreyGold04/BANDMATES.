<!-- <!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dashboard </title>
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style.css">
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style-dashboard.css">
    </head>
    <body>
        <a href="/wordpress" class="clickable_logo">
            <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png">
        </a>

        <div class="container">

        <aside class="sidebar">
            <img src="profile-picture.jpg" alt="Jessica" class="profile-picture">
            <h2>Jessica</h2>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Connexions</a></li>
                    <li><a href="#">Paramètres</a></li>
                </ul>
            </nav>
        </aside>


       
         <main class="profile-section">
            <div class="swipeable-profile">
                <div class="profile">
                    <img src="olivia.png" alt="Olivia" class="profile-image">
                    
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
</html> -->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BandMates</title>
        <!-- <link rel="stylesheet" href="test.css"> -->
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style.css">
        <link rel="stylesheet" href="/wordpress/wp-content/themes/BANDMATES./style-dashboard.css">
    </head>
    <body>
        <div class="dashboard">
            <!-- Left Sidebar -->
            <div class="sidebar">
                <img class="logo" src="/wordpress/wp-content/themes/BANDMATES./images/black_logo.png" alt="Logo">
                <div class="user-profile">
                    <img src="/wordpress/wp-content/themes/BANDMATES./images/photo-profile-defaut.png" alt="Profile" class="user-profile-pic">
                    <h2>Jessica</h2>
                </div>
                <nav>
                    <div class="nav-item">
                        <img src="/wordpress/wp-content/themes/BANDMATES./images/symbol-person.png" class="symbol">
                        <p>Profil</p>
                    </div>
                    <div class="nav-item">
                        <img src="/wordpress/wp-content/themes/BANDMATES./images/symbol-message.png" class="symbol">
                        <p>Messages</p>
                    </div>
                    <!-- <div class="nav-item">
                        <img src="/wordpress/wp-content/themes/BANDMATES./images/symbol-thunder.png" class="symbol">
                        <p>Connexions</p>
                    </div> -->
                    <div class="nav-item">
                        <img src="/wordpress/wp-content/themes/BANDMATES./images/symbol-settings.png" class="symbol">
                        <p>Paramètres</p>
                    </div>
                </nav>
            </div>

            <!-- Main Content -->
            <!-- <main> -->
                    <div class="listing">
                        <div class="profiles-cont">
                            <div class="profile-card">
                                <div class="profile-info lime">
                                    <!-- <div class="profile-card-img"></div> -->
                                    <img src="/wordpress/wp-content/themes/BANDMATES./images/groupe.jpeg" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">BLUSH</p>
                                        <div class="tags">
                                            <span>Guitare</span>
                                            <span>Basse</span>
                                            <span>Batterie</span>
                                            <span>Chant</span>
                                            <span>Rock</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Whatever</p>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                            <div class="profile-card">
                                <div class="profile-info lime">
                                    <img src="/wordpress/wp-content/themes/BANDMATES./images/lola_and_suzy.png" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">Lola & Suzy</p>
                                        <div class="tags">
                                            <span>Chant</span>
                                            <span>Guitare</span>
                                            <span>Soul</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Whatever</p>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                            <div class="profile-card">
                                <div class="profile-info cyan">
                                <img src="/wordpress/wp-content/themes/BANDMATES./images/jake_and_finn.png" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">Jake & Finn</p>
                                        <div class="tags">
                                            <span>Guitare</span>
                                            <span>Batterie</span>
                                            <span>Hard rock</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Whatever</p>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                            <div class="profile-card">
                                <div class="profile-info indigo">
                                <img src="/wordpress/wp-content/themes/BANDMATES./images/lindsey.png" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">Lindsay</p>
                                        <div class="tags">
                                            <span>Basse</span>
                                            <span>Metal</span>
                                            <span>Rock</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Whatever</p>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                            <div class="profile-card">
                                <div class="profile-info blue">
                                <img src="/wordpress/wp-content/themes/BANDMATES./images/max.png" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">Max</p>
                                        <div class="tags">
                                            <span>Chant</span>
                                            <span>Pop</span>
                                            <span>Rock</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Whatever</p>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                            <div class="profile-card">
                                <div class="profile-info purple">
                                    <img src="/wordpress/wp-content/themes/BANDMATES./images/olivia.png" class="img-card">
                                    <div class="info-block">
                                        <p class="profile-card-name">Olivia</p>
                                        <div class="tags">
                                            <span>Guitare</span>
                                            <span>Rock</span>
                                            <span>Blues</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-card-choice m--reject"></div>
                                <div class="profile-description">
                                    <p class="profile-card-description">Salut ! Je m’appelle Olivia, guitariste depuis 8 ans et passionné par le rock et le blues. Je cherche à rejoindre ou former un groupe sérieux pour composer enregistrer et faire des concerts.</p>
                                </div>
                                <div class="profile-card-choice m--like"></div>
                                <div class="profile-card-drag"></div>
                            </div>
                        </div>
                    </div>
            <!-- </main> -->

            <!-- Right Sidebar -->
            <div class="messages">
                <div class="text-message">
                    <h3>MESSAGES</h3>
                    <h3>VOIR TOUT</h3>
                </div>
                <div class="messagesList">
                    <!-- Messages will be inserted here dynamically -->
                </div>
            </div>
        </div>
        <!-- <script src="test.js"></script> -->
        <script src="/wordpress/wp-content/themes/BANDMATES./dashboard.js"></script>
    </body>
</html>
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
                                    <p class="profile-card-description">
                                    Nous, c’est BLUSH, un groupe de rock-pop basé à Bruxelles. On est quatre : Audrey à la guitare, Thalea à la basse, Yentl à la batterie, et Lauren au chant. On adore mélanger des mélodies accrocheuses avec des riffs énergiques.
                                    On cherche une claviériste dans la vingtaine pour compléter notre groupe et apporter une nouvelle vibe à nos compos. Si tu as un bon niveau, que tu aimes le rock-pop et que tu es prête à t’investir dans un projet sérieux (répètes, concerts, enregistrements…), on serait ravies de te rencontrer.
                                    On répète régulièrement en semaine et parfois le week-end, dans une ambiance cool et détendue, mais avec l’envie de faire avancer les choses. Si ça te parle, envoie-nous un message – on a hâte de t’entendre ! 🎶🎹
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_blush.mp3" style="display: none;"></audio>
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
                                            <span>Jazz</span>
                                            <span>Blues</span>
                                            <span>Autre</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">
                                    Coucou ! Nous, c’est Lola et Suzy, deux amies inséparables qui vivent pour le blues, le jazz et la soul. Lola est au chant principal avec une voix puissante et pleine d’émotion, tandis que Suzy ajoute des harmonies élégantes et accompagne à la guitare pour enrichir nos morceaux d’une belle profondeur musicale.
                                    Nos influences vont de B.B. King et Etta James à Norah Jones et Amy Winehouse. Ce qu’on aime, c’est explorer des sonorités pleines de feeling, créer des atmosphères captivantes et transmettre des émotions brutes à travers notre musique. On cherche à monter un projet avec des musiciens passionnés – bassiste, batteur, claviériste, ou autre instrument qui peut ajouter une vraie couleur à nos compositions et reprises.
                                    Basées à Bruxelles, on est disponibles en semaine et le week-end pour répéter et développer un répertoire original. Si tu te reconnais dans l’univers blues, jazz et soul et que tu as envie de partager la scène avec nous, écris-nous – on est prêtes à créer une expérience musicale unique ! 🎤🎸🎶
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_lola_suzy.mp3" style="display: none;"></audio>
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
                                            <span>Rock</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-description">
                                    <p class="profile-card-description">
                                        Nous sommes Jake (batteur) et Finn (guitariste), deux musiciens passionnés de hard rock qui se sont rencontrés grâce à leur amour pour la musique. Ensemble, on a décidé de créer un groupe sérieux et de monter un projet ambitieux autour de compositions originales, d’enregistrements en studio et de concerts.
                                        Nos inspirations viennent des légendes du genre comme AC/DC, Guns N’ Roses ou Led Zeppelin, et notre énergie se traduit par des rythmes puissants et des riffs percutants. On cherche maintenant à compléter notre formation avec un chanteur et un bassiste motivés, prêts à s’investir pleinement dans l’aventure. L’idéal ? Quelqu’un basé à Bruxelles, disponible pour des répétitions régulières et qui partage notre ambition de faire vibrer la scène avec une vraie présence et de la passion.
                                        Si tu as envie de rejoindre un projet sérieux, collaboratif, et orienté vers le live, n’hésite pas à nous contacter. On est prêts à faire du bruit ensemble et à repousser les limites ! 🎸🥁🔥
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_jake_finn.mp3" style="display: none;"></audio>
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
                                    <p class="profile-card-description">
                                    Hey ! Je m’appelle Lindsey, bassiste passionnée par le groove puissant du metal et l’énergie brute du rock. Je cherche à intégrer ou former un groupe prêt à explorer des sons lourds et des compositions originales.
                                    J’adore les rythmiques percutantes et les ambiances intenses, avec des inspirations allant de Slipknot à Ozzy Osbourne. Mon style est polyvalent et je suis toujours prête à expérimenter pour trouver le son qui fera vibrer la scène.
                                    Basée à Bruxelles, je suis dispo en semaine et les week-ends pour répéter et collaborer avec des musiciens motivés et créatifs. Si ça te parle, swipe moi vers la droite et construisons quelque chose d’unique ! 🎶🤘
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_lindsay.mp3" style="display: none;"></audio>
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
                                    <p class="profile-card-description">
                                    Yo ! Je m’appelle Max, chanteur passionné par la musique pop et rock. Je cherche à rejoindre ou former un groupe motivé pour créer, enregistrer, et partager notre énergie sur scène.
                                    Mes influences vont de Queen à Harry Styles, en passant par The Beatles et Florence + The Machine.
                                    Basé à Bruxelles, je suis disponible les soirs en semaine et les week-ends pour des répétitions. J’adore travailler avec des musiciens sérieux et créatifs, prêts à expérimenter et à s’amuser dans le processus.
                                    Si tu penses qu’on pourrait faire de la bonne musique ensemble, n’hésite pas à me swipe vers la droite !
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_max.mp3" style="display: none;"></audio>
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
                                    <p class="profile-card-description">
                                        Salut ! Je m’appelle Olivia, guitariste depuis 8 ans et passionné par le rock et le blues. Je cherche à rejoindre ou former un groupe sérieux pour composer enregistrer et faire des concerts.
                                        Mes influences vont de Jimi Hendrix à Arctic Monkeys en passant par Stevie Ray Vaughan.
                                        Je suis basé à bruxelles et disponible les soirs en semaine et les week-ends pour des répétitions. J’aime collaborer avec des musiciens motivés et ouverts d’esprit.
                                        Si tu penses qu’on pourrait créer quelque chose de sympa ensemble, n’hésite pas à m’envoyer un message !
                                    </p>
                                    <a href="#" class="read-more-btn">Lire plus</a>
                                    <audio id="audio" src="/wordpress/wp-content/themes/BANDMATES./assets/music/instru_olivia.mp3" style="display: none;"></audio>
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
<?php
/*
Template Name: Accueil
*/
get_header();
?>
<header>
    <div class="big-screen" id="big-navbar">
        <div>
            <a href="<?php echo get_home_url(); ?>">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo">
            </a>
        </div>
        <div class="nav">
            <a class="btn menu" href="<?php echo home_url('/faq/'); ?>">FAQ</a>
            <a class="btn menu" href="<?php echo home_url('/support/'); ?>">Support</a>
        </div>
    </div>

    <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <a class="text-white d-block mb-2" href="<?php echo home_url('/faq/'); ?>">FAQ</a>
        <a class="text-white d-block" href="<?php echo home_url('/support/'); ?>">Support</a>
    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a href="<?php echo get_home_url(); ?>">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/mini-logo-2.png" alt="Logo">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

</header>

<section class="black-section first">

    <div class="left-content">
        <h1 class="txt">La musique vous réunit,<br>BandMates vous connecte</h1>
        <div class="">
            <a href="<?php echo home_url('/register/'); ?>" class="btn">Rejoindre</a>
            <a href="<?php echo wp_login_url(); ?>" class="btn">Se connecter</a>
        </div>
    </div>
    
    <div class="right-content">
        <img class="band" src="<?php echo get_stylesheet_directory_uri()?>/images/home.jpg">
        <img class="star star-1" src="<?php echo get_stylesheet_directory_uri()?>/images/etoiles.png">
        <img class="star star-2" src="<?php echo get_stylesheet_directory_uri()?>/images/etoiles.png">
    </div>
    
</section>

<section class="white-section bloc-musicien">
    <img class="musiciens-big-screen"  src="<?php echo get_stylesheet_directory_uri()?>/images/musiciens.png" alt="Groupe de musiciens">
    <h1 class="musiciens-heading">trouvez des musiciens compatibles avec vous.</h1>
    <img class="musiciens-image" src="<?php echo get_stylesheet_directory_uri()?>/images/groupe_de_musique.png" alt="Groupe de musiciens">
</section>

<section class="black-section third">

    <div class="left-content">
        <h1>Formez votre groupe<br>parfait</h2>
        <h2 class="font-abel">Trouvez des musiciens qui vibrent comme vous. Formez votre groupe, partagez votre passion et jouez ensemble.</h2>
    </div>
    
    <div class="right-content-2">
        <img class="chanteuse" src="<?php echo get_stylesheet_directory_uri()?>/images/chanteuse.jpg" alt="Chanteuse">
        <img class="scotch scotch-1" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_blanc.png" alt="Chanteuse">
        <img class="scotch scotch-2" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Chanteuse">
    </div>
</section>

<section class="white-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="feature-text">Pourquoi BandMates ?</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <img class="card-scotch" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Scotch">
                    <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
                    <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/eclair.png" alt="Icône Éclair">
                    <h2>Des connexions sur mesure</h2>
                    <h3>Trouvez des musiciens partageant vos influences et styles préférés.</h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <img class="card-scotch" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Scotch">
                    <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
                    <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/mains.png" alt="Icône Mains">
                    <h2>Formez votre groupe parfait</h2>
                    <h3>Rassemblez votre équipe pour connecter les musiciens qui s’harmonisent avec vous.</h3>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center">
                    <img class="card-scotch" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Scotch">
                    <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
                    <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/terre.png" alt="Icône Terre">
                    <h2>Une communauté engagée</h2>
                    <h3>Échangez des idées et collaborez avec d'autres artistes passionnés.</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="black-section fifth">

    <div class="left-content-5">
        <h1>C'est le moment de<br>passer à l'action</h1>
        <h2>Faites le premier pas aujourd’hui et<br>transformez votre rêve en réalité.</h2>
        <a href="<?php echo home_url('/register/'); ?>" class="btn">Rejoignez gratuitement</a>
    </div>

    <div class="right-content-5">
        <img class="bouche" src="<?php echo get_stylesheet_directory_uri()?>/images/bouche.png">
    </div>

</section>

<?php
wp_footer();
get_footer(); ?>
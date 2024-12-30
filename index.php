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
            <a class="btn menu">FAQ</a>
            <a class="btn menu">Support</a>
        </div>
    </div>

    <!-- <div class="small-screen" id="small-navbar">
        <div>
        </div>
        <div class="nav">
            <a class="menu">FAQ</a>
            <a class="menu">Support</a>
        </div>
        <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">☰</button>
    </div> -->


    <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <a class="text-white d-block mb-2">FAQ</a>
        <a class="text-white d-block">Support</a>
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

<section class="white-section">
    <img class="musiciens-compatibles"  src="<?php echo get_stylesheet_directory_uri()?>/images/musiciens.png" alt="Groupe de musiciens">
</section>

<section class="black-section">

    <div class="left-content">
        <h1>Formez votre groupe<br>parfait</h2>
        <h2 class="font-abel">Trouvez des musiciens qui vibrent comme vous. Formez votre groupe, partagez votre passion et jouez ensemble.</h2>
    </div>
    
    <div class="right-content">
        <img class="chanteuse" src="<?php echo get_stylesheet_directory_uri()?>/images/chanteuse.jpg" alt="Chanteuse">
        <img class="scotch scotch-1" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_blanc.png" alt="Chanteuse">
        <img class="scotch scotch-2" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Chanteuse">
    </div>
</section>

<section class="white-section features">
    
    <div class="feature-text">
        <h1>Pourquoi BandMates ?</h1>
    </div>
    
    <div class="card">
        <img class="card-scotch-1" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Chanteuse">
        <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/eclair.png">
        <h2>Des connexions sur mesure</h2>
        <h3 class="font-abel">Trouvez des musiciens partageant vos influences et styles préférés.</h3>
    </div>
        
    <div class="card">
        <img class="card-scotch-2" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Chanteuse">
        <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/mains.png">
        <h2>Formez votre groupe parfait</h2>
        <h3 class="font-abel">Rassemblez votre équipe pour connecter les musiciens qui s’harmonisent avec vous.</h3>
    </div>
        
    <div class="card">
        <img class="card-scotch-3" src="<?php echo get_stylesheet_directory_uri()?>/images/scotch_transparant.png" alt="Chanteuse">
        <img class="card-scratch" src="<?php echo get_stylesheet_directory_uri()?>/images/scratch.png">
        <img class="card-image" src="<?php echo get_stylesheet_directory_uri()?>/images/terre.png">
        <h2>Une communauté engagée</h2>
        <h3 class="font-abel">Échangez des idées et collaborez avec d'autres artistes passionnés.</h3>
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
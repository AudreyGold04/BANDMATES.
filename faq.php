<?php
/*
Template Name: FAQ
*/
get_header();
?>

<!-- <header>
    <div class="big-screen" id="big-navbar">
        <div>
            <a href="<?php echo get_home_url(); ?>">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo">
            </a>
        </div>
        <div class="nav">
            <a class="btn" href="">FAQ</a>
            <a class="btn">Support</a>
        </div>
    </div>

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

</header> -->

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Qu’est-ce que BandMates ?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                BandMates est une plateforme innovante conçue pour connecter des musiciens afin de former des groupes ou collaborer sur des projets musicaux. Inspirée des applications de rencontres, elle utilise un algorithme intelligent pour suggérer des partenaires musicaux compatibles.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Qui peut utiliser BandMates ?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    La plateforme est ouverte aux musiciens amateurs et semi-professionnels de tout âge, motivés pour collaborer, améliorer leurs compétences ou participer à des projets musicaux.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Puis-je discuter avec d’autres musiciens via la plateforme ?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Oui, une fonctionnalité de chat intégrée vous permet d’échanger directement avec d’autres utilisateurs.    
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Quels types de profils puis-je trouver ?
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Vous pouvez découvrir des musiciens pratiquant divers styles musicaux, instruments et ayant des objectifs variés, allant de la formation de groupes à la création de projets musicaux.
                </div>
            </div>
        </div>
    </div>
<?php
wp_footer();
?>
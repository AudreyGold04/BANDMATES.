<?php
/*
Template Name: FAQ
*/
get_header();
?>

<div class="main-container">
    <div class="header">
        <div class="big-screen" id="big-navbar">
            <div>
                <a href="<?php echo get_home_url(); ?>">
                    <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="nav">
                <a class="btn" href="<?php echo home_url('/faq/'); ?>">FAQ</a>
                <a class="btn" href="<?php echo home_url('/support/'); ?>">Support</a>
            </div>
        </div>

        <div class="collapse menu" id="navbarToggleExternalContent">
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

    </div>


    <div class="box">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Qu’est-ce que BandMates ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        BandMates est une plateforme innovante conçue pour connecter des musiciens afin de former des groupes ou collaborer sur des projets musicaux. Inspirée des applications de rencontres, elle utilise un algorithme intelligent pour suggérer des partenaires musicaux compatibles.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Qui peut utiliser BandMates ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        La plateforme est ouverte aux musiciens amateurs et semi-professionnels de tout âge, motivés pour collaborer, améliorer leurs compétences ou participer à des projets musicaux.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Puis-je discuter avec d’autres musiciens via la plateforme ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Oui, une fonctionnalité de chat intégrée vous permet d’échanger directement avec d’autres utilisateurs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Quels types de profils puis-je trouver ?
                    </button>
                </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vous pouvez découvrir des musiciens pratiquant divers styles musicaux, instruments et ayant des objectifs variés, allant de la formation de groupes à la création de projets musicaux.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
<?php
/*
Template Name: Footer
*/
?>

<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
</head>

<body> -->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-4 col-md-3 logo-container">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Besoin d'aide</h3>
                        <ul>
                            <li><a href="<?php echo get_home_url(); ?>">Accueil</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="<?php echo home_url('/faq/'); ?>">FAQ</a></li>
                            <li><a href="<?php echo home_url('/politique-de-confidentialite/'); ?>">Politique de condidentialité</a></li>
                            <li><a href="<?php echo home_url('/code-de-conduite/'); ?>">Code de conduite</a></li>
                            <li><a href="<?php echo home_url('/mentions-legales/'); ?>">Mentin légales</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="#">Bandmates.info @gmail.com</a></li>
                            <li><a href="#">+32 470 00 00 00</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-snapchat"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <p class="copyright">Bandmates.© 2024</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer();?>
</body>

</html>



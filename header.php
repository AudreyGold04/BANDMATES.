<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BandMates</title>
    <?php wp_head() ?>
</head>
<body>
    <header class="header" id="navbar">
        <div>
            <a href="<?php echo get_home_url(); ?>">
                <img class="logo" src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png">
            </a>
        </div>
        <div class="nav">
            <a class="btn">FAQ</a>
            <a class="btn">Support</a>
        </div>
    </header>
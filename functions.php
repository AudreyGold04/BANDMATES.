<?php
add_theme_support('title-tag');

function main_style() {
    echo "<script>console.log('Page actuelle ID : " . get_the_ID() . "');</script>";
    echo "<script>console.log('Permalien actuel : " . get_permalink() . "');</script>";
    echo "<script>console.log('on entre dans la fonction pour le style et le js');</script>";
    wp_enqueue_style('bandmates_style', get_stylesheet_directory_uri() . '/style.css', [], false);
    if (is_page(73)) {
        echo "<script>console.log('on voit que la page actuelle est l'accueil');</script>";
        // echo "<script>console.log('CSS Accueil : " . get_stylesheet_directory_uri() . "/bandmates_style_home.css');</script>";
        // echo "<script>console.log('JS Accueil : " . get_stylesheet_directory_uri() . "/bandmates_script_home.js');</script>";
        echo "<script>console.log('CSS Accueil : \"" . get_stylesheet_directory_uri() . "/bandmates_style_home.css\"');</script>";
        echo "<script>console.log('JS Accueil : \"" . get_stylesheet_directory_uri() . "/bandmates_script_home.js\"');</script>";
        wp_enqueue_style('bandmates_style_home', get_stylesheet_directory_uri() . '/bandmates_style_home.css', [], false);
        wp_enqueue_script('bandmates_script', get_stylesheet_directory_uri() . '/bandmates_script_home.js', [], false, true);
    } else if (is_page(60)) {
        echo "<script>console.log('on voit que la page actuelle est le form');</script>";
        echo "<script>console.log('CSS Formulaire : " . get_template_directory_uri() . "/css/form.css');</script>";
        echo "<script>console.log('JS Formulaire : " . get_template_directory_uri() . "/js/form.js');</script>";
        wp_enqueue_style('style-form', get_template_directory_uri() . '/css/form.css', [], false);
        wp_enqueue_script('script-form', get_template_directory_uri() . '/js/form.js', [], false, true);
    }
}

add_action('wp_enqueue_scripts', 'main_style');
?>
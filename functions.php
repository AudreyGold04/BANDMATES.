<?php
add_theme_support('title-tag');

function main_style() {
    // echo "<script>console.log('Page actuelle ID : " . get_the_ID() . "');</script>";
    // echo "<script>console.log('Permalien actuel : " . get_permalink() . "');</script>";
    // echo "<script>console.log('on entre dans la fonction pour le style et le js');</script>";   
    wp_enqueue_style('boostrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), '5.3.0');
    wp_enqueue_script('bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array('jquery'), '5.3.0', true);
    wp_enqueue_style('bandmates_style', get_stylesheet_directory_uri() . '/style.css', [], false);
    if (is_page(2)) {
        // echo "<script>console.log('on voit que la page actuelle est l'accueil');</script>";
        // echo "<script>console.log('CSS Accueil : " . get_stylesheet_directory_uri() . "/bandmates_style_home.css');</script>";
        // echo "<script>console.log('JS Accueil : " . get_stylesheet_directory_uri() . "/bandmates_script_home.js');</script>";
        // echo "<script>console.log('CSS Accueil : \"" . get_stylesheet_directory_uri() . "/bandmates_style_home.css\"');</script>";
        // echo "<script>console.log('JS Accueil : \"" . get_stylesheet_directory_uri() . "/bandmates_script_home.js\"');</script>";
        wp_enqueue_style('bandmates_style_home', get_stylesheet_directory_uri() . '/bandmates_style_home.css', [], false);
        wp_enqueue_script('bandmates_script', get_stylesheet_directory_uri() . '/bandmates_script_home.js', [], false, true);
    } else if (is_page(11)) {
        // echo "<script>console.log('on voit que la page actuelle est le form');</script>";
        // echo "<script>console.log('CSS Formulaire : " . get_template_directory_uri() . "/css/form.css');</script>";
        // echo "<script>console.log('JS Formulaire : " . get_template_directory_uri() . "/js/form.js');</script>";
        wp_enqueue_style('style-form', get_template_directory_uri() . '/css/form.css', [], false);
        wp_enqueue_script('script-form', get_template_directory_uri() . '/js/form.js', [], false, true);
    } else if (is_page(9)) {
        // echo "<script>console.log('on voit que la page actuelle est le dashboard');</script>";
        // echo "<script>console.log('CSS dashboard : " . get_template_directory_uri() . "/css/form.css');</script>";
        // echo "<script>console.log('JS dashboard : " . get_template_directory_uri() . "/js/form.js');</script>";
        wp_enqueue_style('style-form', get_template_directory_uri() . '/css/dashboard.css', [], false);
        wp_enqueue_script('script-form', get_template_directory_uri() . '/js/dashboard.js', [], false, true);
    } else if (is_page(72)) {
        // echo "<script>console.log('on voit que la page actuelle est la faq');</script>";
        // echo "<script>console.log('CSS faq : " . get_template_directory_uri() . "faq.css');</script>";
        wp_enqueue_style('style-faq', get_template_directory_uri() . '/faq.css', [], false);
        wp_enqueue_script('script-faq', get_template_directory_uri() . '/faq.js', [], false, true);
    }
}

function custom_enqueue_scripts() {
    if (is_page('user')) {
        // echo "<script>console.log('on voit que la page actuelle est le user_profile');</script>";
        wp_enqueue_style('ultimate-member', plugins_url('ultimate-member/assets/css/style.css'), [], '1.0');
    }
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
add_action('wp_enqueue_scripts', 'main_style');
?>
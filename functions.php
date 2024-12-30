<?php
add_theme_support('title-tag');

function main_style() {
    wp_enqueue_style('boostrap-style', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), '5.3.0');
    wp_enqueue_script('bootstrap-script', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array('jquery'), '5.3.0', true);
    wp_enqueue_style('bandmates_style', get_stylesheet_directory_uri() . '/style.css', [], false);
    wp_enqueue_style('footer-style', get_stylesheet_directory_uri() . '/footer.css', [], false);
    if (is_page(2)) {
        wp_enqueue_style('bandmates_style_home', get_stylesheet_directory_uri() . '/bandmates_style_home.css', [], false);
        wp_enqueue_script('bandmates_script', get_stylesheet_directory_uri() . '/bandmates_script_home.js', [], false, true);
    } else if (is_page(11)) {
        wp_enqueue_style('style-form', get_template_directory_uri() . '/css/form.css', [], false);
        wp_enqueue_script('script-form', get_template_directory_uri() . '/js/form.js', [], false, true);
    } else if (is_page(9)) {
        wp_enqueue_style('style-form', get_template_directory_uri() . '/css/dashboard.css', [], false);
        wp_enqueue_script('script-form', get_template_directory_uri() . '/js/dashboard.js', [], false, true);
    } else if (is_page(72)) {
        wp_enqueue_style('style-faq', get_template_directory_uri() . '/faq.css', [], false);
        wp_enqueue_script('script-faq', get_template_directory_uri() . '/faq.js', [], false, true);
    } else if (is_page(79)) {
        wp_enqueue_style('style-officiel', get_template_directory_uri() . '/style-officiel.css', [], false);
    } else if (is_page(87)) {
        wp_enqueue_style('style-404', get_template_directory_uri() . '/style-404.css', false);
    } else if (is_page('support')) {
        wp_enqueue_style('style-support', get_template_directory_uri() . '/support.css', false);
    }
}

function custom_enqueue_scripts() {
    if (is_page('user')) {
        wp_enqueue_style('ultimate-member', plugins_url('ultimate-member/assets/css/style.css'), [], '1.0');
    }
}

function redirection_apres_connexion($redirect_to, $request, $user) {
    if (isset($user->roles) && is_array($user->roles)) {
        return home_url('/dashboard');
    }
    return $redirect_to;
}

add_filter('login_redirect', 'redirection_apres_connexion', 10, 3);
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
add_action('wp_enqueue_scripts', 'main_style');
?>
<?php
add_theme_support('title-tag');

function bandmates_enqueue_scripts() {
    wp_register_style('bandmates_style', get_stylesheet_directory_uri() . '/bandmates_style.css', []);
    wp_register_style('bandmates_style_home', get_stylesheet_directory_uri() . '/bandmates_style_home.css', []);
    wp_register_script('bandmates_script', get_stylesheet_directory_uri() . '/bandmates_script_home.js', [], false, true);
    wp_enqueue_style('bandmates_style');
    wp_enqueue_style('bandmates_style_home');
    wp_enqueue_script('bandmates_script');
    // <script src="/wordpress/wp-content/themes/BANDMATES./script.js"></script>
    // wp_enqueue_script('bandmates-script', get_template_directory_uri() . '/script.js');
}

add_action('wp_head', 'bandmates_enqueue_scripts');?>

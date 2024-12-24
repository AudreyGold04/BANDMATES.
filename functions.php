<?php
function bandmates_enqueue_scripts() {
    wp_enqueue_style('bandmates-style', get_stylesheet_uri());
    wp_enqueue_script('bandmates-script', get_template_directory_uri() . '/script.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'bandmates_enqueue_scripts');?>

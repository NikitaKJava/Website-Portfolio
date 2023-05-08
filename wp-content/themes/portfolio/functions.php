<?php

// The right way for adding styles and scripts to the page
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>
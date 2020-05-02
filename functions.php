<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}

/**
 * Custom Gutenberg blocks
 */
require get_stylesheet_directory() . '/inc/gutenberg.php';
require get_stylesheet_directory() . '/inc/portfolio.php';
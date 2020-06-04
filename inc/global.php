<?php

register_sidebar( array(
    'name' => 'Footer column 1',
    'id' => 'footer-column-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget__title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer column 2',
    'id' => 'footer-column-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget__title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => 'Footer column 3',
    'id' => 'footer-column-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget__title">',
    'after_title' => '</h3>',
) );


function custom_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


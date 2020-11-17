<?php
function devtheme_setup() {
    load_theme_textdomain('devtheme');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'devtheme_setup');

// Assets
 function devtheme_stylesheet() {
    //  wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string )
     wp_enqueue_style('devtheme_main_style', get_stylesheet_uri(  ), '', '1.0.0');
 }

//  add_action( $tag:string, $function_to_add:callable, $priority:integer, $accepted_args:integer )
 add_action('wp_enqueue_scripts', 'devtheme_stylesheet');
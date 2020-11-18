<?php
function devtheme_setup() {
    load_theme_textdomain('devtheme');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'devtheme_setup');

// Assets
 function devtheme_stylesheet() {
     wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
     wp_enqueue_style('devtheme_main_style', get_stylesheet_uri(  ), '', '1.0.0');
 }

 add_action('wp_enqueue_scripts', 'devtheme_stylesheet');

//  Widget
function devtheme_widgets() {
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar'
    ));
}
add_action('widgets_init', 'devtheme_widgets');
<?php
function load_scripts() {
    wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    wp_enqueue_style( 'custom-css',  get_template_directory_uri() . '/css/stylesheet.css', [], time(), 'all' );
    wp_enqueue_script( 'lottie-script', '//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js');

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function load_navigation(){
    register_nav_menus();
}
add_action('after_setup_theme','load_navigation');
?>
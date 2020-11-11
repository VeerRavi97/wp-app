<?php
function newtheme_scripts() {
    wp_enqueue_script( 'lottie-script', '//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.3/lottie.min.js');
    wp_enqueue_script('custom-js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    wp_enqueue_style( 'custom-css',  get_template_directory_uri() .'/assets/css/custom.css' );
   
}
add_action( 'wp_enqueue_scripts', 'newtheme_scripts' );

function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');
<?php

function cargar_estilos() {
   wp_enqueue_style('app', get_stylesheet_directory_uri() . "/css/app.css");
   wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . "/bower_components/font-awesome/css/font-awesome.min.css");
}


function cargar_scripts() {

   wp_enqueue_script('jquery', get_stylesheet_directory_uri() . "/bower_components/jquery/dist/jquery.min.js", array('jquery') );
   wp_enqueue_script('what-input', get_stylesheet_directory_uri() . "/bower_components/what-input/what-input.js", array('jquery') );
   wp_enqueue_script('foundation', get_stylesheet_directory_uri() . "/bower_components/foundation-sites/dist/foundation.js", array('jquery') );
   wp_enqueue_script('imgLiquid', get_stylesheet_directory_uri() . "/bower_components/imgLiquid/js/imgLiquid-min.js", array('jquery') );
   wp_enqueue_script('js_utils', get_stylesheet_directory_uri() . "/recursos/js_utils/dist/js/js_utils.min.js", array('jquery') );
   wp_enqueue_script('blazy', get_stylesheet_directory_uri() . "/bower_components/bLazy/blazy.min.js" );
   wp_enqueue_script('app', get_stylesheet_directory_uri() . "/js/app.js", array('jquery','blazy') );

}

add_action('wp_enqueue_scripts', 'cargar_scripts' );
add_action('wp_enqueue_scripts', 'cargar_estilos' );

?>

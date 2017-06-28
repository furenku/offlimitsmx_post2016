<?php


include_once 'include/wp-mods.php';
include_once 'include/cargar-recursos.php';

function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Menú Principal' )
    )
  );
}
add_action( 'init', 'register_menus' );
?>

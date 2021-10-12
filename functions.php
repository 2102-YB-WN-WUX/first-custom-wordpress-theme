<?php

function custom_theme_assets() {
   wp_enqueue_style( 'my-custom-style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => 'Primary Menu' ] );

?>
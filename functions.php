<?php

// turn on theme support
add_theme_support('post-thumbnails');

function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

register_nav_menus(['primary'=> 'Tims Primary Menu']);

// customise the excerpt length
function new_excerpt_length() {
  return 20;
}

// use a filter hook to modify Wordpress function at runtime
add_filter('excerpt_length', 'new_excerpt_length');

// creating our new custom post type
function create_fruit_posttype() {
  // set up the arguments
  $args = array(
    'labels' => array(
      //name of the post type
      'name' => 'Fruit',
      'singular_name' => 'Fruit'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-carrot',
    'supports' => array('title', 'editor', 'thumbnail')
  );
  // Within our function, we need to register the post type
  register_post_type('fruit', $args);
}

add_action('init','create_fruit_posttype');

// creating our new custom post type
function create_sports_posttype() {
  // set up the arguments
  $args = array(
    'labels' => array(
      //name of the post type
      'name' => 'Sports',
      'singular_name' => 'Sport'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-carrot',
    'supports' => array('title', 'editor', 'thumbnail')
  );
  // Within our function, we need to register the post type
  register_post_type('sports', $args);
}

add_action('init','create_sports_posttype');

?>

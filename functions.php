<?php
function theme_enqueue_scripts() {
  wp_enqueue_style(  'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
  wp_enqueue_style(  'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style(  'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
  wp_enqueue_style(  'Style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.3.1', true );
  wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts');

function custom_theme_setup() {


  add_theme_support('menus');
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video'));

  register_nav_menu('top_navigation_bar', 'Custom Top Nav');
}

add_action('init', 'custom_theme_setup');
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header', $args );

//Gutenberg Blocks
add_theme_support( 'wp-block-styles' );
add_theme_support('post-thumbnails');

//Custom Post Types
require get_template_directory() . '/inc/custom-post-types/cpt-services.php';
require get_template_directory() . '/inc/custom-post-types/cpt-testimonials.php';
require get_template_directory() . '/inc/custom-post-types/cpt-package-post.php';
require get_template_directory() . '/inc/custom-post-types/cpt-large-image-post-type.php';

//Custom Inc
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/customizer.php';



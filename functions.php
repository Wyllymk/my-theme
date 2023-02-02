<?php
// Enqueue Styles and scripts
function custom_enqueue_scripts(){
    wp_enqueue_style('customstyle', get_template_directory_uri(). '/assets/css/custom.css', array(), '1.0.0', 'all'); //styles hook

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_script('customscripts', get_template_directory_uri(). '/assets/js/scripts.js', array(), '1.0.0', true); //scripts hook

    wp_register_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array(), '5.3.0', true);
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts','custom_enqueue_scripts');

// Function initializing menus admin dashboard

function custom_theme_menus(){
    add_theme_support('menus');

    register_nav_menu('primary', 'Main Menu');
    register_nav_menu('secondary', 'Footer Menu');
}
add_action('init','custom_theme_menus');

add_theme_support('post-thumbnails');

add_theme_support( 'title-tag' );

add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );

/**
 * Customize the title for the home page, if one is not set.
 */
function wpdocs_hack_wp_title_for_home( $title ){
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' );
  }
  return $title;
}
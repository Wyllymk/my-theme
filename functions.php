<?php
require get_template_directory(). '/inc/function-admin.php';
// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');
// Enqueue Styles and scripts
function custom_enqueue_scripts(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", array(), '5.3.0', true);
    wp_enqueue_script('bootstrap-js');

	wp_enqueue_script('customscripts', get_template_directory_uri(). '/assets/js/scripts.js', array(), '1.0.0', true); //scripts hook

	wp_enqueue_style('customstyle', get_template_directory_uri(). '/assets/css/custom.css', array(), '1.0.0', 'all'); //styles hook
}
add_action('wp_enqueue_scripts','custom_enqueue_scripts');

// Function initializing menus admin dashboard

function custom_theme_menus(){
    add_theme_support('menus');

    register_nav_menu('primary', 'Main Menu');
    register_nav_menu('secondary', 'Footer Menu');
}
add_action('init','custom_theme_menus');

function custom_theme_setup() {
    add_theme_support( 'html5', array( 'comment-list' ) );
	
	add_theme_support('post-thumbnails');

	add_theme_support( 'title-tag' );

	add_theme_support('custom-header');

	add_theme_support('custom-background');

	add_theme_support('post-formats', array('aside', 'image', 'video'));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );




function custom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'custom_widgets_init');
<?php
	
// Register Styles	
function pd_css() {
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, '3.0.1' );
	wp_register_style( 'fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat', false, '1.2' );
	wp_register_style( 'fullPage', get_template_directory_uri() . '/css/fullPage.css', false, '2.4.3' );
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'fullPage' );
}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'pd_css' );

// Register Script
function pd_scripts() {

	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', false, '2.8.3', false );
	wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, '1.11.1', true );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui.js', array( 'jquery' ), '1.11.1', true );
	wp_enqueue_script( 'jqueryui' );

	wp_register_script( 'fullPage', get_template_directory_uri() . '/js/fullPage.js', array( 'jquery' ), '2.4.4', true );
	wp_enqueue_script( 'fullPage' );

	wp_register_script( 'main', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'main' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'pd_scripts' );

// Register Theme Features
function pd_init()  {
	remove_action( 'wp_head', 'wp_generator' );
	show_admin_bar( false );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 700, 320, true );
	add_image_size( 'featured', 700, 320, true );
	add_image_size( 'article', 343, 120, true );
	add_image_size( 'speaker', 290, 290, true );
	$markup = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', );
	add_theme_support( 'html5', $markup );	
}
add_action( 'after_setup_theme', 'pd_init' );

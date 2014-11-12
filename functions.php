<?php
	
// Register Styles	
function pd_css() {
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, '3.0.1' );
	wp_register_style( 'fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat', false, '1.2' );
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'fonts' );
}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'pd_css' );

// Register Script
function pd_scripts() {
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', false, '2.8.3', false );
	wp_enqueue_script( 'modernizr' );
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

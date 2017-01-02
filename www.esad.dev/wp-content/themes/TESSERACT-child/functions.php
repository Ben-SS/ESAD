<?php

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

function custom_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', ( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
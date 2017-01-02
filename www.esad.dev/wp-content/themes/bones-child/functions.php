<?php

function enqueue_styles() {

	// bootstrap
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . './css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . './js/bootstrap.min.js', array(), '3.0.0', true );

	// bxslider
	wp_enqueue_style( 'bxslider css', get_stylesheet_directory_uri() . './lib/jquery.bxslider.css' );
	wp_enqueue_script( 'bxslider js', get_stylesheet_directory_uri() . './js/jquery.bxslider.min.js', array('jquery'), '4.1.2', true );

	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'./style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'./style.css', array('parent-theme'));

	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . './js/custom.js', ( 'jquery' ), '1.0.0', true );
	
}

add_action('wp_enqueue_scripts','enqueue_styles');

function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

add_theme_support('html5', array('search-form'));

function bones_child_widgets_init(){

	register_sidebar( array(
		'name'          => __( 'Recent Sidebar', 'bonestheme' ),
		'id'            => 'recent-sidebar',
		'description'   => 'Sidebar to show recent posts',
	    'class'         => '',
		'before_widget' => '<div id="recent-entries">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'


	));
	register_sidebar( array(
		'name'          => __( 'Calendar Sidebar', 'bonestheme' ),
		'id'            => 'calendar-sidebar',
		'description'   => 'Sidebar to show upcoming events',
	    'class'         => '',
		'before_widget' => '<div id="upcoming-events">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
	register_sidebar( array(
		'name'          => __( 'Share Sidebar', 'bonestheme' ),
		'id'            => 'share-sidebar',
		'description'   => 'Sidebar to share content',
	    'class'         => '',
		'before_widget' => '<div id="share-buttons">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
	register_sidebar( array(
		'name'          => __( 'Follow Sidebar', 'bonestheme' ),
		'id'            => 'follow-sidebar',
		'description'   => 'Sidebar to follow ESAD',
	    'class'         => '',
		'before_widget' => '<div id="follow-buttons">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
	register_sidebar( array(
		'name'          => __( 'Translate Sidebar', 'bonestheme' ),
		'id'            => 'translate-sidebar',
		'description'   => 'Sidebar to transalte',
	    'class'         => '',
		'before_widget' => '<div id="translate-buttons">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}

add_action('widgets_init','bones_child_widgets_init');
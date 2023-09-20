<?php

define('ROOT', get_template_directory_uri());
define('IMG', ROOT . '/img');

add_theme_support( 'post-thumbnails' );

include('include/clear.php');

include('include/consultAction.php');
include('include/consultAdmin.php');

include('include/subscribeAction.php');
include('include/subscribeAdmin.php');

add_theme_support( 'menus' );

function front_scripts() {

	wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-global.css');
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-global.js', false, false, 'in_footer');

// Home page
	if( is_page_template( array( 'templates/page-home.php' ) ) ){
		wp_enqueue_style( 'styles-home', get_template_directory_uri().'/css/styles-home.css');
		wp_enqueue_script( 'scripts-home', get_template_directory_uri() . '/js/scripts-home.js', false, false, 'in_footer');
	}

// Contacts page
	if( is_page_template( array( 'templates/page-contacts.php' ) ) ){
		wp_enqueue_style( 'styles-contacts', get_template_directory_uri().'/css/styles-contacts.css');
	}

// 404 page
	if( is_404() ){
		wp_enqueue_style( 'styles-404', get_template_directory_uri().'/css/styles-404.css');
		wp_enqueue_script( 'scripts-404', get_template_directory_uri() . '/js/scripts-404.js', false, false, 'in_footer');
	}

// single page
	if( is_page() ){
		wp_enqueue_style( 'styles-single', get_template_directory_uri().'/css/styles-page.css');
	}
}
add_action( 'wp_enqueue_scripts', 'front_scripts' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function front_variables(){
	wp_localize_script( 'scripts', 'data',
		array(
			'ajax' => admin_url('admin-ajax.php'),
			'frontPage' => home_url(),
			'isFrontPage' => is_front_page(),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'front_variables' );

add_action('admin_head', 'admin_styles');
function admin_styles() {
	wp_register_style( 'admin_styles', get_template_directory_uri() . '/css/styles-admin.css', false, '1.0.0' );
	wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/css/styles-admin.css', false, '1.0.0' );
}

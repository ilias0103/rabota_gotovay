<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
});

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'меню в шапке' );
}

add_theme_support( 'custom-logo' );
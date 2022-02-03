<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script(
		'app',
		get_stylesheet_directory_uri() . '/script.js',
		[ 'jquery' ],
		filemtime( get_stylesheet_directory() . '/script.js' )
	);
	wp_enqueue_style(
		'app',
		get_stylesheet_directory_uri() . '/style.css',
		[],
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
} );
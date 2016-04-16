<?php 

function kevinblog_script_enqueue() {
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/kevinblog.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/kevinblog.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'kevinblog_script_enqueue');

function kevinblog_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Nav');
	register_nav_menu('secondary', 'Footer Nav');
}


add_action('init', 'kevinblog_theme_setup');

?>
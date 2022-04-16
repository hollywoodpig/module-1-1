<?php
	// assets

	add_action('wp_enqueue_scripts', 'assets');

	function assets() {
		// scripts
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');

		// styles

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	// page title

	add_theme_support('title-tag');

<?php

	// assets

	function assets() {

		// scripts
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');

		// styles

		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'assets');

	// features

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// menu

	function menu() {
		register_nav_menu('main_menu', 'Главное меню');
	}

	add_action('after_setup_theme', 'menu');

	// news taxonomy

	function flat_posts() {
		register_taxonomy('category', array());
		register_taxonomy('post_tag', array());
	}

	add_action('init', 'flat_posts');

	function rename_posts($args) {
		foreach($args as $key => $label){
			$args->{$key} = str_replace([__('Posts'), __('Post')], __('Новости'), $label);
		}

		return $args;
	}

	add_filter('post_type_labels_post', 'rename_posts');

	// teachers taxonomy

	function teachers_taxonomy() {
		register_post_type('teachers', [
			'label' => 'Преподаватели',
			'supports' => ['title', 'excerpt', 'thumbnail'],
			'hierarchical' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'can_export' => true
		]);
	}
	 
	add_action('init', 'teachers_taxonomy', 0);

	// schools taxonomy

	function schools_taxonomy() {
		register_post_type('school', [
			'label' => 'Наши школы',
			'supports' => ['title', 'excerpt', 'thumbnail'],
			'hierarchical' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'can_export' => true
		]);
	}
	 
	add_action('init', 'schools_taxonomy', 0);

	// pagination add class

	function add_pagination_class() {
		return 'class="btn"';
	}

	add_filter('next_posts_link_attributes', 'add_pagination_class');
	add_filter('previous_posts_link_attributes', 'add_pagination_class');

	// socials

	function social_sidebar() {
		register_sidebar([
			'name' => 'main_sidebar',
			'id' => 'main_sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		]);
	}

	add_action('widgets_init', 'social_sidebar');

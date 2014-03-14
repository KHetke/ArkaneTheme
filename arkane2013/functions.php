<?php
/**
 * Arkane2013
 */
 
	add_action('init', 'register_my_menus');
	 
	function register_my_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __('Primary Menu'),
				'secondary-menu' => __('Secondary Menu'),
				'tertiary-menu' => __('Tertiary Menu')
			)
		);
	}
	
	// Restrict the Length of excerpts
	function custom_excerpt_length( $length ) {
		return 50;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
 ?>
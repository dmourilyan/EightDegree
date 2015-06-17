<?php
/*
Plugin Name: Eight Degree Custom Posts
Plugin URI: http://www.webdingo.net/eightdegree/
Description: Custom post types for Eight Degree
Version: 1.0.0
Author: WebDingo
Author URI: http://www.webdingo.net
*/
function EightDegree_load_custom_post_textdomain() {
	$plugin_dir = basename(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR ;
	load_plugin_textdomain( 'eightdegree-custom-posts', false, $plugin_dir );
}
add_action('plugins_loaded', 'EightDegree_load_custom_post_textdomain');

/*-----------------------------------------------------------------------------------*/
/*	Flex Slider
/*-----------------------------------------------------------------------------------*/
if (!function_exists('eightdegree_custom_post_flex_slider')) {
	function eightdegree_custom_post_flex_slider() {
		$labels = array(
			'name'               => __( 'Flex Sliders', 'eightdegree-custom-posts' ),
			'singular_name'      => __( 'Flex Slider', 'eightdegree-custom-posts' ),
			'add_new'            => __( 'Add New', 'eightdegree-custom-posts' ),
			'add_new_item'       => __( 'Add New Slide', 'eightdegree-custom-posts' ),
			'edit_item'          => __( 'Edit Slide', 'eightdegree-custom-posts' ),
			'new_item'           => __( 'New Slide' , 'eightdegree-custom-posts'),
			'all_items'          => __( 'All Slides', 'eightdegree-custom-posts' ),
			'view_item'          => __( 'View Slide', 'eightdegree-custom-posts' ),
			'search_items'       => __( 'Search Sliders', 'eightdegree-custom-posts' ),
			'not_found'          => __( 'No sliders found', 'eightdegree-custom-posts' ),
			'not_found_in_trash' => __( 'No sliders found in the Trash', 'eightdegree-custom-posts' ), 
			'menu_name'          => __( 'Flex Slider' , 'eightdegree-custom-posts' )
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __('Flex Slider Slides', 'eightdegree-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'flex_slider', $args );	
	}
	add_action( 'init', 'eightdegree_custom_post_flex_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Super Slider
/*-----------------------------------------------------------------------------------*/

if (!function_exists('eightdegree_custom_post_super_slider')) {
	function eightdegree_custom_post_super_slider() {
		$labels = array(
			'name'               => __( 'SuperSlides', 'eightdegree-custom-posts' ),
			'singular_name'      => __( 'SuperSlides Slide', 'eightdegree-custom-posts' ),
			'add_new'            => __( 'Add New', 'eightdegree-custom-posts' ),
			'add_new_item'       => __( 'Add New Slide', 'eightdegree-custom-posts' ),
			'edit_item'          => __( 'Edit Slide', 'eightdegree-custom-posts' ),
			'new_item'           => __( 'New Slide', 'eightdegree-custom-posts' ),
			'all_items'          => __( 'All Slides', 'eightdegree-custom-posts' ),
			'view_item'          => __( 'View Slide', 'eightdegree-custom-posts' ),
			'search_items'       => __( 'Search Slide', 'eightdegree-custom-posts' ),
			'not_found'          => __( 'No sliders found', 'eightdegree-custom-posts' ),
			'not_found_in_trash' => __( 'No sliders found in the Trash', 'eightdegree-custom-posts' ), 
			'menu_name'          => __( 'SuperSlides', 'eightdegree-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __('Super Slider / Home Page Slider Slides', 'eightdegree-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'super_slider', $args );	
	}
	add_action( 'init', 'eightdegree_custom_post_super_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Portfolio
/*-----------------------------------------------------------------------------------*/

if (!function_exists('eightdegree_custom_post_portfolio')) {
	function eightdegree_custom_post_portfolio() {
		$labels = array(
			'name'               => __( 'Portfolio Items', 'eightdegree-custom-posts' ),
			'singular_name'      => __( 'Portfolio Item', 'eightdegree-custom-posts' ),
			'add_new'            => __( 'Add New', 'eightdegree-custom-posts' ),
			'add_new_item'       => __( 'Add New Item', 'eightdegree-custom-posts' ),
			'edit_item'          => __( 'Edit Portfolio Item', 'eightdegree-custom-posts' ),
			'new_item'           => __( 'New Portfolio Item', 'eightdegree-custom-posts' ),
			'all_items'          => __( 'All Items', 'eightdegree-custom-posts' ),
			'view_item'          => __( 'View Item', 'eightdegree-custom-posts' ),
			'search_items'       => __( 'Search Portfolios', 'eightdegree-custom-posts' ),
			'not_found'          => __( 'No items found', 'eightdegree-custom-posts' ),
			'not_found_in_trash' => __( 'No items found in the Trash', 'eightdegree-custom-posts' ), 
			'menu_name'          => __( 'Portfolio', 'eightdegree-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __( 'Portfolio Items', 'eightdegree-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'portfolios', $args );	
	}
	add_action( 'init', 'eightdegree_custom_post_portfolio' );
}

/*-----------------------------------------------------------------------------------*/
/*	Team
/*-----------------------------------------------------------------------------------*/

if (!function_exists('eightdegree_custom_post_team')) {
	function eightdegree_custom_post_team() {
		$labels = array(
			'name'               => __( 'Team', 'eightdegree-custom-posts' ),
			'singular_name'      => __( 'Team Member', 'eightdegree-custom-posts' ),
			'add_new'            => __( 'Add New', 'eightdegree-custom-posts' ),
			'add_new_item'       => __( 'Add New Team Member', 'eightdegree-custom-posts' ),
			'edit_item'          => __( 'Edit Team Member', 'eightdegree-custom-posts' ),
			'new_item'           => __( 'New Team Member', 'eightdegree-custom-posts' ),
			'all_items'          => __( 'All Team Members', 'eightdegree-custom-posts' ),
			'view_item'          => __( 'View Team Member', 'eightdegree-custom-posts' ),
			'search_items'       => __( 'Search Team Members', 'eightdegree-custom-posts' ),
			'not_found'          => __( 'No members found', 'eightdegree-custom-posts' ),
			'not_found_in_trash' => __( 'No members found in the Trash', 'eightdegree-custom-posts' ), 
			'menu_name'          => __( 'Team', 'eightdegree-custom-posts')
		);
		$args = array(
			'labels'        => $labels,
			'description'   => __( 'Team Members', 'eightdegree-custom-posts'),
			'public'        => true,
			'menu_position' => null,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'exclude_from_search' => true,
		);
		register_post_type( 'team', $args );	
	}
	add_action( 'init', 'eightdegree_custom_post_team' );
}


/*-----------------------------------------------------------------------------------*/
/*	Taxonomies
/*-----------------------------------------------------------------------------------*/

if (!function_exists('EightDegree_create_taxonomies')) {
	function EightDegree_create_taxonomies() {
	    register_taxonomy(
	        'flex_slider_category',
	        'flex_slider',
	        array(
	            'labels' => array(
	                'name' => __('Flex Slider Categories', 'eightdegree-custom-posts'),
	                'add_new_item' => __( 'Add New Flex Slider Category', 'eightdegree-custom-posts'),
	                'new_item_name' => __( 'New Flex Slider Category', 'eightdegree-custom-posts'),
	            ),
	            'show_ui' => true,
	            'show_tagcloud' => false,
	            'hierarchical' => true,
	        )
	    );
	    register_taxonomy(
	        'portfolio_item_category',
	        'portfolios',
	        array(
	            'labels' => array(
	                'name' => __( 'Portfolio Categories', 'eightdegree-custom-posts'),
	                'add_new_item' => __( 'Add New Portfolio Category', 'eightdegree-custom-posts'),
	                'new_item_name' => __( 'New Portfolio Category', 'eightdegree-custom-posts'),
	            ),
	            'show_ui' => true,
	            'show_tagcloud' => false,
	            'hierarchical' => true
	        )
	    );
	}
	add_action( 'init', 'EightDegree_create_taxonomies', 0 );
}

?>
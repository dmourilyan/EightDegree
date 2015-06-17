<?php
/*
Plugin Name: Eight Degree Shortcodes
Plugin URI: http://www.webdingo.net/eightdegree/
Description: Shortcodes and generator for Eight Degree
Version: 1.1.2
Author: WebDingo
Author URI: http://www.webdingo.net
*/


class eightdegreeShortcodes {

    function __construct() 
    {	
    	require_once( plugin_dir_path( __FILE__ ) .'shortcodes.php' );
    	define('EIGHTDEGREE_TINYMCE_URI', plugin_dir_url( __FILE__ ) .'tinymce');
		define('EIGHTDEGREE_TINYMCE_DIR', plugin_dir_path( __FILE__ ) .'tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));



	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{
		function load_shortcodes_textdomain() {
			$plugin_dir = basename(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR ;
			load_plugin_textdomain( 'eightdegree-shortcodes', false, $plugin_dir );
		}
		add_action('plugins_loaded', 'load_shortcodes_textdomain');

		if( ! is_admin() )
		{
			wp_enqueue_style( 'eightdegree-shortcodes', plugin_dir_url( __FILE__ ) . 'shortcodes.css' );
			wp_enqueue_script('googlemap_api', 'https://maps.googleapis.com/maps/api/js?sensor=false&v=3.13', array('jquery'), '1.0', true);
			wp_enqueue_script( 'eightdegree-shortcodes-plugins', plugin_dir_url( __FILE__ ) . 'js/eightdegree-shortcodes-plugins.js', array('jquery'),'1.0', true );
			wp_enqueue_script( 'eightdegree-shortcodes-script', plugin_dir_url( __FILE__ ) . 'js/eightdegree-shortcodes-script.js', array('jquery','eightdegree-shortcodes-plugins', 'googlemap_api' ),'1.0', true );

	

		}
		
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}

	}




	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	

	function add_rich_plugins( $plugin_array ){
		if ( floatval(get_bloginfo('version')) >= 3.9){
			$plugin_array['eightdegreeShortcodes'] = EIGHTDEGREE_TINYMCE_URI . '/plugin.js';
		}
		else{
			$plugin_array['eightdegreeShortcodes'] = EIGHTDEGREE_TINYMCE_URI . '/plugin.old.js'; // For old versions of WP
		}
		return $plugin_array;
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function register_rich_buttons( $buttons )
	{
		array_push( $buttons, "|", 'eightdegree_button' );
		return $buttons;
	}
	
	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		// css
		wp_enqueue_style( 'eightdegree-popup', EIGHTDEGREE_TINYMCE_URI . '/css/popup.css', false, '1.0', 'all' );

		
		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script( 'jquery-livequery', EIGHTDEGREE_TINYMCE_URI . '/js/jquery.livequery.js', false, '1.1.1', false );
		wp_enqueue_script( 'jquery-appendo', EIGHTDEGREE_TINYMCE_URI . '/js/jquery.appendo.js', false, '1.0', false );
		wp_enqueue_script( 'base64', EIGHTDEGREE_TINYMCE_URI . '/js/base64.js', false, '1.0', false );
		

		if ( floatval(get_bloginfo('version')) >= 3.9){
			wp_enqueue_script( 'eightdegree-popup', EIGHTDEGREE_TINYMCE_URI . '/js/popup.js', false, '1.0', false );
		}
		else{
			wp_enqueue_script( 'eightdegree-popup', EIGHTDEGREE_TINYMCE_URI . '/js/popup.old.js', false, '1.0', false );
			//For older versions of WP
		}
		
		wp_localize_script( 'jquery', 'eightdegreeShortcodes', array('plugin_folder' => WP_PLUGIN_URL .'/eightdegree-shortcodes') );



		
	}
    
}
$eightdegree_shortcodes = new eightdegreeShortcodes();

?>
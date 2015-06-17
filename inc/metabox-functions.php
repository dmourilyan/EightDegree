<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';


	$meta_boxes[] = array(
		'id'         => 'page_metabox',
		'title'      => __('Page Options', 'eightdegree'),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
			'name' => __( 'Heading Style', 'eightdegree'),
				'desc' => __( 'Select Page Heading Style', 'eightdegree'),
				'id'   => $prefix . 'heading_style',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Standard', 'eightdegree'), 'value' => 'standard', ),
					array( 'name' => __('Underline', 'eightdegree'), 'value' => 'underline', ),
					array( 'name' => __('Boxed', 'eightdegree'), 'value' => 'boxed', ),
					array( 'name' => __('Border Bottom Top', 'eightdegree'), 'value' => 'borderbottomtop', ),
					array( 'name' => __('Border Left Right', 'eightdegree'), 'value' => 'borderleftright', ),
					array( 'name' => __('Dotted Bottom', 'eightdegree'), 'value' => 'dottedbottom', ),
					array( 'name' => __('Dotted Top', 'eightdegree'), 'value' => 'dottedtop', ),
					array( 'name' => __('Dotted Left Right', 'eightdegree'), 'value' => 'dottedleftright', ),
					array( 'name' => __('No Heading', 'eightdegree'), 'value' => 'noheading', ),
				),
			),
			array(
			'name' => __( 'Heading Alignment', 'eightdegree'),
				'desc' => __( 'Select Page Heading Text Alignment', 'eightdegree'),
				'id'   => $prefix . 'heading_align',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Left', 'eightdegree'), 'value' => 'left', ),
					array( 'name' => __('Center', 'eightdegree'), 'value' => 'center', ),
					array( 'name' => __('Right', 'eightdegree'), 'value' => 'right', ),
				),
			),
			array(
	            'name' => __('Heading Color', 'eightdegree'),
	            'desc' => __('Select headingd color', 'eightdegree'),
	            'id'   => $prefix . 'heading_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#000000'
	        ),		

			array(
	            'name' => __('Background Color', 'eightdegree'),
	            'desc' => __('Select page background color', 'eightdegree'),
	            'id'   => $prefix . 'background_colorpicker',
	            'type' => 'colorpicker',
				'std'  => '#ffffff'
	        ),
			array(
				'name' => __('Background Image', 'eightdegree'),
				'desc' => __('Upload a background image or enter an URL.', 'eightdegree'),
				'id'   => $prefix . 'background_image',
				'type' => 'file',
			),
			array(
				'name' => __('Page Description', 'eightdegree'),
				'id'   => $prefix . 'description_text',
				'type' => 'wysiwyg',
			),
			array(
			'name' => __( 'Description Position', 'eightdegree'),
				'desc' => __( 'Select Page Description Position', 'eightdegree'),
				'id'   => $prefix . 'description_position',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Below Title', 'eightdegree'), 'value' => 'below', ),
					array( 'name' => __('Above Title', 'eightdegree'), 'value' => 'above', ),
				),
			),


		
		),
	);

	$meta_boxes[] = array(
		'id'         => 'super_slider_metabox',
		'title'      => __('Slide Caption Scoll Animation Presets', 'eightdegree'),
		'pages'      => array( 'super_slider', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left

		'fields' => array(
			array(
				'name' => __( 'Animtion Style', 'eightdegree'),
				'id'   => $prefix . 'caption_animation',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('None', 'eightdegree'), 'value' => '', ),
					array( 'name' => __('Shrink', 'eightdegree'), 'value' => "data-0='transform:scale(1); top:0px;' data-1400='transform:scale(0.5); top:200px;' ", ),
					array( 'name' => __('Grow', 'eightdegree'), 'value' => "data-0='transform:scale(1); top:0px;' data-1400='transform:scale(2); top:-200px;' ", ),
					array( 'name' => __('Spin', 'eightdegree'), 'value' => "data-0='transform:rotate(0deg);' data-1400='transform:rotate(360deg);' ", ),
					array( 'name' => __('Parallax Down', 'eightdegree'), 'value' => "data-0='transform:translateY(0px);' data-1400='transform:translateY(400px);' ", ),

				),
			),
		)
	);

	$meta_boxes[] = array(
		'id'         => 'post_header_metabox',
		'title'      => __('Header Image', 'eightdegree'),
		'pages'      => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
				array(
				'name' => __('Header Image', 'eightdegree'),
				'desc' => __('Upload a header image or enter an URL.', 'eightdegree'),
				'id'   => $prefix . 'header_image',
				'type' => 'file',
			),
		)
	);


	$meta_boxes[] = array(
		'id'         => 'team_metabox',
		'title'      => __('Team Member Options', 'eightdegree'),
		'pages'      => array( 'team', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
			    'name' => 'Member Role',
			    //'desc' => 'field description (optional)',
			    //'default' => 'standard value (optional)',
			    'id' => $prefix . 'role',
			    'type' => 'text_medium'
			),
			array(
				'name' => __( 'Icon', 'eightdegree'),
				'id'   => $prefix . 'icon',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('None', 'eightdegree'), 'value' => '', ),
					array( 'name' => __('Heart', 'eightdegree'), 'value' => 'heart', ),
					array( 'name' => __('Cloud', 'eightdegree'), 'value' => 'cloud', ),
					array( 'name' => __('Star', 'eightdegree'), 'value' => 'star', ),
					array( 'name' => __('TV', 'eightdegree'), 'value' => 'tv', ),
					array( 'name' => __('Sound', 'eightdegree'), 'value' => 'sound', ),
					array( 'name' => __('Video', 'eightdegree'), 'value' => 'video', ),
					array( 'name' => __('Trash', 'eightdegree'), 'value' => 'trash', ),
					array( 'name' => __('User', 'eightdegree'), 'value' => 'user', ),
					array( 'name' => __('Key', 'eightdegree'), 'value' => 'key', ),
					array( 'name' => __('Search', 'eightdegree'), 'value' => 'search', ),
					array( 'name' => __('Settings', 'eightdegree'), 'value' => 'settings', ),
					array( 'name' => __('Camera', 'eightdegree'), 'value' => 'camera', ),
					array( 'name' => __('Tag', 'eightdegree'), 'value' => 'tag', ),
					array( 'name' => __('Lock', 'eightdegree'), 'value' => 'lock', ),
					array( 'name' => __('Bulb', 'eightdegree'), 'value' => 'bulb', ),
					array( 'name' => __('Pen', 'eightdegree'), 'value' => 'pen', ),
					array( 'name' => __('Diamond', 'eightdegree'), 'value' => 'diamond', ),
					array( 'name' => __('Display', 'eightdegree'), 'value' => 'display', ),
					array( 'name' => __('Location', 'eightdegree'), 'value' => 'location', ),
					array( 'name' => __('Eye', 'eightdegree'), 'value' => 'eye', ),
					array( 'name' => __('Bubble', 'eightdegree'), 'value' => 'bubble', ),
					array( 'name' => __('Stack', 'eightdegree'), 'value' => 'stack', ),
					array( 'name' => __('Cup', 'eightdegree'), 'value' => 'cup', ),
					array( 'name' => __('Phone', 'eightdegree'), 'value' => 'phone', ),
					array( 'name' => __('News', 'eightdegree'), 'value' => 'news', ),
					array( 'name' => __('Mail', 'eightdegree'), 'value' => 'mail', ),
					array( 'name' => __('Like', 'eightdegree'), 'value' => 'like', ),
					array( 'name' => __('Photo', 'eightdegree'), 'value' => 'photo', ),
					array( 'name' => __('Note', 'eightdegree'), 'value' => 'note', ),
					array( 'name' => __('Clock', 'eightdegree'), 'value' => 'clock', ),
					array( 'name' => __('Paper Plane', 'eightdegree'), 'value' => 'paperplane', ),
					array( 'name' => __('Params', 'eightdegree'), 'value' => 'params', ),
					array( 'name' => __('Banknote', 'eightdegree'), 'value' => 'banknote', ),
					array( 'name' => __('Data', 'eightdegree'), 'value' => 'data', ),
					array( 'name' => __('Music', 'eightdegree'), 'value' => 'music', ),
					array( 'name' => __('Megaphone', 'eightdegree'), 'value' => 'megaphone', ),
					array( 'name' => __('Study', 'eightdegree'), 'value' => 'study', ),
					array( 'name' => __('Lab', 'eightdegree'), 'value' => 'lab', ),
					array( 'name' => __('Food', 'eightdegree'), 'value' => 'food', ),
					array( 'name' => __('T-shirt', 'eightdegree'), 'value' => 't-shirt', ),
					array( 'name' => __('Fire', 'eightdegree'), 'value' => 'fire', ),
					array( 'name' => __('Clip', 'eightdegree'), 'value' => 'clip', ),
					array( 'name' => __('Shop', 'eightdegree'), 'value' => 'shop', ),
					array( 'name' => __('Calendar', 'eightdegree'), 'value' => 'calendar', ),
					array( 'name' => __('Vallet', 'eightdegree'), 'value' => 'vallet', ),
					array( 'name' => __('Vynil', 'eightdegree'), 'value' => 'vynil', ),
					array( 'name' => __('Truck', 'eightdegree'), 'value' => 'truck', ),
					array( 'name' => __('World', 'eightdegree'), 'value' => 'world', ),

				),
			),
			array(
			    'name' => 'Twitter Link',
			    'id' => $prefix . 'twitter_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Facebook Link',
			    'id' => $prefix . 'facebook_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Dribbble Link',
			    'id' => $prefix . 'dribbble_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Github Link',
			    'id' => $prefix . 'github_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Youtube Link',
			    'id' => $prefix . 'youtube_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Vimeo Link',
			    'id' => $prefix . 'vimeo_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Instagram Link',
			    'id' => $prefix . 'instagram_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Pinterest Link',
			    'id' => $prefix . 'pinterest_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Wordpress Link',
			    'id' => $prefix . 'wordpress_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Google Link',
			    'id' => $prefix . 'google_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Flickr Link',
			    'id' => $prefix . 'flickr_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Linkedin Link',
			    'id' => $prefix . 'linkedin_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Dropbox Link',
			    'id' => $prefix . 'dropbox_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Tumblr Link',
			    'id' => $prefix . 'tumblr_link',
			    'type' => 'text'
			),
			array(
			    'name' => 'Forrest Link',
			    'id' => $prefix . 'forrest_link',
			    'type' => 'text'
			),

		)
	);



	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}

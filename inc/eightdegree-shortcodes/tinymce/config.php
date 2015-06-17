<?php


/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'popup_title' => 'Insert Columns Shortcode',
	'no_preview' => true,
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => 'Column Type',
				'desc' => 'Select the type, ie width of the column.',
				'options' => array(
					'column_full' => 'Full Width',
					'column_third' => 'One Third',
					'column_third_last' => 'One Third Last',
					'column_two_thirds' => 'Two Thirds',
					'column_two_thirds_last' => 'Two Thirds Last',
					'column_half' => 'One Half',
					'column_half_last' => 'One Half Last',
					'column_quarter' => 'One Quarter',
					'column_quarter_last' => 'One Quarter Last',
					'column_three_quarter' => 'Three Quarters',
					'column_three_quarter_last' => 'Three Quarters Last',
				
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => 'Column Content',
				'desc' => 'Add the column content.',
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => 'Add Column',
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'link' => array(
			'type' => 'text',
			'label' => 'Link',
			'desc' => 'Enter the buttons URL. For in page links use #page-title eg - #about (use lowercase letters replace spaces with hyphens)',
			'std' => '#About',
		),
		'color' => array(
			'type' => 'select',
			'label' => 'Button Color',
			'desc' => 'Select Button Color',
			'options' => array(
					'colored' => 'Accent Color',
					'light' => 'White',
					'dark' => 'Black',
				),
		),
		'style' => array(
			'type' => 'select',
			'label' => 'Button Style',
			'desc' => 'Select Button Style',
			'options' => array(
					'outline' => 'Outline',
					'solid' => 'Solid',
				),
		),
		'size' => array(
			'type' => 'select',
			'label' => 'Button Size',
			'desc' => 'Select Button Size',
			'options' => array(
					'large' => 'Large',
					'small' => 'Small',
				),
		),
		'label' => array(
			'type' => 'text',
			'label' => 'Button Label',
			'desc' => 'Enter the button label',
			'std' => '',
		),
	),
	'shortcode' => '[button link="{{link}}" color="{{color}}" style="{{style}}" size="{{size}}"]{{label}}[/button]',
	'popup_title' => 'Insert Button Shortcode',
);
//[button link="#About" color="colored" style="solid" size="large"]Hello[/button]
/*-----------------------------------------------------------------------------------*/
/*	Skill Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['skill'] = array(
	'no_preview' => true,
	'params' => array(
		'name' => array(
			'type' => 'text',
			'label' => 'Skill',
			'desc' => 'Add a title to go above the skill rating bar',
			'std' => 'Skill',
		),
		'level' => array(
			'type' => 'text',
			'label' => 'Skill Level',
			'desc' => 'Add the level of skill between 0% and 100%',
			'std' => '100',
		),
	),
	'shortcode' => '[skill name="{{name}}" level="{{level}}"]',
	'popup_title' => 'Insert Skill Rating Bar Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Scroll Animation Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['scrollAnimation'] = array(
	'no_preview' => true,
	'params' => array(
		'start' => array(
			'type' => 'rangetext',
			'label' => 'Start',
			'desc' => 'Enter the scroll position where the animation will begin',
			'std' => '',
		),
		'end' => array(
			'type' => 'rangetext',
			'label' => 'End',
			'desc' => 'Enter the scroll position where the animation will end',
			'std' => '',
		),
		'relative' => array(
			'type' => 'select',
			'label' => 'Mode',
			'desc' => 'Are the start and end values based on document height or relative to the browser view port - Recommended',
			'options' => array(
					'yes' => 'Relative to view port',
					'no' => 'Based on document height',
				),
		),
		'fromStyle' => array(
			'type' => 'style',
			'label' => 'Animate From',
			'desc' => 'Use the sliders below to set the property and value that the animation will tween from. Will also accept custom CSS.',
			'std' => '',
		),
		'fromOpacity' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Opacity',
			'std' => '',
		),
		'fromTop' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Top',
			'std' => '',
		),
		'fromLeft' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Left',
			'std' => '',
		),
		'toStyle' => array(
			'type' => 'style',
			'label' => 'Animate To',
			'desc' => 'Enter the values the animation will tween to. Properites must match the animating from properties', 
			'std' => '',
		),
		'toOpacity' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Opacity',
			'std' => '',
		),
		'toTop' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Top',
			'std' => '',
		),
		'toLeft' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Left',
			'std' => '',
		),
	),
	'shortcode' => '[scroll_animation relative="{{relative}}" start="{{start}}" end="{{end}}" from="{{fromStyle}}" to="{{toStyle}}"][/scroll_animation]',
	'popup_title' => 'Insert Scroll Animation Shortcode <a class="help" href ="http://webdingo.net/eightdegree/doc/#animation" target="_blank">Help</a>',
);


/*-----------------------------------------------------------------------------------*/
/*	CSS Animation Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['cssAnimation'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => 'Animation Style',
			'desc' => 'Select animation type',
			'options' => array(
					'fadeIn' => 'Fade In',
					'slideInUp' => 'Slide In Up',
					'slideInDown' => 'Slide In Down',
					'slideInLeft' => 'Slide In Left',
					'slideInRight' => 'Slide In Right',
					'flipInX' => 'Flip In Vertical',
					'flipInY' => 'Flip In Horizontal',
			),
		),

	),
	'shortcode' => '[css_animation style="{{style}}"][/css_animation]',
	'popup_title' => 'Insert CSS Animation Shortcode',
);

      

/*-----------------------------------------------------------------------------------*/
/*	Recent Posts Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['recentPosts'] = array(
	'no_preview' => true,
	'params' => array(
		'numPosts' => array(
			'type' => 'text',
			'label' => 'Number of posts',
			'desc' => 'Add the number of posts to show',
			'std' => '3'
		),
		'excerptWords' => array(
			'type' => 'text',
			'label' => 'Excerpt Words',
			'desc' => 'Add the amount of words for auto generated excerpts',
			'std' => '75',
		),
		'cat_slug' => array(
			'type' => 'text',
			'label' => 'Category',
			'desc' => 'Enter the cateory slug of post to show. Leave empty to show all posts',
			'std' => '',
		),
	),
	'shortcode' => '[recent_posts num_posts="{{numPosts}}" excerpt_words="{{excerptWords}}" cat_slug="{{cat_slug}}"]',
	'popup_title' => 'Insert Recent Posts Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Team Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['team'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => 'Style',
			'desc' => 'Select team style',
			'options' => array(
					'left' => 'Left Align',
					'center' => 'Center Align',
	
			),
		),

		'columns' => array(
			'type' => 'select',
			'label' => 'Columns',
			'desc' => 'Select ammount of team members per row',
			'options' => array(
					'1' => 'One',
					'2' => 'Two',
					'3' => 'Three',
					'4' => 'Four',
					'6' => 'Six',
			),
		),
	),
	'shortcode' => '[team style="{{style}}" columns="{{columns}}"]',
	'popup_title' => 'Insert Team Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Flex Slider Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['flexSlider'] = array(
	'no_preview' => true,
	'params' => array(
		'cat' => array(
			'type' => 'text',
			'label' => 'Flex Slider Category',
			'desc' => 'Enter the flex slider post category to show',
			'std' => '',
		),
	),
	'shortcode' => '[flex_slider cat="{{cat}}"]',
	'popup_title' => 'Insert Recent Posts Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Parallax Section Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['parallaxSection'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
		'height' => array(
			'type' => 'text',
			'label' => 'Height',
			'desc' => 'Enter the parallax section height in pixels (eg. 450px)',
			'std' => '450px',
		),
		'background_layer' => array(
			'type' => 'text',
			'label' => 'Background Layer',
			'desc' => 'Enter the background image layer URL (optional)',
			'std' => '',
		),
	),
	'shortcode' => '[parallax_section height="{{height}}" background="{{background}}" background_layer="{{background_layer}}"][/parallax_section]',
	'popup_title' => 'Insert Parallax Section Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Colored Parallax Section Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['coloredParallaxSection'] = array(
	'no_preview' => true,
	'params' => array(
		'height' => array(
			'type' => 'text',
			'label' => 'Height',
			'desc' => 'Enter the parallax section height in pixels (eg. 450px)',
			'std' => '450px',
		),
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
		'background_layer' => array(
			'type' => 'text',
			'label' => 'Background Layer',
			'desc' => 'Enter the background image layer URL (optional)',
			'std' => '',
		),

		'fromColor' => array(
			'type' => 'rangecolor',
			'label' => 'Starting Color',
			'desc' => 'Use the sliders below to select a starting color',
			'std' => 'rgb(255,255,255)',
		),
		'fromRed' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Red',
			'std' => '',
		),
		'fromGreen' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Green',
			'std' => '',
		),
		'fromBlue' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Blue',
			'std' => '',
		),
		'toColor' => array(
			'type' => 'rangecolor',
			'label' => 'End Color',
			'desc' => 'Use the sliders below to select a ending color',
			'std' => 'rgb(0,0,0)',
		),
		'toRed' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Red',
			'std' => '',
		),
		'toGreen' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Green',
			'std' => '',
		),
		'toBlue' => array(
			'type' => 'range',
			'desc' => '',
			'label' => 'Blue',
			'std' => '',
		),

	),
	'shortcode' => '[colored_parallax_section height="{{height}}" background="{{background}}" background_layer="{{background_layer}}" start="{{fromColor}}" end="{{toColor}}"][/colored_parallax_section]',
	'popup_title' => 'Insert Colred Parallax Section Shortcode <a class="help" href ="http://webdingo.net/eightdegree/doc/#animation" target="_blank">Help</a>', 
);




/*-----------------------------------------------------------------------------------*/
/*	Parallax Background Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['parallaxBackground'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
	),
	'shortcode' => '[parallax_background background="{{background}}"][/parallax_background]',
	'popup_title' => 'Insert Parallax Background Shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Tabbed Page Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['tabbedPage'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[tabbed_page] {{child_shortcode}}  [/tabbed_page]',
    'popup_title' => __('Insert Tab Shortcode', 'eightdegree-shortcodes'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => 'Tab Title', 
                'desc' => 'Title of the tab',
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => 'Tab Content',
                'desc' => 'Add the tab content',
            )
        ),
        'shortcode' => '[tabbed_page_tab title="{{title}}"] {{content}} [/tabbed_page_tab]',
        'clone_button' => 'Add Tab',
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Google Map Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['googleMap'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => 'Map Title',
			'desc' => 'Enter the map title',
			'std' => 'Envato Office',
		),
		'location' => array(
			'type' => 'text',
			'label' => 'Location',
			'desc' => 'Enter Map Address',
			'std' => '2 Elizabeth St, Melbourne Victoria 3000 Australia',
		),
		'zoom' => array(
			'type' => 'text',
			'label' => 'Zoom',
			'desc' => 'Enter the defaut zoom level',
			'std' => '10',
		),
		'height' => array(
			'type' => 'text',
			'label' => 'Height',
			'desc' => 'Enter the map height in pixels',
			'std' => '350',
		),
		'full_width' => array(
			'type' => 'select',
			'label' => 'Full Width',
			'desc' => '100% width map or boxed?',
			'options' => array(
					'yes' => 'Full Width',
					'no' => 'Boxed',
				),
		),
	),
	'shortcode' => '[google_map title="{{title}}" location="{{location}}" zoom="{{zoom}}" height="{{height}}" full_width="{{full_width}}" ]',
	'popup_title' => 'Insert Google Map shortcode',
);

/*-----------------------------------------------------------------------------------*/
/*	Testimonial Slider Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['testimonialsSlider'] = array(
    'params' => array(		
    	'style' => array(
			'type' => 'select',
			'label' => 'Style',
			'desc' => 'Select testimonial slider style',
			'options' => array(
					'light' => 'Light',
					'dark' => 'Dark',
				),
		),
	),
    'no_preview' => true,
    'shortcode' => '[testimonials_slider style="{{style}}"] {{child_shortcode}}  [/testimonials_slider]',
    'popup_title' => 'Testimonials Slider Shortcode', 
    
    'child_shortcode' => array(
        'params' => array(
            'image' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Testimonial Image',
                'desc' => 'Enter the URL for testimonial avatar', 
            ),
            'name' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Name',
                'desc' => 'Enter the name of the testimonial author', 
            ),
            'company' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Company',
                'desc' => 'Enter the company of the testimonial author',
            ),
            'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => 'Quote',
                'desc' => 'Add the quote content',
            )
        ),
        'shortcode' => '[testimonial image="{{image}}" name="{{name}}" company="{{company}}"] {{content}} [/testimonial]',
        'clone_button' => 'Add Testimonial', 
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Text Ticker Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['textTicker'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[text_ticker] {{child_shortcode}}  [/text_ticker]',
    'popup_title' => 'Text Ticker Shortcode', 
    
    'child_shortcode' => array(
        'params' => array(
	        'size' => array(
				'type' => 'select',
				'label' => 'Text Size',
				'desc' => 'Select font size',
				'options' => array(
						'tera' => 'Tera',
						'giga' => 'Giga',
						'mega' => 'Mega',
						'alpha' => 'Alpha (h1)',
						'beta' => 'Beta (h2)',
						'gamma' => 'Gamma (h3)',
						'delta' => 'Delta (h4)',
						'epsilon' => 'Epsilon (h5)',
						'zeta' => 'Zeta (h6)',
					),
			),
            'content' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Text',
                'desc' => 'Add text slide content',
            )
        ),
        'shortcode' => '[text size="{{size}}"] {{content}} [/text]',
        'clone_button' => 'Add Text', 
    )
);


/*-----------------------------------------------------------------------------------*/
/*	Pricing Table Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['pricingTable'] = array(
	'no_preview' => true,
	'params' => array(
		'background' => array(
			'type' => 'text',
			'label' => 'Background Image',
			'desc' => 'Enter the background image URL',
			'std' => '',
		),
		'featured' => array(
			'type' => 'select',
			'label' => 'Featured?',
			'desc' => '',
			'options' => array(
					'yes' => 'Yes',
					'no' => 'No',
			),
		),
		'plan' => array(
			'type' => 'text',
			'label' => 'Plan',
			'std' => 'Basic',
			'desc' => '',
		),
		'cost' => array(
			'type' => 'text',
			'label' => 'Cost',
			'std' => '$19.00',
			'desc' => '',
		),
		'per' => array(
			'type' => 'text',
			'label' => 'Per (optional)',
			'std' => 'year',
			'desc' => '',
		),
		'button_text' => array(
			'type' => 'text',
			'label' => 'Button Text',
			'std' => 'Buy Now',
			'desc' => '',
		),
		'button_url' => array(
			'type' => 'text',
			'label' => 'Button URL',
			'std' => 'http://www.google.com',
			'desc' => '',
		),
		'button_link_target' => array(
			'type' => 'select',
			'label' => 'Button Link Target',
			'desc' => '',
			'options' => array(
					'_self' => 'Self',
					'_blank' => 'Blank',
			),
		),

	),
	'shortcode' => '[pricing_table background_image="{{background}}" featured="{{featured}}" plan="{{plan}}" cost="{{cost}}" per="{{per}}" button_text="{{button_text}}" button_url="{{button_url}}" button_link_target="{{button_link_target}}"]{{child_shortcode}}[/pricing_table]',
	'popup_title' => 'Insert Pricing Table',

	'child_shortcode' => array(
        'params' => array(
	        
            'features' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Feature',
                'desc' => '',
            )
        ),
        'shortcode' => '[feature] {{features}} [/feature]',
        'clone_button' => 'Add Feature', 
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Icon box Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['iconBox'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'type' => 'select',
			'label' => 'Icon',
			'desc' => 'Select Icon',
			'options' => array(
					'heart' => 'Heart',
					'cloud' => 'Cloud',
					'star' => 'Star',
					'tv' => 'TV',
					'sound' => 'Sound',
					'video' => 'Video',
					'trash' => 'Trash',
					'user' => 'User',
					'key' => 'Key',
					'search' => 'Search',
					'settings' => 'Settings',
					'camera' => 'Camera',
					'tag' => 'Tag',
					'lock' => 'Lock',
					'bulb' => 'Bulb',
					'pen' => 'Pen',
					'diamond' => 'Diamond',
					'display' => 'Display',
					'location' => 'Location',
					'eye' => 'Eye',
					'bubble' => 'Bubble',
					'stack' => 'Stack',
					'cup' => 'Cup',
					'phone' => 'Phone',
					'news' => 'News',
					'mail' => 'Mail',
					'like' => 'Like',
					'photo' => 'Photo',
					'note' => 'Note',
					'clock' => 'Clock',
					'paperplane' => 'Paper Plane',
					'params' => 'Params',
					'banknote' => 'Banknote',
					'data' => 'Data',
					'music' => 'Music',
					'megaphone' => 'Megaphone',
					'study' => 'Study',
					'lab' => 'Lab',
					'food' => 'Food',
					't-shirt' => 'T-Shirt',
					'fire' => 'Fire',
					'clip' => 'Clip',
					'shop' => 'Shop',
					'calendar' => 'Calendar',
					'vallet' => 'Vallet',
					'vynil' => 'Vynil',
					'truck' => 'Truck',
					'world' => 'World',

				),
		),
		'color' => array(
			'type' => 'select',
			'label' => 'Color',
			'desc' => 'Select icon box color',
			'options' => array(
					'light' => 'Light',
					'dark' => 'Dark',
				),
		),
		'style' => array(
			'type' => 'select',
			'label' => 'Style',
			'desc' => 'Select icon box style',
			'options' => array(
					'icon-left' => 'Icon Left',
					'icon-top' => 'Icon Top',
				),
		),
		'content' => array(
                'std' => '',
                'type' => 'textarea',
                'label' => 'Content',
                'desc' => 'Add the icon box content, accepts HTML',
        ),

	),
	'shortcode' => '[icon_box icon="{{icon}}" color="{{color}}" style="{{style}}"]{{content}}[/icon_box]',
	'popup_title' => 'Insert Icon Box Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Counter Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['counter'] = array(
	'no_preview' => true,
	'params' => array(
		'number' => array(
			'type' => 'text',
			'label' => 'Number',
			'desc' => 'Enter the number to count to',
			'std' => '',
		),
		'details' => array(
			'type' => 'text',
			'label' => 'Details',
			'desc' => 'Enter the number description',
			'std' => '',
		),
	),
	'shortcode' => '[counter number="{{number}}" details="{{details}}"]',
	'popup_title' => 'Insert Counter Shortcode',
);


/*-----------------------------------------------------------------------------------*/
/*	Clients Config
/*-----------------------------------------------------------------------------------*/
$eightdegree_shortcodes['clientsSlider'] = array(
   'params' => array(
           'items' => array(
                'std' => '6',
                'type' => 'text',
                'label' => 'Items',
                'desc' => 'Enter the maximum amount of items displayed at a time',
            )
    ),
    'no_preview' => true,
    'shortcode' => '[clients_slider items="{{items}}"] {{child_shortcode}}  [/clients_slider]',
    'popup_title' => 'Clients Slider Shortcode', 
    
    'child_shortcode' => array(
        'params' => array(
           'image' => array(
                'std' => '',
                'type' => 'text',
                'label' => 'Image',
                'desc' => 'Enter the image URL',
            )
        ),
        'shortcode' => '[client]' . htmlspecialchars("<img src='{{image}}'/>", ENT_QUOTES) . '[/client]',
        'clone_button' => 'Add Client', 
    )
);


?>



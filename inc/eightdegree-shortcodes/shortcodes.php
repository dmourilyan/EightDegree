<?php

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_column_full')) {
	function EightDegree_column_full( $atts, $content = null ) {
		extract( shortcode_atts( array(
			'spacing' => '',
		), $atts ) );
	   return '<div class="c12 end ">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_full', 'EightDegree_column_full');
}

if (!function_exists('EightDegree_column_third')) {
	function EightDegree_column_third( $atts, $content = null ) {
	   return '<div class="c4">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_third', 'EightDegree_column_third');
}

if (!function_exists('EightDegree_column_third_last')) {
	function EightDegree_column_third_last( $atts, $content = null ) {
	   return '<div class="c4 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_third_last', 'EightDegree_column_third_last');
}

if (!function_exists('EightDegree_column_two_thirds')) {
	function EightDegree_column_two_thirds( $atts, $content = null ) {
	   return '<div class="c8">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_two_thirds', 'EightDegree_column_two_thirds');
}

if (!function_exists('EightDegree_column_two_thirds_last')) {
	function EightDegree_column_two_thirds_last( $atts, $content = null ) {
	   return '<div class="c8 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_two_thirds_last', 'EightDegree_column_two_thirds_last');
}

if (!function_exists('EightDegree_column_half')) {
	function EightDegree_column_half( $atts, $content = null ) {
	   return '<div class="c6">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_half', 'EightDegree_column_half');
}

if (!function_exists('EightDegree_column_half_last')) {
	function EightDegree_column_half_last( $atts, $content = null ) {
	   return '<div class="c6 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_half_last', 'EightDegree_column_half_last');
}

if (!function_exists('EightDegree_column_quarter')) {
	function EightDegree_column_quarter( $atts, $content = null ) {
	   return '<div class="c3">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_quarter', 'EightDegree_column_quarter');
}

if (!function_exists('EightDegree_column_quarter_last')) {
	function EightDegree_column_quarter_last( $atts, $content = null ) {
	   return '<div class="c3 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_quarter_last', 'EightDegree_column_quarter_last');
}

if (!function_exists('EightDegree_column_three_quarter')) {
	function EightDegree_column_three_quarter( $atts, $content = null ) {
	   return '<div class="c9">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_three_quarter', 'EightDegree_column_three_quarter');
}

if (!function_exists('EightDegree_column_three_quarter_last')) {
	function EightDegree_column_three_quarter_last( $atts, $content = null ) {
	   return '<div class="c9 end">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('column_three_quarter_last', 'EightDegree_column_three_quarter_last');
}
if (!function_exists('EightDegree_grid')) {
	function EightDegree_grid( $atts, $content = null ) {
	   return '<div class="grid">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('grid', 'EightDegree_grid');
}
/*-----------------------------------------------------------------------------------*/
/*	Button Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_button_func')) {
	function EightDegree_button_func($atts, $content = null) {
		extract( shortcode_atts( array(
			'link' => '',
			'color' => '',
			'style' => '',
			'size' => '',
		), $atts ) );
		
		return '<a href="'.$link.'" class="button '.$color.' '.$style.' '.$size.'">'. do_shortcode($content) .'</a>'; 
		
	}
	add_shortcode( 'button', 'EightDegree_button_func' );
}

/*-----------------------------------------------------------------------------------*/
/*	Skill Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_skill_func')) {
	function EightDegree_skill_func($atts) {
		extract( shortcode_atts( array(
			'name' => '',
			'level' => '',
		), $atts ) );
		return '<p class="skilltitle">'.$name.'</p><div class="barwrapper"><span class="barbase"></span><div class="bar"><div style="width:'.$level.'%"><span class="skilllevel">'.$level.'%</span></div></div></div>';  
	}
	add_shortcode( 'skill', 'EightDegree_skill_func' );
}

/*-----------------------------------------------------------------------------------*/
/*	Scroll Animation Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_scroll_animation')) {
	function EightDegree_scroll_animation ($atts, $content = null) {
		$output = '';
		$atts = shortcode_atts(
			array(
				'start' => '',
				'end' => '',
				'from' => '',
				'to' => '',
				'relative' => '',
			), $atts);

		if($atts['relative'] == 'yes') {
			$output .= '<div class="scrollanimation" data-'.$atts['start'].'-bottom-top ="'.$atts['from'].'" data-'.$atts['end'].'-top ="'.$atts['to'].'" style="'.$atts['to'].'">'.do_shortcode($content).'</div>';
		}
		else {
			$output .= '<div class="scrollanimation" data-'.$atts['start'].' ="'.$atts['from'].'" data-'.$atts['end'].' ="'.$atts['to'].'" style="'.$atts['from'].'"><div>'.do_shortcode($content).'</div></div>';
		} 
		return $output;
	}
	add_shortcode( 'scroll_animation', 'EightDegree_scroll_animation' );
}

/*-----------------------------------------------------------------------------------*/
/*	Recent Posts Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_string_limit_words')) {	
	function EightDegree_string_limit_words($string, $word_limit){
	  $words = explode(' ', $string, ($word_limit + 1));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  return implode(' ', $words);
	}
}	

if (!function_exists('EightDegree_get_special_excerpt')) {
	function EightDegree_get_special_excerpt($count){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, $count);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		return $excerpt;
	}
}

if (!function_exists('EightDegree_recent_posts')) {
	function EightDegree_recent_posts($atts) {
		$output = '';
		global $post;
		if(!isset($atts['num_posts'])) {
			$atts['num_posts'] = 3;
		}
		if(!isset($atts['excerpt_words'])) {
			$atts['excerpt_words'] = 50;
		}
		$output .= '<div id="recent-posts" class="clearfix">';
		$counter = 1;
		if(!empty($atts['cat_slug']) && $atts['cat_slug']){
			$recent_posts = new WP_Query('post_status=publish&showposts='.$atts['num_posts'].'&category_name='.$atts['cat_slug']);
		} else {
			$recent_posts = new WP_Query('post_status=publish&showposts='.$atts['num_posts']);
		}
		while($recent_posts->have_posts()): $recent_posts->the_post();
		if ($counter % 3 == 0){
			$classes = "blog-recent-post-item c4 end";
		}
		else{
			$classes = "blog-recent-post-item c4";
		}
		if ($counter % 3 == 1){
			$output .= '<div class="row">';
		}
		$output .= '<div class="'.$classes.'">';
	   
	    if('post' == get_post_type()){		
			if(has_post_thumbnail($post->ID)){
				$featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					$output .= '<a class="recent-post-img" href="'.get_permalink(get_the_ID()).'" rel="">';
					$output .= '<img src="'.$featured_image_url[0].'"/>';
					$output .= '</a>';

				}
			
	
			$output .= '<div class="entry-details">';
			$output .= '<span class="postdate">'.get_the_date('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\y\"\>j\<\/\s\p\a\n\> M Y').'</span>'; 		
			$output .= '<div class="entry-meta">';
			$output .= '<h3 class="entry-title"><a href="'.get_permalink(get_the_ID()).'" rel="">'.get_the_title().'</a></h2>';
			
			$output .= '<a class="author" href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ). '">'. __('By ', 'eightdegree-shortcodes') . get_the_author() .'</a>';
			$output .= '</div>';
			$output .= '</div>';
	
			if ( has_excerpt() ) 
			{
			    $the_excerpt = get_the_excerpt();
				$output .= "<p>$the_excerpt</p>";
			} 
			else 
			{
			    $the_excerpt = EightDegree_get_special_excerpt(3072);
				$the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_excerpt);
				$the_excerpt = EightDegree_string_limit_words($the_excerpt, $atts['excerpt_words']);
				$output .="<p>$the_excerpt</p>";
			}
			$output .= '<a class="button dark outline small" href="'.get_permalink(get_the_ID()).'">'.__('Read more', 'eightdegree-shortcodes').'</a>';	

			if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) :
				$args = array(
					'post_id' => get_the_ID(),
					'count' => true
				);
				$comments = get_comments($args);
				$output .= '<a class="comment-count" href="'.get_permalink().'#comments"><span class="li_bubble"></span>'.$comments.'</a>';
			endif;
		}	

		$output .= '</div>';
		
		if ($counter % 3 == 0){
			$output .= '</div>';
		}
		$counter++ ; 
		endwhile;
		$output .= '</div>';
		return $output;
	}

	add_shortcode('recent_posts', 'EightDegree_recent_posts');
}

/*-----------------------------------------------------------------------------------*/
/*	Social Networks Shortcode
/*-----------------------------------------------------------------------------------*/

if ( !function_exists('EightDegree_social_networks')) {
	function EightDegree_social_networks () {
		global $EightDegree_Options;
		$output = '';
		if (isset($EightDegree_Options)){

			$twitter_link = $EightDegree_Options->get('ed_twitter');
			$facebook_link = $EightDegree_Options->get('ed_facebook');
			$dribbble_link = $EightDegree_Options->get('ed_dribbble');
			$github_link = $EightDegree_Options->get('ed_github');
			$youtube_link = $EightDegree_Options->get('ed_youtube');
			$vimeo_link = $EightDegree_Options->get('ed_vimeo');
			$instagram_link = $EightDegree_Options->get('ed_instagram');
			$pinterest_link = $EightDegree_Options->get('ed_pinterest');
			$wordpress_link = $EightDegree_Options->get('ed_wordpress');
			$google_link = $EightDegree_Options->get('ed_google');
			$flickr_link = $EightDegree_Options->get('ed_flickr');
			$linkedin_link = $EightDegree_Options->get('ed_linkedin');
			$dropbox_link = $EightDegree_Options->get('ed_dropbox');
			$tumblr_link = $EightDegree_Options->get('ed_tumblr');
			$forrst_link = $EightDegree_Options->get('ed_forrst');


			$output .= '<ul class="social-networks">';
			if($twitter_link <> ''){
				$output .= '<li class="twitter">';
				$output .= '<a href="'.$twitter_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($facebook_link <> ''){
				$output .= '<li class="facebook">';
				$output .= '<a href="'.$facebook_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($dribbble_link <> ''){
				$output .= '<li class="dribbble">';
				$output .= '<a href="'.$dribbble_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($github_link <> ''){
				$output .= '<li class="github">';
				$output .= '<a href="'.$github_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($youtube_link <> ''){
				$output .= '<li class="youtube">';
				$output .= '<a href="'.$youtube_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($vimeo_link <> ''){
				$output .= '<li class="vimeo">';
				$output .= '<a href="'.$vimeo_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($instagram_link <> ''){
				$output .= '<li class="instagram">';
				$output .= '<a href="'.$instagram_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($pinterest_link <> ''){
				$output .= '<li class="pinterest">';
				$output .= '<a href="'.$pinterest_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($wordpress_link <> ''){
				$output .= '<li class="wordpress">';
				$output .= '<a href="'.$wordpress_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($google_link <> ''){
				$output .= '<li class="google">';
				$output .= '<a href="'.$google_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($flickr_link <> ''){
				$output .= '<li class="flickr">';
				$output .= '<a href="'.$flickr_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($linkedin_link <> ''){
				$output .= '<li class="linkedin">';
				$output .= '<a href="'.$linkedin_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($dropbox_link <> ''){
				$output .= '<li class="dropbox">';
				$output .= '<a href="'.$dropbox_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($tumblr_link <> ''){
				$output .= '<li class="tumblr">';
				$output .= '<a href="'.$tumblr_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}
			if($forrst_link <> ''){
				$output .= '<li class="forrst">';
				$output .= '<a href="'.$forrst_link.'" target="_blank"></a>';
				$output .= '</li>';	
			}

			$output .= '</ul>'; 
		}
		else{
			$output .= '<em>'.__('Shortcode requires eightdegree theme options','eightdegree-shortcodes').'</em>';
		}
		return $output;
	}
	add_shortcode( 'social_networks', 'EightDegree_social_networks' );
}	

/*-----------------------------------------------------------------------------------*/
/*	Flex Slider Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_flex_slider')) {
	function EightDegree_flex_slider($atts) {
		$output = '';
		global $post;
		extract( shortcode_atts( array(
			'cat' => '',
		), $atts ) );
	  	$default = array(
		    'type'      => 'flex_slider',
		    'limit' => '100',
	  	);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
		    $post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	
		if( !$post_type_ob ){
			return '<div class="warning"><p>'.__('No such post type found.', 'eightdegree-shortcodes').'</p></div>';
		}	
		$args = array(
			'post_type'   => $post_type,
		   	'flex_slider_category' => $cat,
		   	'numberposts' => $limit,
		   	'suppress_filters' => false,
		   	'orderby'          => 'post_date',
		);
		$posts = get_posts( $args );
		$category = get_the_category();
		if( count($posts) ):
			$output .= '<div class="flexslider" id="flexslider_'. $cat .'">';
			$output .= '<ul class="slides">';
		    foreach( $posts as $post ): setup_postdata( $post );
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	        $output .= '<li>';
		    $output .=	get_the_post_thumbnail() ;
			$output .= '<div class="flexslide-caption">'.do_shortcode( get_the_content() ).'</div>';	
		    $output .= '</li>';
		    endforeach; wp_reset_postdata();
		    $output .= '</ul></div>';
		  else :
		    $output .= '<p>'.__('No posts found.','eightdegree-shortcodes').'</p>';
		  endif;
		return $output;
	}
	add_shortcode( 'flex_slider', 'EightDegree_flex_slider' );
}
/*-----------------------------------------------------------------------------------*/
/*	Superslides Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_super_slides')) {
	function EightDegree_super_slides ($atts) {
		$output = '';
		global $post;
		$default = array(
			'type'      => 'super_slider',
			'limit' => '100'
		  );
		
		$r = shortcode_atts( $default, $atts );
		extract( $r );
		if( empty($post_type) ){
			$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	
		if( !$post_type_ob ){
			return '<div class="warning"><p>'.__('No such post type found.', 'eightdegree-shortcodes').'</p></div>';
		}	
		$args = array(
			'post_type'   => $post_type,
			'numberposts' => $limit,
			'suppress_filters' => false,
			'orderby'          => 'post_date',
		);
		$posts = get_posts( $args );
		if( count($posts) ):
			$output .= '<div id="superslider_loading"><div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div></div>';
			$output .= '<div id="superslider_home">';
			$output .= '<nav class="slides-navigation">
		      			<a href="#" class="next">Next</a>
		      			<a href="#" class="prev">Previous</a>
		   			 </nav>';
			$output .= '<ul class="slides-container">';
		
		    foreach( $posts as $post ): setup_postdata( $post );
		    $animation = get_post_meta( $post->ID, '_cmb_caption_animation', true );
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			$output .= '<li>';
			$output .= '<img src="'.$url.'" data-0="transform:translateY(0px);" data-1500="transform:translateY(650px);"/>';
		    $output .= '<div class="slide-caption" '.$animation.'>';

		    $output .= 	do_shortcode( get_the_content() );
		    $output .= '</div>';
		    $output .= '</li>';
		    endforeach; wp_reset_postdata();
		    $output .= '</ul></div>';
		  else :
		    $output .= '<p>'.__('No posts found.','eightdegree-shortcodes').'</p>';
		  endif;
	return $output;
	}
	add_shortcode( 'super_slides', 'EightDegree_super_slides' );
}
/*-----------------------------------------------------------------------------------*/
/*	Portfolio Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_portfolio')) {
	function EightDegree_portfolio($atts){
		global $post;
		$output = '';
	  	$default = array(
		    'type'      => 'portfolios',
		    'limit' => '100'

		);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
	    	$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	  
	  	if( !$post_type_ob ){
	    	return '<div class="warning"><p>'.__('No such post type found.', 'eightdegree-shortcodes').'</em> found.</p></div>';
	 	}
 	  	$args = array(
		    'post_type'   => $post_type,
	    	'numberposts' => $limit,
	    	'suppress_filters' => false,
	    	'orderby'          => 'post_date',

	  	);
		$posts = get_posts( $args );
	  	$category = get_the_category();
		global $EightDegree_Options;
		if (isset($EightDegree_Options)){
			$nav_style = $EightDegree_Options->get('ed_secondary_nav_style');
			$portfolio_layout = $EightDegree_Options->get('ed_portfolio_layout');
			$items_per_row = $EightDegree_Options->get('ed_portfolio_items_per_row');
			
			
		}
		if( count($posts) ){
	
			$output .= '<div class="c12 end">';	
			if (isset($EightDegree_Options)){
				if ($nav_style == "minimal") {
					$output .= '<ul class="portfolio-nav minimal">';
				}
				else{
					$output .= '<ul class="portfolio-nav">';	
				}
			}
	
			$output .= '<li class="filter" data-filter="all">'.__('All','eightdegree-shortcodes').'</li>';
			$categories = get_categories(array('taxonomy' => 'portfolio_item_category'));
			foreach ($categories as $category) {
				$output .= '<li class="filter" data-filter="'. preg_replace('/\s+/', '', $category->cat_name) .'">';
				$output .= $category->cat_name;
				$output .= '</li>';
			}

			$output .= '</ul>';
			
			if($portfolio_layout == 'full'){
				$output .= '</div></div><div class="portfoliofull">';
			}
			else{
				$output .= '</div><div class="c12 end">';				
			}
			$output .= '<ul id="portfolioinner" class="'.$items_per_row.'">';
			foreach( $posts as $post ): setup_postdata( $post );
			$terms = get_the_terms( $post->ID, 'portfolio_item_category' );
			if ( $terms && ! is_wp_error( $terms ) ) : 
				$portfolio_links = array();
			foreach ( $terms as $term ) {
				$portfolio_links[] = preg_replace('/\s+/', '', $term->name);
			}
			$portfolio_item_category = join( " ", $portfolio_links );

			endif;
	    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	 	
	 		$output .= '<li class="mix ' .$portfolio_item_category. '">';       
		    $output .= '<figure>';
		    $output .= '<a class="plink" href="'.get_permalink(get_the_ID()).'" >'.get_the_post_thumbnail($post->ID, 'large').'</a>' ;
		    $output .= '<figcaption>';
		    $output .= get_the_title();
		    $output .= '</figcaption>';
		    $output .= '</figure>' ; 
		    $output .= '</li>';   
		    endforeach; wp_reset_postdata();
		    $output .= '</ul>';
		    if($portfolio_layout == 'full'){
				$output .= '</div><div class="grid">';
			}
			else{
				$output .= '</div>';
			}
		}	
		else{
	    	$output .= '<p>'.__('No posts found.','eightdegree-shortcodes').'</p>';
	    }	

	 	return $output;
	}
	add_shortcode( 'portfolio', 'EightDegree_portfolio' );
}

/*-----------------------------------------------------------------------------------*/
/*	Parallax Section Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_parallax_section')) {
	function EightDegree_parallax_section ($atts, $content = null) {
		$output = '';
		$atts = shortcode_atts(
			array(
				'background' => '',
				'height' => '',
				'background_layer' => '',
			), $atts);	
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="parallaxSection" style="background-image:url('.$atts['background'].'); height:'.$atts['height'].';" data-bottom-top="background-position: 50% 300px" data-top-bottom="background-position: 50% -250px;" >';
		if($atts['background_layer'] <> ''){
			$output .= '<div class="background-layer" style="background-image:url('.$atts['background_layer'].'); height:'.$atts['height'].';" data-bottom-top="background-position: 50% 0px" data-top-bottom="background-position: 50% -500px;"></div>';
		}
		$output .= '<div class="parallaxSectionContent">';
		$output .= do_shortcode($content);
		return $output;
	}
	add_shortcode( 'parallax_section', 'EightDegree_parallax_section' );
}

/*-----------------------------------------------------------------------------------*/
/*	Colored Parallax Section Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_colored_parallax_section')) {
	function EightDegree_colored_parallax_section ($atts, $content = null) {
		$output = '';
		$atts = shortcode_atts(
			array(
				'background' => '',
				'background_layer' => '',
				'start'  => '',
				'end'  => '',
				'height' => '',

			), $atts);	
		$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="color-parallax-container" style="height:'.$atts['height'].';background-color:'.$atts['end'].';" data-bottom-top="background-color:'.$atts['start'].';" data-top-bottom="background-color:'.$atts['end'].'" >';
		$output .= '<div class="color-parallax-content">';
		$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '<div class="parallaxSection color-parallax-background" style="background-image:url('.$atts['background'].');" data-bottom-top="background-position: 50% 300px" data-top-bottom="background-position: 50% -250px;" >';
		if($atts['background_layer'] <> ''){
			$output .= '<div class="background-layer" style="background-image:url('.$atts['background_layer'].'); height:'.$atts['height'].';" data-bottom-top="background-position: 50% -500px" data-top-bottom="background-position: 50% 550px;"></div>';
		}
		return $output;
	}
	add_shortcode( 'colored_parallax_section', 'EightDegree_colored_parallax_section' );
}
/*-----------------------------------------------------------------------------------*/
/*	Parallax Background Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_parallax_background')) {
function EightDegree_parallax_background ($atts, $content = null) {
	$output = '';
	$atts = shortcode_atts(
		array(
			'background' => ''
		), $atts);	
	$output .= '</div>';
	$output .= '<div class="parallaxBackground" style="background-image:url('.$atts['background'].');" >';
	
	$output .= '<div class ="grid">'.do_shortcode($content).'</div>';
	return $output;
}
add_shortcode( 'parallax_background', 'EightDegree_parallax_background' );
}

/*-----------------------------------------------------------------------------------*/
/*	Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_tabbed_page')) {
	function EightDegree_tabbed_page( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		STATIC $i = 0;
		$i++;
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		global $EightDegree_Options;
		if (isset($EightDegree_Options)){
			$nav_style = $EightDegree_Options->get('ed_secondary_nav_style');
		}

		$output = '';
		if( count($tab_titles) ){
			$output .= '<div class="c12 end">';
			if (isset($EightDegree_Options)){

				if ($nav_style == "minimal") {
					$output .= '<ul class="tabs minimal">';
				}
				else{
					$output .= '<ul class="tabs">';	
				}

			}
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    $output .= '</ul>';
		    $output .= '</div>';
		    $output .= do_shortcode( $content );
		} else {
			$output .= do_shortcode( $content );
		}
		return $output;
	}
	add_shortcode( 'tabbed_page', 'EightDegree_tabbed_page' );
}
if (!function_exists('tabbed_page_tab')) {
	function EightDegree_tabbed_page_tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		return '<div id="'. sanitize_title( $title ) .'" class="tabcontent">'. do_shortcode( $content ) .'<div class="clearfix"></div></div>';
	}
	add_shortcode( 'tabbed_page_tab', 'EightDegree_tabbed_page_tab' );
}

/*-----------------------------------------------------------------------------------*/
/*	Google Map Shortcode
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'EightDegree_google_map' ) ){
	function EightDegree_google_map($atts, $content = null) {
		global $EightDegree_Options;
		extract(shortcode_atts(array(
				'title'		=> '',
				'location'	=> '',
				'height'	=> '350',
				'zoom'		=> 8,
				'class'		=> '',
				'full_width' => '',
		), $atts));
		if( $atts['full_width'] == 'yes' ){
			$output ='</div>';
	    }
		$output .= '<div id="map_canvas_'.rand(1, 100).'" class="googlemap '. $class .'" style="height:'.$height.'px;width:100%">';
			$output .= (!empty($title)) ? '<input class="title" type="hidden" value="'.$title.'" />' : '';
			$output .= '<input class="location" type="hidden" value="'.$location.'" />';
			$output .= '<input class="zoom" type="hidden" value="'.$zoom.'" />';
			if (isset($EightDegree_Options)){
				$output .= '<input class="hue" type="hidden" value="'.$EightDegree_Options->get('39').'" />';
				$output .= '<input class="saturation" type="hidden" value="'.$EightDegree_Options->get('40').'" />';
				$output .= '<input class="lightness" type="hidden" value="'.$EightDegree_Options->get('42').'" />';
				$output .= '<input class="iconLink" type="hidden" value="'.$EightDegree_Options->get('41').'" />';
				$output .= '<input class="styledMap" type="hidden" value="'.$EightDegree_Options->get('ed_styled_map').'" />';
				
			}	
			
	    	$output .= '<div class="map_canvas"></div>';
	    	
		
		$output .= '</div>';
		if( $atts['full_width'] == 'yes' ){
			$output .='<div class="grid">';
	    }
		return $output;
	}
	add_shortcode("google_map", "EightDegree_google_map");
}

/*-----------------------------------------------------------------------------------*/
/*	Testimonials Shortcodes
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'EightDegree_testimonials_slider' ) ){
	function EightDegree_testimonials_slider( $atts, $content = null ) {
	     extract( shortcode_atts( array(
	    'style' => '',
	    ), $atts )
	    );
	    $output  =  '<div class="flexslider testimonials '.$atts['style'].'">';
	    $output .=  '<ul class="slides">';
	    $output .=  do_shortcode($content);
	    $output .=  '</ul></div>';
	    return $output;
	}
	add_shortcode( 'testimonials_slider', 'EightDegree_testimonials_slider' ); 
}
if (! function_exists( 'EightDegree_testimonial' ) ){
	function EightDegree_testimonial( $atts, $content = null ) {
	    extract( shortcode_atts( array(
		    'image' => '',
		    'name' => '',
		    'company' => '',
		    ), $atts )
	    );
	    $output  = '<li>';
	    $output  .= '<div class="flex-caption">';
	    $output  .= '<blockquote>';
		if($atts['image']){
			$output  .= '<span class="testimonial-avatar" style="background:url('.$atts['image'].') no-repeat center center;"></span>';
		}
		$output  .= '<p>'.do_shortcode($content).'</p>';
		$output  .= '<cite>'.$atts['name'].'<span>'.$atts['company'].'</span></cite>';
	    $output  .= '</blockquote>';
	    $output  .= '</div>';
	    $output  .= '</li>';
	    return $output; 
	}
	add_shortcode( 'testimonial', 'EightDegree_testimonial' );
}

/*-----------------------------------------------------------------------------------*/
/*	Remove Auto <p> tags from shortcodes
/*-----------------------------------------------------------------------------------*/
function EightDegree_clean_shortcodes($content){   
$array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
);
$content = strtr($content, $array);
return $content;
}
add_filter('the_content', 'EightDegree_clean_shortcodes');





/*-----------------------------------------------------------------------------------*/
/*	Video Slide
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'EightDegree_video_slide' ) ){
	function EightDegree_video_slide( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'type' => '',
	    'url' => '',
	    'mp4' => '',
	    'ogg' => '',
	    ), $atts )
	    );
	    $output  = '<div class="videobg" style="position:relative; z-index: -99; width: 100%; height: 100%" data-0="top:0px;" data-1500="top:650px;">';
		if($atts['type'] == 'local'){
			if(isset($atts['url'])){
				$output  .= '<video class="video" src="'.$atts['url'].'" loop ></video>';
			}
			else{
				$output .= '<video class="video" loop >';
				$output  .= '<source src="'.$atts['mp4'].'" type="video/mp4">';
	  			$output  .= '<source src="'.$atts['ogg'].'" type="video/ogg">';
	  			$output  .=  '</video>';
			}

		}
		if ($atts['type'] == 'youtube'){
			$output .= '<div class="youtubeplayer"></div>';
			$output .= '<input class="tubelink" type="hidden" value="'.$atts['url'].'" />';
		}
		if ($atts['type'] == 'vimeo'){
			$output  .= '<iframe class ="vimeoplayer" src="'.$atts['url'].'?player_id=vimeoplayer " width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		}

	    $output  .= '</div>';
	    return $output; 
	}
	add_shortcode( 'video_slide', 'EightDegree_video_slide' );
}


/*-----------------------------------------------------------------------------------*/
/*	Text Ticker
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'EightDegree_text_ticker' ) ){
	function EightDegree_text_ticker( $atts, $content = null ) {
	    $output  =  '<div class="ticker flexslider">';
	    $output .=  '<ul class="slides">';
	    $output .=  do_shortcode($content);
	    $output .=  '</ul></div>';
	    return $output;
	}
	add_shortcode( 'text_ticker', 'EightDegree_text_ticker' ); 
}

if (! function_exists( 'EightDegree_text' ) ){
	function EightDegree_text( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'size' => '',
	    ), $atts )
	    );
	    $output  = '<li>';
	    $output  .= '<h1 class="'.$atts['size'].'">';
	    $output  .= do_shortcode($content);
	    $output  .= '</h1></li>';
	    return $output; 
	}
	add_shortcode( 'text', 'EightDegree_text' );
}


/*-----------------------------------------------------------------------------------*/
/*	Pricing Table
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'EightDegree_pricing_table' ) ){
	function EightDegree_pricing_table( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    	'featured' => '',
	    	'plan' => '',
	    	'plan_description',
	    	'cost' => '',
	    	'per' => '',
	    	'button_text' => '',
	    	'button_url' => '',
	    	'button_link_target' => '',


	    ), $atts )
	    );
	    if($atts['featured'] == 'yes'){
	    	$output  = '<div class="pricing-table featured">';
	    }
	    else{
	    	$output  = '<div class="pricing-table">';
	    }
	    $output .= '<div class="pricing-header">';
	   
	     $output  .= '<h3>'.$atts['plan'].'<span class="subheading">'.$atts['plan_description'].'</span></h3>';
	    $output  .= '<span class="cost">'.$atts['cost'].'</span>';
	    if( !empty($atts['per']) ){
			$output  .= '<span class="per">Per '.$atts['per'].'</span>';
	    }

	    $output .= '</div>';
	    $output  .= '<ul>';
	    $output  .= do_shortcode($content);
	    $output  .= '</ul>';
	    $output  .= '<a target="'.$atts['button_link_target'].'" class="button colored solid large" href="'.$atts['button_url'].'">'.$atts['button_text'].'</a>';
	    $output  .= '</div>';

	    return $output; 
	}
	add_shortcode( 'pricing_table', 'EightDegree_pricing_table' );
}

if (! function_exists( 'EightDegree_feature' ) ){
	function EightDegree_feature( $atts, $content = null ) {
	    $output  = '<li>';
	    $output  .= do_shortcode($content);
	    $output  .= '</li>';
	    return $output; 
	}
	add_shortcode( 'feature', 'EightDegree_feature' );
}


/*-----------------------------------------------------------------------------------*/
/*	Icon Box Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'EightDegree_icon_box' ) ){
	function EightDegree_icon_box( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'icon' => '',
	    'color' => '',
	    'style' => '',

	    ), $atts )
	    );

	    $output  = '<div class="iconbox '.$atts['color'].' '. $atts['style'].'" >';
	    $output  .= '<div class="icon"><span class="li_'.$atts['icon'].'"></span></div>';
	    $output  .= '<div class="iconcontent">'. do_shortcode($content) .'</div>';
	    $output  .= '</div>';

  	    return $output; 
	}
	add_shortcode( 'icon_box', 'EightDegree_icon_box' );
}


/*-----------------------------------------------------------------------------------*/
/*	Counter Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'EightDegree_counter' ) ){
	function EightDegree_counter( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'number' => '',
	    'details' => '',

	    ), $atts )
	    );
	    
	    $output  = '<div class="counter">';
	    $output  .= '<span class="counter-count giga">'.$atts['number'].'</span>';
	    $output  .= '<span class="counter-details">'.$atts['details'].'</span>';
	    $output  .= '</div>';

  
	    return $output; 
	}
	add_shortcode( 'counter', 'EightDegree_counter' );
}

/*-----------------------------------------------------------------------------------*/
/*	CSS Animation Shortcode
/*-----------------------------------------------------------------------------------*/
if (! function_exists( 'EightDegree_css_animation' ) ){
	function EightDegree_css_animation( $atts, $content = null ) {
	    extract( shortcode_atts( array(
	    'style' => '',

	    ), $atts )
	    );
	    
	    $output  = '<div class="css-animation ' .$atts['style'] .' ">';
	    $output  .= do_shortcode($content);
	    $output  .= '</div>';

  
	    return $output; 
	}
	add_shortcode( 'css_animation', 'EightDegree_css_animation' );
}

/*-----------------------------------------------------------------------------------*/
/*	Clients Slider
/*-----------------------------------------------------------------------------------*/

if (! function_exists( 'EightDegree_clients_slider' ) ){
	function EightDegree_clients_slider( $atts, $content = null ) {
		extract( shortcode_atts( array(
			    'items' => '',
		    ), $atts )
	    );
	    $output  =  '<div class="clients" data-items="'.$atts['items'].'">';
	    $output .=  do_shortcode($content);
	    $output .=  '</div>';
	    return $output;
	}
	add_shortcode( 'clients_slider', 'EightDegree_clients_slider' ); 
}

if (! function_exists( 'EightDegree_client' ) ){
	function EightDegree_client( $atts, $content = null ) {
	    $output  = '<div class="item">';
	    $output  .= do_shortcode($content);
	    $output  .= '</div>';
	    return $output; 
	}
	add_shortcode( 'client', 'EightDegree_client' );
}


/*-----------------------------------------------------------------------------------*/
/*	Team Shortcode
/*-----------------------------------------------------------------------------------*/
if (!function_exists('EightDegree_team')) {
	function EightDegree_team($atts){
		extract( shortcode_atts( array(
			    'style' => '',
			    'columns' => ''
		    ), $atts )
	    );
		global $post;
		$output = '';
	  	$default = array(
		    'type'      => 'team',
		    'limit' => '100'

		);
	  	$r = shortcode_atts( $default, $atts );
	  	extract( $r );
	  	if( empty($post_type) ){
	    	$post_type = $type;
			$post_type_ob = get_post_type_object( $post_type );
		}	  
	  	if( !$post_type_ob ){
	    	return '<div class="warning"><p>'.__('No such post type found.', 'eightdegree-shortcodes').'</em> found.</p></div>';
	 	}
 	  	$args = array(
		    'post_type'   => $post_type,
	    	'numberposts' => $limit,
	    	'suppress_filters' => false,
	    	'orderby'          => 'post_date',

	  	);
		$posts = get_posts( $args );
	  	$category = get_the_category();
	  	$output = '<div id="team-loading">';
		$output .= '<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>';
		$output .= '</div>';
	  	$output .= '<div id="team-details"></div>';

		if( count($posts) ){
	
			foreach( $posts as $post ): setup_postdata( $post );
				
				$role = get_post_meta( $post->ID, '_cmb_role', true );
				$icon = get_post_meta( $post->ID, '_cmb_icon', true );
				
				$twitter_link = get_post_meta( $post->ID, '_cmb_twitter_link', true ); 
				$facebook_link = get_post_meta( $post->ID, '_cmb_facebook_link', true ); 
				$dribbble_link = get_post_meta( $post->ID, '_cmb_dribbble_link', true ); 
				$github_link = get_post_meta( $post->ID, '_cmb_github_link', true ); 
				$youtube_link = get_post_meta( $post->ID, '_cmb_youtube_link', true ); 
				$vimeo_link = get_post_meta( $post->ID, '_cmb_vimeo_link', true ); 
				$instagram_link = get_post_meta( $post->ID, '_cmb_instagram_link', true );
				$pinterest_link = get_post_meta( $post->ID, '_cmb_pinterest_link', true ); 
				$wordpress_link = get_post_meta( $post->ID, '_cmb_wordpress_link', true ); 
				$google_link = get_post_meta( $post->ID, '_cmb_google_link', true );
				$flickr_link = get_post_meta( $post->ID, '_cmb_flickr_link', true );
				$linkedin_link = get_post_meta( $post->ID, '_cmb_linkedin_link', true );
				$dropbox_link = get_post_meta( $post->ID, '_cmb_dropbox_link', true ); 
				$tumblr_link = get_post_meta( $post->ID, '_cmb_tumblr_link', true ); 
				$forrest_link = get_post_meta( $post->ID, '_cmb_forrest_link', true ); 
				
				switch ($columns) {
				  case '1':
				    $team_col = 'c6 s3';
				    break;
				  
				  case '2':
				    $team_col = 'c6';
				    break;
				  
				  case '3':
				    $team_col = 'c4';
				    break;
				  
				  case '4':
				    $team_col = 'c3';
				    break; 
				  
				  case '6':
				    $team_col = 'c2';
				    break;     
				  
				  default:
				    $team_col = 'c3';
				}
				if($atts['style'] == 'left'){
					$output .= '<div class="'.$team_col.' team-member left">';	
				}
				else{
					$output .= '<div class="'.$team_col.' team-member">';
				}
				
				$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'teamMemberCropped' );
				$image_url = $image['0'];
				$output .= '<div class="team-image" style="background-image:url('.$image_url.');"><a class="viewdetails" href="'.get_permalink(get_the_ID()).'"></a>';
				$output .= '<ul class="social-networks">';
					if($twitter_link <> ''){
						$output .= '<li class="twitter"><a href="'.$twitter_link.'" target="_blank"></a></li>';
					}
					if($facebook_link <> ''){
						$output .= '<li class="facebook"><a href="'.$facebook_link.'" target="_blank"></a></li>';
					}
					if($dribbble_link <> ''){
						$output .= '<li class="dribbble"><a href="'.$dribbble_link.'" target="_blank"></a></li>';
					}
					if($github_link <> ''){
						$output .= '<li class="github"><a href="'.$github_link.'" target="_blank"></a></li>';
					}
					if($youtube_link <> ''){
						$output .= '<li class="youtube"><a href="'.$youtube_link.'" target="_blank"></a></li>';
					}
					if($vimeo_link <> ''){
						$output .= '<li class="vimeo"><a href="'.$vimeo_link.'" target="_blank"></a></li>';
					}
					if($instagram_link <> ''){
						$output .= '<li class="instagram"><a href="'.$instagram_link.'" target="_blank"></a></li>';
					}
					if($pinterest_link <> ''){
						$output .= '<li class="pinterest"><a href="'.$pinterest_link.'" target="_blank"></a></li>';
					}
					if($wordpress_link <> ''){
						$output .= '<li class="wordpress"><a href="'.$wordpress_link.'" target="_blank"></a></li>';
					}
					if($google_link <> ''){
						$output .= '<li class="google"><a href="'.$google_link.'" target="_blank"></a></li>';
					}
					if($flickr_link <> ''){
						$output .= '<li class="flickr"><a href="'.$flickr_link.'" target="_blank"></a></li>';
					}
					if($linkedin_link <> ''){
						$output .= '<li class="linkedin"><a href="'.$linkedin_link.'" target="_blank"></a></li>';
					}
					if($dropbox_link <> ''){
						$output .= '<li class="dropbox"><a href="'.$dropbox_link.'" target="_blank"></a></li>';
					}
					if($tumblr_link <> ''){
						$output .= '<li class="tumblr"><a href="'.$tumblr_link.'" target="_blank"></a></li>';
					}
					if($forrest_link <> ''){
						$output .= '<li class="forrest"><a href="'.$forrest_link.'" target="_blank"></a></li>';
					}
				$output .= '</ul>'; 

				$output .= '</div>';
				$output .= '<h4><a class="viewdetails" href="'.get_permalink(get_the_ID()).'">'. get_the_title() . '</a></h4>';
				$output .= '<span class="role"><span class="li_'.$icon.'"></span>'.$role.'</span>';
				if ( has_excerpt() ) 
				{
				    $the_excerpt = get_the_excerpt();
					$output .= "<p>$the_excerpt</p>";
				} 
				else 
				{
				    $the_excerpt = EightDegree_get_special_excerpt(3072);
					$the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $the_excerpt);
					$the_excerpt = EightDegree_string_limit_words($the_excerpt, 18);
					$output .="<p>$the_excerpt</p>";
				}


				$output .= '<a class="viewdetails button outline colored" href="'.get_permalink(get_the_ID()).'">'.__('Read More', 'eightdegree-shortcodes').'</a>';

  				$output .= '</div>';
		    endforeach; wp_reset_postdata();
		  
		}	
		else{
	    	$output .= '<p>'.__('No posts found.','eightdegree-shortcodes').'</p>';
	    }	

	 	return $output;
	}
	add_shortcode( 'team', 'EightDegree_team' );
}
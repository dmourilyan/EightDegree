<?php get_header(); ?>

<div id="primary" class="grid">         
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="c12 end"><hr></div>
	<div class="c4"><?php the_post_thumbnail(); ?></div>
	<div class="c8 end">
			<?php $EightDegree_role = get_post_meta( $post->ID, '_cmb_role', true ); ?>
			<?php $EightDegree_icon = get_post_meta( $post->ID, '_cmb_icon', true ); ?>
			<?php echo '<a id="team-close" href="#"">Close</a>'; ?>
			<h2><?php the_title(); ?></h2>
			<?php echo '<span class="role"><span class="li_'.$EightDegree_icon.'"></span>'.$EightDegree_role.'</span>'; ?>

	</div>

	

	<?php 
		the_content();  
			
		$EightDegree_twitter_link = get_post_meta( $post->ID, '_cmb_twitter_link', true ); 
		$EightDegree_facebook_link = get_post_meta( $post->ID, '_cmb_facebook_link', true ); 
		$EightDegree_dribbble_link = get_post_meta( $post->ID, '_cmb_dribbble_link', true ); 
		$EightDegree_github_link = get_post_meta( $post->ID, '_cmb_github_link', true ); 
		$EightDegree_youtube_link = get_post_meta( $post->ID, '_cmb_youtube_link', true ); 
		$EightDegree_vimeo_link = get_post_meta( $post->ID, '_cmb_vimeo_link', true ); 
		$EightDegree_instagram_link = get_post_meta( $post->ID, '_cmb_instagram_link', true );
		$EightDegree_pinterest_link = get_post_meta( $post->ID, '_cmb_pinterest_link', true ); 
		$EightDegree_wordpress_link = get_post_meta( $post->ID, '_cmb_wordpress_link', true ); 
		$EightDegree_google_link = get_post_meta( $post->ID, '_cmb_google_link', true );
		$EightDegree_flickr_link = get_post_meta( $post->ID, '_cmb_flickr_link', true );
		$EightDegree_linkedin_link = get_post_meta( $post->ID, '_cmb_linkedin_link', true );
		$EightDegree_dropbox_link = get_post_meta( $post->ID, '_cmb_dropbox_link', true ); 
		$EightDegree_tumblr_link = get_post_meta( $post->ID, '_cmb_tumblr_link', true ); 
		$EightDegree_forrest_link = get_post_meta( $post->ID, '_cmb_forrest_link', true ); 
		$EightDegree_output = '<div class="team-networks-wrap">'; 
		$EightDegree_output .= '<ul class="social-networks">';
			if($EightDegree_twitter_link <> ''){
				$EightDegree_output .= '<li class="twitter"><a href="'.$EightDegree_twitter_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_facebook_link <> ''){
				$EightDegree_output .= '<li class="facebook"><a href="'.$EightDegree_facebook_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_dribbble_link <> ''){
				$EightDegree_output .= '<li class="dribbble"><a href="'.$EightDegree_dribbble_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_github_link <> ''){
				$EightDegree_output .= '<li class="github"><a href="'.$EightDegree_github_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_youtube_link <> ''){
				$EightDegree_output .= '<li class="youtube"><a href="'.$EightDegree_youtube_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_vimeo_link <> ''){
				$EightDegree_output .= '<li class="vimeo"><a href="'.$EightDegree_vimeo_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_instagram_link <> ''){
				$EightDegree_output .= '<li class="instagram"><a href="'.$EightDegree_instagram_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_pinterest_link <> ''){
				$EightDegree_output .= '<li class="pinterest"><a href="'.$EightDegree_pinterest_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_wordpress_link <> ''){
				$EightDegree_output .= '<li class="wordpress"><a href="'.$EightDegree_wordpress_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_google_link <> ''){
				$EightDegree_output .= '<li class="google"><a href="'.$EightDegree_google_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_flickr_link <> ''){
				$EightDegree_output .= '<li class="flickr"><a href="'.$EightDegree_flickr_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_linkedin_link <> ''){
				$EightDegree_output .= '<li class="linkedin"><a href="'.$EightDegree_linkedin_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_dropbox_link <> ''){
				$EightDegree_output .= '<li class="dropbox"><a href="'.$EightDegree_dropbox_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_tumblr_link <> ''){
				$EightDegree_output .= '<li class="tumblr"><a href="'.$EightDegree_tumblr_link.'" target="_blank"></a></li>';
			}
			if($EightDegree_forrest_link <> ''){
				$EightDegree_output .= '<li class="forrest"><a href="'.$EightDegree_forrest_link.'" target="_blank"></a></li>';
			}
			$EightDegree_output .= '</ul>'; 
			$EightDegree_output .= '</div>'; 

			echo $EightDegree_output;

		?>
		<?php endwhile; ?>
	
</div>

<?php get_footer(); ?>
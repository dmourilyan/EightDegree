
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_search() || is_archive() || is_home() ) : ?>
			<div class="entry-summary">
				
				
					<?php $EightDegree_featured_image_url = get_the_post_thumbnail($post->ID);
					if($EightDegree_featured_image_url){
						echo '<div class="c12 end">';	
									echo '<a class="recent-post-img" href="'.get_permalink(get_the_ID()).'" >';
									echo get_the_post_thumbnail($post->ID);
									echo '</a>';
						echo'</div>';	
					}
					?>


					<div class="c12 end">
						<div class="entry-details">
							<span class="postdate"><?php echo get_the_date('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\y\"\>j\<\/\s\p\a\n\> M Y'); ?></span>
							<div class="entry-meta">
								<h2 class="entry-title"><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h2>
								<a class="author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo __('By ', 'eightdegree') . get_the_author() ;?></a>


							</div>
						</div>
						<?php if ( has_excerpt() ) 
							{
							    $EightDegree_the_excerpt = get_the_excerpt();
							    echo "<p>$EightDegree_the_excerpt</p>";
							} 
							else 
							{
							    $EightDegree_the_excerpt = EightDegree_get_special_excerpt(3072);
								$EightDegree_the_excerpt = preg_replace("~(?:\[/?)[^/\]]+/?\]~s", '', $EightDegree_the_excerpt);
								$EightDegree_the_excerpt = EightDegree_string_limit_words($EightDegree_the_excerpt, 75);
								echo "<p>$EightDegree_the_excerpt</p>";
							}
						?>

						<a class="button dark outline small" href="<?php echo get_permalink(get_the_ID());?>"><?php echo __('Read more', 'eightdegree'); ?></a>	

						<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) :
							$EightDegree_args = array(
								'post_id' => get_the_ID(),
								'count' => true
							);
							$EightDegree_comments = get_comments($EightDegree_args);
							echo'<a class="comment-count" href="'.get_permalink(get_the_ID()).'#comments"><span class="li_bubble"></span>'.$EightDegree_comments.'</a>';

						endif;
						?>

					</div>
					<div class="c12 end"><hr></div>
			</div>

		
		<?php else : ?>
				<div class="row">
					<div class="c12 end">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'eightdegree' ) ); ?>
						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'eightdegree' ),
						'after' => '</div>',
						) );
						?>
					</div>
				</div>
				<div class="entry-meta">
					<?php
						$EightDegree_tags_list = get_the_tag_list( '', __( ', ', 'eightdegree' ) );
						if ( $EightDegree_tags_list ) :?>
						<div class="row">
							<div class="c12 end">
								<span class="tags-links li_tag">
									<?php printf( __( 'Tagged: %1$s', 'eightdegree' ), $EightDegree_tags_list ); ?>
								</span>
							</div>	
						</div>	
						<?php endif; 
						_s_posted_on();?>
				</div>
					
		<?php endif; ?>
		     
			

</article>



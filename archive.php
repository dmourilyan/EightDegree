<?php get_header(); ?>

		<div id="primary">
   			<?php $EightDegree_blog_header = $EightDegree_Options->get('ed_blog_header'); ?>
			<?php if ( have_posts() ) : ?>
				<header class="page-header" style="background:url('<?php echo $EightDegree_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px -100px;">
					
					<nav id="nav-above">
						<div class="grid">
							<div class="c12 end">
								<?php dimox_breadcrumbs(); ?>
								<?php _s_content_nav(); ?>
							</div>
						</div>
					</nav>

					<div class="grid">
						<div class="c12 end">
								<h1 class="page-title">
							<?php
							if ( is_category() ) :
							single_cat_title();

							elseif ( is_tag() ) :
							single_tag_title();

							elseif ( is_author() ) :

							the_post();
							printf( __( 'Author: %s', 'eightdegree' ), '<span class="vcard">' . get_the_author() . '</span>' );
			
							rewind_posts();

							elseif ( is_day() ) :
							printf( __( 'Day: %s', 'eightdegree' ), '<span>' . get_the_date() . '</span>' );

							elseif ( is_month() ) :
							printf( __( 'Month: %s', 'eightdegree' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

							elseif ( is_year() ) :
							printf( __( 'Year: %s', 'eightdegree' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'eightdegree' );

							elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'eightdegree');

							elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'eightdegree' );

							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'eightdegree' );

							elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'eightdegree' );

							else :
							_e( 'Archives', 'eightdegree' );

							endif;
							?>
							</h1>
				
							<?php
							if ( is_category() ) {
								$EightDegree_category_description = category_description();
								if ( ! empty( $EightDegree_category_description ) )
									echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $EightDegree_category_description . '</div>' );

							} elseif ( is_tag() ) {
								$EightDegree_tag_description = tag_description();
								if ( ! empty( $EightDegree_tag_description ) )
									echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $EightDegree_tag_description . '</div>' );
							}?>

						</div>

					</div>


		
				</header>
				<div class="grid">
					<main id="main" class="site-content" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
								get_template_part('content', get_post_format() );
							?>
						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'no-results', 'archive' ); ?>
						<?php endif; ?>
					</main>
				
					<?php 
					$EightDegree_sidebar_pos = $EightDegree_Options->get('ed_blog_sidebar');
					if($EightDegree_sidebar_pos == 2 || $EightDegree_sidebar_pos == 3 ){
						get_sidebar();
					}
					?>		
				</div>
			</div>

<?php get_footer(); ?>
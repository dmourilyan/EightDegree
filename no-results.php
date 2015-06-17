<?php global $EightDegree_Options; ?>
<?php $EightDegree_blog_header = $EightDegree_Options->get('ed_blog_header'); ?>
	<header class="page-header" style="background:url('<?php echo $EightDegree_blog_header; ?>');" data-0="background-position:0px 0px;" data-300="background-position:0px -100px;">
		<nav id="nav-above">
			<div class="grid">
				<div class="c12 end">
					<?php dimox_breadcrumbs(); ?>
				</div>
			</div>
		</nav>
		<div class="grid">
			<div class="c12 end">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'eightdegree' ); ?></h1>
			</div>
		</div>
	</header>
	<div class="grid">
		<main id="main" class="site-content" role="main">
			<div class="row">
				<div class="c12 end">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'eightdegree' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
					<?php elseif ( is_search() ) : ?>
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'eightdegree' ); ?></p>
					<?php else : ?>
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'eightdegree' ); ?></p>
				</div>
			</div>
					<?php endif; ?>
		</main>
	


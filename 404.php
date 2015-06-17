<?php get_header(); ?>
<?php $EightDegree_blog_header = $EightDegree_Options->get('ed_blog_header'); ?>
	<div id="primary">
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
						<h1 class="tera"><?php _e( '404', 'eightdegree' ); ?></h1>
						<h1 class="entry-title"><span class="accent"><?php _e("Oops! That page can't be found.", 'eightdegree'); ?></span></h1>
					</div>
				</div>

			</header>

			<div class="grid">
				<article id="post-0" class="post error404 not-found">
					<div class="row">
						<div class="c12 end">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'eightdegree' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>
				</article>
			</div>
	</div>

<?php get_footer(); ?>
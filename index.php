<?php get_header(); ?>

<div id="primary">
<?php if ( have_posts() ) : ?>
	<?php
	$EightDegree_post_header = get_post_meta( $post->ID, '_cmb_header_image', true );
	$EightDegree_main_header = $EightDegree_Options->get('ed_blog_header'); 
	if(empty($EightDegree_post_header)){
		$EightDegree_blog_header = $EightDegree_main_header;
	}
	else{
		$EightDegree_blog_header = $EightDegree_post_header;
	}
	?>
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
				<h1 class="page-title"><?php $EightDegree_Options->show('ed_posts_page'); ?></h1>
			</div>
		</div>

	</header>		
<div class="grid">
<main id="main" class="site-content" role="main">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content'); ?>

<?php endwhile; ?>


<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

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



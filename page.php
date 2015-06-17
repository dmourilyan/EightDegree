<?php get_header(); ?>
<main id="main" role="main">
<?php while ( have_posts() ) : the_post(); ?>
	<?php
		global $post;
		$EightDegree_bgcolor = get_post_meta( $post->ID, '_cmb_background_colorpicker', true );
		$EightDegree_bgimage = get_post_meta( $post->ID, '_cmb_background_image', true );
		$EightDegree_descriptiontext = get_post_meta( $post->ID, '_cmb_description_text', true );
		$EightDegree_headingstyle = get_post_meta( $post->ID, '_cmb_heading_style', true );
		$EightDegree_headingalign = get_post_meta( $post->ID, '_cmb_heading_align', true );
		$EightDegree_headingcolor = get_post_meta( $post->ID, '_cmb_heading_colorpicker', true );
		$EightDegree_description_position = get_post_meta( $post->ID, '_cmb_description_position', true );
	?>
	<div class="page" style='background-color:<?php echo $EightDegree_bgcolor ?>;<?php  if (!empty($EightDegree_bgimage)) { echo "background-image:url($EightDegree_bgimage);"; } ?>'>
		<div class="grid">
				

			<?php if($EightDegree_headingalign == "left" && $EightDegree_headingstyle != "noheading"){
				echo "<div class='c12 end alignleft pageheading'>";
			} 
			elseif ($EightDegree_headingalign == "center" && $EightDegree_headingstyle != "noheading") {
				echo "<div class='c10 s1 aligncenter pageheading'>";
			}
			elseif ($EightDegree_headingalign == "right" && $EightDegree_headingstyle != "noheading") {
				echo "<div class='c12 end alignright pageheading'>";
			}
			elseif ($EightDegree_headingstyle != "noheading"){
				echo "<div class='c12 end pageheading'>";
			}
			?>
					<?php
					if($EightDegree_description_position == "below"){ 
						if ($EightDegree_headingstyle == "standard") {
							echo "<h1 style='color:".$EightDegree_headingcolor.";'>" . get_the_title() . "</h1>";
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle == "dottedleftright") {
							echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'><span style='background-color:$EightDegree_bgcolor;'>" . get_the_title() . "</span></h1>";
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle != "noheading") {
							echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'>" . get_the_title() . "</h1>";
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle == "noheading" && $EightDegree_descriptiontext != ''){
							echo "<div class='c12 end'><p>$EightDegree_descriptiontext</p></div>";
						}
					}
					else{
						if ($EightDegree_headingstyle == "standard") {
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "<h1 style='color:".$EightDegree_headingcolor.";'>" . get_the_title() . "</h1>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle == "dottedleftright") {
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'><span style='background-color:$EightDegree_bgcolor;'>" . get_the_title() . "</span></h1>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle != "noheading") {
							echo "<p>$EightDegree_descriptiontext</p>";
							echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'>" . get_the_title() . "</h1>";
							echo "</div>";
						}
						elseif ($EightDegree_headingstyle == "noheading" && $EightDegree_descriptiontext != ''){
							echo "<div class='c12 end'><p>$EightDegree_descriptiontext</p></div>";
						}

					}	
					?>
				
				<?php the_content(); ?>
		</div>
	</div>

<?php endwhile;  ?>
</main>	

<?php get_footer(); ?>


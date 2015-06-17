<?php
/**
 * Template Name: Single Page
 * Description: A Template for displaying pages in a single page.
 *
 */
get_header();
?>
<main id="main" role="main">
<div id="<?php echo sanitize_title(get_the_title()); ?>">
	<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile;  ?>
</div>
<?php
$EightDegree_pageid = get_the_ID();
$EightDegree_args = array(
	'sort_order' => 'ASC',
	'child_of' => $EightDegree_pageid,
	'sort_column' => 'menu_order', 
	'hierarchical' => 1,
	'exclude' => '',
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);

$EightDegree_pages = get_pages($EightDegree_args);


foreach ($EightDegree_pages as $EightDegree_page_data) {
    $EightDegree_content = apply_filters('the_content', $EightDegree_page_data->post_content);
    $EightDegree_title = $EightDegree_page_data->post_title;
    $EightDegree_id = sanitize_title($EightDegree_title);
    $EightDegree_slug = $EightDegree_page_data->post_name;
    $EightDegree_bgcolor = get_post_meta( $EightDegree_page_data->ID, '_cmb_background_colorpicker', true );
    $EightDegree_bgimage = get_post_meta( $EightDegree_page_data->ID, '_cmb_background_image', true );
    $EightDegree_descriptiontext = get_post_meta( $EightDegree_page_data->ID, '_cmb_description_text', true );
    $EightDegree_headingstyle = get_post_meta( $EightDegree_page_data->ID, '_cmb_heading_style', true );
    $EightDegree_headingalign = get_post_meta( $EightDegree_page_data->ID, '_cmb_heading_align', true );
    $EightDegree_headingcolor = get_post_meta( $EightDegree_page_data->ID, '_cmb_heading_colorpicker', true );
    $EightDegree_description_position = get_post_meta( $EightDegree_page_data->ID, '_cmb_description_position', true );


?>
<div id='<?php echo "$EightDegree_id"; ?>' class="page" style='background-color:<?php echo $EightDegree_bgcolor ?>;<?php  if (!empty($EightDegree_bgimage)) { echo "background-image:url($EightDegree_bgimage);"; } ?>' >
	<div class="grid">
		
		<?php if($EightDegree_headingalign == "left" && $EightDegree_headingstyle != "noheading"){
			echo "<div class='c12 end alignleft pageheading'>";
		} 
		elseif ($EightDegree_headingalign == "center" && $EightDegree_headingstyle != "noheading") {
			echo "<div class='c10 s1 aligncenter pageheading'>";
		}
		elseif ($EightDegree_headingalign == "right" && $EightDegree_headingstyle != "noheading" ) {
			echo "<div class='c12 end alignright pageheading'>";
		}
		elseif ($EightDegree_headingstyle != "noheading"){
			echo "<div class='c12 end pageheading'>";
		}
		?>

			<?php
			if($EightDegree_description_position == "below"){

				if ($EightDegree_headingstyle == "standard") {
					echo "<h1 style='color:".$EightDegree_headingcolor.";'>$EightDegree_title</h1>";
					echo "<p>$EightDegree_descriptiontext</p>";
					echo "</div>";
				}
				elseif ($EightDegree_headingstyle == "dottedleftright") {
					echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'><span style='background-color:$EightDegree_bgcolor;'>$EightDegree_title</span></h1>";
					echo "<p>$EightDegree_descriptiontext</p>";
					echo "</div>";
				}
				elseif ($EightDegree_headingstyle != "noheading") {
					echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'>$EightDegree_title</h1>";
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
					echo "<h1 style='color:".$EightDegree_headingcolor.";'>$EightDegree_title</h1>";
					echo "</div>";
				}
				elseif ($EightDegree_headingstyle == "dottedleftright") {
					echo "<p>$EightDegree_descriptiontext</p>";
					echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'><span style='background-color:$EightDegree_bgcolor;'>$EightDegree_title</span></h1>";
					echo "</div>";
				}
				elseif ($EightDegree_headingstyle != "noheading") {
					echo "<p>$EightDegree_descriptiontext</p>";
					echo "<h1 style='color:".$EightDegree_headingcolor.";' class='".$EightDegree_headingstyle."'>$EightDegree_title</h1>";
					echo "</div>";
				}

				elseif ($EightDegree_headingstyle == "noheading" && $EightDegree_descriptiontext != ''){
					echo "<div class='c12 end'><p>$EightDegree_descriptiontext</p></div>";
				}

			}

			
			?>

		
		<?php echo "$EightDegree_content"; ?>
	</div>
</div>

<?php } ?>

</main>
<?php get_footer(); ?>


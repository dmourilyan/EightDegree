

<?php global $EightDegree_Options; ?>
	<footer class="footer row">
		<div id="scroll-top"></div>
		<div class="grid">
	 		<div class="c12 end" >
	 			<a class="footerLogo" href="<?php echo get_home_url(); ?>"><img src="<?php $EightDegree_Options->show('ed_footer_logo'); ?>"/></a>
		 		<?php 
	 			 $EightDegree_icons_display = $EightDegree_Options->get('ed_footer_social_icons'); 
	 			 if($EightDegree_icons_display == 1){
	 			 	if (function_exists('EightDegree_social_networks')) {
	 			 		echo do_shortcode( '[social_networks]' );
	 			 	}	
	 			}
		 		?> 
		 		<small>© <?php $EightDegree_Options->show('ed_copyright_text'); ?></small>

		 	</div>
		</div>

				
	</footer>
	<script>
		var flex_slider_animation = "<?php $EightDegree_Options->show('ed_flex_animation'); ?>",
			flex_slider_direction = "<?php $EightDegree_Options->show('ed_flex_direction'); ?>",
			flex_slider_auto_play = "<?php $EightDegree_Options->show('ed_flex_auto_play'); ?>",
			flex_slider_slideshowspeed = "<?php $EightDegree_Options->show('ed_flex_play_speed'); ?>",
			flex_slider_controlnav = "<?php $EightDegree_Options->show('ed_flex_controll'); ?>",
			testimonials_auto_play = "<?php $EightDegree_Options->show('ed_testimonials_auto_play'); ?>",
			superslider_play = "<?php $EightDegree_Options->show('ed_super_play'); ?>",
			superslider_pagination = "<?php $EightDegree_Options->show('ed_super_pagi'); ?>",
			superslider_animation = "<?php $EightDegree_Options->show('ed_super_animation'); ?>",
			menu_style = "<?php $EightDegree_Options->show('ed_nav_postion'); ?>";
	</script>



	<?php if (is_front_page()) {?>
		<script>
			jQuery(document).ready(function($) {  
				$(".nav-links li a:contains('Home') , .nav-links li a:contains('home')").parent().addClass('nav-active');
				$(window).load(function () {
					if (Modernizr.history){
						history.replaceState('', document.title, window.location.pathname); 
					}
				});
			});
		</script>
	<?php }
	else { ?>
		<script>
			jQuery(document).ready(function($) {  
				if($('body').hasClass('single') || $('body').hasClass('archive') || $('body').hasClass('search') || $('body').hasClass('error404')){
					$(".nav-links li a:contains('Blog') , .nav-links li a:contains('blog')").parent().addClass('nav-active');
				}
			});
		</script>
	<?php } ?>      


<?php wp_footer(); ?>
</body>
</html>


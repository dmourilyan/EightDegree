<?php

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new eightdegree_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="eightdegree-popup">

	<div id="eightdegree-shortcode-wrap">
		
		<div id="eightdegree-sc-form-wrap">
		
			<div id="eightdegree-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#eightdegree-sc-form-head -->
			
			<form method="post" id="eightdegree-sc-form">
			
				<table id="eightdegree-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary eightdegree-insert">Insert Shortcode</a></td>							
						</tr>
					</tbody>
				
				</table>
				<!-- /#eightdegree-sc-form-table -->
				
			</form>
			<!-- /#eightdegree-sc-form -->
		
		</div>
		<!-- /#eightdegree-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#eightdegree-shortcode-wrap -->

</div>
<!-- /#eightdegree-popup -->

</body>
</html>
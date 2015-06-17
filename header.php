<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->

<?php global $EightDegree_Options; ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=100" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php $EightDegree_Options->show('ed_favicon'); ?>" type="image/x-icon" />

<?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<nav id="primary-nav">
	    <!--Navigation-->
	    <div class="mainnav mainnavhide">
		    <div class="grid">
		        <div class="mainLogo"><a href="<?php echo get_home_url(); ?>"><img id="mainLogo" alt="" src="<?php $EightDegree_Options->show('1'); ?>" data-at2x="<?php $EightDegree_Options->show('retina_logo'); ?>"/></a></div>
				<span id="menubutton"></span>
					<?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'walker'=> new EightDegree_page_walker,
                                'container' => false,
                                'items_wrap' => '<ul class="nav-links">%3$s</ul>',
                                'fallback_cb' => 'EightDegree_default_menu_cb'
                            )
                        );

						?>
			</div>	
		</div>
	</nav>
		



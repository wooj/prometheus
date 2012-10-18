<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php wp_title(''); ?></title>
	<!-- --------------------------------------------------------------------------------------------------------------------------------------------------
	                  
					                                                       PROMETHEUS HEADER
 
	---------------------------------------------------------------------------------------------------------------------------------------------------->
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <?php echo the_option('google_site_verification_code'); ?>

	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><![endif]-->
	
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/cssie7.css" type="text/css" media="screen" />
    <![endif]-->
	
    <!--[if IE 6]>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/ie6.css" type="text/css" media="screen" />
    <![endif]-->
	
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/includes/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
	<![endif]-->
	
    <link rel="shortcut icon" href="<?php echo the_option('favicon'); ?>" type="image/x-icon" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


		<!----------------------------------------------------------------------------------------------------------------------------------------------------
		
					                                                       stylesheets
																		   
	---------------------------------------------------------------------------------------------------------------------------------------------------->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/css/formalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/css/colors.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/css/lightbox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/prometheus.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- ** needs to be last ** -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/includes/css/slider.css" type="text/css" media="screen" /> 
	<?php include( get_template_directory().'/includes/fonts.php'); ?>
	
	
	
		<!--------------------------------------------------------------------------------------------------------------------------------------------------
		
					                                                       javascript
																		   
	---------------------------------------------------------------------------------------------------------------------------------------------------->
	
	<?php wp_head(); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<script src="<?php bloginfo('template_url'); ?>/includes/js/jquery.tools.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/js/jquery.easing.1.3.min.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/includes/js/slider/jquery.slider.min.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/includes/js/jquery.ui.touch-punch.min.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/includes/js/jquery.formalize.min.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/includes/js/lightbox/jquery.lightbox.min.js" type="text/javascript" ></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript" ></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript" ></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/js/jquery.stickyPanel.min.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/includes/js/socialite.min.js"></script>


	<?php echo '<style>'.the_option('custom_css').'</style>'; ?>
	<?php echo the_option('google_analytics_code'); ?>
	
	<script type="text/javascript">  jQuery(document).ready(function($){ $('.lightbox').lightbox();  });	</script>

	<script type="text/javascript">
        $().ready(function () {
            var stickyPanelOptions = {
                topPadding:0,
                afterDetachCSSClass: "scrollbar_styles",
                savePanelSpace: false            };
            $("nav").stickyPanel(stickyPanelOptions);
        });
    </script>
	
	<style>
					 .scrollbar_styles{ 	
							box-shadow: 0 0 4px rgba(176,176,176, 1);
							-webkit-box-shadow: 0 0 4px rgba(176,176,176, 1); 
							-moz-box-shadow: 0 0 4px rgba(176,176,176, 1);}
	</style>

	<script>

	// Only use jQuery if the website already makes extensive use of it!

	$(document).ready(function()
	{
		$('.the_post').one('mouseenter', function()
		{
			Socialite.load($(this)[0]);
		});
	});

	</script>

	</head>
	
	<body onload="initialize()" <?php body_class(); ?>>
	
	<headerwrap style="background:url('<?php echo the_option('headerwrap_bg'); ?>'); background-size:100%;background-repeat:<?php echo the_option('headerwrap_bg_repeat'); ?>;background-position:center;">
	<header style="width:960px;margin:0 auto;background:url('<?php echo the_option('header_bg'); ?>');background-size:auto;background-repeat:<?php echo the_option('header_bg_repeat'); ?>;background-position:center;">
				<?php if( the_option('logo_image')) : ?>
					<logo style="height: 100%;width: <?php echo the_option('logo_width');?>px;background:url('<?php  echo the_option('logo_image'); ?>');background-size: 100%;top: <?php echo the_option('logo_top'); ?>px;background-position:center;background-repeat:no-repeat;"></logo>
				<!--Fill what's empty. Empty what's full. Scratch where it itches. -->
				<?php else : ?>	
				
				<logo style="height:100%;width: <?php echo the_option('logo_width');?>px;background:url('<?php  bloginfo('template_url'); ?>/css/images/placeholder/logo.png');background-size: 100%;top: <?php echo the_option('logo_top'); ?>px;">
				<!--Fill what's empty. Empty what's full. Scratch where it itches. -->
				</logo>
				
				<?php endif;  ?>

		
		<content><?php echo the_option('header_content'); ?></content>
		
		<banner468x60><img src="<?php echo the_option('468x60_1'); ?>"></banner468x60>
		
		<phone1><span id="call_us">Call Us</span><span id="number"> <?php echo the_option('phone_1'); ?></span></phone1>
		
		<gvoice><?php echo the_option('google_call_widget'); ?></gvoice>
		
		<fsubscribe>
			<fb:subscribe href="http://www.facebook.com/<?php echo the_option('facebook_url'); ?>" width="140" data-layout="button_count">
			</fb:subscribe>
		</fsubscribe>
		
		<tfollow>
			<a href="https://twitter.com/<?php echo the_option('twitter_url'); ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">				Follow <?php echo the_option('twitter_url'); ?>
			</a>
		</tfollow>
		
	<?php 
		if( function_exists( 'ot_get_option') ) : 		
			$images = ot_get_option( 'header_images', array() ); 
				if( !empty( $images ) ) : 
					foreach( $images as $image ) : 
						echo '<img id="'.$image['header_image_id'].'" src="'.$image['header_image'].'">';
					endforeach;
				endif;
		endif;
	?>

	</header>

		<nav id="global" class="stickyPanel">
			<?php
				wp_nav_menu( 
					array( 
						'container' => 'div', 
						'theme_location' => 'global_menu', 
						'container_class' => 'horizontal', 
						'menu_class' => 'dropdown', 
						'container_id' => 'global_menu_wrap', 
						'menu'=> 'global',
						'fallback_cb'=>'get_default_menu_horizontal'
					)
				); 
			?>
		<social28><?php include(get_template_directory().'/includes/social28.php'); ?></social28>
		</nav><!-- nav#global -->

	</headerwrap>


<?php get_header(); ?>

<style>

#about_page {padding-top:220px;}
#about_page .social_media_button { display:inline-block;margin-bottom:10px;}
#about_page xxxlarge { font-size:100px;margin:0;margin-top:100px;}
</style>

<?php 
$business_name = the_option('business_name');
$address = the_option('address'); 
$city = the_option('city'); 
$state = the_option('state');
$zipcode = the_option('zipcode'); 
?>

<div id="about_page" class="container">
<div class="one_half column alpha">
<xxxlarge>CONTACT US : </xxxlarge>
</div>
<div class="one_half column omega">
	<?php $footer_contact_form_id =  the_option('footer_contact_form_id'); ?>
					<div class="form_wrap" style="background:#eee;padding:20px;">
						<?php gravity_form( $footer_contact_form_id, false, false, false, '', false); ?>
					</div><!-- .form_wrap -->
</div>


<hr>

<div class="one_half column alpha">
<xxxlarge>FIND US : </xxxlarge>
</div>

<div class="one_half column omega">
	<?php echo do_shortcode('[gmap height="360px" width="460px"]'.$address.' '.$city.','.$state.'[/gmap]'); ?>
	<br/>
	<?php echo $business_name; ?><br/>
	<?php echo $address; ?><br/>
	<?php echo $city.','.$state.' '.$zipcode; ?>
</div>
<hr>
	<div class="one_half column alpha">
		<xxxlarge>FOLLOW US : </xxxlarge>
	</div>
	<div class="one_half column omega" style="padding-top:120px;">

		<a class="social_media_button" href="#">
			<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/facebook-medium.png">
		</a>
		
		<a class="social_media_button"  href="#">
			<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/twitter-medium.png">
		</a>
		
		<a class="social_media_button"  href="#">
		<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/pinterest-medium.png">

		</a>
		
		<a class="social_media_button"  href="#">
						<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/googleplus-medium.png">
		</a>
		
		<a class="social_media_button"  href="#">
			<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/rss-medium.png">
		</a>
		
		<a class="social_media_button"  href="#">
		<img src="<?php bloginfo('template_url'); ?>/includes/css/images/social_media_buttons/linkedin-medium.png">

		</a>
	</div></div><!-- #container -->

<?php get_footer(); ?>
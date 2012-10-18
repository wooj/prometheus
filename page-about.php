<?php get_header(); ?>

<style>

#about_page {padding-top:20px;}
#about_page .social_media_button { display:inline-block;margin-bottom:10px;}
#about_page xxxlarge { font-size:120px;margin:0;}
</style>

<?php 
$business_name = the_option('business_name');
$address = the_option('address'); 
$city = the_option('city'); 
$state = the_option('state');
$zipcode = the_option('zipcode'); 
?>

<div id="about_page" class="container">

<blockwrap>
<block>
<onehalf>
<xxxlarge style="display:inline-block;margin-top:100px;">ABOUT US : </xxxlarge>

</onehalf>
<onehalf>
<p><?php echo the_option('about'); ?></p>
</onehalf>
</block>
</blockwrap>
<hr>

<div class="one_half column alpha">
<xxxlarge style="margin-top:100px;">FIND US : </xxxlarge>
</div>

<div class="one_half column omega">
	<?php echo do_shortcode('[gmap height="300px" width="400px"]'.$address.' '.$city.','.$state.'[/gmap]'); ?>
	<br/>
	<?php echo $business_name; ?><br/>
	<?php echo $address; ?><br/>
	<?php echo $city.','.$state.' '.$zipcode; ?>
</div>
<hr>
	<div class="one_half column alpha">
		<xxxlarge style="margin-top:84px;">FOLLOW US : </xxxlarge>
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
	</div>

</div><!-- #container -->

<?php get_footer(); ?>
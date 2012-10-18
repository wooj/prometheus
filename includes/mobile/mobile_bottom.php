<?php 
$args = array('-','.',' ');
$phone_long = the_option('phone_1'); 
$phone = str_replace( $args, '', $phone_long); 
?>

		
		
		<div id="bottom_nav">
<a id="phone3"  href="tel:<?php echo $phone; ?> "><span class="text" style="left:14px;">Call Us</span></a>
<a id="car" href="http://maps.google.com/?q=<?php echo the_option('address'); ?>,<?php echo the_option('city'); ?>,<?php echo the_option('state'); ?>,<?php echo the_option('zipcode'); ?>"><span style="left:6px;" class="text">Directions</span></a>
<a id="rss"href="<?php bloginfo('url'); ?>/rss/"><span style="left:27px;" class="text">Blog</span></a>
<a id="mail" href="mailto:<?php echo the_option('email'); ?>"><span style="left:15px;" class="text">Contact</span></a>
</div>

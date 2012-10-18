<!DOCTYPE html> 
<html> 
		<?php include( get_template_directory().'/includes/mobile/mobile_header.php'); ?>
<body>

    
<?php include( get_template_directory().'/includes/mobile/mobile_top.php'); ?>
<?php include( get_template_directory().'/includes/mobile/mobile_content.php'); ?>
<?php include( get_template_directory().'/includes/mobile/mobile_bottom.php'); ?>


<style>
#mobile_home_button, #mobile_back{ text-decoration:none;}
</style>
<!-- SCRIPTS -->

<!-- add to homepage bubble on iphone, ipad  -->
<script type="text/javascript">
	if ('standalone' in navigator && !navigator.standalone && (/iphone|ipod|ipad/gi).test(navigator.platform) && (/Safari/i).test(navigator.appVersion)) {
		document.write('<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile/assets\/add-bubble\/style\/add2home.css">');
		document.write('<script type="application\/javascript" src="<?php bloginfo('template_url'); ?>/mobile/assets\/add-bubble\/src\/add2home.js" charset="utf-8"><\/s' + 'cript>');
	}
</script>
<!-- /add to homepage bubble on iphone, ipad  --> 

</body>
</html>
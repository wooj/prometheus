			
<?php 		
		if( the_option('footer_one') == 'on'  ) :  include(get_template_directory().'/footer_one.php'); 
		
		endif; 
?>

<?php 
		
		if( the_option('footer_two') == 'on'  ) : include(get_template_directory().'/footer_two.php'); 
		
		endif; 
?>

	<?php if (the_option('facebook_social_media') == 'on') : ?>
		<!-- Facebook JS Code -->
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=185388058229093";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php endif; ?>

	<?php if(the_option('twitter_social_media') == 'on') : ?>
	<!-- Twitter JS Code -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<?php endif; ?>
	
	<?php if(the_option('googleplus_social_media') == 'on') : ?>
	<!-- Google Plus JS Code -->
	<script type="text/javascript">
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
	<?php endif; ?>
	
	<?php if(the_option('pinterest_social_media') == 'on') : ?>
	<!-- Pinterest JS Code -->
	<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
	<?php endif; ?>
<?php wp_footer(); ?>
		</body>
	</html>


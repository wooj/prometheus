<div data-role="content" style="display:block;padding-top:50px;">
  		
		<?php if(the_option('mobile_image')) : ?>
		<img style="width:100%;" src="<?php echo the_option('mobile_image'); ?>">
		<?php elseif( the_option('profile_image')) : ?>
		<img style="width:100%;" src="<?php echo the_option('profile_image'); ?>">
		
		<?php else : ?>
		
		<img style="margin-bottom:65px;width:100%;" src="<?php bloginfo('template_url'); ?>/includes/css/images/placeholder/mobile.png">
		
		<?php endif; ?>
		
		<?php echo the_option('about'); ?>
  </div>

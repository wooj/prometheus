<?php
/*
Template Name: Front Page 
*/
?>
		<?php if(is_mobile()) : ?>
		
		<?php include(get_template_directory().'/includes/mobile/mobile_front_page.php'); ?>
		
		<?php else :  ?>
		
		<?php get_header(); ?> 
		
		<?php if(get_field('featured_slider_option') == 'on') : ?>
			<?php include( get_template_directory().'/featured_slider.php'); ?>
		<?php endif; ?>
		
		<?php the_content(); ?>
		<?php get_footer(); ?>



		<?php endif;?><!-- is_mobile() -->
	
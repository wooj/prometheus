<?php
/*
Template Name: Front Page 
*/
?>
		<?php if(is_mobile()) : ?>
		
		<?php include(get_template_directory().'/includes/mobile/mobile_front_page.php'); ?>
		
		<?php else :  ?>
		
		<?php get_header(); ?> 
		
		<?php the_content(); ?>
		<?php get_footer(); ?>



		<?php endif;?><!-- is_mobile() -->
	
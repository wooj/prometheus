<?php 
/* 

Template Name: Page w/ Optin

*/
?>
<?php get_header(); ?> 

<div id="page_container_wrap" class="container_wrap">
    <div id="page_container" class="container" style="margin-top:40px;position:relative;">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>


				<div class="three_fourth column">
				
					<div class="content">
					<?php the_content(); ?>
					<?php endwhile; ?>
					<?php else : ?>
						<h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
					<?php endif; ?>
					</div><!-- content -->
				
				</div><!-- .three_fourth column -->
				
				<div class="one_fourth column">
				<?php get_sidebar('optin'); ?>
				</div><!-- one_fourth column -->


			</div><!-- container -->
		</div><!-- container_wrap -->
		
		<?php get_footer(); ?>
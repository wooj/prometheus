<?php
/*
Template Name: Page - NO SIDEBAR
*/
?>

<?php get_header(); ?> 


<div id="page_container_wrap" class="container" style="margin-top:60px;">
            <div id="page_container" class="container">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<div class="content">
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
			</div><!-- content -->



			</div><!-- container -->
		</div><!-- container_wrap -->
		
			<?php include( get_template_directory().'/content_blocks.php'); ?>
<?php get_footer(); ?>

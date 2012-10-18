<?php
/*
Template Name: Content Editor Template
*/
?>

<?php get_header(); ?> 

    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>


			<?php include( get_template_directory().'/content_blocks.php'); ?>
<?php get_footer(); ?>

<?php
/*
Template Name: Blank Page Template
*/
?>

<?php include(get_template_directory().'/includes/header-blank.php'); ?>

    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <xxxlarge><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></xxxlarge>
            <?php endif; ?>

<?php get_header(); ?> 
<div id="search_container_wrap" class="container_wrap">
<div id="search_container" class="container">
              <span id="search_title" class="xxxlarge">Search Result(s) for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('&#8220;'); echo $key; _e('&#8221;'); _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></span>


            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="the_post">
					<div class="post_image">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<div class="post_details">
						<div class="post_title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title() ?>
							</a>
						</div><!-- post_title -->
						<div class="clr"></div>

					
					<div class="post_excerpt">
						<?php the_excerpt_dynamic(200); ?>
					</div><!-- post_excerpt -->
										</div><!-- post_details -->
				</div><!-- the_post -->
				<div class="clr"></div>
            <?php endwhile; ?>
			
            <?php else : ?>
                <h1 id="error" style="padding-bottom:100px;">
					<?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?>
				</h1>
            <?php endif; ?>

            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			
</div><!-- container -->
</div><!-- container_wrap -->
<?php get_footer(); ?>

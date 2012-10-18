<?php get_header(); ?> 
  		<?php get_header(); ?>
		
		<div id="archive_page_title_container_wrap" class="container_wrap">
			<div id="archive_page_title_container" class="container">
				
				
				<div id="breadcrumb" style="margin-bottom:6px;">

				  <?php /* If this is a category archive */ if (is_category()) { ?>
					<div class="archive_helper" style="float:left;">You Are Viewing Articles From &rarr;</div>
                    <div id="archive_title" style="float:left;"><?php printf(single_cat_title('', false)); ?></div>

                  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

                    <h2 class="page_title"><span><a href="<?php bloginfo(url); ?>">Home</a></span><?php printf(__('&nbsp;&rarr;&nbsp;%s&nbsp;'), single_tag_title('', false) ); ?></h2>

                  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

                    <h2 class="page_title"><span><a href="<?php bloginfo(url); ?>">Home</a></span><?php printf(_c('&nbsp;&rarr;&nbsp;%s&nbsp;'), get_the_time(__('F jS, Y'))); ?></h2>

                  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

                    <h2 class="page_title"><?php printf(_c('&nbsp;&rarr;&nbsp;%s&nbsp;'), get_the_time(__('F, Y'))); ?></h3>

                  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

                    <h2 class="page_title"><?php printf(_c('&nbsp;&rarr;&nbsp;%s&nbsp;'), get_the_time(__('Y'))); ?></h3>

                  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

                    <h2 class="page_title"><?php _e('Author Archive'); ?></h2>

                  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

                   <h2 class="page_title"><?php _e('Blog Archives'); ?></h2>

                  <?php } ?>

</div>

			</div><!-- page_title container -->
		</div><!-- container_wrap -->
		
		<div id="breadcrumb_container_wrap" class="container_wrap">
			<div id="breadcrumb_container" class="container">
						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<div style="float:left;margin:.25em 0;" id="breadcrumbs">','</div>');
					} ?> 
			</div><!-- container -->
			
		</div><!-- container_wrap -->
		
		
		
		<div id="archive_container" class="container" style="margin-top:2em;">
	
			
		<?php while( have_posts()) : the_post(); ?>
		<div class="the_post">
		<div class="post_image"><?php the_post_thumbnail('one_fourth_column'); ?></div>
			<div class="post_details">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<p><?php the_excerpt(); ?></p>
			</div><!-- .post_details -->
		</div><!-- the_post -->
			<div class="clr"></div>
		<? endwhile; ?>

			<!-- #SIDEBAR BEGINS -->
			<div class="four columns offset-by-three">
		</div><!-- four columns -->
		<!-- #SIDEBAR ENDS -->
		
		</div><!-- container -->
			
		<?php get_footer(); ?>

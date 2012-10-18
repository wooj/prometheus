<?php get_header(); ?> 

<div id="blog_container_wrap" class="container_wrap">
<div id="blog_container" class="container">


<div class="three_fourth column alpha">

	<?php 

		global $paged;

		if( get_query_var( 'paged' ) ) :
			$my_page = get_query_var( 'paged' );
		else :
			if( get_query_var( 'page' ) ) :
				$my_page = get_query_var( 'page' );
			else :
				$my_page = 1;
			endif;
			
			set_query_var( 'paged', $my_page );
			$paged = $my_page;
			

		endif;

	?>
	
	<?php 



	?>

	<div id="main_blog_loop">
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="the_post clearfix">
	<div class="post_headline">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</div>
	<div class="clr"></div>
	<!-- SOCIALITE -->
	<ul class="socialite">
			<li><a href="http://twitter.com/share" class="socialite twitter-share" data-text="Socialite.js" data-url="<?php the_permalink(); ?>" data-count="horizontal" data-via="dbushell" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a></li>
			<li><a href="https://plus.google.com/share?url=http://socialitejs.com" class="socialite googleplus-one" data-size="medium" data-href="<?php the_permalink(); ?>" rel="nofollow" target="_blank"><span class="vhidden">Share on Google+</span></a></li>
			<li><a href="http://www.facebook.com/sharer.php?u=http://www.socialitejs.com&amp;t=Socialite.js" class="socialite facebook-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="standard" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a></li>
		</ul>
	<!-- SOCIALITE -->
		
	<div class="post_image" >
		<?php if( get_field('video_id') != '') : ?>
			<iframe width="223" height="165" src="http://www.youtube.com/embed/<?php the_field('video_id'); ?>" frameborder="0" allowfullscreen></iframe>
			
		<?php elseif(has_post_thumbnail()) : the_post_thumbnail('one_fourth'); ?>
		<?php else : ?>
		<img src="<?php bloginfo('template_url'); ?>/placeholders/one_fourth.jpg" >
		<?php endif; ?>
	</div>
	<div class="post_details">
		<ul class="post_meta">
			<li class="the_author"><span class="user16"></span><?php the_author_posts_link(); ?></li>
			<li class="the_time"><span class="date16"></span><?php the_time('F jS, Y'); ?></li>
			<li class="the_category"><span class="category16"></span><?php the_category(', '); ?></li>
			<div class="clr"></div>
		</ul>
		<?php comments_number( $zero, $one, $more ); ?> 
		<?php the_excerpt_dynamic(300); ?>

		</div><!-- post_details -->
<div class="clr"></div>
</div><!--the_post -->

<?php endwhile; ?>

 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi() ; } ?>
<?php wp_reset_query(); ?>

</div> <!-- #main_blog_loop-->

</div><!-- twelve columns -->
<div class="one_fourth column omega left_sidebar_wrap">
<?php get_sidebar('sidebar'); ?>
</div>
</div><!--container -->
</div><!-- container_wrap -->
		
<?php get_footer(); ?>
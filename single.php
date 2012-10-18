<?php get_header(); ?>
		
<div id="content_wrap" class="container_wrap">
		<div class="container">

		<div class="three_fourth column alpha">

			<?php while ( have_posts() ) : the_post(); ?>
			

			<div class="the_post">
			<h1><?php the_title(); ?></h1>
			
			<!-- SOCIALITE -->
				<ul class="socialite">
					<li>
						<a href="http://twitter.com/share" class="socialite twitter-share" data-text="Socialite.js" data-url="<?php the_permalink(); ?>" data-count="horizontal" data-via="dbushell" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a></li>
					<li>
						<a href="https://plus.google.com/share?url=http://socialitejs.com" class="socialite googleplus-one" data-size="medium" data-href="<?php the_permalink(); ?>" rel="nofollow" target="_blank">
						<span class="vhidden">Share on Google+</span></a></li>
					<li>
						<a href="http://www.facebook.com/sharer.php?u=http://www.socialitejs.com&amp;t=Socialite.js" class="socialite facebook-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="standard" data-width="60" data-show-faces="false" rel="nofollow" target="_blank">
							<span class="vhidden">Share on Facebook</span>
						</a>
					</li>
				</ul>
			<!-- SOCIALITE -->
	
				<div class="post_image" >
					<?php if(has_post_thumbnail()) : the_post_thumbnail('one_half'); ?>
					<?php else : ?>
					<img src="<?php bloginfo('template_url'); ?>/placeholders/one_fourth.jpg" >
					<?php endif; ?>
				</div>

				<ul class="post_meta">
					<li class="the_author"><div class="user16"></div><?php the_author_posts_link(); ?></li>
					<li class="the_time"><div class="date16"></div><?php the_time('F jS, Y'); ?></li>
					<li class="the_category"><div class="category16"></div><?php the_category(', '); ?></li>
					<div class="clr"></div>
				</ul>
				
				


			<div class="post_content"><?php the_content() ?></div>
			
			 <div id="disqus_thread" style="margin-top:100px;display:inline-block;width:560px;"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'pbco'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        
                    

		</div><!--the_post -->

<?php endwhile; ?>


</div><!-- two_thirds column alpha -->
<div class="one_fourth column omega left_sidebar_wrap">
<?php get_sidebar('blog_sidebar'); ?>
</div>
</div><!--container -->
</div><!-- container wrap -->
		<?php if( is_home() || is_single() ) : ?>

	<?php endif; ?>

			
		<?php get_footer(); ?>

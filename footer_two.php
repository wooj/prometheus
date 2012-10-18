	<div id="footer_two">
		<div id="footer_two_container" style="width:960px;margin:0 auto;">
			<span style="margin-right:40px;padding-top: 14px;display: inline-block;"><?php echo the_option('copyright'); ?></span>						
			<ul id="social_media">
				<?php if(the_option('facebook_url')) : echo '<li><a class="social20 facebook" href="'.the_option('facebook_url').'"></a></li>'; endif; ?>
				<?php if(the_option('twitter_url')) : echo '<li><a class="social20 twitter" href="'.the_option('twitter_url').'"></a></li>'; endif; ?>
				<?php if(the_option('googleplus_url')) : echo '<li><a class="social20 gplus" href="'.the_option('googleplus_url').'"></a></li>'; endif; ?>
				<?php if(the_option('youtube_url')) : echo '<li><a class="social20 youtube" href="'.the_option('youtube_url').'"></a></li>'; endif; ?>
				<?php if(the_option('linkedin_url')) : echo '<li><a class="social20 linkedin" href="'.the_option('linkedin_url').'"></a></li>'; endif; ?>
				<?php if(the_option('pinterest_url')) : echo '<li><a class="social20 pinterest" href="'.the_option('pinterest_url').'"></a></li>'; endif; ?>
				<?php if(the_option('rss_social_media') == 'on') : echo '<li><a class="social20 rss" href="'; echo bloginfo('rss_url'); echo '"></a></li>'; endif; ?>
			</ul>
		</div><!-- #footer_two_container -->
	</div><!-- #footer_two -->	
<ul id="social28">
								<?php if(the_option('facebook_url')) : echo '<li><a class="social28 facebook" href="http://www.facebook.com/'.the_option('facebook_url').'"></a></li>'; endif; ?>
								<?php if(the_option('twitter_url')) : echo '<li><a class="social28 twitter" href="http://www.twitter.com/'.the_option('twitter_url').'"></a></li>'; endif; ?>
								<?php if(the_option('googleplus_url')) : echo '<li><a class="social28 gplus" href="'.the_option('googleplus_url').'"></a></li>'; endif; ?>
								<?php if(the_option('youtube_url')) : echo '<li><a class="social28 youtube" href="http://www.youtube.com/'.the_option('youtube_url').'"></a></li>'; endif; ?>
								<?php if(the_option('linkedin_url')) : echo '<li><a class="social28 linkedin" href="http://www.linkedin.com/'.the_option('linkedin_url').'"></a></li>'; endif; ?>
								<?php if(the_option('pinterest_url')) : echo '<li><a class="social28 pinterest" href="'.the_option('pinterest_url').'"></a></li>'; endif; ?>
								<?php if(the_option('rss_social_media') == 'on') : echo '<li><a class="social28 rss" href="';
								echo bloginfo('rss_url');
								echo '"></a></li>'; endif; ?>
</ul>
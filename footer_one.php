	<div id="footer_one">
		<ul id="footer_columns" class=" container secondary">
									
			<li class="one_fourth column alpha"><!-- #1 -->
									
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_footer_bar_1') ) : ?><?php endif; ?>
	
														
			<xlarge class="widgettitle">Links</xlarge>
			
				<?php 	wp_nav_menu( 
								array( 
									'container' => 'nav', 
									'theme_location' => 'footer_one', 
									'container_class' => 'vertical', 
									'menu_class' => 'vertical page', 
									'container_id' => 'footer_menu', 
									'menu'=> 'footer',
									'fallback_cb'=>'get_default_menu_vertical'
								)
							); 
					?>
														
			<xlarge style="margin-top:60px;" class="widgettitle">Follow Us</xlarge>
			<div style="margin-top:5px;"><a href="https://twitter.com/<?php echo the_option('twitter_url'); ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow <?php echo the_option('twitter_url'); ?></a></div>
			<div style="margin-top:5px;"><fb:subscribe data-colorscheme="dark" href="http://www.facebook.com/<?php echo the_option('facebook_url'); ?>" width="140" data-layout="button_count"></fb:subscribe></div>
			</li><!-- #1 -->

			<li class="one_fourth column"><!-- #2-->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_footer_bar_1') ) : ?><?php endif; ?>	
												
			<xlarge class="widgettitle">Contact Us</xlarge>
		
		<?php echo do_shortcode('[gmap type="terrain" height="140px" width="180px"]Times Square, New York, USA[/gmap]'); ?>
		
			<ul id="footer_contact_list">
				<li class="email_address">	
						<span class="mail20"></span>
						<span class="contact_info">
							<?php echo the_option('email'); ?>
						</span>
				</li>

				<li class="phone_number">
						<span class="phone20"></span>
						<span class="contact_info">
							<?php echo the_option('phone_1'); ?>
						</span>
				</li>
				
				<li class="physical_address">
						<span class="pin20"></span>
						<span class="contact_info">
							<?php echo the_option('address'); ?><br/>
							<?php echo the_option('city'); ?>, <?php echo the_option('state'); ?>&nbsp;<?php echo the_option('zipcode'); ?>
						</span>
				</li>
			</ul>

		</li><!--  #2 -->
										
			<li class="one_fourth column"><!-- #3-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_footer_bar_2') ) : ?><?php endif; ?>
	
														
				<xlarge class="widgettitle">Recent News</xlarge>
				<ul>
				<?php 
				$args = array('post_type'=>'post');
				$the_query = new WP_Query( $args );
				
				// The Loop
				
				while( $the_query->have_posts() ) : $the_query->the_post();
					echo '<li><a href="';
					echo the_permalink();
					echo '">';
					echo the_title();
					echo '</a></li>';
				endwhile;
				
				?>
				</ul>
			</li><!--  #3 -->										

			<li class="one_fourth column omega"><!-- #3-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog_footer_bar_3') ) : ?><?php endif; ?>
				<xlarge class="widgettitle">Have a Question?</xlarge>
					<?php $footer_contact_form_id =  the_option('footer_contact_form_id'); ?>
					<div class="form_wrap">
						<?php gravity_form( $footer_contact_form_id, false, false, false, '', false); ?>
					</div><!-- .form_wrap -->
			</li><!-- #3 -->
			
		</ul><!-- #footer columns -->	
									
		</div><!-- footer_widgets-->
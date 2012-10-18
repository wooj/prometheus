

<div id="featured_slider_wrap">
<div id="featured_slider_container" class="container">
<div class="slider royalSlider rsMinW">    

	<?php $args = array( 'post_type' => 'slides' , 'posts_per_page' => 4 ); ?>
	<?php $the_query = new WP_Query($args); ?>
	<?php $count = 1; ?>
	<?php if($the_query->have_posts()) : ?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

	
		<div class="rsContent">
			<?php if( $count == 1) : ?>
			<?php if(get_field('featured_image') != '' ) : ?><img id="slide_<?php echo $count; ?>_image_1" class="rsImg" src="<?php the_field('featured_image'); ?>"><?php endif; ?>
			<?php else : ?>
			<?php if(get_field('featured_image') != '' ) : ?><img id="slide_<?php echo $count; ?>_image_1" class="rsABlock" src="<?php the_field('featured_image'); ?>"><?php endif; ?>
			<?php endif; ?>
			
			<div class="rsABlock" data-move-effect="left" data-easing="easeOutSine" data-delay="100" data-speed="300" data-move-offset="20" data-move-effect="left" data-fade-effect="true" id="slide_<?php echo $count; ?>_content">
				<?php if(get_field('content')) : ?><content><?php the_field('content'); ?></content><?php endif; ?>
			</div>

		</div><!-- rsContent -->
		
		<?php $count++; ?>
		
		<?php endwhile; ?>
		
	<?php else : ?>
	
	<xlarge>No Slides</xlarge>
			
	<?php 
	
	wp_reset_query();
	
	endif; 
	
	?>
	
</div><!-- slider -->
	<script id="addJS">jQuery(document).ready(function($) {
  $('.slider').royalSlider({
    arrowsNav: true,
	autoscalewidth: true,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
			delay:4000
    	},
    transitionType:'move',
    globalCaption: true
  });
});
</script>

	

</div><!-- #featured_slider_container -->
</div><!-- #featured_slider_wrap -->


<div id="super_slider_wrap" class="container_wrap">
<div id="super_slider"  class="royalSlider default rsMinW">    

<?php 

	$slides = ot_get_option('slides',array());
	
?>
<?php if( !empty( $slides ) ) : ?>

<?php foreach( $slides as $slide ) : ?>

<div class="rsContent">
						<img class="rsImg" src="<?php echo $slide['image']; ?>">

					
						<div class="infoBlock infoBlockLeftBlack rsABlock rsNoDrag" data-move-offset="10" data-move-effect="bottom" data-speed="200">
							<xxxlarge><?php echo $slide['title']; ?></xxxlarge>
							<div class="post_content"><?php echo $slide['description']; ?></div>
							<div class="post_button"><a href="<?php echo $slide['link']; ?>">learn more</a></div>
						</div><!-- .infoBlock -->
	
					</div><!-- rsContent -->

<?php endforeach; ?>
<?php endif; ?>

</div><!-- #super slider -->
</div><!-- super slider wrap -->








<script id="addJS">jQuery(document).ready(function($) {
  $('#super_slider').royalSlider({
    arrowsNav: true,
    loop: false,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: false,
    transitionType:'move',
    globalCaption: true
  });
});
</script>

<style>
#super_slider { width:100%;
height:620px;}

.infoBlock {
  position: absolute;
  top: 30px;
  right: 30px;
  left: auto;
  max-width: 25%;
  padding-bottom: 0;
  background: #FFF;
  background: rgba(255, 255, 255, 0.8);
  overflow: hidden;
  padding: 20px;
}
.rsImg { z-index:1000;}
.coloredBlock {
  padding: 12px;
  background: rgba(255,0,0,0.6);
  color: #FFF;
   width: 200px;
   left: 20%;
   top: 5%;
}
.infoBlock {
z-index:1001;
  position: absolute;
  top: 30px;
  right: 30px;
  max-width: 25%;
  padding-bottom: 0;
  background: #FFF;
  background: rgba(255, 255, 255, 0.8);
  overflow: hidden;
  padding: 20px;
}
.infoBlockLeftBlack {
  color: #FFF;
  background: #000;
  background: rgba(0,0,0,0.75);
}
.infoBlock h4 {
  font-size: 20px;
  line-height: 1.2;
  margin: 0;
  padding-bottom: 3px;
}
.infoBlock p {
  font-size: 14px;
  margin: 4px 0 0;
}
.infoBlock a {
  color: #FFF;
  text-decoration: underline;
}
.fullWidth {
  max-width: 1400px;
  margin: 0 auto 24px;
}

@media screen and (min-width:960px) and (min-height:660px) {
  .heroSlider .rsOverflow,
  .royalSlider.heroSlider {
      height: 520px !important;
  }
}

@media screen and (min-width:960px) and (min-height:1000px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
        height: 660px !important;
    }
}
@media screen and (min-width: 0px) and (max-width: 800px) {
  .royalSlider.heroSlider,
  .royalSlider.heroSlider .rsOverflow {
    height: 300px !important;
  }

  .infoBlock h3 {
     font-size: 14px;
     line-height: 17px;
  }
}

</style>



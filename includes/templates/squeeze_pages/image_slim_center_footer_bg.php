
		<style>
			body{margin:0;padding:0;background-color:<?php the_field('body_bg_color'); ?>;color:<?php the_field('text_color'); ?>;}

			blockwrap#header { width:960px;height:400px;margin:0 auto;background:url(<?php the_field('cover_photo'); ?>);background-size:960px 400px;position:relative;}
			
			block { width:480px !important;}		
	img#redarrow { width: 100px !important;position: absolute;top: -22px;right: 35px;}
		content ul { font-size:1.25em;}
		optin { position:relative;}
	
		#headline_1 { margin-top:40px;}

		#content_1 { text-align:justify;margin-top:20px;display:inline-block;}

		
#footer { min-height:400px;}
		redtext { font-weight:900;font-size:1.75em;}


		</style>

<blockwrap id="header">
		<block style="margin-top:20px;">
<onehalf>
	<featured><img style="width:460px;" src="<?php the_field('featured_image'); ?>"></featured>
</onehalf>
				<onehalf style="margin:0 auto;text-align:center;">
					<headline id="headline_1"><?php the_field('headline_1'); ?></headline>
					<content id="content_1"><?php the_field('content_1'); ?></content>

			</onehalf>

</block>
</blockwrap>
		
		<blockwrap id="footer" class="<?php the_field('footer_bg'); ?>">
			<block>	
						<center style="margin-top:80px;display:block;margin-bottom:20px;"><redtext>Yes, I Want Access Now!</redtext></center>
				<optin class="<?php the_field('optin_bg'); ?>">
					<img id="redarrow" src="<?php bloginfo('template_url'); ?>/includes/css/images/arrows/redarrowdown.png">
						<?php 
						if( get_field('optin_number'))
{
	$optin_number = get_field('optin_number'); 
}
else
{
	$optin_number = 0 ; 
}

if ( function_exists( 'ot_get_option' ) ) {

  $optin_codes = ot_get_option( 'optin_codes', array() );
  
echo $optin_codes[$optin_number]['code'];
  
  }

  ?>
				</optin><!-- #optin -->
			</block>
		</blockwrap>
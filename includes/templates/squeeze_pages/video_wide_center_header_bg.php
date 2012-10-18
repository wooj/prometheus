	<?php ?>
	
			<style>

			content ul { font-size:1.25em;}
			
				body{margin:0;padding:0;background-color:<?php the_field('body_bg_color'); ?>;color:<?php the_field('text_color'); ?>;}

			blockwrap#header { margin:0 auto 20px;padding-top:20px;}
			#headline_1 {width:400px;}
			#content_1 { width:400px;}
			optin { position:relative;}
			blockwrap#footer{margin-top:40px;}
			redtext { font-weight:900;font-size:1.75em;}
			img#redarrow { width: 100px;position: absolute;top: -22px;right:35px;}

		</style>
<blockwrap id="header" class="<?php the_field('header_bg');?>" >
<block>

<center><?php echo the_field('video_code'); ?></center>		
</block>
</blockwrap>
		
<blockwrap id="footer" style="min-height:400px;">
<block>
			
				<onehalf>
					<headline id="headline_1"><?php the_field('headline_1'); ?></headline>
					<content id="content_1"><?php the_field('content_1'); ?></content>
				</onehalf>
				<onehalf>
					<center style="margin-bottom:20px;"><redtext>Yes, I Want Access Now!</redtext></center>

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
					</optin>
					
					<clearboth></clearboth>
				</onehalf>
</block>
</blockwrap>


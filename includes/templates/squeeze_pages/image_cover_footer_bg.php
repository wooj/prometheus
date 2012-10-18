	<?php ?>
		<style>
			content ul { font-size:1.25em;}
			
			body{margin:0;padding:0;background-color:<?php the_field('body_bg_color'); ?>;color:<?php the_field('text_color'); ?>;}

			blockwrap#header { width:960px;height:400px;margin:0 auto;background:url(<?php the_field('cover_photo'); ?>);background-size:960px 400px;position:relative;}
			#headline_1 { position:absolute;top:20px;margin-left:20px;font-size:3.5em;}
			#content_1 { width:400px;position:absolute;top:100px;margin-left:20px;}
			#headline_2 {font-size:2.5em;margin-top:20px; }
			#content_2 { width:400x;;}
			blockwrap#footer{margin-top:40px;}
			redtext { font-weight:900;font-size:1.75em;}
	img#redarrow { width: 100px;position: absolute;top: -22px;right: 35px;}
	optin { position:relative;}
			

		</style>

<blockwrap id="header">
<block style="margin-top:20px;">

	<headline id="headline_1"><?php the_field('headline_1'); ?></headline>
	<content id="content_1"><?php the_field('content_1'); ?></content>

				<clearboth></clearboth>
</block>
</blockwrap>
		
<blockwrap id="footer" class="<?php the_field('footer_bg');?>" style="padding-top:600px;">
<block style="margin-top:-600px;">
			
				<onehalf>
					<headline id="headline_2"><?php the_field('headline_2'); ?></headline>
					<content id="content_2"><?php the_field('content_2'); ?></content>
				</onehalf>
				<onehalf>
					<center style="margin-bottom:20px;"><redtext>Yes, I Want Access Now!</redtext></center>
					<optin class="<?php the_field('optin_bg'); ?>" >
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


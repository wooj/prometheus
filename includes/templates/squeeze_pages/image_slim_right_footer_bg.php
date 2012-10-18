
		<style>
			body{margin:0;padding:0;background-color:<?php the_field('body_bg_color'); ?>;color:<?php the_field('text_color'); ?>;}

			onehalf headline { width:400px;}
		featured img
		{ 

			margin: 0 auto !important;
			display: block !important;
			top: 40px !important;
			position: relative !important;
		}

		#footer { min-height:300px;padding-top:100px;}
		optin { position:relative;}

img#redarrow { width: 100px !important;position: absolute;top: -22px;
right: 35px;}
		content ul { font-size:1.25em;}

		#headline_1 { margin-top:40px;}
		#content_1 { width:400px;text-align:justify;margin-top:20px;}
		#headline_2 { font-size:2.5em;}
		
		#content_2 { width:400px;text-align:justify;margin-top:20px;}
		
		#block1 { position:relative;top:40px;}

		redtext { font-weight:900;font-size:1.75em;}

		</style>



<blockwrap id="header">
		<block>


<onehalf id="block1">

	<headline id="headline_1">
		<?php the_field('headline_1'); ?>
	</headline>
	
	<content id="content_1">
		<?php the_field('content_1'); ?>
	</content>
		
</onehalf>
<onehalf>
	<featured><img src="<?php the_field('featured_image'); ?>"></featured>
</onehalf>
</block>
</blockwrap>
		<bigclear></bigclear>
		
		<blockwrap id="footer" class="<?php echo the_field('footer_bg'); ?>">
			<block>			
				<onehalf>
					<headline id="headline_2"><?php the_field('headline_2'); ?></headline>
					<content id="content_2"><?php the_field('content_2'); ?></content>
				</onehalf>
				<onehalf>
<center style="margin-bottom:20px;"><redtext>Yes, I Want Access Now!</redtext></center>
				<optin class="<?php echo the_field('optin_bg'); ?>">
				<img id="redarrow" src="<?php bloginfo('template_url'); ?>/includes/css/images/arrows/redarrowdown.png"><?php

							if( get_field('optin_number'))
							{
								$optin_number = get_field('optin_number'); 
							}

							else
							{
								$optin_number = 0 ; 
							}

							if ( function_exists( 'ot_get_option' ) )
							{
								
								$optin_codes = ot_get_option('optin_codes', array());
								echo $optin_codes[$optin_number]['code'];

							}

						 ?>					<clear></clear>
				</optin><!-- #optin -->
			</onehalf>
			</block>
		</blockwrap>
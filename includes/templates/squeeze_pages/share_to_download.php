	<?php ?>
		<style>
			content ul { font-size:1.25em;}
					body{margin:0;padding:0;background-color:<?php the_field('body_bg_color'); ?>;color:<?php the_field('text_color'); ?>;}
			blockwrap#top { width:960px;height:400px;margin:0 auto;background-size:960px 400px;position:relative;}
			#headline_1 { position:absolute;top:20px;margin-left:20px;font-size:3.5em;}
			#content_1 { width:400px;position:absolute;top:100px;margin-left:20px;}
			#headline_2 {font-size:2.5em;margin-top:20px; }
			#content_2 { width:400x;;}
			blockwrap#bottom{margin-top:40px;}
			redtext { font-weight:900;font-size:1.75em;}

		</style>

<blockwrap id="top">
<block>

<center><img style="margin-top:40px;" src="<?php the_field('featured_image'); ?>"></center>
<center><xlarge style="width:400px;"><highlight>Help Us By Sharing Our Page To Receive Instant Access To Your Download!</highlight></xlarge></center>
<div style="margin:0 auto;width:400px;">

<center><a style="font-size:2em;" href="<?php echo the_field('download'); ?>">Download</a></center>
	
</div>

</block>
</blockwrap>


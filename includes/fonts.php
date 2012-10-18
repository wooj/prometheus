<?php 

$template_directory = get_template_directory();

	$font_style = the_option('font_style'); 
	
	switch($font_style) : 

	case 'league+opensans':  ?>
	
	<style>
	
@font-face {
    font-family: "league";
    src: url("<?php bloginfo('template_url'); ?>/includes/fonts/league_gothic/League_Gothic-webfont.eot");
    src: url("<?php bloginfo('template_url'); ?>/includes/fonts/league_gothic/League_Gothic-webfont.eot?#iefix") format("embedded-opentype"),
         url("<?php bloginfo('template_url'); ?>/includes/fonts/league_gothic/League_Gothic-webfont.woff") format("woff"),
         url("<?php bloginfo('template_url'); ?>/includes/fonts/league_gothic/League_Gothic-webfont.ttf") format("truetype"),
         url("<?php bloginfo('template_url'); ?>/includes/fonts/league_gothic/League_Gothic-webfont.svg#LeagueGothicRegular") format("svg");
    font-weight: normal;
    font-style: normal;

}


@font-face {
    font-family: 'opensans';
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-Light-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-Light-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-Light-webfont.woff') format('woff'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-Light-webfont.ttf') format('truetype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-Light-webfont.svg#OpenSansLight') format('svg');
    font-weight: 100;
    font-style: normal;

}

@font-face {
    font-family: 'opensans';
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-LightItalic-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-LightItalic-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-LightItalic-webfont.woff') format('woff'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-LightItalic-webfont.ttf') format('truetype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-LightItalic-webfont.svg#OpenSansLightItalic') format('svg');
    font-weight: 100;
    font-style: italic;
}

@font-face {
    font-family: 'opensans';
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-ExtraBold-webfont.eot');
    src: url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-ExtraBold-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-ExtraBold-webfont.woff') format('woff'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-ExtraBold-webfont.ttf') format('truetype'),
         url('<?php bloginfo('template_url'); ?>/includes/fonts/open_sans/OpenSans-ExtraBold-webfont.svg#OpenSansExtrabold') format('svg');
    font-weight: 900;
    font-style: normal;
}

body,html { font-family:opensans;}
xlarge,xxlarge,xxxlarge,headline,subheadline { font-family:league;}

</style>



<?php 

 break;
	
	
	case 'helvetica+opensans' : echo 	'<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
						 <link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">';
						 
						 echo '<style>
						 
						 .home #cover_photo_headline,xlarge,xxlarge,xxxlarge, .showcase_heading { font-family: "Lobster", Georgia, Times, serif; color:#666;} 
						 body {font-family: "Cabin", Helvetica, Arial, sans-serif;}
						  nav#front_menu a { font-family: "Cabin", Helvetica, Arial, sans-serif;}
						 
						 </style>';
	
	
	
	break;
	case 3: echo '<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">';
	
							 echo '<style>
						 
						 .home #cover_photo_headline,xlarge,xxlarge,xxxlarge, .showcase_heading { font-family: Helvetica, ArialBlack, Times, serif; color:#666;letter-spacing:-0.0625em;font-weight:900;} 
						 body {font-family: "Cabin", Helvetica, Arial, sans-serif;}
						  nav#front_menu a { font-family: "Cabin", Helvetica, Arial, sans-serif;}
						 
						 </style>';

	break;
	
	endswitch;
	
	?>

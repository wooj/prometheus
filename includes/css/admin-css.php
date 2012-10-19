echo '<style>

  #toplevel_page_ot-settings{display:none;}
	table.acf_input tbody tr td.label { background:lightseagreen !important;}
	#poststuff h3, .metabox-holder h3 { font-size:21px;color:white;background:lightseagreen;}
	#poststuff .acf_postbox p.label label { margin:20px 0;}
	table.widefat {}
	
	#poststuff h3, .metabox-holder h3 , table.acf_input tbody tr td.label {}
	
	table.acf_input tbody tr td { border-top:1px solid #fff !important;}
	.repeater table tr td.order { background:#fff !important;}
	.repeater table tr td.remove { background: #fff !important;}
	body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top:0 !important;}
	.repeater > table > tbody > tr:nth-child(even) td.order{ background:lightseagreen;}
	.repeater > table.row_layout > tbody > tr > td { font-size:470px !important;}
	.button:hover, .button-secondary:hover, .submit input:hover, input[type="button"]:hover, input[type="submit"]:hover { background:yellow;color:#000;}
	
	.button, .submit input, .button-secondary { background:lightyellow;}
	
	.button, .button-secondary, .submit input, input[type="button"], input[type="submit"], a.button, a.button-primary, a.button-secondary  { padding:6px 10px;border-radius:4px;font-size:18px;}
	
	table.acf_input tbody tr td.label label { font-size:23px; font-weight:100;color:white;}
	.acf_postbox .field textarea { font-size:15px;}
	#poststuff .acf_postbox .widefat th, #poststuff .acf_postbox .widefat td { font-size:16px;}
	
	#acf-content_block .widefat { padding:20px 0;}
	#poststuff .acf_postbox .inside {font-size:16px;}
	#poststuff .acf_postbox p.label label { font-size:13px !important;line-height:1.1em;text-shadow:1px 1px 4px yellow;}
	#wpadminbar { display:none;}
	#wpwrap { top:-33px;}
	#footer { display:none;}
	
	/*************************************************************************
													1coffee-admin.css 
 *************************************************************************************/

.button:hover,.button-secondary:hover,.submit input:hover,input[type="button"]:hover,input[type="submit"]:hover,input.button-primary,button.button-primary,a.button-primary ,input.button-primary:hover,button.button-primary:hover,a.button-primary:hover,#adminmenu .wp-submenu li:hover,#adminmenu .wp-submenu a:hover,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,#adminmenu li.current a.menu-top,.folded #adminmenu li.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head ,#adminmenu li.menu-top:hover>a,#adminmenu li.menu-top.focused>a,#adminmenu li.menu-top>a:focus,#adminmenu li.wp-not-current-submenu .wp-menu-arrow { background:lightseagreen;}


a:hover, a:active, a:focus {
    color: #000;
}  
 
#wpwrap {
	background: #aaa;
}

#adminmenuback,#adminmenuwrap {
	border-color: #555;
	background:#444;
	border-width: 0 13px 10px 0;
}

#post-body {
	background: transparent;
}

#adminmenu li.wp-menu-separator {
	padding: 8px;
	background: #555;
	border-color: #444;
}

#adminmenu div.separator {
	border-color: #555;
}

#adminmenu a.menu-top {
	padding: 8px 5px;
}

a,#adminmenu a,#poststuff #edButtonPreview,#poststuff #edButtonHTML,#the-comment-list p.comment-author strong a,#media-upload a.del-link,#media-items a.delete,.plugins a.delete,.ui-tabs-nav a {
	color: #333;
}

#adminmenu .wp-submenu a {
	color: #eee;
	padding: 8px;
}

#adminmenu .wp-submenu li:hover {
	background: #168E4C;
}

#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:hover {
	color: #fff;
}

#adminmenu a:hover, #adminmenu li.menu-top > a:focus, #adminmenu ul.wp-submenu a:hover {
	color:#fff;
}

#adminmenu .wp-submenu li.current:active,#adminmenu .wp-submenu li.current a:active,#adminmenu .wp-submenu li.current a:active {
	color: #fff;
}

#adminmenu .wp-submenu ul,#adminmenu a.menu-top,.folded #adminmenu li.menu-top,#adminmenu .wp-submenu .wp-submenu-head {
	background-color: #555;
	color: #eee;
	border-top-color: #333;
	border-bottom-color: #666;
}

#adminmenu li.wp-menu-open {
	border-color: #666;
}

.button,.button-secondary,.submit input,input[type="button"],input[type="submit"],a.button,a.button-primary,a.button-secondary {
	padding: 12px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}

.button:hover,.button-secondary:hover,.submit input:hover,input[type="button"]:hover,input[type="submit"]:hover {
	color: #eee;
	text-shadow: none;
	-webkit-text-shadow: none;
	-moz-text-shadow: none;
}

input.button-primary,button.button-primary,a.button-primary {


	color:#eee;
	text-shadow: none;
	-webkit-text-shadow: none;
	-moz-text-shadow: none;
}

input.button-primary:hover,button.button-primary:hover,a.button-primary:hover,#adminmenu .wp-submenu li:hover,#adminmenu .wp-submenu a:hover {	border-color: #1f6261 !important;
	color: #fff !important;
}

#wpcontent select {
	height: 50px;
	vertical-align:middle;
	background:lightcyan;
}

.tablenav {
	height: 60px;
}

textarea,input[type="text"],input[type="password"],input[type="file"],input[type="button"],input[type="submit"],input[type="reset"],select {
	padding: 12px;
}

.widget,#widget-list .widget-top,.postbox,#titlediv,#poststuff .postarea,.stuffbox {
	border-color: #d0d0d0;
	border-width: 3px;
}

.widget .widget-top,.postbox h3,.stuffbox h3 {
	border-bottom-color: #666;
}

.postbox h3,.stuffbox h3 {
	border-bottom-width: 4px;
}

.widget .widget-top {
	border-bottom-width: 1px;
}

.widget:hover, #widget-list .widget-top:hover,.widget:active, #widget-list .widget-top:active,.widget:focus, #widget-list .widget-top:focus {

}

.postbox h3 {
	color: #333;
}

#adminmenu .wp-menu-arrow div{ background:transparent; left:-2px;}

#adminmenu li.menu-top:hover .wp-menu-arrow, #adminmenu li.menu-top.focused .wp-menu-arrow{ background:transparent;}
#adminmenu li.menu-top .wp-menu-arrow{ background:transparent;}





#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,#adminmenu li.current a.menu-top,#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {

	border-width: 3px 0 3px;
}



#adminmenu .wp-menu-arrow ,#adminmenu li.wp-not-current-submenu .wp-menu-arrow div{background:rgba(62,189,201,1); }

#adminmenu li,#collapse-button {
	background: #444;
}

#wpcontent,#footer {
	padding-top: 20px;
	padding-left: 30px;
}

.button,.submit input,.button-secondary {
	background: #eee;
	border-color: #ccc;
	color:#222;
}

#adminmenu .wp-submenu-wrap, #adminmenu .wp-submenu ul {
	border-color:#222;
}

#adminmenu li .wp-submenu-wrap {
	border-width:1px;
	border-style:solid;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	border-color:#444;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
	height:34px;
}

#adminmenu li.menu-top:hover > a, #adminmenu li.menu-top.focused > a, #adminmenu li.menu-top > a:focus {
	text-shadow:0 1px 0 rgba(29, 120, 119, 0.4);
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	border-left:1px solid #222;
	border-bottom:1px solid #222;
}

#adminmenu .wp-menu-arrow div {
	border-left:2px solid #555;
	border-bottom:1px solid #555;
}

#wpadminbar .quicklinks a, #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .shortlink-input {
	padding:8px 22px;
}

#wpadminbar {
	height:45px;
}

body.admin-bar #wpcontent, body.admin-bar #adminmenu {
	padding-top:45px;
}

#poststuff #titlewrap {
	margin-bottom:30px;
}

.screen-per-page {
	width:60px;
}

select#mm {
	height:20px;
}

div.timestamp-wrap {
	float:left;
	margin:15px auto;
}

.form-table th, .form-wrap label {
	line-height: 40px;
}


	/*************************************************************************
												 coffee-admin.css

 *************************************************************************************/
 


a:hover, a:active, a:focus {
    color: #000;
} 
#wpwrap {
	background: url('<?php bloginfo('template_directory') ;?>/includes/css/bg/white/21.png')repeat;
}

#adminmenuback,#adminmenuwrap {
	border-color: #555;
	background:#444;
	border-width: 0 13px 10px 0;
}

#post-body {
	background: transparent;
}

#adminmenu li.wp-menu-separator {
	padding: 8px;
	background: #555;
	border-color: #444;
}

#adminmenu div.separator {
	border-color: #555;
}

#adminmenu a.menu-top {
	padding: 8px 5px;
}

a,#adminmenu a,#poststuff #edButtonPreview,#poststuff #edButtonHTML,#the-comment-list p.comment-author strong a,#media-upload a.del-link,#media-items a.delete,.plugins a.delete,.ui-tabs-nav a {
	color: #222;
}

#adminmenu .wp-submenu a {
	color: #eee;
	padding: 8px;
}

#adminmenu .wp-submenu li:hover {
	background: #168E4C;
}

#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:hover {
	color: #fff;
}

#adminmenu .wp-submenu ul,#adminmenu a.menu-top,.folded #adminmenu li.menu-top,#adminmenu .wp-submenu .wp-submenu-head {
	background-color: #555;
	color: #eee;
	border-top-color: #333;
	border-bottom-color: #666;
}

#adminmenu li.wp-menu-open {
	border-color: #666;
}

.button,.button-secondary,.submit input,input[type="button"],input[type="submit"],a.button,a.button-primary,a.button-secondary {
	padding: 12px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}

.button:hover,.button-secondary:hover,.submit input:hover,input[type="button"]:hover,input[type="submit"]:hover {
	background: lightseagreen;
	color: #eee;
	text-shadow: none;
	-webkit-text-shadow: none;
	-moz-text-shadow: none;
}

input.button-primary,button.button-primary,a.button-primary {
	background: lightseagreen;
	border-color: lightseagreen;
	color:#eee;
	text-shadow: none;
	-webkit-text-shadow: none;
	-moz-text-shadow: none;
}

input.button-primary:hover,button.button-primary:hover,a.button-primary:hover,#adminmenu .wp-submenu li:hover,#adminmenu .wp-submenu a:hover {
	background: lightseagreen !important;
	border-color: #1f6261 !important;
	color: #fff !important;
}

#wpcontent select {
	height: 42px;
}

.tablenav {
	height: 60px;
}

textarea,input[type="text"],input[type="password"],input[type="file"],input[type="button"],input[type="submit"],input[type="reset"],select {
	padding: 12px;
}

.widget,#widget-list .widget-top,.postbox,#titlediv,#poststuff .postarea,.stuffbox {
	border-color: #d0d0d0;
	border-width: 3px;
}

.widget .widget-top,.postbox h3,.stuffbox h3 {
	border-bottom-color: #666;
}

.postbox h3,.stuffbox h3 {
	border-bottom-width: 4px;
}

.widget .widget-top {
	border-bottom-width: 1px;
}

.widget:hover, #widget-list .widget-top:hover,.widget:active, #widget-list .widget-top:active,.widget:focus, #widget-list .widget-top:focus {
	border-color:lightseagreen;
}

.postbox h3 {
	color: #333;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,#adminmenu li.current a.menu-top,.folded #adminmenu li.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,#adminmenu .wp-menu-arrow,#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
	background: lightseagreen;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,#adminmenu li.current a.menu-top,#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
	border-top-color: lightseagreen;
	border-bottom-color: lightseagreen;
	border-width: 3px 0 3px;
}

#adminmenu .wp-menu-arrow div,#adminmenu li.wp-not-current-submenu .wp-menu-arrow div,#adminmenu li.menu-top:hover>a,#adminmenu li.menu-top.focused>a,#adminmenu li.menu-top>a:focus{
background:lightseagreen;

}

#adminmenu li,#collapse-button {
	background: #444;
}

#wpcontent,#footer {
	padding-top: 20px;
	padding-left: 30px;
}

.button,.submit input,.button-secondary {
	background: #eee;
	border-color: #ccc;
	color:#222;
}

#adminmenu .wp-submenu-wrap, #adminmenu .wp-submenu ul {
	border-color:#222;
}

#adminmenu li .wp-submenu-wrap {
	border-width:1px;
	border-style:solid;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	border-color:#444;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
	border-top-color:#444;
	border-bottom-color:#666;
	background:lightseagreen;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
	height:34px;
}

#adminmenu li.menu-top:hover > a, #adminmenu li.menu-top.focused > a, #adminmenu li.menu-top > a:focus {
	text-shadow:0 1px 0 rgba(29, 120, 119, 0.4);
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	border-left:1px solid #222;
	border-bottom:1px solid #222;
}

#adminmenu .wp-menu-arrow div {
	border-left:2px solid #555;
	border-bottom:1px solid #555;
}

#wpadminbar .quicklinks a, #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .shortlink-input {
	padding:8px 22px;
}

#wpadminbar {
	height:45px;
}

body.admin-bar #wpcontent, body.admin-bar #adminmenu {
	padding-top:45px;
}

#poststuff #titlewrap {
	margin-bottom:30px;
}

.screen-per-page {
	width:60px;
}

select#mm {
	height:20px;
}

div.timestamp-wrap {
	float:left;
	margin:15px auto;
	
}

</style>';
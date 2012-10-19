<?php

//----------------------------------------------------------------------------------------------------    CUSTOM FONTS

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() 
{
 include_once ('includes/css/admin-css.php');
 } 

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );
 
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
 
/**
 * Required: include OptionTree.
 */
include_once( 'option-tree/ot-loader.php' );
/**
 * Theme Options
 */
 
include_once ( 'includes/mobile/is_mobile.php');

require_once dirname( __FILE__ ) . '/includes/plugins/activation.php';
 add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
    $plugins = array(
	
	     array(
            'name'     => 'Advanced Custom Fields by Elliot Condon', // The plugin name
            'slug'     => 'page-options', // The plugin slug (typically the folder name)
            'source'   => get_template_directory() . '/includes/plugins/advanced-custom-fields.3.5.0.zip', // The plugin source
            'required' => true,
        ),
		
		array(
            'name'     => 'Github Theme & Plugin Updater', // The plugin name
            'slug'     => 'github-ucf', // The plugin slug (typically the folder name)
            'source'   => get_template_directory() . '/includes/plugins/ucf.zip', // The plugin source
            'required' => true,
        ),
		
		

    );
    $theme_text_domain = 'prometheus';
 
    $config = array(
        /*'domain'       => $theme_text_domain,         // Text domain - likely want to be the same as your theme. */
        /*'default_path' => '',                         // Default absolute path to pre-packaged plugins */
        /*'menu'         => 'install-my-theme-plugins', // Menu slug */
        'strings'      => array(
            /*'page_title'             => __( 'Install Required Plugins', $theme_text_domain ), // */
            /*'menu_title'             => __( 'Install Plugins', $theme_text_domain ), // */
            /*'instructions_install'   => __( 'The %1$s plugin is required for this theme. Click on the big blue button below to install and activate %1$s.', $theme_text_domain ), // %1$s = plugin name */
            /*'instructions_activate'  => __( 'The %1$s is installed but currently inactive. Please go to the <a href="%2$s">plugin administration page</a> page to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */
            /*'button'                 => __( 'Install %s Now', $theme_text_domain ), // %1$s = plugin name */
            /*'installing'             => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name */
            /*'oops'                   => __( 'Something went wrong with the plugin API.', $theme_text_domain ), // */
            /*'notice_can_install'     => __( 'This theme requires the %1$s plugin. <a href="%2$s"><strong>Click here to begin the installation process</strong></a>. You may be asked for FTP credentials based on your server setup.', $theme_text_domain ), // %1$s = plugin name, %2$s = TGMPA page URL */
            /*'notice_cannot_install'  => __( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', $theme_text_domain ), // %1$s = plugin name */
            /*'notice_can_activate'    => __( 'This theme requires the %1$s plugin. That plugin is currently inactive, so please go to the <a href="%2$s">plugin administration page</a> to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */
            /*'notice_cannot_activate' => __( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', $theme_text_domain ), // %1$s = plugin name */
            /*'return'                 => __( 'Return to Required Plugins Installer', $theme_text_domain ), // */
        ),
    );
 
    tgmpa( $plugins, $config );
 
}


// ----------------------------------------------------------------------------  IS_SUPER_ADMIN



//Removes the "Edit" menu for users who are not Super Admins of a multisite network
if ( !(is_super_admin() )) {
	add_action( 'admin_head', 'super_admin_styles' );
}
function super_admin_styles() {
  echo '<style>
  #toplevel_page_edit-post_type-acf { display:none;}
  #toplevel_page_ot-settings{display:none;}
  #menu-settings { display:none;}
  #menu-tools { display:none;}
  #menu-plugins { display:none;}
  #menu-users { display:none;}
  #toplevel_page_WP-Optimize{display:none;}
  #toplevel_page_wpseo_dashboard { display:none;}
  #menu-posts-qa_faqs{display:none;}
  #toplevel_page_gf_edit_forms{display:none;}
  #toplevel_page_WP-Optimize{display:none;}
  #toplevel_page_wpseo_dashboard{display:none;}

  </style>';
}



// --------------------------------------------------------------------------------------------   DASHBOARD CUSTOM


add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
   global $wp_meta_boxes;
   
	   unset($wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']);
	   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
   
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

	  wp_add_dashboard_widget('custom_help_widget', 'Prometheus Dashboard', 'custom_dashboard_help');
 
 
}

function custom_dashboard_help() {
    echo '<p>Coming Soon!</p>';
}

add_filter( 'login_headerurl', 'namespace_login_headerurl' );
/**
 * Replaces the login header logo URL
 *
 * @param $url
 */
function namespace_login_headerurl( $url ) {
    $url = home_url( '/' );
    return $url;
}

add_filter( 'login_headertitle', 'namespace_login_headertitle' );
/**
 * Replaces the login header logo title
 *
 * @param $title
 */
function namespace_login_headertitle( $title ) {
    $title = get_bloginfo( 'name' );
    return $title;
}

add_action( 'login_head', 'namespace_login_style' );
/**
 * Replaces the login header logo
 */
function namespace_login_style() {
    echo '<style>#login .login { background:#888;} body,html{background: url( ' . get_template_directory_uri() . '/includes/css/bg/white/20.png) !important;}.login h1 a { background-image: url( ' . get_template_directory_uri() . '/images/prometheus/prometheus_login.png ) !important; }</style>';
}

// ------------------------------------------------------------              Add Thumbnails in Manage Posts/Pages List 


if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {

    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page' ) );

    function AddThumbColumn($cols) {

        $cols['thumbnail'] = __('Thumbnail');

        return $cols;
    }

    function AddThumbValue($column_name, $post_id) {

            $width = (int) 35;
            $height = (int) 35;

            if ( 'thumbnail' == $column_name ) {
                // thumbnail of WP 2.9
                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
                // image from gallery
                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                if ($thumbnail_id)
                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
                elseif ($attachments) {
                    foreach ( $attachments as $attachment_id => $attachment ) {
                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                    }
                }
                    if ( isset($thumb) && $thumb ) {
                        echo $thumb;
                    } else {
                        echo __('None');
                    }
            }
    }

    // for posts
    add_filter( 'manage_posts_columns', 'AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'AddThumbValue', 10, 2 );

    // for pages
    add_filter( 'manage_pages_columns', 'AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'AddThumbValue', 10, 2 );
}




// ------------------------------------------------------------------------   HIDE EDITOR 

add_action( 'admin_init', 'hide_editor' );
 
function hide_editor() {
	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;
 
	// Get the name of the Page Template file.
	$template_file = get_post_meta($post_id, '_wp_page_template', true);
 
    if($template_file != 'page-contenteditor.php' && $template_file != 'page-blank.php' ){ // edit the template name
    	//remove_post_type_support('page', 'editor');
    }
	
}



//------------------------------------------------------------------------   DISABLE VISUAL EDITOR

add_filter ( 'user_can_richedit' , create_function ( '$a' , 'return false;' ) , 50 );




//----------------------------------------------------------------------------------------------------     EDIT ADMIN MENU ORDER

function custom_menu_order($menu_ord) {  
    if (!$menu_ord) return true;  
    return array(  
	    'index.php', // Dashboard  
	    'edit.php?post_type=page', // Pages  
		'edit.php', // Posts  
        'separator1', // First separator  
        'upload.php', // Media  
        'link-manager.php', // Links  
        'edit-comments.php', // Comments  
        'separator2', // Second separator  
        'themes.php', // Appearance  
        'plugins.php', // Plugins  
        'users.php', // Users  
        'tools.php', // Tools  
        'options-general.php', // Settings  
        'separator-last', // Last separator  
    );  
}  
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order  
add_filter('menu_order', 'custom_menu_order');  

//----------------------------------------------------------------------------------------------------     EDIT ADMIN MENU


function edit_admin_menus() {  
    global $menu;  
	global $submenu;
	$menu[2][0] = 'Home';
    $menu[5][0] = 'Blog'; // Change Posts to Blog Posts
	$menu[10][0] = 'Images'; // Change Media to Files
	$submenu['upload.php'][5][0] = 'All Images'; 
	// remove_menu_page('tools.php');
	remove_menu_page('profile.php');
	remove_menu_page('link-manager.php');
	remove_menu_page('edit-comments.php');
	// remove_menu_page('index.php');
	remove_menu_page('separator1');
	remove_menu_page('separator2');
	remove_menu_page('separator-last');
}  
add_action( 'admin_menu', 'edit_admin_menus' );  

//----------------------------------------------------------------------------------------------------     REMOVE YOAST SEO FROM CUSTOM POST TYPES
function remove_yoast_metabox() {
 remove_meta_box( 'wpseo_meta', 'slide', 'normal' );
 remove_meta_box( 'wpseo_meta', 'testimonial', 'normal' );
 remove_meta_box( 'wpseo_meta', 'event', 'normal'); 
 remove_meta_box( 'wpseo_meta', 'squeeze','normal');
 remove_meta_box('wpseo_meta', 'download','normal');
}
add_action( 'add_meta_boxes', 'remove_yoast_metabox', 11 );






// ---------------------------------------------------------------------------------------------   OPTION TREE FUNCTION TO REDUCE SERVER CALLS */


if(function_exists('get_option_tree'))
{
        global $option_tree;
        $option_tree = get_option('option_tree');
        
        function the_option($id)
        {
                global $option_tree;
                return get_option_tree($id, $option_tree);
        }
} 

// OPTION TREE - Theme Options 
 
include_once( 'theme-options.php' );


// ---------------------------------------------------------------------------------------------   JQUERY CDN FROM GOOGLE



// even more smart jquery inclusion 
add_action( 'init', 'jquery_register' );

// register from google and for footer
function jquery_register() {

	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		wp_enqueue_script( 'jquery' );
	}

}


// ---------------------------------------------------------------------------------------------   create pages with new installation

if (isset($_GET['activated']) && is_admin()){
    add_action('init', 'create_initial_pages');
}

function create_initial_pages() {
    $pages = array(
        'about' => 'About Us',
        'contact' => 'Contact Us',
        'blog' => 'Blog',
		'front' => 'Front Page'
    );
    foreach($pages as $key => $value) {
        $id = get_page_by_title($value);
        $page = array(
            'post_type'   => 'page',
            'post_title'  => $value,
            'post_name'   => $key,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_parent' => ''
        );
        if (!isset($id)) wp_insert_post($page);
    };
}




// ---------------------------------------------------------------------------------------------   getTestimonials() 


		
	function getTestimonials($atts, $content = null) {
	extract(shortcode_atts(array(
		"query" => '',
		"category_name" => '',
		"tag" => '',
		"post_status" => 'published',
		"post_type" => 'testimonials',
		"image_size" => 'one_third',
		"style" => 'default',
		"posts_per_page" => 3,
		"slider_name" => 'testimonials_slider',
		"post_parent" => ''
		
	), $atts));
	
	$args = array(
	
	'category_name' => $category_name,
	'post_status' => $post_status,
	'posts_per_page' => $posts_per_page,
	'tag' => $tag,
	'post_type' => $post_type
	
	);
	
	
	global $the_query,$paged,$post;
	
	

	$the_query = new WP_Query($args);
	ob_start();
	?>
	<div class="testimonial_slider slider_loop_<?php echo $image_size; ?> royalSlider rsMinW">    
	<?php if($the_query->have_posts()) : ?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<? 
			if(get_field('image')):
				$thumbnail = wp_get_attachment_image_src( get_field('image'), 'thumbnail');
			endif; 
		?>
			<img class="testimonial_image" src="<?php echo $thumbnail[0]; ?>">
			<span class="testimonial_name"><?php the_field('last_name'); ?>,<?php the_field('first_name'); ?></span><br/>
			<span class="testimonial_location"><?php the_field('location'); ?></span>
			<div class="testimonial_content">&#147;<?php the_field('testimonial'); ?>&#148;</div>


		<?php endwhile; ?>
		

	<?php else : ?>
	
	<div class="rsContent">	
		<img class="testimonial_image" src="http://designwell.co/imgs/testimonials/t1.jpg">
						<div class="testimonial_meta">
							<span class="testimonial_name">Jane Smith.</span><br/>
							<span class="testimonial_location">Santa Monica, CA</span>
						</div>
						<div class="clr"></div>
						<div class="testimonial_content">
							<strong>Don't over-edit.</strong> Testimonials work best when they are in "real" language. Those small grammar and language quirks help the reader connect and demonstrate they are real.
						
						
						</div><!-- .testimonial_content -->
						
</div><!-- rsContent -->

<div class="rsContent">	
				<img class="testimonial_image" src="http://designwell.co/imgs/testimonials/t3.jpg">
						<div class="testimonial_meta">
							<span class="testimonial_name">Robert Green.</span><br/>
							<span class="testimonial_location">New York , NY</span>
						</div>
						<div class="clr"></div>
						<div class="testimonial_content"> 
							<strong>Use testimonials that fit.</strong> Place appropriate testimonials along with a particular point that you are trying to make.</div><!-- testimonial content -->
						
</div><!-- rsContent -->

<div class="rsContent">	
							<img class="testimonial_image" src="http://designwell.co/imgs/testimonials/t2.jpg">
						<div class="testimonial_meta">
							<span class="testimonial_name">Jessica Bing</span><br/>
							<span class="testimonial_location">Houston, TX</span>
						</div>
						<div class="clr"></div>
						<div class="testimonial_content"> 
							<strong>Address objections.</strong> If a prospect discovers that another customer's worries have proved groundless, then that person is more confident to reach for the wallet.</div><!-- testimonial content -->
						
</div><!-- rsContent -->
			
			<div class="rsContent">	
			<img class="testimonial_image" src="http://designwell.co/imgs/testimonials/t4.jpg">
						<div class="testimonial_meta">
							<span class="testimonial_name">Martin Shore</span><br/>
							<span class="testimonial_location">San Francisco, CA</span>
						</div>
						<div class="clr"></div>
						<div class="testimonial_content"> 
							<strong>Never fake it.</strong> While testimonials are crucial, it's not worth the risk to fake them. Most people have well-trained BS detectors that can smell a fake a mile away.</div><!-- testimonial content -->
						
</div><!-- rsContent -->


			<div class="rsContent">	
								<img class="testimonial_image" src="http://designwell.co/imgs/testimonials/t5.jpg">
						<div class="testimonial_meta">
							<span class="testimonial_name">Perry Emming</span><br/>
							<span class="testimonial_location">Honolulu, HI</span>
						</div>
						<div class="clr"></div>
						<div class="testimonial_content"> 
							<strong>Encourage specifics.</strong> Specificity works in all areas of copywriting, but is especially effective in a testimonial. Rather than "we saw a big improvement," get your customer to state exactly what the improvement was, such as "we saw a 217% improvement."</div><!-- testimonial content -->
						
			</div><!-- rsContent -->
			
			
	<?php endif; ?>
	
	
	
	</ul>
</div><!-- slider -->
	<script id="addJS">jQuery(document).ready(function($) {
  $('.testimonial_slider').royalSlider({
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
	loop: true,
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

	
	<?php 
	$content = ob_get_contents();
	ob_end_clean();
	wp_reset_query();
	return $content;
}
add_shortcode("testimonials", "getTestimonials");




// ---------------------------------------------------------------------------------------------   getSlides()

		
	function getSlides($atts, $content = null) {
	extract(shortcode_atts(array(
		"query" => '',
		"category_name" => '',
		"tag" => '',
		"post_status" => 'published',
		"post_type" => 'slides',
		"style" => 'default',
		"posts_per_page" => 4,
		"slider_name" => 'slider',
		"post_parent" => ''
		
	), $atts));
	
	$args = array(
	
	'posts_per_page' => $posts_per_page,
	'post_type' => $post_type
	
	);
	
	global $the_query,$paged,$post;
	
	$the_query = new WP_Query($args);
	ob_start();
	?>
	<div class="slider royalSlider rsMinW">    
	<?php $count = 1; ?>
	<?php if($the_query->have_posts()) : ?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

	
		<div class="rsContent">
			<?php if( $count == 1) : ?>
			<?php if(get_field('image_1') != '' ) : ?><img id="slide_<?php echo $count; ?>_image_1" class="rsImg" src="<?php the_field('featured_image'); ?>"><?php endif; ?>
			<?php else : ?>
			<?php if(get_field('image_1') != '' ) : ?><img id="slide_<?php echo $count; ?>_image_1" class="rsABlock" src="<?php the_field('featured_image'); ?>"><?php endif; ?>
			<?php endif; ?>
			
			<div class="rsABlock" data-move-effect="left" data-easing="easeOutSine" data-delay="100" data-speed="300" data-move-offset="20" data-move-effect="left" data-fade-effect="true" id="slide_<?php echo $count; ?>_content">
				<?php if(get_field('content')) : ?><content><?php the_field('content'); ?></content><?php endif; ?>
			</div>

		</div><!-- rsContent -->
		
		<?php $count++; ?>
		
		<?php endwhile; ?>
		
	<?php else : ?>
	
	<xlarge>No Slides</xlarge>
			
	<?php endif; ?>
	
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

	
	<?php 
	$content = ob_get_contents();
	ob_end_clean();
	wp_reset_query();
	return $content;
}
add_shortcode("slides", "getSlides");








// ---------------------------------------------------------------------------------------------   CUSTOM POST TYPES 

/*

'title'
'editor' (content)
'author'
'thumbnail' (featured image) (current theme must also support Post Thumbnails)
'excerpt'
'trackbacks'
'custom-fields'
'comments' (also will see comment count balloon on edit screen)
'revisions' (will store revisions)
'page-attributes' (template and menu order) (hierarchical must be true) (the page template selector is only available for the page post type)
'post-formats' add post formats, see Post Formats

*/




add_action( 'init', 'create_post_type' );
function create_post_type() {

	$slide_args = array(
			'labels' => array(
				'name' => __( 'Slides	' ),
				'singular_name' => __( 'Slide' ),
			),
		'supports' => array('title'),
		'public' => true,
		'has_archive' => true
	);

	register_post_type( 'slides', $slide_args);
	
	$squeeze_page_args = array(
			'labels' => array(
				'name' => __( 'Squeeze Pages' ),
				'singular_name' => __( 'Squeeze Page' ),
			),
		'supports' => array('title'),
		'public' => true,
		'has_archive' => true
	);

	register_post_type( 'squeeze', $squeeze_page_args);
	


	
	$testimonial_args = array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
			),
		'supports' => array('title'),
		'public' => true,
		'has_archive' => true
		);

	register_post_type( 'testimonial', $testimonial_args);
	

	
}

// --------------------------------------------------------------------------------------------- REVERSE MENU FUNCTION

/**
 * Enables a 'reverse' option for wp_nav_menu to reverse the order of menu 
 * items. Usage:
 *
 *   wp_nav_menu(array('reverse' => TRUE, ...));
 */


function my_reverse_nav_menu($menu, $args) {
  if (isset($args->reverse) && $args->reverse) {
    return array_reverse($menu);
  }
  return $menu;
}
add_filter('wp_nav_menu_objects', 'my_reverse_nav_menu', 10, 2);




// ---------------------------------------------------------------------------------------------  [url_base]


function url_base_function() {
	return get_bloginfo( "url" );
}
add_shortcode('base_url', 'url_base_function');

// [url_template]

function url_template_function() {
	if( get_theme_root_uri() && get_template() ) {
		return get_theme_root_uri() . "/" . get_template();
	}
	else {
		return "";
	}
}
add_shortcode('template_url', 'url_template_function');





// --------------------------------------------------------------------------------------------- Allows you to add shortcodes into widgets !AWESOME!

add_filter('widget_text', 'do_shortcode');
add_filter('the_content', 'do_shortcode', 11);



// ---------------------------------------------------------------------------------------------  WordPress 3.0+ Nav Menu 

register_nav_menus(
	array(
				'global_menu' => __(' Global Menu'), // menu header for home and page templates 
				'blog_menu' => __('Blog Menu'), // goes in the blog header
				'footer_menu' => __('Footer Menu') ,
				'footer_meta_menu'=> __('Footer Meta Menu')
	)
);


function get_default_menu_horizontal(){
	echo '<div id="global_menu_wrap" class="horizontal"><ul id="menu-front" class="dropdown">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About Us</a></li>
				<li>
					<a href="#">Services</a>
					<ul class="sub-menu">
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
					</ul>
				</li>
				<li><a href="#">Contact Us</a></li>
				<li>
					<a href="#">Services</a>
					<ul class="sub-menu">
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
						<li><a href="#">Service #</a></li>
					</ul>
				</li>
				<div class="clr"></div>
			</ul>';
}



function get_default_menu_horizontal_footer(){
	echo '<ul class="horizontal menu fill_menu_horizontal">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<div class="clr"></div>
			</ul>';
}

function get_default_menu_vertical(){
	echo '<ul class="vertical menu fill_menu_vertical">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<div class="clr"></div>
			</ul>';
}



	function da_vinci_image_sizes()
	{
		$the_options = get_option('option_tree');
		
		update_option('medium_size_w', 999999);
		update_option('medium_size_l', 600);
		
		update_option('large_size_w', 960);
		update_option('large_size_l', 999999);
		
		bt_add_image_size('tiny', 50, 50, array('center', 'top'));
		bt_add_image_size('photog', 180, 100, array('center', 'center'));
		bt_add_image_size('one_fourth', 223, 168, array('center', 'top'));
		bt_add_image_size('one_third',305, 228, array( 'center', 'center' ));
		bt_add_image_size('ninesixty',960,705, array('center', 'top'));

		/*
		if($the_options['extra_default_image_sizes'] == 'on')
		{
			bt_add_image_size('one_fourth_half', 223, 84, array('center', 'top'));
			bt_add_image_size('one_half_half',468,175, array('center','top'));
			bt_add_image_size('one_half',468, 350, array('center','top'));
			bt_add_image_size('two_thirds_half', 618, 232, array('center', 'top'));
			bt_add_image_size('two_thirds', 618, 464, array('center', 'top'));
			bt_add_image_size('three_fourth_half',698,262,array('center','top'));
			bt_add_image_size('three_fourth',698,524,array('center','top'));
			bt_add_image_size('ninesixty_half',960,352, array('center', 'top'));
			bt_add_image_size('one_third_half',305, 114, array( 'center', 'top' ));
		}
		
		if($the_options['portrait_image_sizes'] == 'on')
		{
			bt_add_image_size('one_fourth_portrait', 220, 275, array('center', 'top'));
			bt_add_image_size('one_third_portrait',300, 375, array( 'center', 'top' ));
			bt_add_image_size('one_sixth_portrait',150,230,array('center','top'));
		}
		
		if($the_options['extra_portrait_image_sizes'] == 'on')
		{
			bt_add_image_size('two_thirds_portrait', 460, 575, array('center', 'top'));
			bt_add_image_size('one_half_portrait',620, 775, array( 'center', 'top' ));
			bt_add_image_size('three_fourth_portrait',700,875,array('center','top'));
			bt_add_image_size('full_portrait',960, 1200, array( 'center', 'top' ));
		}
		*/
	}
	add_action('admin_init','da_vinci_image_sizes');



// ---------------------------------------------------------------------------------------------   WordPress 2.9+ Thumbnail Support =

		add_theme_support( 'post-thumbnails' );


// ---------------------------------------------------------------------------------------------   ShortCode : AIO CAROUSEL
	
		function getAIOCarousel($atts, $content = null) {
		extract(shortcode_atts(array(
		"category_name" => '',
		"tag" => '',
		"post_status" => 'published',
		"post_type" => 'post',
		"posts_per_page" => 5,
		"post_parent" => '',
		"thumbnail_size" => 'one_fourth_half',
		"carousel_id" => 'carousel_id',
		"height" => 'height',
		"width" => 'width',
		"image_size" => 'image_size'
		
		
	), $atts));
	
	$attributes = array( 'posts_per_page' => $posts_per_page, 'post_type' => $post_type ); 
	
	$the_query = new WP_Query( $attributes ); 
	
	
	ob_start();
	
	?>
	
	<script>
jQuery(document).ready(function($) {

$('#carousel_aio').allinone_carousel({
skin: 'sweet',
width: 960,
height: 500,
autoPlay: 3,
resizeImages:true,
autoHideBottomNav:false,
numberOfVisibleItems:5,
elementsHorizontalSpacing:110,
elementsVerticalSpacing:20,
verticalAdjustment:0,
animationTime:0.5
}); 


});
</script>
	
   <div id="carousel_aio">
	<ul class="allinone_carousel_list">
		<?php while( $the_query->have_posts()) : $the_query->the_post(); ?>
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $image_size); ?>
				<li><img src="<?php echo $image[0]; ?>"></li>
			<?php endwhile; ?>
	</ul>
	
   </div><!-- #carousel_id -->
	

	
	<?php 
	$content = ob_get_contents();
	ob_end_clean();
	wp_reset_query();
	return $content;
	
	}
add_shortcode("aio_carousel", "getAIOCarousel");
	
	
// ---------------------------------------------------------------------------------------------   GET PAGE ATTACHMENTS

function getPageAttachments($attributes, $content = null) {
	extract(shortcode_atts(array(
		"pagename" => '',
		"posts_per_page" => '',
		"image_size" => '',
		"post_type" => ''
	), $attributes)); 
	
	global $wp_query,$paged,$post;
	
	$args = array( 
		'post_type' => $post_type,
		'posts_per_page' => $posts_per_page,
		'pagename' => $pagename
		);

	$the_query = new WP_Query( $args ); 


	ob_start();
	?>
	<ul>
	<?php while($the_query->have_posts()) : $the_query->the_post();  ?>
	<?php $unsorted_attachments = attachments_get_attachments();
	$attachments = array_reverse($unsorted_attachments);
	
	foreach( $attachments as $attachment) : ?>
	<?php $thumb = wp_get_attachment_image_src( $attachment['id'] , $image_size); ?>
	<li class="the_attachment" style="background:url('<?php echo $thumb[0];?>') no-repeat 0 0;">
	
			<div class="attachment_details">
				<div class="attachment_caption"><?php echo $attachment['caption']; ?></div>
				<div class="bg1" style="width:100%;height:10px;margin-top:98px;"></div>
				<a class="author_link button pink" href="<?php echo $attachment['title']; ?>">AUTHOR<span style="border-radius:200px;border:2px solid #fff;float:right;display:inline-block;" class="white icon arrow1_ne"></span></a>
				<a href="<?php echo $attachment['location']; ?>" class="full_size_link button pink lightbox" rel="<?php the_title(); ?>">ENLARGE<span style="border-radius:200px;border:2px solid #fff;float:right;display:inline-block;" class="white icon arrow1_ne"></span></a>
				
			</div><!-- post_details -->
	</li>
	<?php endforeach; ?>
	<?php endwhile; ?>
	</ul>
	<?php
	
	$content = ob_get_contents();
	ob_end_clean();
	wp_reset_query();
	return $content;

}
add_shortcode("getAttachments", "getPageAttachments");

 

// ---------------------------------------------------------------------------------------------   GRAVITY FORMS


// filter the Gravity Forms button type
add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<button class='button' id='gform_submit_button_{$form["id"]}'><span>Send</span></button>";
}




// ---------------------------------------------------------------------------------------------   REMOVE AUTO P IN CONTENT EDITOR


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );



// ---------------------------------------------------------------------------------------------   REGISTER SIDEBARS


register_sidebar(array(
  'name' => __( 'Page Sidebar' ),
  'id' => 'page-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<large class="widgettitle">',
  'after_title' => '</large>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));



register_sidebar(array(
  'name' => __( 'Blog Sidebar' ),
  'id' => 'blog-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<large class="widgettitle">',
  'after_title' => '</large>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));


register_sidebar(array(
  'name' => __( 'Front - Footer Bar 1' ),
  'id' => 'front_footer_bar_1',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Front - Footer Bar 2' ),
  'id' => 'front_footer_bar_2',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Front - Footer Bar 3' ),
  'id' => 'front_footer_bar_3',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Front Footer Bar 4' ),
  'id' => 'front_footer_bar_4',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Blog - Footer Bar 1' ),
  'id' => 'blog_footer_bar_1',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Blog - Footer Bar 2' ),
  'id' => 'blog_footer_bar_2',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Blog - Footer Bar 3' ),
  'id' => 'blog_footer_bar_3',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));

register_sidebar(array(
  'name' => __( 'Blog Footer Bar 4' ),
  'id' => 'blog_footer_bar_4',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6 class="widgettitle">',
  'after_title' => '</h6>',
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
  'after_widget' => '</li>',
));



// ---------------------------------------------------------------------------------------------   WP 3.0 Custom Background Setup 

if ( function_exists( 'add_custom_background' ) )
    { add_custom_background(); }




// ---------------------------------------------------------------------------------------------   BT_IMAGE_RESIZE  FUNCTION

add_filter( 'intermediate_image_sizes_advanced', 'bt_intermediate_image_sizes_advanced' );
add_filter( 'wp_generate_attachment_metadata', 'bt_generate_attachment_metadata', 10, 2 );

/**
 * Registers a new image size with cropping positions
 *
 * The $crop parameter works as in the 'add_image_size' function taking true or
 * false values. If set to true, the default cropping position is 'center', 'center'.
 * 
 * The $crop parameter also takes an array of the format
 * array( x_crop_position, y_crop_position )
 * x_crop_position can be 'left', 'center', 'right'
 * y_crop_position can be 'top', 'center', 'bottom'
 * 
 * @param string $name Image size identifier.
 * @param int $width Image width.
 * @param int $height Image height.
 * @param bool|array $crop Optional, default is false. Whether to crop image to specified height and width or resize. An array can specify positioning of the crop area.
 * @return bool|array False, if no image was created. Metadata array on success.
 */
function bt_add_image_size( $name, $width = 0, $height = 0, $crop = false ) {
	global $_wp_additional_image_sizes;
	$_wp_additional_image_sizes[$name] = array( 'width' => absint( $width ), 'height' => absint( $height ), 'crop' => $crop );
}


/**
 * Returning no sizes (an empty array) will force
 * wp_generate_attachment_metadata to skip creating intermediate image sizes on
 * upload, then we can run our own resizing functions by hooking into the
 * 'wp_generate_attachment_metadata' filter
 */
function bt_intermediate_image_sizes_advanced( $sizes ) {
	return array();
}


function bt_generate_attachment_metadata( $metadata, $attachment_id ) {
    $attachment = get_post( $attachment_id );
    
    $uploadPath = wp_upload_dir();
    $file = path_join($uploadPath['basedir'], $metadata['file']);

	if ( !preg_match('!^image/!', get_post_mime_type( $attachment )) || !file_is_displayable_image( $file ) ) return $metadata;

    global $_wp_additional_image_sizes;

    foreach ( get_intermediate_image_sizes() as $s ) {
        $sizes[$s] = array( 'width' => '', 'height' => '', 'crop' => FALSE );
        if ( isset( $_wp_additional_image_sizes[$s]['width'] ) )
            $sizes[$s]['width'] = intval( $_wp_additional_image_sizes[$s]['width'] ); // For theme-added sizes
        else
            $sizes[$s]['width'] = get_option( "{$s}_size_w" ); // For default sizes set in options
        if ( isset( $_wp_additional_image_sizes[$s]['height'] ) )
            $sizes[$s]['height'] = intval( $_wp_additional_image_sizes[$s]['height'] ); // For theme-added sizes
        else
            $sizes[$s]['height'] = get_option( "{$s}_size_h" ); // For default sizes set in options
        if ( isset( $_wp_additional_image_sizes[$s]['crop'] ) )
            $sizes[$s]['crop'] = $_wp_additional_image_sizes[$s]['crop'];
        else
            $sizes[$s]['crop'] = get_option( "{$s}_crop" );
    }

    foreach ( $sizes as $size => $size_data ) {
        $resized = bt_image_make_intermediate_size( $file, $size_data['width'], $size_data['height'], $size_data['crop'] );
        if ( $resized )
            $metadata['sizes'][$size] = $resized;
    }
    
    return $metadata;
}


/**
 * Resize an image to make a thumbnail or intermediate size.
 *
 * The returned array has the file size, the image width, and image height. The
 * filter 'image_make_intermediate_size' can be used to hook in and change the
 * values of the returned array. The only parameter is the resized file path.
 *
 * @param string $file File path.
 * @param int $width Image width.
 * @param int $height Image height.
 * @param bool|array $crop Optional, default is false. Whether to crop image to specified height and width or resize. An array can specify positioning of the crop area.
 * @return bool|array False, if no image was created. Metadata array on success.
 */
function bt_image_make_intermediate_size( $file, $width, $height, $crop = false ) {
	if ( $width || $height ) {
		$resized_file = bt_image_resize( $file, $width, $height, $crop, null, null, 90 );
		if ( !is_wp_error( $resized_file ) && $resized_file && $info = getimagesize( $resized_file ) ) {
			$resized_file = apply_filters('image_make_intermediate_size', $resized_file);
			return array(
				'file' => wp_basename( $resized_file ),
				'width' => $info[0],
				'height' => $info[1],
			);
		}
	}
	return false;
}



/**
 * Retrieve calculated resized dimensions for use in imagecopyresampled().
 *
 * Calculate dimensions and coordinates for a resized image that fits within a
 * specified width and height. If $crop is true, the largest matching central
 * portion of the image will be cropped out and resized to the required size.
 *
 * @param int $orig_w Original width.
 * @param int $orig_h Original height.
 * @param int $dest_w New width.
 * @param int $dest_h New height.
 * @param bool $crop Optional, default is false. Whether to crop image or resize.
 * @return bool|array False, on failure. Returned array matches parameters for imagecopyresampled() PHP function.
 */
function bt_image_resize_dimensions($orig_w, $orig_h, $dest_w, $dest_h, $crop = false) {

	if ($orig_w <= 0 || $orig_h <= 0)
		return false;
	// at least one of dest_w or dest_h must be specific
	if ($dest_w <= 0 && $dest_h <= 0)
		return false;

	if ( $crop ) {
		// crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
		$aspect_ratio = $orig_w / $orig_h;
		$new_w = min($dest_w, $orig_w);
		$new_h = min($dest_h, $orig_h);

		if ( !$new_w ) {
			$new_w = intval($new_h * $aspect_ratio);
		}

		if ( !$new_h ) {
			$new_h = intval($new_w / $aspect_ratio);
		}

		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);

        if ( !is_array( $crop ) || count( $crop ) != 2 ) {
			$crop = apply_filters( 'image_resize_crop_default', array( 'center', 'center' ) );
		}

		switch ( $crop[0] ) {
			case 'left': $s_x = 0; break;
			case 'right': $s_x = $orig_w - $crop_w; break;
			default: $s_x = floor( ( $orig_w - $crop_w ) / 2 );
		}

		switch ( $crop[1] ) {
			case 'top': $s_y = 0; break;
			case 'bottom': $s_y = $orig_h - $crop_h; break;
			default: $s_y = floor( ( $orig_h - $crop_h ) / 2 );
		}
	} else {
		// don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
		$crop_w = $orig_w;
		$crop_h = $orig_h;

		$s_x = 0;
		$s_y = 0;

		list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
	}

	// if the resulting image would be the same size or larger we don't want to resize it
	if ( $new_w >= $orig_w && $new_h >= $orig_h )
		return false;

	// the return array matches the parameters to imagecopyresampled()
	// int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );

}


/**
 * Scale down an image to fit a particular size and save a new copy of the image.
 *
 * The PNG transparency will be preserved using the function, as well as the
 * image type. If the file going in is PNG, then the resized image is going to
 * be PNG. The only supported image types are PNG, GIF, and JPEG.
 *
 * Some functionality requires API to exist, so some PHP version may lose out
 * support. This is not the fault of WordPress (where functionality is
 * downgraded, not actual defects), but of your PHP version.
 *
 * @since 2.5.0
 *
 * @param string $file Image file path.
 * @param int $max_w Maximum width to resize to.
 * @param int $max_h Maximum height to resize to.
 * @param bool $crop Optional. Whether to crop image or resize.
 * @param string $suffix Optional. File Suffix.
 * @param string $dest_path Optional. New image file path.
 * @param int $jpeg_quality Optional, default is 90. Image quality percentage.
 * @return mixed WP_Error on failure. String with new destination path.
 */
function bt_image_resize( $file, $max_w, $max_h, $crop = false, $suffix = null, $dest_path = null, $jpeg_quality = 90 ) {

	$image = wp_load_image( $file );
	if ( !is_resource( $image ) )
		return new WP_Error( 'error_loading_image', $image, $file );

	$size = @getimagesize( $file );
	if ( !$size )
		return new WP_Error('invalid_image', __('Could not read image size'), $file);
	list($orig_w, $orig_h, $orig_type) = $size;

	// Rotate if EXIF 'Orientation' is set
	// This code is from the reverted patch at
	// http://core.trac.wordpress.org/changeset/11746/trunk/wp-includes/media.php
	$rotate = false;
	if ( is_callable( 'exif_read_data' ) && in_array( $orig_type, apply_filters( 'wp_read_image_metadata_types', array( IMAGETYPE_JPEG, IMAGETYPE_TIFF_II, IMAGETYPE_TIFF_MM ) ) ) ) {
		$exif = @exif_read_data( $file, null, true );
		if ( $exif && isset( $exif['IFD0'] ) && is_array( $exif['IFD0'] ) && isset( $exif['IFD0']['Orientation'] ) ) {
			if ( 6 == $exif['IFD0']['Orientation'] )
				$rotate = 90;
			elseif ( 8 == $exif['IFD0']['Orientation'] )
				$rotate = 270;
		}
	}

	if ( $rotate )
		list($max_h,$max_w) = array($max_w,$max_h);

	$dims = bt_image_resize_dimensions($orig_w, $orig_h, $max_w, $max_h, $crop);
	if ( !$dims )
		return new WP_Error( 'error_getting_dimensions', __('Could not calculate resized image dimensions') );
	list($dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) = $dims;

	$newimage = wp_imagecreatetruecolor( $dst_w, $dst_h );

	if ( $rotate )
		list($src_y,$src_x) = array($src_x,$src_y);

	imagecopyresampled( $newimage, $image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

	// convert from full colors to index colors, like original PNG.
	if ( IMAGETYPE_PNG == $orig_type && function_exists('imageistruecolor') && !imageistruecolor( $image ) )
		imagetruecolortopalette( $newimage, false, imagecolorstotal( $image ) );

	// we don't need the original in memory anymore
	imagedestroy( $image );

	// $suffix will be appended to the destination filename, just before the extension
	if ( !$suffix ) {
		if ( $rotate )
			$suffix = "{$dst_h}x{$dst_w}";
		else
			$suffix = "{$dst_w}x{$dst_h}";
	}

	$info = pathinfo($file);
	$dir = $info['dirname'];
	$ext = $info['extension'];
	$name = wp_basename($file, ".$ext");

	if ( !is_null($dest_path) and $_dest_path = realpath($dest_path) )
		$dir = $_dest_path;
	$destfilename = "{$dir}/{$name}-{$suffix}.{$ext}";

	if ( IMAGETYPE_GIF == $orig_type ) {
		if ( !imagegif( $newimage, $destfilename ) )
			return new WP_Error('resize_path_invalid', __( 'Resize path invalid' ));
	} elseif ( IMAGETYPE_PNG == $orig_type ) {
		if ( !imagepng( $newimage, $destfilename ) )
			return new WP_Error('resize_path_invalid', __( 'Resize path invalid' ));
	} else {
		if ( $rotate ) {
			$newimage = _rotate_image_resource( $newimage, 360 - $rotate );
		}

		// all other formats are converted to jpg
		$destfilename = "{$dir}/{$name}-{$suffix}.jpg";
		$return = imagejpeg( $newimage, $destfilename, apply_filters( 'jpeg_quality', $jpeg_quality, 'image_resize' ) );
		if ( !$return )
			return new WP_Error('resize_path_invalid', __( 'Resize path invalid' ));
	}

	imagedestroy( $newimage );

	// Set correct file permissions
	$stat = stat( dirname( $destfilename ));
	$perms = $stat['mode'] & 0000666; //same permissions as parent folder, strip off the executable bits
	@ chmod( $destfilename, $perms );

	return $destfilename;
}

add_action('init', 'my_rem_editor_from_post_type');
function my_rem_editor_from_post_type() {
    remove_post_type_support( 'post', 'thumbnail' );
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'post', 'author' );
	remove_post_type_support( 'post', 'trackbacks' );
	remove_post_type_support( 'page', 'thumbnail' );
	remove_post_type_support( 'page', 'comments' );
	remove_post_type_support( 'page', 'author' );
	remove_post_type_support( 'page', 'trackbacks' );
}

// limit the # of revisions 
define(’WP_POST_REVISIONS’, 3);


function the_excerpt_dynamic($length) { // Outputs an excerpt of variable length (in characters)
global $post;
$text = $post->post_excerpt;
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
}
$text = strip_shortcodes( $text ); // optional, recommended
$text = strip_tags($text,'<div>'); // use ' $text = strip_tags($text,'<p><a>'); ' to keep some formats; optional

$text = substr($text,0,$length).' [...]';
echo apply_filters('the_excerpt',$text);
}




function excerpt_read_more_link($output) {
global $post;
return substr($output,0,-5).'<small><a style="font-weight:500;" class="read_more" href="'. get_permalink($post->ID) . '">read more &rarr;</a></small>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

	



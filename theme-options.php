<?php 

/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array(

    'sections'=> array(
// --------------------------------------------------------------------------------------------------------------------------------------------------

	array(
		'title'=>'General',
		'id'=>'general_section'
	),
	
	array(
		'title' => 'Front Page',
		'id' => 'frontpage_section'
	),
	
	array(
		'title'=>'Profile',
		'id'=>'profile_section'
	),
	
	array(
		'title' => 'Mobile',
		'id' => 'mobile_section'
	
	),
	
	array(
		'title'=>'Fonts',
		'id'=>'font_section'
	),
	
	array(
		'title'=>'Social Media',
		'id'=>'social_media_section'
	),
	
	array(
		'title'=>'Google',
		'id'=>'google_section'
	),
	
	array(
		'title'=>'Optins',
		'id'=>'optin_section'
	),
	
	array(
		'title'=>'Header',
		'id'=>'header_section'
	),

	array(
		'title'=>'Footer',
		'id'=>'footer_section'
	),
	
	array(
		'title'=>'Javascript',
		'id'=>'javascript_section'
	),
	 
	array(
		'title'=>'Banner Ads',
		'id'=>'banner_ads_section'
	),
	
	array(
		'title'=>'Custom CSS',
		'id'=>'custom_css_section'
	),
	


	), // -----------------------------------------------------------------------------------
	
    'settings'=> array(
	
// PROFILE  -------------------------------------------------------------------------------

		array(
	'id'=>'about',
	'label'=>'About Us',
	'type'=>'textarea-simple',
	'std'=>'The the world a little something about your business in this section',
	'section'=>'profile_section'
	),
	
	array(
	'id'=>'profile_image',
	'label'=>'Profile Image',
	'type'=>'upload',
	'section'=>'profile_section'
	),
	
// GENERAL -------------------------------------------------------------------------------	
	
	array(
	'id' => 'featured_slider_option',
	'label' => 'Slider ON / OFF',
	'type' => 'select',
	'section' => 'frontpage_section',
	'choices'=> array(
		array(
		'label'=>'On',
		'value'=>'on'
		),
		array(
		'label'=>'Off',
		'value'=>'off'
		)
	)
	
	),

// GENERAL -------------------------------------------------------------------------------


	
	array(
	'id'=>'favicon',
	'label'=>'Favicon',
	'type'=>'upload',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'business_name',
	'label'=>'Name',
	'type'=>'text',
	'std' => ' Your Business Name',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'address',
	'label'=>'Address',
	'desc'=>'*needed for google maps',
	'type'=>'text',
	'std' => '1234 Silicon Beach Ave. Suite #101',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'city',
	'label'=>'City',
	'desc'=>'*needed for google maps',
	'type'=>'text',
	'std' => 'Los Angeles',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'state',
	'label'=>'State',
	'desc'=>'*needed for google maps',
	'type'=>'text',
	'std' => 'CA',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'zipcode',
	'label'=>'Zipcode',
	'desc'=>'',
	'type'=>'text',
	'std' => '90210',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'phone_1',
	'label'=>'Business Line #1',
	'type'=>'text',
	'std' => '123.456.7890',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'phone_2',
	'label'=>'Business Line #2 ( Toll Free )',
	'type'=>'text',
	'std' => '888.123.4567',
	'section'=>'general_section'
	),
	
	array(
	'id'=>'email',
	'label'=>'Business Email',
	'type'=>'text',
	'std' => 'youremail@yourdomain.com',
	'section'=>'general_section'
	),
	
	
// MOBILE -------------------------------------------------------------------------------

		array(
		'id'=>'mobile_image',
		'label'=>'Mobile Image',
		'type'=>'upload',
		'desc'=>'<p>We recommend uploading your business logo for your mobile image.  An image with a size of 480 x 720  will give you the best resolution for portrait and landscape views.</p><p>  This Image will show up on the front page of your mobile website.</p><p>Check it out by viewing mobile website here <br/><br/><a href="http://www.mobilephoneemulator.com/">Mobile Phone Emulator</a></p>',
		'section'=>'mobile_section'
		),
		
		// MOBILE TEMPLATE FUNCTION
/*
		array(
		'id'=>'mobile_template',
		'label'=>'Mobile Template',
		'type'=>'select',
		'section'=>'mobile_section',
		'choices'=> array(
				array(
				'label'=>'Template 1',
				'value'=>'1'
				),
				array(
				'label'=>'Template 2',
				'value'=>'2'
				),
				array(
				'label'=>'Template 3',
				'value'=>'3'
				),
				array(
				'label'=>'Template 4',
				'value'=>'4'
				)
			)	
		),
*/

// FONT STYLES -----------------------------------------------------------------------------
	
		array(
		'id'=>'font_style',
		'label'=>'Font Style',
		'type'=>'select',
		'section'=>'font_section',
		'choices'=> array(
				array(
				'label'=>'League + OpenSans',
				'value'=>'league+opensans'
				),
				array(
				'label'=>'Helvetica + OpenSans',
				'value'=>'helvetica+opensans'
				),
				array(
				'label'=>'Helvetica + Cabin',
				'value'=>'helvetica+cabin'
				)
			)	
		),
		
//  FOOTER ----------------------------------------------------------------------------------------------------------------

		array
		(
			'id'=>'footer_one',
			'label'=>'Footer One -  ON / OFF',
			'type'=>'select',
			'section'=>'footer_section',
			'choices'=> array(
				array(
				'label'=>'On',
				'value'=>'on'
				),

				array(
				'label'=>'Off',
				'value'=>'off'
				)
			)
		),
		
		array(
		'id'=>'footer_two',
		'label'=>'Footer Two -  ON / OFF',
		'type'=>'select',
		'section'=>'footer_section',
		'choices'=>
			array(
				array(
				'label'=>'On',
				'value'=>'on'
				),
					
				array(
				'label'=>'Off',
				'value'=>'off'
				)
			)
		),
		
		array(
		'id'=>'copyright',
		'label'=>'Copyright Info',
		'type'=>'text',
		'std'=> 'Your Business Name &copy; All Rights Reserved 2012',
		'section'=>'footer_section'),
		
		array(
		'id'=>'footer_contact_form_id',
		'label'=>'Footer Contact Form ID',
		'type'=>'text',
		'std'=>'1',
		'section'=>'footer_section'),

// SOCIAL MEDIA -----------------------------------------------------------------------	
		
		array(
		'id'=>'facebook_url',
		'label'=>'Facebook URL',
		'std'=>'facebook',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		array(
		'id'=>'twitter_url',
		'label'=>'Twitter URL',
		'std'=>'twitter',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		array(
		'id'=>'googleplus_url',
		'label'=>'Google+ URL',
		'std'=>'googleplus',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		array(
		'id'=>'linkedin_url',
		'label'=>'Linked In URL',
		'std'=>'linkedin',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		array(
		'id'=>'youtube_url',
		'label'=>'Youtube URL',
		'std'=>'youtube',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		array(
		'id'=>'pinterest_url',
		'label'=>'Pinterest URL',
		'std'=>'pinterest',
		'type'=>'text',
		'section'=>'social_media_section'
		),
		
		
// GOOGLE -------------------------------------------------------------------------------

		array(
		'id'=>'google_call_widget',
		'rows'=>'3',
		'type'=>'textarea-simple',
		'label'=>'Google Call Widget',
		'section'=>'google_section'
		),
		
		array(
		'id'=>'google_analytics_code',
		'rows'=>'13',
		'type'=>'textarea-simple',
		'label'=>'Google Analytics Code',
		'section'=>'google_section'
		),
		
//  OPTIN CODE ----------------------------------------------------------------------------------------------------------------

				array(
			'id'=>'optin_codes',
			'label'=>'Optin Codes',
			'type'=>'list-item',
			'section'=>'optin_section',
			'settings'=>
				array(
					array(
					'id'=>'image',
					'label'=>'Image',
					'desc' => 'Place your product image here',
					'type'=>'upload'
					),
					array(
					'id'=>'content',
					'label'=>'Optin Content',
					'desc' => 'HTML is okay',
					'type'=>'textarea-simple'
					),
					
					array(
					'id'=>'code',
					'label'=>'Optin Code Snippet',
					'desc' => 'Please place your <a href="pandabear.co/prometheus/support/naked-optin-code">Naked Optin Code</a> into this box.',
					'type'=>'textarea-simple'
					)

				)
			),	
			
			
//  HEADER  ----------------------------------------------------------------------------------------------------------------

			array(
			'id'=>'logo_image',
			'label'=>'Logo Image',
			'type'=>'upload',
			'section'=>'header_section'
			),
			
			array(
			'id'=>'logo_width',
			'label'=>'Logo - WIDTH',
			'type'=>'text',
			'std' => '156',
			'section'=>'header_section'
			),
			
			array(
			'id'=>'logo_top',
			'label'=>'Logo - MARGIN TOP',
			'type'=>'text',
			'std' => '5',
			'section'=>'header_section'
			),
			
			array(
			'id' => 'headerwrap_bg',
			'label' => 'Background #1 - Image',
			'type'=>'upload',
			'section'=>'header_section',
			'desc'=>'This image is stretched across the header background'
			
			),
			
			array(
			'id' => 'headerwrap_bg_repeat',
			'label' => 'Background #1 -  background-repeat',
			'type'=>'select',
			'section'=>'header_section',
			'desc'=>'Repeat Option for Background #1 ( Outer BG )',
			'std'=>'no-repeat',
			'choices'=> array(
				array(
				'label'=>'no-repeat',
				'value'=>'no-repeat'
				),

				array(
				'label'=>'repeat',
				'value'=>'repeat'
				),

				array(
				'label'=>'repeat-x',
				'value'=>'repeat-x'
				),

				array(
				'label'=>'repeat-y',
				'value'=>'repeat-y'
				)
			)
			
			),
			
			array(
			'id' => 'header_bg',
			'label' => 'Background #2',
			'type'=>'upload',
			'section'=>'header_section',
			'desc'=>'This image is stretched across the header background'
			
			),
			
			array(
			'id' => 'header_bg_repeat',
			'label' => 'Background #2 -  background-repeat',
			'type'=>'select',
			'section'=>'header_section',
			'desc'=>'Repeat Option for Background #2 ( Inner BG )',
			'std'=>'no-repeat',
			'choices'=> array(
				array(
				'label'=>'no-repeat',
				'value'=>'no-repeat'
				),

				array(
				'label'=>'repeat',
				'value'=>'repeat'
				),

				array(
				'label'=>'repeat-x',
				'value'=>'repeat-x'
				),

				array(
				'label'=>'repeat-y',
				'value'=>'repeat-y'
				)
			)
			
			),
			
			array(
			'id'=>'header_images',
			'label'=>'Header Images',
			'type'=>'list-item',
			'section'=>'header_section',
			'settings'=>
				array(
					array(
					'id'=>'header_image',
					'label'=>'Image',
					'type'=>'upload'
					),
					array(
					'id'=>'header_image_id',
					'label'=>'Image ID',
					'type'=>'text'
					)
				)
			),	
			
			array(
			'id'=>'header_content',
			'label'=>'HTML Content',
			'type'=>'textarea-simple',
			'section'=>'header_section'
			),
			
			
//  SLIDER  ----------------------------------------------------------------------------------------------------------------	
		
		/*
			array(
			
			'id'=>'slider',
			'label'=>'Slider',
			'type'=>'list-item',
			'section'=>'slider_section',
			'settings'=>
			
				array(
				
					array(
					'id'=>'headline',
					'label'=>'Headline',
					'type'=>'text'
					),
					
					array(
					'id'=>'slider_content',
					'label'=>'Content',
					'type'=>'textarea-simple'
					),
					
					array(
					'id'=>'image_one',
					'label'=>'Image One',
					'type'=>'upload'
					)
					
				)
				
				
			),
			
			*/
			
			
//  JAVASCRIPT  ----------------------------------------------------------------------------------------------------------------

			array(
			'id'=>'javascript',
			'label'=>'Javascript',
			'type'=>'textarea-simple',
			'section'=>'javascript_section',
			'rows'=>'20'
			),

//  BANNER ADS  ----------------------------------------------------------------------------------------------------------------

			array(
			'id'=>'468x60_1',
			'label'=>'Blog Header Banner - 468 x 60',
			'type'=>'upload',
			'section'=>'banner_ads_section'
			),

//  BANNER ADS  ----------------------------------------------------------------------------------------------------------------

			array(
			'id'=>'custom_css',
			'label'=>'Custom CSS',
			'type'=>'textarea-simple',
			'section'=>'custom_css_section',
			'rows'=>'20'
			)

	) // settings::end
	  
  ); // custom settings array :: end
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}

?>
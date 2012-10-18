<?php 

/*
*  ACF { Conditional Logic
*
*  @description: hide / show fields based on a "trigger" field
*  @created: 17/07/12
*/

function my_conditional_logic()
{
	?>			
	<style type="text/css">
				#acf-optin_bg,
				#acf-body_bg_color,
				#acf-optin_code,
				#acf-text_color,
				#acf-font_combo,
				#acf-featured_image,
				#acf-featured_video,
				#acf-cover_photo,
				#acf-header_bg, 
				#acf-footer_bg,
				#acf-location_name,
				#acf-address,
				#acf-city,
				#acf-state,
				#acf-zipcode,
				#acf-contact_name,
				#acf-contact_phone,
				#acf-share_url,
				#acf-share_message,
				#acf-download,
				#acf-headline_1,
				#acf-content_1,
				#acf-headline_2,
				#acf-content_2
			{display: none;}
	</style>
	<script type="text/javascript">
	(function($){
		
		
		/*
		*  hide_fields
		*
		*  @description: a small function to hide all the conditional fields
		*  @created: 17/07/12
		*/
		
		function hide_fields()
		{
			$('#acf-featured_image, #acf-featured_video, #acf-cover_photo, #acf-header_bg, #acf-footer_bg, #acf-location_name, #acf-location_name, #acf-address, #acf-city, #acf-state, #acf-zipcode, #acf-contact_name, #acf-contact_phone, #acf-share_url, #acf-share_message, #acf-download, #acf-headline_1, #acf-content_1, #acf-headline_2, #acf-content_2').hide();
		}
		
		function hide_advanced_fields()
		{
			$('#acf-optin_bg, #acf-body_bg_color, #acf-optin_code, #acf-text_color, #acf-font_combo').hide();
		
		}
		
		
		/*
		*  acf/setup_fields
		*  - Similar to $(document).ready, but runs after ACF has instantiated itself
		*/
		
		$(document).live('acf/setup_fields', function(e, postbox){
			
			// trigger change on the select field to show selected field
			$('#acf-squeeze_page_type select').trigger('change');      
		
		});
		
		$('#acf-advanced_options select').live('change', function()
		{
		
				// vars
			var value = $(this).val();
			
			
			// hide all fields
			hide_advanced_fields();
			
			if( value == 'on')
			{
			
			$('#acf-text_color').show();
			$('#acf-font_combo').show();
			$('#acf-optin_bg').show();
			$('#acf-body_bg_color').show();
			$('#acf-optin_code').show();
	
			}
		
		});
		

		
		$('#acf-squeeze_page_type select').live('change', function()
		{
			
			// vars
			var value = $(this).val();
			
			
			// hide all fields
			hide_fields();
			

			
			if( value == 'image_cover_header_bg' )
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();
				$('#acf-cover_photo').show();
				$('#acf-header_bg').show();

			}
			
			else if( value == 'image_cover_footer_bg')
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();
				$('#acf-cover_photo').show();
				$('#acf-footer_bg').show();
			}
			
			else if( value == 'image_slim_center_header_bg' )
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-featured_image').show();
				$('#acf-header_bg').show();
			}
			
			else if( value == 'image_slim_center_footer_bg' )
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-featured_image').show();
				$('#acf-footer_bg').show();
			}
			
			else if( value == 'image_slim_left_header_bg' || value == 'image_slim_right_header_bg' )
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();			
				$('#acf-featured_image').show();
				$('#acf-header_bg').show();
			}
			
			else if( value == 'image_slim_left_footer_bg' || value == 'image_slim_right_footer_bg' )
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();	
				$('#acf-featured_image').show();
				$('#acf-footer_bg').show();
			}
			
			else if( value == 'video_wide_center_header_bg' || value == 'video_slim_center_header_bg' )
			{
				$('#acf-featured_video').show();
				$('#acf-header_bg').show();
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
			}
			
			else if( value == 'video_wide_center_footer_bg' || value == 'video_slim_center_footer_bg')
			{
			
				$('#acf-featured_video').show();
				$('#acf-footer_bg').show();
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
			
			}
			
			else if( value == 'video_slim_left_header_bg' || value == 'video_slim_right_header_bg')
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();	
				$('#acf-featured_video').show();
				$('#acf-header_bg').show();			
			
			}
			
			else if ( value == 'video_slim_left_footer_bg' || value == 'video_slim_right_footer_bg')
			{
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();	
				$('#acf-featured_video').show();
				$('#acf-footer_bg').show();
			}
			
			
			else if ( value == 'event_image_slim_center_footer_bg')
			{
			
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();
				$('#acf-featured_image').show();
				$('#acf-footer_bg').show();
				$('#acf-address').show();
				$('#acf-city').show();
				$('#acf-state').show();
				$('#acf-zipcode').show();
				$('#acf-location_name').show();
				$('#acf-contact_name').show();
				$('#acf-contact_phone').show();
			
			
			}
			
			else if ( value == 'event_video_slim_center_footer_bg')
			{
			
				$('#acf-headline_1').show();
				$('#acf-content_1').show();
				$('#acf-headline_2').show();
				$('#acf-content_2').show();
				$('#acf-featured_video').show();
				$('#acf-footer_bg').show();
				$('#acf-address').show();
				$('#acf-city').show();
				$('#acf-state').show();
				$('#acf-zipcode').show();
				$('#acf-location_name').show();
				$('#acf-contact_name').show();
				$('#acf-contact_phone').show();
			
			}
			
			else if ( value == 'share_to_download')
			{
			
			$('#acf-download').show();
			$('#acf-featured_image').show();
			$('#acf-share_message').show();
			$('#acf-share_url').show();
			
			}
			
			
			
			

		});
		
	
	})(jQuery);
	</script>
	
	
	<?php
	
}

add_action('acf_head-input', 'my_conditional_logic');


?>
<?php 

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '507fad1040fb4',
		'title' => 'Choose Your Optin ( Page w/ Optin )',
		'fields' => 
		array (
			0 => 
			array (
				'choices' => 
				array (
					0 => '1',
					1 => '2',
					2 => '3',
					3 => '4',
					4 => '5',
					5 => '6',
					6 => '7',
					7 => '8',
					8 => '9',
					9 => '10',
					10 => '11',
					11 => '12',
					'' => '',
				),
				'key' => 'field_5077a72598998',
				'label' => 'Choose Your Optin',
				'name' => 'optin_number',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => '',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '0',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-optin.php',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '507fad1041190',
		'title' => 'Slides',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_507f221301803',
				'label' => 'Slide Image ',
				'name' => 'featured_image',
				'type' => 'image',
				'instructions' => '',
				'required' => '0',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'order_no' => '0',
			),
			1 => 
			array (
				'key' => 'field_507f22130baf7',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Enter Your Content Here ',
				'formatting' => 'html',
				'order_no' => '1',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'slides',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => '507fad1041344',
		'title' => 'Squeeze Page Form',
		'fields' => 
		array (
			0 => 
			array (
				'choices' => 
				array (
					'image_cover_footer_bg' => 'Product Cover w/ Copy ( Cover + Copy + Footer BG )',
					'image_slim_center_footer_bg' => 'Product Image ( Slim + Center + Footer BG )',
					'image_slim_left_header_bg' => 'Product Image ( Slim + Left + Header BG )',
					'image_slim_left_footer_bg' => 'Product Image ( Slim + Left + Footer BG )',
					'video_wide_center_header_bg' => 'Product Video ( Wide + Center + Header BG )',
					'video_wide_center_footer_bg' => 'Product Video ( Wide + Center + Footer BG )',
					'share_to_download' => 'Pay with a Tweet / Like ( Wide + Center )',
					'' => '',
				),
				'key' => 'field_507385aae4418',
				'label' => 'Squeeze Page Type',
				'name' => 'squeeze_page_type',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'image_cover_header_bg',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '0',
			),
			1 => 
			array (
				'choices' => 
				array (
					'on' => 'on',
					'off' => 'off',
				),
				'label' => 'Advanced Fields',
				'name' => 'advanced_options',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'off',
				'allow_null' => '0',
				'multiple' => '0',
				'key' => 'field_507e6ce00d11b',
				'order_no' => '1',
			),
			2 => 
			array (
				'choices' => 
				array (
					'josefin+opensans' => 'Josefin + Opensans',
					'league+opensans' => 'League + Opensans',
					'lobster+cabin' => 'Lobster + Cabin',
					'raleway+goudy' => 'Raleway + Goudy',
					'allerta+crimson' => 'Allerta + Crimson',
					'arvo+ptsans' => 'Arvo + PT Sans',
					'molengo+lekton' => 'Molengo + Lekton',
					'corben+nubile' => 'Corben + Nubile',
					'ubuntu+vollkorn' => 'Ubuntu + Vollkorn',
					'' => '',
				),
				'key' => 'field_507908b0dc094',
				'label' => 'Font Combination ',
				'name' => 'font_combo',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'league+opensans',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '2',
			),
			3 => 
			array (
				'choices' => 
				array (
					'#000' => 'Black',
					'#fff' => 'White',
					'#eee' => 'Light Grey',
					'#ccc' => 'Light - Medium Grey',
					'#aaa' => 'Medium Grey',
					'#888' => 'Medium - Dark Grey',
					'#666 - Dark Grey' => '#666 - Dark Grey',
				),
				'key' => 'field_507908b0dbd46',
				'label' => 'Text Color',
				'name' => 'text_color',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => '#000',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '3',
			),
			4 => 
			array (
				'choices' => 
				array (
					'#fff' => 'White',
					'#000' => 'Black',
					'lightblue' => 'Light Blue',
					'skyblue' => 'Sky Blue',
					'lightcoral' => 'Light Coral',
					'azure' => 'Azure',
				),
				'key' => 'field_507908b0db840',
				'label' => 'Background Color',
				'name' => 'body_bg_color',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'white',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '4',
			),
			5 => 
			array (
				'choices' => 
				array (
					'optin_1' => 'Optin #1',
					'optin_2' => 'Optin #2',
					'optin_3' => 'Optin #3',
					'optin_4' => 'Optin #4',
				),
				'key' => 'field_50738aea769df',
				'label' => 'Choose Your Optin',
				'name' => 'optin_code',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => '',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '5',
			),
			6 => 
			array (
				'choices' => 
				array (
					'none' => 'None',
					'red_linear_top' => 'Red',
					'yellow_linear_top' => 'Yellow',
					'green_linear_top' => 'Green',
					'blue_linear_top' => 'Blue',
					'indigo_linear_top' => 'Indigo',
					'violet_linear_top' => 'Violet',
					'pink_linear_top' => 'Pink',
					'orangered_linear_top' => 'Orange Red',
					'emerald_linear_top' => 'Emerald',
					'lavender_linear_top' => 'Lavender',
					'skyblue_linear_top' => 'Skyblue',
				),
				'key' => 'field_50751a7fe09f9',
				'label' => 'Header Background Color',
				'name' => 'header_bg',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'none',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '6',
			),
			7 => 
			array (
				'choices' => 
				array (
					'none' => 'None',
					'red_linear_bottom' => 'Red',
					'yellow_linear_bottom' => 'Yellow',
					'green_linear_bottom' => 'Green',
					'blue_linear_bottom' => 'Blue',
					'indigo_linear_bottom' => 'Indigo',
					'violet_linear_bottom' => 'Violet',
					'pink_linear_bottom' => 'Pink',
					'orangered_linear_bottom' => 'Orange Red',
					'emerald_linear_bottom' => 'Emerald',
					'lavender_linear_bottom' => 'Lavender',
					'skyblue_linear_bottom' => 'Skyblue',
				),
				'key' => 'field_507530c1d71af',
				'label' => 'Footer Background Color',
				'name' => 'footer_bg',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'none',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '7',
			),
			8 => 
			array (
				'choices' => 
				array (
					'red' => 'Red',
					'orange' => 'Orange',
					'yellow' => 'Yellow',
					'green' => 'Green',
					'blue' => 'Blue',
					'indigo' => 'Indigo',
					'violet' => 'Violet',
					'pink' => 'Pink',
					'orangered' => 'Orange Red',
					'emerald' => 'Emerald',
					'lavender' => 'Lavender',
					'skyblue' => 'Skyblue',
				),
				'key' => 'field_507525b86878c',
				'label' => 'Optin BG Color',
				'name' => 'optin_bg',
				'type' => 'select',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'green',
				'allow_null' => '0',
				'multiple' => '0',
				'order_no' => '8',
			),
			9 => 
			array (
				'key' => 'field_5074a03ae6e68',
				'label' => 'Cover Photo',
				'name' => 'cover_photo',
				'type' => 'image',
				'instructions' => '',
				'required' => '0',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'order_no' => '9',
			),
			10 => 
			array (
				'key' => 'field_50738aea7b7cc',
				'label' => 'Video',
				'name' => 'featured_video',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'NdDU_BBJW9Y',
				'formatting' => 'html',
				'order_no' => '10',
			),
			11 => 
			array (
				'key' => 'field_50738aea82cda',
				'label' => 'Image',
				'name' => 'featured_image',
				'type' => 'image',
				'instructions' => '',
				'required' => '0',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'order_no' => '11',
			),
			12 => 
			array (
				'key' => 'field_505ed70473ae4',
				'label' => 'Headline #1',
				'name' => 'headline_1',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'YOUR AWESOME HEADLINE#1 GOES HERE!',
				'formatting' => 'html',
				'order_no' => '12',
			),
			13 => 
			array (
				'key' => 'field_505ed7047445e',
				'label' => 'Content #1',
				'name' => 'content_1',
				'type' => 'textarea',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Well, I generally come in at least fifteen minutes late, ah, I use the side door - that way Lumbergh can\'t see me, heh heh - and, uh, after that I just sorta space out for about an hour. ',
				'formatting' => 'html',
				'order_no' => '13',
			),
			14 => 
			array (
				'key' => 'field_505ed7047506e',
				'label' => ' Headline #2',
				'name' => 'headline_2',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Your Amazing Headline #2 Goes Here!',
				'formatting' => 'html',
				'order_no' => '14',
			),
			15 => 
			array (
				'key' => 'field_505ed70475c32',
				'label' => 'Content #2',
				'name' => 'content_2',
				'type' => 'textarea',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'It was a "Jump to Conclusions" mat. You see, it would be this mat that you would put on the floor... and would have different CONCLUSIONS written on it that you could JUMP TO. ',
				'formatting' => 'html',
				'order_no' => '15',
			),
			16 => 
			array (
				'key' => 'field_507481a7113d7',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => '1234 Boardwalk Ave.',
				'formatting' => 'html',
				'order_no' => '16',
			),
			17 => 
			array (
				'key' => 'field_507481a71179e',
				'label' => 'City',
				'name' => 'city',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Los Angeles',
				'formatting' => 'html',
				'order_no' => '17',
			),
			18 => 
			array (
				'key' => 'field_507481a711ae1',
				'label' => 'State',
				'name' => 'state',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'CA',
				'formatting' => 'html',
				'order_no' => '18',
			),
			19 => 
			array (
				'key' => 'field_507481a711e23',
				'label' => 'Zipcode',
				'name' => 'zipcode',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => '90210',
				'formatting' => 'html',
				'order_no' => '19',
			),
			20 => 
			array (
				'key' => 'field_507481a71215f',
				'label' => 'Download ',
				'name' => 'download',
				'type' => 'file',
				'instructions' => 'Upload the file that you would like to give away as a download',
				'required' => '0',
				'save_format' => 'url',
				'order_no' => '20',
			),
			21 => 
			array (
				'key' => 'field_50749732c7b47',
				'label' => 'Share URL',
				'name' => 'share_url',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'www.yourwebsite.com',
				'formatting' => 'html',
				'order_no' => '21',
			),
			22 => 
			array (
				'key' => 'field_50749732c7e14',
				'label' => 'Location Name',
				'name' => 'location_name',
				'type' => 'text',
				'instructions' => 'Add Your Event\'s Location Name Here 
',
				'required' => '0',
				'default_value' => 'Your Event Location',
				'formatting' => 'html',
				'order_no' => '22',
			),
			23 => 
			array (
				'key' => 'field_50749732c80ac',
				'label' => 'Contact Name',
				'name' => 'contact_name',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Event Contact Name Goes Here',
				'formatting' => 'html',
				'order_no' => '23',
			),
			24 => 
			array (
				'key' => 'field_50749732c834e',
				'label' => 'Contact Phone #',
				'name' => 'contact_phone',
				'type' => 'text',
				'instructions' => '',
				'required' => '0',
				'default_value' => 'Event Contact Phone # Goes Here',
				'formatting' => 'html',
				'order_no' => '24',
			),
			25 => 
			array (
				'key' => 'field_5074a62f6c173',
				'label' => 'Share Message',
				'name' => 'share_message',
				'type' => 'text',
				'instructions' => 'This text will be displayed on your share message :',
				'required' => '0',
				'default_value' => 'Check Out This Amazing New Website About ... Lorem Ipsum !',
				'formatting' => 'html',
				'order_no' => '25',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'squeeze',
					'order_no' => '0',
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
}
?>
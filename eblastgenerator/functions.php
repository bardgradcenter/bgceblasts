<?php

	//Image size for two column AP Template//
	add_image_size( 'new_ap_image', 340, 9999);

	//Image sizes for Newsletter Templat//
	add_image_size('newsletter_banner', 650, 9999);
	add_image_size('featured_blocks', 300, 9999, false);
	add_image_size('two_events', 300, 200, true);
	add_image_size('three_events', 183, 122, true);
	add_image_size('four_events', 125, 83, true);

	//Custom span style for .colorText//
	// Callback function to insert 'styleselect' into the $buttons array
	function my_mce_buttons_2( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}
	// Register our callback to the appropriate filter
	add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

	// Callback function to filter the MCE settings
	function my_mce_before_init_insert_formats( $init_array ) {  
		// Define the style_formats array
		$style_formats = array(  
			// Each array child is a format with it's own settings
			array(  
				'title' => 'Color Text',  
				'inline' => 'span',  
				'classes' => 'colorText',
				'wrapper' => true,
				
			),  
		);  
		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );  
		
		return $init_array;  
	  
	} 
	// Attach callback to 'tiny_mce_before_init' 
	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  

	/**
 	* Registers an editor stylesheet for the theme.
 	*/
	function wpdocs_theme_add_editor_styles() {
	    add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


	// Add options page(s) //
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page('Newsletter Options');
		
	}
?>
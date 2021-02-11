<?php
/**
 * Shortcodes
 */

if ( ! function_exists( 'is_plugin_active' ) ) require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
if(is_plugin_active("js_composer/js_composer.php") && function_exists('vc_map') && function_exists('vc_set_as_theme')) {

	$add_css_animation = 
	array(
		'type' => 'animation_style',
		'heading' => esc_attr( 'Initial loading animation', 'freevision-tracker' ),
		'param_name' => 'css_animation',
		'value' => '',
		'settings' => array(
			'type' => array(
				'in',
				'other',
			),
		),
		'description' => esc_attr( 'Select initial loading animation for grid element.', 'freevision-tracker' ),
	);

	/**
	* Tracking
	*/
	if (!function_exists('ozy_vc_freevision_tracker')) {
		function ozy_vc_freevision_tracker( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_freevision_tracker', $atts);
			extract(shortcode_atts(array(
				'image'			=> '',
				'extra_css'		=> '',
				'min_height'	=> '',
				'bg_color'		=> '',
				'fn_color'		=> '',
				'is_inline'		=> '',
				'link'			=> '',
				'css_animation' => ''
			), $atts));

			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$freevision_tracker_options = get_option('freevision_tracker'); $google_recaptcha = '';
			if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['google_recaptcha'])) {
				$google_recaptcha = $freevision_tracker_options['google_recaptcha'];
			}
			
			$inline_style = '';
			if($bg_color) $inline_style .= 'background-color:'. esc_attr($bg_color) .';';
			if($min_height) $inline_style .= 'min-height:'. esc_attr($min_height) .';';
			
			if(!$google_recaptcha) {				
				$output = '<div style="text-align:center;color:red;">'. esc_html('Sorry, you have to enter Google ReCaptcha API Key first. Please go to your Dashboard > Tracking > Settings page to set one.', 'freevision-tracker') . '</div>';
			}else{
				wp_enqueue_script('freevision-tracker-recaptcha');
				$output = '<table id="freevision_tracker_form" '. ($inline_style ? 'style="'. $inline_style .'"':'') .' class="freevision_tracker_form '. ($is_inline == 'true' ? 'freevision-tracker-form-shortcode ' : '') .'content-font-family">';
				$output.= '<tr><td class="g-recaptcha-td">';
				$output.= '<div id="google_recaptcha_html_element'. ($is_inline == 'true' ? '_inline' : '') .'" data-sitekey="'. esc_attr($google_recaptcha) .'" class="google_recaptcha_html_element'. ($is_inline == 'true' ? '_inline ' : '') .'" data-sitekey="'. esc_attr($google_recaptcha) .'"></div>';
				$output.= '</td></tr>';
				$output.= '<tr><td>';
				$output.= '<label for="freevision_tracker_id_field" '. ($fn_color ? 'style="color:'. esc_attr($fn_color) .'!important"':'') .'>'. esc_attr('Enter tracking ID', 'freevision-tracker') .'</label>';
				$output.= '<input type="text" name="freevision_tracker_id_field" class="freevision_tracker_id_field" id="freevision_tracker_id_field" autocomplete="off" placeholder="Parcel tracking ID"/>';
				$output.= '</td></tr>';
				$output.= '<tr><td>';
				$output.= '<input type="button" class="freevision_tracker_query_button '. ($is_inline == 'true' ? 'generic-button-alternate' : '') .'" name="freevision_tracker_query_button" id="freevision_tracker_query_button" value="TRACK"/>';
				$output.= '</td></tr>';
				$output.= '</table>';
			}
			return $output;
		}
		
		add_shortcode('ozy_vc_freevision_tracker', 'ozy_vc_freevision_tracker');
		
		vc_map( array(
			"name" => esc_attr__("Tracker", "freevision-tracker"),
			"base" => "ozy_vc_freevision_tracker",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Minimum Height", "freevision-tracker"),
					"param_name" => "min_height",
					"admin_label" => true,
					"value" => '500px'
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Inline", "freevision-tracker"),
					"param_name" => "is_inline",
					"value" => array("true", "false")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Background Color", "freevision-tracker"),
					"param_name" => "bg_color",
					"admin_label" => false,
					"value" => "#FFFFFF"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Font Color", "freevision-tracker"),
					"param_name" => "fn_color",
					"admin_label" => false,
					"value" => "#352C66 "
				),$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "freevision-tracker"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "freevision-tracker")
				)			
		   )
		) );	
	}
}
?>
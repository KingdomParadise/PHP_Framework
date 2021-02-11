<?php
/**
 * Shortcodes
 */
if(function_exists('vc_map') && function_exists('vc_set_as_theme')) {

	//Icon Selector Attribute Type
	function ozy_select_an_icon_settings_field($settings, $value) {
       return '<div class="select_an_icon">'
                 .'<input name="'.$settings['param_name']
                 .'" id="field_'.$settings['param_name']
                 .'_select" class="wpb_vc_param_value wpb-textinput '
                 .$settings['param_name'].' '.$settings['type'].'_field" type="text" value="'
                 .$value.'"/>'
             .'</div>';
	}

	vc_add_shortcode_param('select_an_icon', 'ozy_select_an_icon_settings_field', get_template_directory_uri() .'/scripts/admin/admin.js');

	$add_css_animation = 
	array(
		'type' => 'animation_style',
		'heading' => esc_attr( 'Initial loading animation', 'frv-logipro-essentials' ),
		'param_name' => 'css_animation',
		'value' => '',
		'settings' => array(
			'type' => array(
				'in',
				'other',
			),
		),
		'description' => esc_attr( 'Select initial loading animation for grid element.', 'frv-logipro-essentials' ),
	);
	
	/**
	* Donut Chart
	*/
	if (!function_exists('ozy_vc_donut_chart')) {
		function ozy_vc_donut_chart( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_donut_chart', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'title_position' => 'top',
				'type' => 'doughnut',
				'legends' => 'true',
				'legends_position' => 'right',
				'fn_color' => '#000000',
				'bg_color' => '#ffffff'
			), $atts));
			
			$GLOBALS['OZY_CHART_ITEMS'] = array();
			
			wp_enqueue_script('logipro-donut-chart-library');
			wp_enqueue_script('logipro-donut-chart');			
			
			$rand_id = 'chart' . rand(100,10000); 
			
			do_shortcode($content);
			wp_localize_script( 'logipro', 'ozyChartData', array($rand_id =>  json_encode($GLOBALS['OZY_CHART_ITEMS'])) );
			
			$output = '<canvas class="ozy-chart" style="'. ($bg_color ? 'background-color:' . esc_attr($bg_color) : '') .'" data-chartid="'. esc_attr($rand_id) .'" data-fncolor="'. esc_attr($fn_color) .'" data-title="'. esc_attr($title) .'" data-titleposition="'. esc_attr($title_position) .'" data-type="'. esc_attr($type) .'" data-legends="'. esc_attr($legends) .'" data-legends_position="'. esc_attr($legends_position) .'"></canvas>';			
			
			unset($GLOBALS['OZY_CHART_ITEMS']);
			
			return $output;
		}
		
		add_shortcode('ozy_vc_donut_chart', 'ozy_vc_donut_chart');
		
		vc_map( array(
			"name" => __("Chart", "frv-logipro-essentials"),
			"base" => "ozy_vc_donut_chart",
			"as_parent" => array('only' => 'ozy_vc_donut_chart_item'),
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Chart Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => esc_attr("Enter Your Title Here", "frv-logipro-essentials"),
					"admin_label" => true
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Title Position", "frv-logipro-essentials"),
					"param_name" => "Title_position",
					"admin_label" => true,
					"value" => array("top", "left", "bottom", "right")
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Type", "frv-logipro-essentials"),
					"param_name" => "type",
					"admin_label" => true,
					"value" => array("doughnut", "pie", "bar", "polarArea")
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Show Legends", "frv-logipro-essentials"),
					"param_name" => "legends",
					"admin_label" => true,
					"value" => array("true", "false")
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Legends Position", "frv-logipro-essentials"),
					"param_name" => "legends_position",
					"admin_label" => true,
					"value" => array("right", "bottom", "left", "top")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Font Color", "frv-logipro-essentials"),
					"param_name" => "fn_color",
					"admin_label" => true,
					"value" => "#000000"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Background Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => true,
					"value" => "#ffffff"
				)
		   ),
		   "js_view" => 'VcColumnView'
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Donut_Chart extends WPBakeryShortCodesContainer{}

	if (!function_exists('ozy_vc_donut_chart_item')) {
		function ozy_vc_donut_chart_item( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_donut_chart_item', $atts);
			extract(shortcode_atts(array(
				'label' => '',
				'value' => '',
				'bg_color' => ''
			), $atts));

			$GLOBALS['OZY_CHART_ITEMS'][] = array(esc_attr($label), esc_attr($value), esc_attr($bg_color));
			
			return '';
		}
		
		add_shortcode( 'ozy_vc_donut_chart_item', 'ozy_vc_donut_chart_item' );
		
		vc_map( array(
			"name" => __("Chart Item", "frv-logipro-essentials"),
			"base" => "ozy_vc_donut_chart_item",
			"content_element" => true,
			"as_child" => array('only' => 'ozy_vc_donut_chart'),
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Label", "frv-logipro-essentials"),
					"param_name" => "label",
					"admin_label" => true,
					"value" => esc_attr("Label", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Value", "frv-logipro-essentials"),
					"param_name" => "value",
					"admin_label" => true,
					"value" => esc_attr("20", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => true,
					"value" => ""
				)
		   )
		) );	
	}

	class WPBakeryShortCode_Ozy_Vc_Donut_Chart_Item extends WPBakeryShortCode{}	
	
	/**
	* Timeline
	*/
	if (!function_exists('ozy_vc_timelinewrapper')) {
		function ozy_vc_timelinewrapper( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_timelinewrapper', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'bg_color' => '#ffffff'
			), $atts));
			
			$element_id = 'ozy-timeline-wrapper_' . rand(100,10000); 
			
			$output = '';
			$output.= ($title ? '<div id="'. $element_id .'" class="ozy-timeline-wrapper"><h4 class="timeline-caption"><span>'. esc_attr($title) .'</span></h4>' : '');
			$output.= '<ul class="timeline">'. do_shortcode($content) .'</ul>';
			$output.= ($title ? '</div>' : '');
			
			if($bg_color) {
				global $ozyLogiProHelper;
				if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;						
				$ozyLogiProHelper->set_footer_style('#'. $element_id . ' .timeline-panel{background-color:'. esc_attr($bg_color) .';}#'. $element_id . ' .timeline-panel:after{border-left-color:'. esc_attr($bg_color) .';}');
			}
			
			return $output;
		}
		
		add_shortcode('ozy_vc_timelinewrapper', 'ozy_vc_timelinewrapper');
		
		vc_map( array(
			"name" => __("Timeline Wrapper", "frv-logipro-essentials"),
			"base" => "ozy_vc_timelinewrapper",
			"as_parent" => array('only' => 'ozy_vc_timeline'),
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => "",
					"decription" => __("Only place holder", "frv-logipro-essentials"),
					"admin_label" => true
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Item Background / Arrow Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => true,
					"value" => "#ffffff"
				)
		   ),
		   "js_view" => 'VcColumnView'
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Timelinewrapper extends WPBakeryShortCodesContainer{}

	if (!function_exists('ozy_vc_timeline')) {
		function ozy_vc_timeline( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_timeline', $atts);
			extract(shortcode_atts(array(
				'position' => 'left',
				'title' => '',
				'icon' => '',
				'bg_color' => '',
				'text_color' => '',
				'icon_bg_color' => '',
				'icon_color' => '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}	
			
			$css_text_color = ($text_color ? ' style="color:'. esc_attr($text_color) .'"':'');
			
			$output = '
			 <li class="'. ($position === 'right' ? 'timeline-inverted':'') . $css_animation .'">
			  <div class="timeline-badge" style="'. ('color:'. esc_attr($icon_color) . ';background-color:' . esc_attr($icon_bg_color)) .'"><i class="'. esc_attr($icon) .'"></i></div>
			  <div class="timeline-panel">
				<div class="timeline-heading">
				  <h4 class="timeline-title"'. $css_text_color .'>'. esc_attr($title) .'</h4>
				</div>
				<div class="timeline-body"'. $css_text_color .'>'. do_shortcode($content) .'</div>
			  </div>
			</li>';

			return $output;
		}
		
		add_shortcode( 'ozy_vc_timeline', 'ozy_vc_timeline' );
		
		vc_map( array(
			"name" => __("Timeline Item", "frv-logipro-essentials"),
			"base" => "ozy_vc_timeline",
			"content_element" => true,
			"as_child" => array('only' => 'ozy_vc_timelinewrapper'),
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => __("Position", "frv-logipro-essentials"),
					"param_name" => "position",
					"admin_label" => true,
					"value" => array("left", "right")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => __("Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "select_an_icon",
					"heading" => __("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false,
					"description" => __("Once you select an Icon, title will not be shown on overlay.", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Text Color", "frv-logipro-essentials"),
					"param_name" => "text_color",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Icon Background Color", "frv-logipro-essentials"),
					"param_name" => "icon_bg_color",
					"admin_label" => true,
					"value" => "#222222"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Icon Color", "frv-logipro-essentials"),
					"param_name" => "icon_color",
					"admin_label" => true,
					"value" => "#ffffff"
				),$add_css_animation
		   )
		) );	
	}

	class WPBakeryShortCode_Ozy_Vc_Timeline extends WPBakeryShortCode{}	

	/**
	* Image With Text Block
	*/
	if (!function_exists('ozy_vc_image_with_text_block')) {
		function ozy_vc_image_with_text_block( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_image_with_text_block', $atts);
			extract(shortcode_atts(array(
				'image'			=> '',
				'title'			=> '',
				'excerpt'		=> '',
				'link'			=> '',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}	
			
			$image = wp_get_attachment_image_src($image, 'full');
			
			$output = '<figure class="ozy-image-with-text-block wpb_content_element">';
			if(isset($image[0])) {
				$output .= '<img src="'. esc_url($image[0]) .'" alt="' . esc_attr($title) . '"/>';
			}
			$output.= '<figcaption>';
			$output.= '<h3 class="content-color">'. esc_html($title) .'</h3><p>'. esc_html($excerpt) .'</p>';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && isset($link['title'])) {
				$output.= '<a href="'. esc_url($link['url']) .'" class="content-color">'. esc_html($link['title']) .' <i class="oic-right-open"></i></a>';
			}				
			$output.= '</figcaption>';
			$output.= '</figure>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_image_with_text_block', 'ozy_vc_image_with_text_block');
		
		vc_map( array(
			"name" => esc_attr("Image With Text Block", "frv-logipro-essentials"),
			"base" => "ozy_vc_image_with_text_block",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),					
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => esc_attr("Enter Title Here", "frv-logipro-essentials")
				),			
				array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => ""
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true,
					"value" => ""
				),				
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}	
	
	/**
	* Simple Info Box
	*/
	if (!function_exists('ozy_vc_simpleinfobox')) {
		function ozy_vc_simpleinfobox( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_simpleinfobox', $atts);
			extract(shortcode_atts(array(
				'image'			=> '',
				'caption'		=> '',
				'title'			=> '',
				'excerpt'		=> '',
				'fn_color'		=> '#ffffff',
				'bg_color'		=> 'transparent',
				'link_caption'	=> 'LEARN MORE',
				'link'			=> '',
				'link_target'	=> '_self',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}	
			
			$rand_id = "simple-info-box-" . rand(1,10000);
			
			$image = wp_get_attachment_image_src($image, 'full');
			
			$style = '';
			if(isset($image[0])) {
				$style = ' style="background:url('. esc_url($image[0]) .')"';
			}
			$output = '<div class="ozy-simlple-info-box '. (!$excerpt ? 'no-excerpt' : '') .'" id="'. $rand_id .'" '. $style .'>';
			
			$output .= '<section>';
			$output .= '<h5>'. esc_attr($caption) .'</h5>';
			$output .= '<h3>'. esc_attr($title) .'</h3>';
			if($excerpt) $output .= '<p>'. $excerpt .'</p>';
			$output .= '<a href="'. esc_url($link) .'" target="'. esc_attr($link_target) .'">'. esc_attr($link_caption) .'</a>' . PHP_EOL;
			$output .= '</section>';
				
			$output .= PHP_EOL .'</div>';
			
			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;			
			$ozyLogiProHelper->set_footer_style("#$rand_id>section>a,#$rand_id h3,#$rand_id h5,#$rand_id {color:". esc_attr($fn_color) ." !important;}");
			$ozyLogiProHelper->set_footer_style("#$rand_id>section>a{border-color:". esc_attr($fn_color) ."}");
			if($bg_color && $bg_color!='transparent') {
				$ozyLogiProHelper->set_footer_style("#$rand_id{background-color:". esc_attr($bg_color) ."}");
				$ozyLogiProHelper->set_footer_style("#$rand_id>section{background:none !important}");
			}			
			
			return $output;
		}
		
		add_shortcode('ozy_vc_simpleinfobox', 'ozy_vc_simpleinfobox');
		
		vc_map( array(
			"name" => esc_attr("Simple Info Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_simpleinfobox",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),		
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => esc_attr("Caption Over Title", "frv-logipro-essentials")
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => esc_attr("Enter Title Here", "frv-logipro-essentials")
				),
				array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => ""
				),		
				array(
					"type" => "colorpicker",
					"heading" => esc_attr("Foreground Color", "frv-logipro-essentials"),
					"param_name" => "fn_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_attr("Background Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => false,
					"value" => "transparent"
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Link Caption", "frv-logipro-essentials"),
					"param_name" => "link_caption",
					"value" => esc_attr("LEARN MORE", "frv-logipro-essentials"),
					"admin_label" => true
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Link Target", "frv-logipro-essentials"),
					"param_name" => "link_target",
					"value" => array("_self", "_blank", "_parent"),
					"admin_label" => false,
					"description" => esc_attr("Select link target window.", "frv-logipro-essentials")
				),	
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}

	/*
	* Knockout Text
	*/
	if (!function_exists('ozy_vc_knockout_text')) {
		function ozy_vc_knockout_text( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_knockout_text', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'title' => '',
				'font_size' => ''
			), $atts));
			
			$image = wp_get_attachment_image_src($image, 'full'); $image_src = '';
			if(isset($image[0])) {
				$image_src = $image[0];
			}			

			return '<div class="ozy-knockout-text" style="background-image:url('. esc_url($image_src) .');"><div><h2 class="masked-text" style="font-size:'. esc_attr($font_size) .'!important;line-height:'. esc_attr($font_size) .'">'. $title .'</h2></div></div>';
		}
		
		add_shortcode( 'ozy_vc_knockout_text', 'ozy_vc_knockout_text' );
		
		vc_map( array(
			"name" => esc_attr("Knockout Text", "frv-logipro-essentials"),
			"base" => "ozy_vc_knockout_text",
			"content_element" => true,
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),		
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => ""
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Size", "frv-logipro-essentials"),
					"param_name" => "font_size",
					"admin_label" => true,
					"value" => "14vw"
				)				
		   )
		) );	
	}
	
	/*
	* Service Box
	*/
	if (!function_exists('ozy_vc_service_box')) {
		function ozy_vc_service_box( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_service_box', $atts);
			extract(shortcode_atts(array(				
				'icon' => '',
				'link' => ''
			), $atts));

			$output = '';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && isset($link['title'])) {
				$output .= '<a href="'. esc_url($link['url']) .'" class="ozy-service-box shared-border-color" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']) .'"' : '') .'>';			
				if($icon) $output .= '<i class="oic f '. esc_attr($icon) .'"></i>';
				$output .= '<span class="content-color">' . $link['title'] . '</span>';
				$output .= '<i class="oic s oic-up-open-mini content-color"></i>';
				$output .= '</a>';
			}
			return $output;
		}
		
		add_shortcode( 'ozy_vc_service_box', 'ozy_vc_service_box' );
		
		vc_map( array(
			"name" => esc_attr("Service Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_service_box",
			"content_element" => true,
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "select_an_icon",
					"heading" => esc_attr("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false,
					"description" => "<br><br><br><br><br><br>"
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true,
					"value" => ""
				)
		   )
		) );	
	}
	
	/**
	* Fancy Button
	*/
	if (!function_exists('ozy_vc_custom_button')) {
		function ozy_vc_custom_button( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_custom_button', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'link' => '',
				'fancybox' => 'off',
				'fg_color' => '',
				'fg_color_hover' => '',
				'bg_color' => '',
				'bg_color_active' => '',
				'css_animation' => '',
				'button_style'	=> 'btn-0',
				'button_align'	=> 'left'
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			wp_enqueue_style('logipro-fancy-button');
			
			$rand_id = 'ofcb-' . rand(10, 100000);
			
			$output = '<span  id="w'. esc_attr($rand_id) .'" class="ozy-custom_button_w"><a id="'. esc_attr($rand_id) .'" class="ozy-custom_button '. ($fancybox == 'on' ? 'fancybox-media' : '') .' oc'. esc_attr($button_style) .'" ';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$output .= ' href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']).'"':'').' ';
			}
			$output .= '>';
			if($button_style == 'btn-3' || $button_style == 'btn-4' || $button_style == 'btn-7' || $button_style == 'btn-9' || $button_style == 'btn-10') $output .= '<span>';
			$output .= esc_html($title);
			if($button_style == 'btn-6') $output .= '<span></span>';
			if($button_style == 'btn-3' || $button_style == 'btn-4' || $button_style == 'btn-7' || $button_style == 'btn-9' || $button_style == 'btn-10') $output .= '</span>';
			$output .= '</a></span>';
						
			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;	

			$ozyLogiProHelper->set_footer_style("#$rand_id:hover {border-color:". esc_attr($bg_color) ." !important;}");
			
			if($button_style == 'btn-0') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before {background:". esc_attr($bg_color) ."!important;}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) ."!important;}
");
			if($button_style == 'btn-1') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:after {border-color:". esc_attr($bg_color) ." transparent transparent transparent;}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-1-2') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before {border-color:transparent transparent transparent ". esc_attr($bg_color) .";}#$rand_id:after {border-color:transparent transparent ". esc_attr($bg_color) ." transparent;}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-2' || $button_style == 'btn-5') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before {border-color:transparent transparent transparent ". esc_attr($bg_color) .";}#$rand_id:after {border-color:transparent ". esc_attr($bg_color) ." transparent transparent;}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-33') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before {border-color:transparent transparent transparent ". esc_attr($bg_color) .";}#$rand_id:after {border-color:transparent ". esc_attr($bg_color) ." transparent transparent;}#$rand_id span:before {border-color:transparent transparent ". esc_attr($bg_color) ." transparent;}#$rand_id span:after {border-color:". esc_attr($bg_color) ." transparent transparent transparent;}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");

			if($button_style == 'btn-4') 
				$ozyLogiProHelper->set_footer_style(
			"#$rand_id {color:". esc_attr($fg_color) ."!important;}
			#$rand_id:before {border-color:transparent transparent transparent ". esc_attr($bg_color) .";}
			#$rand_id:after {border-color:transparent ". esc_attr($bg_color) ." transparent transparent;}
			#$rand_id:before,#$rand_id:after {border-color:". esc_attr($bg_color) .";}
			#$rand_id span:before {border-color:transparent transparent ". esc_attr($bg_color) ." transparent;}
			#$rand_id span:after {border-color:". esc_attr($bg_color) ." transparent transparent transparent;}
			#$rand_id span:before,#$rand_id span:after {border-color:". esc_attr($bg_color) .";}
			#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}
			#$rand_id:active{background: ". esc_attr($bg_color_active) .";}");
			
			if($button_style == 'btn-6') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id span {background:". esc_attr($bg_color) .";}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-7') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before,#$rand_id:after,#$rand_id span:before,#$rand_id span:after {background:". esc_attr($bg_color) .";}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-8') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before,#$rand_id:after{background:". esc_attr($bg_color) .";}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-9' || $button_style == 'btn-10') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before,#$rand_id:after,#$rand_id span:before,#$rand_id span:after {background:". esc_attr($ozyWeddingPlannerHelper->hex2rgba($bg_color, '.25')) .";}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}#$rand_id:active{background: ". esc_attr($bg_color_active) .";}
");
			if($button_style == 'btn-11') 
				$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($fg_color) ."!important;}#$rand_id:before,#$rand_id:after {background:". esc_attr($bg_color) .";}#$rand_id:hover{color:". esc_attr($fg_color_hover) ."!important;}
");
			if($button_align == 'center') {
				$ozyLogiProHelper->set_footer_style("#w$rand_id {text-align:". esc_attr($button_align) .";width:100%;display:inline-block;}");
			}
			if($button_align == 'right') {
				$ozyLogiProHelper->set_footer_style("#w$rand_id{float:right;}");
			}

			return $output;
		}

		add_shortcode( 'ozy_vc_custom_button', 'ozy_vc_custom_button' );
		
		vc_map( array(
			"name" => esc_attr__("Custom Button", "frv-logipro-essentials"),
			"base" => "ozy_vc_custom_button",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => esc_attr__("Button Text", "frv-logipro-essentials"),
					"description" => esc_attr__("Title of your box.", "frv-logipro-essentials")
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Open Link In LightBox", "frv-logipro-essentials"),
					"param_name" => "fancybox",
					"value" => array(
						esc_attr__("Off", "frv-logipro-essentials") => "off",
						esc_attr__("On", "frv-logipro-essentials") => "on"
					),
					"admin_label" => true,
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Foregound Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"admin_label" => false,
					"value" => "#000000"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Foregound Color (Hover)", "frv-logipro-essentials"),
					"param_name" => "fg_color_hover",
					"admin_label" => false,
					"value" => "#ffffff"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Background Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => false,
					"value" => "#000000"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Background Color (Active)", "frv-logipro-essentials"),
					"param_name" => "bg_color_active",
					"admin_label" => false,
					"value" => "#2d2d2d"
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Button Style", "frv-logipro-essentials"),
					"param_name" => "button_style",
					"value" => array(
						esc_attr__("Swipe", "frv-logipro-essentials") => "btn-0",
						esc_attr__("Diagonal Swipe", "frv-logipro-essentials") => "btn-1",
						esc_attr__("Double Swipe", "frv-logipro-essentials") => "btn-1-2",
						esc_attr__("Diagonal Close", "frv-logipro-essentials") => "btn-2",
						esc_attr__("Zoning In", "frv-logipro-essentials") => "btn-33",
						esc_attr__("4 Corners", "frv-logipro-essentials") => "btn-4",
						esc_attr__("Slice", "frv-logipro-essentials") => "btn-5",
						esc_attr__("Position Aware", "frv-logipro-essentials") => "btn-6",
						esc_attr__("Alternate", "frv-logipro-essentials") => "btn-7",
						esc_attr__("Smoosh", "frv-logipro-essentials") => "btn-8",
						esc_attr__("Vertical Overlap", "frv-logipro-essentials") => "btn-9",
						esc_attr__("Horizontal Overlap", "frv-logipro-essentials") => "btn-10",
						esc_attr__("Collision", "frv-logipro-essentials") => "btn-11",
					),
					"admin_label" => true,
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Align", "frv-logipro-essentials"),
					"param_name" => "button_align",
					"value" => array(
						esc_attr__("Left", "frv-logipro-essentials") => "left",
						esc_attr__("Center", "frv-logipro-essentials") => "center",
						esc_attr__("Right", "frv-logipro-essentials") => "right"
					),
					"admin_label" => true,
				),$add_css_animation
		   )
		) );		
	}	
	
	/**
	* Service Box 2
	*/
	if (!function_exists('ozy_vc_service_box_two')) {
		function ozy_vc_service_box_two( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_service_box_two', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'excerpt' => '',
				'link' => '',
				'fg_color' => '',
				'bg_image' => '',
				'box_size' => 'regular',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$rand_id = 'osrvbx-' . rand(10, 100000); $style = '';
			
			$bg_image = wp_get_attachment_image_src($bg_image, 'full');
			if(isset($bg_image[0])) {
				$style = 'background-image:url('. esc_url($bg_image[0]) .');';
			}			
			$output = '<div id="'. esc_attr($rand_id) .'" class="ozy-service_box2 box-size-' . esc_attr($box_size) .' '. $css_animation .'">' . PHP_EOL;
			$output.= '<div style="'. $style .'"></div>';

			$link = vc_build_link($link); $href = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$href = ' href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']).'"':'').' ';
			}
			$output.= '<div class="caption">';
			$output.= '<a '. $href .'>';
			$output.= '<h2>'. esc_html($title) .'</h2>';
			$output.= '<p>'. esc_html($excerpt) .'</p>';
			$output.= '</a>';
			if($href) $output.= '<a '. $href .'><img src="' . plugins_url( 'frv-logipro-essentials/images/right-arrow.svg', dirname(__FILE__) ) . '" class="svg"/></a>';		
			$output.= '</div>' . PHP_EOL;
			
			$output.= '</div>' . PHP_EOL;
						
			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;			
			$ozyLogiProHelper->set_footer_style("#$rand_id h2, #$rand_id p {color:". esc_attr($fg_color) ."!important}");
			$ozyLogiProHelper->set_footer_style("#$rand_id:before{border-color:". esc_attr($fg_color) ."!important}");
			$ozyLogiProHelper->set_footer_style("#$rand_id svg g path {fill:". esc_attr($fg_color) ." !important;}");
			
			return $output;
		}

		add_shortcode( 'ozy_vc_service_box_two', 'ozy_vc_service_box_two' );
		
		vc_map( array(
			"name" => esc_attr__("Service Box 2", "frv-logipro-essentials"),
			"base" => "ozy_vc_service_box_two",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title of your box.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter a short text to display under your title.", "frv-logipro-essentials")
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Foregound Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Background Image", "frv-logipro-essentials"),
					"param_name" => "bg_image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select image for your team member.", "frv-logipro-essentials")					
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Size", "frv-logipro-essentials"),
					"param_name" => "box_size",
					"value" => array("regular", "tall"),
					"admin_label" => true,
				),$add_css_animation
		   )
		) );		
	}	
	
	/*
	* Hover Card
	*/
	if (!function_exists('ozy_vc_hover_card')) {
		function ozy_vc_hover_card( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_hover_card', $atts);
			extract(shortcode_atts(array(
				'icon' => '',
				'title' => '',
				'excerpt' => '',
				'link' => '',
				'size' => '16.66'
			), $atts));
					
			$link = vc_build_link($link);
			
			$element_id = 'ohwc-' . rand(1, 100000);			
			
			$output = '<div id="'. $element_id .'" class="ozy-hover-card" style="width:'. esc_attr($size) .'%">';
			if(is_array($link) && isset($link['url'])) {
				$output .= '<a href="'. esc_url($link['url']) .'" class="f shared-border-color">';
			}else{
				$output .= '<div class="f shared-border-color">';				
			}
			$output .= '		<div>';
			if($icon) $output .= '<i class="oic '. esc_attr($icon) .'">&nbsp;</i>';
			if($title) $output .= '<h3>'. nl2br($title) .'</h3>';
			if($excerpt) $output .= '<p>'. $excerpt .'</p>';

			$output .= '		</div>';
			if(is_array($link) && isset($link['url'])) {$output .= '</a>';}else{$output .= '</div>';}			

			if(is_array($link) && isset($link['url'])) {
				$output .= '<a href="'. esc_url($link['url']) .'" class="s">';
			}else{
				$output .= '<div class="s">';				
			}			
			$output .= '		<div>';
			if($icon) $output .= '<i class="oic '. esc_attr($icon) .'">&nbsp;</i>';
			if($title) $output .= '<h3>'. nl2br($title) .'</h3>';
			$output .= '		</div>';
			if(is_array($link) && isset($link['url'])) {$output .= '</a>';}else{$output .= '</div>';}			

			$output .= '</div>';
						
			return $output;
		}
		
		add_shortcode( 'ozy_vc_hover_card', 'ozy_vc_hover_card' );
		
		vc_map( array(
			"name" => esc_attr("Hover Card", "frv-logipro-essentials"),
			"base" => "ozy_vc_hover_card",
			"content_element" => true,
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "select_an_icon",
					"heading" => esc_attr("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Size", "frv-logipro-essentials"),
					"param_name" => "size",
					"value" => 
						array(
							esc_attr__("6 in a column", "frv-logipro-essentials") => "16.66", 
							esc_attr__("5 in a column", "frv-logipro-essentials") => "20",
							esc_attr__("4 in a column", "frv-logipro-essentials") => "25",
							esc_attr__("3 in a column", "frv-logipro-essentials") => "33.32",
							esc_attr__("2 in a column", "frv-logipro-essentials") => "50",
							esc_attr__("1 in a column", "frv-logipro-essentials") => "100"
						)
					,"admin_label" => true,
				)				
		   )
		) );	
	}
	
	/**
	* YouTube Embed
	*/
	if (!function_exists('ozy_vc_youtube_embed')) {
		function ozy_vc_youtube_embed( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_youtube_embed', $atts);
			extract(shortcode_atts(array(
				'video_size' => '169',
				'video_id' => '',
				'poster_image' => '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$rand_id = 'oyoutubeembed-' . rand(10, 100000); $style = '';

			$poster_image = wp_get_attachment_image_src($poster_image, 'full');
			if(isset($poster_image[0])) {
				$style = 'background-image:url('. esc_url($poster_image[0]) .');';
			}			
			
			$output = '<div id="'. esc_attr($rand_id) .'"><div class="oytb-videoWrapper oytb-videoWrapper'. esc_attr($video_size) .' oytb-js-videoWrapper '. $css_animation .'">
    <iframe class="oytb-videoIframe oytb-js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/'. esc_attr($video_id) .'?autoplay=1& modestbranding=1&rel=0&hl=sv"></iframe>
    <button class="oytb-videoPoster oytb-js-videoPoster" style="'. $style .'"><img src="' . plugins_url( 'frv-logipro-essentials/images/play_button.svg', dirname(__FILE__) ) . '#play" class="svg" alt=""/></button>
  </div><button class="oytb-video-StopButton generic-button" title="'. esc_attr('close video', 'frv-logipro-essentials') .'">X</button></div>';
  
			return $output;
		}

		add_shortcode( 'ozy_vc_youtube_embed', 'ozy_vc_youtube_embed' );
		
		vc_map( array(
			"name" => esc_attr__("YouTube Embed", "frv-logipro-essentials"),
			"base" => "ozy_vc_youtube_embed",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Video Size", "frv-logipro-essentials"),
					"param_name" => "video_size",
					"value" => array(esc_attr__("16:9", "frv-logipro-essentials") => "169", esc_attr__("4:3", "frv-logipro-essentials") => "43"),
					"admin_label" => true,
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Embed Video ID", "frv-logipro-essentials"),
					"param_name" => "video_id",
					"admin_label" => true,
					"value" => "",
					"description" => wp_kses(__('YouTube Embed Video ID. eq. https://www.youtube.com/watch?v=<strong style="color:red">3sey-GFl1SQ</strong>, the bold - red part is your video ID.', 'frv-logipro-essentials'), array('strong' => array('style' => array()),))
				),array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Poster Image", "frv-logipro-essentials"),
					"param_name" => "poster_image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Set a poster image for your video player.", "frv-logipro-essentials")
				),$add_css_animation
		   )
		) );		
	}	
	
	/**
	* Request A Rate Action Box
	*/
	if (!function_exists('ozy_vc_request_a_rate_action_box')) {
		function ozy_vc_request_a_rate_action_box( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_request_a_rate_action_box', $atts);
			extract(shortcode_atts(array(
				'title' 		=> '',
				'description' 		=> '',				
				'bg_color' 		=> '#352c66',
				'fg_color'		=> '#ffffff',
				'link'			=> '',
				'button_caption'=> '',
				'css_animation' => '',
				'css'			=> ''
			), $atts));

			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$rand_id = 'ozyrarab' . rand(10, 10000);
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), 'ozy_vc_request_a_rate_action_box', $atts );
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$link = vc_build_link($link); $discover_link = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$discover_link = '<a href="'. esc_url($link['url']) .'" '. ((isset($link['target']) && $link['target']) ? ' target="'. esc_attr($link['target']) . '"' : '') .' class="generic-button">'. (isset($link['title']) ? esc_attr($link['title']) : esc_attr('DISCOVER', 'frv-logipro-essentials')) .'</a>';
			}else{
				$discover_link = '<a href="#request-a-rate" class="request-a-rate-button">'. esc_html($button_caption) .'</a>';
			}			
			
			$output = '<div id="'. esc_attr($rand_id) .'" class="ozy-request-a-rate-action-box '. $css_animation . ' ' . esc_attr($css_class) .'">';
			$output.= '<div>';
			$output.= '<i class="oic-outlined-iconset-80"></i>';
			$output.= '<h4>'. esc_attr($title) .'</h4>';
			$output.= '<p>'. esc_html($description) . '</p>';
			$output.= '</div><div>';
			$output.= $discover_link;
			$output.= '</div>';
			$output.= '</div>';

			$ozyLogiProHelper->set_footer_style("#$rand_id{background-color:". esc_attr($bg_color) .";}#$rand_id i,#$rand_id p,#$rand_id h4,#$rand_id a{color:". esc_attr($fg_color) ."!important;}#$rand_id a{border-color:". esc_attr($fg_color) .";}");
			
			return $output;
		}
		
		add_shortcode('ozy_vc_request_a_rate_action_box', 'ozy_vc_request_a_rate_action_box');
		
		vc_map( array(
			"name" => esc_attr("Request a Rate Action", "frv-logipro-essentials"),
			"base" => "ozy_vc_request_a_rate_action_box",
			"icon" => "",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => esc_attr('REQUEST A QUOTE', 'frv-logipro-essentials')
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Description", "frv-logipro-essentials"),
					"param_name" => "description",
					"admin_label" => true,
					"value" => esc_attr('LogiProis an international freight forwarding company, established over 20 Years.', 'frv-logipro-essentials')
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Button Caption", "frv-logipro-essentials"),
					"param_name" => "button_caption",
					"admin_label" => true,
					"value" => esc_attr('SEND REQUEST', 'frv-logipro-essentials')
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Custom Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"description" => esc_attr__("Leave this field empty to use floating form automatically.", "frv-logipro-essentials"),
					"value" => ""
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Foreground Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"value" => "#ffffff",
					"admin_label" => false
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Background Color", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"value" => "#352c66",
					"admin_label" => false
				),$add_css_animation
		        ,array(
					'type' => 'css_editor',
					'heading' => esc_attr( 'Css', 'frv-logipro-essentials' ),
					'param_name' => 'css',
					'group' => esc_attr( 'Design options', 'frv-logipro-essentials' ),
				)
		   )
		) );	
	}	
	
	/**
	* Gradient Call To Action
	*/
	if (!function_exists('ozy_vc_gratiend_call_to_action')) {
		function ozy_vc_gratiend_call_to_action( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_gratiend_call_to_action', $atts);
			extract(shortcode_atts(array(
				'caption'		=> '',
				'title' 		=> '',
				'min_height'	=> '',
				'color1' 		=> '#0076ff',
				'color2' 		=> '#00ff80',
				'fg_color'		=> '#ffffff',
				'image'			=> '',
				'link'			=> '',
				'css_animation' => ''
			), $atts));

			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$rand_id = 'ozygctab' . rand(10, 10000);
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$link = vc_build_link($link); $discover_link = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$discover_link = '<a href="'. esc_url($link['url']) .'" '. ((isset($link['target']) && $link['target']) ? ' target="'. esc_attr($link['target']) . '"' : '') .' class="generic-button">'. (isset($link['title']) ? esc_attr($link['title']) : esc_attr('DISCOVER', 'frv-logipro-essentials')) .'</a>';
			}			

			$bg_image = wp_get_attachment_image_src($image, 'full'); $tmp_image = '';
			if(isset($bg_image[0])) {$tmp_image = '<img src="'. esc_url($bg_image[0]) .'" alt=""/>'; $bg_image = ' style="'. ($min_height ? 'min-height:' . $min_height . ';' : '') .'background-image:url('. esc_url($bg_image[0]) .')" ';}else{$bg_image = '';}
			
			
			$output = '<div id="'. esc_attr($rand_id) .'" class="ozy-gradient-call-to-action-box wpb_content_element '. $css_animation .'" '. $bg_image .'>';
			$output.= $tmp_image;
			$output.= '<div>';
			$output.= '<span>'. esc_html($caption) .'</span>';
			$output.= '<h4>'. esc_html($title) .'</h4>';
			$output.= $discover_link;
			$output.= '</div>';
			$output.= '</div>';		

			$ozyLogiProHelper->set_footer_style("#$rand_id>div>h4{color:". esc_attr($fg_color) ."}#$rand_id>div{color:". esc_attr($fg_color) .";background: ". esc_attr($color1) .";background: -moz-linear-gradient(top, ". esc_attr($color1) ." 0%, ". esc_attr($color2) ." 100%);background: -webkit-linear-gradient(top, ". esc_attr($color1) ." 0%,". esc_attr($color2) ." 100%);background: linear-gradient(to bottom, ". esc_attr($color1) ." 0%,". esc_attr($color2) ." 100%);}");
			
			return $output;
		}
		
		add_shortcode('ozy_vc_gratiend_call_to_action', 'ozy_vc_gratiend_call_to_action');
		
		vc_map( array(
			"name" => esc_attr("Gradient Call To Action", "frv-logipro-essentials"),
			"base" => "ozy_vc_gratiend_call_to_action",
			"icon" => "",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Minimum Height", "frv-logipro-essentials"),
					"param_name" => "min_height",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Usage Example: '700px'. Use this option whenever you place two or more elements in same row..", "frv-logipro-essentials")
				),array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item to use as background.", "frv-logipro-essentials")
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Forecolor", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"value" => "#ffffff",
					"admin_label" => false
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Background Color Start", "frv-logipro-essentials"),
					"param_name" => "color1",
					"value" => "#0076ff",
					"admin_label" => false
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Background Color End", "frv-logipro-essentials"),
					"param_name" => "color2",
					"value" => "#00ff80",
					"admin_label" => false
				),$add_css_animation
		   )
		) );	
	}		

	/**
	* Counter
	*/
	if (!function_exists('ozy_vc_count_to')) {
		function ozy_vc_count_to( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_count_to', $atts);
			extract(shortcode_atts(array(
				'caption'		=> '',
				'color' 		=> '#352c66',
				'caption_color' => '#ffffff',
				'from'			=> 0,
				'to'			=> 100,
				'subtitle' 		=> '',
				'subtitle_pos'	=> 'bottom',
				'image'			=> '',
				'sign'			=> '',
				'signpos'		=> 'right',
				'css_animation' => '',
				'css' 			=> ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), 'ozy_vc_count_to', $atts );						

			$counter_image = wp_get_attachment_image_src($image, 'full');
			
			if(isset($counter_image[0])) {
				$counter_image = '<img src="'. esc_url($counter_image[0]) .'" alt=""/>';
			}else{
				$counter_image = '';
			}			
			
			return '<div class="ozy-counter '. esc_attr($css_class) .' pos-'. esc_attr($subtitle_pos) .' wpb_content_element '. $css_animation .'" style="color:'. esc_attr($color) .'"><span class="caption" style="background-color:'. esc_attr($color) .';color:'. esc_attr($caption_color) .'">'. esc_attr($caption) .'</span>'. $counter_image .'<div class="timer" data-sign="'. esc_attr($sign) .'" data-signpos="'. esc_attr($signpos) .'" data-from="'. esc_attr($from) .'" data-to="'. esc_attr($to) .'">'. esc_attr($from) .'</div>'. (esc_attr($subtitle) ? '<span class="sub-title">'. esc_attr($subtitle) .'</span>' : '') .'</div>';
		}
		
		add_shortcode('ozy_vc_count_to', 'ozy_vc_count_to');
		
		vc_map( array(
			"name" => esc_attr("Count To", "frv-logipro-essentials"),
			"base" => "ozy_vc_count_to",
			"icon" => "",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr("Counter caption.", "frv-logipro-essentials")
				),array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("From", "frv-logipro-essentials"),
					"param_name" => "from",
					"admin_label" => true,
					"value" => "0",
					"description" => esc_attr("Counter start from", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("To", "frv-logipro-essentials"),
					"param_name" => "to",
					"admin_label" => true,
					"value" => "100",
					"description" => esc_attr("Counter count to", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Sub Title", "frv-logipro-essentials"),
					"param_name" => "subtitle",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr("Counter title.", "frv-logipro-essentials")
				),array(
					"type" => "dropdown",
					"heading" => esc_attr("Sub Title Position", "frv-logipro-essentials"),
					"param_name" => "subtitle_pos",
					"value" => array('bottom', 'right', 'left'),
					"admin_label" => false,
					"description" => esc_attr("Select position of your Sub Title text.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Sign", "frv-logipro-essentials"),
					"param_name" => "sign",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr("Enter a sign like % or whatever you like", "frv-logipro-essentials")
				),array(
					"type" => "dropdown",
					"heading" => esc_attr("Sign Position", "frv-logipro-essentials"),
					"param_name" => "signpos",
					"value" => array('right', 'left'),
					"admin_label" => false,
					"description" => esc_attr("Select position of your sign.", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Forecolor / Caption Backgroun", "frv-logipro-essentials"),
					"param_name" => "color",
					"value" => "#352c66",
					"admin_label" => false
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr("Caption Forecolor", "frv-logipro-essentials"),
					"param_name" => "caption_color",
					"value" => "#ffffff",
					"admin_label" => false
				),$add_css_animation,
				array(
					'type' => 'css_editor',
					'heading' => esc_attr( 'Css', 'frv-logipro-essentials' ),
					'param_name' => 'css',
					'group' => esc_attr( 'Design options', 'frv-logipro-essentials' ),
				)				
		   )
		) );	
	}	
	
	/**
	* Multi Carousel
	*/
	if (!function_exists('ozy_vc_multi_carousel')) {
		function ozy_vc_multi_carousel( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_multi_carousel', $atts);
			extract(shortcode_atts(array(
				'autoplay'		=> 'true',
				'groupcells'	=> 'false',
				'navigation_dots'=> 'true',
				'navigation_arrows'=> 'false',
				'images_loaded' => 'true',
				'percent_position' => 'true',
				'show_see_all' => 'true',
				'contain'	=> 'true',
				'cell_align' => 'left',
				'item_count' => '4',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
					
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			wp_enqueue_script('wedding-planner-isotope');
			wp_enqueue_script('wedding-planner-isotope-packery');

			$GLOBALS['OZY_CAROUSEL_ITEM_TYPE'] = 'multi';
			
			$output = '<div class="flickity-carousel-wrapper wpb_content_element"><div class="carousel flickity-carousel item-count-'. esc_attr($item_count) .'" data-flickity=\'{ "imagesLoaded": '. esc_attr($images_loaded) .', "percentPosition": '. esc_attr($percent_position) .', "pageDots": '. esc_attr($navigation_dots) .', "prevNextButtons": '. esc_attr($navigation_arrows) .', "groupCells": '. esc_attr($groupcells) .', "contain" : '. esc_attr($contain) .', "cellAlign": "'. esc_attr($cell_align) .'", "adaptiveHeight": false, "setGallerySize": true, "autoPlay": '. esc_attr($autoplay) .' }\'>';
			$output.= do_shortcode( $content );			
			$output.= '</div>';
			if($show_see_all == 'true') $output.= '<a href="#see-all" class="flickity-see-all" data-label="'. esc_html('SLIDER', 'frv-logipro-essentials') .'">' . esc_html('SEE ALL', 'frv-logipro-essentials') . '</a>';
			$output.= '</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_multi_carousel', 'ozy_vc_multi_carousel');
		
		vc_map( array(
			"name" => esc_attr("Multi Carousel", "frv-logipro-essentials"),
			"base" => "ozy_vc_multi_carousel",
			"as_parent" => array('only' => 'ozy_vc_carousel_item,ozy_vc_carousel_variable_item'),
			"content_element" => true,
			"show_settings_on_create" => true,
			"is_container" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(			
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Auto Play", "frv-logipro-essentials"),
					"param_name" => "autoplay",
					"value" => array("true", "false", "1000", "2000", "3000", "4000", "5000", "6000", "7000", "8000", "9000", "10000"),
					"admin_label" => true,
					"description" => esc_attr("Change to any available integrer for example 3000 to play every 3 seconds. If you set it true default speed will be 5 seconds.", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Cell Group", "frv-logipro-essentials"),
					"param_name" => "groupcells",
					"value" => array("false", "true", "2", "3", "4", "5", "6"),
					"admin_label" => true,
					"description" => esc_attr("This variable allows you to set the maximum amount of items displayed at a time with the widest browser width.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Images Loaded", "frv-logipro-essentials"),
					"param_name" => "imagesLoaded",
					"value" => array("true", "false"),
					"description" => esc_attr("Set it true if you want to use Variant Sized Item.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Percent Position", "frv-logipro-essentials"),
					"param_name" => "percent_position",
					"value" => array("true", "false"),
					"description" => esc_attr("Set it false if you want to use Variant Sized Item.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Contain", "frv-logipro-essentials"),
					"param_name" => "contain",
					"value" => array("true", "false"),
					"description" => esc_attr("Contains cells to carousel element to prevent excess scroll at beginning or end.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Cell Align", "frv-logipro-essentials"),
					"param_name" => "cell_align",
					"value" => array("left", "center", "right"),
					"description" => esc_attr("Align cells within the carousel element.", "frv-logipro-essentials")
				),				
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Show See All Button", "frv-logipro-essentials"),
					"param_name" => "show_see_all",
					"value" => array("true", "false")
				),				
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Visible Item Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => array("4", "2", "3"),
					"admin_label" => true,
					"description" => esc_attr("Choose how many items will be visible on the carousel at once.", "frv-logipro-essentials")
				),				
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Show Dots", "frv-logipro-essentials"),
					"param_name" => "navigation_dots",
					"value" => array("true", "false"),
					"description" => esc_attr("Show navigation dots on this carousel.", "frv-logipro-essentials")
				),				
				array(
					"type" => 'dropdown',
					"heading" => esc_attr("Show Arrows", "frv-logipro-essentials"),
					"param_name" => "navigation_arrows",
					"value" => array("false", "true"),
					"description" => esc_attr("Show navigation arrows on this carousel.", "frv-logipro-essentials")
				),
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		   ,"js_view" => 'VcColumnView'
		) );
		
		class WPBakeryShortCode_Ozy_Vc_Multi_Carousel extends WPBakeryShortCodesContainer{}		
	}	

	/**
	* Testimonial Carousel
	*/
	if (!function_exists('ozy_vc_testimonial_carousel')) {
		function ozy_vc_testimonial_carousel( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_testimonial_carousel', $atts);
			extract(shortcode_atts(array(
				'autoplay'		=> 'true',
				'groupcells'	=> 'false',
				'navigation_dots'=> 'true',
				'navigation_arrows'=> 'false',
				'item_count' => '1',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
					
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			$output = '<div class="wpb_content_element carouselOfImages testimonial-carousel '. esc_attr($extra_css) .' item-count-'. esc_attr($item_count) .'" data-pagedots="'. esc_attr($navigation_dots) .'" data-prevnextbuttons="'. esc_attr($navigation_arrows) .'" data-groupcells="'. esc_attr($groupcells) .'" data-autoplay="'. esc_attr($autoplay) .'">';
			$output.= do_shortcode( $content );			
			$output.= '</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_testimonial_carousel', 'ozy_vc_testimonial_carousel');
		
		vc_map( array(
			"name" => esc_attr("Testimonial Carousel", "frv-logipro-essentials"),
			"base" => "ozy_vc_testimonial_carousel",
			"as_parent" => array('only' => 'ozy_vc_testimonial_carousel_item'),
			"content_element" => true,
			"show_settings_on_create" => true,
			"is_container" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(			
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Auto Play", "frv-logipro-essentials"),
					"param_name" => "autoplay",
					"value" => array("true", "false", "1000", "2000", "3000", "4000", "5000", "6000", "7000", "8000", "9000", "10000"),
					"admin_label" => true,
					"description" => esc_attr("Change to any available integrer for example 3000 to play every 3 seconds. If you set it true default speed will be 5 seconds.", "frv-logipro-essentials")
				),		
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Dots", "frv-logipro-essentials"),
					"param_name" => "navigation_dots",
					"value" => array("true", "false"),
					"description" => esc_attr__("Show navigation dots on this carousel.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Arrows", "frv-logipro-essentials"),
					"param_name" => "navigation_arrows",
					"value" => array("false", "true"),
					"description" => esc_attr__("Show navigation arrows on this carousel.", "frv-logipro-essentials")
				),
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		   ,"js_view" => 'VcColumnView'
		) );
		
		class WPBakeryShortCode_Ozy_Vc_Testimonial_Carousel extends WPBakeryShortCodesContainer{}		
	}
	
	/**
	* Testimonial Carousel Item
	*/
	if (!function_exists('ozy_vc_testimonial_carousel_item')) {
		function ozy_vc_testimonial_carousel_item( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_testimonial_carousel_item', $atts);
			extract(shortcode_atts(array(
				'title' 		=> '',
				'sub_title'		=> '',
				'image'			=> '',
				'excerpt'	 	=> '',
				'link'			=> '',
				'css_animation' => ''
			), $atts));
			
			$testimonial_image = wp_get_attachment_image_src($image, 'full');
			
			if(!isset($testimonial_image[0])) return '';			
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$link = vc_build_link($link); $discover_link = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$discover_link = '<a href="'. esc_url($link['url']) .'" '. ((isset($link['target']) && $link['target']) ? ' target="'. esc_attr($link['target']) . '"' : '') .'>'. (isset($link['title']) ? esc_attr($link['title']) : esc_attr('DISCOVER', 'frv-logipro-essentials')) .'</a>';
			}			
			
			$output = PHP_EOL . '<div class="carouselImage '. $css_animation . '">' . PHP_EOL;
			$output .= '<img src="'. esc_url($testimonial_image[0]) .'" alt="" />';
			$output .= '<span class="testimonial-title">'. esc_attr($title) .'</span>' . PHP_EOL;
			$output .= '<span class="testimonial-sub-title content-color-alternate2">'. esc_attr($sub_title) .'</span>' . PHP_EOL;
			$output .= '<p class="testimonial-quote">'. esc_attr($excerpt) .'</p>' . PHP_EOL;
			$output .= $discover_link . PHP_EOL;
			$output .= '</div>' . PHP_EOL;
			
			return $output;
		}

		add_shortcode( 'ozy_vc_testimonial_carousel_item', 'ozy_vc_testimonial_carousel_item' );
		
		vc_map( array(
			"name" => esc_attr__("Testimonial Carousel Item", "frv-logipro-essentials"),
			"base" => "ozy_vc_testimonial_carousel_item",
			"icon" => "icon-wpb-ozy-el",
			"as_child" => array('only' => 'ozy_vc_testimonial_carousel'),
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Adam Smith, CEO", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title", "frv-logipro-essentials"),
					"param_name" => "sub_title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Seneca Mineral Company", "frv-logipro-essentials")
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => esc_attr('Thanks to LogiPro for helping us deliver on our promise of prompt deliver to our customers! These 5 gallon pails of Alpine Ice Melt are headed to Iowa today!', 'frv-logipro-essentials')
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Testimonial_Carousel_Item extends WPBakeryShortCode{}	
	}	
	
	/**
	* Regular Carousel
	*/
	if (!function_exists('ozy_vc_regular_carousel')) {
		function ozy_vc_regular_carousel( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_regular_carousel', $atts);
			extract(shortcode_atts(array(
				'autoplay'		=> 'true',
				'groupcells'	=> 'false',
				'navigation_dots'=> 'true',
				'navigation_arrows'=> 'false',
				'item_count' => '1',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
					
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			wp_enqueue_script('logipro-isotope');
			wp_enqueue_script('logipro-packery');
			
			$GLOBALS['OZY_CAROUSEL_ITEM_TYPE'] = 'single';

			$output = '<div class="carousel single flickity-carousel '. esc_attr($extra_css) .' item-count-'. esc_attr($item_count) .'" data-flickity=\'{ "pageDots": '. esc_attr($navigation_dots) .', "prevNextButtons": '. esc_attr($navigation_arrows) .', "groupCells": '. esc_attr($groupcells) .', "contain" : true, "cellAlign": "left", "adaptiveHeight": false, "imagesLoaded": true, "setGallerySize": true, "autoPlay": '. esc_attr($autoplay) .' }\'>';
			
			$output.= do_shortcode( $content );			
			$output.= '</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_regular_carousel', 'ozy_vc_regular_carousel');
		
		vc_map( array(
			"name" => esc_attr("Regular Carousel", "frv-logipro-essentials"),
			"base" => "ozy_vc_regular_carousel",
			"as_parent" => array('only' => 'ozy_vc_carousel_item,ozy_vc_testimonial_carousel_item_simple'),
			"content_element" => true,
			"show_settings_on_create" => true,
			"is_container" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(			
				array(
					"type" => "dropdown",
					"heading" => esc_attr("Auto Play", "frv-logipro-essentials"),
					"param_name" => "autoplay",
					"value" => array("true", "false", "1000", "2000", "3000", "4000", "5000", "6000", "7000", "8000", "9000", "10000"),
					"admin_label" => true,
					"description" => esc_attr("Change to any available integrer for example 3000 to play every 3 seconds. If you set it true default speed will be 5 seconds.", "frv-logipro-essentials")
				),		
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Dots", "frv-logipro-essentials"),
					"param_name" => "navigation_dots",
					"value" => array("true", "false"),
					"description" => esc_attr__("Show navigation dots on this carousel.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Arrows", "frv-logipro-essentials"),
					"param_name" => "navigation_arrows",
					"value" => array("false", "true"),
					"description" => esc_attr__("Show navigation arrows on this carousel.", "frv-logipro-essentials")
				),
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		   ,"js_view" => 'VcColumnView'
		) );
		
		class WPBakeryShortCode_Ozy_Vc_Regular_Carousel extends WPBakeryShortCodesContainer{}		
	}
	
	/**
	* Testimonial Carousel Item Simple
	*/
	if (!function_exists('ozy_vc_testimonial_carousel_item_simple')) {
		function ozy_vc_testimonial_carousel_item_simple( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_testimonial_carousel_item_simple', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'excerpt' => '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$output = PHP_EOL . '<div class="ozy-caroseul_item testimonial-simple carousel-cell '. $css_animation . '">' . PHP_EOL;			
			$output .= '<div class="testimonial-simple">' . PHP_EOL;
			$output .= '<p class="testimonial-simple-quote heading-font-family">'. esc_attr($excerpt) .'</p>' . PHP_EOL;
			$output .= '<span class="testimonial-simple-author heading-font-family">'. esc_attr($title) .'</span>' . PHP_EOL;
			$output .= '</div>' . PHP_EOL;
			$output .= '</div>' . PHP_EOL;
			
			return $output;
		}

		add_shortcode( 'ozy_vc_testimonial_carousel_item_simple', 'ozy_vc_testimonial_carousel_item_simple' );
		
		vc_map( array(
			"name" => esc_attr__("Testimonial Carousel Item Simple", "frv-logipro-essentials"),
			"base" => "ozy_vc_testimonial_carousel_item_simple",
			"icon" => "icon-wpb-ozy-el",
			"as_child" => array('only' => 'ozy_vc_regular_carousel, ozy_vc_multi_carousel'),
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title for your carousel item.", "frv-logipro-essentials")
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => ""
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Testimonial_Carousel_Item_Simple extends WPBakeryShortCode{}	
	}		
	
	/**
	* Carousel Item
	*/
	if (!function_exists('ozy_vc_carousel_item')) {
		function ozy_vc_carousel_item( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_carousel_item', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'title' => '',
				'sub_title' => '',
				'link' => '',
				'fg_color' => '#ffffff',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$member_image = wp_get_attachment_image_src($image, 'full'); $img_opacity = '' ;
			
			if(!isset($member_image[0])) return '';
			
			if($GLOBALS['OZY_CAROUSEL_ITEM_TYPE'] == 'single') {
				$output = PHP_EOL . '<div class="ozy-caroseul_item carousel-cell '. $css_animation . '">' . PHP_EOL;
			}else{
				$output = PHP_EOL . '<div class="ozy-caroseul_item carousel-cell '. $css_animation . '">' . PHP_EOL;
			}

			$link = vc_build_link($link); $discover_link = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$discover_link = '<a href="'. esc_url($link['url']) .'" '. ((isset($link['target']) && $link['target']) ? ' target="'. esc_attr($link['target']) . '"' : '') .' class="generic-button">'. (isset($link['title']) ? esc_attr($link['title']) : esc_attr('DISCOVER', 'frv-logipro-essentials')) .'</a>';
			}
			
			$output.= '<img src="'. $member_image[0] .'" alt="'. esc_attr($title) .'">';

			$output.= esc_attr($title) ? '<div class="title-field" style="color:'. esc_attr($fg_color) .'"><span>'. esc_html($sub_title) .'</span><h2 style="color:'. esc_attr($fg_color) .'" class="'. $GLOBALS['OZY_CAROUSEL_ITEM_TYPE'] .'">'. esc_attr($title) .'</h2>'. $discover_link .'</div>' : '';

			$output.= '</div>';
			
			return $output;
		}

		add_shortcode( 'ozy_vc_carousel_item', 'ozy_vc_carousel_item' );
		
		vc_map( array(
			"name" => esc_attr__("Carousel Item", "frv-logipro-essentials"),
			"base" => "ozy_vc_carousel_item",
			"icon" => "icon-wpb-ozy-el",
			"as_child" => array('only' => 'ozy_vc_regular_carousel, ozy_vc_multi_carousel'),
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title for your carousel item.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title", "frv-logipro-essentials"),
					"param_name" => "sub_title",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Foreground Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Carousel_Item extends WPBakeryShortCode{}	
	}
	
	/**
	* Variable Size Item
	*/
	if (!function_exists('ozy_vc_carousel_variable_item')) {
		function ozy_vc_carousel_variable_item( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_carousel_variable_item', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'title' => '',
				'link' => '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$member_image = wp_get_attachment_image_src($image, 'full'); $img_opacity = '' ;
			
			if(!isset($member_image[0])) return '';
			
			$output = PHP_EOL . '<div class="ozy-caroseul_item carousel-cell variable '. $css_animation . '">' . PHP_EOL;

			$output.= '<a';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$output.= ' href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']) .'"' : '');
			}
			
			$output.= '><img src="'. $member_image[0] .'" alt="'. esc_attr($title) .'">';

			$output.= esc_attr($title) ? '<strong class="'. $GLOBALS['OZY_CAROUSEL_ITEM_TYPE'] .' single">'. esc_attr($title) .'</strong>' : '';

			$output.= '</a>';
			$output.= '</div>';
			
			return $output;
		}

		add_shortcode( 'ozy_vc_carousel_variable_item', 'ozy_vc_carousel_variable_item' );
		
		vc_map( array(
			"name" => esc_attr__("Variable Size Item", "frv-logipro-essentials"),
			"base" => "ozy_vc_carousel_variable_item",
			"icon" => "icon-wpb-ozy-el",
			"as_child" => array('only' => 'ozy_vc_multi_carousel'),
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title for your carousel item.", "frv-logipro-essentials")
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Carousel_Variable_Item extends WPBakeryShortCode{}	
	}

	/**
	* Custom List
	*/
	if (!function_exists('ozy_vc_custom_list')) {
		function ozy_vc_custom_list( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_custom_list', $atts);
			extract(shortcode_atts(array(
				'icon' => '',
				'fg_color' => '',
				'css_animation' => '',
				'css' => ''
			), $atts));
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), 'ozy_vc_custom_list', $atts );
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$rand_id = 'ocl-' . rand(10, 100000);
			
			$output = PHP_EOL . '<div id="'. esc_attr($rand_id) .'" class="ozy-custom-list wpb_content_element '. $css_animation .' ' . esc_attr($css_class) .'">' . PHP_EOL;
			$output_content = $content;
			$output.= str_replace('<li>', '<li><i class="'. esc_attr($icon) .'"></i><span>', str_replace('</li>', '</span></li>', $output_content));
			$output.= '</div>';
			
			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$ozyLogiProHelper->set_footer_style("#$rand_id li>i{color:". esc_attr($fg_color) ."}");
			
			return $output;
		}

		add_shortcode( 'ozy_vc_custom_list', 'ozy_vc_custom_list' );
		
		vc_map( array(
			"name" => esc_attr__("Custom List", "frv-logipro-essentials"),
			"base" => "ozy_vc_custom_list",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "select_an_icon",
					"heading" => esc_attr__("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false,
					"description" => esc_attr__("Select an icon.", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Icon Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"admin_label" => false,
					"value" => "#000000"
				),array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => esc_attr__("Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => true,
					"value" => "<ul><li>Item #1</li><li>Item #2</li><li>Item #3</li></ul>",
				),$add_css_animation
				,array(
					'type' => 'css_editor',
					'heading' => esc_attr( 'Css', 'frv-logipro-essentials' ),
					'param_name' => 'css',
					'group' => esc_attr( 'Design options', 'frv-logipro-essentials' ),
				)
		   )
		) );	
	}
	
	/**
	* Image With Featured Content
	*/
	if (!function_exists('ozy_vc_image_with_featured_content')) {
		function ozy_vc_image_with_featured_content( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_image_with_featured_content', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'link' => '',
				'css_animation' => '',
				'css' => ''
			), $atts));
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), 'ozy_vc_image_with_featured_content', $atts );
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			wp_enqueue_style('logipro-image-with-featured-content');			

			$member_image = wp_get_attachment_image_src($image, 'full');
			
			if(!isset($member_image[0])) return '';
			
			$output = PHP_EOL . '<div class="ozy-image_with_featured_content '. $css_animation . ' ' . esc_attr($css_class) .'">' . PHP_EOL;

			$output .= '<div style="background-image:url('. esc_url($member_image[0]) .')"></div>';
			$output .= '<div>';

			$output.= $content;

			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && isset($link['title']) && $link['url'] && $link['title']) {
				$output.= '<a href="'. esc_url($link['url']) .'" class="generic-button" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']) .'"' : '') . '>' . esc_html($link['title']) . ' &rarr;</a>';
			}
			
			$output .= '</div>';
			
			$output .= '</div>';
			
			return $output;
		}

		add_shortcode( 'ozy_vc_image_with_featured_content', 'ozy_vc_image_with_featured_content' );
		
		vc_map( array(
			"name" => esc_attr__("Image With Featured Content", "frv-logipro-essentials"),
			"base" => "ozy_vc_image_with_featured_content",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select an image for your item.", "frv-logipro-essentials")
				),array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => esc_attr__("Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => false,
					"value" => "",
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),$add_css_animation
				,array(
					'type' => 'css_editor',
					'heading' => esc_attr( 'Css', 'frv-logipro-essentials' ),
					'param_name' => 'css',
					'group' => esc_attr( 'Design options', 'frv-logipro-essentials' ),
				)
		   )
		) );	
	}	
	
	/**
	* Events Slide
	*/
	if (!function_exists('ozy_vc_events_slide')) {
		function ozy_vc_events_slide( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_events_slide', $atts);
			extract( shortcode_atts( array(
				  'title' => '',
				  'item_count' => '',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published',
				  'link' => ''
				), $atts ) 
			);
			
			global $ozyLogiProHelper;		
			
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;

			$output = $output_nav = ""; $slide_number = 1;
			
			$terms = get_terms( array(
				'taxonomy' => 'event_category',
				'hide_empty' => true
			) );
			foreach($terms as $term) {
				$output_nav .= '<li class="carousel-nav-item '. ($slide_number <= 1 ? 'is-selected':'') .'">'. esc_html($term->name) .'</li>'; 
				$events = get_posts(array(
					'post_type' => 'ozy_event',
					'numberposts' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'event_category',
							'field' => 'id',
							'terms' => $term->term_id,
							'include_children' => false,
							'status' => array('published')
						)
					)
				));
				$output.= '<div class="slide" id="slide'. esc_attr($slide_number) .'">';
				$output.= '<ol class="events">';
				foreach($events as $event) {
					$output.= 
					'<li>
						<span class="date content-color shared-border-color">'. esc_html(vp_metabox('ozy_logipro_meta_event.ozy_logipro_meta_event_dates', '', $event->ID)) .'</span>
						<span class="title"><a href="'. esc_url(get_permalink($event->ID)) .'" class="content-color">'. esc_html($event->post_title) .'</a></span>
						<span class="time content-color-alternate2">'. esc_html(vp_metabox('ozy_logipro_meta_event.ozy_logipro_meta_event_sub_title', '', $event->ID)) .'</span>
					</li>';					
				}
				$output.= '</ol>';
				$output.= '</div>';
				
				$slide_number++;
			}
			
			return 
			'<section class="events-carousel">		
				<div class="events-navigation button-row content-color-bg">
					<div class="events-nav-inner">
						<h3 class="section-title content-color-alternate3">'. esc_html($title) .'</h3>
						<nav class="button-group button-group--cells content-color-alternate3">
							'. $output_nav .'
						</nav>
					</div>
				</div>
				<div class="events-listing">
				'. $output .'
				</div>
			</section>';
		}

		add_shortcode( 'ozy_vc_events_slide', 'ozy_vc_events_slide' );

		vc_map( array(
		   "name" => esc_attr("Events Slide", "frv-logipro-essentials"),
		   "base" => "ozy_vc_events_slide",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => esc_attr("Upcoming Events", "frv-logipro-essentials"),
					"admin_label" => true,
					"description" => esc_attr("Component title", "frv-logipro-essentials")
				)
		   )
		) );	
	}	

	/**
	* Post Slider
	*/
	if (!function_exists('ozy_vc_post_slider')) {
		function ozy_vc_post_slider( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_post_slider', $atts);
			extract( shortcode_atts( array(
				  'title' => '',
				  'item_count' => '',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published',
				  'link' => ''
				), $atts ) 
			);
			
			global $ozyLogiProHelper;		
			
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;

			$output = "";
			$args = array( 
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-quote', 'post-format-aside'),
						'operator' => 'NOT IN'
					)
				),
				'post_type'			=> 'post',
				'posts_per_page' 	=> esc_attr(( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) )),
				'tag' 				=> ( !empty($tag) ? $tag : $tag ),
				'author_name'		=> ( !empty($author) ? $author : NULL ),
				'category_name'		=> ( !empty($category_name) ? $category_name : NULL ),
				'cat'				=> isset($cat) ? $cat : NULL,
				'author'			=> isset($author) ? $author : NULL,
				'orderby'			=> ( !empty($orderby) ? $orderby : 'date' ),
				'post_status'		=> ( !empty($post_status) ? $post_status : 'publish' ),
				'order'				=> ( !empty($order) ? $order : 'DESC' ),
				'ignore_sticky_posts' 	=> 1,
				'meta_key' 				=> '_thumbnail_id'				
			);
			
			$date_format = get_option('date_format');
			$loop = new WP_Query( $args );
			$counter = 1;			
			$output = PHP_EOL . '<div class="wpb_content_element ozy-post-slider">' . PHP_EOL ; $inner_output = '';
			while ( $loop->have_posts() ) : $loop->the_post();
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'logipro_showbiz');

				$categories = array(); 

				$terms = get_the_terms(get_the_ID(), 'category');
				if(is_array($terms)) {
					foreach($terms as $term) {$categories[] = $term->name;}
				}
				if($counter==1) {
					$output .= 
						PHP_EOL . '<div class="gallery-cell">
							<div class="cell-shadow"></div>
							<div class="cell-nav"><i class="oic-like-love-streamline" data-label="'. esc_attr((int)get_post_meta(get_the_ID(), "ozy_post_like_count", true)) .'"></i><i class="oic-bubble-comment-streamline-talk" data-label="'. esc_attr(get_comments_number()) .'"></i></div>
							<div class="cell-date">'. get_the_date($date_format) .'</div>
							<div class="cell-image">
								<img src="'. esc_url($thumb[0] ? $thumb[0] :  '#') .'">
							</div>
							<div class="inner-cell">
								<span>'. join(', ', $categories) .'</span>
								<h3>'. esc_html(get_the_title()) .'</h3>
								<p>'. logipro_ozy_excerpt_max_charlength(150, true, true) .'</p>
								<a href="'. esc_url(get_permalink()) .'">' . esc_html('Read More', 'frv-logipro-essentials') . '<img src="'. esc_url(plugins_url( 'images/right-arrow.svg', __FILE__ )) .'" class="svg" alt=""/></a>
							</div>
						</div>' . PHP_EOL ;
				}
				if($counter==2 || $counter==3) {
					$inner_output.=
						'<div class="small">
							<div class="cell-shadow"></div>
							<div class="cell-nav"><i class="oic-like-love-streamline" data-label="'. esc_attr((int)get_post_meta(get_the_ID(), "ozy_post_like_count", true)) .'"></i><i class="oic-bubble-comment-streamline-talk" data-label="'. esc_attr(get_comments_number()) .'"></i></div>
							<div class="cell-date">'. get_the_date($date_format) .'</div>							
							<div class="cell-image">
								<img src="'. esc_url($thumb[0] ? $thumb[0] :  '#') .'">
							</div>
							<div class="inner-cell">
								<span>'. join(', ', $categories) .'</span>
								<h4>'. esc_html(get_the_title()) .'</h4>
								<p>'. logipro_ozy_excerpt_max_charlength(60, true, true) .'</p>
								<a href="'. esc_url(get_permalink()) .'">' . esc_html('Read More', 'frv-logipro-essentials') . '<img src="'. esc_url(plugins_url( 'images/right-arrow.svg', __FILE__ )) .'" class="svg" alt=""/></a>
							</div>
						</div>';
				}
				if($counter==3) {
					$output .= '<div class="gallery-cell small-cell">'. $inner_output .'</div>';
					$inner_output = '';
					$counter = 0;
				}
				$counter++;
			endwhile;
			wp_reset_postdata();
		
			$output.= PHP_EOL . '</div>' . PHP_EOL;
			$ozyLogiProHelper->set_footer_style(
				'.ozy-post-slider .gallery-cell .cell-date{background-color:'. logipro_ozy_get_theme_mod('content_color_alternate') .';color:'. logipro_ozy_get_theme_mod('content_color_alternate3') .'}
				#content .ozy-post-slider .gallery-cell .inner-cell>h3,#content .ozy-post-slider .gallery-cell .inner-cell>h4,
				.ozy-post-slider .gallery-cell .cell-nav{color:'. logipro_ozy_get_theme_mod('content_color_alternate3') .'}'
			);
			
			return $output;
		}

		add_shortcode( 'ozy_vc_post_slider', 'ozy_vc_post_slider' );

		vc_map( array(
		   "name" => __("Post Slider", "frv-logipro-essentials"),
		   "base" => "ozy_vc_post_slider",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => "",
					"admin_label" => true,
					"description" => __("Component title", "frv-logipro-essentials")
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("View All Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Post Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => "3",
					"admin_label" => false,
					"description" => __("How many post will be listed on one page?", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Categories", "frv-logipro-essentials"),
					"param_name" => "category_name",
					"description" => __("If you want to narrow output, enter category slug names here. Display posts that have this category (and any children of that category), use category slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Tags", "frv-logipro-essentials"),
					"param_name" => "tag",
					"description" => __("If you want to narrow output, enter tag slug names here. Display posts that have this tag, use tag slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Author", "frv-logipro-essentials"),
					"param_name" => "author",
					"description" => __("If you want to narrow output, enter author slug name here. Display posts that belongs to author, use 'user_nicename' (NOT name). More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters</a>", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => __("Order by", "frv-logipro-essentials"),
					"param_name" => "orderby",
					"value" => array(__("Date", "frv-logipro-essentials") => "date", __("ID", "frv-logipro-essentials") => "ID", __("Author", "frv-logipro-essentials") => "author", __("Title", "frv-logipro-essentials") => "title", __("Modified", "frv-logipro-essentials") => "modified", __("Random", "frv-logipro-essentials") => "rand", __("Comment count", "frv-logipro-essentials") => "comment_count", __("Menu order", "frv-logipro-essentials") => "menu_order" ),
					"description" => __('Select how to sort retrieved posts. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', 'js_composer')
				),
				array(
					"type" => "dropdown",
					"heading" => __("Order way", "frv-logipro-essentials"),
					"param_name" => "order",
					"value" => array( __("Descending", "frv-logipro-essentials") => "DESC", __("Ascending", "frv-logipro-essentials") => "ASC" ),
					"description" => __('Designates the ascending or descending order. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => __("Post Status", "frv-logipro-essentials"),
					"param_name" => "post_status",
					"value" => array("publish", "pending", "draft", "auto-draft", "future", "private", "inherit", "trash", "any"),
					"admin_label" => false,
					"description" => __("Show posts associated with certain status.", "frv-logipro-essentials")
				)
		   )
		) );	
	}		

	/**
	* News Carousel
	*/
	if (!function_exists('ozy_vc_news_carousel')) {
		function ozy_vc_news_carousel( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_news_carousel', $atts);
			extract( shortcode_atts( array(
				  'title' => '',
				  'item_count' => '',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published'
				), $atts ) 
			);
			
			wp_enqueue_style('logipro-news-carousel');			
			
			$output = "";
			$args = array( 
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-quote', 'post-format-aside'),
						'operator' => 'NOT IN'
					)
				),
				'post_type'			=> 'post',
				'posts_per_page' 	=> esc_attr(( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) )),
				'tag' 				=> ( !empty($tag) ? $tag : $tag ),
				'author_name'		=> ( !empty($author) ? $author : NULL ),
				'category_name'		=> ( !empty($category_name) ? $category_name : NULL ),
				'cat'				=> isset($cat) ? $cat : NULL,
				'author'			=> isset($author) ? $author : NULL,
				'orderby'			=> ( !empty($orderby) ? $orderby : 'date' ),
				'post_status'		=> ( !empty($post_status) ? $post_status : 'publish' ),
				'order'				=> ( !empty($order) ? $order : 'DESC' ),
				'meta_key' 			=> '_thumbnail_id',
				'ignore_sticky_posts' 	=> 1
			);
			
			$loop = new WP_Query( $args );
			
			$output .= '<div class="wpb_content_element news-carousel-wrapper">';
			$output .= '<h3>'. esc_html($title) .'</h3>' . PHP_EOL;
			$output .= '<div class="explore-news">';
			while ( $loop->have_posts() ) : $loop->the_post();
				$post_image_src = '';
				if ( has_post_thumbnail() ) { 
					$post_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'logipro_boxyboxy' , false );
					if (isset($post_image_src[0])) {
						$post_image_src = $post_image_src[0];
					}
				}
			
				$output .= '<div class="news-carousel">';
				$output .= '	<div class="news-carousel-image">';
				$output .= '		<img src="'. esc_url($post_image_src) .'">';
				$output .= '		<div class="news-carousel-overlay">';
				$output .= '		<div class="news-carousel-date heading-font-family"><span>' . get_the_time('d') . '</span><span>' . get_the_time('M') . '</span><span>' . get_the_time('Y') . '</span></div>';
				$output .= '		</div>';
				$output .= '	</div>';
				$output .= '	<div class="news-carousel-text content-color">';
				$output .= '		<span class="news-carousel-tagline">'. esc_html(get_the_title()) .'</span>';
				$output .= '		<a href="' . esc_url(get_permalink()) . '">'. esc_attr('READ MORE', 'frv-logipro-essentials') .' &rarr;</a>';
				$output .= '	</div>';
				$output .= '</div>';
				
			endwhile;
			$output .= '</div>';
			$output .= '<button class="btn news-carousel-control button--previous">&larr;</button>';
			$output .= '<button class="btn news-carousel-control button--next">&rarr;</button>';
			$output .= '</div>';
			
			wp_reset_postdata();
			
			return $output;
		}

		add_shortcode( 'ozy_vc_news_carousel', 'ozy_vc_news_carousel' );

		vc_map( array(
		   "name" => __("News Carousel", "frv-logipro-essentials"),
		   "base" => "ozy_vc_news_carousel",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => esc_attr('Breaking News', 'frv-logipro-essentials'),
					"admin_label" => true,
					"description" => __("Component title", "frv-logipro-essentials")
				),		
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Post Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => "10",
					"admin_label" => false,
					"description" => __("How many post will be listed on one page?", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Categories", "frv-logipro-essentials"),
					"param_name" => "category_name",
					"description" => __("If you want to narrow output, enter category slug names here. Display posts that have this category (and any children of that category), use category slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Tags", "frv-logipro-essentials"),
					"param_name" => "tag",
					"description" => __("If you want to narrow output, enter tag slug names here. Display posts that have this tag, use tag slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Author", "frv-logipro-essentials"),
					"param_name" => "author",
					"description" => __("If you want to narrow output, enter author slug name here. Display posts that belongs to author, use 'user_nicename' (NOT name). More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters</a>", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => __("Order by", "frv-logipro-essentials"),
					"param_name" => "orderby",
					"value" => array(__("Date", "frv-logipro-essentials") => "date", __("ID", "frv-logipro-essentials") => "ID", __("Author", "frv-logipro-essentials") => "author", __("Title", "frv-logipro-essentials") => "title", __("Modified", "frv-logipro-essentials") => "modified", __("Random", "frv-logipro-essentials") => "rand", __("Comment count", "frv-logipro-essentials") => "comment_count", __("Menu order", "frv-logipro-essentials") => "menu_order" ),
					"description" => __('Select how to sort retrieved posts. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', 'js_composer')
				),
				array(
					"type" => "dropdown",
					"heading" => __("Order way", "frv-logipro-essentials"),
					"param_name" => "order",
					"value" => array( __("Descending", "frv-logipro-essentials") => "DESC", __("Ascending", "frv-logipro-essentials") => "ASC" ),
					"description" => __('Designates the ascending or descending order. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => __("Post Status", "frv-logipro-essentials"),
					"param_name" => "post_status",
					"value" => array("publish", "pending", "draft", "auto-draft", "future", "private", "inherit", "trash", "any"),
					"admin_label" => false,
					"description" => __("Show posts associated with certain status.", "frv-logipro-essentials")
				)
		   )
		) );	
	}	
	
	/**
	* News Ticker
	*/
	if (!function_exists('ozy_vc_news_ticker')) {
		function ozy_vc_news_ticker( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_news_ticker', $atts);
			extract( shortcode_atts( array(
				  'title' => '',
				  'item_count' => '',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published'
				), $atts ) 
			);

			wp_enqueue_script('logipro-news-ticker');
			wp_enqueue_style('logipro-news-ticker');
			
			$output = "";
			$args = array( 
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-quote', 'post-format-aside'),
						'operator' => 'NOT IN'
					)
				),
				'post_type'			=> 'post',
				'posts_per_page' 	=> esc_attr(( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) )),
				'tag' 				=> ( !empty($tag) ? $tag : $tag ),
				'author_name'		=> ( !empty($author) ? $author : NULL ),
				'category_name'		=> ( !empty($category_name) ? $category_name : NULL ),
				'cat'				=> isset($cat) ? $cat : NULL,
				'author'			=> isset($author) ? $author : NULL,
				'orderby'			=> ( !empty($orderby) ? $orderby : 'date' ),
				'post_status'		=> ( !empty($post_status) ? $post_status : 'publish' ),
				'order'				=> ( !empty($order) ? $order : 'DESC' )
			);
			
			$loop = new WP_Query( $args );
			
			$output .= '<div class="ozy-ticker-container">' . PHP_EOL;
			$output .= '  <div class="ozy-ticker-caption">' . PHP_EOL;
			$output .= '    <p>'. esc_html($title) .'</p>' . PHP_EOL;
			$output .= '  </div>' . PHP_EOL;
			$output .= '  <ul>' . PHP_EOL;
			
			while ( $loop->have_posts() ) : $loop->the_post();
				$output .= '    <div>' . PHP_EOL;
				$output .= '      <li><span>' . esc_html(get_the_title()) . ' &ndash; <a href="' . esc_url(get_permalink()) . '">'. esc_attr('read more', 'frv-logipro-essentials') .'</a></span></li>' . PHP_EOL;
				$output .= '    </div>' . PHP_EOL;
				
			endwhile;
			wp_reset_postdata();
			
			$output .= '  </ul>' . PHP_EOL;
			$output .= '</div>' . PHP_EOL;

			return $output;
		}

		add_shortcode( 'ozy_vc_news_ticker', 'ozy_vc_news_ticker' );

		vc_map( array(
		   "name" => __("News Ticker", "frv-logipro-essentials"),
		   "base" => "ozy_vc_news_ticker",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => esc_attr('Breaking News', 'frv-logipro-essentials'),
					"admin_label" => true,
					"description" => __("Component title", "frv-logipro-essentials")
				),		
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Post Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => "10",
					"admin_label" => false,
					"description" => __("How many post will be listed on one page?", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Categories", "frv-logipro-essentials"),
					"param_name" => "category_name",
					"description" => __("If you want to narrow output, enter category slug names here. Display posts that have this category (and any children of that category), use category slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Tags", "frv-logipro-essentials"),
					"param_name" => "tag",
					"description" => __("If you want to narrow output, enter tag slug names here. Display posts that have this tag, use tag slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Author", "frv-logipro-essentials"),
					"param_name" => "author",
					"description" => __("If you want to narrow output, enter author slug name here. Display posts that belongs to author, use 'user_nicename' (NOT name). More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters</a>", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => __("Order by", "frv-logipro-essentials"),
					"param_name" => "orderby",
					"value" => array(__("Date", "frv-logipro-essentials") => "date", __("ID", "frv-logipro-essentials") => "ID", __("Author", "frv-logipro-essentials") => "author", __("Title", "frv-logipro-essentials") => "title", __("Modified", "frv-logipro-essentials") => "modified", __("Random", "frv-logipro-essentials") => "rand", __("Comment count", "frv-logipro-essentials") => "comment_count", __("Menu order", "frv-logipro-essentials") => "menu_order" ),
					"description" => __('Select how to sort retrieved posts. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', 'js_composer')
				),
				array(
					"type" => "dropdown",
					"heading" => __("Order way", "frv-logipro-essentials"),
					"param_name" => "order",
					"value" => array( __("Descending", "frv-logipro-essentials") => "DESC", __("Ascending", "frv-logipro-essentials") => "ASC" ),
					"description" => __('Designates the ascending or descending order. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => __("Post Status", "frv-logipro-essentials"),
					"param_name" => "post_status",
					"value" => array("publish", "pending", "draft", "auto-draft", "future", "private", "inherit", "trash", "any"),
					"admin_label" => false,
					"description" => __("Show posts associated with certain status.", "frv-logipro-essentials")
				)
		   )
		) );	
	}	
	
	/**
	* News Ticker Box
	*/
	if (!function_exists('ozy_vc_newsticker_box')) {
		function ozy_vc_newsticker_box( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_newsticker_box', $atts);
			extract( shortcode_atts( array(
				  'item_count' => '20',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published',
				  'item_per_page' => '4',
				  'auto_play' => 'true',
				  'direction' => 'down',
				  'ticker_interval' => '2500'
				), $atts ) 
			);
			
			if(!function_exists('logipro_ozy_excerpt_max_charlength')) return '';

			$output = "";
			$args = array( 
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-quote', 'post-format-aside'),
						'operator' => 'NOT IN'
					)
				),
				'post_type'			=> 'post',
				'posts_per_page' 	=> esc_attr(( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) )),
				'tag' 				=> ( !empty($tag) ? $tag : $tag ),
				'author_name'		=> ( !empty($author) ? $author : NULL ),
				'category_name'		=> ( !empty($category_name) ? $category_name : NULL ),				
				'author'			=> $author,
				'orderby'			=> ( !empty($orderby) ? $orderby : 'date' ),
				'post_status'		=> ( !empty($post_status) ? $post_status : 'publish' ),
				'order'				=> ( !empty($order) ? $order : 'DESC' )
			);

			$loop = new WP_Query( $args );
			$counter = 0;			
			while ( $loop->have_posts() ) : $loop->the_post();
				$output .= '<li class="news-item">';
				$output .= '<strong>' . esc_html(get_the_title()) . '</strong>' . PHP_EOL;
				$output .= '<p>' . logipro_ozy_excerpt_max_charlength(60, true, true);
				$output .= '&nbsp;&nbsp;<a href="'. esc_url(get_permalink()) .'">'. esc_attr__('Read More', 'frv-logipro-essentials') .'</a></p>';
				$output .= '</li>' . PHP_EOL;
				$counter++;
			endwhile;
			wp_reset_postdata();
			
			$output = '<div class="panel ozy-news-box-ticker-wrapper wpb_content_element"><div class="panel-body"><ul class="ozy-news-box-ticker" data-item_per_page="'. esc_attr($item_per_page) .'" data-auto_play="'. esc_attr($auto_play) .'" data-direction="'. esc_attr($direction) .'" data-ticker_interval="'. esc_attr($ticker_interval) .'">'. $output .'</ul></div><div class="panel-footer"></div></div>';
			
			return $output;			
		}

		add_shortcode( 'ozy_vc_newsticker_box', 'ozy_vc_newsticker_box' );

		vc_map( array(
		   "name" => esc_attr__("News Ticker Box", "frv-logipro-essentials"),
		   "base" => "ozy_vc_newsticker_box",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Item Per Page", "frv-logipro-essentials"),
					"param_name" => "item_per_page",
					"value" => "4",
					"admin_label" => false,
					"description" => esc_attr__("How many post will be listed on the slider?", "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Auto Play", "frv-logipro-essentials"),
					"param_name" => "auto_play",
					"value" => array("true", "false"),
					"admin_label" => false
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Direction", "frv-logipro-essentials"),
					"param_name" => "direction",
					"value" => array("down", "up"),
					"admin_label" => false
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Ticker Interval", "frv-logipro-essentials"),
					"param_name" => "ticker_interval",
					"value" => "2500",
					"admin_label" => false
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Post Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => "20",
					"admin_label" => false,
					"description" => esc_attr__("How many post will be populated from the source?", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Categories", "frv-logipro-essentials"),
					"param_name" => "category_name",
					"description" => __("If you want to narrow output, enter category slug names here. Display posts that have this category (and any children of that category), use category slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Tags", "frv-logipro-essentials"),
					"param_name" => "tag",
					"description" => __("If you want to narrow output, enter tag slug names here. Display posts that have this tag, use tag slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Author", "frv-logipro-essentials"),
					"param_name" => "author",
					"description" => __("If you want to narrow output, enter author slug name here. Display posts that belongs to author, use 'user_nicename' (NOT name). More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters</a>", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Order by", "frv-logipro-essentials"),
					"param_name" => "orderby",
					"value" => array(esc_attr__("Date", "frv-logipro-essentials") => "date", esc_attr__("ID", "frv-logipro-essentials") => "ID", esc_attr__("Author", "frv-logipro-essentials") => "author", esc_attr__("Title", "frv-logipro-essentials") => "title", esc_attr__("Modified", "frv-logipro-essentials") => "modified", esc_attr__("Random", "frv-logipro-essentials") => "rand", esc_attr__("Comment count", "frv-logipro-essentials") => "comment_count", esc_attr__("Menu order", "frv-logipro-essentials") => "menu_order" ),
					"description" => __('Select how to sort retrieved posts. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', 'js_composer')
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Order way", "frv-logipro-essentials"),
					"param_name" => "order",
					"value" => array(esc_attr__("Descending", "frv-logipro-essentials") => "DESC", esc_attr__("Ascending", "frv-logipro-essentials") => "ASC" ),
					"description" => __('Designates the ascending or descending order. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Post Status", "frv-logipro-essentials"),
					"param_name" => "post_status",
					"value" => array("publish", "pending", "draft", "auto-draft", "future", "private", "inherit", "trash", "any"),
					"admin_label" => false,
					"description" => esc_attr__("Show posts associated with certain status.", "frv-logipro-essentials")
				)
		   )
		) );
	}
	
	/**
	* News & Events
	*/
	if (!function_exists('ozy_vc_news_events')) {
		function ozy_vc_news_events( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_news_events', $atts);
			extract( shortcode_atts( array(
				  'title' => '',
				  'item_count' => '',
				  'category_name' => '',
				  'author' => '',
				  'tag' => '',
				  'order_by' => 'date',
				  'order' => 'DESC',
				  'post_status' => 'published',
				  'link' => ''
				), $atts ) 
			);
			
			global $ozyLogiProHelper;		
			
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;

			$output = "";
			$args = array( 
				'tax_query' => array(
					array(
						'taxonomy' => 'post_format',
						'field' => 'slug',
						'terms' => array('post-format-quote', 'post-format-aside'),
						'operator' => 'NOT IN'
					)
				),
				'post_type'			=> 'post',
				'posts_per_page' 	=> esc_attr(( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) )),
				'tag' 				=> ( !empty($tag) ? $tag : $tag ),
				'author_name'		=> ( !empty($author) ? $author : NULL ),
				'category_name'		=> ( !empty($category_name) ? $category_name : NULL ),
				'cat'				=> isset($cat) ? $cat : NULL,
				'author'			=> isset($author) ? $author : NULL,
				'orderby'			=> ( !empty($orderby) ? $orderby : 'date' ),
				'post_status'		=> ( !empty($post_status) ? $post_status : 'publish' ),
				'order'				=> ( !empty($order) ? $order : 'DESC' )
			);
			
			$date_format = get_option('date_format');
			$loop = new WP_Query( $args );
			$counter = 0;			
			$output .= '<ul class="news-and-events">' . PHP_EOL;
			while ( $loop->have_posts() ) : $loop->the_post();
				$output .= '<li>';
				$output .= '<div class="date-field">' . get_the_date($date_format) .'</div>' . PHP_EOL;
				$output .= '<div class="title-field">' . PHP_EOL;
				$output .= '<a href="' . get_permalink() . '" class="content-color">' . get_the_title() . '</a>' . PHP_EOL;
				$output .= '</div>' . PHP_EOL;
				$output .= '</li>' . PHP_EOL;			
			endwhile;
			wp_reset_postdata();
		
			$output .= '</ul>' . PHP_EOL;
			
			$style = 'ul.news-and-events>li>div.date-field{color:'. esc_attr($ozyLogiProHelper->rgba2rgb(logipro_ozy_get_theme_mod('content_color_alternate3'))) .' !important;background-color:'. esc_attr(logipro_ozy_get_theme_mod('content_color_alternate')) .';}';
			$ozyLogiProHelper->set_footer_style($style);

			$link = vc_build_link($link); $view_all_link = '';
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$view_all_link = '<a href="'. esc_url($link['url']) .'" class="field-view-all-button generic-button">'. (isset($link['title']) ? esc_attr($link['title']) : esc_attr('VIEW ALL', 'frv-logipro-essentials')) .' <img src="'. esc_url(plugins_url( 'images/right-arrow.svg', __FILE__ )) .'" class="svg" alt=""/></a>';
			}			
			
			return '<div class="news-and-events-wrapper wpb_wrapper">' . ( trim($title) ? '<h3 class="shared-border-color">' . esc_attr($title) . '</h3>' . $view_all_link : '' ) . $output . '</div>';
		}

		add_shortcode( 'ozy_vc_news_events', 'ozy_vc_news_events' );

		vc_map( array(
		   "name" => __("News & Events", "frv-logipro-essentials"),
		   "base" => "ozy_vc_news_events",
		   "icon" => "icon-wpb-ozy-el",
		   'category' => 'FreeVision Custom',
		   "params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => "",
					"admin_label" => true,
					"description" => __("Component title", "frv-logipro-essentials")
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("View All Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Post Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => "3",
					"admin_label" => false,
					"description" => __("How many post will be listed on one page?", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Categories", "frv-logipro-essentials"),
					"param_name" => "category_name",
					"description" => __("If you want to narrow output, enter category slug names here. Display posts that have this category (and any children of that category), use category slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Tags", "frv-logipro-essentials"),
					"param_name" => "tag",
					"description" => __("If you want to narrow output, enter tag slug names here. Display posts that have this tag, use tag slug (NOT name). Split names with ','. More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters</a>", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"heading" => __("Author", "frv-logipro-essentials"),
					"param_name" => "author",
					"description" => __("If you want to narrow output, enter author slug name here. Display posts that belongs to author, use 'user_nicename' (NOT name). More information; <a href='http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters' target='_blank'>http://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters</a>", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => __("Order by", "frv-logipro-essentials"),
					"param_name" => "orderby",
					"value" => array(__("Date", "frv-logipro-essentials") => "date", __("ID", "frv-logipro-essentials") => "ID", __("Author", "frv-logipro-essentials") => "author", __("Title", "frv-logipro-essentials") => "title", __("Modified", "frv-logipro-essentials") => "modified", __("Random", "frv-logipro-essentials") => "rand", __("Comment count", "frv-logipro-essentials") => "comment_count", __("Menu order", "frv-logipro-essentials") => "menu_order" ),
					"description" => __('Select how to sort retrieved posts. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', 'js_composer')
				),
				array(
					"type" => "dropdown",
					"heading" => __("Order way", "frv-logipro-essentials"),
					"param_name" => "order",
					"value" => array( __("Descending", "frv-logipro-essentials") => "DESC", __("Ascending", "frv-logipro-essentials") => "ASC" ),
					"description" => __('Designates the ascending or descending order. More at <a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>.', "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => __("Post Status", "frv-logipro-essentials"),
					"param_name" => "post_status",
					"value" => array("publish", "pending", "draft", "auto-draft", "future", "private", "inherit", "trash", "any"),
					"admin_label" => false,
					"description" => __("Show posts associated with certain status.", "frv-logipro-essentials")
				)
		   )
		) );	
	}	
	
	/**
	* Service Box
	*/
	if (!function_exists('ozy_vc_service_box')) {
		function ozy_vc_service_box( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_service_box', $atts);
			extract(shortcode_atts(array(
				'title' => '',
				'title_hover' => '',
				'icon' => '',
				'excerpt' => '',
				'title_color' => '',
				'excerpt_color' => '',
				'front_face_bg_color' => '',
				'back_face_bg_color' => '',
				'front_face_bg_image' => '',
				'back_face_bg_image' => '',
				'link' => '',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$front_face_bg_image = wp_get_attachment_image_src($front_face_bg_image, 'large');
			if(isset($front_face_bg_image[0])) {
				$front_face_bg_image =  ' style="background-image:url('. esc_url($front_face_bg_image[0]) .')" ';
			}
			$back_face_bg_image = wp_get_attachment_image_src($back_face_bg_image, 'large');
			if(isset($back_face_bg_image[0])) {
				$back_face_bg_image =  ' style="background-image:url('. esc_url($back_face_bg_image[0]) .')" ';
			}			
			
			$rand_id = 'osb-' . rand(10, 100000);
			
			$output = '<div id="'. $rand_id .'" class="ozy-service-box wpb_content_element '. $css_animation .'">';
			$output.= '<div class="front-face" '. $front_face_bg_image .'>';
			$output.= '<h4>'. $title .'</h4>';
			$output.= '<div class="icon-container"><div class="icon-border icon-border-left"></div><i class="'. esc_attr($icon) .'"></i><div class="icon-border icon-border-right"></div></div>';
			$output.= '<div class="excerpt-box">'. $excerpt .'</div>';
			$output.= '</div>';
			$output.= '<div class="back-face" '. $back_face_bg_image .'><a ';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url']) && $link['url']) {
				$output .= 'href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']) .'"' : '');
			}
			$output.= '><div class="icon-container"><div class="icon-border icon-border-left"></div><i class="'. esc_attr($icon) .'"></i><div class="icon-border icon-border-right"></div></div>';
			$output.= '<div class="excerpt-box"><h4>'. $title_hover .'</h4></div>';			
			$output.= '</a></div>';
			$output.= '</div>';

			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$ozyLogiProHelper->set_footer_style("#$rand_id h4 ,#$rand_id i {color:". esc_attr($title_color) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id .excerpt-box {color:". esc_attr($excerpt_color) .";border-color:". esc_attr($ozyLogiProHelper->hex2rgba(esc_attr($title_color), '0.3')) ."!important}");
			$ozyLogiProHelper->set_footer_style("#$rand_id .front-face{background-color:". esc_attr($front_face_bg_color) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id .back-face{background-color:". esc_attr($back_face_bg_color) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id .icon-container .icon-border:before{background-color:". esc_attr($ozyLogiProHelper->hex2rgba(esc_attr($title_color), '0.3')) ."!important}");
		
			return $output;
		}
		
		add_shortcode('ozy_vc_service_box', 'ozy_vc_service_box');
		
		vc_map( array(
			"name" => esc_attr__("Service Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_service_box",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"value" => esc_attr__("TITLE GOES HERE", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title Hover", "frv-logipro-essentials"),
					"value" => esc_attr__("SET AN APPOINTMENT", "frv-logipro-essentials"),
					"param_name" => "title_hover",
					"admin_label" => true
				),	
				array(
					"type" => "select_an_icon",
					"heading" => esc_attr__("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false,
					"description" => esc_attr__("Title heading style.", "frv-logipro-essentials")
				),
				array(
					"type" => "textarea",
					"holder" => "div",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt"
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Title Color", "frv-logipro-essentials"),
					"param_name" => "title_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Excerpt Color", "frv-logipro-essentials"),
					"param_name" => "excerpt_color",
					"admin_label" => false,
					"value" => "#d5ad4c"
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Front Face Background Color", "frv-logipro-essentials"),
					"param_name" => "front_face_bg_color",
					"admin_label" => false,
					"value" => "#000000"
				),				
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Front Face Background Image", "frv-logipro-essentials"),
					"param_name" => "front_face_bg_image",
					"admin_label" => false,
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Back Face Background Color", "frv-logipro-essentials"),
					"param_name" => "back_face_bg_color",
					"admin_label" => false,
					"value" => "#000000"
				),	
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Back Face Background Image", "frv-logipro-essentials"),
					"param_name" => "back_face_bg_image",
					"admin_label" => false,
					"value" => ""
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}	

	/**
	* Icon Wrapper
	*/
	if (!function_exists('ozy_vc_iconwrapper')) {
		function ozy_vc_iconwrapper( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_iconwrapper', $atts);
			extract(shortcode_atts(array(
				'title' => ''
			), $atts));

			$output = '<div class="ozy-icon-wrapper wpb_content_element">';
			if($title) $output.= '<span>' . esc_attr($title) . '</span>';
			$output.= do_shortcode($content); 
			$output.= '</div>';

			return $output;
		}
		
		add_shortcode('ozy_vc_iconwrapper', 'ozy_vc_iconwrapper');
		
		vc_map( array(
			"name" => esc_attr__("Icon Wrapper", "frv-logipro-essentials"),
			"base" => "ozy_vc_iconwrapper",
			"as_parent" => array('only' => 'vc_icon'),
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"value" => "",
					"admin_label" => true
				)
		   ),
		   "js_view" => 'VcColumnView'
		) );
		
		class WPBakeryShortCode_Ozy_Vc_Iconwrapper extends WPBakeryShortCodesContainer{}			
	}

	/**
	* Title with Icon Content
	*/
	if(!function_exists('ozy_vc_title_with_icon')) {
		function ozy_vc_title_with_icon( $atts, $content=null ) {
            $atts = vc_map_get_attributes('ozy_vc_title_with_icon', $atts);
			extract( shortcode_atts( array(
				  'icon' => '',
				  'icon_size' => 'medium',
				  'icon_position' => 'left',
				  'size' => 'h1',
				  'title' => '',
				  'icon_type' => '',
				  'icon_color' => '',
				  'icon_color_end' => '',
				  'text_color' => '',
				  'icon_bg_color' => 'transparent',
				  'icon_shadow_color' => '',
				  'go_link' => '',
				  'go_target' => '_self',
				  'connected' => 'no',
				  'dot_bg_color' => 'transparent'
				), $atts ) 
			);
			
			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$element_id = 'title-with-icon_icon' . rand(100,10000);
			$a_begin = $a_end = $add_style = "";
			if(trim($go_link) !== '') {
				$a_begin = '<a href="' . esc_attr($go_link) . '" '. ($go_target=='fancybox' || $go_target=='fancybox-media' ? 'class':'target') .'="' . esc_attr($go_target) . '">';
				$a_end   = '</a>';
			}

			if($icon_type === 'circle') {
				$icon_bg_color = 'transparent';
				$add_style = 'border-color:'. esc_attr($icon_color) .';';
			}
			
			if($title == '' && $content != '') {
				$title = wpb_js_remove_wpautop(do_shortcode($content));
				$content = '';
				$size = 'span';
			}
			
			if($icon_color_end) {
				$ozyLogiProHelper->set_footer_style("#$element_id .span-icon:before{-webkit-background-clip: text !important;-webkit-text-fill-color: transparent;background: ". esc_attr($icon_color) .";background: -moz-linear-gradient(top, ". esc_attr($icon_color) ." 0%, ". esc_attr($icon_color_end) ." 100%);background: -webkit-linear-gradient(top, ". esc_attr($icon_color) ." 0%,". esc_attr($icon_color_end) ." 100%);background: linear-gradient(to bottom, ". esc_attr($icon_color) ." 0%,". esc_attr($icon_color_end) ." 100%);}");
				$o_icon = ($icon ? $a_begin . '<span ' . ($icon_color ? ' style="'. $add_style .'background-color:'. esc_attr($icon_bg_color) .' !important;"' : '') . ' class="span-icon ' . esc_attr($icon) . ' ' . esc_attr($icon_type) . ' ' . esc_attr($icon_size) . ' ' . '" '. (esc_attr($icon_shadow_color) ? 'data-color="'. esc_attr($icon_shadow_color) .'"':'') .'></span>' . $a_end : '');				
			}else{			
				$o_icon = ($icon ? $a_begin . '<span ' . ($icon_color ? ' style="'. $add_style .'color:'. esc_attr($icon_color) .' !important;background-color:'. esc_attr($icon_bg_color) .' !important;"' : '') . ' class="span-icon ' . esc_attr($icon) . ' ' . esc_attr($icon_type) . ' ' . esc_attr($icon_size) . ' ' . '" '. (esc_attr($icon_shadow_color) ? 'data-color="'. esc_attr($icon_shadow_color) .'"':'') .'></span>' . $a_end : '');
			}
			
			return '<div id="'. $element_id .'" class="title-with-icon-wrapper '. esc_attr($icon_type) . ' ' . esc_attr($icon_size) .' '. (esc_attr($connected) === 'yes' ? 'connected' : '') .'" data-color="'. esc_attr($dot_bg_color) .'">
			<div class="wpb_content_element title-with-icon clearfix ' . (trim($content) !== '' ? 'margin-bottom-0 ' : '') . ($icon_position !== 'left' ? esc_attr($icon_position).'-style' : '') . '">' . ($icon_position !== 'right' ? $o_icon:'') . 
			'<' . $size . (!$text_color ? (!$icon ? ' class="no-icon content-color"' : ' class="content-color"'):'') . ' style="'. ($text_color ? 'color:' . esc_attr($text_color) : '') .'">' . $a_begin . $title . $a_end . '</' . $size . '>' . ($icon_position === 'right' ? $o_icon:'') .'
			</div>' . (trim($content) !== '' && trim($title) !== '' ? '<div class="wpb_content_element '. esc_attr($icon_position) .'-cs title-with-icon-content '. esc_attr($icon_size) .' clearfix" style="'. (esc_attr($text_color) ? 'color:' . esc_attr($text_color) : '') .'">' 
			. wpb_js_remove_wpautop(do_shortcode($content)) . '</div>' : '') . '</div>';
		}
		
		add_shortcode( 'ozy_vc_title_with_icon', 'ozy_vc_title_with_icon' );
		
		vc_map( array(
			"name" => esc_attr__("Title With Icon", "frv-logipro-essentials"),
			"base" => "ozy_vc_title_with_icon",
			"class" => "",
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
			  array(
				"type" => "select_an_icon",
				"heading" => esc_attr__("Icon", "frv-logipro-essentials"),
				"param_name" => "icon",
				"value" => '',
				"admin_label" => false,
				"description" => esc_attr__("Title heading style.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Icon Size", "frv-logipro-essentials"),
				"param_name" => "icon_size",
				"value" => array(esc_attr__("medium", "frv-logipro-essentials") => "medium", esc_attr__("large", "frv-logipro-essentials") => "large", esc_attr__("xlarge", "frv-logipro-essentials") => "xlarge", esc_attr__("xxlarge", "frv-logipro-essentials") => "xxlarge", esc_attr__("xxxlarge", "frv-logipro-essentials") => "xxxlarge"),
				"admin_label" => false,
				"description" => esc_attr__("Size of the Icon.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Icon Position", "frv-logipro-essentials"),
				"param_name" => "icon_position",
				"value" => array(esc_attr__("left", "frv-logipro-essentials") => "left", esc_attr__("right", "frv-logipro-essentials") => "right", esc_attr__("top", "frv-logipro-essentials") => "top"),
				"admin_label" => false,
				"description" => esc_attr__("Position of the Icon.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Icon Alternative Color", "frv-logipro-essentials"),
				"param_name" => "icon_color",
				"value" => "",
				"admin_label" => false,
				"description" => esc_attr__("This field is not required.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Icon Alternative Color End", "frv-logipro-essentials"),
				"param_name" => "icon_color_end",
				"value" => "",
				"admin_label" => false,
				"description" => esc_attr__("To generate gradient effect on your icon, choose a color here.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Icon Background Type", "frv-logipro-essentials"),
				"param_name" => "icon_type",
				"value" => array(esc_attr__("rectangle", "frv-logipro-essentials") => "rectangle", esc_attr__("rounded", "frv-logipro-essentials") => "rounded", esc_attr__("circle", "frv-logipro-essentials") => "circle", esc_attr__("clear", "frv-logipro-essentials") => "clear"),
				"admin_label" => false,
				"description" => esc_attr__("Position of the Icon.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Icon Background Color", "frv-logipro-essentials"),
				"param_name" => "icon_bg_color",
				"value" => "",
				"admin_label" => false,
				"description" => esc_attr__("Background color of Icon.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Icon Shadow Color", "frv-logipro-essentials"),
				"param_name" => "icon_shadow_color",
				"value" => "",
				"admin_label" => false,
				"description" => esc_attr__("Shadow color of Icon.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Heading Style", "frv-logipro-essentials"),
				"param_name" => "size",
				"value" => array("h1", "h2", "h3", "h4", "h5", "h6"),
				"admin_label" => false,
				"description" => esc_attr__("Title heading style.", "frv-logipro-essentials")
			  ),array(
				 "type" => "textfield",
				 "class" => "",
				 "heading" => esc_attr__("Link", "frv-logipro-essentials"),
				 "param_name" => "go_link",
				 "admin_label" => true,
				 "value" => "",
				 "description" => esc_attr__("Enter full path.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Link Target", "frv-logipro-essentials"),
				"param_name" => "go_target",
				"value" => array("_self", "_blank", "_parent", "fancybox", "fancybox-media"),
				"admin_label" => false,
				"description" => esc_attr__("Select link target window. fancybox will launch an lightbox window for images, and fancybox-media will launch a lightbox window for frames/video.", "frv-logipro-essentials")
			  ),array(
				 "type" => "textfield",
				 "class" => "",
				 "heading" => esc_attr__("Title", "frv-logipro-essentials"),
				 "param_name" => "title",
				 "admin_label" => true,
				 "value" => esc_attr__("Enter your title here", "frv-logipro-essentials"),
				 "description" => esc_attr__("Content of the title.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Font Color", "frv-logipro-essentials"),
				"param_name" => "text_color",
				"value" => "",
				"admin_label" => false,
				"description" => esc_attr__("This option will affect Title and Content color.", "frv-logipro-essentials")
			  ),array(
				"type" => "dropdown",
				"heading" => esc_attr__("Connected", "frv-logipro-essentials"),
				"param_name" => "connected",
				"value" => array("no", "yes"),
				"admin_label" => false,
				"description" => esc_attr__("Select yes to connect elements to next one with a dashed border.", "frv-logipro-essentials")
			  ),array(
				"type" => "colorpicker",
				"heading" => esc_attr__("Border Color", "frv-logipro-essentials"),
				"param_name" => "dot_bg_color",
				"value" => "",
				"admin_label" => false,
				"dependency" => Array('element' => "connected", 'value' => 'yes')
			  ),array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__("Content", "frv-logipro-essentials"),
				"param_name" => "content",
				"value" => "",
				"description" => esc_attr__("Type your content here.", "frv-logipro-essentials")
			  )
		   )
		) );
	}

	/**
	* Divider
	*/
	if (!function_exists('ozy_vc_divider')) {
		function ozy_vc_divider( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_divider', $atts);
			extract(shortcode_atts(array(
				'caption_size' => 'h3',
				'fg_color'		=> '',
				'caption' 		=> '',
				'icon'			=> '',
				'caption_align'	=> 'center',
				'caption_position' => '',
				'border_style'	=> 'solid',
				'border_size' => '1',
				'border_color' => '',
				'css_animation' => '',
				'more_custom' => 'off',
				'width' => '',
				'align' => 'center',
				'css' => ''
				), $atts ) 
			);
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), 'ozy_vc_custom_list', $atts );
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$output = $more_custom_html = '';
			if(esc_attr($more_custom) == 'on' && esc_attr($width) && esc_attr($align)) {
				$more_custom_html = ';width:'. esc_attr($width) .';max-width:'. esc_attr($width) .';';
				switch(esc_attr($align)) {
					case 'center':
						$more_custom_html .= 'margin:20px auto;';
						break;
					case 'left':
						$more_custom_html .= 'left:0;';
						break;
					case 'right':
						$more_custom_html .= 'right:0;';
						break;						
					default:
						$more_custom_html .= 'margin:0 auto;';
				}
			}
			
			$title_style = $fg_color ? ' style="color:'. esc_attr($fg_color) .'" ' : '';
			
			if('top' === esc_attr($caption_position)){
				$output = ( trim( esc_attr( $caption ) ) ? '<'. esc_attr($caption_size) .' class="ozy-divider-cap-' . esc_attr($caption_align) . ' wpb_content_element" '. $title_style .'>' . esc_attr( $caption ) . '</'. esc_attr($caption_size) .'>' : '' );
				$output.= '<div class="ozy-content-divider '. esc_attr($css_class) .' ' . $css_animation .'" style="border-top-style:'. esc_attr($border_style) . ';border-top-width:' . ('double' == esc_attr($border_style)?'3':esc_attr($border_size)) .'px' . ('' != esc_attr($border_color)?';border-top-color:'. esc_attr($border_color) .'':'') . $more_custom_html .'"></div>';
			}else{
				if(!$icon) {
					$output = '<fieldset class="ozy-content-divider '. esc_attr($css_class) .' ' . $css_animation .' wpb_content_element" style="border-top-style:'. esc_attr($border_style) . ';border-top-width:' . ('double' == esc_attr($border_style)?'3':esc_attr($border_size)) .'px' . ('' != esc_attr($border_color)?';border-top-color:'. esc_attr($border_color) .'':'') . $more_custom_html .'">' . ( trim( esc_attr( $caption ) ) ? '<legend class="d' . esc_attr($caption_align) . '" align="' . esc_attr($caption_align) . '">' . esc_attr( $caption ) . '</legend>' : '' ) . '</fieldset>';
				}else{
					$output = '<fieldset class="ozy-content-divider '. esc_attr($css_class) .' ' . $css_animation .' wpb_content_element" style="border-top-style:'. esc_attr($border_style) . ';border-top-width:' . ('double' == esc_attr($border_style)?'3':esc_attr($border_size)) .'px' . ('' != esc_attr($border_color)?';border-top-color:'. esc_attr($border_color) .'':'') . $more_custom_html .'">' . ( trim( esc_attr( $icon ) ) ? '<legend class="d' . esc_attr($caption_align) . '" align="' . esc_attr($caption_align) . '"><i class="' . esc_attr( $icon ) . '" '. $title_style .'></i></legend>' : '' ) . '</fieldset>';
				}
			}
			return $output;
		}

		add_shortcode('ozy_vc_divider', 'ozy_vc_divider');

		vc_map( array(
		   "name" => esc_attr__("Separator (Divider) With Caption", "frv-logipro-essentials"),
		   "base" => "ozy_vc_divider",
		   "class" => "",
		   "controls" => "full",
		   'category' => 'FreeVision Custom',
		   "icon" => "icon-wpb-ozy-el",
		   "params" => array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Caption Size", "frv-logipro-essentials"),
					"param_name" => "caption_size",
					"admin_label" => true,
					"value" => array("h3","h1","h2","h4","h5","h6")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Color", "frv-logipro-essentials"),
					"param_name" => "fg_color",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => esc_attr__("Enter your caption here", "frv-logipro-essentials"),
					"description" => esc_attr__("Caption of the divider.", "frv-logipro-essentials")
				),array(
					"type" => "select_an_icon",
					"heading" => esc_attr__("or use an Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"description" => esc_attr__("Caption will be ignored when an icon selected. Only works with overlay caption position.", "frv-logipro-essentials"),
					"admin_label" => false
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Border Style", "frv-logipro-essentials"),
					"param_name" => "border_style",
					"admin_label" => true,
					"value" => array("solid","dotted","dashed","double")
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Border Size", "frv-logipro-essentials"),
					"param_name" => "border_size",
					"admin_label" => true,
					"value" => array("1","2","3","4","5","6","7","8","9","10")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Border Color", "frv-logipro-essentials"),
					"param_name" => "border_color",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Caption Align", "frv-logipro-essentials"),
					"param_name" => "caption_align",
					"admin_label" => true,
					"value" => array("center", "left", "right"),
					"description" => esc_attr__("Caption align.", "frv-logipro-essentials")
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Caption Position", "frv-logipro-essentials"),
					"param_name" => "caption_position",
					"admin_label" => true,
					"value" => array("overlay", "top"),
					"description" => esc_attr__("Caption position.", "frv-logipro-essentials")
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("More Customization", "frv-logipro-essentials"),
					"param_name" => "more_custom",
					"value" => array("off", "on"),
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Width", "frv-logipro-essentials"),
					"param_name" => "width",
					"admin_label" => true,
					"value" => "400px",
					"dependency" => Array('element' => "more_custom", 'value' => 'on')
				),array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Align", "frv-logipro-essentials"),
					"param_name" => "align",
					"admin_label" => true,
					"value" => array("center", "left", "right"),
					"dependency" => Array('element' => "more_custom", 'value' => 'on')
				),$add_css_animation
				,array(
					'type' => 'css_editor',
					'heading' => esc_attr( 'Css', 'frv-logipro-essentials' ),
					'param_name' => 'css',
					'group' => esc_attr( 'Design options', 'frv-logipro-essentials' ),
				)
			)
		) );
	}
	
	/**
	* Typewriter
	*/
	if (!function_exists('ozy_vc_typewriter')) {
		function ozy_vc_typewriter( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_typewriter', $atts);
			extract(shortcode_atts(array(
				'title'	=> '',
				'typespeed'			=> '100',
				'startdelay'		=> '0',
				'backspeed'			=> '0',
				'backdelay' 		=> '1500',
				'loop'				=> 'true',
				'font_color'		=> '#fff',
				'font_size'			=> '4.2vw',
				'font_weight'		=> '700'
			), $atts));
						
			$rand_id = 'type_writer_data_' . rand(1, 1000000);
			$GLOBALS['OZY_TYPE_WRITER'] = array();
			
			do_shortcode($content);
			
			wp_localize_script( 'logipro', 'ozyTypeWriterData', array($rand_id =>  json_encode($GLOBALS['OZY_TYPE_WRITER'])) );
			
			unset($GLOBALS['OZY_TYPE_WRITER']);

			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$ozyLogiProHelper->set_footer_style("#$rand_id {color:". esc_attr($font_color) ." !important;font-size:". esc_attr($font_size) .";line-height:110%;font-weight:". esc_attr($font_weight) .";}");
			
			return '<div id="'. $rand_id .'" class="ozy-typing-box-wrapper heading-font">' . $title . '<span class="typing-box" 
			data-path="'. esc_attr($rand_id) .'" 
			data-typespeed="'. esc_attr($typespeed) .'" 
			data-startdelay="'. esc_attr($startdelay) .'" 
			data-backspeed="'. esc_attr($backspeed) .'" 
			data-backdelay="'. esc_attr($backdelay) .'" 
			data-loop="'. esc_attr($loop) .'"></span></div>';
		}
		
		add_shortcode('ozy_vc_typewriter', 'ozy_vc_typewriter');
	
		vc_map( array(
			"name" => esc_attr__("Typewriter", "frv-logipro-essentials"),
			"base" => "ozy_vc_typewriter",
			"as_parent" => array('only' => 'ozy_vc_typewriter_line'),
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Static Caption", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_attr__("Font Color", "frv-logipro-essentials"),
					"param_name" => "font_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Font Size", "frv-logipro-essentials"),
					"param_name" => "font_size",
					"admin_label" => true,					
					"value" => "4.2vw"
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Font Weight", "frv-logipro-essentials"),
					"param_name" => "font_weight",
					"admin_label" => true,
					"value" => array("100", "200", "300", "400", "500", "600", "700", "800", "900")
				),					
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Type Speed", "frv-logipro-essentials"),
					"param_name" => "typespeed",
					"admin_label" => true,
					"description" => esc_attr__("Typing Speed", "frv-logipro-essentials"),
					"value" => "100"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Start Delay", "frv-logipro-essentials"),
					"param_name" => "startdelay",
					"admin_label" => true,
					"description" => esc_attr__("Time before typing starts", "frv-logipro-essentials"),
					"value" => "0"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Back Speed", "frv-logipro-essentials"),
					"param_name" => "backspeed",
					"admin_label" => true,
					"description" => esc_attr__("Backspacing speed", "frv-logipro-essentials"),
					"value" => "0"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Back Delay", "frv-logipro-essentials"),
					"param_name" => "backdelay",
					"admin_label" => true,
					"description" => esc_attr__("Time before backspacing", "frv-logipro-essentials"),
					"value" => "1500"
				),				
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Loop", "frv-logipro-essentials"),
					"param_name" => "loop",
					"admin_label" => true,
					"description" => esc_attr__("The whole typing is loop or not", "frv-logipro-essentials"),
					"value" => array("true", "false")
				)
				
		   ),
		   "js_view" => 'VcColumnView'		   
		) );
	}
	
	if (!function_exists('ozy_vc_typewriter_line')) {
		function ozy_vc_typewriter_line( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_typewriter_line', $atts);
			extract(shortcode_atts(array(
				'caption'		=> ''
			), $atts));
			
			$GLOBALS['OZY_TYPE_WRITER'][] = esc_attr($caption);
			
			return null;
		}
		
		add_shortcode('ozy_vc_typewriter_line', 'ozy_vc_typewriter_line');

		vc_map( array(
			"name" => esc_attr__("Line", "frv-logipro-essentials"),
			"base" => "ozy_vc_typewriter_line",
			"content_element" => true,
			"as_child" => array('only' => 'ozy_vc_typewriter'),
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Typewriter Line", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"description" => esc_attr__('Add ^1000 between the words if you like add 1000ms delay to before the next word. Example: First ^1000 sentence.', 'frv-logipro-essentials'),
					"value" => ""
				)		
		   )
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Typewriter extends WPBakeryShortCodesContainer{}
	class WPBakeryShortCode_Ozy_Vc_Typewriter_Line extends WPBakeryShortCode{}
	
	/**
	* Locations World Map
	*/
	if (!function_exists('ozy_vc_locations_map')) {
		function ozy_vc_locations_map( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_locations_map', $atts);
			extract(shortcode_atts(array(
				'title'	=> ''
			), $atts));
			
			$GLOBALS['OZY_LOCATIONS_MAP'] = array();

			wp_enqueue_script('logipro-worldmap-jsapi');
			wp_enqueue_script('logipro-worldmap');
			
			do_shortcode($content);
			
			wp_localize_script( 'logipro', 'ozyLocationsMapData', array('mapData' =>  json_encode($GLOBALS['OZY_LOCATIONS_MAP'])) );
			
			unset($GLOBALS['OZY_LOCATIONS_MAP']);
			
			return '<div id="visualization" class="ozy-locations-world-map"></div><svg style="display:none" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="400px" height="240px" viewBox="0 0 600.658 291.448" enable-background="new 0 0 600.658 291.448"
	 xml:space="preserve"><g>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M31.43,30.434c0,0-2.552-2.807-2.679,0
		c-0.128,2.807-0.495,3.829-0.495,3.829s-0.865,0.167-2.564,0.167c-1.7,0-1.021,0.409-3.06,0.409c-2.04,0-3.4,0.264-3.4,0.264
		l1.674,2.349c0,0,2.33-1.883,1.726,0.287c-0.604,2.167-2.212,3.075-4.25,3.323c-2.038,0.248-1.966-1.623-3.23,0.014
		c-1.263,1.638-1.965,2.269-1.965,2.269l-1.754,3.229l-1.754,2.105c0,0,1.692-1.473,2.074,0.316s-0.729,0.618-2.454,2.606
		s-2.954,2.882-1.725,2.97c1.23,0.089,4.859,0.016,4.859,0.016s1.77-0.752,4.263-1.699c2.494-0.947,3.087-1.754,5.052-3.157
		c1.965-1.403,2.666-1.754,5.122-2.807c2.456-1.052-0.671-1.131,4.927-1.442c5.599-0.312,5.949,0.039,5.949,0.039
		s0.702,0,2.105,0.702c1.404,0.702-0.702-0.702,2.806,1.404l5.263,3.157l0.255,1.497c0,0,0.488-0.789,0.488,1.021
		c0,1.809,0.495,4.419,0.495,4.419l0.486,3.06c0,0-1.022,0.527-1.725,2.281c-0.701,1.754-0.701,3.018-0.701,3.018l2.971,3.541
		c0,0,2.677-0.875,0.379,0.318c-2.298,1.194-3.7,1.896-3.7,1.896l-1.755,3.509l-1.192,1.685l-3.368,6.033
		c0,0-0.111-3.025-0.582,0.242c-0.471,3.267-2.225,7.477-2.225,8.528c0,1.054,1.715,3.86,1.715,3.86s-2.495-0.702,0.156,1.929
		c2.65,2.631,3.742,4.736,3.742,5.613c0,0.878,0.176,2.203,0.176,2.203s-0.176,0.662,0.526,2.65s0.351,3.898,0.526,4.521
		c0.176,0.623,1.735,2.904,2.047,3.606c0.312,0.702,0.936,1.578,0.936,1.578s0.936,1.481,1.403,2.145
		c0.468,0.662,0.891,1.716,0.891,1.716s0.512,0.194,0.863-1.229c0.351-1.422,0.351-3.684,0.351-3.684s-0.702-1.579-1.169-2.281
		c-0.468-0.701-0.468-0.76-0.624-1.54c-0.155-0.778-0.662-1.616-0.662-1.616s0-0.021-0.526-1.229s-0.682-1.676-0.682-1.676
		l0.156-2.184l1.053-0.468c0,0-0.429-1.131,0.662,0.994c1.092,2.125-2.026-4.386,1.092,2.982c3.118,7.367,3.274,8.595,3.274,8.595
		l3.073,3.334c0,0,1.917,0.447,1.917,1.714s-0.156,1.793-0.156,1.793l0.651,5.433c0,0,0.752,0.883,1.532,1.409
		c0.78,0.526,1.462,0.722,2.339,1.033s0.645-0.891,1.414,0.022c0.769,0.913,1.627,1.225,2.445,1.751s1.185-0.854,1.235,0.013
		c0.051,0.865,0.909,1.039,2.273,1.565c1.364,0.528,1.073,0.013,1.909,0.013c0.837,0-0.341,1.453,1.506,0.72
		c1.847-0.732,1.847-1.259,2.899-1.083s0.001-1.433,1.229,0.176c1.226,1.609,1.683,0.586,1.728,1.609
		c0.046,1.021,0.552,0.32,1.605,1.899c1.052,1.579,2.027,2.046,2.027,2.046s1.388,0.447,2.727,0.447s0.907-0.671,1.673,0.26
		s1.645,0.569,1.994,2.256c0.349,1.687,0.495,2.427,0.495,2.427c1.084,1.628,1.104,1.726,1.786,2.407
		c0.682,0.682-1.992-1.106,0.495,0.772c2.486,1.879,3.715,2.541,3.715,2.541l0.235,0.436l3.328,0.235l1.84,0.494
		c0,0-0.48,1.068,0.129,0.477c0.608-0.59,1.661-1.992,1.661-1.992s-0.338-0.544,0.396-0.35c0.734,0.193,1.358-0.353,1.884,1.052
		c0.527,1.401,0.495,3.299,0.495,3.299s1.96,2.177,1.786,2.858c-0.176,0.684-0.176,1.736-0.176,1.736l-1.228,1.852l-1.053,1.13
		l-1.93,2.105c0,0-0.71-0.462-0.794,0.333c-0.083,0.797-0.785,1.771-0.785,1.771l-0.386,0.29c0,0-0.51,1.056-0.666,1.697
		c-0.156,0.644-0.313,3.1-0.313,3.1s-0.077-1.517,0.644,0.032l0.721,1.547l-0.702,2.027c0,0-0.663,0.604-0.975,1.305
		c-0.312,0.703-0.156,3.529-0.156,3.529l1.832,1.87c0,0-0.34-0.574,0.785,0.347c1.125,0.92,1.125,1.447,1.438,2.5
		c0.312,1.052,0.936,1.929,1.111,2.631s-0.175,0.702,0.526,1.578c0.702,0.877,0.526,1.053,1.229,1.521
		c0.701,0.467,1.383,0.712,1.383,1.381c0,0.67,0.495,1.84,0.495,1.84l0.456,1.172c0,0,0.882-0.651,1.35,2.155
		s-0.589,3.481,0.495,3.533c1.084,0.053,1.391,0.01,2.562,0.01c1.171,0,1.413-0.345,1.673,0.512s1,1.032,2.112,1.909
		c1.111,0.878,1.052,1.053,1.754,1.521c0.702,0.467,2.943,1.11,3.411,1.812c0.468,0.702,0.495,1.599,0.495,2.268
		s0.495,0.669,0.495,1.84c0,1.172,0.495,2.343,0.495,3.012s0.495,3.179,0.495,3.849c0,0.669-1.512,3.593-1.512,3.593l0.682,3.858
		l1.325,4.428c0,0-1.019,4.725-0.272,5.123c0.747,0.397,0.784,2.406,0.784,3.911c0,1.506,0.495,0.67,0.495,2.343
		s0.495,2.008,0.495,2.678c0,0.669-0.545,1.515-0.545,1.515l0.312,4.913c0,0,0.015,1.737,0.728,2.271
		c0.714,0.535-0.601,0.738,0.495,1.339c1.096,0.599,2.207,2.08,2.207,2.08l0.396,1.266l0.473,1.172c0,0,0.459-1.471,0.459,0.185
		c0,1.654,0.495,2.827,0.495,2.827s-1.043,1.354-1.355,2.035c-0.312,0.683-1.54,2.339-0.156,2.963
		c1.384,0.623,2.079,1.526,2.079,1.526s0.572,0.969,1.04,1.748c0.468,0.78,1.091,1.813,1.091,1.813l1.208,2.397
		c0,0,0.604,0.409,1.442,1.111c0.838,0.702,1.715,1.052,1.715,1.052l1.425,0.46c0,0-1.201,0.471,0.152,0.471s1.32,0.009,1.32,0.009
		l0.495,0.487c0,0,0.347-0.79,0.347,0.353s-0.572,0.213,0.495,1.645c1.067,1.43,3.134,2.21,3.134,2.21s0.582,0.463,1.084,0.463
		s1.216-0.774,1.216-0.774s-0.656-0.116,0.364-0.059c1.02,0.059,1.721,0.059,1.721,0.059s0.876,0.371,0-1.063
		c-0.877-1.433-1.579-1.589-1.579-1.589s-1.579-0.312-2.28-0.624s-1.929-0.643-2.105-1.345s-0.331-1.578-0.331-1.578
		s0.467,0.896,0.155-1.131c-0.312-2.027-0.799-1.208-0.312-2.554c0.487-1.344,0.487-1.501,0.487-1.501l1.754-2.807l-0.877-1.832
		l-2.144-2.845l0.312-2.651c0,0,1.793-3.118,1.131-3.898c-0.663-0.779-0.507-0.604-0.819-1.306
		c-0.312-0.702-0.936-0.877-0.312-1.053s2.534,1.403,3.06,0.351c0.526-1.052,0.838-2.046,0.838-2.046v-0.937
		c0-1.227,0.312-1.87,0.312-1.87l1.832-0.468h0.702c0,0,2.3,1.268,2.3,0.312c0-0.955,1.559-2.885,1.559-2.885l0.386-1.214
		l-0.386-1.066l-1.052-1.54v-0.779c0,0-0.908-0.011,0.526-0.487l1.434-0.478l1.022,0.303h3.06c0,0,0.097-1.287,0.623-2.105
		c0.526-0.818,0.495-0.706,0.495-1.542c0-0.837,0.496-1.173,0.496-1.173s1.153-0.871,1.66-1.535
		c0.507-0.662,0.495-1.477,0.495-1.477s1.766-2.206,1.59-2.889c-0.175-0.682-0.174-0.979,0.507-1.795s0.495-1.506,0.495-1.506
		l0.519-1.004l0.439-0.67c0,0,1.443-0.899,0.414-1.002c-1.029-0.104-1.029-1.196-1.029-1.196v-0.702l0.936-1.929
		c0,0,1.032-0.702,2.183-1.754c1.15-1.053,1.852-1.54,1.852-1.54l1.891-0.312l2.495-0.312c0,0,0-0.156,0.701-0.156
		c0.702,0,0.495-0.131,0.495-0.131s1.883-1.896,2.838-3.144c0.955-1.248,0.495-1.71,0.495-2.546c0-0.837,0.605-1.171,0.605-2.176
		c0-1.003,0.495-0.501,0.495-1.506c0-1.003-0.173-2.037-0.173-2.037l0.668-1.644l0.459-0.835l0.434-3.012l-0.177-1.059l0.678-2.456
		l0.477-0.502l2.178-3.591l1.364-1.637l0.38-1.465l0.479-2.51c0,0,0.486-2.342,0.486-3.011s-0.254-2.448-0.254-2.448
		s-0.429-0.605-1.092-0.937c-0.663-0.331-1.364-0.857-1.364-0.857l-2.28-1.228l-2.904-1.969c0,0,0.059-1.189-0.624-1.189
		s-3.489-0.525-4.191-0.525h-1.734h-1.598h-1.579c-0.702-1.402-0.702-1.755-0.702-1.755s1.345,0.176-0.643-0.526
		c-1.988-0.701-0.896-0.701-2.495-0.701h-2.3c0,0,0.272,0.352-1.053,0c-1.325-0.351-0.546,0.176-1.325-0.351l-0.779-0.526
		l-0.702-0.506c0,0-1.637-2.496-1.637-3.12c0-0.623,0.312-1.461,0-2.163c-0.313-0.701-0.293-1.111-0.995-1.89
		c-0.702-0.78-0.702-1.619-0.702-1.619l-0.702-0.876l-0.702-0.703c-0.799-1.324,0.507-1.014-0.799-1.324
		c-1.306-0.313-2.339-0.468-2.339-0.468s-2.846-0.487-3.528-0.487h-1.306c-0.624,0-1.136,0.646-2.202-0.526
		s-1.106-0.394-1.401-1.172c-0.295-0.777-0.606-1.108-0.606-1.108s-2.553-0.175-3.431-2.104c-0.877-1.931-1.93-3.333-1.93-3.333
		v-0.936l-1.501-0.469l-2.183,0.313l-3.333-0.156l-1.188-0.506c0,0-0.909,0.847-2.319-0.351c-1.411-1.199-4.542-1.931-4.542-1.931
		s0.162-2.018-0.78-0.643c-0.941,1.374-2.047,2.573-2.047,2.573s-1.695,1.401-1.852,0.526c-0.156-0.879,0.225-0.038,0.113-1.726
		c-0.113-1.687,0.881-2.661-0.269-2.661s-1.5,0.176-1.5,0.176s-0.678,0.359-1.462,1.423c-0.785,1.063-1.286,1.063-1.286,1.063
		h-1.004c-0.669,0-0.049-0.479-0.984,1.023c-0.936,1.501-1.248,1.813-1.248,1.813s0.195,0.468-0.506,0.993
		c-0.702,0.526-0.117,0.702-1.209,0.526c-1.091-0.176-1.423-0.351-1.423-0.351l-2.456-0.176l-3.333,0.176
		c0,0,0.039,0.351-1.208,0.175c-1.247-0.175-0.424,2.22-1.773-0.526c-1.35-2.745-0.443-3.653-1.35-3.653s-1.106-0.282-1.106-0.907
		c0-0.623-0.175-1.092-0.175-1.092l0.506-2.494c0,0,0.775-2.964,0.775-3.633v-1.004c0,0,1.632-1.588,0-1.506
		c-1.633,0.08-2.607,0.08-3.562,0.08h-1.93l-1.833,0.352c0,0-0.624,0.175-0.624-0.701c0-0.877,0.156-1.852,0.156-1.852l0.624-2.184
		c0,0-0.312,0.059,0.156-0.935c0.467-0.994,0.116-1.17,0.818-1.872c0.702-0.702,0.702-0.389,0.877-1.052s0.175-1.132,0.175-1.132
		l-0.702-0.467l-1.013-0.683h-3.723c-0.799,0-0.799-0.253-0.955,0.838c-0.156,1.093-0.799,3.373-0.799,3.373l-1.228,0.683
		l-1.754,0.467l-2.456,0.623l-0.78,0.156c0,0,1.13,0.508-0.624,0.176c-1.754-0.332-3.898-1.578-3.898-1.578v-0.702
		c0,0-0.487,0.272-0.663-1.229c-0.175-1.501-0.702-3.683-0.702-3.683s-0.474,0.623-0.351-1.093c0.123-1.714,0.175-2.592,0.175-2.592
		l0.702-1.929l0.526-0.702c0,0,1.754-2.28,1.754-3.509s-0.878-0.936,0-1.56c0.877-0.623,1.403-1.247,1.403-1.247l0.701-0.701
		l0.819-0.703l0.936-0.7c0,0,0.896-0.352,1.93-0.526c1.033-0.176,0.545-0.02,1.5-0.644c0.955-0.623,1.832-0.937,1.832-0.937
		s0.78,0,1.442,0.313c0.663,0.312,2.593,0.936,2.593,0.936l0.994,0.506l2.962-0.662c0,0-0.37-0.079,0.468-0.937
		c0.838-0.856-0.039-0.682,1.364-0.856c1.404-0.176,1.447-0.27,2.066-0.176s0.619,0.428,0.619,0.428s-1.174,0.422,0,0.669
		c1.174,0.248,1.876,0.561,2.5,0.561s0.78-0.313,1.481,0.155s0.876,0.117,1.228,0.818c0.351,0.702,0.351,0.176,0.351,0.878
		s0.175,2.514,0.175,2.514s-0.175-1.987,0,0.643c0.175,2.633,0.351,2.808,0.351,2.808l0.78,2.28l2.027-0.176
		c0,0,0.526-0.564,0.526-1.578s0.175,0.39,0-1.794c-0.176-2.183-0.351-2.494-0.351-2.494l-0.351-3.586c0,0-0.175-0.723,0.351-1.599
		c0.526-0.877,0.877-1.209,0.877-1.209l0.819-0.935l0.936-0.663v-1.053l0.701-0.878l2.632-1.616c0,0-0.176-0.137,0.877-0.488
		c1.053-0.35,2.495-1.052,2.495-1.052l1.872-0.955l0.623-0.467l1.15-2.963l0.351-1.754V91.83l0.702-1.052l1.228-0.313l2.456-2.495
		c0,0,0.663,0.176,2.689-1.403c2.027-1.579,2.65-2.28,2.65-2.28s1.15-0.176,1.853-0.176h0.701l0.877-0.506l0.468-1.248l0.313-1.228
		l2.183-1.111l2.65-1.169c0,0,3.587-1.091,4.21-1.755c0.624-0.662,1.403-0.817,1.403-0.817s0-0.508-0.312,1.695
		c-0.312,2.202-0.215,2.456,0.838,1.579c1.052-0.877,0.643-0.702,1.929-1.579c1.286-0.878,1.93-0.604,3.157-1.228
		c1.229-0.624,3.859-1.247,3.859-1.247s-0.643,0.37-1.988-0.508c-1.345-0.876-0.994-0.233-2.046-0.876
		c-1.053-0.644-1.696-0.8-1.696-0.8s-1.715-0.779-0.779-1.307c0.936-0.526,1.773-0.721,1.949-1.579
		c0.175-0.858,0.507-1.481-0.176-1.481h-1.149c0,0-0.955,0.663-0.955-0.156v-1.52l2.28-1.053h2.573h3.586
		c1.033,0,1.734-0.352,1.734-0.352s1.228-0.351,1.852-0.817c0.624-0.468,0.429-0.624,1.131-0.624c0.701,0,1.754,0.039,3.157-0.313
		c1.403-0.351,2.729-1.227,2.729-1.227l1.306-1.58v-1.053c0,0,1.052-0.351-0.526-0.701c-1.579-0.351-2.105-0.527-2.105-0.527
		l-1.93-2.105l-0.955-1.228l-0.312-1.403v-1.052c0-0.702-1.014-4.211-1.014-4.211l0.351-1.754l-1.676,0.526l-3.06,2.28
		c0,0-0.39,0.468-1.774,0.312c-1.384-0.156-1.871,0.04-1.871-0.662v-1.228V47.45v-0.799c0-0.624,0.994-0.254-0.312-0.956
		c-1.306-0.702-1.248-0.136-2.885-1.228c-1.638-1.091-2.982-1.247-2.982-1.247s-2.631-0.312-3.333,0
		c-0.701,0.312-1.871,1.949-1.871,1.949c-0.936,1.637-1.638,2.982-1.638,2.982s-0.877,0-0.877,0.701
		c0,0.702-0.175,1.852-0.175,1.852l-0.877,2.008c0,0-0.02,0.877-0.644,1.228c-0.624,0.351-1.695,1.403-2.807,2.105
		s-0.409,0.545-1.286,0.876s-2.105,0.332-2.105,0.332l-0.975,3.527c0,0-0.701,2.106-1.832,2.457c-1.13,0.35-2.631-0.526-2.806-1.15
		c-0.176-0.624-0.176-0.955,0.175-1.833c0.351-0.876,1.189-2.222,1.189-2.222s0.565-1.111-0.312-1.461
		c-0.877-0.352-3.586-0.878-3.586-0.878s-3.041-0.351-5.185-1.578c-2.145-1.229-2.281-1.053-2.807-1.755
		c-0.526-0.701-1.053-1.5-1.053-1.5l-0.351-0.955v-1.053V47.8l2.377-1.773c0,0-0.273-0.507,0.78-0.857
		c1.053-0.351,2.027-0.526,2.027-0.526s1.13-0.176,2.183-0.487c1.053-0.312,2.027-0.779,2.027-0.779l0.468-0.663l0.838-0.526
		l3.216-3.684c0,0,0.195,1.754,1.345,1.599c1.15-0.156,2.281-0.937,2.281-0.937l1.228-1.364c0,0,0.448-1.911,1.228-1.287
		c0.78,0.625,1.56,0.857,0.78,1.988c-0.78,1.13-0.956,2.104-0.956,2.104s-0.448-0.35,1.579-0.176
		c2.027,0.176,4.386-0.486,4.386-0.486s1.891,1.753,1.384,0.156c-0.507-1.599-0.682-1.774-1.384-2.125
		c-0.702-0.352-1.423-0.526-1.579-1.151c-0.155-0.624-0.351-0.955,0.526-0.955h2.593c0,0,2.183,0.352,2.962-0.701
		c0.78-1.052,2.164-2.397,2.164-2.397s3.139-0.596,0.701-2.339c-2.437-1.743-4.269-1.287-4.736-0.468
		c-0.467,0.818-1.247,1.52-1.247,1.52l-1.56,0.819l-1.403,0.624l-0.624-0.935c0,0,0.995-0.682-0.155-0.682
		c-1.15,0-1.852-1.034-1.852-1.034l-0.644-2.475c0,0-0.422-0.125-1.259-0.125c-0.836,0-1.373-1.155-1.841-0.427
		c-0.467,0.726-1.11-0.676-1.11,1.253v2.28c-0.936,1.521,0.195,1.054-1.462,1.521c-1.656,0.468-2.904,0.936-2.124-0.467
		c0.779-1.404,1.715-2.34,0.779-2.34s-2.378,0.156-3.216,0.312s1.267,2.183-0.176,2.806c-1.442,0.624-2.104,0.624-2.104,0.624
		h-2.768c-0.78,0-2.145,0.312-4.074-0.312c-1.929-0.624-0.701-1.247-2.631-0.935s-5.809,1.247-6.491,1.773
		c-0.682,0.526-2.105-0.526-2.105-0.526l-1.403-0.156c0,0-2.807,0.351-3.157-0.623c-0.351-0.975,0.648-0.897-0.351-1.325
		l-0.999-0.428c0,0-4.264-0.586-5.141-0.742c-0.877-0.156-1.481-0.468-2.495-0.468s-0.975,0.156-2.592-0.155
		c-1.618-0.312-3.645-0.312-3.645-0.312s-0.39,0.312-1.968,0.312c-1.579,0-1.345-1.131-2.865-0.488s-0.819,1.111-1.872,1.111
		c-1.052,0-3.274,1.17-4.365,0.818c-1.092-0.351-1.072,0.272-2.476-0.351c-1.403-0.624-1.521,0.059-2.515-0.936
		c-0.994-0.994-2.124-1.521-2.962-0.994c-0.839,0.526,2.495,0.526-2.593,0.526c-5.087,0-3.762-0.526-4.424-1.054
		c-0.663-0.526-0.488-0.526-2.768-0.526h-2.807c0,0-0.818-0.175-1.754-0.175h-2.807c-0.779,0,0.175-0.878-1.93,0.175
		c-2.104,1.053-2.592,1.053-2.592,1.053s-4.834,0.174-6.004,0.351c-1.169,0.176-2.631-0.292-3.333,0.176
		C33.009,29.499,31.43,30.434,31.43,30.434z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M101.597,20.923
		c-0.857,0.156-1.929,1.441-2.631,1.617c-0.702,0.176,1.063,0.01-1.35,0.01s-1.935-1.607-2.914,0.565
		c-0.979,2.173-1.506,3.323-1.506,3.323s1.004,0.206,2.175,0.206s1.311-0.206,2.245-0.206s-1.382-1.365,1.7-0.684
		c3.082,0.684,4.42-0.017,3.751,0.684c-0.669,0.701-2.671,0.701-1.004,0.701c1.668,0,2.73,1.014,2.73,1.014
		c-1.391,0.358-4.249,0.409-3.197,1.345c1.053,0.936,1.638,1.286,2.261,1.462c0.624,0.176,0.452,0.01,1.923,0.01
		c1.47,0,2.288-0.692,2.288-0.692s1.52-0.156,2.962-0.156s0.741-0.312,2.145,0c1.403,0.312,1.754,0.487,1.754,0.487
		s0.936,0.175,2.105,0.175s1.326-0.175,1.326-0.175s-1.093,0.147,0.369-0.404c1.463-0.551,1.813-0.063,1.989-0.707
		c0.175-0.644-0.352-0.819-0.526-1.521c-0.176-0.701,3.478-3.365,1.057-3.962c-2.421-0.599-2.811,0.454-3.513,0.629
		c-0.702,0.176-1.871-0.351-1.871-0.351s0.078-0.877-0.779-0.702c-0.858,0.176-1.91,0.878-1.91,0.878l-2.807-1.754
		c0,0-0.429-0.235-1.209-0.858c-0.779-0.623-2.411-1.422-2.411-1.422s-0.356,0.488-1.467,0.488s-3.552-1.115-3.552-1.115
		L101.597,20.923z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M129.118,22.365
		c-2.339,0.526-3.84,1.228-3.84,1.228s-0.113,1.713,0.878,1.713s-0.314,0.019,0.847,0.009c1.161-0.009,2.224-0.127,2.224-0.798
		s1.397,0.926,1.841,0.128c0.443-0.798,1.279,1.168,1.446-0.798c0.167-1.965,0.495-1.965,0.495-1.965L129.118,22.365z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M140.21,21.387c0,0-0.918,0.803-1.951,0.978
		c-1.032,0.176-0.558,0.009-1.395,0.009c-0.837,0-0.669-0.093-1.506,0.566c-0.837,0.66-1.325,0.454-0.495,1.41
		c0.83,0.957,0.289,0.009,1.332,0.009c1.043,0,1.043,1.076,1.043,0.158c0-0.917,1.132-0.917,1.132-0.917s2.622,0.607,2.844-0.401
		C141.437,22.19,140.21,21.387,140.21,21.387z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M145.731,23.6h-1.673
		c0,0,0.314-0.716-1.004,0.496c-1.318,1.211-0.629,1.092-1.318,1.718c-0.689,0.626-0.495,1.716-0.495,1.716s2.148,0.087,3.319,0.087
		c1.171,0,1.728-0.512,2.342,0.451c0.614,0.964,0.283,0.964,1.083,0.964c0.799,0,2.096,0.184,2.096,0.184s0.652-0.885,1.958-0.885
		s2.807,0.857,2.807,0.857l1.761,2.349l1.65,2.057l1.267,1.578c0,0,0.596,0.31-1.412,0.31s-2.51,0.13-2.51,0.13l-0.836,0.479
		l-1.339,0.429c0,0-0.765,1.049-0.765,2.16c0,1.112,0.936,3.158,1.559,3.509c0.624,0.352,1.93,0.878,2.632,0.878
		s1.928,0.159,1.928,0.159l1.32-1.307l1.138-0.432c0,0,1.754-0.857,1.754-2.008c0-1.15,0.495-0.739,0.495-1.743
		s-1.135-1.101-0.32-1.22c0.814-0.119,0.097-0.468,1.579,0c1.481,0.467,4.444,1.248,4.6,0.467c0.156-0.778,0.495-2.091,0.495-2.091
		l-1.188-1.571l-1.45-0.703l-1.754-3.274v-1.54c0,0-1.053,0.175-1.755-0.176c-0.701-0.351-1.734-0.563-2.57-1.188
		s1.893-1.487-1.84-1.057c-3.732,0.431,0.398,2.644-3.732,0.431c-4.131-2.213-3.294-2.213-4.466-2.213h-2.844H145.731z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M147.205,18.117h-2.143h-0.837v0.494
		c0,0-0.573,2.156,0.335,2.156c0.907,0,2.677,0.62,3.681,0.62s-0.167,0.172,1.673,0.172c1.84,0,3.179,0.322,3.848,0.322
		c0.669,0,3.513,0.331,3.513,0.331s0.669-0.84,0.836-1.445c0.168-0.604,1.492,0.514,0.495-0.589
		c-0.997-1.102,0.174-1.102-1.834-1.102c-2.007,0-4.167,1.102-5.262,1.102c-1.096,0-2.434,1.103-2.769,0
		C148.408,19.076,147.205,18.117,147.205,18.117z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M153.696,11.255h-2.184
		c-1.096,0-1.598,0.495-1.598,0.495s-2.292-1.02-0.348,0.352c1.945,1.372,1.752,2.022,2.94,2.115
		c1.189,0.094,2.323-1.725,3.044-1.725c0.721,0,0.495-1.732,0.495-1.732L153.696,11.255z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M157.61,14.717
		c-2.06,0.933-3.781,0.913-2.921,1.508c0.861,0.597,2.159,1.396,3.125,1.396s1.97-1.44,2.472,0.008
		c0.502,1.447,1.506,0.488,2.343,0.488c0.837,0,2.805-0.803,3.514-1.522c0.708-0.72,1.547-0.264,2.112-1.07
		c0.564-0.807,1.009-0.357,2.125-0.807c1.116-0.451,3.56-0.671,5.768-1.473c2.208-0.803,2.877-0.803,3.881-0.803
		s2.25,0.411,3.346-0.388c1.096-0.798,2.678-1.888,2.678-1.888s2.299,0.316,0.28-0.408c-2.018-0.724-2.574-1.339-3.519-0.724
		c-0.945,0.614-1.657,0-3.021,0.176c-1.364,0.174-2.241,0.174-3.645,0.174h-2.749h-4.833c-1.014,0-0.417,0.782-1.42,0.782h-4.852
		c0,0,2.677,2.275,3.346,2.275c0.669,0,2.175,1.164,0.502,1.164s-1.841,1.163-3.681,0c-1.84-1.164-2.992-2.328-2.992-1.164
		c0,1.164-0.856,2.276-0.856,2.276H157.61z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M184.046,13.605h-1.841
		c0,0-1.673-0.122-2.175,0.494c-0.502,0.618-4.642,1.25-5.635,1.424c-0.995,0.176-0.495,2.098-0.495,2.098h2.783
		c1.979,0,0.502,0.496,2.845,0.496c2.342,0,3.514,0.807,3.514,0.807l2.007,1.254c0,0,2.61,1.694,2.61,2.558
		c0,0.863-0.363,2.689,0.992,3.703c1.356,1.013,2.058,1.227,2.058,2.066c0,0.838-0.526,1.306-0.526,1.306s-0.035,0.37-0.783,0.37
		s-0.804,1.354-1.74,1.354c-0.937,0-1.94,1.785-1.94,1.785s-1.559,3.778-1.559,4.48s0.779,4.912,0.779,4.912l2.72,2.384l3.545,1.338
		c0,0-1.694,0.463,0.175,0.463c1.869,0,3.354-1.709,3.365-2.431c0.01-0.722,0.495-0.722,0.495-0.722s-0.672,0.682,0.05,0
		c0.723-0.681,3.841-4.892,4.542-4.892s1.404-0.526,1.404-0.526l1.793-1.188c0,0,3.469-0.468,4.521-0.624
		c1.053-0.156,2.027-0.644,2.027-0.644s1.773-2.485,3.43-3.41c1.657-0.926,2.829-2.215,3.665-2.215c0.837,0,3.179,1.289,4.351,1.289
		c1.171,0,3.179-1.289,4.35-1.289s0.72,0.592,1.506,0s1.41,0.07,1.41-0.748c0-0.819-0.374-1.08,0.495-1.3s1.376-0.395,1.376-0.395
		l-0.938-1.99c0,0-2.343-2.214-1.506-2.214c0.836,0,2.24,1.163,3.127-0.524s1.222-2.308,2.059-2.308s1.171-0.589,1.84-0.589
		c0.67,0,1.004,0.354,1.339-1.102c0.334-1.456,0.495-2.254,0.495-2.254s1.011-2.712,1.68-3.217c0.669-0.506,1.841-1.164,3.179-1.164
		c1.339,0,2.845-0.064,2.845-0.064s0.021,0.423,0.021-0.494s0.629,0.151-2.289-0.783c-2.918-0.934-3.755-0.934-4.592-0.934
		c-0.836,0-0.719,0.39-1.338-0.372c-0.619-0.76,0-1.508-0.669-1.508h-2.845c-1.339,0-1.861,0.748-2.914,0.748
		c-1.052,0-2.343-2.022-3.276-0.748c-0.934,1.274-2.677,1.88-4.016,1.88h-2.51c-0.501,0,1.908-0.43-1.25-0.606s-3.577-0.606-5.262,0
		c-1.686,0.606-5.2,0.606-5.2,0.606H206.8h-4.518h-3.513h-3.681h-3.346l-0.721,0.934L184.046,13.605z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M112.297,69.903h-2.705
		c0,0,1.063,0.495-2.062,0.495s-4.18,0.909-4.18,0.909l4.18,1.396l2.229,0.47l2.538,0.484l0.877-0.343c0,0,0.18-0.767,0.18-1.525
		C113.354,71.029,112.297,69.903,112.297,69.903z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M108.108,75.881l-0.578,1.004l-1.898,2.49
		l-0.394,2.362c0,0,0.518,2.002,1.405,0.081c0.887-1.922,1.894-4.431,1.894-4.431s-0.805,0.414,0.459-0.669
		c1.265-1.084,1.432-1.084,1.432-1.084L108.108,75.881z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M114.946,75.14
		c-1.097,0-1.825,0.035-1.097,0.742c0.729,0.707,0.154,1.087,0.154,2.175c0,1.086,0.106,2.164,0.942,1.086
		c0.837-1.077,1.673-1.779,2.343-1.779c0.669,0-0.393,0.776,0.495,0c0.887-0.775,1.219-0.262,1.198-1.243
		c-0.021-0.98,1.151-0.98-0.355-0.98H114.946z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M116.477,81.57c0,0-0.82-0.002-1.724,0.788
		l-0.903,0.79c0,0,2.628,0.85,2.628,0S116.477,81.57,116.477,81.57z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M164.221,65.206
		c0,0-0.409-0.214-1.228,0.838c-0.819,1.053-1.39,1.82-2.456,2.593s-1.873-1.604-1.756,0.007c0.119,1.611,0.689,2.052,0.689,2.052
		s0.123,0.392,1.892,0.392s3.777,0.266,4.446,0.266c0.669,0,1.649,0.099,1.745-0.923c0.096-1.021-0.741-1.021-0.741-1.021
		s-1.804,0.213-1.506-1.137c0.298-1.352,0.335-3.579,0.335-3.579L164.221,65.206z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M97.616,124.736
		c0-0.669,1.603-3.084,2.272-3.084h4.844c0,0,4.798-0.496,5.749,1.295c0.951,1.789,2.298,1.957,3.368,2.458
		c1.07,0.502,0.778,0.988,1.703,1.079c0.924,0.094,1.622,0.595,0.495,0.929c-1.128,0.335-1.214-0.817-2.198,0.011
		c-0.983,0.826-1.81,0.547-3.368,0.547c-1.558,0-2.373-1.227-2.373-1.227s0.393-1.941-0.986-1.941h-2.391
		c0,0-0.047-0.577-1.206-0.657c-1.159-0.078-2.969,0.657-2.969,0.657L97.616,124.736z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M110.481,131.261h-2.373
		c0,0,0.888,1.905,2.373,1.673C111.966,132.703,110.481,131.261,110.481,131.261z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M118.125,130.766c1,0-3.767,1.341-1,1.341
		c2.767,0,3.175,0.914,5.015,0c1.841-0.913,1.506-1.341,2.343-1.341c0.836,0,1.196,0.056,1.171-0.495s4.019,0.308-1.253-0.726
		c-5.272-1.035-5.276-1.035-6.276-1.035C117.125,128.51,117.125,130.766,118.125,130.766z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M110.481,113.693c0,0,0.998,1.172,0,1.507
		s-2.217,1.841-0.998,1.841s3.186-0.813,3.382-1.829C113.062,114.195,110.481,113.693,110.481,113.693z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M131.343,130.766
		c-0.837,0-3.346,0.439-2.175,1.341s1.506,1.794,2.844,0.901C133.351,132.117,131.343,130.766,131.343,130.766z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M135.487,133.754
		c-0.209,0.119,0,0.227,0,0.519c0,0.295,0.444,0.78,0.913,0.78c0.467,0,2.246,0.526,1.052-0.667
		C136.26,133.193,135.487,133.754,135.487,133.754z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M139.031,135.929
		c-0.176,0.282,0.491,0.879,0.491,0.879s0.596,0.864,0.772,0.747c0.176-0.116,0.744,0.079,0.495-0.527s-0.693-0.696-0.863-1.028
		c-0.169-0.332-0.453-0.182-0.609-0.336C139.16,135.509,139.031,135.929,139.031,135.929z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M209.233,133.813l0.467,0.994
		c0,0,0.947,1.626,1.226,0.211c0.278-1.416,0.243-1.968-0.29-1.954C210.104,133.08,209.233,133.813,209.233,133.813z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M213.247,136.092
		c-0.874,0.809-1.576,1.183-0.962,1.838s2.818,1.106,2.911,0.005c0.093-1.104,1.386-1.479-0.093-1.843
		C213.625,135.728,213.247,136.092,213.247,136.092z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M236.317,36.141
		c-1.73,0.28-2.854,0.562-3.228,0.562s0.102-0.369-0.495-0.369c-0.597,0-1.804,0.091-1.804,0.091s-0.97-0.37-1.207,0
		c-0.236,0.372-2.856,1.494-2.856,1.494s-0.195-0.126-0.195,0.455s-0.834,0.13,0.382,0.832c1.216,0.701,1.216,0.351,1.684,0.701
		c0.468,0.352,0.843,0.445,1.31,0.725c0.468,0.281,1.169,0.109,1.169,0.109s1.17,0.166,2.106-0.203
		c0.935-0.367,0.871-0.631,1.871-0.631s-1.9,0.402,1.342,0.069c3.242-0.331,3.743-0.035,3.71-0.77c-0.033-0.736,0.094-0.07,0-1.193
		c-0.094-1.122,0.022-1.195-0.655-1.777C238.773,35.652,236.317,36.141,236.317,36.141z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M247.105,56.63
		c-0.356,0-0.794-0.375-1.277,0c-0.482,0.374-1.418,0.655-1.792,1.122c-0.374,0.468,0.507,0.642-0.495,0.789
		c-1.001,0.146-1.104-0.89-1.146,0.002c-0.043,0.893-0.495,1.668-0.495,2.039c0,0.372-0.495,0.685-0.495,2.043
		s-0.45,0.76,0.062,1.358s0.444,0.633,1.447,0.317c1.002-0.314,1.067-0.255,1.937-0.748c0.87-0.492,0.589-0.667,1.244-0.667
		c0.655,0,1.012-0.075,1.012-0.075s0.38-0.303,0.526-1.316c0.146-1.014,0.495-2.025,0.495-2.396c0-0.372,0.495-1.207,0.495-1.579
		s1.37-0.676,0.495-1.113c-0.875-0.438-1.896-0.438-1.896-0.438L247.105,56.63z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M249.904,52.971v1.207
		c0,0.372-0.495,0.375,0,0.836c0.495,0.459,0.028-0.042,0.495,0.459c0.466,0.502,0.495,0.654,0.495,1.025
		c0,0.372,0.496,0.465,0.496,0.465s-0.848,0.486,0.091,0.486s1.319,0.535,1.319,0.535s0.177-1.674-0.195,0.288
		c-0.371,1.962,0.414,1.332-0.464,1.962c-0.878,0.628-1.063,0.213-1.649,0.605c-0.587,0.394-0.587,2.157-0.587,2.157
		s-0.042,0.987,0.658,0.987s1.917-0.407,1.671,0.002c-0.245,0.409-1.198,1.007-1.764,1.007c-0.565,0-1.996,0.789-1.281,0.881
		c0.715,0.093,1.931,0.004,2.302,0.004c0.371,0,1.713-0.173,2.274-0.36s2.831-0.524,2.831-0.524s0.835-1.009,1.393-1.009
		c0.557,0,1.658-1.011,1.658-1.011s0.335,0.023,0.335-0.44s0.297-1.693-0.247-1.787c-0.543-0.093-2.025,0.029-2.211-0.512
		c-0.186-0.543-0.391-1.546-0.391-1.546s-0.281-0.842-0.749-1.685c-0.468-0.841-0.95-1.941-1.403-2.151
		c-0.454-0.21,0.309-0.138-0.454-0.302c-0.763-0.166-1.275-0.438-0.95-1.008s1.59-1.093,0.561-1.356
		c-1.029-0.264-1.349-0.003-1.349-0.003s1.817-1.542,1.068-1.542s-1.964,0.468-2.526,0.468s-1.429,0.098-1.429,0.098V52.971z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M271.355,41.288
		c-0.557,0-1.218,0.841-1.686,0.935s-1.073-0.371-1.285,0.002c-0.212,0.373,0.063-0.951-0.496,0.507
		c-0.559,1.456-0.372,0.052-0.933,2.018c-0.562,1.964-1.084,2.585-0.495,3.211c0.589,0.624,0.655,1.119,1.15,1.653
		s2.058,1.123,2.058,1.123s0.724,0.401,1.205-0.094s-0.512-0.495,0.495-0.495c1.007,0,2.51-0.722,2.51-0.722s0.126-0.721,0.936,0
		c0.81,0.722,0.881,0.662,1.216,1.311c0.336,0.649,0.495-0.01,0.495,0.649s0.831,0.649,0.496,1.123
		c-0.336,0.474-0.991,1.502-1.552,1.69c-0.562,0.188-0.979,0.939-1.237,0.001c-0.26-0.937-0.541-1.662-0.541-2.188
		c0-0.526,1.479-1.644-0.281-0.62c-1.76,1.024-1.76,1.86-1.76,2.324v2.877c0,1.3-0.515,2.471-0.515,2.471s-0.153,0.199-0.71,0.199
		s-0.372,0.35-1.578,0.35c-1.207,0-2.228,0.267-2.228,0.267s-0.914,0.427-0.914,0.891s-0.088,0.755-0.495,1.021
		c-0.408,0.267,1.5-0.894-0.495,0.649c-1.995,1.544-1.547,2.027-2.273,1.544s-0.495-0.708-0.495-0.708s-1.007,1.38-1.391,1.718
		c-0.385,0.338-1.468,1.868-1.647,2.396c-0.18,0.527-0.645,0.527-1.015,0.527c-0.372,0-0.929,0.401-1.393,0.401
		c-0.464,0-1.351-1.06-1.975-0.401c-0.624,0.658-0.482,1.25-1.23,1.343c-0.749,0.094,0.443,0.004-2.178,0.004
		s-1.216,1.345-1.216,1.345s1.991,1.365,2.646,1.646c0.655,0.281,1.202-0.199,1.59,0.749c0.389,0.948,0.389,1.226,0.389,1.226
		s0.481,3.135,0,3.62c-0.482,0.486-0.107-0.075-0.576,0.861c-0.467,0.935-0.375,0.747-0.655,1.122
		c-0.281,0.375,0.094,0.748-0.749,0.654c-0.842-0.092-3.517-0.131-3.517-0.131s-1.641-0.149-2.103-0.431
		c-0.461-0.28-1.21-0.374-1.771-0.561c-0.561-0.186-1.684-0.186-1.684-0.186s-0.655-0.188-1.216,0.374s-0.428,0.239-0.842,0.843
		c-0.414,0.602-0.495,2.746-0.495,2.746s-0.495,2.785-0.495,3.25s-0.495,0.649-0.495,1.299c0,0.649,0.845,0.12,0.175,1.405
		c-0.67,1.287-0.67,2.494-0.67,2.494s-0.64,0.78,0.202,0.968s1.92,0.003,2.291,0.003c0.372,0,0.836,0.576,1.207,0.576
		s0.431,1.105,0.992,1.292c0.562,0.187,1.404,0.374,1.404,0.374s0.684,0.749,1.216,0s0.795-1.217,0.795-1.217
		s-1.133-0.282,0.954-0.14c2.087,0.14,2.087,0.14,2.648,0.14s-1.137,0.605,1.123-0.093c2.26-0.697,2.994-1.215,3.087-2.058
		c0.093-0.841-0.561,0.094,0.093-1.122c0.655-1.217,0.842-2.152,0.842-2.152l2.62-2.526c0,0,2.433-1.309,2.807-1.497
		s0.842,0.749,0.936-1.029c0.094-1.778-0.468-2.059,0.188-2.433c0.655-0.374,0.842-0.562,0.842-0.562h2.058
		c0.375,0,2.059,0,2.808-0.28c0.748-0.281,1.496-0.654,1.496-0.654s-2.269-1.966,1.532-1.123c3.801,0.841,2.117,0.468,2.21,1.216
		c0.093,0.748,0.655,2.246,0.655,2.246s-1.31-0.375,1.403,1.028s1.497,0.187,2.807,1.497s1.123,1.128,2.433,1.871
		s0.971,0.082,1.871,1.444s1.076,1.081,1.076,1.83s-0.889,0.468,0,1.404c0.888,0.935,0.701,1.496,1.449-0.281
		c0.749-1.778-0.226-1.754,0.495-2.529c0.722-0.774,2.125-0.651,1.844-1.307c-0.28-0.655-0.748-0.935-1.496-1.217
		c-0.749-0.279-0.941-0.374-1.311-0.467c-0.368-0.094-0.842-0.094-2.432-1.591c-1.591-1.497-1.778-0.561-2.526-2.152
		c-0.749-1.591-1.497-2.807-1.497-2.807s-0.748-0.122-0.842-1.029c-0.093-0.905-0.093-1.169,0.468-1.081
		c0.562,0.088,0-1.258,1.871,1.175c1.871,2.433,0.842,2.433,2.807,2.9c1.965,0.467,2.151,0.749,2.619,0.655
		c0.469-0.094,1.995-0.236,2.433,0c0.438,0.237,0.842,0,1.403,0.935c0.562,0.936,0.495,1.994,0.495,1.994s0.498,2.042,0.498,3.248
		c0,1.207-2.021,0.839-0.15,1.682c1.871,0.842,1.351,1.403,3.181,1.311c1.83-0.094,2.094-0.655,1.83-0.094s-0.708,0.28-0.708,1.496
		c0,1.217,0.444,2.151,0.444,2.151s-0.143,0.241,0.352,0.375c0.493,0.134,1.169,0.28,1.544,0c0.374-0.281,1.216-0.654,1.216-0.654
		s0.201-0.047,0.201-0.789c0-0.743,1.191-0.018,0.495-1.485c-0.696-1.469-0.041-1.094-1.07-1.749s-1.31-1.223-1.31-1.749
		s1.59-0.964,1.59-0.964l1.503-0.272l0.93-0.757c0,0,1.122-0.375,1.31,0c0.188,0.374,0.936,0.935,1.029,1.73
		c0.094,0.795,0.468,1.918,0.936,2.573s1.217,1.028,1.123,1.59s-0.316,1.356,0.094,1.591c0.409,0.234,1.496,1.754,2.338,1.813
		c0.843,0.059,0.655-0.877,1.311-0.69c0.654,0.188,3.181-0.467,3.181-0.467s0.374-0.749,0.561,0.188
		c0.188,0.935-1.161,0.911,0.496,1.063c1.656,0.153,1.996-0.208,1.938,0.246c-0.059,0.453-0.146,0.453,0.501,0.453
		c0.646,0,0.995-0.172,1.464-0.64c0.467-0.468,1.122-1.123,1.122-1.123s-0.135-0.936,0.918-0.282
		c1.053,0.655,0.497-1.229,1.14,0.655c0.645,1.885,0.496,3.104,0.496,3.104s-0.846,3.353-0.934,4.288
		c-0.088,0.935-0.176,1.777-0.438,2.151c-0.264,0.375-0.995,1.028-0.995,1.028s-0.177,0.37-0.919,0.37s-1.114,0.226-2.042,0.226
		c-0.929,0-1.578,0.374-2.043,0.374c-0.464,0-3.063,0.29-3.435,0.29c-0.37,0-2.32-0.467-2.32-0.467s-3.742-0.793-4.21-0.885
		c-0.467-0.094-2.525-0.655-3.461-1.217s-2.713-0.937-2.713-0.937s-0.403-0.653-1.018-0.653s-2.164,0.093-2.164,0.093
		s0.094-1.685-0.561,0.936c-0.655,2.619-0.655,2.713-0.655,2.713s-0.999,0.912-2.02,0.912c-1.021,0-2.542,0.539-2.507,0.001
		c0.035-0.539-1.386-1.568-2.397-1.756c-1.011-0.186-2.525-1.59-2.619-2.058s-1.403-0.655-1.403-0.655l-2.807-0.279l-3.742-3.743
		l0.374-1.403c0,0,0.281-2.059-0.187-2.807c-0.468-0.749-0.936-1.216-1.31-1.216s0.105-0.468-1.403,0.188
		c-1.509,0.654-1.497,1.122-2.62,1.215c-1.123,0.094-0.936,0.562-3.181-0.093c-2.245-0.654-2.208-0.798-4.117-0.842
		c-1.907-0.045-3.648,0.749-3.648,0.749s-0.188,0.561-1.122,0.655c-0.936,0.093-1.404-0.937-1.685,0.093
		c-0.28,1.03,0.548,0.54-0.468,1.217c-1.015,0.677-1.777,1.122-1.777,1.122l-1.871,0.655c0,0,0.561,0.188-0.936-0.094
		c-1.497-0.28-0.526,0.188-2.059-0.468c-1.532-0.655-2.245-0.841-2.245-0.841s-1.31-0.375-1.59,0.092
		c-0.281,0.469-0.749,0.375-0.842,0.842c-0.094,0.468-1.122,1.708-1.403,2.058c-0.28,0.352-1.029,0.79-1.029,0.79
		s-1.596,0.075-2.338,1.082s-1.123,2.245-1.31,2.9s-0.495,1.607-0.495,2.469s1.135,0.481-0.495,1.579
		c-1.629,1.098-1.723,1.565-1.723,1.565l-1.403,1.017c0,0,0.611,0.401-0.291,0.401s-1.861,0.359-2.704,1.107
		c-0.842,0.749-0.842,0.094-1.216,1.685c-0.375,1.591-1.591,2.526-1.871,2.993c-0.281,0.468-1.485,3.183-1.965,4.023
		c-0.479,0.843,0.319,0.053-0.495,0.843c-0.814,0.788-0.832,0.373-1.271,1.496s-0.99-0.778-0.496,1.763
		c0.496,2.54,0.496,3.102,0.496,3.102l0.175,0.843c0,0,2.246,2.889,0.936,4.584s-2.296,2.654-2.296,2.654s-0.345,0.377-0.345,1.174
		c0,0.794,0.478,3.656,0.478,3.656s0.263,0.842,0.176,1.497c-0.088,0.655-1.158-1.28,0.087,1.123
		c1.246,2.403,4.053,4.958,4.521,5.52s1.777,1.029,1.965,1.871c0.187,0.842,0.562,1.403,0.562,1.778
		c0,0.373,2.151,4.864,2.151,4.864s-2.088-0.97,0.936,0.825c3.023,1.793,2.807,1.793,3.742,1.98s0.082,0.044,1.938,0.044
		c1.856,0,0.587-0.137,2.459-0.511c1.871-0.375,1.625-0.988,3.648-1.076c2.022-0.088,1.485-0.352,2.286-0.088
		c0.801,0.263,0.895,0.263,1.269,0.351c0.375,0.088,2.059,0.353,2.713,0.353c0.655,0-0.187,0.174,1.685-0.527
		s4.491-1.725,4.491-1.725s-1.976,0.187,0.467-0.094c2.444-0.281,0.936-0.842,2.994-0.375c2.059,0.469,2.433,0.748,2.433,0.748
		s1.403,1.229,1.684,1.973c0.281,0.74-0.787,1.52,1.162,1.52s3.071-1.369,3.527,0.002c0.457,1.372-0.162,1.219,0.644,1.652
		s0.585,0.188,1.228,0.374c0.643,0.188,1.485,1.217,1.485,1.592c0,0.374,0.281,3.46-0.094,3.929
		c-0.374,0.468-0.374,0.666-0.562,1.018c-0.187,0.35-0.935,0.291-0.654,1.32c0.281,1.03,0.654,1.871,0.654,1.871
		s-0.28,0.563,0.188,1.311s1.029,1.496,1.684,2.245s1.871,2.525,1.871,2.525c0.093,0.937,0.375,0.937,0.561,1.592
		c0.188,0.653-0.842-1.03,0.655,2.29c1.497,3.323,1.684,3.416,1.684,3.416s0.842,3.275,0.842,4.022c0,0.749,0.468,0.749,0.468,1.872
		v1.122c0,0,0.654,3.274-0.094,3.274c-0.749,0-1.31,1.029-1.31,1.029l-1.31,1.777c0,0-0.749,1.777-0.561,2.339
		c0.187,0.562,0.28,0.936,0.28,1.311v1.028v0.374c0,0-0.562,0.983-0.187,2.644c0.374,1.661,1.964,3.719,2.152,4.093
		c0.187,0.375,1.31,2.526,1.497,2.9c0.187,0.375,0.28,0.468,0.28,0.937c0,0.467,0.374,1.496,0.374,1.496v2.525
		c0,0,0.281,0.281,0.374,0.655c0.094,0.375,0.1,2.994,0.655,3.929c0.556,0.937,0.818,3.743,0.818,3.743s-0.14,0.374,0.878,1.31
		c1.017,0.936,1.392,1.567,1.392,1.567s1.31,1.987,1.403,2.361c0.094,0.375-1.685-3.274,0.654,1.217
		c2.34,4.49,1.871,5.333,1.777,5.801c-0.093,0.468,1.123,1.848,1.497,1.936c0.374,0.087,1.965-0.346,2.339-0.626
		c0.374-0.281,1.685-0.561,2.714-0.654c1.028-0.094,2.339,0,2.807,0.279c0.468,0.281,0.094,0.562,1.028,0.375
		c0.936-0.188,2.714-0.281,3.462-0.654c0.748-0.374,0.251,0.094,1.685-1.123c1.432-1.217,2.058-1.59,2.338-1.965
		c0.281-0.374,2.433-2.246,2.433-2.246s-0.374-0.467,1.217-1.216c1.59-0.748,2.058-0.187,2.058-1.216s0.188-2.006,0.188-2.006
		l1.497-1.455l0.561-0.562l0.749-2.151c0,0-0.936-1.778-0.749-2.246c0.188-0.469,1.497-1.591,1.497-1.591l1.217-0.655
		c0,0,0.006,0.188,0.62-0.279c0.613-0.469,1.882,0.066,1.882-0.862c0-0.928,1.424-1.769,0.959-2.741
		c-0.464-0.971,0.094-1.169-0.374-1.823c-0.468-0.655-0.468-0.937-0.562-1.31c-0.094-0.374-0.187-1.311-0.187-1.311
		s0.722-2.215,1.216-2.713s0.468-0.188,0.936-0.936s0.936-1.684,0.936-1.684l0.443-0.479c0,0,2.737-1.205,3.205-1.767
		c0.469-0.562-0.226-0.449,0.496-0.739c0.721-0.291,0.908-0.478,1.188-0.853c0.28-0.374,3.181-3.368,3.181-4.021
		c0-0.655-1.029-2.06-0.936-2.433c0.094-0.374,0.842-1.591,0.842-1.591s-0.374-2.023-0.28-2.462
		c0.093-0.438-0.468-2.122-0.468-2.122s-0.55-1.591-0.637-2.06c-0.088-0.467-2.357-5.555-2.357-6.08
		c0-0.527,0.094-1.029,0.188-1.497s0.654-1.965,0.842-2.339s-2.619,3.742,0.889-1.496c3.509-5.24,2.386-2.9,2.854-3.275
		c0.468-0.374,0.936-0.562,0.936-0.562s0.748-2.899,1.31-2.993s0.937-0.73,0.937-0.73s0.093-0.088,1.309-0.438
		c1.217-0.353,1.685-1.451,2.059-2.198c0.374-0.749-0.881-0.688,0.495-1.188c1.376-0.498,2.031-0.965,2.47-1.434
		c0.438-0.467,3.21-3.554,3.49-4.49c0.281-0.936,0.496-1.688,0.496-1.688s0.476-0.277,0.476-0.65c0-0.371,0.151-0.655,1.274-1.498
		c1.122-0.841,0.748-0.467,1.122-1.496c0.375-1.029,0.937-3.182,0.937-3.182s1.028-2.059,1.028-2.432c0-0.375-0.4-1.844-0.28-2.62
		c0.12-0.777,0.561-1.31,0.28-1.777c-0.28-0.469-2.389,1-2.389,1s-1.915,0.965-2.757,1.338c-0.842,0.375-1.572,0.655-2.713,0.655
		s-4.117-0.28-4.117-0.28s0.655-0.748-0.187-0.748s-2.807-1.872-2.807-1.872s-0.654-2.619-1.123-2.9
		c-0.468-0.28-1.87-1.215-2.339-1.87c-0.468-0.655-0.936-1.217-1.31-1.498c-0.374-0.28-2.151-0.935-2.151-1.496
		s-0.936-2.058-0.936-2.058s-0.468-2.621-0.748-3.182c-0.281-0.562-2.714-1.684-3.088-2.246c-0.374-0.561-0.655-1.402-0.655-1.87
		s0.749-2.152,0.749-2.152s-0.655-2.151-1.123-2.619s-0.748-0.035-1.029-0.823c-0.28-0.791-0.468-1.422-0.654-1.796
		c-0.188-0.375-0.375-0.094-0.468-0.562c-0.094-0.467-2.397-3.649-2.485-4.116c-0.088-0.468-0.438-0.749-0.614-1.217
		s-0.362-1.591-0.362-1.591s-0.094,0,0-0.467c0.094-0.468,0.187-0.843,0.187-0.843l1.229-0.28c0,0-0.479-1.311,0.456,0.374
		s-0.842-0.841,1.122,2.245c1.966,3.088,0.937,2.527,2.246,3.368c1.31,0.843,4.864,5.895,4.864,5.895s0.188,0,0,0.655
		c-0.187,0.653-0.187,0.279,0.094,1.309c0.281,1.029,2.357,4.305,2.357,4.305s0.824-0.468,1.572,1.028
		c0.748,1.497,0.374,1.433,1.59,2.525c1.217,1.094,1.778,0.152,1.778,1.62v1.748l1.403,5.895c0,0,0.28,0.28,1.028,0.374
		c0.749,0.094,1.497,0.562,2.059,0.281c0.562-0.281,3.286-1.123,3.286-1.123s2.234-2.339,3.263-2.526
		c1.029-0.187,3.368-0.748,3.368-0.748l0.375-0.188c2.807-2.433,4.771-4.771,5.707-4.771c0.936,0,1.776,0.27,2.245,0.27
		c0.468,0,3.274-2.046,3.929-3.076c0.654-1.029,0.495-2.107,0.495-2.107s-0.308-0.699,1.002-1.541s1.777-1.216,1.777-1.216
		s-0.376-1.059,0.31-2.347c0.685-1.291-0.767-2.518-1.23-2.518s-1.23-0.843-1.23-0.843s-0.188-0.188-0.748-0.749
		c-0.562-0.562-1.029-0.562-1.311-1.123c-0.28-0.561-0.562-0.373-0.936-1.215s-0.748-1.591-0.748-1.591s-0.562-0.468-1.123,0
		s-2.339,2.526-2.339,2.526s-2.807,2.245-3.274,1.684c-0.468-0.561-0.936-0.843-0.936-0.843s-0.094-1.59-0.562-2.338
		c-0.468-0.749,0.842-1.497-0.935-0.749c-1.778,0.749-3.369,1.217-3.369,1.217s0.469-1.404,0-2.059
		c-0.468-0.654,0.188-1.871-0.374-2.619c-0.562-0.749-1.216-1.649-1.591-2c-0.373-0.352-1.678-1.836-1.678-1.836l0.837-0.937
		c0,0,1.496-0.747,2.058-0.468c0.562,0.282,1.217,1.328,1.965,2.152s3.555,3.368,4.022,3.836c0.468,0.469,2.345,1.123,2.345,1.123
		s0.556,0.094,1.023,0s1.217-0.562,2.245-0.842c1.03-0.281,2.713,0.936,3.088,1.31c0.374,0.374,1.591,2.433,2.151,2.525
		c0.562,0.094,3.181,0.843,4.397,0.562c1.216-0.28,2.62-0.842,3.087-0.936c0.468-0.094,0.842-0.28,1.497-0.094
		c0.655,0.188,0.562,0.281,1.216,0.281c0.655,0,0,0.187,1.217,0.187s1.035-0.093,1.871-0.374c0.836-0.28,0.035-1.029,1.187-0.373
		c1.152,0.654,1.808,0.747,1.994,1.122c0.188,0.374,0.495,0.037,0.495,0.78c0,0.742-0.573,0.76,0.495,1.3
		c1.068,0.539,1.193,0.445,1.442,0.913c0.249,0.469-0.28,0.469,0.495,0.469c0.774,0,1.282,0.35,1.751,0.7
		c0.467,0.353,0.494,0.331,0.494,0.702s-1.337,0.374-0.963,1.311c0.375,0.935-0.28,1.402,1.123,1.684
		c1.403,0.28,1.497,0.187,2.619,0.187h1.217c0,0-0.749-0.32,0-0.674c0.748-0.354,1.906-1.011,1.994-0.354
		c0.087,0.654,0.494,5.553,0.494,5.553s-0.605-0.423-0.057,0.902c0.551,1.325,0.655,2.689,1.217,3.496s-0.507-0.157,0.495,1.635
		c1.001,1.793,0.908,0.108,1.563,2.821c0.654,2.713-0.039,2.493,0.494,3.306c0.535,0.811,2.031,1.377,2.405,2.026
		c0.375,0.649,0.495,1.407,0.495,1.964c0,0.558,1.563,4.024,1.844,4.492c0.281,0.467-0.018,1.591,1.217,1.217
		c1.233-0.375,2.058-0.938,2.058-0.938s1.403,0.282,1.685-1.122c0.28-1.402,0.495-1.515,0.495-1.978c0-0.464,1.096-2.35,1.096-2.898
		c0-0.55,0.494-2.857,0.494-3.229s0.16-1.063-0.026-1.718c-0.188-0.655-1.123-2.9-0.749-3.088c0.374-0.187,2.433-1.964,2.433-1.964
		c0.842,0,1.403-0.615,1.403-0.615s2.62-2.098,2.994-2.566c0.374-0.468,2.339-1.496,2.339-2.152c0-0.654,1.122-1.402,1.122-1.402
		s-0.198,0.01,0.274-0.604c0.475-0.613,0.201,0.156,0.849-1.268s2.058-2.527,2.058-2.527s2.059-0.279,2.807-0.373
		c0.749-0.094,2.526-0.749,2.526-0.749s1.497,1.122,1.685,2.059c0.187,0.936,0.374,1.778,1.216,1.964
		c0.842,0.188-1.31-0.186,1.31,1.029c2.62,1.217,2.62,0.188,2.62,1.404c0,1.216,0.655,3.088,0.936,3.648
		c0.28,0.562,0.495,0.939,0.495,1.588c0,0.65-0.869,1.219,0.066,1.78c0.935,0.562,2.338,0.562,2.338,0.562s1.029-0.966,1.403-1.592
		c0.375-0.625,1.357-0.092,1.62,0.749c0.264,0.843,0.495,2.493,0.495,2.958s1.419,1.759,1.419,1.759s0.334,1.025,0.334,2.233
		c0,1.205,0.495,1.669,0.495,2.041c0,0.371,0.222,1.113,0.034,1.861c-0.188,0.749-0.374,4.679-0.188,5.426
		c0.188,0.749,1.403,1.404,1.403,1.404l1.685,2.245l1.403,2.555c0,0-0.442,1.599,0.434,3.218s1.812,1.992,1.812,1.992l1.726,0.936
		l1.736,1.217c0,0,0.936,0.748,1.123-0.187c0.187-0.937,0.093-1.592,0.093-1.966c0-0.373,0.188-0.467-0.187-1.122
		s-0.842-1.778-0.842-1.778l-0.749-3.555l-1.438-0.748c0,0-3.613-2.713-3.895-3.368c-0.28-0.655-0.374-1.59-0.374-1.59l-0.094-0.655
		c0,0-0.654-0.094-1.028-0.843c-0.374-0.747-0.562-0.935-0.562-0.935s-0.188-2.019,0-2.895c0.188-0.877,0.654-0.848,0.562-1.972
		c-0.094-1.122-0.374-1.964-0.374-1.964s0-0.468,0.374-0.468s1.59,0.842,1.965,1.31c0.374,0.469,1.776,0.188,2.151,0.748
		c0.374,0.562,0.485,0.679,0.748,1.029c0.264,0.352-0.188,0.037,0.563,0.907c0.753,0.87-0.282-0.346,0.84,0.965
		c1.123,1.31,0.749,1.684,2.152,1.403c1.403-0.281,1.965-0.843,1.965-0.188s0.187,0.374-0.094,1.497
		c-0.281,1.122-0.65,1.347,0,1.403c0.649,0.057,1.964,0.094,2.713-1.123c0.749-1.216,1.029-1.59,1.31-2.059
		c0.281-0.468,0.281-0.842,1.216-0.935c0.937-0.095,1.872-0.374,1.872-0.374s0.143,0.586,0.143-0.591
		c0-1.176,0.126-2.777,0.126-2.777s-1.017-2.9-1.11-3.275c-0.094-0.374,0-0.562-0.375-1.029c-0.374-0.468-0.374-0.841-0.468-1.309
		c-0.094-0.469-1.59-3.042-1.59-3.042s0.468,0.363-0.468-0.263c-0.936-0.625-1.685-1.094-1.685-1.094l-1.403-1.496
		c0,0-1.31-1.778-1.31-2.619c0-0.843-0.748-0.469,0.187-1.311c0.937-0.843,1.123-1.122,1.592-1.59
		c0.467-0.468,0.093-0.468,0.654-0.749c0.561-0.279,0.748-0.467,0.748-0.467l0.655-0.095c0,0,2.9-1.028,3.087,0.282
		c0.188,1.309,0.199,2.15,0.842,1.869c0.644-0.279,1.146-0.776,1.146-0.776l2.13-2.03c0,0,0.093-0.279,1.028-0.279
		c0.937,0,0.749,0.467,1.872-0.188c1.122-0.655,3.741-1.562,3.741-1.562s-0.73-0.438,0.655-0.438s2.025,0.175,2.088-0.176
		c0.063-0.35,1.373-2.033,2.122-3.25c0.748-1.217,0.495-0.339,0.495-2.009c0-1.671,0.628-2.108,1.096-3.231
		c0.468-1.122-0.227-0.84,0.494-2.431c0.722-1.592,0.496-2.229,0.496-2.229s0.881-0.674,0.132-0.674
		c-0.748,0-0.748,0.094-1.216-0.093c-0.468-0.188-0.655-0.093-0.655-0.654s0.749-1.872,0.749-2.339c0-0.468-0.094-0.374-0.749-0.655
		c-0.655-0.28-0.374,0-1.403-0.842c-1.029-0.843-1.21-0.937-1.561-1.684c-0.352-0.749-0.176-0.434-0.527-1.486
		c-0.351-1.052-0.531-2.257-1.093-2.257s-2.433-0.749-2.433-0.749l0.562-0.935c0.28-0.467,0.28-0.749,1.123-1.123
		c0.842-0.374,1.49-0.936,1.49-0.936s1.141-1.122,0.878-1.871c-0.264-0.749-0.03-0.936-1.152-0.842
		c-1.122,0.093-2.526,0.093-2.526,0.093l-1.028,0.188c0,0-1.029-0.188-1.777-0.655c-0.749-0.468-1.778-1.309-1.872-1.684
		c-0.093-0.374,0.094-0.374,0.469-0.842c0.374-0.468,0.841-1.017,0.841-1.017s2.246-2.141,2.714-1.509
		c0.468,0.632,0.842,1.158,0.842,1.158L470.815,89c0,0,0.374,0.281,0.936,0.094c0.562-0.187,0.766-0.28,1.116-0.562
		c0.351-0.28-1.128-1.028,0.702-0.374c1.83,0.655,2.392-0.093,2.578,0.468c0.188,0.562,0.188,0.655,0.281,1.123
		s0.094,0.843,0.562,1.216s0.936,0.467,0.936,0.467s0.232,0.227,0.841,0.562c0.61,0.335,2.059,1.404,2.62,1.872
		s0.495,0.599,0.495,1.25c0,0.649-0.007,1.217,0.498,1.948c0.504,0.731,0.563,3.012,1.533,2.66c0.971-0.35,1.965-1.367,1.965-1.367
		s0.561,0.468,1.684-0.562c1.123-1.029,1.871-1.31,1.591-2.151c-0.28-0.843-1.778-3.182-2.433-3.837
		c-0.654-0.654-1.573-1.402-1.924-1.496s-2.286-1.029-2.286-1.029l-1.123-0.655c0,0-0.468-0.217-0.094-0.655
		c0.374-0.438,0.655-0.788,0.655-0.788s1.497,0.509,1.217-1.175c-0.281-1.684-0.562-1.965-0.562-1.965s0-0.187,0.187-0.842
		c0.188-0.655-0.28-0.375,0.281-1.03c0.562-0.653,0.409-0.841,1.023-0.841c0.613,0,2.064-0.094,2.813-0.094s1.871-0.749,1.871-0.749
		s0-0.935,0.187-1.309c0.188-0.375,1.123-2.695,1.31-3.135c0.188-0.438,0.496-0.7,0.496-1.536c0-0.835,0.159-1.411,0.159-1.786
		v-0.655c0-0.841-0.655-3.274-0.749-3.647c-0.093-0.374,1.217-0.655-0.093-0.937c-1.31-0.28-1.497-2.754-1.871-3.368
		c-0.375-0.613-2.081-2.525-2.619-3.461s-1.965-2.059-1.965-2.059s-2.246,0.562-3.274,0.375c-1.029-0.188-1.685,0.374-2.713-0.281
		c-1.03-0.655-2.152-1.123-2.152-1.123s-0.375-0.467-0.842-0.935c-0.468-0.468-0.831-0.094-0.556-0.937
		c0.274-0.842,0.556-1.684,0.556-1.684s2.058-3.18,2.619-3.835s1.871-1.591,2.339-1.591s2.433,0.094,2.807,0.094s0,0,0.655,0.093
		c0.654,0.093,0.848,0.187,1.286,0.093c0.438-0.093,0.526-0.186,0.526-0.186h0.351c0,0,0.27-0.188,2.046,0
		c1.778,0.186,1.778-0.188,2.527,0.374c0.748,0.562,1.617,0.672,1.617,0.672l0.534-0.298c0.842-0.28,1.871,1.217,1.871-0.187
		s-0.121-2.002,0.187-2.151c0.309-0.15,0.495-1.17,0.495-1.17l-0.12-0.421l0.628-0.507l1.793-0.428c0,0,0.151-0.28,0.877,0.281
		c0.725,0.562,2.409,0.748,2.409,0.748s1.028,0.467,1.122-0.186c0.094-0.655,0.147-0.814,0.495-1.343
		c0.347-0.529,0.628-1.278,1.096-0.903c0.468,0.374,1.216,1.497,1.216,1.497s0.187,0.935-0.093,1.777
		c-0.281,0.842-0.375,1.591-0.655,2.246s-0.562,2.807-0.562,2.807s-0.655-0.14-0.374,1.052c0.28,1.193-0.188,0.538,0.655,2.034
		c0.842,1.498,2.619,2.807,3.461,4.398c0.842,1.59,2.082,2.151,2.631,2.338c0.55,0.188,1.579,1.316,1.86,1.666
		c0.28,0.352,0.841,0.702,1.216,0.79c0.374,0.088,0.561,0.082,1.122,0.264c0.562,0.181,0.469,0.274,0.843,0.274
		s0.494-0.099,0.494-0.099s0.313,0.65,0.313-0.834c0-1.486-0.152-1.968-0.152-2.436s-0.272-1.632,0.188-2.151
		c0.46-0.52,0.495-1.354,0.495-1.354l-0.401-1.64c0,0-1.029-2.877-2.34-3.777c-1.309-0.901-1.309-0.432-1.87-1.181
		c-0.562-0.749-1.403-1.311-1.403-1.311l0.654-2.151c0,0,1.311-0.562,1.871-0.749c0.562-0.187,2.34-0.936,2.34-0.936
		s0.487-0.007,1.646,0.605c1.16,0.611,0.879,0.892,1.253,0.799c0.374-0.094,3.087-3.368,3.087-3.368l1.872-0.281
		c0,0,0.748,0,1.122-0.188c0.375-0.186,0.748,0,0.842-0.468c0.094-0.467,0-0.935,0-0.935s0.812-1.056-1.323-1.056
		s-2.419-0.097-2.792-0.535c-0.375-0.438-0.749-0.514-0.843-1.052s0.28-1.474,0.374-1.849c0.094-0.375,0.023-1.028,0.655-0.936
		c0.632,0.094,5.52,1.591,5.52,1.591s1.777,0.38,3.462,0.655c1.684,0.274,3.087-0.094,2.525-0.655
		c-0.561-0.561-0.025-0.712-1.028-1.404c-1.004-0.691,0.055,0.115-1.282-0.691c-1.338-0.806-1.806-1.554-3.396-1.554
		c-1.59,0-2.08-0.01-2.545-0.01c-0.464,0-1.308-0.084-1.659-0.084c-0.351,0-2.981-0.452-4.003-0.452s-1.949-0.264-2.32-0.264
		s-1.764-0.358-1.764-0.358s-0.807-0.984-2.396-1.452c-1.591-0.467-1.696-0.936-2.672-0.936c-0.978,0-1.151-0.149-1.986-0.149
		c-0.836,0-1.567,0.527-2.732,0.057c-1.166-0.472-0.981-0.552-1.631-0.552c-0.65,0-1.764-0.355-2.506-0.355
		s-0.372-0.308-1.485-0.308s-2.215-0.649-2.413-0.279c-0.198,0.372-1.976,1.119-1.976,1.119s1.497,0.094-1.965-0.094
		c-3.462-0.187-2.339-0.28-3.556-0.28c-1.216,0-0.093-0.374-2.244,0.094c-2.152,0.468,1.87,1.029-2.994,0.468
		c-4.865-0.562-4.678,0.094-4.865-0.655s-0.867-0.451-3.193-1.261c-2.326-0.809-1.484-0.984-3.075-0.809
		c-1.591,0.175-1.871,0.088-2.619,0.175c-0.749,0.088-1.029,0.088-2.433,0.088h-1.871c-0.375,0,0.291,0.47-0.936-0.175
		c-1.227-0.646-2.059-0.638-2.994-1.48c-0.936-0.841-1.871-1.216-2.807-1.216s-0.995-0.163-2.017-0.163
		c-1.021,0-1.632,0.163-1.632,0.163s-4.994-1.684-5.537-1.684c-0.544,0-1.76,0.562-1.76,0.562s0.28,2.246-1.872,2.807
		c-2.151,0.562-2.432,0.749-3.368,0.749c-0.936,0-4.864-0.188-4.864-0.188s-2.151-0.374-2.526-0.562
		c-0.374-0.186-1.684-1.122-1.684-1.122s-0.842-0.375-1.216-0.562c-0.375-0.186-1.685-0.841-1.685-0.841s-3.883-0.374-4.795-0.374
		s-1.566-0.375-2.503-0.094c-0.935,0.28-1.403,0.374-1.403,0.374l-1.402,0.094c0,0-4.251-0.188-4.865-0.281
		c-0.614-0.092-1.777-0.092-2.245-0.092h-0.562c0,0-3.087-0.749-4.584-0.469c-1.497,0.282-1.591,0.562-2.9,0.562
		c-1.311,0-1.867,0.372-2.059-0.374c-0.191-0.745-0.853,0.194-0.006-0.745c0.848-0.938,0.941-0.845,1.316-1.781
		c0.373-0.935,0.561-1.776,0.561-1.776s2.526-0.843-2.059-1.123c-4.584-0.281-5.108-0.004-5.758-0.004
		c-0.65,0-0.791,0.097-0.791,0.097s1.965,2.416-0.561,0.094c-2.526-2.321-2.9-2.146-2.9-2.146s-0.784,0.743-1.485,0.743h-1.977
		c-0.468,0-2.058,0.28-2.339,0.655c-0.28,0.374-0.748,0.654-0.748,0.654l-0.843,0.655h-0.468c0,0,1.029,0.094-1.497,0.094
		c-2.525,0-5.461-0.094-5.461-0.094l-1.368,0.188l-0.654,0.468c0,0-1.404-0.28-1.591,0.188c-0.188,0.468,0.28-0.843-0.468,1.59
		s-2.059,1.123-2.807,1.404c-0.748,0.28-1.31,0.28-1.31,0.28l-1.685,0.282l-1.965,0.841l-1.122,0.374c0,0-1.029,1.872-2.62,1.965
		c-1.59,0.094-1.871-0.093-1.871-0.093s-1.194,0.455-1.158,0.876s0.349,1.019-0.058,0.51c-0.407-0.51-1.685-1.013-2.151-1.667
		c-0.468-0.655,1.59-2.153-1.872-1.216c-3.462,0.936-3.555,0.936-3.555,0.936s-0.497,0.058-0.562,0.749
		c-0.064,0.689,0.562,1.725,0.562,1.725l0.468,0.263c0,0,0.38-0.118,0.936,0.631c0.556,0.749,1.17,1.123,1.17,1.123l0.088,0.468
		l-0.088,0.654l-0.614,0.282c0,0,0.474,0.28-0.649,0c-1.123-0.282-4.023-1.123-4.023-1.123l-1.776-0.562h-0.469
		c0,0-2.279,0-2.899,0.28c-0.62,0.281-0.69,0.094-1.234,0.655c-0.543,0.561-1.479,1.122-2.789,1.122h-1.871
		c0,0-1.029,0.188-1.403-0.188c-0.374-0.374-1.497-0.468-1.497-0.468l-0.561-0.093h-1.591c0,0-0.316,0-1.31,0.375
		c-0.994,0.374-1.777,0.561-2.62,1.029c-0.842,0.468-1.028,0.562-1.028,0.562l-0.469,0.467c0,0-1.029,0.188-1.496,0.188
		c-0.469,0-1.123,0.841-1.31,0c-0.188-0.842,0-1.03-0.375-1.216c-0.374-0.188-3.368-1.216-3.368-1.216s-0.187,0.093-0.094,1.123
		c0.094,1.029,0.673,1.81,0.562,2.246c-0.11,0.436-0.667,0.436-1.038,0.436s-1.284-0.5-1.485,0c-0.201,0.499-0.47,0.966-0.47,0.966
		l-0.655,0.936c0,0-0.11-0.452-0.468,0.28c-0.356,0.733,0.107,0.733-0.635,0.733c-0.743,0-1.049-0.546-1.891-0.639
		c-0.842-0.094-1.689-0.283-1.266,0.639s0.891,1.098,0.424,1.273c-0.469,0.175-1.592-0.352-2.059-0.526
		c-0.468-0.176-2.433-0.919-3.182-1.573c-0.748-0.654-1.403-0.631-1.403-1.097c0-0.464-0.041-0.558-0.371-0.993
		c-0.33-0.436-0.33-0.904-0.33-0.904s-0.702-1.032,0.701-0.516c1.403,0.516,2.507,1.419,2.507,1.419h0.835h1.393h1.393
		c1.949,0,1.876,0.622,2.599,0c0.725-0.624,0.35-1.186,0.35-1.186s-0.28,0.188-0.936-0.561c-0.654-0.748-2.245-1.684-2.245-1.684
		l-2.058-0.655l-1.311-0.561c0,0,0.655,0.561-0.374,0s-0.842-0.449-1.497-0.467c-0.655-0.018,0.83,0.655-1.269-0.187
		c-2.1-0.843-2.661-1.122-2.661-1.122s0.094,0.086-0.374-0.264c-0.468-0.351-2.713,0.713-3.181,0.355
		c-0.468-0.355-3.289-1.742-3.659-1.742c-0.372,0-0.255-0.685-2.414,0s-2.908,0.772-2.908,0.772s1.216,0.176-1.216,0.438
		c-2.433,0.264-3.182,0.439-3.182,0.439s0-0.188-0.936,0.467c-0.936,0.655-1.484,0.936-1.484,0.936s-0.264,0.094-0.702,0.188
		s-1.088,0.28-1.088,0.28l-3.274,2.994c0,0,0.709-0.997-0.187,0.28c-0.896,1.279-1.684,1.872-1.871,2.806
		c-0.188,0.937-0.418,1.389-0.418,1.389c-1.267,0.747-4.261,2.354-4.261,2.354s0.733,0.563-0.102,0.563H271.355z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M282.02,58.875c0,0-0.825-0.597-1.196-0.597
		c-0.372,0-0.65-0.128-1.299-0.128c-0.65,0-2.692,0.351-2.692,0.351s-0.083,0.401-0.083-0.223c0-0.623-1.022,0.136-0.496-1.037
		c0.527-1.173-0.314-3.044,0.995-2.763c1.31,0.279,3.576,0.994,4.04,0.994c0.464,0,1.31-0.826,1.764-1.519
		c0.453-0.692,2.43-2.47,2.43-2.845c0-0.374,0.495-1.851,0.495-1.851s1.843-0.395,2.03-0.956s0.211-0.23-0.129-0.909
		c-0.339-0.681-0.713-0.775-1.274-1.243s-2.339-2.245-1.777-2.807s-0.256-0.183,1.777-1.59c2.034-1.407,1.541-1.534,2.034-1.779
		c0.492-0.244-0.479,1.604,0.494,0c0.975-1.604,1.588-2.15,1.588-2.15s0.655-0.468,0.936-0.843c0.281-0.374-0.338-1.252,0.496-0.626
		c0.832,0.626,0.494,0.558,0.494,0.928c0,0.372-0.012,0.517-0.033,1.087c-0.021,0.571-0.396,1.887-0.396,1.887
		s-0.314,0.189-0.719,1.03c-0.403,0.841-0.497,1.495-0.497,1.495s-0.188,0.282,0,1.029c0.188,0.749,0,0.749,0.28,1.217
		c0.281,0.467-0.187,0.375,0.468,0.749c0.655,0.374,1.459,0.696,1.459,0.696s1.523,0.521,2.138,0.427
		c0.613-0.094,1.643-0.655,2.017-0.655c0.375,0-0.187-0.094,1.217,0s1.31-0.094,1.684,0.094c0.375,0.188,0.055,0.08,0.495,0.321
		c0.44,0.24,0.495,1.3,0.495,1.3s-0.429,0.531-1.832,0.437c-1.403-0.093-0.953-0.279-2.339-0.093c-1.386,0.188-2,0.188-2,0.188
		s-0.175-0.467-0.088,0.374c0.088,0.843-0.376-0.054,0.032,1.283c0.406,1.337,1.658,2.39,0.406,2.565
		c-1.251,0.175-2.373-0.614-3.028-0.614s-1.029-0.1-1.029,0.438s0.28,0.632-0.187,2.128c-0.469,1.498,0.187,1.029-0.469,1.685
		c-0.654,0.655-0.581,0.605-1.31,0.843c-0.728,0.235-0.468,0.093-1.777,0.186c-1.31,0.094-0.842-0.713-2.526,0.094
		C283.422,58.279,282.02,58.875,282.02,58.875z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M261.25,87.621
		c-0.691,0.16-1.29,0.616-0.691,0.717c0.598,0.101,0.093,0.002,0.803,0.002c0.711,0,0.782,0.145,0.99-0.331
		S261.25,87.621,261.25,87.621z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M272.477,81.235
		c0,0-0.725,0.094-0.725,0.935c0,0.842,0.146,1.063,0.146,1.063s0.237,1.143,0.642,0.274S272.477,81.235,272.477,81.235z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M271.257,85.646v1.473
		c0,0.384-0.495,0,0,0.88c0.495,0.878,0.019,1.757,0.495,0.878c0.477-0.877,1.993-0.286,1.448-1.759S271.257,85.646,271.257,85.646z
		"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M281.833,91.245
		c-1.31,0-2.375-1.122-2.123,0c0.251,1.123,0.532,2.059,1.562,2.153c1.028,0.092,2.315-0.113,2.233-0.843
		C283.423,91.825,281.833,91.245,281.833,91.245z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M302.228,96.484
		c-2.059-0.468-3.812-1.123-3.836-0.561c-0.024,0.561-1.736-0.438,0.255,1.044c1.99,1.482,0.962,1.95,2.739,1.576
		c1.777-0.375,2.219-0.328,2.339-0.843S302.228,96.484,302.228,96.484z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M317.944,96.391c0,0-2.187,0.282-2.59,0.795
		c-0.403,0.515,0.221,1.975,0.649,1.975c0.43,0,1.317-0.167,1.66-0.898C318.008,97.531,317.944,96.391,317.944,96.391z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M309.524,74.311
		c-0.374,0.188-0.654,0.875-1.496,1.557c-0.843,0.681-0.053,1.029-0.843,1.888c-0.789,0.86-0.479-0.169-1.315,1.608
		c-0.836,1.778-1.253,3.528-0.495,3.87c0.759,0.341,1.068,1.095,1.811,1.095c0.743,0,1.557-0.222,2.059-0.473
		c0.502-0.252,0.788,0.783,1.872-0.281c1.082-1.064,1.454-1.064,2.011-1.064s1.312,0.097,2.386,0.502s4.019,1.315,4.762,1.315
		c0.742,0,1.577,0.823,2.413,0.823c0.835,0,1.021,0.029,1.485,0.029s1.485,0.794,2.043-0.029c0.557-0.823-0.283-0.35,0.494-0.823
		c0.777-0.473,1.433-0.192,1.246-1.409c-0.188-1.216-0.627-2.226-0.998-2.226c-0.372,0-0.372-0.748-1.3-0.748
		c-0.929,0-2.287-0.861-2.755-1.142c-0.468-0.28-0.281-0.187-0.842-0.654c-0.562-0.469-1.123-0.375-1.311-0.843
		c-0.187-0.467,0.188-1.263,0.188-1.263s1.029-2.292,0.936-2.76c-0.093-0.467,0.544-0.842-1.692,0
		c-2.237,0.843-3.698,1.132-3.698,1.596c0,0.464-0.974,0.429,0.104,0.928c1.077,0.5,0.794,1.285,0,1.485
		c-0.794,0.201-1.168,1.418-2.571,0.575c-1.403-0.841-2.059-0.859-1.871-1.385c0.187-0.527,0-1.889,0-1.889s0.187-0.375-0.842-0.468
		C310.273,74.031,309.524,74.311,309.524,74.311z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M343.673,73.564
		c-1.141,0.468-0.655,0.28-1.403,0.747c-0.749,0.469,0.562-0.168-1.123,0.562c-1.684,0.731-1.87,0.819-1.87,0.819l-0.211,0.447
		l-1.287,0.518c0,0-0.184-0.273-0.184,0.459s0.559,2.155,0.933,2.435c0.374,0.282,0.854,1.264,1.403,1.684
		c0.549,0.419,1.585,1.397,1.871,2.245c0.287,0.848,0.379,0.802,0.379,1.671s0.094,1.738,0.094,2.293s0.684,3.339,1.135,3.989
		s1.259,0.271,1.557,0.65c0.298,0.379,1.326,1.034,1.326,1.034s-0.027,0.418,0.994,0.418s0.742,0.001,1.485,0.001
		c0.742,0,1.114,0.378,1.114,0.378l1.178-0.423c0,0,2.266-0.174,1.217-1.964c-1.05-1.789-1.374-2.648-1.931-2.648
		c-0.558,0-1.393-1.108-1.393-1.434s-0.145,0.138,0.186-0.325c0.331-0.463,1.706-1.005,1.827-1.487
		c0.122-0.481,0.308-1.304-0.249-1.304s-1.581-0.813-2.183-1.315s-1.123-0.467-2.713-1.216c-1.591-0.749-2.371-0.525-2.438-1.104
		c-0.066-0.58-0.154-1.89-0.154-2.357s0.264-1.123,0.264-1.123s1.485-0.291,2.328-0.729c0.841-0.439,1.777-0.591,1.777-1.054
		c0-0.462,0.94-0.213-1.591-1.678C343.48,72.287,343.673,73.564,343.673,73.564z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M343.59,200.898
		c-0.412,0.331-0.743,0.578-1.237,1.074c-0.496,0.494-0.413,0.494-1.156,0.742c-0.742,0.248-0.608-0.651-1.171,0.128
		c-0.563,0.78-2.379,1.688-2.379,2.102c0,0.412-0.082,3.301,0,3.962c0.083,0.66,0.495,1.32,0.33,1.98
		c-0.165,0.661-1.237,2.725-1.237,2.725s0.606-3.505-0.439,0.229c-1.047,3.733-0.496,4.185-0.496,5.093
		c0,0.907,0.027-1.028,0.77,1.778c0.743,2.807-0.316,2.605,1.321,2.807s2.724,0.577,3.715-0.578c0.99-1.155,1.403-1.898,1.65-2.642
		c0.248-0.742-0.144-0.781,0.248-1.238s0.495-2.354,0.495-2.851c0-0.494,0.926-2.846,0.908-3.341
		c-0.018-0.494,0.825-1.485,0.99-2.229c0.166-0.743,1.733-4.128,2.477-5.201c0.743-1.072,1.506-3.493,1.651-4.209
		c0.146-0.718,0.329-1.898,0.082-2.229c-0.247-0.33,0.495,0.743-0.743-1.485c-1.237-2.229-2.229-1.651-2.393-1.239
		c-0.166,0.413-0.579,1.239-0.744,1.733c-0.164,0.496-0.33,0.579-0.578,0.909C345.406,199.248,343.59,200.898,343.59,200.898z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M392.294,158.55
		c-0.247,0.496-0.495,0.661-0.495,1.073c0,0.413-0.495,1.386,0.222,1.798l0.717,0.412c0,0-0.757,3.507,0.247,0
		C393.987,158.33,392.294,158.55,392.294,158.55z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M407.401,150.626
		c-0.66,0.494-0.908,0.33-0.66,1.072c0.247,0.742,0.184,1.885,0.184,2.38c0,0.494-0.773,1.072,0,1.403
		c0.772,0.33,1.136,0.262,1.467,0.427c0.33,0.165,1.155,0.165,1.568-0.825c0.412-0.99,0.495-1.418,0.495-2.077
		c0-0.661-0.2-1.489-0.247-2.133c-0.049-0.644-0.014-0.297-0.131-0.644c-0.117-0.348,0.334-0.664-0.612-0.596
		C408.518,149.706,407.401,150.626,407.401,150.626z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M437.201,158.798
		c-0.33,0-1.981,0.182-0.991,0.99c0.991,0.808,2.373,2.835,2.89,3.467s0.743,1.486,1.238,1.734c0.495,0.247,3.385,0.166,2.972,1.733
		c-0.412,1.568-0.37,1.095,0.083,2.476c0.452,1.382,0.99,1.404,1.237,2.064c0.248,0.66,1.651,1.32,1.899,1.898
		c0.247,0.579,1.733,4.871,2.229,5.283c0.494,0.412,1.155,1.073,1.567,1.486c0.413,0.412,1.568,0.66,1.899,0.908
		c0.33,0.247,2.668,0.39,3.563,0.07c0.895-0.318,0.977-0.649,0.977-1.556c0-0.909,0.166-1.321-0.329-2.478
		c-0.496-1.156-0.083-1.568-1.651-2.889s-2.559-2.064-2.559-2.064s-0.331,0.744-0.496-0.991c-0.164-1.733-0.082-2.476-1.486-3.219
		c-1.402-0.743-1.98-1.155-2.476-1.651c-0.495-0.494-2.33-1.457-2.724-1.815c-0.395-0.359-1.919-2.173-2.146-2.725
		c-0.229-0.552-2.56-1.816-2.807-2.229c-0.248-0.412-0.6-0.33-0.661-0.659C439.368,158.303,437.201,158.798,437.201,158.798z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M455.939,182.903
		c0,0-1.073,0.991-0.742,1.486c0.33,0.495,1.208,0.767,2.089,1.208c0.883,0.441,1.543,0.36,2.368,0.441
		c0.825,0.084,3.899-0.261,5.21,0.406c1.312,0.668,4.861,1.658,5.77,1.658s1.079,0.008,1.657,0.008c0.577,0,1.728-0.421,1.728-0.833
		c0-0.413-0.166-0.908-0.661-1.155c-0.495-0.248-0.737-0.551-1.479-0.551s-0.914,0.138-1.492-0.523
		c-0.578-0.659-1.403-0.824-1.733-0.908c-0.33-0.081,1.155-0.907-2.063-0.246c-3.22,0.659-3.963,0.742-3.963,0.742
		s-1.238-0.742-2.972-0.99S455.939,182.903,455.939,182.903z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M478.806,187.114h-2.472v0.495
		c0,0.998-0.495,0.459,0.988,0.998s0.325,1.069,1.483,0.539c1.158-0.531,1.488-0.109,1.818-0.539
		C480.954,188.176,478.806,187.114,478.806,187.114z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M485.41,187.113h-0.908l-0.577,0.495
		c0,0-1.901-0.247-0.66,0.375c1.242,0.624,1.072,0.624,1.814,0.624h1.733c0,0,0.989,1.08,0.907,0
		C487.639,187.525,485.41,187.113,485.41,187.113z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M482.349,189.861
		c-1.195,0-2.39-0.138-1.195,0.44c1.195,0.578,1.12,0.938,1.615,0.938s0.826-1.379,0.826-1.379H482.349z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M491.105,187.773
		c-0.497,0.326-0.497,0.834-0.827,0.834s0.082-0.448-0.495,0.744s-0.495,0.857-0.495,1.192c0,0.336,2.068,0.898,2.561,0.448
		c0.492-0.448-0.168-0.436,0.904-1.41s0.578-0.975,1.32-0.975c0.743,0,2.146,0.506,2.146,0c0-0.508,1.157-1.248-1.155-1.248
		S491.105,187.773,491.105,187.773z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M498.7,200.733
		c-0.99-0.33-2.559-1.073-3.054-1.485c-0.496-0.413-3.135-0.148-3.88,0.412c-0.746,0.561-1.569,1.569-1.898,1.898
		c-0.331,0.331,0.657-0.778-0.496,0.79c-1.152,1.566-0.736,1.529-1.152,1.897c-0.416,0.367-0.078,0.704-0.495,0.659
		c-0.416-0.044,0.418-0.334-0.494,0.083c-0.913,0.416-1.946,0.416-1.946,0.416s-0.337-0.282-0.535,0.496
		c-0.197,0.777-0.462,1.232-0.494,1.646c-0.033,0.412-0.414,0.452-0.908,1.03c-0.496,0.577-1.744,1.57-2.193,2.022
		c-0.448,0.454-1.172,0.577-1.935,0.784c-0.763,0.206-1.813,0.17-1.813,0.17s-0.401,0.05-1.646,0.496
		c-1.247,0.448-2.484,0.737-2.484,0.737s-4.128,2.642-4.623,2.642s-0.908,0.082-1.32,0.412c-0.413,0.331-0.908,1.074-0.908,1.486
		s0.083-0.743,0,1.651c-0.083,2.394,0.33,3.68-0.083,5.778c-0.412,2.098-0.495,2.181-0.495,3.006s-0.577,2.772,0,4.01
		c0.578,1.239,0.661,1.156,0.578,2.642c-0.083,1.486-0.165,1.322-0.578,2.065c-0.413,0.741-0.234,0.441-0.751,1.185
		c-0.52,0.741-0.982,1.043-0.982,1.043s-0.889,2.469,0.463,3.175c1.353,0.705,2.419,1.081,3.499,0.54
		c1.081-0.54,1.239-1.155,1.733-1.321c0.496-0.165,1.404-0.165,2.807-1.072c1.404-0.908,1.898-0.962,1.898-0.962
		s0.826,0.136,1.734,0.136s0.762-0.027,1.486,0c0.723,0.029,0.494,0,1.155,0c0.66,0,2.474-0.111,2.889-0.412
		c0.416-0.301,1.898-1.569,1.898-1.569s0.3-0.524,0.955-0.494c0.653,0.029,2.427,0.053,3.008-0.165
		c0.581-0.219,0.743-0.082,1.403-0.413c0.66-0.33,2.146-0.826,2.477-0.826s1.073,0,1.65,0.165c0.578,0.166,0.826-0.165,1.651,0.578
		c0.826,0.743,2.394,1.486,2.89,2.478c0.495,0.99,1.147,1.596,1.147,1.596s0.337,0.247,0.337,0.66c0,0.412,0.08,0.706,0.495,1.083
		c0.415,0.375-0.161,0.97,0.495,0.484c0.654-0.484,1.578-2.045,1.818-1.266c0.239,0.781,0.494-0.117,0.494,0.781
		c0,0.897-0.322,1.292,0.496,1.292c0.816,0,0.734,0.01,1.064,0.01s-0.175-0.321,0.495,0.491c0.669,0.811,1.339,0.373,0.917,1.554
		c-0.423,1.181-0.99,3.302-0.99,3.302s2.311,1.321,2.889,1.651c0.577,0.331,1.403,0.66,2.229,0.496
		c0.826-0.165,1.486-0.826,2.229-0.661c0.743,0.165,0.592-0.043,1.156,0.578s0.99,0.577,1.981,0.247
		c0.99-0.329,0.66,0.165,1.155-0.413c0.495-0.577,0.495-0.33,0.908-0.824c0.412-0.496,0.495-0.496,0.825-0.661
		s-1.568-0.034,0.495-0.141c2.064-0.106,4.045-0.52,4.045-0.52l0.826-1.073c0,0,0.495-0.908,0.99-1.404
		c0.495-0.494,0.66-1.898,1.156-1.98c0.494-0.083-0.826,0.466,0.494-0.138c1.322-0.604,1.899-1.101,1.899-1.101
		s0.99-1.651,1.32-2.229c0.33-0.578-0.331-1.099,0.495-1.21s1.238-0.028,1.569-0.276c0.329-0.247-0.209-0.301,0.495-0.631
		c0.703-0.33,1.898-0.938,2.642-2.176c0.743-1.237,1.238-2.311,1.403-2.642c0.165-0.33,0.494-1.04,0.494-1.04
		s1.982-2.592,1.734-3.252c-0.247-0.66-0.082-1.486-0.082-1.486l0.599-1.946c0,0-0.269-1.438-0.269-1.934v-1.733
		c0,0-0.413-0.908-0.495-1.237c-0.083-0.331-1.899-2.065-2.395-2.56c-0.495-0.496-1.65-2.56-1.65-3.219
		c0-0.661-0.578-1.816-0.661-2.229c-0.082-0.413-0.043-0.289-0.33-0.743s-0.33-0.413-0.742-1.156
		c-0.414-0.743,0.082-0.164-0.661-0.99c-0.743-0.825-0.99-1.073-0.99-1.073l-0.248-0.413c0,0-1.073-0.165-0.742-1.485
		c0.329-1.321,0.66-1.073,0.66-2.063s-0.908-3.303-0.908-3.632c0-0.331,0-0.908-0.165-1.239c-0.166-0.33-1.341-1.438-1.341-1.438
		s-0.267,0.07-0.413-0.36c-0.145-0.43-0.393,0.231-0.393-0.677s-0.33-1.733-0.495-2.56c-0.165-0.825-0.66-1.486-0.66-1.486
		l-0.844-0.296c0,0-0.349-1.066-0.661-0.468c-0.312,0.599-0.394,0.683-0.477,2.003s-0.165,1.485-0.248,2.146
		c-0.082,0.661-0.495,2.313-0.413,3.221c0.083,0.906-0.577,1.98-0.577,1.98s-0.413-0.082-0.578,0.495
		c-0.164,0.578-0.908,1.403-0.99,1.898c-0.082,0.496-0.082,0.413-0.413,0.743c-0.33,0.33-0.33,0.825-0.825,0.908
		c-0.495,0.082-0.33,0.412-1.073,0.166c-0.743-0.249-0.495,0.412-1.156-0.331c-0.66-0.743-1.072-1.073-1.567-1.321
		c-0.496-0.247-0.331-0.247-1.651-0.577c-1.321-0.331-1.073,0-2.063-0.908c-0.991-0.908-1.239-0.743-1.486-1.733
		c-0.248-0.991-0.66-0.496-0.248-1.32c0.413-0.826,1.321-2.146,1.321-2.146s0.908-0.331,1.073-0.909
		c0.165-0.577,0.082-0.659-0.083-0.99c-0.165-0.33,0.165,0-1.568-0.908c-1.733-0.907-1.485-0.907-2.146-0.907
		c-0.66,0-0.412-0.083-1.155,0c-0.743,0.082-1.238,0.082-1.486,0.495c-0.247,0.412-0.577,0.659-0.577,0.659
		s-0.496,0.331-0.991,0.331s0.578,0.165-1.238,0.165s-1.407-0.398-2.271,0.131c-0.865,0.53-2.681,0.447-2.434,1.686
		c0.248,1.237,0.413,1.32,0.496,1.651C499.278,199.66,498.7,200.733,498.7,200.733z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M512.651,255.463
		c-0.991-0.247-0.991-0.495-2.063-0.495c-1.073,0-0.931-1.564-1.25,0.332s-0.495,1.258-0.495,2.246c0,0.99-1.166-0.394-0.494,1.486
		c0.67,1.879-0.732,2.705,1.084,2.539c1.815-0.164,4.457-1.32,3.631-1.155c-0.825,0.166-2.083,0.451,0.651-1.384
		c2.733-1.836,2.816-1.588,2.981-2.331s1.155-0.908-0.331-1.073C514.88,255.463,512.651,255.463,512.651,255.463z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M557.938,253.867
		c-1.288,0.523-1.782,0.523-2.278,1.184c-0.495,0.661-1.073,0.825-1.32,1.156c-0.248,0.33,0.413,0.618-0.495,0.928
		c-0.909,0.311,0.185,0.386-1.104,0.843c-1.29,0.458-3.519,1.696-4.097,1.778c-0.578,0.084-1.321,0.826-1.321,0.826
		s-1.101,0.35-1.926,0.35s-0.687,0.269-1.897,1.156c-1.212,0.888-1.129,0.31-1.955,1.301c-0.825,0.99-1.155,1.733-1.155,2.477
		s-0.578,0.578,0,1.073s2.559-0.495,3.054-0.661c0.496-0.165,1.651-0.247,1.981-0.165c0.33,0.083-0.99,0.743,0.496-0.165
		c1.485-0.908,1.496-0.76,2.229-1.072c0.732-0.313,0.732-0.479,0.732-0.479s-0.506,0.101,0-0.164s1.331-0.595,1.579-1.091
		c0.248-0.494-0.464-1.311,1.32-1.98s2.279-0.67,2.279-0.67h0.495c0.66,0,3.57-2.513,3.57-2.513s1.167,0.871,1.332-0.366
		c0.166-1.239,0.496-2.374,0.496-2.374s0.282,0.007-0.33-0.682S557.938,253.867,557.938,253.867z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M567.464,242.998
		c-0.495,0.743-0.495,2.147-0.495,2.807c0,0.661-0.495,1.347-0.495,1.842c0,0.496,0.577-0.025-0.826,0.884
		c-1.402,0.907-0.825,0.825-1.65,1.155c-0.826,0.33-2.229,0.742-2.229,0.742s0.563,1.904,0.212,2.944s-1.368,2.753-0.295,2.753
		s2.162-0.123,2.608-0.393c0.446-0.269,0.941-0.764,0.941-0.764s0.12-0.055,0.412-0.578c0.293-0.523,0.42-0.304,0.871-1.019
		c0.45-0.715,0.533-0.952,0.945-1.375c0.412-0.424,1.486-0.826,1.981-1.073s0.663,1.129,1.281-1.252
		c0.617-2.381-0.044-2.051-1.034-2.875c-0.99-0.826-1.034-2.037-0.99-3.056c0.044-1.017,0.456-1.86-0.121-1.86
		S567.464,242.998,567.464,242.998z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M562.016,209.566
		c-1.304,1.197-1.617,2.063-1.304,2.684c0.313,0.618,1.23,1.854,1.639,2.228c0.408,0.372,0.903,0.62,1.398,1.115
		s-0.355,0.786,0.991,0.743c1.346-0.043,1.346,0.534,1.346-0.374c0-0.907-0.924-2.079-1.63-2.874
		c-0.707-0.797-0.529,0.523-1.113-1.003C562.759,210.557,562.016,209.566,562.016,209.566z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M571.461,201.109
		c-0.778,0.037-1.686-0.376-1.769,0.367c-0.082,0.743-0.647,0.864,0,2.229c0.648,1.365-0.779,1.613,0.495,1.696
		c1.273,0.082,1.296-0.413,1.296-0.413s1.012,1.485,0.494-0.99C571.461,201.522,571.461,201.109,571.461,201.109z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M591.238,204.448
		c-0.991,0.661-0.743,1.155-1.485,1.155c-0.743,0-1.039-0.293-1.039,0.015c0,0.307-1.438,0.316,0.048,1.307
		c1.485,0.991,2.035,1.16,2.751,0.951c0.716-0.208-0.225,0.721,0.964-0.456c1.188-1.178,1.651-1.732,1.651-2.229
		s-1.239-0.496-1.239-0.496L591.238,204.448z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M541.461,174.812
		c0,0-1.155-0.165-0.33,1.156s0.083,0.33,1.155,1.486c1.073,1.156,1.156,1.32,1.156,1.32s0.34,0.109-0.496,0.66
		c-0.835,0.553-1.238,1.074-1.238,1.074s0.904-0.475-0.934,0.302l-1.838,0.778c0,0-1.362,0.021-0.777,1.065
		c0.584,1.045-0.261,1.1,0.777,1.21s3.68-0.715,3.68-0.715c0.717-0.793,1.389-1.561,1.389-1.561s-0.259-0.145,0.373-0.777
		c0.633-0.633,0.715,0.109,0.963-1.129c0.247-1.238,0.907-2.031,0.495-2.419c-0.413-0.388,0.743,0.272-0.825-0.801
		S541.461,174.812,541.461,174.812z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M548.478,181.912
		c-0.111,0.445-0.389,1.945,0.136,2.459c0.524,0.513,1.98,0.103,2.558,1.11c0.578,1.01,0.495,1.664,0.495,2.18
		c0,0.515,0.499,0.946,0.499,0.946s-0.205,0.237,0.323-1.743c0.529-1.98,0.88-1.604-0.079-2.493
		c-0.96-0.891-1.752-1.083-1.752-1.083s0.986,0.434-0.446-0.633C548.778,181.589,548.478,181.912,548.478,181.912z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M555.214,186.49c0,0-0.329,0.072,0,0.841
		c0.33,0.769,0.413,0.769,0.825,0.769c0.413,0,0.99,0.807,0.495-0.905S555.214,186.49,555.214,186.49z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M555.896,189.861
		c2.041,2.167,2.089,1.385,2.536,2.167c0.446,0.781,0.363,1.358,0.776,0.946c0.413-0.414,0.896-1.748,0.896-2.431
		s1.589-2.441,0-1.937C558.515,189.111,555.896,189.861,555.896,189.861z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M505.965,171.263
		c-0.661,0.248-2.063,0-1.321,1.238c0.743,1.238,2.395,1.816,2.477,2.229c0.082,0.412,0,0.659,0,1.155s-0.531-0.387,0,0.824
		c0.532,1.213-0.34,1.271,0.532,1.379s3.761,0.604,3.761,0.604s-0.604-0.686,1.143,0.647c1.747,1.334,0.936,1.131,2.407,1.581
		c1.472,0.449,1.704,0.345,1.966,0.668c0.263,0.322,0.068,0.223,0.496,0.768c0.428,0.546,0.494,0.013,0.494,1.012
		c0,1.002,0.578,0.131,0,1.002c-0.577,0.871-1.897,0.412-1.072,1.33s2.558,1.542,2.558,1.542s0.577-1.407,1.98,0.465
		c1.402,1.874,2.393,2.153,2.723,2.153s-0.33-0.279,0.99-0.279s1.961,0.022,2.146-0.975c0.185-0.999,0.164-1.743,0.495-1.743
		c0.329,0,1.815-0.374,1.815-0.374s1.484,0.129,2.393,1.609c0.907,1.482,3.383,2.714,3.383,2.714s0.31,0.268,2.188,1.214
		c1.88,0.947,1.433,1.881,2.953,0.947c1.52-0.936,1.52-0.947,1.52-0.947s-2.183-0.801-2.618-1.482
		c-0.436-0.684-1.854-1.76-1.854-1.76s-2.106-2.625-2.188-3.084s-0.165-1.33-0.165-1.33s0.022-0.146-0.06-1.303
		s-1.234-2.529-2.764-3.329c-1.529-0.799-3.015-1.706-3.593-2.119c-0.577-0.413-1.403-0.578-1.898-0.99
		c-0.495-0.413-3.148-0.957-3.638-1.181s-3.132-0.471-3.132-0.471s-1.237-0.908-1.898-1.238c-0.66-0.33-2.642,0-2.642,0
		s-0.191-0.261-0.921,0.571s-1.968,1.162-1.968,1.162s-0.248,0.99-0.991,0.495s-1.261-0.261-1.332-1.657
		c-0.071-1.397,0.095-1.563-0.401-2.057c-0.495-0.496-0.66-0.414-1.402-0.579C507.781,171.511,505.965,171.263,505.965,171.263z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M484.223,167.198l-0.794,0.599
		c0,0-0.298-1.021-0.298,0.97c0,1.989-0.208,2.228-0.495,3.3c-0.287,1.073-0.133,2.245-0.495,2.245c-0.361,0,0.446-0.62-0.495,0.644
		c-0.94,1.262-1.188,1.756-1.023,2.252s0.155,2.259,0.531,2.615c0.377,0.357,0.21-0.78,0.46,0.853
		c0.249,1.631,1.321,1.133,1.651,0.915s0.411-1.234,0.412-1.741c0-0.507-0.165-1.815,0-2.146c0.164-0.331-0.517-1.76,0.546-0.851
		c1.062,0.907,2.342,2.489,2.342,2.489h0.743c0.578,0,0.344,2.049,0.912-0.344c0.569-2.394,0.99-2.724,0.495-3.055
		c-0.495-0.328-1.077-1.376-1.077-1.376s1.792-1.676,1.792-2.171c0-0.496-0.546-0.849-1.21-0.742
		c-0.664,0.104-0.916,0.623-2.066,0.518c-1.151-0.105-1.931-0.022-1.931-0.436v-1.402c0-0.526,0.779-0.908,0.779-0.908
		s0.408-0.392,1.233-0.392c0.826,0,2.554,0.773,2.554,0.773s0.339,1.261,1.656,0.631c1.317-0.631,2.45-1.178,2.45-1.756
		c0-0.577,0.495-0.759,0.495-1.319c0-0.56-2.532-1.63-2.532-1.63s-0.407,0.185-1.238,0.577c-0.831,0.394,0.043,1.094-2.146,0.413
		s-1.535-0.701-2.189-0.681C484.63,166.062,484.223,167.198,484.223,167.198z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M498.116,165.191
		c0,0,0.135,0.149-0.489,1.614s-1.651,1.508-1.072,2.478c0.577,0.967,0.235,1.957,1.396,1.473c1.162-0.482,0.591-0.311,1.657-1.473
		c1.065-1.164,1.525-2.085,1.525-2.497c0-0.413,0.283-1.595-0.377-1.595H498.116z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M499.278,176.298
		c-0.489,0.059-1.492-0.14-0.99,0.412c0.501,0.554,1.386,0.438,2.394,0.661s0.455,0.283,1.008,0.283s3.862-0.118,1.387-1.19
		C500.599,175.39,499.278,176.298,499.278,176.298z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M464.575,166.785h-1.244
		c-0.364,0-0.496-0.962-0.496,1.252s-1.484,3.039-0.494,3.863c0.99,0.827,0.208,0.644,0.99,1.86
		c0.781,1.218,0.636,1.408,1.244,1.685c0.609,0.275,1.766,0.688,1.766,0.688s-0.568,0.27,0.669,0.466
		c1.238,0.197,3.046,0.855,3.789,0.855s2.884,2.047,3.714,0.694c0.831-1.353,1.247-0.882,1.247-1.792
		c0-0.912,0.495-0.596,0.495-1.32c0-0.726,1.233-1.227,1.481-2.443c0.247-1.215,0.72-2.786,0.72-2.786s0.475-0.135,0.475-0.464
		c0-0.33,1.148-0.51,1.148-0.908s0.084-0.055,0.084-0.398s0.282-0.529-0.084-1.004c-0.365-0.475,0.955-0.805-0.943-3.034
		s-0.165-1.237,0.083-1.65c0.247-0.413,1.544-1.587,1.544-2.081c0-0.496-0.141-1.387-0.141-1.387s-0.374-0.127-0.459-0.856
		c-0.084-0.728-0.326-0.743-1.707-1.14c-1.38-0.398-1.713-0.398-2.205-0.398c-0.491,0-3.471,2.643-3.471,2.643l-1.398,1.139
		c0,0-0.666-0.065-0.831,1.174c-0.165,1.237-0.33,1.402-0.495,1.732s-1.726,1.523-1.726,1.523l-1.989,0.871L464.575,166.785z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M480.787,147.489
		c-0.623,0.319-1.076,0.506-1.485,1.073c-0.41,0.569-0.846-0.584-0.846,0.569c0,1.151-0.101,0.892-0.494,1.481
		c-0.395,0.591-0.292,0.853,0.101,1.169c0.394,0.315,2.017,0.008,2.017,0.008s0.333-0.282,0.934-0.764
		c0.601-0.482,0.495,0.99,0.495-0.825s1.254-0.643,0.502-1.898C481.257,147.048,480.787,147.489,480.787,147.489z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M482.193,131.47
		c-0.581,0.665-0.937,0.578-0.937,1.568v1.732c0,0-0.494,0.33-0.494,1.237s-0.934,0.901-0.496,1.403s0.177,0.24,0.844,0.99
		s2.318,1.575,2.318,2.896v1.651c0,0.659,0.196,1.31,0.495,1.557c0.299,0.249,1.07,0.403,1.36-0.412
		c0.291-0.815,0.699-1.631,1.199-1.476c0.5,0.156,1.736,0.32,1.736,0.32s0.233,0.322,0.569-0.082s1.661-1.551,0.831-2.055
		c-0.831-0.502-1.238-0.743-2.146-0.825c-0.908-0.083-0.782,0.585-1.486-0.083c-0.703-0.668-0.967-0.604-0.967-1.162v-1.155
		c0-0.578,0.264-1.32,0.264-1.65c0-0.331,0.533-0.247-0.264-1.815c-0.798-1.568-1.509-3.38-1.509-3.38L482.193,131.47z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M491.188,144.435
		c-0.413,0-0.804-0.449-0.804,0.766c0,1.214,0.309,1.16,0.154,1.717c-0.154,0.561-0.31,1.217-0.154,1.715
		c0.154,0.498,1.217-0.647,1.629-0.73c0.413-0.082,1.872-0.196,1.872-0.59c0-0.395,0.717,0.011,0-0.897
		c-0.717-0.907-0.989-0.768-0.989-1.214C492.896,144.755,491.188,144.435,491.188,144.435z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M486.318,145.837
		c-0.166,0.577-2.151,1.251-0.743,1.982c1.407,0.73,1.811,1.422,2.228,0.008C488.22,146.415,486.318,145.837,486.318,145.837z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M486.983,150.201
		c0,0.494,1.236,1.237,1.236,1.237s2.143,0.425,1.605-0.406s-0.467-0.946-1.036-1.362c-0.569-0.417-1.806,0-1.806,0
		s2.375,3.139,1.806,3.139s-1.806,0.115-1.806,0.611c0,0.494-0.165,0.523,0.82,0.838c0.985,0.315,2.021,0.812,2.021,0.812
		s0.582,1.02,0.582,1.417c0,0.398-3.259,1.42,1.111,1.074s4.37-0.316,4.37-1.568c0-1.254-1.188-3.086-1.188-3.572
		s0.813,0.952,0-0.899c-0.814-1.851,1.794-3.454-0.814-1.851c-2.607,1.604-2.607,2.1-2.607,2.1s0.214,0.65-0.34,0.65
		S486.983,150.201,486.983,150.201z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M459.007,128.847
		c0,0-1.416,1.554-0.343,2.049c1.073,0.496,1.981,0.496,1.981,0.496s1.063-0.295,1.238-0.743s0.907,0.232,0.494-0.627
		c-0.412-0.858-0.189-1.175-0.873-1.175H459.007z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M479.981,118.268
		c0,0-0.326,0.083-0.326,0.578s-0.99,0-0.495,1.567c0.495,1.568,0.919,3.053,0.919,3.053s1.037,0.211,1.616-0.803
		c0.579-1.012,0.495-2.002,0.495-2.497s0.495-0.743,0.083-1.157C481.86,118.597,479.981,118.268,479.981,118.268z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M492.757,100.683
		c-0.494-0.071-0.674-2.155-1.076,0c-0.402,2.156,0.016,2.404,0.582,3.559c0.565,1.154,0.862,2.955,1.649,1.89
		c0.788-1.064,0.788-2.31,0.788-3.048C494.7,102.343,492.757,100.683,492.757,100.683z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M496.384,99.951
		c0,0.743,0.5,2.219,0.5,2.219s1.245,0.534,1.569-0.248c0.323-0.781,0.527-1.971-0.254-1.971H496.384z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M494.7,96.404
		c-1.59,0.494-2.438,1.815-2.438,1.815s0.191,0.995,1.084,0.995s2.541-0.354,3.037-0.995c0.495-0.642,1.149-0.952,1.65-0.398
		c0.501,0.552,1.479,0.986,2.145,1.636c0.668,0.649,1.584-0.367,2.071-1.002c0.487-0.634,0.33-0.99,1.155-0.99h1.486
		c0.991,0,1.073-0.082,1.073-0.082s1.733-1.321,1.733-2.395s-1.651-1.651-1.651-2.56c0-0.908,0.248-1.155,0.248-1.816
		c0-0.659-1.651-3.466-1.816-3.797c-0.165-0.33-0.907-0.661-1.238-0.908c-0.329-0.247-0.841-1.422-1.245-0.009
		c-0.406,1.414-0.653,1.826,0.172,3.147c0.826,1.32,0.744,1.651,0.826,2.063c0.082,0.413-2.477,2.477-2.477,2.477
		s0.633-0.386-0.551,0.426c-1.184,0.813-0.936,0.647-1.513,1.06c-0.578,0.413-0.266,0.235-0.578,0.413s-0.489,0.153-0.991,0.33
		C496.384,95.991,494.7,96.404,494.7,96.404z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M489.868,60.482
		c-0.331,0.082-1.322,0.082-1.238,0.825c0.082,0.743-0.501,1.02,0.429,2.257c0.929,1.237,1.255,0.578,1.968,1.815
		s0.221,0.938,1.152,1.955s0.451,0.719,1.733,2.642c1.282,1.922,0.589,2.417,1.282,2.747c0.694,0.331,0.194,0.353,0.694,0.743
		c0.501,0.39,0.152,0.367,0.913,0.556c0.761,0.188,1.232,0.158,1.232,0.158s0.336,0.832,0.501,0.006
		c0.165-0.825,1.567-1.521,0.495-2.288c-1.073-0.767-2.141-1.204-2.641-1.591c-0.501-0.39-0.501-0.471-0.501-0.802
		c0-0.329,0.335-0.438,0.501-0.933c0.164-0.495-0.501-1.46-0.501-1.46s0.523-1.155-0.694-1.65c-1.217-0.495-0.35-0.329-1.217-0.742
		s-1.138-1.019-1.469-1.266c-0.33-0.247-0.77,0.11-0.77-0.467c0-0.578,0.713-0.083,0-1.156c-0.713-1.072-1.789-2.504-1.789-2.504
		L489.868,60.482z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M498.481,76.303
		c-0.04,0.361,0,0.762,0.28,1.363c0.28,0.601,0.667-0.014,0.474,1.285c-0.193,1.301-0.357,1.156-0.357,1.939
		c0,0.784-0.565,1.369,0,1.815s0.721,0.825,0.905,0.907c0.183,0.083,0.304,0.009,0.494,0.009c0.191,0,0.449-0.543,0.89-0.904
		c0.441-0.36-1.108-0.774,0.923-0.24s1.811,0.734,2.646,0.487c0.836-0.247,0.762-0.287,1.123-0.607
		c0.361-0.322,1.069-0.802,1.069-1.203c0-0.4,0.647-0.75-0.271-0.956c-0.918-0.207-0.517,0.113-2.001-0.527
		c-1.483-0.642-1.764-0.241-2.405-1.043s-1.229-1.016-1.356-1.229c-0.127-0.214-0.009-0.055-0.488-0.694
		c-0.479-0.64-1.162-0.883-1.363-0.883C498.842,75.822,498.481,76.303,498.481,76.303z"/>
	<path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" d="M362.304,31.536l-0.331,3.919
		c0,0,2.971-0.309,2.641-2.134S362.304,31.536,362.304,31.536z"/></g></svg>';
		}
		
		add_shortcode('ozy_vc_locations_map', 'ozy_vc_locations_map');
		
		vc_map( array(
			"name" => __("Locations World Map", "frv-logipro-essentials"),
			"base" => "ozy_vc_locations_map",
			"as_parent" => array('only' => 'ozy_vc_locations_map_location'),
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					'description' => esc_attr('Just a place holder', 'frv-logipro-essentials')
				)	
		   ),
		   "js_view" => 'VcColumnView'		   
		) );
	}
	
	if (!function_exists('ozy_vc_locations_map_location')) {
		function ozy_vc_locations_map_location( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_locations_map_location', $atts);
			extract(shortcode_atts(array(
				'country'	=> '',
				'caption'	=> '',
				'link'		=> ''
			), $atts));

			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url'])) {
				$link = $link['url'];
			}else{
				$link = '#';
			}
			
			$country = explode('|', $country);
			
			$GLOBALS['OZY_LOCATIONS_MAP'][] = array(esc_js($country[0]), esc_js($country[1]), esc_js($caption), esc_js($link));
			
			return null;
		}
		
		add_shortcode('ozy_vc_locations_map_location', 'ozy_vc_locations_map_location');

		vc_map( array(
			"name" => __("Location", "frv-logipro-essentials"),
			"base" => "ozy_vc_locations_map_location",
			"content_element" => true,
			"as_child" => array('only' => 'ozy_vc_locations_map'),
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "dropdown",
					"heading" => __("Country", "frv-logipro-essentials"),
					"param_name" => "country",
					"value" => get_country_list(),
					"admin_label" => true
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => __("Click to see our Offices in ...", "frv-logipro-essentials")
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => __("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true,
					"value" => ""
				)				
		   )
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Locations_Map extends WPBakeryShortCodesContainer{}
	class WPBakeryShortCode_Ozy_Vc_Locations_Map_Location extends WPBakeryShortCode{}		
	
	/**
	* Multi Location Pretty Map
	*/
	if (!function_exists('ozy_vc_prettymap_multi')) {
		function ozy_vc_prettymap_multi( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_prettymap_multi', $atts);
			extract(shortcode_atts(array(
				'zoom'			=> '13',
				'hue'			=> '#ff0000',
				'saturation'	=> '-30',
				'lightness' 	=> '0',
				'height'		=> '350px',
				'api_key'		=> ''
			), $atts));
			
			$rand_id = 'map_data_' . rand(1, 10000);
			$GLOBALS['OZY_CUSTOM_MAP'] = array();
			
			wp_enqueue_script('googlemaps', '//maps.google.com/maps/api/js?'. ($api_key?'key=' . $api_key .'&':'') .'sensor=false&language=en', array('jquery'), null, true );
			
			do_shortcode($content);
			
			wp_localize_script( 'logipro', 'ozyMapData', array($rand_id =>  json_encode($GLOBALS['OZY_CUSTOM_MAP'])) );
			
			unset($GLOBALS['OZY_CUSTOM_MAP']);
			
			return '<div class="ozy-multi-google-map" 
			data-path="'. esc_attr($rand_id) .'" 
			data-zoom="'. esc_attr($zoom) .'" 
			data-hue="'. esc_attr($hue) .'" 
			data-saturation="'. esc_attr($saturation) .'" 
			data-lightness="'. esc_attr($lightness) .'" style="height:'. esc_attr($height) .'"></div>';
		}
		
		add_shortcode('ozy_vc_prettymap_multi', 'ozy_vc_prettymap_multi');
		
		vc_map( array(
			"name" => __("Multi Location Google Map", "frv-logipro-essentials"),
			"base" => "ozy_vc_prettymap_multi",
			"as_parent" => array('only' => 'ozy_vc_prettymap_multi_location'),			
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Google Maps API Key", "frv-logipro-essentials"),
					"param_name" => "api_key",
					"admin_label" => false,
					"value" => "",
					'description' => wp_kses(__('<a href="http://freevision.me/google-maps-key/" target="_blank">Learn how to get an API Key.</a>', 'frv-logipro-essentials'),array('a' => array('href' => array(), 'target' => array()))),					
				),			
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Height", "frv-logipro-essentials"),
					"param_name" => "height",
					"admin_label" => true,
					"value" => "350px"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Zoom Level", "frv-logipro-essentials"),
					"param_name" => "zoom",
					"admin_label" => true,
					"value" => "13"
				),
				array(
					"type" => "colorpicker",
					"heading" => __("Hue Color", "frv-logipro-essentials"),
					"param_name" => "hue",
					"admin_label" => false,
					"value" => "#FF0000"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Saturation", "frv-logipro-essentials"),
					"param_name" => "saturation",
					"admin_label" => true,
					"value" => "-30"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Lightness", "frv-logipro-essentials"),
					"param_name" => "lightness",
					"admin_label" => true,
					"value" => "0"
				)		
		   ),
		   "js_view" => 'VcColumnView'		   
		) );
	}
	
	if (!function_exists('ozy_vc_prettymap_multi_location')) {
		function ozy_vc_prettymap_multi_location( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_prettymap_multi_location', $atts);
			extract(shortcode_atts(array(
				'caption'		=> '',
				'address'		=> '',
				'custom_icon'	=> ''
			), $atts));

			$custom_icon = wp_get_attachment_image_src($custom_icon, 'full');
			if(isset($custom_icon[0])) {
				$custom_icon = $custom_icon[0];
			}else{
				$custom_icon = null;
			}
			
			$GLOBALS['OZY_CUSTOM_MAP'][] = array(esc_attr($caption), esc_attr($address), $custom_icon);
			
			return null;
		}
		
		add_shortcode('ozy_vc_prettymap_multi_location', 'ozy_vc_prettymap_multi_location');

		vc_map( array(
			"name" => __("Location", "frv-logipro-essentials"),
			"base" => "ozy_vc_prettymap_multi_location",
			"content_element" => true,
			"as_child" => array('only' => 'ozy_vc_prettymap_multi'),
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Info Box Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => __("Head Quarter", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Address", "frv-logipro-essentials"),
					"param_name" => "address",
					"admin_label" => true,
					"value" => __("Melbourne, Australia", "frv-logipro-essentials")
				),
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => __("Custom Icon", "frv-logipro-essentials"),
					"param_name" => "custom_icon",
					"description" => __("You can select a custom icon for your pin on the map", "frv-logipro-essentials"),
					"admin_label" => false,
					"value" => ""
				)				
		   )
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Prettymap_Multi extends WPBakeryShortCodesContainer{}
	class WPBakeryShortCode_Ozy_Vc_Prettymap_Multi_Location extends WPBakeryShortCode{}	
	
	/**
	* Pretty Map
	*/
	if (!function_exists('ozy_vc_prettymap')) {
		function ozy_vc_prettymap( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_prettymap', $atts);
			extract(shortcode_atts(array(
				'address_'		=> 'Melbourne, Australia',
				'zoom'			=> '13',
				'custom_icon'	=> '',
				'hue'			=> '',//'#ff0000',
				'saturation'	=> '',//'-30',
				'lightness' 	=> '0',
				'height'		=> '350px',
				'api_key'		=> '',
				'extra_class_name' => ''
			), $atts));
			
			$custom_icon = wp_get_attachment_image_src($custom_icon, 'full');
			if(isset($custom_icon[0])) {
				$custom_icon = $custom_icon[0];
			}
			
			wp_enqueue_script('logipro-googlemaps', '//maps.google.com/maps/api/js?'. ($api_key?'key=' . $api_key .'&':'') .'sensor=false&language=en', array('jquery'), null, true );
			wp_enqueue_script('logipro-googlemaps_infobox', get_template_directory_uri() . '/scripts/vendor/infobox_packed.js', array('jquery'), null, true );
			
			return '<div class="ozy-google-map '. esc_attr($extra_class_name) .'" 
			data-address="'. esc_attr($address_) .'" 
			data-zoom="'. esc_attr($zoom) .'" 
			data-hue="'. esc_attr($hue) .'" 
			data-saturation="'. esc_attr($saturation) .'" 
			data-lightness="'. esc_attr($lightness) .'" 
			data-icon="'. esc_url($custom_icon) .'" style="height:'. esc_attr($height) .'"></div><div class="gmap-infobox-wrapper"><div id="gmap-infobox" class="content-font">'. wpautop($content, true) .'</div></div>';
		}
		
		add_shortcode('ozy_vc_prettymap', 'ozy_vc_prettymap');
		
		vc_map( array(
			"name" => esc_attr__("Custom Google Map", "frv-logipro-essentials"),
			"base" => "ozy_vc_prettymap",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => __("Google Maps API Key", "frv-logipro-essentials"),
					"param_name" => "api_key",
					"admin_label" => false,
					"value" => "",
					'description' => wp_kses(__('<a href="http://freevision.me/google-maps-key/" target="_blank">Learn how to get an API Key.</a>', 'frv-logipro-essentials'),array('a' => array('href' => array(), 'target' => array()))),					
				),			
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Height", "frv-logipro-essentials"),
					"param_name" => "height",
					"admin_label" => true,
					"value" => "350px"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Address", "frv-logipro-essentials"),
					"param_name" => "address_",
					"admin_label" => true,
					"value" => esc_attr__("Melbourne, Australia", "frv-logipro-essentials")
				),
				array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Caption", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => true,
					"value" => esc_attr__("Caption", "frv-logipro-essentials")
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Zoom Level", "frv-logipro-essentials"),
					"param_name" => "zoom",
					"admin_label" => true,
					"value" => "13"
				),			
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Custom Icon", "frv-logipro-essentials"),
					"param_name" => "custom_icon",
					"description" => esc_attr__("You can select a custom icon for your pin on the map", "frv-logipro-essentials"),
					"admin_label" => false,
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"heading" => esc_attr__("Hue Color", "frv-logipro-essentials"),
					"param_name" => "hue",
					"admin_label" => false,
					"value" => "#FF0000"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Saturation", "frv-logipro-essentials"),
					"param_name" => "saturation",
					"admin_label" => true,
					"value" => "-30"
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Lightness", "frv-logipro-essentials"),
					"param_name" => "lightness",
					"admin_label" => true,
					"value" => "0"
				)		
		   )
		) );
	}		
	
	/**
	* Counter
	*/
	if (!function_exists('ozy_vc_count_to')) {
		function ozy_vc_count_to( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_count_to', $atts);
			extract(shortcode_atts(array(
				'color' 		=> '#000000',
				'from'			=> 0,
				'to'			=> 100,
				'subtitle' 		=> '',
				'sign'			=> '',
				'signpos'		=> 'right',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}	
			
			return '<div class="ozy-counter '. $css_animation .'" style="color:'. esc_attr($color) .'"><div class="timer" data-sign="'. esc_attr($sign) .'" data-signpos="'. esc_attr($signpos) .'" data-from="'. esc_attr($from) .'" data-to="'. esc_attr($to) .'">'. esc_attr($from) .'</div><div class="hr" style="background-color:'. esc_attr($color) .'"></div>'. (esc_attr($subtitle) ? '<span>'. esc_attr($subtitle) .'</span>' : '') .'</div>';
		}
		
		add_shortcode('ozy_vc_count_to', 'ozy_vc_count_to');
		
		vc_map( array(
			"name" => esc_attr__("Count To", "frv-logipro-essentials"),
			"base" => "ozy_vc_count_to",
			"icon" => "",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"icon" => "icon-wpb-ozy-el",
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title", "frv-logipro-essentials"),
					"param_name" => "subtitle",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Counter title.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("From", "frv-logipro-essentials"),
					"param_name" => "from",
					"admin_label" => true,
					"value" => "0",
					"description" => esc_attr__("Counter start from", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("To", "frv-logipro-essentials"),
					"param_name" => "to",
					"admin_label" => true,
					"value" => "100",
					"description" => esc_attr__("Counter count to", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sign", "frv-logipro-essentials"),
					"param_name" => "sign",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter a sign like % or whatever you like", "frv-logipro-essentials")
				),array(
					"type" => "dropdown",
					"heading" => esc_attr__("Sign Position", "frv-logipro-essentials"),
					"param_name" => "signpos",
					"value" => array('right', 'left'),
					"admin_label" => false,
					"description" => esc_attr__("Select position of your sign.", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"heading" => esc_attr__("Forecolor", "frv-logipro-essentials"),
					"param_name" => "color",
					"value" => "#000000",
					"admin_label" => false
				),$add_css_animation
		   )
		) );	
	}
	
	/**
	* Team Member Carousel
	*/
	if (!function_exists('ozy_vc_teammember_carousel')) {
		function ozy_vc_teammember_carousel( $atts, $content = null ) {
			$atts = vc_map_get_attributes('ozy_vc_teammember_carousel', $atts);
			extract(shortcode_atts(array(
				'autoplay'		=> 'true',
				'groupcells'	=> 'false',
				'navigation_dots'=> 'true',
				'navigation_arrows'=> 'false',
				'item_count' => '4',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
					
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$output = '<div class="carousel flickity-carousel team-carousel item-count-'. esc_attr($item_count) .'" data-flickity=\'{ "pageDots": '. esc_attr($navigation_dots) .', "prevNextButtons": '. esc_attr($navigation_arrows) .', "groupCells": '. esc_attr($groupcells) .', "contain" : true, "cellAlign": "left", "adaptiveHeight": false, "imagesLoaded": true, "setGallerySize": true, "autoPlay": '. esc_attr($autoplay) .' }\'>';
			$output.= do_shortcode( $content );
			$output.= PHP_EOL .'</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_teammember_carousel', 'ozy_vc_teammember_carousel');
		
		vc_map( array(
			"name" => __("Team Member Carousel", "frv-logipro-essentials"),
			"base" => "ozy_vc_teammember_carousel",
			"as_parent" => array('only' => 'ozy_vc_team_member,ozy_vc_team_member_simple'),
			"content_element" => true,
			"show_settings_on_create" => true,
			"is_container" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(			
				array(
					"type" => "dropdown",
					"heading" => __("Auto Play", "frv-logipro-essentials"),
					"param_name" => "autoplay",
					"value" => array("true", "false", "1000", "2000", "3000", "4000", "5000", "6000", "7000", "8000", "9000", "10000"),
					"admin_label" => true,
					"description" => __("Change to any available integrer for example 3000 to play every 3 seconds. If you set it true default speed will be 5 seconds.", "frv-logipro-essentials")
				),		
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Cell Group", "frv-logipro-essentials"),
					"param_name" => "groupcells",
					"value" => array("false", "true", "2", "3", "4", "5", "6"),
					"admin_label" => true,
					"description" => esc_attr__("This variable allows you to set the maximum amount of items displayed at a time with the widest browser width.", "frv-logipro-essentials")
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Visible Item Count", "frv-logipro-essentials"),
					"param_name" => "item_count",
					"value" => array("4", "2", "3"),
					"admin_label" => true,
					"description" => esc_attr__("Choose how many items will be visible on the carousel at once.", "frv-logipro-essentials")
				),				
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Dots", "frv-logipro-essentials"),
					"param_name" => "navigation_dots",
					"value" => array("true", "false"),
					"description" => esc_attr__("Show navigation dots on this carousel.", "frv-logipro-essentials")
				),
				array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Show Arrows", "frv-logipro-essentials"),
					"param_name" => "navigation_arrows",
					"value" => array("false", "true"),
					"description" => esc_attr__("Show navigation arrows on this carousel.", "frv-logipro-essentials")
				),
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		   ,"js_view" => 'VcColumnView'
		) );
		
		class WPBakeryShortCode_Ozy_Vc_Teammember_Carousel extends WPBakeryShortCodesContainer{}		
	}	
	
	/**
	* Team Member
	*/
	if (!function_exists('ozy_vc_team_member')) {
		function ozy_vc_team_member( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_team_member', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'title' => '',
				'sub_title' => '',
				'excerpt' => '',			
				'twitter' => '',
				'facebook' => '',
				'linkedin' => '',
				'pinterest' => '',
				'link' => '',
				'link_caption' => '',
				'use_extended_content' => 'off',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$output = PHP_EOL . '<div class="ozy-team_member carousel-cell '. $css_animation . ($use_extended_content==='on' ? ' has-extended-content':'') .'">' . PHP_EOL;
			$output.= '<figure>';
			$member_image = wp_get_attachment_image_src($image, 'full');$member_image_bg = '';
			if(isset($member_image[0])) {
				$output.= $link? '<a href="'. esc_attr($link) .'">' : '';
				$member_image_bg = 'style="background-image:url('. $member_image[0] .');"';				
				$output.= $member_image = '<img src="'. $member_image[0] .'" alt="'. esc_attr($title) .'">';
				$output.= $link? '</a>' : '';				
			}else{
				$member_image = $member_image_bg = '';
			}
			$output.= '<figcaption>';
			$output.= esc_attr($title) ? '<h3>'. esc_attr($title) .'</h3>' : '';
			$output.= esc_attr($sub_title) ? '<h5 class="content-color-alternate">'. esc_attr($sub_title) .'</h5>' : '';
			$output.= '<p>'. esc_attr($excerpt) .'</p>';

			$output.= '<div>';
			$output.= esc_attr($twitter) ? '<a href="http://www.twitter.com/'. esc_attr($twitter) .'" target="_blank" class="symbol-twitter tooltip" title="twitter"><span class="symbol">twitter'.'</span></a>' : '';
			$output.= esc_attr($facebook) ? '<a href="http://www.facebook.com/'. esc_attr($facebook) .'" target="_blank" class="symbol-facebook tooltip" title="facebook"><span class="symbol">facebook'.'</span></a>' : '';
			$output.= esc_attr($linkedin) ? '<a href="http://www.linkedin.com/'. esc_attr($linkedin) .'" target="_blank" class="symbol-linkedin tooltip" title="linkedin"><span class="symbol">linkedin'.'</span></a>' : '';
			$output.= esc_attr($pinterest) ? '<a href="http://pinterest.com/'. esc_attr($pinterest) .'" target="_blank" class="symbol-pinterest tooltip" title="pinterest"><span class="symbol">pinterest'.'</span></a>' : '';
			$output.= '</div>';
			
			$output.= '</figcaption>';
			$output.= '</figure>';
			$output.= ($use_extended_content==='on' ? '<div class="extended-content" data-rand_id="'. rand(10,10000) .'"><table class="team-member-lightbox-table"><tr><td><div '. $member_image_bg .'>'. $member_image .'</div></td><td class="content-font"><div><h2 class="heading-font">'. $title . '</h2>'. do_shortcode($content) . ($link && $link_caption ? '<a href="'. esc_url($link) .'" class="lightbox-book-me-now clearfix">'. esc_attr($link_caption) .'</a>':'') .'</div></td></tr></table></div>' : '');
			$output.= PHP_EOL . '</div>' . PHP_EOL;		
			
			return $output;
		}

		add_shortcode( 'ozy_vc_team_member', 'ozy_vc_team_member' );
		
		vc_map( array(
			"name" => esc_attr__("Team Member", "frv-logipro-essentials"),
			"base" => "ozy_vc_team_member",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Member Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select image for your team member.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title for your Team Member, like a name.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title", "frv-logipro-essentials"),
					"param_name" => "sub_title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Sub Title for your Team Member, like work title.", "frv-logipro-essentials")
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => ""
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Twitter", "frv-logipro-essentials"),
					"param_name" => "twitter",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter your Twitter account name", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Facebook", "frv-logipro-essentials"),
					"param_name" => "facebook",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter your Facebook account name", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("LinkedIn", "frv-logipro-essentials"),
					"param_name" => "linkedin",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter your LinkedIn account name", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Pinterest", "frv-logipro-essentials"),
					"param_name" => "pinterest",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Enter your Pinterest account name", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Define a path to details page", "frv-logipro-essentials")
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Use Extended Content", "frv-logipro-essentials"),
					"param_name" => "use_extended_content",
					"value" => array("off", "on"),
					"description" => esc_attr__("Link will be used in extended content when this option used.", "frv-logipro-essentials")
				),array(
					"type" => "textarea_html",
					"heading" => esc_attr__("Extended Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"value" => "",
					"admin_label" => false,
					"dependency" => Array('element' => "use_extended_content", 'value' => 'on')
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Link Caption", "frv-logipro-essentials"),
					"param_name" => "link_caption",
					"admin_label" => false,
					"value" => esc_attr__("SEND AN EMAIL", "frv-logipro-essentials"),
					"dependency" => Array('element' => "use_extended_content", 'value' => 'on')					
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Team_Member extends WPBakeryShortCode{}	
	}

	/**
	* Team Member (Simple)
	*/
	if (!function_exists('ozy_vc_team_member_simple')) {
		function ozy_vc_team_member_simple( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_team_member_simple', $atts);
			extract(shortcode_atts(array(
				'image' => '',
				'title' => '',
				'excerpt' => '',
				'link' => '',
				'use_extended_content' => 'off',
				'link_caption' => 'availability',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}
			
			$rand_id = 'otms-' . rand(10, 100000);
			
			$output = PHP_EOL . '<div id="'. esc_attr($rand_id) .'" class="ozy-team_member_simple carousel-cell '. $css_animation . ($use_extended_content==='on' ? ' has-extended-content':'') .'">' . PHP_EOL;
			$output.= '<figure>';
			$member_image = wp_get_attachment_image_src($image, 'full');
			if(isset($member_image[0])) {
				$output.= '<img src="'. $member_image[0] .'" alt="'. esc_attr($title) .'">';
			}
			$output.= '<figcaption>';
			$output.= esc_attr($title) ? '<h4 class="content-color">'. esc_attr($title) .'</h4>' : '';
			$output.= esc_attr($excerpt) ? '<p class="content-color">'. esc_attr($excerpt) .'</p>' : '';
			$link = vc_build_link($link);
			if($use_extended_content == 'off' && (is_array($link) && isset($link['url']) && isset($link['title']) && $link['url'] && $link['title'])) {
				$output .= '<a href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']).'"':'').' class="generic-button">'. $link['title'] .' <img src="'. esc_url(plugins_url( 'images/right-arrow.svg', __FILE__ )) .'" class="svg" alt=""/></a>';
			}
			if($use_extended_content == 'on') {
				$output .= '<a href="#show-more" class="show-more generic-button">'. $link_caption .' <img src="'. esc_url(plugins_url( 'images/right-arrow.svg', __FILE__ )) .'" class="svg" alt=""/></a>';
			}
			$output.= '</figcaption>';

			$output.= '</figure>';
			
			$output.= ($use_extended_content==='on' ? '<div class="extended-content">'. $content .'</div>' : '');
			$output.= PHP_EOL . '</div>' . PHP_EOL;

			return $output;
		}

		add_shortcode( 'ozy_vc_team_member_simple', 'ozy_vc_team_member_simple' );
		
		vc_map( array(
			"name" => esc_attr__("Team Member (Simple)", "frv-logipro-essentials"),
			"base" => "ozy_vc_team_member_simple",
			"icon" => "icon-wpb-ozy-el",
			"class" => '',
			"controls" => "full",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Member Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => "",
					"description" => esc_attr__("Select image for your team member.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Title for your Team Member, like a name.", "frv-logipro-essentials")
				),array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Excerpt", "frv-logipro-essentials"),
					"param_name" => "excerpt",
					"admin_label" => true,
					"value" => "",
					"description" => esc_attr__("Short content, will be shown under title.", "frv-logipro-essentials")
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => 'dropdown',
					"heading" => esc_attr__("Use Extended Content", "frv-logipro-essentials"),
					"param_name" => "use_extended_content",
					"value" => array("off", "on"),
					"description" => esc_attr__("Link will be ignored when extended content used to display in page content.", "frv-logipro-essentials")
				),array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Link Caption", "frv-logipro-essentials"),
					"param_name" => "link_caption",
					"admin_label" => false,
					"value" => esc_attr__("Biography", "frv-logipro-essentials"),
					"dependency" => Array('element' => "use_extended_content", 'value' => 'on')					
				),array(
					"type" => "textarea_html",
					"heading" => esc_attr__("Extended Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"value" => "",
					"admin_label" => false,
					"dependency" => Array('element' => "use_extended_content", 'value' => 'on')
				),$add_css_animation
		   )
		) );	
		
		class WPBakeryShortCode_Ozy_Vc_Team_Member_Simple extends WPBakeryShortCode{}	
	}

	/**
	* CTA With Hover Box
	*/
	if (!function_exists('ozy_vc_cta_hover_box')) {
		function ozy_vc_cta_hover_box( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_cta_hover_box', $atts);
			extract(shortcode_atts(array(
				'size'			=> '',
				'image'			=> '',
				'caption'		=> '',
				'icon'			=> '',
				'position'		=> 'left',
				'bg_color'		=> '',
				'bg_color_hover'=> '',
				'bg_color_overlay'=> '',
				'fn_color'		=> '',
				'fn_color_hover'=> '',
				'border_color'	=> 'rgba(204, 204, 204, 0.5)',
				'link'			=> '',
				'extra_css'		=> '',
				'min_height'	=> '240px',
				'css_animation' => ''
			), $atts));
			
			wp_enqueue_style('logipro-cta-hover-box');
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$rand_id = 'ochvbx-' . rand(0, 10000);
			$style = '';
			$image = wp_get_attachment_image_src($image, 'full');		
			if(isset($image[0])) { $style .= 'background-image:url('. esc_url($image[0]) .');'; }
			
			$output = '<div id="'. esc_attr($rand_id) .'" class="ozy-cta-hover-box '. esc_attr($size) .' box-'. esc_attr($position) .' wpb_content_element '. $css_animation .'" style="'. $style .';min-height:'. esc_attr($min_height) .'">';
			$link = vc_build_link($link);
			if(is_array($link) && isset($link['url'])) {
				$output.= '<a href="'. esc_url($link['url']) .'" '. (isset($link['target']) ? ' target="'. esc_attr($link['target']) .'"' : '') .' class="heading-font-family">';
			}else{
				$output.= '<a href="#" class="heading-font-family">';
			}
			$output.= strip_tags(force_balance_tags($content), '<p><strong><i><br><h2><h3><h4><h5><h6>');
			if($icon) {
				$output.= '<i class="'. esc_attr($icon) .' box-icon"></i>';
			}			
			$output.= '</a>';
			$output.= '</div>';

			global $ozyLogiProHelper;
			if(!function_exists('logipro_ozy_get_theme_mod') || !is_object($ozyLogiProHelper)) return null;
			$ozyLogiProHelper->set_footer_style("#$rand_id{background-color:". esc_attr($bg_color) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id>a:hover{background-color:". esc_attr($bg_color_hover) ."}");
			$ozyLogiProHelper->set_footer_style("#content #$rand_id>a,#content #$rand_id>a h2,#content #$rand_id>a h3,#content #$rand_id>a h3,#content #$rand_id>a h4,#content #$rand_id>a h5,#content #$rand_id>a h6,#content #$rand_id>a>i.box-icon{color:". esc_attr($fn_color) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id{box-shadow: 0 0 2px 1px ". esc_attr($border_color) .";}");
			$ozyLogiProHelper->set_footer_style("#content #$rand_id>a:hover,#content #$rand_id>a:hover h2,#content #$rand_id>a:hover h3,#content #$rand_id>a:hover h3,#content #$rand_id>a:hover h4,#content #$rand_id>a:hover h5,#content #$rand_id>a:hover h6,#content #$rand_id>a:hover>i.box-icon{color:". esc_attr($fn_color_hover) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id.half_box>a{background-color:". esc_attr($ozyLogiProHelper->hex2rgba(esc_attr($bg_color_overlay), '0.5')) ."}");
			$ozyLogiProHelper->set_footer_style("#$rand_id.half_box>a:hover{background-color:". esc_attr($bg_color_overlay) ."}");
			
			return $output;
		}
		
		add_shortcode('ozy_vc_cta_hover_box', 'ozy_vc_cta_hover_box');
		
		vc_map( array(
			"name" => esc_attr__("CTA With Hover Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_cta_hover_box",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Size", "frv-logipro-essentials"),
					"param_name" => "size",
					"value" => array("full_box", "half_box"),
					"admin_label" => true
				),array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => esc_attr__("Content", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => false,
					"description" => esc_attr("Only simple HTML tags are allowed (p, strong, i, br, h2-h6)", "frv-logipro-essentials")
				),array(
					"type" => "select_an_icon",
					"heading" => esc_attr__("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false
				),array(
					"type" => "dropdown",
					"heading" => esc_attr__("Overlay Position", "frv-logipro-essentials"),
					"param_name" => "position",
					"value" => array("left", "right"),
					"admin_label" => false,
					"description" => esc_attr("Only available for half_box size option", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Box Background", "frv-logipro-essentials"),
					"param_name" => "bg_color",
					"admin_label" => false,
					"value" => "#ffffff"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Box Background Hover", "frv-logipro-essentials"),
					"param_name" => "bg_color_hover",
					"admin_label" => false,
					"value" => "#352C66"
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Overlay Background", "frv-logipro-essentials"),
					"param_name" => "bg_color_overlay",
					"admin_label" => false,
					"value" => "#352C66",
					"description" => esc_attr("Only available for half_box size option", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Font Color", "frv-logipro-essentials"),
					"param_name" => "fn_color",
					"admin_label" => false,
					"value" => "#333333",
					"description" => esc_attr("You may like to use same Font Color as hover font color when half_box size option selected", "frv-logipro-essentials")
				),array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_attr__("Font Color Hover", "frv-logipro-essentials"),
					"param_name" => "fn_color_hover",
					"admin_label" => false,
					"value" => "#ffffff"
				),array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_attr("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true,
					"value" => ""
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Min Height", "frv-logipro-essentials"),
					"param_name" => "min_height",
					"admin_label" => true,
					"value" => '240px'
				),		
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}	
	
	/**
	* Call To Action Box
	*/
	if (!function_exists('ozy_vc_calltoactionbox')) {
		function ozy_vc_calltoactionbox( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_calltoactionbox', $atts);
			extract(shortcode_atts(array(
				'image'			=> '',
				'caption'		=> '',
				'icon'			=> '',
				'link_caption' 	=> '',
				'link'			=> '',
				'link_target'	=> '_self',
				'extra_css'		=> '',
				'height'		=> '0',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$style = '';
			$image = wp_get_attachment_image_src($image, 'full');		
			if(isset($image[0])) { $style .= 'background-image:url('. esc_url($image[0]) .');'; }
			if((int)$height>0) { $style .= 'min-height:' . (int)$height .'px'; }
			
			$output = '<div class="ozy-call-to-action-box '. $css_animation .'" style="'. esc_attr($style) .'">';			
			$output .= '<div class="shadow-wrapper"></div>';
			$output .= '<div class="overlay-wrapper">';
			$output .= '<h3>'. $caption .'</h3>';
			
			$output .= '<a href="'. esc_url($link) .'" target="'. esc_attr($link_target) .'" class="heading-font">'. $link_caption .'</a>';
			if($icon) {
				$output .= '<i class="'. esc_attr($icon) .'"></i>';
			}
			$output .= '</div>';
			$output .= '</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_calltoactionbox', 'ozy_vc_calltoactionbox');
		
		vc_map( array(
			"name" => esc_attr__("Call To Action Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_calltoactionbox",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),		
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Caption", "frv-logipro-essentials"),
					"param_name" => "caption",
					"admin_label" => true,
					"value" => esc_attr__("Box Title", "frv-logipro-essentials")
				),				
				array(
					"type" => "select_an_icon",
					"heading" => esc_attr__("Icon", "frv-logipro-essentials"),
					"param_name" => "icon",
					"value" => '',
					"admin_label" => false
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Link Caption", "frv-logipro-essentials"),
					"param_name" => "link_caption",
					"admin_label" => true,
					"value" => esc_attr__("SHOP USED EQUIPMENT &rarr;", "frv-logipro-essentials")
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Link", "frv-logipro-essentials"),
					"param_name" => "link",
					"admin_label" => true
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Link Target", "frv-logipro-essentials"),
					"param_name" => "link_target",
					"value" => array("_self", "_blank", "_parent"),
					"admin_label" => false,
					"description" => esc_attr__("Select link target window.", "frv-logipro-essentials")
				),	
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Min Height", "frv-logipro-essentials"),
					"param_name" => "height",
					"admin_label" => true,
					"description" => esc_attr__("Optional, please use 0 for automatic height.", "frv-logipro-essentials"),
					"value" => '0'
				),				
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}
	
	/**
	* Blockquote Box
	*/
	if (!function_exists('ozy_vc_blockquotebox')) {
		function ozy_vc_blockquotebox( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_blockquotebox', $atts);
			extract(shortcode_atts(array(
				'image'			=> '',
				'title'			=> '',
				'sub_title1'	=> '',
				'sub_title2'	=> '',
				'image_align'	=> 'left',
				'extra_css'		=> '',
				'css_animation' => ''
			), $atts));
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$image_src = wp_get_attachment_image_src($image, 'full'); $image = ''; $has_image = 'has_image';
			if(isset($image_src[0])) {
				$image = '<span class="img-wrapper" class="shared-border-color" style="background-image:url('. esc_url($image_src[0]) .')">&nbsp;</span>';
			}else{
				$has_image = '';
			}
			
			$output = '
				<div class="ozy-testimonial-quote group '. $css_animation . ' ' . $extra_css . ' ' . $image_align .'">
					'. ($image_align === 'left' ? $image : '') .'
					<div class="ozy-quote-container '. $has_image .'">
						<blockquote>
							<p>'. $content .'</p>
						</blockquote>  
						<cite><span>'. $title .'</span><br>
							'. $sub_title1 .'
							'. ($sub_title2 ? '<br>' . $sub_title2 : '') .'
						</cite>
					</div>
					'. ($image_align === 'right' ? $image : '') .'
				</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_blockquotebox', 'ozy_vc_blockquotebox');
		
		vc_map( array(
			"name" => esc_attr__("Blockquote Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_blockquotebox",
			"content_element" => true,
			"show_settings_on_create" => true,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "attach_image",
					"class" => "",
					"heading" => esc_attr__("Image", "frv-logipro-essentials"),
					"param_name" => "image",
					"admin_label" => false,
					"value" => ""
				),		
				array(
					"type" => "textarea",
					"class" => "",
					"heading" => esc_attr__("Quote", "frv-logipro-essentials"),
					"param_name" => "content",
					"admin_label" => true
				),				
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title #1", "frv-logipro-essentials"),
					"param_name" => "sub_title1",
					"admin_label" => true
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Sub Title #2", "frv-logipro-essentials"),
					"param_name" => "sub_title2",
					"admin_label" => true
				),
				array(
					"type" => "dropdown",
					"heading" => esc_attr__("Align", "frv-logipro-essentials"),
					"param_name" => "image_align",
					"value" => array("left", "right")
				),	
				$add_css_animation,
				array(
					"type" => "textfield",
					"heading" => esc_attr__("Extra class name", "frv-logipro-essentials"),
					"param_name" => "el_class",
					"description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "frv-logipro-essentials")
				)			
		   )
		) );
	}	
	
	/**
	* Anything Wrapper
	*/
	if (!function_exists('ozy_vc_anywrapper2')) {
		function ozy_vc_anywrapper2( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_anywrapper2', $atts);
			extract(shortcode_atts(array(
				'width' => '100%',
				'text_align' => 'left',
				'padding_top' => '30px',
				'padding_right' => '30px',
				'padding_bottom' => '30px',
				'padding_left' => '30px'
			), $atts));
			
			$style = 'ozy-anything-wrapper-x';			
			return '<div class="'. esc_attr($style) .'" style="text-align:'. esc_attr($text_align) .';width:'. esc_attr($width) .';padding:'. esc_attr($padding_top) .' '. esc_attr($padding_right) .' '. esc_attr($padding_bottom) .' '. esc_attr($padding_left) .'">'. do_shortcode($content) .'</div>';
		}
		
		add_shortcode('ozy_vc_anywrapper2', 'ozy_vc_anywrapper2');
		
		vc_map( array(
			"name" => esc_attr__("Padding Box", "frv-logipro-essentials"),
			"base" => "ozy_vc_anywrapper2",
			"as_parent" => array('except' => 'ozy_vc_iabox,ozy_vc_flipbox'),
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Width", "frv-logipro-essentials"),
					"param_name" => "width",
					"admin_label" => true,
					"value" => "100%"
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Text Align", "frv-logipro-essentials"),
					"param_name" => "text_align",
					"admin_label" => true,
					"value" => array("left","center","right")
				),						
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Padding Top", "frv-logipro-essentials"),
					"param_name" => "padding_top",
					"admin_label" => true,
					"value" => array("30px","0","5px","10px","15px","20px","25px","35px","40px","45px","50px","55px","60px","65px","70px","75px","80px","85px","90px","95px","100px","105px","110px","115px","120px","125px","130px","135px","140px","145px","150px","155px","160px","165px","170px","175px","180px","185px","190px","195px","200px")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Padding Right", "frv-logipro-essentials"),
					"param_name" => "padding_right",
					"admin_label" => true,
					"value" => array("30px","0","5px","10px","15px","20px","25px","35px","40px","45px","50px","55px","60px","65px","70px","75px","80px","85px","90px","95px","100px","105px","110px","115px","120px","125px","130px","135px","140px","145px","150px","155px","160px","165px","170px","175px","180px","185px","190px","195px","200px")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Padding Bottom", "frv-logipro-essentials"),
					"param_name" => "padding_bottom",
					"admin_label" => true,
					"value" => array("30px","0","5px","10px","15px","20px","25px","35px","40px","45px","50px","55px","60px","65px","70px","75px","80px","85px","90px","95px","100px","105px","110px","115px","120px","125px","130px","135px","140px","145px","150px","155px","160px","165px","170px","175px","180px","185px","190px","195px","200px")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_attr__("Padding Left", "frv-logipro-essentials"),
					"param_name" => "padding_left",
					"admin_label" => true,
					"value" => array("30px","0","5px","10px","15px","20px","25px","35px","40px","45px","50px","55px","60px","65px","70px","75px","80px","85px","90px","95px","100px","105px","110px","115px","120px","125px","130px","135px","140px","145px","150px","155px","160px","165px","170px","175px","180px","185px","190px","195px","200px")
				)									
		   ),
		   "js_view" => 'VcColumnView'
		) );
	}

	class WPBakeryShortCode_Ozy_Vc_Anywrapper2 extends WPBakeryShortCodesContainer{}
	
	/**
	* LogiPro Doodle
	*/
	if (!function_exists('ozy_vc_logipro_doodle')) {
		function ozy_vc_logipro_doodle( $atts, $content = null ) {
            $atts = vc_map_get_attributes('ozy_vc_logipro_doodle', $atts);
			extract(shortcode_atts(array(
				'title'			=> '',
				'css_animation' => ''
			), $atts));
						
			wp_enqueue_script('logipro-doodle-createjs');
			wp_enqueue_script('logipro-doodle');
			
			if($css_animation) {
				wp_enqueue_style( 'animate-css' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_'. esc_attr($css_animation) .' '. esc_attr($css_animation) .' wpb_start_animation animated ';
			}

			$output = 
			'<div id="animation_container" class="'. $css_animation .'" style="width:100%; ">
				<canvas id="canvas" width="100%" style="position: absolute; display: block;"></canvas>
				<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:100%; position: absolute; left: 0px; top: 0px; display: block;">
				</div>
			</div>';
			
			return $output;
		}
		
		add_shortcode('ozy_vc_logipro_doodle', 'ozy_vc_logipro_doodle');
		
		vc_map( array(
			"name" => esc_attr__("LogiPro Doodle", "frv-logipro-essentials"),
			"base" => "ozy_vc_logipro_doodle",
			"content_element" => true,
			"show_settings_on_create" => false,
			"icon" => "icon-wpb-ozy-el",
			'category' => 'FreeVision Custom',
			"params" => array(
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_attr__("Title", "frv-logipro-essentials"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => esc_attr__("Just a place holder", "frv-logipro-essentials")
				),				
				$add_css_animation
		   )
		) );
	}
}
?>
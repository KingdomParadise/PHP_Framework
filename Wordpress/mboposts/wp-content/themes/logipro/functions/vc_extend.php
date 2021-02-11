<?php
vc_add_param("vc_icon", array(
	"type" => 'checkbox',
	"heading" => esc_attr__("Open link in LightBox?", "logipro"),
	"param_name" => "light_box",
	"value" => Array(esc_attr__("Yes, please", "logipro") => '1'),
	"weight" => "1"
));

vc_add_param("vc_row", array(
	"type" => 'checkbox',
	"heading" => esc_attr__("Hide Background Image (mobile)", "logipro"),
	"param_name" => "row_no_mobile_bg",
	"description" => esc_attr__("Background image will not visible on mobile devices if check.", "logipro"),
	"value" => Array(esc_attr__("Yes, please", "logipro") => '1'),
	"group" => esc_attr__("Design Options", "logipro")
));

vc_add_param("vc_row", array(
	"type" => 'dropdown',
	"heading" => esc_attr__("Background Slider", "logipro"),
	"param_name" => "bg_slider",
	"description" => esc_attr__("If selected, you can select background images for your row.", "logipro"),
	"value" => array("off", "on"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "attach_images",
	"heading" => esc_attr__("Images", "logipro"),
	"param_name" => "bg_slider_images",
	"description" => esc_attr__("Select images for your slider", "logipro"),
	"dependency" => Array('element' => "bg_slider", 'value' => 'on'),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_attr__("Fallback Image", "logipro"),
	"param_name" => "bg_slider_fallback_image",
	"description" => esc_attr__("Please select a fallback image to use on mobile devices and small screens.", "logipro"),
	"dependency" => Array('element' => "bg_slider", 'value' => 'on'),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"heading" => __('Background Scroll', 'logipro'),
	"param_name" => "bg_scroll",
	"value" => array(
			  esc_attr__(" ", 'logipro') => '',
			  esc_attr__("Left", 'logipro') => 'h,-1',
			  esc_attr__("Right", 'logipro') => 'h,1',
			  esc_attr__('Top', 'logipro') => 'y,-1',
			  esc_attr__('Bottom', 'logipro') => 'y,1'
			),
	"description" => esc_attr__("Please do not use with other Background Options", "logipro"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => 'dropdown',
	"heading" => esc_attr__("Particles Bacground Effect", "logipro"),
	"param_name" => "particles_background",
	"value" => array("off", "on"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => 'dropdown',
	"heading" => esc_attr__("Self Hosted Background Video", "logipro"),
	"param_name" => "bg_video",
	"description" => esc_attr__("If selected, you can select background video for your row.", "logipro"),
	"value" => array("off" => "off", "on" => "on"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_attr__("Video Path", "logipro"),
	"param_name" => "bg_video_path",
	"description" => esc_attr__("Please type path of your self hosted MP4 file here.", "logipro"),
	"dependency" => Array('element' => "bg_video", 'value' => 'on'),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"heading" => esc_attr__("Fallback Image", "logipro"),
	"param_name" => "bg_video_fallback_image",
	"description" => esc_attr__("Please select a fallback image to use on mobile devices and small screens.", "logipro"),
	"dependency" => Array('element' => "bg_video", 'value' => 'on'),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => 'dropdown',
	"heading" => esc_attr__("Bottom Arrow?", "logipro"),
	"param_name" => "bottom_arrow",
	"value" => array("off" => "off", "on" => "on"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_attr__("Caption", "logipro"),
	"param_name" => "bottom_arrow_caption",
	"dependency" => Array('element' => "bottom_arrow", 'value' => 'on'),
	"value" => esc_attr("SCROLL DOWN", "logipro"),
	"group" => esc_attr__("FreeVision Custom", "logipro")	
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"heading" => esc_attr__("Row Caption", "logipro"),
	"param_name" => "row_caption",
	"description" => esc_attr__("Requires Row ID parameter, only works when you use One Page Side Navigation option on Page Options panel.", "logipro"),
	"weight" => "0"
));

vc_add_param("vc_column", array(
	"type" => 'checkbox',
	"heading" => esc_attr__("Use Custom Typography Options", "logipro"),
	"param_name" => "column_use_custom_typography",
	"description" => esc_attr__("If selected, few custom typography options will appear.", "logipro"),
	"value" => Array(esc_attr__("Yes, please", "logipro") => '1'),
	"group" => esc_attr__("FreeVision Custom", "logipro")
));

vc_add_param("vc_column", array(
	"type" => "colorpicker",
	"heading" => esc_attr__("Color", "logipro"),
	"param_name" => "column_use_custom_typography_color",
	"dependency" => Array('element' => "column_use_custom_typography", 'value' => '1'),
	"value" => logipro_ozy_get_theme_mod('content_color'),
	"group" => esc_attr__("FreeVision Custom", "logipro")
));

vc_add_param("vc_column", array(
	"type" => "textfield",
	"heading" => esc_attr__("Size (px)", "logipro"),
	"param_name" => "column_use_custom_typography_size",
	"dependency" => Array('element' => "column_use_custom_typography", 'value' => '1'),
	"value" => "16px", //logipro_ozy_get_theme_mod('typography_font_size'),
	"group" => esc_attr__("FreeVision Custom", "logipro"),
	"description" => esc_attr__("You can also use this like; 16px, 16em...", "logipro"),
));

vc_add_param("vc_column", array(
	"type" => "textfield",
	"heading" => esc_attr__("Line Height (em)", "logipro"),
	"param_name" => "column_use_custom_typography_line_height",
	"dependency" => Array('element' => "column_use_custom_typography", 'value' => '1'),
	"value" => "1.5em", //logipro_ozy_get_theme_mod('typography_font_line_height'),
	"group" => esc_attr__("FreeVision Custom", "logipro")
));

vc_add_param("vc_column", array(
	"type" => "dropdown",
	"heading" => esc_attr__('Text Align', 'logipro'),
	"param_name" => "column_use_custom_typography_align",
	"value" => array(
			  esc_attr__("-leave as is-", 'logipro') => '',
			  esc_attr__("Left", 'logipro') => 'left',
			  esc_attr__("Right", 'logipro') => 'right',
			  esc_attr__('Center', 'logipro') => 'center'
			),
	"group" => esc_attr__("FreeVision Custom", "logipro"),
	"dependency" => Array('element' => "column_use_custom_typography", 'value' => '1')	
));

vc_add_param("vc_column", array(
	"type" => 'checkbox',
	"heading" => esc_attr__("Override Heading Colors", "logipro"),
	"param_name" => "column_use_custom_typography_ovverride_headings",
	"description" => esc_attr__("If selected, H1-H6 tags will be forced to use this text color selection.", "logipro"),
	"value" => Array(esc_attr__("Yes, please", "logipro") => '1'),
	"group" => esc_attr__("FreeVision Custom", "logipro"),
	"dependency" => Array('element' => "column_use_custom_typography", 'value' => '1')
));
?>
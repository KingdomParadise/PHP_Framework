<?php
	class LogiPro_Ozy_myHelper{

		var $footer_style = '';
		var $footer_script = '';
		var $footer_html = '';
		var $vertical_nav_buttons = array();
		var $wpml_current_language = ''; //blank = default language
		var $non_google_fonts = array(
			'Verdana,*Geneva,*sans-serif', 
			'Georgia, Times*New*Roman, Times, serif', 
			'Courier*New, Courier, monospace', 
			'Arial, Helvetica, sans-serif', 
			'Tahoma, Geneva, sans-serif', 
			'Palatino*Linotype, Book*Antiqua, Palatino, serif', 
			'Trebuchet*MS, Arial, Helvetica, sans-serif', 
			'Arial*Black, Gadget, sans-serif', 
			'Times*New*Roman, Times, serif', 
			'Lucida*Sans*Unicode, Lucida*Grande, sans-serif', 
			'MS*Serif, New*York', 
			'Lucida*Console, Monaco, monospace', 
			'Comic*Sans*MS, cursive'
		);
		var $active_google_fonts = array();
		var $active_custom_fonts = array();
		
		var $wp_date_format	= array();
		
		function __construct(){
			//to-do
			$this->wp_date_format = $this->logipro_prepare_date_format_for_blog();
		}
		
		/**
		* logipro_prepare_date_format_for_blog
		*
		* Use in blog listing, splits the date format string and put in an array
		*/		
		function logipro_prepare_date_format_for_blog() {
			$wp_date_format = str_replace(',', '', get_option('date_format'));
			$wp_date_format = str_replace(' ', '/', $wp_date_format);
			$wp_date_format = str_replace('-', '/', $wp_date_format);
			$wp_date_format = str_replace('.', '/', $wp_date_format);
			$wp_date_format = explode('/', $wp_date_format);
			if(!is_array($wp_date_format) || count($wp_date_format)<2) {
				$wp_date_format[0] = 'M';
				$wp_date_format[1] = 'd';
				$wp_date_format[2] = 'Y';
			}
			return $wp_date_format;			
		}
		
		/**
		* set_footer_script
		*
		* Puts footer script
		*
		* @entry - String, any.		
		*/
		function set_footer_script($entry) {
			$this->footer_script .= $entry;
		}
		
		/**
		* set_footer_script
		*
		* Puts footer style
		*
		* @entry - String, any.		
		*/		
		function set_footer_style($entry) {
			$this->footer_style .= $entry;
		}

		/**
		* set_footer_html
		*
		* Puts footer HTML
		*
		* @entry - String, any.		
		*/		
		function set_footer_html($entry) {
			$this->footer_html .= $entry;
		}

		/**
		* rgba2rgb
		*
		* Converts rgba to rgb for old browsers
		*
		* @rgba - String, rgba formated.		
		*/			
		function rgba2rgb($rgba) {
			$rgb = $rgba = strtolower($rgba); 
			$rgba_arr = explode(',', $rgba);
			if( isset($rgba_arr[0]) && isset($rgba_arr[1]) && isset($rgba_arr[2]) )
				$rgb = $rgba_arr[0] . ',' . $rgba_arr[1] . ',' . $rgba_arr[2] . ')'; $rgb = str_replace('rgba', 'rgb', $rgb);
				
			return $rgb;
		}

		/**
		* has_shortcode
		*
		* Check the current post for the existence of a short code
		*
		* @shortcode - String
		*/
		function has_shortcode( $shortcode = NULL, $post_id = NULL ) {
			if(have_posts()) {
				$post_to_check = get_post( $post_id ? $post_id : get_the_ID() );	

				// false because we have to search through the post content first
				$found = false;
				// if no short code was provided, return false
				if ( ! $shortcode ) {
					return $found;
				}
				// check the post content for the short code
				if ( stripos( $post_to_check->post_content, '[' . $shortcode) !== FALSE ) {
					// we have found the short code
					$found = TRUE;
				}
				// return our final results
				return $found;
			}else{
				return false;
			}
		}

		/**
		* hasIt
		*
		* Actually strpos check, only returns true or false
		*
		* @str - String
		* @needle - String
		*/
		function hasIt($str,$needle) {
			return (strpos($str, $needle)>-1?true : false);
		}

		/**
		* Convert hexdec color string to rgb(a) string
		*/
		function hex2rgba($color, $opacity = false) {
			$default = 'rgb(0,0,0)';
			//Return default if no color provided
			if(empty($color))
				  return $default; 
			//Sanitize $color if "#" is provided 
			if ($color[0] == '#' ) {
				$color = substr( $color, 1 );
			}
			//Check if color has 6 or 3 characters and get values
			if (strlen($color) == 6) {
					$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
			} elseif ( strlen( $color ) == 3 ) {
					$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
			} else {
					return $default;
			}
			//Convert hexadec to rgb
			$rgb =  array_map('hexdec', $hex);
			//Check if opacity is set(rgba or rgb)
			if($opacity){
				if(abs($opacity) > 1)
					$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
			} else {
				$output = 'rgb('.implode(",",$rgb).')';
			}
			//Return rgb(a) color string
			return $output;
		}

		/**
		* change_opacity
		*
		* Changes opacity value in RGBA color format
		*
		* @rgba - String, rgba formated.
		* @new_opacity - String, this parameter will be replaced with old opacity value	
		*/		
		function change_opacity($rgba, $new_opacity = '1') {
			$rgb = $rgba = strtolower($rgba); 
			$rgba_arr = explode(',', $rgba);
			if( isset($rgba_arr[0]) && isset($rgba_arr[1]) && isset($rgba_arr[2]) )
				$rgb = $rgba_arr[0] . ',' . $rgba_arr[1] . ',' . $rgba_arr[2] . ',' . $new_opacity . ')';
				
			return $rgb;
		}		
		
		/**
		* is_google_font
		*
		* Checks whatever if given font name is a Google Font
		*
		* @font_face - String, font face name
		*/			
		function is_google_font($font_face) {
			return in_array($font_face, $this->non_google_fonts) ? false : true;
		}
		
		/**
		* activate_google_font
		*
		* Adds give parameter to array
		*
		* @font_name - String, font name which will be added into active fonts array
		*/		
		function activate_google_font($font_name) {			
			if(!in_array($font_name, $this->active_google_fonts)) {
				array_push($this->active_google_fonts, $font_name);
			}
		}
		
		/**
		* convert_to_href
		*
		* Converts URLs to <a> elements in given content
		*
		* @content - String, content which URL will be searched in
		*/		
		function convert_to_href($content) {
			$content = preg_replace('$(\s|^)(https?://[a-z0-9_./?=&-]+)(?![^<>]*>)$i', ' <a href="$2" target="_blank">$2</a> ', $content." ");
			$content = preg_replace('$(\s|^)(www\.[a-z0-9_./?=&-]+)(?![^<>]*>)$i', '<a target="_blank" href="http://$2"  target="_blank">$2</a> ', $content." ");			
			return $content;
		}
		
		/**
		* wpml_language_switcher
		*
		* Check form WPML plugin and build language links if available
		*/			 
		function wpml_language_switcher() {
			if(function_exists("icl_get_languages") && function_exists("icl_disp_language") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")){
				$languages = icl_get_languages('skip_missing=0&orderby=code');
				echo '<div class="ozy-selectBox ozy-wpml-language-switcher"><span class="ozy-selected"></span><span class="ozy-selectArrow">&#9660</span><div class="ozy-selectOptions"><span class="ozy-selectOption"><a href="javascript:void(0);"><img src="'. esc_url($languages[ICL_LANGUAGE_CODE]['country_flag_url']) .'" alt="'. ICL_LANGUAGE_CODE .'"/>'. esc_html(ICL_LANGUAGE_NAME) .'</a></span>';
				if(!empty($languages)){
					foreach($languages as $l){
						if(ICL_LANGUAGE_CODE != $l['language_code']) {
							echo '<span class="ozy-selectOption">';
							echo '<a href="' . $l['url'] . '">';
							if($l['country_flag_url']){
								echo '<img src="' . $l['country_flag_url'] . '" height="12" alt="' . $l['language_code'] . '" width="18" />';
							}
							echo icl_disp_language($l['native_name'], '');
							echo '</a>';
							echo '</span>';
						}
					}
				}
				echo '</div></div>';
			}			
		}
		
		/**
		* render_google_fonts
		*
		* Renders necessary google font embed
		*/		
		function render_google_fonts() {
			
			// Get selected fonts from theme options panel, and check if google font selected
			$this->activate_google_font(logipro_ozy_get_theme_mod_arr_key('typography_font', array(), 'font-family'));
			$this->activate_google_font(logipro_ozy_get_theme_mod_arr_key('typography_heading_font', array(), 'font-family'));
			$this->activate_google_font(logipro_ozy_get_theme_mod_arr_key('typography_primary_menu_font', array(), 'font-family'));
			$this->activate_google_font(logipro_ozy_get_theme_mod_arr_key('footer_typography_font', array(), 'font-family'));
			
			if(!is_array($this->active_google_fonts)) 
				return NULL;
			
			$font_url = '';
			
			$extended_params = (logipro_ozy_get_theme_mod('typography_google_param') ? logipro_ozy_get_theme_mod('typography_google_param') : ":400,100,300,700");
			$extended_params_subsets = '';
			if(strpos($extended_params, '&')) {
				$extended_params_arr = explode('&', $extended_params);
				if(isset($extended_params_arr[0]) && isset($extended_params_arr[1])) {
					$extended_params_subsets = '&' . $extended_params_arr[1];
					$extended_params = $extended_params_arr[0];
				}
			}			
	
			if(count($this->active_google_fonts) > 0 && isset($this->active_google_fonts[0]) && $this->active_google_fonts[0]) {				
				$font_href = sprintf("%s", str_replace(' ', '+', implode($extended_params . "%7C", array_filter($this->active_google_fonts, 'strlen'))) . $extended_params . $extended_params_subsets);			
				$protocol = is_ssl() ? 'https' : 'http';			
				$font_url = add_query_arg( 'family', $font_href, "$protocol://fonts.googleapis.com/css" );
			}			
				
			$this->active_google_fonts = array();
			
			return $font_url;
		}		
		
		/**
		* render_custom_fonts
		*
		* Renders necessary custom font embed
		*/		
		function render_custom_fonts() {
			if(!is_array($this->active_custom_fonts)) 
				return NULL;

			foreach($this->active_custom_fonts as $fnt) {		
				echo "@font-face {\r\n";
				echo "font-family: '". esc_attr($fnt["title"]) ."';\r\n";
						echo "src: url('". esc_url($fnt["eot"]) ."');\r\n";
						echo "src: url('". esc_url($fnt["eot"]) ."?#iefix') format('embedded-opentype'),\r\n";
						echo "url('". esc_url($fnt["woff"]) ."') format('woff'),\r\n";
						echo "url('". esc_url($fnt["ttf"]) ."') format('truetype'),\r\n";
						echo "url('". esc_url($fnt["svg"]) ."#". esc_attr($fnt["id"]) ."') format('svg');\r\n";
				echo "font-weight: ". esc_url($fnt["weight"]) .";\r\n";
				echo "font-style: ". esc_attr($fnt["style"]) .";\r\n"; 
				echo "}\r\n";
			}
			
			$this->active_custom_fonts = array();
		}		
		
		function get_custom_font($font_name) { //, $font_weight = 'normal', $font_style = 'normal'
			if($font_name) {
				$font = get_page_by_title($font_name, 'OBJECT', 'ozy_fonts');
				if(isset($font->ID)) {
					$font_grp = vp_metabox('ozy_logipro_meta_font.ozy_logipro_meta_font_group', null, $font->ID);
					if(is_array($font_grp) && count($font_grp) > 0) {						
						foreach($font_grp as $fnt) {
							$id = $fnt['ozy_logipro_meta_font_id'];
							if(!in_array($id, $this->active_custom_fonts)) {
								$fnt_arr = array();
								$fnt_arr['title'] 	= $font->post_title;
								$fnt_arr['id'] 		= $id;
								$fnt_arr['eot'] 	= $fnt['ozy_logipro_meta_font_eot'];
								$fnt_arr['woff'] 	= $fnt['ozy_logipro_meta_font_woff'];
								$fnt_arr['ttf'] 	= $fnt['ozy_logipro_meta_font_ttf'];
								$fnt_arr['svg'] 	= $fnt['ozy_logipro_meta_font_svg'];
								$fnt_arr['weight'] 	= $fnt['ozy_logipro_meta_font_weight'];//$font_weight;
								$fnt_arr['style'] 	= $fnt['ozy_logipro_meta_font_style'];//$font_style;
								
								$this->active_custom_fonts[$id] = $fnt_arr;
							}
						}
					}					
				}
			}
		}
		
		/**
		* font_style_render
		*
		* Generates font related css definitions with given paramters
		*
		* @font_face - String
		* @font_weight - String
		* @font_style - String
		* @font_size - String
		* @line_height - String
		* @color - String
		* @important - String, use this to add !important parameters
		*/		
		function font_style_render($font_face = '', $font_weight = 'normal', $font_style = 'normal', $font_size = '', $line_height = '', $color = '', $important = '', $letter_spacing='normal' ) {
			$o = '';
			
			// Custom font?
			if(substr($font_face, 0, 3) === '___') {
				$font_face = substr($font_face, 3, strlen($font_face));
				$o.='font-family:"' . $font_face . '" ' . $important . ';';
				$this->get_custom_font($font_face);
			}else{
				if($this->is_google_font($font_face)) {
					if(trim($font_face)) {
						$o.='font-family:"' . $font_face . '"' . $important . ';';
					}
					$this->activate_google_font($font_face);
				}else{
					$font_face = str_replace('*', ' ', $font_face);
					if(trim($font_face)) {
						$o.='font-family:"' . $font_face . $important . '";';
					}
				}
			}
			
			if(trim($font_weight)) {
				$o.='font-weight:' . $font_weight . $important . ';';
			}
			if(trim($font_style)) {
				$o.='font-style:' . $font_style . $important . ';';
			}
			if(trim($font_size)) {
				$o.='font-size:' . $font_size . $important . ';';
			}
			if(trim($line_height)) {
				$o.='line-height:' . $line_height . $important . ';';
			}
			if(trim($letter_spacing) && trim($letter_spacing) != 'normal') {
				$o.='letter-spacing:' . $letter_spacing . 'px' . $important . ';';
			}			
			if(trim($color) && strpos(strtolower($color), 'rgba')) {
				$o.='color:' . $this->rgba2rgb($color) . $important . ';color:' . $color . $important . ';';
			}else if(trim($color)) {
				$o.='color:' . $color . $important . ';';
			}	
			return $o;
		}
		
		/**
		* Reads from Kirki's font component and process it. If you want some specific attribute read and return, pass an array to 'return_params' parameter.
		*/
		function font_style_render_kirki($param, $color = '', $important = '', 
			$return_params = array('font-family', 'variant', 'font-size', 'letter-spacing', 'line-height', 'text-transform')) 
		{
			$o = '';
			$value = logipro_ozy_get_theme_mod( $param, array() );
			
			// Custom font?		
			if ( isset( $value['font-family'] ) ) {
				if(substr($value['font-family'], 0, 3) === '___') {
					$font_face = substr($value['font-family'], 3, strlen($value['font-family']));
					$o.='font-family:"' . $font_face . '" ' . $important . ';';
					$this->get_custom_font($font_face);
				}else{
					$font_name = str_replace(', ', '', $value['font-family']);
					if($this->is_google_font($font_name)) {
						if(trim($font_name)) {
							$o.='font-family:"' . $font_name . '"' . $important . ';';
						}
						$this->activate_google_font($font_name);
					}else{
						$font_face = str_replace('*', ' ', $font_name);
						if(trim($font_face)) {
							$o.='font-family:"' . $font_face . $important . '";';
						}
					}
				}
			}

			if ( isset( $value['variant'] ) && in_array('variant', $return_params) ) {
				$matches = array();preg_match('/(\d+)([a-zA-Z]+)/', $value['variant'], $matches );
				if(count($matches)>0 && isset($matches[1]) && isset($matches[2])) {
					$o.='font-weight:' .  $matches[1] . $important . ';';
					$o.='font-style:' .  $matches[2] . $important . ';';
				}else{
					$o.='font-weight:' .  $value['variant'] . $important . ';';
				}
			}
			if ( isset( $value['font-size'] ) && in_array('font-size', $return_params)) {
				$o.='font-size:' .  $value['font-size'] . $important . ';';
			}
			if ( isset( $value['line-height'] ) && in_array('line-height', $return_params)) {
				$o.='line-height:' .  $value['line-height'] . $important . ';';
			}
			if ( isset( $value['letter-spacing'] ) && in_array('letter-spacing', $return_params) ) {
				$o.='letter-spacing:' .  $value['letter-spacing'] . $important . ';';
			}
			if ( isset( $value['text-transform'] ) && in_array('text-transform', $return_params) ) {
				$o.='text-transform:' .  $value['text-transform'] . $important . ';';
			}			
			if ( $color ) {
				if(trim($color) && strpos(strtolower($color), 'rgba')) {
					$o.='color:' . $this->rgba2rgb($color) . $important . ';color:' . $color . $important . ';';
				}else if(trim($color)) {
					$o.='color:' . $color . $important . ';';
				}				
			}
			
			return $o;
		}		
		
		/**
		* background_style_render
		*
		* Generates background related css definitions with given paramters
		*
		* @bg_color - String
		* @bg_image - String
		* @bg_image_size - String
		* @bg_image_repeat - String
		* @bg_image_attachment - String
		* @use_rgba - Boolean
		*/		
		function background_style_render($bg_color = '', $bg_image = '', $bg_image_size = '', $bg_image_repeat = '', $bg_image_attachment = '', $use_rgba=false, $bg_xpos = '', $bg_ypos = '') {
			$o = '';
			
			if(trim($bg_color)) {
				$o.='background-color:' . $bg_color . ';';
				if($use_rgba) {
					$o.='background-color:' . $this->rgba2rgb($bg_color) . ';';
				}
			}
			if(trim($bg_image)) {
				$o.='background-image:url(' . $bg_image . ');';
			}
			if(trim($bg_image_size)) {
				$o.='background-size:' . $bg_image_size . ';';
			}
			if(trim($bg_image_repeat)) {
				$o.='background-repeat:' . $bg_image_repeat . ';';
			}
			if(trim($bg_image_attachment)) {
				$o.='background-attachment:' . $bg_image_attachment . ';';
			}
			if(trim($bg_xpos) && trim($bg_ypos)) {
				$o.='background-position:' . $bg_xpos . ' ' . $bg_ypos . ';';
			}			
			
			return $o;
		}
		
		/**
		* ielt9
		*
		* Checks for if current IE browser smaller than IE9
		*/			
		function ielt9() {
			$ua = $_SERVER['HTTP_USER_AGENT'];
			if(strpos($ua, "compatible; MSIE 7.0;") || strpos($ua, "compatible; MSIE 8.0;") || strpos($ua, "compatible; MSIE 9.0;")) {
				return true;
			}
			return false;
		}

		/**
		* isie
		*
		* Checks for if current browser is IE
		*/		
		function isie() {
			if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false ){
				return true;
			}
			return false;
		}
		
		/**
		* convert_videos
		*
		* Converting YouTube and Vimeo Links To YouTube Player and Vimeo Player
		* 
		* @string - String
		*/			
		function convert_videos($string) {
			$rules = array(
				'#http://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' 
				=> '<div class="ozy-video-wrapper"><iframe width="100%" height="446" src="//www.youtube.com/embed/$2" frameborder="0" allowfullscreen></iframe></div>',
				'#http://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' 
				=> '<div class="ozy-video-wrapper"><iframe src="//player.vimeo.com/video/$2" width="100%" height="446" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>',
				'#https://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' 
				=> '<div class="ozy-video-wrapper"><iframe width="100%" height="446" src="//www.youtube.com/embed/$2" frameborder="0" allowfullscreen></iframe></div>',
				'#https://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' 
				=> '<div class="ozy-video-wrapper"><iframe src="//player.vimeo.com/video/$2" width="100%" height="446" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>'				
			);			
			foreach ($rules as $link => $player) {
				$string = preg_replace($link, $player, $string);
			}
			
			return $string;
		}
		
		/**
		* convert_videos
		*
		* Fullscreen background slideshow
		*/		
		function fullscreen_slide_show()
		{
			$background_slider_image_arr = vp_metabox('ozy_logipro_meta_page.ozy_logipro_meta_page_background_group.0.ozy_logipro_meta_page_background_slider_group');
		
			if(!is_array($background_slider_image_arr) && count($background_slider_image_arr) > 0) return false;
			
			global $post;

			$script = '
jQuery(window).load(function(){
	jQuery.supersized({
		slideshow : 1, autoplay:1, start_slide:1, stop_loop:0, random:0, slide_interval: 3000,transition: 1, transition_speed: 700 ,new_window:1, pause_hover:0, keyboard_nav:1, performance:1, image_protect:1,
		min_width : 0,min_height:0,vertical_center:0,horizontal_center:1,fit_always:0,fit_portrait:1,fit_landscape:0,
		slide_links : "blank",thumb_links:0,thumbnail_navigation:0,
		slides : [';
			$virgul = "";
			foreach($background_slider_image_arr as $img) {
				$script .= $virgul . "{image:'" . esc_url($img['ozy_logipro_meta_page_background_slider_image']) . "', title:'', url:''}";
				$virgul = ",";
			}
$script .= '],
		progress_bar : 0,
		mouse_scrub : 0
	});
});' . PHP_EOL;
					
			$this->set_footer_script($script);
		}
		
		/**
		* fullscreen_video_show
		*
		* Fullscreen background video
		*
		* @poster - String, Poster image for video
		* @mp4 - String, MP4 file path
		* @webm - String, WEBM file path
		* @ogv - String, OGV file path
		*/		
		function fullscreen_video_show($poster = '', $mp4 = '', $webm = '', $ogv = '')
		{
			if('computer' != logipro_get_ozy_data('device_type')) {
				$this->set_footer_style( "body { background-image: url(" . esc_url($poster) . "); background-repeat: repeat; background-size: cover; }\r\n" );
				return null;
			}
			
			$script = "
			jQuery(document).ready(function() {
				jQuery('body').prepend('<div id=\"video-background\" class=\"video-background\">');
				jQuery('body').append('</div>');
				jQuery('#video-background').videobackground({
					videoSource: ['" . esc_url($mp4) . "', 
					'" . esc_url($webm) . "', 
					'" . esc_url($ogv) . "'],
					poster: '" . esc_url($poster) . "',
					loop: true,
					resize: false,
					preload: 'auto'
				});
			});\r\n\t";

			$this->set_footer_script($script);

		}
		
		/**
		* fullscreen_vimeo_video_show
		*
		* Fullscreen vimeo background video
		*
		* @poster - String, Poster image for video
		* @video_id - String, Vimeo video ID
		*/			
		function fullscreen_vimeo_video_show($poster = '', $video_id = '')
		{
			if('computer' != logipro_get_ozy_data('device_type')) {
				$this->set_footer_style( "body { background-image: url(" . esc_url($poster) . "); background-repeat: repeat; background-size: cover; }\r\n" );
				return null;
			}
			
			if(trim($video_id) != '') {
				$script = "
				jQuery(function() {
					jQuery.okvideo({video: '". esc_js($video_id) ."',volume: 50, hd: true, adproof: true, annotations: false});
				});\n\r\t";			
	
				$this->set_footer_script($script);
			}
		}		

		/**
		* fullscreen_vimeo_video_show
		*
		* Fullscreen youtube background video
		*
		* @poster - String, Poster image for video
		* @video_id - String, YouTube video ID
		*/			
		function fullscreen_youtube_video_show($poster = '', $video_id = '')
		{
			if('computer' != logipro_get_ozy_data('device_type')) {
				$this->set_footer_style( "body { background-image: url(" . esc_url($poster) . "); background-repeat: repeat; background-size: cover; }\r\n" );
				return null;
			}

			if(trim($video_id) != '') {
		
				$script = "
				jQuery(document).ready(function() {
					jQuery('body').tubular({videoId:'" . esc_js(trim($video_id)) . "', mute:0, repeat:1, start:0, wrapperZIndex:'-2'});
				});\n\r\t";
						
				$this->set_footer_script($script);
			}
		}
		
		/**
		* social_networks
		*
		* Social network button link maker
		*
		* @site - String
		* @username - String
		* @title - String
		* @target - String				
		*/			
		function social_networks( $site, $username, $title, $target = "_self", $tooltip_pos = "" ) {	
			$link_to_profile = '';
			$i = '';			
			switch( $site ) {
				case 'blogger':
					$link_to_profile = 'http://' . $username . '.blogspot.com';
					$i = '&#xe012;';
					break;
				case 'bebo':
					$link_to_profile = 'http://www.bebo.com/' . $username;
					$i = '&#xe008;';
					break;
				case 'behance':
					$link_to_profile = 'http://be.net/' . $username;
					$i = '&#xe009;';
					break;					
				case 'deviantart':
					$link_to_profile = 'http://' . $username . '.deviantart.com';
					$i = '&#xe018;';
					break;
				case 'dribbble':
					$link_to_profile = 'http://dribbble.com/' . $username;
					$i = '&#xe021;';
					break;
				case 'facebook':
					$link_to_profile = 'http://www.facebook.com/' . $username;
					$i = '&#xe027;';
					break;
				case 'flickr':
					$link_to_profile = 'http://www.flickr.com/photos/' . $username;
					$i = '&#xe029;';
					break;
				case 'google':
					$link_to_profile = 'https://plus.google.com/' . $username;
					$i = '&#xe039;';
					break;
				case 'linkedin':
					$link_to_profile = 'http://www.linkedin.com/' . $username;
					$i = '&#xe052;';
					break;
				case 'rss':
					$link_to_profile = $username;
					$i = '&#xe071;';
					break;		
				case 'skype':
					$target = "_self";
					$link_to_profile = "skype:".$username."?call";
					$i = '&#xe074;';
					break;
				case 'myspace':
					$link_to_profile = 'http://www.myspace.com/' . $username;
					$i = '&#xe059;';
					break;		
				case 'stumbleupon':
					$link_to_profile = 'http://www.stumbleupon.com/stumbler/' . $username;
					$i = '&#xe083;';
					break;
				case 'tumblr':
					$link_to_profile = 'http://' . $username . '.tumblr.com/';
					$i = '&#xe085;';
					break;
				case 'twitter':
					$link_to_profile = 'http://www.twitter.com/' . $username;
					$i = '&#xe086;';
					break;				
				case 'vimeo':
					$link_to_profile = 'http://www.vimeo.com/' . $username;
					$i = '&#xe089;';
					break;
				case 'wordpress':
					$link_to_profile = 'http://' . $username . '.wordpress.com/';
					$i = '&#xe094;';
					break;
				case 'yahoo':
					$link_to_profile = 'http://pulse.yahoo.com/' . $username;
					$i = '&#xe097;';
					break;
				case 'youtube':
					$link_to_profile = 'http://youtube.com/' . $username;
					$i = '&#xe099;';
					break;
				case 'pinterest':
					$link_to_profile = 'http://pinterest.com/' . $username;
					$i = '&#xe064;';
					break;
				case 'instagram':
					$link_to_profile = 'http://instagram.com/' . $username;
					$i = '&#xe100;';
					break;
				case 'fivehundredpx':
					$link_to_profile = 'http://500px.com/' . $username;
					$i = '&#xe000;';
					break;
				case 'googleplus':
					$link_to_profile = 'http://plus.google.com/' . $username;
					$i = '&#xe039;';
					break;
				case 'dribble':
					$link_to_profile = 'http://dribbble.com/' . $username;
					$i = '&#xe021;';
					break;
				case 'soundcloud':
					$link_to_profile = 'http://soundcloud.com/' . $username;
					$i = '&#xe078;';
					break;					
				case 'email':
					$link_to_profile = 'mailto:' . $username;
					$i = '&#xe024;';
					$target = "_self";
					break;
				case 'foursquare':
					$link_to_profile = 'http://foursquare.com/' . $username;
					$i = '&#xe032;';
					break;
				default:
					break;
			}			
		
			echo '<a href="' . esc_url($link_to_profile) . '" target="' . esc_attr($target) . '" class="symbol-' . esc_attr($site) . '"><span class="tooltip'. esc_attr($tooltip_pos) .' symbol" title="' . esc_attr($title) . '">'. $i .'</span></a>';//' . $site . '
		}
		
		/**
		* social_icons
		*
		* Reads social icon settings from Theme Options and pushes into necessary processor		
		*/
		function social_icons($pos = '') {
			if(logipro_ozy_get_theme_mod('social_use') == '1') {
				$ozy_available_social_media_arr = vp_get_social_medias_single_arr();
	
				$ozy_social_icons = logipro_ozy_get_theme_mod('social_icon_order');
				
				if(is_array($ozy_social_icons) && count($ozy_social_icons)>0) {
					foreach($ozy_social_icons as $s) {
						$account = logipro_ozy_get_theme_mod('social_accounts_' . $s);
						if($account) {
							$this->social_networks( $s, $account, $s, logipro_ozy_get_theme_mod('social_icon_target'), $pos );
						}
					}
				}
			}
		}

		/**
		* post_format_icon
		*
		* Returns necessary FontAwesome icon by post format
		*
		* @post_format - String
		*/		
		function post_format_icon($post_format) {
			$post_format_arr = array('standard'=>'doc-text', 
			'aside'=>'quote-1', 
			'gallery'=>'camera-3',
			'link'=>'export',
			'image'=>'picture-o',
			'quote'=>'quote-1',
			'status'=>'oic-chat',
			'video'=>'play-1',
			'audio'=>'note-beamed',
			'chat'=>'oic-chat');
			
			return isset($post_format_arr[$post_format]) ? $post_format_arr[$post_format] : 'standard';
		}
		
		/**
		* post_owl_slider
		*
		* Creates a slider from image ids whic used in [gallery] shortcode
		*
		* @hq - Boolean, to check if slider for blog post or full slider
		*/
		function post_owl_slider($hq = false, $thumbnail_image_src, $post_image_src, &$hide_title) {
			$slider_img_size = 'logipro_blog';
			if($hq) {
				$slider_img_size = 'full';			
			}

			$image_o = '';
			$image_ids_arr = logipro_ozy_grab_ids_from_gallery();
			if(count($image_ids_arr)>0){
				foreach ( $image_ids_arr as $id ) {
					$small_image = wp_get_attachment_image_src( $id, $slider_img_size );
					$small_image = $large_image = wp_get_attachment_image_src( $id, 'full' );
					$image_o .= '<img src="' . esc_attr($small_image[0]). '" alt="'. esc_attr($small_image[1]).'x'.esc_attr($small_image[2]) .'" class="carousel-cell"/>'. PHP_EOL;
				}
				return '<div class="carousel" data-flickity>' . PHP_EOL . $image_o . PHP_EOL .'</div>' . $this->logipro_ozy_masonry_blog_date_comment_box(false);
			}else{
				if ( isset($thumbnail_image_src[0]) && isset($post_image_src[0])) { 
					global $post;
					$str = '<div class="featured-thumbnail regular-blog" style="background-image:url('. esc_url($post_image_src[0]) .');">';
					$str .= $this->logipro_ozy_masonry_blog_date_comment_box(false);
					$str .= '<a href="'. esc_url($thumbnail_image_src[0]) .'" class="fancybox"></a>';
					$str .= get_the_post_thumbnail($post->ID, 'logipro_blog');
					$str .= '</div>'; 
					$hide_title = false;
					return $str;
				}				
			}
			
			return '';
		}
		
		function previous_next_post_navigation(){
			if(is_single()) {
				echo '<div id="NextPrevPosts">';
				$prevPost = get_previous_post(true);
				if($prevPost) {
						$prevthumbnail = get_post_thumbnail_id($prevPost->ID); 
                        if($prevthumbnail) {
                            $prevthumbnail = wp_get_attachment_image_src($prevthumbnail, 'medium');
                            if($prevthumbnail[0]) {
                                $prevthumbnail = $prevthumbnail[0];
                            }else{
                                $prevthumbnail = "0";
                            }
                        }else{
                            $prevthumbnail = "0";
                        }					
				?>                
                  <div class="prev">
                    <div class="arrow">
                    <?php
					previous_post_link('%link', '<svg version="1.1" id="PrevArrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 11.289 27.701" enable-background="new 0 0 11.289 27.701" xml:space="preserve"><polyline fill="none" stroke="#434A54" opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="9.501,26.201 1.499,13.851 9.501,1.5 "></polyline></svg>', TRUE);
					?>
                    </div>
                    <div class="preview <?php echo esc_attr($prevthumbnail!="0" ? "" : "no-pic") ?>">
                      <?php if($prevthumbnail!="0") { ?><div class="pull-left featuredImg" style="background-image:url(<?php echo esc_url($prevthumbnail) ?>)"></div><?php } ?>
                      <div class="pull-left preview-content">
                        <span class="content-font-family content-color"><?php echo esc_html(get_the_title($prevPost->ID)) ?></span>
                      </div>
                    </div>
                  </div>
                
                <?php 
				}
				
				$nextPost = get_next_post(true);
				if($nextPost) {
					$nextthumbnail = get_post_thumbnail_id($nextPost->ID); 
					if($nextthumbnail) {
						$nextthumbnail = wp_get_attachment_image_src($nextthumbnail, 'sixteennine');
						if($nextthumbnail[0]) {
							$nextthumbnail = $nextthumbnail[0];
						}else{
							$nextthumbnail = "0";
						}
					}else{
						$nextthumbnail = "0";
					}						
				?>
                  <div class="next">
                    <div class="arrow">
					<?php 
						next_post_link('%link','<svg version="1.1" id="NextArrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 11.289 27.701" enable-background="new 0 0 11.289 27.701" xml:space="preserve"><polyline fill="none" stroke="#434A54" opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="1.5,1.5 9.502,13.85 1.5,26.201 "></polyline></svg>', TRUE);
					?>
					</div>
                    <div class="preview <?php echo esc_attr($nextthumbnail!="0" ? "" : "no-pic") ?>">
                        <?php if($nextthumbnail!="0") { ?><div class="pull-right featuredImg" style="background-image:url(<?php echo esc_url($nextthumbnail) ?>)"></div><?php } ?>
                        <div class="pull-right preview-content">
                        	 <span class="content-font-family content-color"><?php echo esc_html(get_the_title($nextPost->ID)) ?></span>
                        </div>
                    </div>
                  </div>
                <?php
				}
				echo '</div>';
			}
		}		

		/**
		 * get_current_post_type function.
		 * 
		 * @access public
		 * @return void
		 */
		function logipro_ozy_get_current_post_type() {
			global $post, $typenow, $current_screen;
			if($post && isset($post->post_type)) {
				return $post->post_type;
			}elseif($typenow) {
				return $typenow;
			}elseif($current_screen && isset($current_screen->post_type)) {
				return $current_screen->post_type;
			}elseif(isset($_REQUEST['post_type'])) {
				return sanitize_key( $_REQUEST['post_type'] );
			}elseif(isset($_GET['post'])) {
				$thispost = get_post($_GET['post']);
				return isset($thispost->post_type) ? $thispost->post_type : null;
			}else{
				return null;
			}
		}

		function logipro_ozy_masonry_blog_date_comment_box($echo = true) {
			global $post;

			$str = '<div class="post-meta">';					
			
			if($this->wp_date_format[0] == 'j') {
				$str .= '<span class="d content-font">';  $str .= get_the_time($this->wp_date_format[0]); $str .= '</span>';
			}
			
			if($this->wp_date_format[0] == 'F') {
				$str .= '<span class="m content-font">';  $str .= get_the_time($this->wp_date_format[0]); $str .= '</span>';				
			}else if($this->wp_date_format[0] != 'j'){
				$str .= '<span class="m content-font">';  $str .= get_the_time($this->wp_date_format[0]); $str .= '</span>';
			}
			
			if($this->wp_date_format[1] == 'F') {
				$str .= '<span class="m content-font">';  $str .= get_the_time($this->wp_date_format[1]); $str .= '</span>';
			}else{
				$str .= '<span class="d content-font">';  $str .= get_the_time($this->wp_date_format[1]); $str .= '</span>';
			}
			//$str .= '<span class="m content-font">';  $str .= get_the_time($this->wp_date_format[0]); $str .= '</span>';			
			//$str .= '<span class="d content-font">';  $str .= get_the_time($this->wp_date_format[1]); $str .= '</span>';
			
			$str .= '<span class="y content-font">';  $str .= get_the_time($this->wp_date_format[2]); $str .= '</span>';
			$str .= '<span class="c content-font"><span class="n">';$num_comments = get_comments_number();if (comments_open()) {if ( $num_comments == 0 ) {$str .=  esc_attr__('0', 'logipro');} elseif ( $num_comments > 0 ) {$str .= $num_comments;}}else{$str .=  esc_attr__('0', 'logipro');}$str .= '</span><span class="t">'; $str .= esc_attr__('COMMENTS', 'logipro');$str .= '</span></span>';
			$str .= '</div><!--#post-meta-->';
			if($echo) {
				logipro_e_html($str);
			}else{
				return $str;
			}
		}		
		
		function logipro_ozy_the_category($id, $seperator = ', ') {
			$categories = get_the_category($id);$comma = '';
			foreach ( $categories as $category ) { 
				echo esc_attr( $comma . $category->name ); 
				$comma = $seperator;
			}
		}
		
		function logipro_ozy_trim_all( $str , $what = NULL , $with = ' ' ) {
			if( $what === NULL )
			{
				//  Character      Decimal      Use
				//  "\0"            0           Null Character
				//  "\t"            9           Tab
				//  "\n"           10           New line
				//  "\x0B"         11           Vertical Tab
				//  "\r"           13           New Line in Mac
				//  " "            32           Space
				$what   = "\\x00-\\x20";    //all white-spaces and control chars
			}
			return trim( preg_replace( "/[".$what."]+/" , $with , $str ) , $what );
		}		
	}
	
	function logipro_ozy_init_global_helper() {
		global $ozyLogiProHelper;
		$ozyLogiProHelper = new LogiPro_Ozy_myHelper;		
	}
	logipro_ozy_init_global_helper();
	
	$ozy_logipro_data = new stdClass();
	function logipro_set_ozy_data($p, $v = '') {
		global $ozy_logipro_data;
		$ozy_logipro_data->{$p} = $v;
	}
	
	function logipro_get_ozy_data($p = '_empty') {
		global $ozy_logipro_data;
		if(isset($ozy_logipro_data->{$p})) {
			return $ozy_logipro_data->{$p};
		}
		return '';
	}
	
?>
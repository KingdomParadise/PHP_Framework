<?php
/**
* Load necessary style and script files
*/
function logipro_ozy_enqueue_stylesheets() {
	global $ozyLogiProHelper, $post;

	/* The HTML5 Shim is required for older browsers, mainly older versions IE */
	if($ozyLogiProHelper->ielt9()) {
		wp_enqueue_script('logipro-html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	}

	/*modernizr*/
	wp_enqueue_script('logipro-modernizr', LOGIPRO_OZY_BASE_URL . 'scripts/modernizr.js');

	wp_enqueue_style('logipro-style', LOGIPRO_OZY_CSS_DIRECTORY_URL . 'style.css');

	if(logipro_ozy_get_theme_mod('primary_menu_type') != 'classic') {
		wp_enqueue_style('logipro-menu-style', LOGIPRO_OZY_BASE_URL . 'css/primary-menu.css');
	}else{
		wp_enqueue_style('logipro-classic-menu-style', LOGIPRO_OZY_BASE_URL . 'css/primary-menu-classic.css');
	}

	wp_enqueue_style('logipro-main-style', LOGIPRO_OZY_CSS_DIRECTORY_URL . 'logipro.css');

	wp_enqueue_script('logipro-global-plugins', LOGIPRO_OZY_BASE_URL . 'scripts/logipro-global-plugins.js', array('jquery'), null, true );

	wp_enqueue_style('logipro-fontset', LOGIPRO_OZY_BASE_URL . 'font/font.min.css');

	/*main script file*/
	wp_enqueue_script('logipro', LOGIPRO_OZY_BASE_URL . 'scripts/logipro.js', array('jquery'), null, true );

	/*Following variable will be used in logipro.js*/
	wp_localize_script( 'logipro', 'ozy_headerType', array(
		'menu_type' => esc_js(logipro_get_ozy_data('menu_type')),
		'menu_align' => esc_js(logipro_get_ozy_data('menu_align')),
		'theme_url' => esc_js(LOGIPRO_OZY_BASE_URL),
		'$OZY_WP_AJAX_URL' => esc_url(admin_url('admin-ajax.php')),
		'$OZY_WP_IS_HOME' => (is_home() || is_front_page() ? 'true' : 'false'),
		'$OZY_WP_HOME_URL' => esc_url(home_url('/'))
		)
	);

	/* comment reply */
	if ( is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
		wp_enqueue_script('comment-reply');
	}
	/* single navigation */
	if( is_singular() ) {
		wp_enqueue_style('logipro-single-nav', LOGIPRO_OZY_BASE_URL . 'css/single-nav.css');
	}

	/* fancy box */
	wp_deregister_style('fancybox');
	wp_enqueue_style('logipro-fancybox', LOGIPRO_OZY_BASE_URL . 'scripts/fancybox/jquery.fancybox.css');
	wp_enqueue_script('logipro-fancybox', LOGIPRO_OZY_BASE_URL . 'scripts/fancybox/jquery.fancybox.pack.js', array('jquery'), null, true );
	if(logipro_ozy_get_theme_mod('fancbox_media') == '1') {
		wp_enqueue_script('logipro-fancybox-media', LOGIPRO_OZY_BASE_URL . 'scripts/fancybox/helpers/jquery.fancybox-media.js', array('jquery'), null, true );
	}
	if(logipro_ozy_get_theme_mod('fancbox_thumbnail') == '1') {
		wp_enqueue_style('logipro-jquery.fancybox-thumbs', LOGIPRO_OZY_BASE_URL . 'scripts/fancybox/helpers/jquery.fancybox-thumbs.css');
		wp_enqueue_script('logipro-fancybox-thumbs', LOGIPRO_OZY_BASE_URL . 'scripts/fancybox/helpers/jquery.fancybox-thumbs.js', array('jquery'), null, true );
	}

	/*masonry*/
	if(is_search()) {
		wp_enqueue_script('masonry');
	}

	/* Supersized BG slider */
	if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_slider') == '1') {
		wp_enqueue_style( 'logipro-super-sized-css', get_template_directory_uri() . '/css/supersized.min.css');
		wp_enqueue_script('logipro-super-sized', get_template_directory_uri() . '/scripts/supersized/js/supersized.3.2.7.min.js', array('jquery'), null, true );
	}

	/* Self Hosted Video BG */
	wp_register_script('video-background', LOGIPRO_OZY_BASE_URL . 'scripts/jquery/videobg.js', array('jquery'), null, true );
	if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_self') == '1') {
		wp_enqueue_script('logipro-video-background');
	}

	/* YouTube Video BG */
	if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_youtube') == '1') {
		wp_enqueue_script('logipro-tubular-youtube', LOGIPRO_OZY_BASE_URL . '/scripts/jquery/jquery.tubular.1.0.js', array('jquery') );
	}

	/* Vimeo Video BG */
	if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_vimeo') == '1') {
		wp_enqueue_script('logipro-ok-video', LOGIPRO_OZY_BASE_URL . 'scripts/jquery/ok.video.js', array('jquery') );
	}

	/* Flickity */
	wp_enqueue_style('logipro-flickity', LOGIPRO_OZY_BASE_URL . 'css/flickity.min.css');

	/* World Map */
	wp_register_script('logipro-worldmap-jsapi', 'https://www.google.com/jsapi', array('jquery') );
	wp_register_script('logipro-worldmap', LOGIPRO_OZY_BASE_URL . 'scripts/world-map/world-map.js', array('logipro-worldmap-jsapi') );

	/* Particles Background */
	wp_register_script('logipro-particles-bg', LOGIPRO_OZY_BASE_URL . 'scripts/particles/particles.min.js', array('jquery'));

	/* News Ticker */
	wp_register_script('logipro-news-ticker', LOGIPRO_OZY_BASE_URL . 'scripts/ticker/ticker.js', array('jquery'));
	wp_register_style('logipro-news-ticker', LOGIPRO_OZY_BASE_URL . 'css/ticker.css');

	/* News Carousel */
	wp_register_style('logipro-news-carousel', LOGIPRO_OZY_BASE_URL . 'css/news-carousel.css');

	/* Image With Featured Content */
	wp_register_style('logipro-image-with-featured-content', LOGIPRO_OZY_BASE_URL . 'css/image-with-featured-content.css');

	/* Fancy Button */
	wp_register_style('logipro-fancy-button', LOGIPRO_OZY_BASE_URL . 'css/fancy-button.css');

	/* Donut Chart */
	wp_register_script('logipro-donut-chart-library', LOGIPRO_OZY_BASE_URL . 'scripts/chart/chart.min.js', array('jquery') );
	wp_register_script('logipro-donut-chart', LOGIPRO_OZY_BASE_URL . 'scripts/donut-chart/donut-chart.js', array('logipro-donut-chart-library') );

	/* CTA With Hover Box */
	wp_register_style('logipro-cta-hover-box', LOGIPRO_OZY_BASE_URL . 'css/box-controller.css');

	/* Row Bottom Arrow */
	wp_register_style('logipro-row-bottom-arrow', LOGIPRO_OZY_BASE_URL . 'css/row-bottom-arrow.css');

	/* Doodle */
	wp_register_script('logipro-doodle-createjs', LOGIPRO_OZY_BASE_URL . 'scripts/doodle/createjs-2015.11.26.min.js', array('jquery') );
	wp_register_script('logipro-doodle', LOGIPRO_OZY_BASE_URL . 'scripts/doodle/doodle.js?1496750985261', array('logipro-doodle-createjs') );

	/* Animsition */
	logipro_set_ozy_data('is_animsition_active', true);
	if(!logipro_ozy_get_theme_mod('disable_animsition') == '1') {
		if(is_page()) {
			if(logipro_ozy_get_metabox('disable_loader') != '1') {
				wp_enqueue_style('logipro-animsition', LOGIPRO_OZY_BASE_URL . 'css/animsition.min.css');
			}else{
				logipro_set_ozy_data('is_animsition_active', false);
			}
		}else{
			wp_enqueue_style('logipro-animsition', LOGIPRO_OZY_BASE_URL . 'css/animsition.min.css');
		}
	}else{
		logipro_set_ozy_data('is_animsition_active', false);
	}
	wp_localize_script( 'logipro', 'ozy_Animsition', array(
		'is_active' => esc_js(logipro_get_ozy_data('is_animsition_active')))
	);

	/* 404 Page */
	if(is_404()) {
		wp_enqueue_script('logipro-doodle-createjs');
		wp_enqueue_script('logipro-404-doodle', LOGIPRO_OZY_BASE_URL . 'scripts/404/404.js', array('logipro-doodle-createjs') );
		wp_enqueue_style('logipro-404', LOGIPRO_OZY_BASE_URL . 'css/404.css');
	}

	/* Countdown template */
	if(is_page_template('page-countdown.php')) {
		wp_enqueue_script('logipro-particles-bg');
		wp_enqueue_script('logipro-countdown', LOGIPRO_OZY_BASE_URL . 'scripts/jquery/countdown.js', array('jquery') );
		wp_enqueue_style('logipro-countdown', LOGIPRO_OZY_BASE_URL . 'css/countdown.min.css');
		wp_enqueue_style('logipro-countdown-font', '//fonts.googleapis.com/css?family=Teko');

		$end_year 	= logipro_ozy_get_theme_mod('countdown_year');$end_year = (int)$end_year<=0?date('Y'):$end_year;
		$end_month 	= logipro_ozy_get_theme_mod('countdown_month');$end_month = (int)$end_month<=0?date('m'):$end_month;
		$end_day 	= logipro_ozy_get_theme_mod('countdown_day');$end_day = (int)$end_day<=0?'15':$end_day;
		$end_hour 	= logipro_ozy_get_theme_mod('countdown_hour');$end_hour = (int)$end_hour<=0?'23':$end_hour;
		$end_minute = logipro_ozy_get_theme_mod('countdown_minute');$end_minute = (int)$end_minute<=0?'30':$end_minute;
		wp_localize_script('logipro-countdown', 'ozy404assets', array('path' => esc_js(LOGIPRO_OZY_BASE_URL), '_year' => esc_js($end_year), '_month' => esc_js($end_month), '_day' => esc_js($end_day), '_hour' => esc_js($end_hour), '_minute' => esc_js($end_minute)) );
	}

	/* Google Fonts */
	wp_enqueue_style( 'logipro-fonts-and-inline-styles', $ozyLogiProHelper->render_google_fonts(), array(), LOGIPRO_OZY_THEME_VERSION );

	/* Inline Styles */
	wp_add_inline_style('logipro-fonts-and-inline-styles', logipro_style());

	/* Inline Scripts */
	$ozyLogiProHelper->set_footer_script(logipro_ozy_get_theme_mod('custom_script'));
	if($ozyLogiProHelper->footer_script) {
		wp_add_inline_script('logipro-footer-script', $ozyLogiProHelper->footer_script);
	}

	return;
}
add_action( 'wp_enqueue_scripts', 'logipro_ozy_enqueue_stylesheets', 18 );

/**
* This function to add action Contact Form 7 plugin to handle date time field
*/
function logipro_ozy_cf7_mail_components() {
	wp_enqueue_script('logipro-datetimepicker', LOGIPRO_OZY_BASE_URL . 'scripts/datetimepicker/datetimepicker.js', array('jquery') );
	wp_enqueue_style('logipro-datetimepicker', LOGIPRO_OZY_BASE_URL . '/css/datetimepicker.css');
}
add_action( 'wpcf7_enqueue_scripts', 'logipro_ozy_cf7_mail_components');

/**
* Set default favico if none set on customizer
*/
function logipro_ozy_default_favico() {
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
    	echo '<link rel="shortcut icon" href="' . esc_url(get_stylesheet_directory_uri()) . '/favico.gif" />';
	}
}
add_action('wp_head', 'logipro_ozy_default_favico');

/**
* This function modifies the main WordPress query to include an array of post types instead of the default 'post' post type.
*
* @param mixed $query The original query
* @return $query The amended query
*/
function logipro_ozy_custom_search( $query ) {
	if(!is_admin()) {
		if ( isset($query->is_search) && $query->is_search ) {
			$query->set( 'post_type', array( 'product', 'post', 'page' ) );
		}
	}
	return $query;
}
add_filter( 'pre_get_posts', 'logipro_ozy_custom_search' );

function logipro_ozy_load_custom_wp_admin_style() {
	global $ozyLogiProHelper;
	wp_enqueue_script('logipro-admin', LOGIPRO_OZY_BASE_URL . 'scripts/admin/admin.js', array('jquery'), null, true );

    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');

	$params = array(
		'ozy_theme_path' 	=> esc_js(LOGIPRO_OZY_BASE_URL),
		'ozy_ajax_url' 		=> esc_url(admin_url('admin-ajax.php'))
	);
	wp_localize_script( 'logipro-admin', 'ozyAdminParams', $params );

	wp_enqueue_style( 'logipro-admin', LOGIPRO_OZY_BASE_URL . 'css/admin.css');

	wp_enqueue_style('logipro-fontset', LOGIPRO_OZY_BASE_URL . 'font/ozy/styles.css');

	wp_enqueue_style('logipro-fontset1', LOGIPRO_OZY_BASE_URL . 'font/logipro1/flaticon.css');
	wp_enqueue_style('logipro-fontset2', LOGIPRO_OZY_BASE_URL . 'font/logipro2/flaticon.css');
	wp_enqueue_style('logipro-fontset3', LOGIPRO_OZY_BASE_URL . 'font/logipro3/flaticon.css');
	wp_enqueue_style('logipro-fontset4', LOGIPRO_OZY_BASE_URL . 'font/logipro4/flaticon.css');

	// Color picker
	wp_enqueue_script('logipro-color-picker', LOGIPRO_OZY_BASE_URL . 'scripts/admin/color-picker/jquery.minicolors.js', false, '1.0', false);
	wp_enqueue_style('logipro-color-picker', LOGIPRO_OZY_BASE_URL . 'css/admin/jquery.minicolors.css', false, '1.0', 'all');
	wp_enqueue_media();

}
add_action( 'admin_enqueue_scripts', 'logipro_ozy_load_custom_wp_admin_style' );

/**
* Add page model CSS to body dag
*/
add_filter('body_class','logipro_ozy_page_model_css');
function logipro_ozy_page_model_css($classes) {

	global $ozyLogiProHelper;

	if(is_404()) {
		logipro_set_ozy_data('hide_everything_but_content', 2);
		return $classes;
	}

	$page_model = 'full';

	$_classes = 'ozy-page-model-' . $page_model;
	$_page_type = 'page';

	if(is_single()) { $_page_type = 'blog'; }

	global $post; $_post_id = '';
	if(isset($post->ID)) {
		$_post_id = $post->ID;
	}

	$sidebar_position		= logipro_ozy_get_theme_mod('page_'. $_page_type .'_sidebar_position');
	$sidebar_name			= logipro_ozy_get_theme_mod('page_'. $_page_type .'_sidebar_id');
	if(!is_404()) {
		if(isset($post->ID)){
			$use_custom_sidebar		= logipro_ozy_get_metabox('use_sidebar', 0, $_post_id);
			if($use_custom_sidebar == '1') {
				$sidebar_position 	= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar_position', 0, $_post_id);
				$sidebar_name 		= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar', 0, $_post_id);
			}
		}
	}

	if(logipro_ozy_get_metabox('use_no_content_padding', NULL, $_post_id) == '1') {
		$_classes.= ' no-content-top-padding ';
	}

	if(logipro_ozy_get_metabox('no_menu_space', NULL, $_post_id) == '1') {
		$_classes.= ' no-menu-space ';
	}

	if(logipro_ozy_get_metabox('use_side_navigation', NULL, $_post_id) == '1') {
		$_classes.= ' use-side-navigation ';
	}

	$_classes.= ' ozy-page-model-'. (($sidebar_position == 'left' || $sidebar_position == 'right') ? 'has' : 'no') .'-sidebar';

	// Extras
	logipro_set_ozy_data('hide_everything_but_content', 0);
	if(is_page_template('page-countdown.php')) {
		logipro_set_ozy_data('hide_everything_but_content', 2);
	}else{
		$_classes.= ' ozy-classic';
	}

	if(is_page_template('page-revo-full.php')) {
		logipro_set_ozy_data('hide_everything_but_content', 999); //all blank but content
	}

	// Hide page title?
	if(logipro_ozy_get_metabox('hide_title', NULL, $_post_id) !== '1' || !is_page()) {
		$_classes.= ' has-page-title';
	}else if(logipro_ozy_get_metabox('hide_title', NULL, $_post_id) === '1' || !is_page()) {
		$_classes.= ' no-page-title';
	}

	// If post / page has featured image?
	if (has_post_thumbnail()) {
		array_push($classes, 'has-featured-image');
	}

	if( logipro_ozy_get_theme_mod('page_page_comment') == '1' && comments_open() ) {
		array_push($classes, 'page-comment-form');
	}

	$classes[] = $_classes;

	return $classes;
}

function logipro_ozy_load_custom_wp_admin_stuff() {
	include(LOGIPRO_OZY_BASE_DIR . 'include/admin-icon-list.php');
	include(LOGIPRO_OZY_BASE_DIR . 'include/admin-menu-style-editor.php');
}
add_action( 'admin_footer', 'logipro_ozy_load_custom_wp_admin_stuff' );

/**
* ozy_init_test
*
* Initialize some early parameters
*/
function logipro_ozy_init_test() {
	$d = new Ozy_Mobile_Detect;
	logipro_set_ozy_data('device_type', ($d->isMobile() ? ($d->isTablet() ? 'tablet' : 'phone') : 'computer'));
	logipro_set_ozy_data('script_version', $d->getScriptVersion());

	logipro_set_ozy_data('container_width', '1212');
	logipro_set_ozy_data('content_width', '792');
	logipro_set_ozy_data('sidebar_width', '312');

	logipro_set_ozy_data('menu_type', logipro_ozy_get_theme_mod('primary_menu_type'));
	logipro_set_ozy_data('menu_align', logipro_ozy_get_theme_mod('primary_menu_align', 'right'));

	logipro_set_ozy_data('custome_primary_menu', false);

	if(logipro_set_ozy_data('_page_content_css_name'))
		logipro_set_ozy_data('_page_content_css_name', '');
}
add_action( 'init', 'logipro_ozy_init_test' );

/**
* Filter for showing attachmend counts on post listing
*/
add_filter('manage_posts_columns', 'logipro_ozy_posts_columns_attachment_count', 5);
function logipro_ozy_posts_columns_attachment_count($defaults){
    $defaults['wps_post_attachments'] = esc_attr__('Attached', 'logipro');
    return $defaults;
}
/**
* Action for showing attachmend counts on post listing
*/
add_action('manage_posts_custom_column', 'logipro_ozy_posts_custom_columns_attachment_count', 5, 2);
function logipro_ozy_posts_custom_columns_attachment_count($column_name, $id){
	if($column_name === 'wps_post_attachments'){
        $attachments = get_children(array('post_parent'=>$id));
        $count = count($attachments);
        if($count !=0){logipro_e_html($count);}
    }
}

/**
* ozy_init_metaboxes
*
* Initialize defined meta boxes for desired post types.
*/
function logipro_ozy_init_metaboxes()
{
	// Built path to metabox template array file
	$ozy_logipro_meta_page_tmp 		= LOGIPRO_OZY_BASE_DIR . 'admin/metabox/page.php';
	$ozy_logipro_meta_font_tmp		= LOGIPRO_OZY_BASE_DIR . 'admin/metabox/ozy_custom_font.php';
	$ozy_logipro_meta_page_blog_tmp 	= LOGIPRO_OZY_BASE_DIR . 'admin/metabox/page_blog_options.php';
	$ozy_logipro_meta_blog_tmp 		= LOGIPRO_OZY_BASE_DIR . 'admin/metabox/blog.php';
	$ozy_logipro_meta_event_tmp 		= LOGIPRO_OZY_BASE_DIR . 'admin/metabox/event.php';

	// Initialize the Metabox's object
	$ozy_logipro_meta_page_tmp 		= new VP_Metabox($ozy_logipro_meta_page_tmp);
	$ozy_logipro_meta_font_tmp 		= new VP_Metabox($ozy_logipro_meta_font_tmp);
	$ozy_logipro_meta_page_blog_tmp	= new VP_Metabox($ozy_logipro_meta_page_blog_tmp);
	$ozy_logipro_meta_blog_tmp		= new VP_Metabox($ozy_logipro_meta_blog_tmp);
	$ozy_logipro_meta_event_tmp		= new VP_Metabox($ozy_logipro_meta_event_tmp);
}
add_action( 'after_setup_theme', 'logipro_ozy_init_metaboxes' );

/**
* logistics_ozy_print_inline_script_style
*
* Footer inline script. Prints defined inline script into to the footer.
*/
function logipro_ozy_print_inline_script_style() {
	global $ozyLogiProHelper;
	if(isset($ozyLogiProHelper->footer_style)) {
		echo "<style type=\"text/css\" id=\"logipro-footer-style\">\r\n" . $ozyLogiProHelper->footer_style . "\r\n</style>\r\n";
	}
}
add_action( 'wp_footer', 'logipro_ozy_print_inline_script_style' );

/**
* ozy_add_query_vars
*
* Adds extra paremeter to existing query vars
*
* @aVars (array) Default return parameter, set by WordPress
*/
function logipro_ozy_add_query_vars($aVars) {
	$aVars[] = "replytocom"; // represents the name of the product category as shown in the URL
	return $aVars;
}
// hook add_query_vars function into query_vars
add_filter('query_vars', 'logipro_ozy_add_query_vars');

/**
* ozy_cwc_rss_post_thumbnail
*
* Adds the post thumbnail to the RSS feed
*
* @content (string) set by WordPress
*/
function logipro_ozy_cwc_rss_post_thumbnail($content) {
	global $post;
	if(isset($post->ID)) {
		if(has_post_thumbnail($post->ID)) {
			$content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . get_the_content();
		}
	}
	return $content;
}
add_filter('the_excerpt_rss', 'logipro_ozy_cwc_rss_post_thumbnail');
add_filter('the_content_feed', 'logipro_ozy_cwc_rss_post_thumbnail');

/**
* wb_remove_version
*
* Removes the WordPress version from your header for security
*
* @count (int) Default return parameter, set by WordPress
*/
function logipro_ozy_wb_remove_version() {
	return '';
}
add_filter('the_generator', 'logipro_ozy_wb_remove_version');


/**
* comment_count
*
* Removes Trackbacks from the comment cout
*
* @count (int) Default return parameter, set by WordPress
*/
function logipro_ozy_comment_count( $count ) {
	if ( ! is_admin() ) {
		global $post;//global $id;
		if(isset($post->ID)) {
			$comment = get_comments('status=approve&post_id=' . $post->ID);
			$comments_by_type = separate_comments( $comment );
			return count($comments_by_type['comment']);
		}
		return $count;
	} else {
		return $count;
	}
}
add_filter('get_comments_number', 'logipro_ozy_comment_count', 0);

/**
* ozy_excerpt_max_charlength
*
* Returns necessary sidebar CSS class definition name
*
* @charlength (int) How many words will be returned
* @cleanurl (bool) Make the returnings raw or not
* @dots (bool) Add ... end of the return
* @exceprt (string) Input string
*/
function logipro_ozy_excerpt_max_charlength($charlength, $cleanurl = false, $dots = true, $excerpt = '') {
	if(!$excerpt) {
		$excerpt =  get_the_excerpt();
	}
	$charlength++;
	$r = "";
	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$r.= mb_substr( $subex, 0, $excut );
		} else {
			$r.= $subex;
		}
		if($dots) $r.= '...';
	} else {
		$r.= $excerpt;
	}

	return $cleanurl ?  logipro_ozy_cleaner($r) : $r;
}

/**
* ozy_cleaner
*
* Used to make a raw string
*
* @string (string) Input string
*/
function logipro_ozy_cleaner($string) {
	return preg_replace('/\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $string);
}

function logipro_ozy_get_metabox($opt_name, $default = null, $post_id = null) {
	return wp_kses(vp_metabox('ozy_logipro_meta_page.ozy_logipro_meta_page_' . $opt_name, $default, $post_id), wp_kses_allowed_html());
}

function logipro_ozy_get_metabox_grp($opt_name, $group, $group_index = 0, $default = null, $post_id = null) {
	return wp_kses(vp_metabox('ozy_logipro_meta_page.ozy_logipro_meta_page_' . $group .'.'. $group_index .'.ozy_logipro_meta_page_'. $opt_name , $default, $post_id), wp_kses_allowed_html());
}

function logipro_ozy_get_theme_mod($param, $default = NULL) {
	if ( !class_exists( 'Kirki' ) ) {
		return '';
	}
	return Kirki::get_option('ozy_logipro', 'ozy_logipro_' . $param, $default);
}

function logipro_ozy_get_theme_mod_arr_key($param, $default = array(), $arr_key) {
	if ( !class_exists( 'Kirki' ) ) {
		return '';
	}
	$r = Kirki::get_option('ozy_logipro', 'ozy_logipro_' . $param, $default);
	if(isset($r[$arr_key])) {
		return $r[$arr_key];
	}
	return '';
}

function logipro_ozy_safe_html_output($input) {
	return wp_kses($input, wp_kses_allowed_html());
}

/**
* ozy_sidebar_check
*
* Returns necessary sidebar CSS class definition name
*
* @sidebar_position (string)
*/
function logipro_ozy_sidebar_check($sidebar_position) {
	if(is_search()) return 'no-sidebar ';
	switch($sidebar_position) {
		case 'full':
			return 'no-sidebar ';
		case 'left':
			return 'left-sidebar ';
		case 'right':
			return 'right-sidebar ';
		default:
			return 'no-sidebar ';
	}
}

/**
* A pagination function
*
* @param integer $range: The range of the slider, works best with even numbers
*
* Used WP functions:
* get_pagenum_link($i) - creates the link, e.g. http://site.com/page/4
* previous_posts_link('<span class="prev">&nbsp;</span>'); - returns the Previous page link
* next_posts_link('<span class="next">&nbsp;</span>'); - returns the Next page link
*/
function logipro_ozy_get_pagination($before='',$after='',$range = 4) {
	// output variable
	$output = "";

	$paged = 0;
	if (get_query_var('paged')) {
		$paged = get_query_var('paged');
	}elseif( get_query_var('page') ) {
		$paged = get_query_var('page');
	}else{
		$paged = 1;
	}

	// $paged - number of the current page
	global $wp_query;
	// How much pages do we have?
	if ( !isset($max_page) ) {
		$max_page = $wp_query->max_num_pages;
	}
	// We need the pagination only if there are more than 1 page
	if($max_page > 1){

		$output .= $before;

		if(!$paged){
			$paged = 1;
		}

		// To the previous page
		$output .= get_previous_posts_link('<span>&larr;</span>&nbsp;' . esc_attr('Previous', 'logipro'));
		// We need the sliding effect only if there are more pages than is the sliding range
		if($max_page > $range){
			// When closer to the beginning
			$output	.= '<div>';
			if($paged < $range){
				for($i = 1; $i <= ($range + 1); $i++){
					$output .= "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged) $output .= " class='current'";
					$output .= ">$i</a>";
				}
			}
			// When closer to the end
			elseif($paged >= ($max_page - ceil(($range/2)))){
				for($i = $max_page - $range; $i <= $max_page; $i++){
				$output .= "<a href='" . get_pagenum_link($i) ."'";
				if($i==$paged) $output .= " class='current'";
				$output .= ">$i</a>";
			}
			$output	.= '</div>';
		}
		// Somewhere in the middle
		elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
			$output	.= '<div>';
			for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
				$output .= "<a href='" . get_pagenum_link($i) ."'";
				if($i==$paged) $output .= " class='current'";
				$output .= ">$i</a>";
			}
			$output	.= '</div>';
		}
	}
	// Less pages than the range, no sliding effect needed
	else{
		$output	.= '<div>';
		for($i = 1; $i <= $max_page; $i++){
			$output .= "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged) $output .= " class='current'";
			$output .= ">$i</a>";
		}
		$output	.= '</div>';
	}
	// Next page
	$output .= get_next_posts_link(esc_attr('Next', 'logipro') . '&nbsp;<span>&rarr;</span>');

	$output .= $after;
	}

	return $output;
}

add_filter('next_posts_link_attributes', 'logipro_ozy_next_post_link_filter');
function logipro_ozy_next_post_link_filter() {
    return 'class="next-post-link"';
}

add_filter('previous_posts_link_attributes', 'logipro_ozy_previous_post_link_filter');
function logipro_ozy_previous_post_link_filter() {
    return 'class="previous-post-link"';
}

/**
* ozy_add_extra_page
*
* Category id in body and post class
*
* @classes (array) Exisiting definitions
*/
function logipro_ozy_category_id_class($classes) {
	global $post;
	if(isset($post->ID)) {
		foreach((get_the_category($post->ID)) as $category) {
			$classes [] = 'cat-' . $category->cat_ID . '-id';
		}
	}
	return $classes;
}
add_filter('post_class', 'logipro_ozy_category_id_class');
add_filter('body_class', 'logipro_ozy_category_id_class');

/**
* ozy_add_extra_page
*
* Adds a class to the post if there is a thumbnail
*
* @classes (array) Exisiting definitions
*/
function logipro_ozy_has_thumb_class($classes) {
	global $post;
	if(isset($post->ID)){
		if( has_post_thumbnail($post->ID) ) {
			$classes[] = 'has_thumb';
		}
	}
	return $classes;
}
add_filter('post_class', 'logipro_ozy_has_thumb_class');

function logipro_ozy_return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
	$val = (int)$val;
    switch($last) {
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }
    return $val;
}

function logipro_ozy_check_limit_size($a, $r) {
	if((int)$r > (int)$a) {
		return "red-text";
	}
	return "green-text";
}

/**
* ozy_ajax_auto_install_revo_slider
*
* Like button handling function. Parameters passed by GET
*/
function logipro_ozy_ajax_auto_install_revo_slider() {

	error_reporting(0); /*DISABLE ERROR REPORTING*/

	$selected_sliders = isset($_GET["selected_sliders"]) ? (sanitize_text_field($_GET["selected_sliders"])) : NULL;

	if($selected_sliders != NULL) {
		$selected_sliders = explode(',', $selected_sliders);

		if(count($selected_sliders)) {
			$slider_array = array();
			foreach($selected_sliders as $slider) {
				$slider_array[] = get_template_directory() . "/samples/sliders/". $slider .".zip";
			}

			$absolute_path = __FILE__;
			$path_to_file = explode( 'wp-content', $absolute_path );
			$path_to_wp = $path_to_file[0];

			$slider = new RevSlider();

			foreach($slider_array as $filepath){
				$slider->importSliderFromPost(true, true, $filepath);
			}
			exit();
		}else{
			echo 'Nothing Imported';
			exit();
		}
	}
	echo 'Nothing Imported';
	exit();

}
add_action( 'wp_ajax_logipro_ozy_ajax_auto_install_revo_slider', 'logipro_ozy_ajax_auto_install_revo_slider' );

/**
* ozy_ajax_like
*
* Like button handling function. Parameters passed by GET
*/
function logipro_ozy_ajax_like() {

	$id = isset($_GET["vote_post_id"]) ? (sanitize_text_field($_GET["vote_post_id"])) : 0;

	if((int)$id <= 0) die( 'Invalid Operation' );

	$like_count = (int)get_post_meta((int)$id, "ozy_post_like_count", true);

	update_post_meta((int)$id, "ozy_post_like_count", $like_count + 1);

	logipro_e_html($like_count + 1);

	exit();

}
add_action( 'wp_ajax_nopriv_logipro_ozy_ajax_like', 'logipro_ozy_ajax_like' );
add_action( 'wp_ajax_logipro_ozy_ajax_like', 'logipro_ozy_ajax_like' );

/**
* ozy_ajax_load_more
*
* Load more posts for blog and portfolio. Parameters passed by GET
*/
function logipro_ozy_ajax_load_more() {

	global $ozyLogiProHelper;

	$order 			= isset($_GET["p_order"]) 			? esc_sql($_GET["p_order"]) 			: '';
	$orderby 		= isset($_GET["p_orderby"]) 		? esc_sql($_GET["p_orderby"]) 			: '';
	$item_count 	= isset($_GET["p_item_count"]) 		? esc_sql($_GET["p_item_count"]) 		: '';
	$category_name 	= isset($_GET["p_category_name"]) 	? esc_sql($_GET["p_category_name"]) 	: '';
	$offset 		= isset($_GET["p_offset"]) 			? esc_sql($_GET["p_offset"]) 			: '';
	$layout_type	= isset($_GET["p_layout_type"]) 	? esc_sql($_GET["p_layout_type"]) 		: 'folio';

	$post_type = 'post';
	switch($layout_type) {
		default:
			$post_type = 'post';
	}

	$args = array(
		'post_type' 		=> $post_type,
		'offset'			=> $offset,
		'posts_per_page' 	=> ( (int)$item_count <= 0 ? get_option("posts_per_page") : ((int)$item_count > 0 ? $item_count : 6) ),
		'orderby' 			=> $orderby,
		'order' 			=> $order,
		'ignore_sticky_posts' 	=> 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => array( 'post-format-quote', 'post-format-status', 'post-format-link' ),
				'operator' => 'NOT IN'
			)
		)
	);

	$args['cat'] = $category_name;

	$the_query = new WP_Query( $args );
	include(LOGIPRO_OZY_BASE_DIR . 'include/loop-ajax-posts.php');

	exit();
}
add_action( 'wp_ajax_nopriv_logipro_ozy_ajax_load_more', 'logipro_ozy_ajax_load_more' );
add_action( 'wp_ajax_ozy_logipro_ajax_load_more', 'logipro_ozy_ajax_load_more' );

/**
* ozy_grab_ids_from_gallery
*
* In some page templates we are only using attachment IDs from gallery shortcode
*/
function logipro_ozy_grab_ids_from_gallery() {
	global $post;
	$attachment_ids = array();
	$pattern = get_shortcode_regex();
	$ids = array();

	if(isset($post->post_content)) {
		if (preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches ) ) { //finds the     "gallery" shortcode and puts the image ids in an associative array at $matches[3]
			$count=count($matches[3]); //in case there is more than one gallery in the post.
			for ($i = 0; $i < $count; $i++){
				$atts = shortcode_parse_atts( $matches[3][$i] );
				if ( isset( $atts['ids'] ) ){
					$attachment_ids = explode( ',', $atts['ids'] );
					$ids = array_merge($ids, $attachment_ids);
				}
			}
		}
	}

	return $ids;
}

/**
* ozy_add_video_embed_title
*
* In regular blog post we are using WordPress embeds as featured media before the title.
*
* @html (string)
* @url (string)
* @attr (string)
*/
function logipro_ozy_add_video_embed_title($html, $url, $attr) {
	if(logipro_get_ozy_data('ozy_temporary_post_format') != '' && (logipro_get_ozy_data('current_theme_template') == 'page-regular-blog.php' || logipro_get_ozy_data('current_theme_template') == 'index.php' || is_single())) {
		logipro_set_ozy_data('media_object', '<div class="post-' . logipro_get_ozy_data('ozy_temporary_post_format') . '">' . (logipro_get_ozy_data('ozy_temporary_post_format') === 'video' ? '<div class="ozy-video-wrapper">'. $html .'</div>' : $html )  . '</div>');
		return '';
	}
	return $html;
}
//add_filter('embed_oembed_html', 'ozy_add_video_embed_title', 10, 3);
add_filter('embed_oembed_html', 'logipro_ozy_add_video_embed_title', 99, 4);

/**
* ozy_template_include
*
* Finds and sets current_theme_template current page template name.
*
* @t (unknown) set by WordPress
*/
function logipro_ozy_template_include( $t ){
	logipro_set_ozy_data('current_theme_template', basename($t));
    return $t;
}
add_filter( 'template_include', 'logipro_ozy_template_include', 1 );

/**
* custom_excerpt_length
*
* Set how many words we want on excerpt.
*
* @length (int) required for WordPress
*/
function logipro_ozy_custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'logipro_ozy_custom_excerpt_length', 999 );

/**
* ozy_enable_more_buttons
*
* Add more buttons to the visual editor
*
* @buttons (array) early defined buttons on editor
*/
function logipro_ozy_enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'cleanup';
	$buttons[] = 'charmap';
	return $buttons;
}
add_filter( 'mce_buttons_3', 'logipro_ozy_enable_more_buttons' );

/**
* ozy_customize_text_sizes
*
* Add custom text sizes in the font size drop down list of the rich text editor (TinyMCE) in WordPress.
* Value 'theme_advanced_font_sizes' needs to be added, if an overwrite to the default font sizes in the list, is needed.
*
* @initArray (array)  is a variable of type array that contains all default TinyMCE parameters.
*/
function logipro_ozy_customize_text_sizes($initArray){
	$initArray['theme_advanced_font_sizes'] = "10px,11px,12px,13px,14px,15px,16px,17px,18px,19px,20px,21px,22px,23px,24px,25px,26px,27px,28px,29px,30px,32px,48px,60px,72px,84px,96px,108px,120px";
	return $initArray;
}
add_filter('tiny_mce_before_init', 'logipro_ozy_customize_text_sizes');

/**
 * Extended Walker class for use with the
 * Twitter Bootstrap toolkit Dropdown menus in Wordpress.
 * Edited to support n-levels submenu.
 * @author johnmegahan https://gist.github.com/1597994, Emanuele 'Tex' Tessore https://gist.github.com/3765640
 */
class BootstrapNavMenuWalker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0 , $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	   .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		if (!is_object($args))
			return false;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		// managing divider: add divider class to an element to get a divider before it.
		$divider_class_position = array_search('divider', $classes);
		if($divider_class_position !== false){
			$output .= "<li class=\"divider\"></li>\n";
			unset($classes[$divider_class_position]);
		}

		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if($depth && $args->has_children){
			$classes[] = 'dropdown-submenu';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}


	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
			unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
	}
}

/**
 * Extended Walker class for use with the
 * Twitter Bootstrap toolkit Dropdown menus in Wordpress.
 * Edited to support n-levels submenu.
 * @author johnmegahan https://gist.github.com/1597994, Emanuele 'Tex' Tessore https://gist.github.com/3765640
 */
class BootstrapNavMenuWalkerClassic extends Walker_Nav_Menu {
	var $use_custom_for_this_menu_item = false;
	var $request_rate = false;
	var $tracking_form = false;
	function ozy_custom_menu_style_builder($json, $element_id) {
		$this->use_custom_for_this_menu_item = false;
		$this->request_rate = false;
		$this->tracking_form = false;
		if($json) {
			$json_obj = json_decode($json);
			if($json_obj) {
				if((isset($json_obj->use_custom)) && $json_obj->use_custom == 1) {
					global $ozyLogiProHelper;
					$style = '';
					if(isset($json_obj->bg_color) && $json_obj->bg_color){$style .= 'background: '. $json_obj->bg_color .';';}
					if(isset($json_obj->fn_color) && $json_obj->fn_color){ $style .= 'color:'. $json_obj->fn_color .'!important;'; }

					$this->use_custom_for_this_menu_item = true;
					$ozyLogiProHelper->set_footer_style('@media screen and (min-width:1181px){#top-menu>div>div>ul>li.menu-item-'. $element_id .'>a{'. $style .'}}');
				}
				if((isset($json_obj->request_rate)) && $json_obj->request_rate == 1) {
					$this->request_rate = true;
				}
				if((isset($json_obj->tracking_form)) && $json_obj->tracking_form == 1) {
					$this->tracking_form = true;
				}
			}
		}
	}

	function start_lvl( &$output, $depth = 0 , $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output	   .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		if (!is_object($args))
			return false;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		// managing divider: add divider class to an element to get a divider before it.
		$divider_class_position = array_search('divider', $classes);
		if($divider_class_position !== false){
			$output .= "<li class=\"divider\"></li>\n";
			unset($classes[$divider_class_position]);
		}

		$classes[] = ($args->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if($depth && $args->has_children){
			$classes[] = 'dropdown-submenu';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

	 	//Individual Menu Style for Level 0 menu items
		if($depth == 0) {
			$this->ozy_custom_menu_style_builder(get_post_meta( $item->ID, 'menu-item-style', true ), $item->ID);
			if($this->use_custom_for_this_menu_item){ $class_names .= ' menu-item-use-custom'; }
		}

		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
 		if($depth == 0 && $this->request_rate){ $attributes .= ' id="request-a-rate-button"'; }
		if($depth == 0 && $this->tracking_form){ $attributes .= ' id="tracking-form"'; }
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}


	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
			unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
	}
}

/**
* Header slider check
*/
function logipro_ozy_check_header_slider() {
	if(is_search()) return array('','');

	$slider_type = $slider_alias = '';
	if ( have_posts() && !is_page_template('page-revo-full.php')) {
		wp_reset_postdata();
		global $post;
		$post_id = isset($post->ID) ? $post->ID : 0;

		/*Revolution slider*/
		$revo_slider_alias = logipro_ozy_get_metabox('revolution_slider', null, $post_id);
		if( $revo_slider_alias != '-1' && $revo_slider_alias != '' && function_exists('putRevSlider') ) {
			$slider_type 	= 'revo';
			$slider_alias 	= $revo_slider_alias;
		}

		/*Master slider*/
		$master_slider_alias = logipro_ozy_get_metabox('master_slider', null, $post_id);
		if( $master_slider_alias != '-1' && $master_slider_alias != '' && function_exists('masterslider') ) {
			$slider_type 	= 'master';
			$slider_alias 	= $master_slider_alias;
		}
	}
	return array($slider_type, $slider_alias);
}

/**
* Adds header slider if defined on metaboxes
*/
function logipro_ozy_put_header_slider($args) {
	if(!is_page_template('page-revo-full.php')) {
		if(is_array($args) && isset($args[0]) && $args[0]) {
			echo '<div class="ozy-header-slider">';
			if($args[0] == 'revo') {
				if(function_exists('putRevSlider')) putRevSlider( $args[1] );
			} else if($args[0] == 'master') {
				if(function_exists('masterslider')) masterslider( $args[1] );
			}
			echo '</div><!--#header-slider-->';
		}
	}
}

/**
* Footer slider check
*/
function logipro_ozy_check_footer_slider() {
	if(is_search()) return array('','');

	$slider_type = $slider_alias = '';
	if ( have_posts() &&
		!is_page_template('page-revo-full.php') &&
		logipro_ozy_get_metabox('use_footer_slider') == '1' )
	{
		/*Revolution slider*/
		$revo_slider_alias = logipro_ozy_get_metabox('use_footer_slider_group.0.ozy_logipro_meta_page_revolution_footer_slider');
		if( $revo_slider_alias != '-1' && $revo_slider_alias != '' && function_exists('putRevSlider') ) {
			$slider_type 	= 'revo';
			$slider_alias 	= $revo_slider_alias;
		}

		/*Master slider*/
		$master_slider_alias = logipro_ozy_get_metabox('use_footer_slider_group.0.ozy_logipro_meta_page_master_footer_slider');
		if( $master_slider_alias != '-1' && $master_slider_alias != '' && function_exists('masterslider') ) {
			$slider_type 	= 'master';
			$slider_alias 	= $master_slider_alias;
		}
	}
	return array($slider_type, $slider_alias);
}

/**
* Add footer slider to page if defined on metaboxes
*/
function logipro_ozy_put_footer_slider($args) {
	if(is_array($args) && isset($args[0]) && $args[0]) {
		echo '<div class="ozy-footer-slider">';
		if($args[0] == 'revo') {
			putRevSlider( $args[1] );
		} else if($args[0] == 'master') {
			masterslider( $args[1] );
		}
		echo '</div><!--#footer-slider-->';
	}
}

/**
* Load theme options generic metabox parameters for blog
*/
function logipro_ozy_blog_meta_params() {
	/*post per load*/
	$post_per_load 			= (int)vp_metabox('ozy_logipro_meta_page_blog.ozy_logipro_meta_page_blog_count');

	/*order & order by*/
	$order = 'ASC'; $orderby = 'date';
	$order_orderby			= vp_metabox('ozy_logipro_meta_page_blog.ozy_logipro_meta_page_blog_order');
	$order_orderby			= explode('-', $order_orderby);
	if(is_array($order_orderby) && isset($order_orderby[0]) && isset($order_orderby[1])) {
		$order = $order_orderby[1]; $orderby = $order_orderby[0];
	}

	/*category filter*/
	$category_filter		= vp_metabox('ozy_logipro_meta_page_blog.ozy_logipro_meta_page_blog_filter');

	/*check if category filter set for blog page*/
	$include_categories = vp_metabox('ozy_logipro_meta_page_blog.ozy_logipro_meta_page_blog_category');
	if(is_array($include_categories) && isset($include_categories[0]) && $include_categories[0] != '-1') {
		//user not choosed to show all categories
		$include_categories = join(',', $include_categories);
	}else{
		$include_categories = '';
	}

	logipro_set_ozy_data('_blog_order', $order);
	logipro_set_ozy_data('_blog_orderby', $orderby);
	logipro_set_ozy_data('_blog_include_categories', $include_categories);
	logipro_set_ozy_data('_blog_post_per_load', $post_per_load);
	logipro_set_ozy_data('_blog_category_filter', $category_filter);
	logipro_set_ozy_data('_blog_filter_visiblity', vp_metabox('ozy_logipro_meta_page_blog.ozy_logipro_meta_page_blog_filter'));
}

/**
* Load theme options generic metabox parameters for pages / posts
*/
function logipro_ozy_page_meta_params($opt_param = "page") {
	global $ozyLogiProHelper;

	/*background slider*/
	$background_use_slider = logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_slider');
	if($background_use_slider == '1') {
		$ozyLogiProHelper->fullscreen_slide_show();
	}
	/*custom page options*/
	$hide_page_title		= logipro_ozy_get_metabox('hide_title');
	$hide_page_content 		= logipro_ozy_get_metabox('hide_content');
	$custom_page_title		= logipro_ozy_get_metabox('use_custom_title') == '1' ? logipro_ozy_get_metabox('custom_title') : '';
	$use_custom_sidebar		= logipro_ozy_get_metabox('use_sidebar');

	/*generic sidebar options*/
	$sidebar_position		= logipro_ozy_get_theme_mod('page_'.$opt_param.'_sidebar_position');
	$sidebar_name			= logipro_ozy_get_theme_mod('page_'.$opt_param.'_sidebar_id');

	/*custom sidebar used?*/
	if($use_custom_sidebar == '1') {
		$sidebar_position 	= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar_position');
		$sidebar_name 		= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar');
	}

	/*sidebar check*/
	$content_css_name = logipro_ozy_sidebar_check($sidebar_position);

	if($hide_page_title !== '1') {
		$content_css_name.= ' has-title ';
	}

	if(!$ozyLogiProHelper->has_shortcode('vc_row') || !function_exists('vc_map') && (!is_single())) {
		$content_css_name.= ' no-vc ';
	}

	logipro_set_ozy_data('_page_background_use_slider', $background_use_slider);
	logipro_set_ozy_data('_page_hide_page_title', logipro_get_ozy_data('_page_hide_page_title') && logipro_get_ozy_data('_page_hide_page_title') != '0' ? logipro_get_ozy_data('_page_hide_page_title') : $hide_page_title);
	logipro_set_ozy_data('_page_hide_page_content', $hide_page_content);
	logipro_set_ozy_data('_page_custom_page_title', $custom_page_title);
	logipro_set_ozy_data('_page_use_custom_sidebar', $use_custom_sidebar);
	logipro_set_ozy_data('_page_sidebar_position', $sidebar_position);
	logipro_set_ozy_data('_page_sidebar_name', $sidebar_name . logipro_get_ozy_data('wpml_current_language_'));
	if(logipro_get_ozy_data('_page_content_css_name'))
		logipro_set_ozy_data('_page_content_css_name', '');

	logipro_set_ozy_data('_page_content_css_name', logipro_get_ozy_data('_page_content_css_name') . $content_css_name);
}

/**
* Load theme options generic metabox parameters for pages
*/
function logipro_ozy_page_master_meta_params() {
	wp_reset_postdata();
	global $ozyLogiProHelper;
	// background slider
	if(logipro_ozy_get_metabox('use_custom_background') == '1') {
		$meta_opt_path = 'ozy_logipro_meta_page.ozy_logipro_meta_page_background_group.0.ozy_logipro_meta_page_background_video';
		if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_slider') == '1') {
			$ozyLogiProHelper->fullscreen_slide_show();
		}
		if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_self') == '1') {
			$ozyLogiProHelper->fullscreen_video_show(
				vp_metabox($meta_opt_path . '_self_group.0.ozy_logipro_meta_page_background_video_self_image'),
				vp_metabox($meta_opt_path . '_self_group.0.ozy_logipro_meta_page_background_video_self_mp4'),
				vp_metabox($meta_opt_path . '_self_group.0.ozy_logipro_meta_page_background_video_self_webm'),
				vp_metabox($meta_opt_path . '_self_group.0.ozy_logipro_meta_page_background_video_self_ogv')
			);
		}
		if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_youtube') == '1') {
			$ozyLogiProHelper->fullscreen_youtube_video_show(
				vp_metabox($meta_opt_path . '_youtube_group.0.ozy_logipro_meta_page_background_video_youtube_image'),
				vp_metabox($meta_opt_path . '_youtube_group.0.ozy_logipro_meta_page_background_video_youtube_id')
			);
		}
		if(logipro_ozy_get_metabox('background_group.0.ozy_logipro_meta_page_background_use_video_vimeo') == '1') {
			$ozyLogiProHelper->fullscreen_vimeo_video_show(
				vp_metabox($meta_opt_path . '_vimeo_group.0.ozy_logipro_meta_page_background_video_vimeo_image'),
				vp_metabox($meta_opt_path . '_vimeo_group.0.ozy_logipro_meta_page_background_video_vimeo_id')
			);
		}
	}

	// custom page options
	$hide_page_title		= logipro_ozy_get_metabox('hide_title');
	$hide_page_content 		= logipro_ozy_get_metabox('hide_content');
	$custom_page_title		= logipro_ozy_get_metabox('use_custom_title') == '1' ? logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_title') : '';
	$custom_page_sub_title	= logipro_ozy_get_metabox('use_custom_title') == '1' ? logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_sub_title') : '';
	$use_custom_sidebar		= logipro_ozy_get_metabox('use_sidebar');

	// generic sidebar options
	// absolute
	$_page_type = 'page';
	if(is_single()) { $_page_type = 'blog'; }
	$sidebar_position		= logipro_ozy_get_theme_mod('page_'. $_page_type .'_sidebar_position');
	$sidebar_name			= logipro_ozy_get_theme_mod('page_'. $_page_type .'_sidebar_id');

	// custom sidebar used?
	if($use_custom_sidebar == '1') {
		$sidebar_position 	= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar_position');
		$sidebar_name 		= logipro_ozy_get_metabox('sidebar_group.0.ozy_logipro_meta_page_sidebar');
	}

	// sidebar check
	$content_css_name = logipro_ozy_sidebar_check($sidebar_position);

	if(!$ozyLogiProHelper->has_shortcode('vc_row') || is_search()) {
		$content_css_name.= ' no-vc ';
	}

	logipro_set_ozy_data('_page_hide_page_title', $hide_page_title);
	logipro_set_ozy_data('_page_hide_page_content', $hide_page_content);
	logipro_set_ozy_data('_page_custom_page_title', $custom_page_title);
	logipro_set_ozy_data('_page_custom_page_sub_title', $custom_page_sub_title);
	logipro_set_ozy_data('_page_use_custom_sidebar', $use_custom_sidebar);
	logipro_set_ozy_data('_page_sidebar_position', $sidebar_position);
	logipro_set_ozy_data('_page_sidebar_name', $sidebar_name . logipro_get_ozy_data('wpml_current_language_'));
	if(logipro_get_ozy_data('_page_content_css_name'))
		logipro_set_ozy_data('_page_content_css_name', '');

	logipro_set_ozy_data('_page_content_css_name', logipro_get_ozy_data('_page_content_css_name') . $content_css_name);

	$hide_page_title_arr = array(
		'page-row-slider'
	);
	foreach($hide_page_title_arr as $p) {
		if(is_page_template($p . '.php')) {
			logipro_set_ozy_data('_page_hide_page_title', '1');
			break;
		}
	}
}

/**
* ozy_convert_classic_gallery
*
* Catches [gallery] shortcode fromt content, removes it and turns into array
*/
function logipro_ozy_convert_classic_gallery() {
	echo apply_filters('the_content', preg_replace('/\[gallery ids=[^\]]+\]/', '',  get_the_content()));
}

/**
* ozy_add_search_to_header_menu
*
* Adds search icon into classic and mega menu options
*/
function logipro_ozy_add_search_to_header_menu ( $items, $args ) {
	if(logipro_get_ozy_data('menu_type') == 'classic') {
		$search_output = $sidemenu_output = $wpml_output = '';
		if('logged-in-menu' === $args -> theme_location || 'header-menu' === $args -> theme_location || (logipro_get_ozy_data('custome_primary_menu') && ('logged-in-menu' === $args -> theme_location || 'header-menu' === $args -> theme_location))) {
			if(logipro_ozy_get_theme_mod('primary_menu_search') != '-1') {
				$search_output .= '<li class="menu-item menu-item-search">
						<a href="#search" id="main-search-button">
							<span>
								<i class="oic-search-1"></i><span>'. esc_attr__('Search', 'logipro') .'</span>
							</span>
						</a>
					</li>';
			}
			$wpml_output = logipro_wpml_language_switcher_classic(false, false);
		}

		if(logipro_get_ozy_data('menu_align') === 'right') {
			$items = $items . $search_output . $wpml_output;
		}else{
			$items = $wpml_output . $search_output . $items;
		}
	}
	return $items;
}
add_filter('wp_nav_menu_items','logipro_ozy_add_search_to_header_menu',10,2);

/**
* wp_title Filter to avoid theme check errors
*/
function logipro_ozy_filter_wp_title( $title ) {
	$filtered_title = get_bloginfo( 'name' );
	if ( is_category() ) {
		$filtered_title = 'Category Archive for &quot;' . single_cat_title('', false) . '&quot; | ' . get_bloginfo( 'name' );
	} elseif ( is_tag() ) {
		$filtered_title = 'Tag Archive for &quot;' . single_tag_title('', false) . '&quot; | ' . get_bloginfo( 'name' );
	} elseif ( is_archive() ) {
		$filtered_title = $title . ' Archive | ' . get_bloginfo( 'name' );
	} elseif ( is_search()) {
		$filtered_title = 'Search for &quot;'. esc_html(get_search_query()) .'&quot; | ' . get_bloginfo( 'name' );
	} elseif ( is_home() ) {
		$filtered_title = get_bloginfo( 'name' ) .  ' | ' . get_bloginfo( 'description' );
	}  elseif ( is_404() ) {
		$filtered_title = 'Error 404 Not Found | ' . get_bloginfo( 'name' );
	} elseif ( is_single() ) {
		$filtered_title = $title;
	} else {
		$filtered_title = get_bloginfo( 'name' );
		if($title) {
			$filtered_title .= $title;
		}
	}
    return $filtered_title;
}
add_filter( 'wp_title', 'logipro_ozy_filter_wp_title' );
/**
* To enable font upload, adding file mime types
*/
function logipro_ozy_custom_upload_mimes ( $existing_mimes=array() ) {
	// add your extension to the array
	$existing_mimes['eot'] 	= 'application/vnd.ms-fontobject';
	$existing_mimes['ttf'] 	= 'application/octet-stream';
	$existing_mimes['woff'] = 'application/x-woff';
	$existing_mimes['svg'] 	= 'image/svg+xml';

	return $existing_mimes;
}
add_filter('upload_mimes', 'logipro_ozy_custom_upload_mimes');

function logipro_ozy_custom_nextpage_links($defaults) {
	$args = array(
		'before' => '<div class="pagination">' . esc_attr__('Pages: ', 'logipro'),
		'after' => '</div>',
	);

	$r = wp_parse_args($args, $defaults);

	return $r;
}
add_filter('wp_link_pages_args','logipro_ozy_custom_nextpage_links');

function logipro_ozy_custom_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form content-font" method="post">
    <h3 class="heading-font">' . esc_attr__( "This content is password protected. To view it please enter your password below.", "logipro" ) . '</h3>
    <label for="' . esc_attr($label) . '">' . esc_attr__( "Password:", "logipro" ) . ' </label><input name="post_password" id="' . esc_attr($label) . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit", "logipro" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'logipro_ozy_custom_password_form' );

function logipro_ozy_custom_header() {
	global $ozyLogiProHelper;

	logipro_set_ozy_data('blog_has_super_header', false);

	/*header slider*/
	logipro_ozy_put_header_slider(logipro_get_ozy_data('header_slider'));

	logipro_ozy_page_master_meta_params();

	logipro_ozy_blog_meta_params();

	if(is_single()) {
		logipro_ozy_page_meta_params('blog');
	}else{
		logipro_ozy_page_meta_params();
	}

	$page_title_available 	= is_page() || is_search() || is_archive() || is_category() || is_home();

	global $post;
	if (is_single() && isset($post->post_type) && $post->post_type === 'post'){
		$custom_blog_page_id = logipro_ozy_get_theme_mod('page_blog_page_id');
		if($custom_blog_page_id) {
			logipro_set_ozy_data('_page_custom_page_title',
				logipro_ozy_get_metabox('use_custom_title', 0) == '1' ?
				logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_title', '', $custom_blog_page_id) : get_the_title($custom_blog_page_id)
			);
			logipro_set_ozy_data('_page_custom_page_sub_title',
				logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_sub_title', '', $custom_blog_page_id)
			);
			logipro_set_ozy_data('_page_hide_page_title', '0');
			$page_title_available = true;
			logipro_set_ozy_data('_page_title_custom_id_for_post', $custom_blog_page_id);
		}
	}else{
		if(is_search()) {
			logipro_set_ozy_data('_page_custom_page_title', esc_attr__('Search results for: "', 'logipro') . get_search_query() . '"');
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title', '0');
		}else if(is_home()) {
			logipro_set_ozy_data('_page_custom_page_title', esc_attr__('Blog', 'logipro'));
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title' ,'0');
		}else if(is_author()) {
			if(isset($_GET['author_name'])){
				$curauth = get_userdatabylogin($author_name);
			}else{
				$author = get_query_var('author');
				$curauth = get_userdata(intval($author));
			}
			logipro_set_ozy_data('_page_custom_page_title', esc_attr__('About: ', 'logipro') . $curauth->display_name);
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title', '0');
		}else if(is_category()) {
			logipro_set_ozy_data('_page_custom_page_title', esc_attr__('Category Archives: ', 'logipro') . single_cat_title( '', false ));
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title', '0');
		}else if(is_archive()) {
			if ( is_day() ) : /* if the daily archive is loaded */
				logipro_set_ozy_data('_page_custom_page_title', sprintf(esc_attr__('Daily Archives: %s', 'logipro'), get_the_date() ));
			elseif ( is_month() ) : /* if the montly archive is loaded */
				logipro_set_ozy_data('_page_custom_page_title', sprintf( esc_attr__('Monthly Archives: %s', 'logipro'), get_the_date('F Y')));
			elseif ( is_year() ) : /* if the yearly archive is loaded */
				logipro_set_ozy_data('_page_custom_page_title', sprintf(esc_attr__( 'Yearly Archives: %s', 'logipro'), get_the_date('Y')));
			else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */
				logipro_set_ozy_data('_page_custom_page_title', esc_attr__('Blog Archives', 'logipro'));
			endif;
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title', '0');
		}else if(is_tag()) {
			logipro_set_ozy_data('_page_custom_page_title', sprintf(esc_attr__( 'Tag Archives: %s', 'logipro'), single_tag_title( '', false )));
			logipro_set_ozy_data('_page_custom_page_sub_title', '');
			logipro_set_ozy_data('_page_hide_page_title', '0');
		}else{
			if(isset($post->ID)) {
				logipro_set_ozy_data('_page_custom_page_title',
					logipro_ozy_get_metabox('use_custom_title', 0) == '1' ?
					logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_title', '') : get_the_title($post->ID)
				);
				logipro_set_ozy_data('_page_custom_page_sub_title',
					logipro_ozy_get_metabox('use_custom_title_group.0.ozy_logipro_meta_page_custom_sub_title', '', $post->ID)
				);
			}
		}
	}
	if (is_single() && get_post_type() === 'post' ) {
		if ( have_posts() ) while ( have_posts() ) : the_post();

			if ( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' , false );
				if(isset($src[0])) {
					$ozyLogiProHelper->set_footer_style('.featured-thumbnail-header:before{background:url('. esc_url($src[0]) .') top center no-repeat;}');
					echo '<div class="featured-thumbnail-header">';

					$image_ids_arr = logipro_ozy_grab_ids_from_gallery(); $image_o = '';
					if(count($image_ids_arr)>0){
						foreach ( $image_ids_arr as $id ) {
							$large_image = wp_get_attachment_image_src( $id, 'full' );
							$image_o .= '<div style="background-image:url(' . esc_url($large_image[0]) . ');" class="carousel-cell"></div>'. PHP_EOL;
						}
						echo '<div class="carousel blog-slider-single" data-flickity=\'{"prevNextButtons": false, "autoPlay": 3500, "pageDots": false, "adaptiveHeight": false}\'>';
						logipro_e_html($image_o);
						echo '</div>';
					}

					echo '	<div>';
					echo '		<div class="container">
									<div>';
					echo '				<h1 class="blog-heading-font blog-heading-color">'. ( get_the_title() ? get_the_title() : get_the_time(get_option('date_format')) ) .'</h1>';
					echo '				<div class="post-meta content-font">';
					echo '					<p class="blog-heading-color">'; echo the_time(LOGIPRO_OZY_DATE_FORMAT); esc_attr_e(' In ', 'logipro'); the_category(', '); echo '</p>';
					echo '				</div>';
					echo '			</div>
								</div>';
					echo '	</div>';
					echo '</div>';

					logipro_set_ozy_data('blog_has_super_header', true);
				}
			}
		endwhile;
	}
	else
	{
		/*page title*/
		if(logipro_get_ozy_data('_page_hide_page_title') != '1' && $page_title_available && logipro_get_ozy_data('hide_everything_but_content') <= 0) {
		?>
		<div id="page-title-wrapper">
			<div>
				<h1 class="page-title"><?php echo trim(logipro_get_ozy_data('_page_custom_page_title')) ? esc_html(logipro_get_ozy_data('_page_custom_page_title')) : esc_html(get_the_title()) ?></h1>
				<?php if(logipro_get_ozy_data('_page_custom_page_sub_title')) { echo '<h4>'. esc_html(logipro_get_ozy_data('_page_custom_page_sub_title')) .'</h4>'; } ?>
			</div>
		</div>

        <div id="page-bread-crumbs-share-bar">
        	<?php logipro_ozy_the_breadcrumb(); ?>
            <span class="content-font"><?php esc_attr_e('Share', 'logipro') ?></span>
            <ul class="page-share-buttons">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" target="_blank" title="Facebook" class="symbol-facebook"><span class="symbol">&#xe027;</span></a></li>
                <li><a href="https://twitter.com/intent/tweet?text=<?php echo get_permalink() ?>" target="_blank" title="Twitter" class="symbol-twitter"><span class="symbol">&#xe086;</span></a></li>
                <li><a href="https://plus.google.com/share?url=<?php echo get_permalink() ?>" target="_blank" title="Google+" class="symbol-googleplus"><span class="symbol">&#xe039;</span></a></li>
                <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo get_permalink() ?>" target="_blank" title="Pinterest" class="symbol-pinterest"><span class="symbol">&#xe064;</span></a></li>
				<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>" target="_blank" title="LinkedIn" class="symbol-linkedin"><span class="symbol">&#xe052;</span></a></li>
                <li><a href="#" class="page-social-share"><span class="oic-share-outline"></span></a></li>
            </ul>
        </div>
	<?php
		}
	}
}

/**
* ozy_the_breadcrumb prints breadcrumb menu wherever called
*/
function logipro_ozy_the_breadcrumb() {
    global $post;
    echo '<ul id="page-breadcrumbs" class="content-font">';
    if (!is_home()) {
        echo '<li><a href="';
		echo get_home_url();
        echo '">';
		echo '<i class="oic-home-2"></i>'; //esc_attr_e('Home', 'logipro');
        echo '</a></li>';

        if (is_category() || is_single()) {
            echo '<li>';
            the_category('</li><li>');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
		} elseif (is_page()) {
			if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
			if(is_array($anc)){$anc = array_reverse($anc);}
                $title = get_the_title(); $output = '';
                foreach ( $anc as $ancestor ) {
                    $output .= '<li><a href="'. esc_url(get_permalink($ancestor)).'" title="'. esc_attr(get_the_title($ancestor)) .'">'.get_the_title($ancestor).'</a></li>';
                }
                logipro_e_html($output);
                echo '<li>'. $title .'</li>';
            } else {
                echo '<li>'. esc_attr(get_the_title()) .'</li>';
            }
        }
		elseif (is_tag()) {echo"<li>".esc_attr__("Tag for ", "logipro"); single_tag_title(); echo "</li>";}
		elseif (is_day()) {echo"<li>".esc_attr__("Archive for ", "logipro"); the_time('F jS, Y'); echo'</li>';}
		elseif (is_month()) {echo"<li>".esc_attr__("Archive for ", "logipro"); the_time('F, Y'); echo'</li>';}
		elseif (is_year()) {echo"<li>".esc_attr__("Archive for ", "logipro"); the_time('Y'); echo'</li>';}
		elseif (is_author()) {echo"<li>".esc_attr__("Author Archive", "logipro"); echo'</li>';}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>".esc_attr__("Blog Archives", "logipro"); echo'</li>';}
		elseif (is_search()) {echo"<li>" . esc_attr__("Search Results", "logipro"); echo'</li>';}
    }
    echo '</ul>';
}

/*
* Generates selected social icons from theme options panel
*/
function logipro_header_social_icons() {
	global $ozyLogiProHelper;
	$ozyLogiProHelper->social_icons();
}

/**
* Custom typography css output for VC column shortcode
*/
function logipro_ozy_custom_column_typography($column_use_custom_typography,
	$column_use_custom_typography_color,
	$column_use_custom_typography_size,
	$column_use_custom_typography_line_height,
	$column_use_custom_typography_align,
	$column_use_custom_typography_ovverride_headings = 0, &$css_classes) {

	if($column_use_custom_typography == '1') {
		$rand_class_name = 'occ-' . rand(0, 1000000);
		array_push($css_classes, $rand_class_name);
		if(is_numeric($column_use_custom_typography_size)) $column_use_custom_typography_size = $column_use_custom_typography_size . 'px';
		$css_output = '';
		if($column_use_custom_typography_color) { $css_output .= 'color:'. esc_attr($column_use_custom_typography_color) .';'; }
		if($column_use_custom_typography_size) { $css_output .= 'font-size:'. esc_attr($column_use_custom_typography_size) .';'; }
		if($column_use_custom_typography_line_height) { $css_output .= 'line-height:'. esc_attr($column_use_custom_typography_line_height) .';'; }
		if($column_use_custom_typography_align) { $css_output .= 'text-align:'. esc_attr($column_use_custom_typography_align) .';'; }

		global $ozyLogiProHelper;
		$ozyLogiProHelper->set_footer_style('.'. $rand_class_name .'{'. $css_output .'}');
		if($column_use_custom_typography_color && $column_use_custom_typography_ovverride_headings == '1') {
			$ozyLogiProHelper->set_footer_style('.'. $rand_class_name .' h1,.'. $rand_class_name .' h2,.'. $rand_class_name .' h3,.'. $rand_class_name .' h4,.'. $rand_class_name .' h5,.'. $rand_class_name .' h6{color:'. esc_attr($column_use_custom_typography_color) .'!important;}');
		}
	}
}

/**
* Row kenburns slider
*/
function logipro_ozy_row_kenburns_slideshow($bg_slider, $bg_slider_images, $bg_slider_fallback_image) {

	if($bg_slider === 'on') {
		$rand_elm_id = 'orkbrns-' . rand(0, 1000000);
		$bg_slider_images = explode(',', $bg_slider_images);
		$output = '<div class="smoothslides" id="'. $rand_elm_id .'">';
		foreach($bg_slider_images as $bg_slider_image) {
			$current_image = wp_get_attachment_image_src($bg_slider_image, 'full');
			if(isset($current_image[0])) {
				$output .= '<img src="'. esc_attr($current_image[0]) .'" />';
			}
		}
		$output .= '</div>';

		if($bg_slider_fallback_image) {
			$fallback_image = wp_get_attachment_image_src($bg_slider_fallback_image, 'full');
			if(isset($fallback_image[0])) {
				$output .= '<div class="smoothslides-fallback" style="background-image:url('. esc_attr($fallback_image[0]) .')"></div>';
			}
		}

		return $output;
	}
	return '';
}

/**
* Row self hosted video
*/
function logipro_ozy_row_bg_video($bg_video, $bg_video_path, $bg_video_fallback_image) {
	if($bg_video === 'on') {
		$bg_video_fallback_img_attr = '';
		if($bg_video_fallback_image) {
			$bg_video_fallback_image = wp_get_attachment_image_src($bg_video_fallback_image, 'full');
			if(isset($bg_video_fallback_image[0])) {
				$bg_video_fallback_img_attr = ' poster="'. esc_url($bg_video_fallback_image[0]) .'" ';
			}
		}
		return '<video width="100%" height="100%" autoplay muted loop '. $bg_video_fallback_img_attr .'><source src="'. esc_url($bg_video_path) .'" type="video/mp4"></video>';
	}
}

/**
* Row bottom arrow
*/
function logipro_ozy_row_bottom_arrow($bottom_arrow, $bottom_arrow_caption) {
	if($bottom_arrow == 'on') {
		wp_enqueue_style('logipro-row-bottom-arrow');
		return '<div id="row-bottom-arrow-wrapper"><div id="row-bottom-arrow-wrapper-inner"><div id="row-bottom-arrow-scroll-down"><span class="row-bottom-arrow-arrow-down"></span><span id="row-bottom-arrow-scroll-title">'. esc_html($bottom_arrow_caption) .'</span></div></div></div>';
	}
	return '';
}


/**
* Adds more Google Fonts option to VC
*/
function logipro_ozy_add_more_google_font_to_vc($fonts_list){
    $librefrk->font_family = 'Libre Franklin';
    $librefrk->font_types = "100 italic:100:italic, 100 regular:100:normal, 200 italic:200:italic, 200 regular:200:normal, 300 italic:300:italic, 300 regular:300:normal, 400 italic:400:italic, 400 regular:400:normal,500 italic:500:italic, 500 regular:500:normal, 600 italic:600:italic, 600 regular:600:normal, 700 italic:700:italic, 700 regular:700:normal, 800 italic:800:italic, 800 regular:800:normal, 900 italic:900:italic, 900 regular:900:normal";
    $librefrk->font_styles = 'normal';
    $librefrk->font_family_description = 'Libre Franklin is an interpretation and expansion of the 1912 Morris Fuller Benton classic.';
    $librefrk->font_style_description = 'Choose the styles you want';
    $fonts_list[] = $librefrk;

    return $fonts_list;
}
add_filter('vc_google_fonts_get_fonts_filter', 'logipro_ozy_add_more_google_font_to_vc');

/**
* logipro_ozy_is_listing_page
*
* Used to check to hide floating cart menu on some specific page templates and on blog posts
*/
function logipro_ozy_is_listing_page() {
	if(is_page_template('page-regular-blog.php') || is_home() || is_archive() || is_tag() || is_category() || (is_single() && get_post_type() == 'post')) {
		return true;
	}
	return false;
}

/**
* logipro_ozy_blog_pagination
*
* Used to display pagination on specific page templates
*/
function logipro_ozy_blog_pagination() {
	/*if(is_page_template('page-regular-blog.php') || is_home() || is_archive() || is_tag() || is_category()) {
		echo logipro_ozy_get_pagination('<div class="page-pagination content-font-family">', '</div></div>');
	}else if(is_search()) {
		echo logipro_ozy_get_pagination('<div class="page-pagination content-font-family">', '</div></div>');
	}*/
	echo logipro_ozy_get_pagination('<div class="page-pagination content-font-family">', '</div></div>');
}

/**
* This function returns true if WPML plugin installed and activated
*/
function logipro_ozy_is_wpml_active() {
	if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")) {
		return true;
	}
	return false;
}

/**
* This function global "more" as given parameter value.
*/
function logipro_ozy_blog_more($v = 0) {
	global $more; $more = $v;
}

/**
* To check header & footer slider if available
*/
function logipro_ozy_header_footer_slider_class(&$header_slider_class, &$footer_slider_class) {
	logipro_set_ozy_data('header_slider', logipro_ozy_check_header_slider());
	logipro_set_ozy_data('footer_slider', logipro_ozy_check_footer_slider());

	$temp_header_slider = logipro_get_ozy_data('header_slider');
	$temp_footer_slider = logipro_get_ozy_data('footer_slider');

	if(is_array($temp_header_slider) && $temp_header_slider[0] != '') { $header_slider_class = 'header-slider-active'; }
	if(is_array($temp_footer_slider) && $temp_footer_slider[0] != '') { $footer_slider_class = 'footer-slider-active'; }
}

/**
* To include primary menu and google maps background
*/
function logipro_ozy_include_primary_menu() {
	if(logipro_get_ozy_data('hide_everything_but_content') != 999) {
		if(logipro_ozy_get_theme_mod('primary_menu_type') == 'dropdown') {
			include_once(LOGIPRO_OZY_BASE_DIR . 'include/primary-menu.php');
		}else{
			include_once(LOGIPRO_OZY_BASE_DIR . 'include/primary-menu-classic.php');
		}
	    include_once(LOGIPRO_OZY_BASE_DIR . 'include/google-maps_bg.php'); /* google maps background */
	}
}

/**
* logipro_wpml_language_switcher
*
* Check form WPML plugin and build language links if available
*/
function logipro_wpml_language_switcher($use_static = false, $echo = true) {
	$output = '';
	if(!$use_static) {
		//if(function_exists("icl_get_languages") && function_exists("icl_disp_language") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")){
		if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")){
			$languages = icl_get_languages('skip_missing=0&orderby=code');
			$output.= '<span class="lang-switcher" title="'. esc_attr(ICL_LANGUAGE_NAME) .'">'. esc_attr(ICL_LANGUAGE_CODE) .'<i class="oic-down-open-mini"></i>';
			$output.= '<span class="lang-switcher-dropdown content-font">';
			if(!empty($languages)){
				foreach($languages as $l){
					if(ICL_LANGUAGE_CODE != $l['language_code']) {
						$output.= '<a href="' . $l['url'] . '" title="' . $l['native_name'] . '">' . $l['language_code'] . '</a>';
					}
				}
			}
			$output.= '</span></span>';
		}
	}else{
		//if you don't want to use or don't have WPML plugin you can pass true to use_static parameter to build your own switcher
		$output.= '<span class="lang-switcher" title="English">EN<i class="oic-down-open-mini"></i><span class="lang-switcher-dropdown content-font">
				<a href="#" title="FR">FR</a>
				<a href="#" title="IT">IT</a>
				<a href="#" title="DE">DE</a>
				<a href="#" title="ES">ES</a>
			</span></span>';
	}
	if($echo) {
		logipro_e_html($output);
	}else{
		return $output;
	}
}

/**
* logipro_wpml_language_switcher_classic
*
* Check form WPML plugin and build language links if available for classic menu
*/
function logipro_wpml_language_switcher_classic($use_static = false, $echo = true) {
	$output = '';
	if(!$use_static) {
		//if(function_exists("icl_get_languages") && function_exists("icl_disp_language") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")){
		if(function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE") && defined("ICL_LANGUAGE_NAME")){
			$languages = icl_get_languages('skip_missing=0&orderby=code');
			$output.= '<li class="menu-item menu-item-wpml dropdown has-sub"><a href="#lang-switcher" title="'. esc_attr(ICL_LANGUAGE_NAME) .'">'. esc_attr(ICL_LANGUAGE_CODE) .'</a>';
			$output.= '<ul class="dropdown-menu lang-switcher-dropdown-classic depth_0">';
			if(!empty($languages)){
				foreach($languages as $l){
					if(ICL_LANGUAGE_CODE != $l['language_code']) {
						$output.= '<li id="menu-item-'. esc_attr($l['language_code']) .'" class="menu-item"><a href="' . $l['url'] . '" title="' . $l['native_name'] . '">' . $l['native_name'] . '</a></li>';
					}
				}
			}
			$output.= '</ul>';
			$output.= '</li>';
		}
	}else{
		//if you don't want to use or don't have WPML plugin you can pass true to use_static parameter to build your own switcher
		$output.=
		'<li class="menu-item menu-item-wpml dropdown has-sub">
			<a href="#lang-switcher" title="English">EN</a>
			<ul class="dropdown-menu lang-switcher-dropdown-classic depth_0">
				<li id="menu-item-FR" class="menu-item"><a href="#" title="Français">Français</a></li>
				<li id="menu-item-IT" class="menu-item"><a href="#" title="Italiano">Italiano</a></li>
				<li id="menu-item-DE" class="menu-item"><a href="#" title="Deutsch">Deutsch</a></li>
				<li id="menu-item-ES" class="menu-item"><a href="#" title="Español">Español</a></li>
			</ul>
		</li>';
	}
	if($echo) {
		logipro_e_html($output);
	}else{
		return $output;
	}
}

/**
* logipro_menu_bar_contact_info
*/
function logipro_menu_bar_contact_info() {
	if(logipro_ozy_get_theme_mod('primary_menu_contact_info') == '1') {
		echo
		'<div class="header-contact-info">
			<i><img src="'. LOGIPRO_OZY_BASE_URL .'/images/telephone.svg" class="svg" /></i>
			<div>
				<span class="heading-font-family">'. logipro_ozy_get_theme_mod('primary_menu_contact_info_title') .'</span>
				<span class="content-font-family">'. logipro_ozy_get_theme_mod('primary_menu_contact_info_sub_title') .'</span>
			</div>
		</div>';
	}
}

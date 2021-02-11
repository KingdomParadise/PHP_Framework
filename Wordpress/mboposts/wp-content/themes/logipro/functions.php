<?php
/**
* Constants
*/
define( 'LOGIPRO_OZY_BASE_DIR', get_template_directory() . '/' );
define( 'LOGIPRO_OZY_BASE_URL', get_template_directory_uri() . '/' );
define( 'LOGIPRO_OZY_CSS_DIRECTORY_URL', get_stylesheet_directory_uri() . '/');
define( 'LOGIPRO_OZY_THEME_VERSION', '2.9' );
define( 'LOGIPRO_OZY_THEMENAME', 'LOGIPRO' ); //used in TGM Plugin Activation
define( 'LOGIPRO_OZY_DATE_FORMAT', get_option('date_format'));

/**
* Globals
*/
include_once(LOGIPRO_OZY_BASE_DIR . 'functions/classes/helper.php');

/**
* WPML Plugin Check
*/
if(class_exists('SitePress') && function_exists("icl_get_languages") && defined("ICL_LANGUAGE_CODE") && defined('ICL_LANGUAGE_NAME') && function_exists('icl_object_id')){
	global $sitepress;
	define( 'OZY_WPLANG', $sitepress->get_default_language());
	define( 'LOGIPRO_OZY_HOME_URL', esc_url(apply_filters( 'wpml_home_url', get_option( 'home' ) ) . '/') );
}else if(function_exists('pll_default_language') && function_exists('pll_home_url')){
	define( 'OZY_WPLANG', pll_default_language());
	define( 'LOGIPRO_OZY_HOME_URL', esc_url( pll_home_url() . '/' ) );
}else{
	define( 'OZY_WPLANG', substr(get_locale(), 0, 2));
	define( 'LOGIPRO_OZY_HOME_URL', esc_url(home_url('/') . '/') );
}


logipro_set_ozy_data('wpml_current_language_', '');

if(defined("ICL_LANGUAGE_CODE") && ICL_LANGUAGE_CODE != OZY_WPLANG) {
	logipro_set_ozy_data('wpml_current_language_', '_' . ICL_LANGUAGE_CODE);
}

/**
* Sets up theme defaults and registers support for various WordPress features.
*/
add_action('after_setup_theme', 'logipro_ozy_theme_setup');
function logipro_ozy_theme_setup() {
	// Load Languages
	load_theme_textdomain('logipro', get_template_directory() . '/lang/');

	// Adds Post Format support
	// learn more: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat' )
	);

	// Declare Automatic Feed Links support
	add_theme_support( 'automatic-feed-links' );

	// Post thumbnail support
	add_theme_support( 'post-thumbnails' );

	// Custom menu support
	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'header-menu' => 'Primary Menu',
			  'logged-in-menu' => 'Logged In Primary Menu'
			)
		);
	}

	// Add custom thumbnail sizes
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'logipro_boxyboxy', 480, 480, true );
		add_image_size( 'logipro_showbiz', 720, 720, true );
		add_image_size( 'logipro_blog', 1144, 9999, false );
	}

	// Removes detailed login error information for security
	add_filter('login_errors', function($a){return null;});

	// WordPress 4.1+ title tag support
	add_theme_support("title-tag");
}

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function logipro_ozy_content_width() {
	$GLOBALS['content_width'] = apply_filters('ozy_content_width', 1140);
}
add_action('after_setup_theme', 'logipro_ozy_content_width', 0);

/**
* TGM & Plugins
*/
require_once LOGIPRO_OZY_BASE_DIR . 'functions/extender.php';

/**
* Include Vafpress Framework
*/
require_once LOGIPRO_OZY_BASE_DIR . 'framework/bootstrap.php';

/**
* Include Custom Data Sources
*/
require_once LOGIPRO_OZY_BASE_DIR . 'admin/data_sources.php';

/**
* Mobile Check Class
*/
require_once LOGIPRO_OZY_BASE_DIR . 'functions/classes/mobile-check.php';

/**
* Theme options initializing here
*/
$ozy_tmpl_opt = LOGIPRO_OZY_BASE_DIR . 'admin/option/option.php';

/*
* Chat Formatter
*/
//if(is_single() || is_page()) {
include_once(LOGIPRO_OZY_BASE_DIR . 'functions/chat.formatter.php');
//}

/**
* Main functions / actions / hooks
*/
include_once(LOGIPRO_OZY_BASE_DIR . 'functions/functions.php');

/**
* Include Dynamic Sidebars
*/
require_once LOGIPRO_OZY_BASE_DIR . 'functions/sidebars.php';

/**
* Include Customizer
*/
require_once LOGIPRO_OZY_BASE_DIR . 'functions/customizer.php';

/**
* Load option based css
*/
include_once(LOGIPRO_OZY_BASE_DIR . 'functions/option-based-css.php');

/**
* Custom Menu Items
*/
if(defined('LOGIPRO_OZY_ESSENTIALS_ACTIVATED')) {
	require_once trailingslashit(get_template_directory()) . 'functions/menu-item-custom-fields/menu-item-custom-fields.php';
	require_once trailingslashit(get_template_directory()) . 'functions/menu-item-custom-fields/menu-item-custom-fields-megamenu.php';
}

/**
* Visual Composer Add-On visual shortcodes
*/
logipro_set_ozy_data('vc_active', false);
function logipro_ozy_init_vc_shortcodes() {
	if(function_exists('vc_map') &&
		function_exists('vc_set_as_theme')) {

		/* Make visual composer part of the theme */
		vc_set_as_theme();

		logipro_set_ozy_data('vc_active', true);

		include_once(LOGIPRO_OZY_BASE_DIR . 'functions/vc_extend.php');

		/* To enable Visual Composer page builder for theme defined post types by default */
		$list = array(
			'page',
			'post'
		);
		vc_set_default_editor_post_types( $list );
	}
}
add_action( 'init', 'logipro_ozy_init_vc_shortcodes', 99 );

/**
* Essentials Grid Init
*/
if(function_exists('set_ess_grid_as_theme')) {
	function logipro_ozy_essential_grid_init() {
		set_ess_grid_as_theme();
	}
	add_action( 'init', 'logipro_ozy_essential_grid_init' );
}

/**
* Remove Revolution Slider and Essentia Grid Metabox
*/
function logipro_ozy_remove_metabox_from_all_post_types() {
    if( is_admin() && current_user_can('manage_options') ) {
    $args = array(
       'public'   => true,
    );
    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'
    $post_types = get_post_types( $args, $output, $operator );
        foreach ( $post_types  as $post_type ) {
            remove_meta_box('eg-meta-box', $post_type, 'normal');
 			remove_meta_box('mymetabox_revslider_0', $post_type, 'normal');
        }
    }
}
add_action('add_meta_boxes', 'logipro_ozy_remove_metabox_from_all_post_types', 999);

/**
* coiffeur_e
*
* @input - String
* @type - String - Default: attr
*
*/
function logipro_e($input, $type = 'attr') {
	switch ($type) {
		case 'attr';
			echo esc_attr($input);
			break;
		case 'url';
			echo esc_url($input);
			break;
		case 'css';
			echo strip_tags($input);
			break;
		case 'post';
			echo logipro_e($input, 'html'); //safe outputs
			break;
		case 'html';
			return $input;
			break;
		default:
			echo esc_attr($input);
			break;
	}
}

function logipro_e_html($input) {
	echo logipro_e($input, 'html');
}
function logipro_e_css($input) {
	logipro_e($input, 'css');
}

/**
* Customize Tag Cloud widget
*/
function logipro_ozy_tag_cloud_fix($tag_string){
   return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
}
add_filter('wp_generate_tag_cloud', 'logipro_ozy_tag_cloud_fix',10,3);
?>

<?php
/**
 * Plugin Name: FreeVision Tracker
 * Plugin URI: http://themeforest.net/user/freevision/portfolio
 * Description: Simple shipment tracking plugin.
 * Version: 1.9
 * Author: freevision
 */

define( 'FREEVISION_TRACKER_ACTIVATED', 1 );
 
/**
 * Custom post types for portfolio and video gallery
 */
function freevision_tracker_plugin_create_post_types() {
	
	load_plugin_textdomain('freevision-tracker', false, basename( dirname( __FILE__ ) ) . '/translate');
	
	$freevision_tracker_options = get_option('freevision_tracker');

	if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['tracking_slug'])) {
		$tracking_slug = $freevision_tracker_options['tracking_slug'];
	} else {
		$tracking_slug = 'tracking';
	}	
	
	if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['google_recaptcha'])) {
		$google_recaptcha = $freevision_tracker_options['google_recaptcha'];
	} else {
		$google_recaptcha = '';
	}
	
	if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['google_recaptcha_secret'])) {
		$google_recaptcha_secret = $freevision_tracker_options['google_recaptcha_secret'];
	} else {
		$google_recaptcha_secret = '';
	}		
		
	//Tracking
	register_post_type( 'ozy_tracking',
		array(
			'labels' => array(
				'name' => esc_attr__( 'Tracking', 'freevision-tracker'),
				'singular_name' => esc_attr__( 'Tracking Entry', 'freevision-tracker'),
				'add_new' => esc_attr__( 'Add Tracking Entry', 'freevision-tracker'),
				'add_new_item' => esc_attr__( 'Add Tracking Entry', 'freevision-tracker'),
				'edit_item' => esc_attr__( 'Edit Tracking Entry', 'freevision-tracker'),
				'new_item' => esc_attr__( 'New Tracking Entry', 'freevision-tracker'),
				'view_item' => esc_attr__( 'View Tracking Entry', 'freevision-tracker'),
				'search_items' => esc_attr__( 'Search Tracking Entry', 'freevision-tracker'),
				'not_found' => esc_attr__( 'No Tracking Entry found', 'freevision-tracker'),
				'not_found_in_trash' => esc_attr__( 'No Tracking Entry found in Trash', 'freevision-tracker')				
			),
			'can_export' => true,
			'public' => true,
			'sort' => true,
			'show_in_nav_menus' => false,
			'show_in_menu' => true,
			'show_in_admin_bar' => false,
			'has_archive' => true,
			'rewrite' => array('slug' => $tracking_slug, 'with_front' => true),
			'supports' => array('title'),//,'excerpt'
			'menu_icon' => 'dashicons-location-alt'
		)
	);

	include('shortcodes/shortcodes.php');
	
	/* Start session */
    if( !session_id() )
        session_start();

	/* Mask & Unmask sensitive data option set */
	$freevision_tracker_options = get_option('freevision_tracker');
	if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['tracking_mask_information'])) {
		define('TRACKING_MASK_INFORMATION', $freevision_tracker_options['tracking_mask_information']);
	}else{
		define('TRACKING_MASK_INFORMATION', 0);
	}
}
add_action( 'init', 'freevision_tracker_plugin_create_post_types' );

function freevision_tracker_plugin_change_title_text( $title ){
     $screen = get_current_screen();
 
     if  ( 'ozy_tracking' == $screen->post_type ) {
          $title = esc_attr('Enter tracking ID here', 'freevision-tracker');
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'freevision_tracker_plugin_change_title_text' );

/**
 * Options panel for this plugin
 */
class FreevisionTrackerOptionsPage_Freevision_Tracker
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be as "Settings"
		add_submenu_page(
			'edit.php?post_type=ozy_tracking',
			'Settings Admin', /*page title*/
			'Settings', /*menu title*/
			'manage_options', /*roles and capabiliyt needed*/
			'freevision-tracker-setting-admin',
			array( $this, 'create_admin_page' )/*replace with your own function*/
		);		
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'freevision_tracker' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2><?php esc_html_e('FreeVision Tracker', 'freevison-tracker') ?></h2>
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'freevision_tracker_option_group' );
                do_settings_sections( 'freevision-tracker-setting-admin' );

                submit_button(); 
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'freevision_tracker_option_group', // Option group
            'freevision_tracker', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'freevision-tracker-setting-admin', // ID
            'Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'freevision-tracker-setting-admin' // Page
        );
		
        add_settings_field(
            'tracking_mask_information', 
            'Mask Information?', 
            array( $this, 'field_callback_mask_information' ), 
            'freevision-tracker-setting-admin', 
            'freevision-tracker-setting-admin'
        );		
		
        add_settings_field(
            'tracking_slug', 
            'Tracking Slug Name', 
            array( $this, 'field_callback' ), 
            'freevision-tracker-setting-admin', 
            'freevision-tracker-setting-admin'
        );
		
        add_settings_field(
            'google_recaptcha', 
            'Google ReCaptcha Site Key', 
            array( $this, 'field_callback_google_recaptcha' ), 
            'freevision-tracker-setting-admin', 
            'freevision-tracker-setting-admin'
        );

        add_settings_field(
            'google_recaptcha_secret', 
            'Google ReCaptcha Secret Key', 
            array( $this, 'field_callback_google_recaptcha_secret' ), 
            'freevision-tracker-setting-admin', 
            'freevision-tracker-setting-admin'
        );						
    }

    public function sanitize( $input )
    {
        if( !empty( $input['tracking_mask_information'] ) )
            $input['tracking_mask_information'] = sanitize_text_field( $input['tracking_mask_information'] );		
		
        if( !empty( $input['tracking_slug'] ) )
            $input['tracking_slug'] = sanitize_text_field( $input['tracking_slug'] );

        if( !empty( $input['google_recaptcha'] ) )
            $input['google_recaptcha'] = sanitize_text_field( $input['google_recaptcha'] );

        if( !empty( $input['google_recaptcha_secret'] ) )
            $input['google_recaptcha_secret'] = sanitize_text_field( $input['google_recaptcha_secret'] );

        return $input;
    }

    public function print_section_info()
    {
        print 'Set custom slug for Tracking post types and enter <a href="https://developers.google.com/recaptcha/docs/start" target="_blank">Google ReCaptcha Site &amp; Secret Key</a>.
		<p><strong>You may have to refresh your permalinks after saving this!</strong></p>';
    }
	
    public function field_callback_mask_information()
    {
        printf(
            '<input type="checkbox" id="tracking_mask_information" name="freevision_tracker[tracking_mask_information]" value="1" %s /><small><br>'. esc_attr__('When checked sentive information on quey page will be masked.', 'freevision-tracker') .'</small>',
			(isset($this->options['tracking_mask_information']) && $this->options['tracking_mask_information'] == '1' ? 'checked' : '')
        );
    }	

    public function field_callback()
    {
        printf(
            '<input type="text" id="tracking_slug" name="freevision_tracker[tracking_slug]" value="%s" />',
            (!isset($this->options['tracking_slug']) ? 'tracking' : esc_attr( $this->options['tracking_slug']))
        );
    }

    public function field_callback_google_recaptcha()
    {
        printf(
            '<input type="text" id="google_recaptcha" name="freevision_tracker[google_recaptcha]" value="%s" /> Get <a href="https://developers.google.com/recaptcha/docs/start" target="_blank">Google ReCaptcha Site Key</a>',
            (!isset($this->options['google_recaptcha']) ? '' : esc_attr( $this->options['google_recaptcha']))
        );
    }
	
    public function field_callback_google_recaptcha_secret()
    {
        printf(
            '<input type="text" id="google_recaptcha_secret" name="freevision_tracker[google_recaptcha_secret]" value="%s" /> Get <a href="https://developers.google.com/recaptcha/docs/start" target="_blank">Google ReCaptcha Secret Key</a>',
            (!isset($this->options['google_recaptcha_secret']) ? '' : esc_attr( $this->options['google_recaptcha_secret']))
        );
    }		
}

/** 
 * Register activation redirection
 */
register_activation_hook(__FILE__, 'freevision_tracker_plugin_activate');
add_action('admin_init', 'freevision_tracker_plugin_activate_redirect');

function freevision_tracker_plugin_activate() {
    add_option('freevision_tracker_plugin_activate_redirect', true);
}

function freevision_tracker_plugin_activate_redirect() {
    if (get_option('freevision_tracker_plugin_activate_redirect', false)) {
        delete_option('freevision_tracker_plugin_activate_redirect');
        wp_redirect('edit.php?post_type=ozy_tracking&page=freevision-tracker-setting-admin');
    }
}

/**
 * We need this plugin to work only on admin side
 */

if( is_admin() ) {
    $freevision_tracker_options_page = new FreevisionTrackerOptionsPage_Freevision_Tracker();
}

/**
* ozy_init_metaboxes
*
* Initialize defined meta boxes for desired post types.
*/
function ozy_init_metaboxes() {
	// Built path to metabox template array file
	$tracking_metabox = plugin_dir_path( __FILE__ ) . 'metabox/ozy_tracking.php';
	
	// Initialize the Metabox's object
	$tracking_metabox = new VP_Metabox($tracking_metabox);
}
add_action( 'after_setup_theme', 'ozy_init_metaboxes', 1 );

/**
* Load necessary style and script files
*/
function freevision_tracking_admin_styles() {
	wp_enqueue_style('freevision-tracker-admin-style', plugin_dir_url( __FILE__ ) . 'css/admin.css');
	wp_enqueue_script('freevision-tracker-admin-script', plugin_dir_url( __FILE__ ) . 'script/admin.js', array('jquery'));
}
add_action( 'admin_enqueue_scripts', 'freevision_tracking_admin_styles' );

function freevision_tracking_styles() {
	wp_enqueue_style('freevision-tracker-style', plugin_dir_url( __FILE__ ) . 'css/frontend.css');
	wp_enqueue_script('freevision-tracker-frontend-script', plugin_dir_url( __FILE__ ) . 'script/frontend.js', array('jquery'));
	wp_register_script('freevision-tracker-recaptcha', '//www.google.com/recaptcha/api.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'freevision_tracking_styles' );

/**
* Add metabox instead of publish box
*/

function freevision_tracking_change_publish_btn_txt() {
    echo "<script type='text/javascript'>jQuery(document).ready(function(){
        jQuery('body.post-type-ozy_tracking #publish').attr('value', '". esc_attr('Save', 'frv-logistics-essentials') ."');
		jQuery('body.post-type-ozy_tracking h2.hndle.ui-sortable-handle>span').html('". esc_attr('Add / Edit tracking', 'frv-logistics-essentials') ."');		
    });</script>";
}
add_action('admin_footer-post.php', 'freevision_tracking_change_publish_btn_txt', 99);
add_action('admin_footer-post-new.php', 'freevision_tracking_change_publish_btn_txt', 99);

/**
* ozy_tracking_run_on_template_include
*
* We are using dynamic slug for portfolio, so handle it.
*
* @template (string) early defined by WordPress
*/
function ozy_tracking_run_on_template_include($template){
    global $wp_query;
	if(isset($wp_query->query['post_type']) && $wp_query->query['post_type'] === 'ozy_tracking') {
		$template = plugin_dir_path( __FILE__ ) . 'templates/tracking-details.php';
	}
    return $template;
}
add_filter('template_include', 'ozy_tracking_run_on_template_include', 1, 1);

function ozy_tracking_word_mask($str) {
	if(TRACKING_MASK_INFORMATION != 1) {
		return $str;
	}	
	$str = explode(' ', $str); $out = '';
	foreach($str as $in) {
		if(trim($in)) {
			//$in = iconv('UTF-8', 'ASCII//TRANSLIT', $in);
			$length = strlen($in); 
			//$out .= $in[0]. $in[1] . str_repeat('*', $length - 2) . $in[$length] . ' ';
			if($length>2) {
				$out .= $in[0]. $in[1] . str_repeat('*', $length - 2) . ' ';
			}else if(isset($in[1])) {
				$out .= $in[0]. $in[1] . ' ';
			}else{
				$out .= $in[0]. ' ';
			}
		}
	}
	return $out;
}

function get_meta_field($group = 'sender', $key, $id) {
	return ozy_tracking_word_mask(vp_metabox('ozy_tracking_meta.'. $group .'_group.0.tracking_'. $group .'_' . $key, $id));
}

function get_meta_field_c($group = 'sender', $key, $id) {
	//return iconv('UTF-8', 'ASCII//TRANSLIT', vp_metabox('ozy_tracking_meta.'. $group .'_group.0.tracking_'. $group .'_' . $key, $id));
	return vp_metabox('ozy_tracking_meta.'. $group .'_group.0.tracking_'. $group .'_' . $key, $id);
}

function current_location() {
    if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
	$r = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return substr($r, 0, strlen($r)-1);
}

function ozy_tracking_content_filter($content) {
	if ( is_singular('ozy_tracking') ):
		global $post;
	    if( !session_id())
    	    session_start();

	    if(!isset($_SESSION['freevision_tracker_user_can_view_details']) || (isset($_SESSION['freevision_tracker_user_can_view_details']) && $_SESSION['freevision_tracker_user_can_view_details'] != $post->ID)) {
			$content.= '<h4>' . esc_html('Sorry, but your session timed out. Please return to front page or use TRACKING link above then query again.', 'freevision-tracker') . '</h4>';
			return $content;
		}
		if(isset($post->ID)) {
			$original_post = $post; //save original post for rest of the page
			$content .= '<div class="freevision-tracker-query-table-header shared-border-color"><div>';
			$content .= '<img src="' . plugins_url( 'freevision-tracker/images/parcel.svg', dirname(__FILE__) ) . '" class="svg content-color-svg"/>
			<h2>Shipment ID : <strong>'. esc_html(get_the_title()) .'</strong></h2>
			';
			$content .= '</div><div>';
			$content .= '<img src="' . plugins_url( 'freevision-tracker/images/pdf.svg', dirname(__FILE__) ) . '" class="svg content-color-svg"/><a href="'. current_location() .'#download-pdf" class="content-color" id="freevision_tracker_pdf_download" data-trackingid="'. esc_attr($post->ID) .'">'. esc_html('Download As PDF', 'freevision-tracker') .'</a>';			
			$content .= '<img src="' . plugins_url( 'freevision-tracker/images/email.svg', dirname(__FILE__) ) . '" class="svg content-color-svg"/><a href="'. current_location() .'#email-pdf" class="content-color" id="freevision_tracker_pdf_email" data-trackingid="'. esc_attr($post->ID) .'">'. esc_html('E-mail', 'freevision-tracker') .'</a>';
			
			$content .= '</div></div>';			
			/*sender group*/
			$content .= '<table class="freevision-tracker-query-table">';
			$content .= '<tr><td colspan="2">';
			$content .= '<h3>' . esc_html('Sender Information', 'freevision-tracker') .'</h3>';
			$content .= '</td></tr>';
			$content .= '<tr><th>'. esc_attr('Name', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'name', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'company', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'address', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sender', 'country', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sender', 'city', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sender', 'state', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sender', 'postal_code', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'telephone', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'email', $post->ID) .'</td></tr>';
			$content .= '</table>';
			/*receiver group*/
			$content .= '<table class="freevision-tracker-query-table">';
			$content .= '<tr><td colspan="2">';
			$content .= '<h3>' . esc_html('Receiver Information', 'freevision-tracker') .'</h3>';
			$content .= '</td></tr>';
			$content .= '<tr><th>'. esc_attr('Receiver\'s Name', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'name', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'company', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'address', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'country', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'city', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'state', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'postal_code', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'telephone', $post->ID) .'</td></tr>';
			$content .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'email', $post->ID) .'</td></tr>';
			$content .= '</table>';	
			
			/*Shipment Facts*/
			if(get_meta_field_c('sf', 'show', $post->ID) == 1) {
				$content .= '<table class="freevision-tracker-query-table">';
				$content .= '<tr><td colspan="2">';
				$content .= '<h3>' . esc_html('Shipment Facts', 'freevision-tracker') .'</h3>';
				$content .= '</td></tr>';
				$content .= '<tr><th>'. esc_attr('Ship Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'ship_date', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Estimated Delivery Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'estimated_delivery_date', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Shipping Status', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'shipping_status', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Couirier', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'courier', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Patment Method', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'payment_method', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Special Handling Section', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'special_handling_section', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Description', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'description', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Quantity', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'quantity', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Size', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'size', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Weight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'weight', $post->ID) .'</td></tr>';
				$content .= '<tr><th>'. esc_attr('Total Freight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'total_freight', $post->ID) .'</td></tr>';
				$content .= '</table>';
			}			
			
			/*meta boxes*/
			$meta_boxes = vp_metabox('ozy_tracking_meta.movement_group', $post->ID); $meta_boxes = array_reverse($meta_boxes);
			if(is_array($meta_boxes) && count($meta_boxes) >= 1) {
				$content .= '<table class="freevision-tracker-query-table title-table"><tr><td>';
				$content .= '<h3>' . esc_html('Status Updates', 'freevision-tracker') .'</h3>';
				$content .= '</td></tr></table>';
				$content .= '<div class="freevision-tracker-tableWrapper"><table class="freevision-tracker-query-table dont-touch-the-border">';
				$content .= '<thead><tr><th>'. esc_attr('Status', 'freevision-tracker') .'</th><th>'. esc_attr('Location', 'freevision-tracker') .'</th><th>'. esc_attr('Message', 'freevision-tracker') .'</th><th>'. esc_attr('Date &amp; Time', 'freevision-tracker') .'</th></tr></thead>';
				$content .= '<tbody>';
				foreach($meta_boxes as $meta) {
					$content .= '<tr><td>' . $meta['movement_status'] . '</td><td>' . $meta['movement_location'] . '</td><td>' . $meta['movement_message'] . '</td><td>' . $meta['movement_date'] . ' ' . $meta['movement_time'] . '</td></tr>';
				}
				$content .= '</tbody>';
				$content .= '</table></div>';
			}
			$post = $original_post;
			wp_reset_postdata();
		}
	endif;

	return $content;
}
add_filter( 'the_content', 'ozy_tracking_content_filter' );

/**
* Ajax search for Tracking ID
*/
function freevision_tracking_ajax_search() {
	
	$tracking_id 		= isset($_GET["tracking_id"]) ? (sanitize_text_field($_GET["tracking_id"])) : '';
	$g_recaptcha_code	= isset($_GET["g_recaptcha_code"]) ? (sanitize_text_field($_GET["g_recaptcha_code"])) : '';

	$freevision_tracker_options = get_option('freevision_tracker'); $google_recaptcha_secret = '';
	if(is_array($freevision_tracker_options) && isset($freevision_tracker_options['google_recaptcha_secret'])) {
		$google_recaptcha_secret = $freevision_tracker_options['google_recaptcha_secret'];
	}
	
	if($tracking_id && $g_recaptcha_code) {
		//$response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret='. esc_attr($google_recaptcha_secret) .'&response='. ($g_recaptcha_code) .'&remoteip=' . esc_url($_SERVER['HTTP_CLIENT_IP']?:($_SERVER['HTTP_X_FORWARDE‌​D_FOR']?:$_SERVER['REMOTE_ADDR'])));
		$response = wp_remote_get(
			'https://www.google.com/recaptcha/api/siteverify?secret='. 
			esc_attr($google_recaptcha_secret) .'&response='. 
			($g_recaptcha_code) .'&remoteip=' . 		
			(esc_url($_SERVER['HTTP_CLIENT_IP']?$_SERVER['HTTP_X_FORWARDE‌​D_FOR']:$_SERVER['REMOTE_ADDR']))		
		);		
		if(is_array($response)) {
			$response = json_decode($response['body']);
			if($response->success == 'true') {
				//$post_id = post_exists($tracking_id);
				$post_id = freevision_tracking_post_exists_by_slug($tracking_id);
				if($post_id > 0) {
					if( !session_id())
						session_start();
					$_SESSION['freevision_tracker_user_can_view_details'] = $post_id; //set session value, so details page could be view by the user.
					echo get_permalink($post_id);
					exit();
				}
				echo '0';
				exit();				
			}else{
				echo '0';
				exit();
			}
		}
	}
	echo '0';
	exit();
}
add_action( 'wp_ajax_nopriv_freevision_tracking_ajax_search', 'freevision_tracking_ajax_search' ); 
add_action( 'wp_ajax_freevision_tracking_ajax_search', 'freevision_tracking_ajax_search' ); 

/**
 * freevision_tracking_post_exists_by_slug.
 *
 * @return mixed boolean false if no post exists; post ID otherwise.
 */
function freevision_tracking_post_exists_by_slug( $post_slug ) {
	$args_posts = array(
        'post_type'      => 'ozy_tracking',
        'post_status'    => 'any',
        'name'           => $post_slug,
        'posts_per_page' => 1,
    );
    $loop_posts = new WP_Query( $args_posts );
    if ( ! $loop_posts->have_posts() ) {
        return false;
    } else {
        $loop_posts->the_post();
        return $loop_posts->post->ID;
    }
}

function freevision_tracking_ajax_pdf_generator() {		
	if( !session_id())
		session_start();
	$post_id = isset($_GET["post_id"]) ? (sanitize_text_field($_GET["post_id"])) : '';
	
	if($post_id && $_SESSION['freevision_tracker_user_can_view_details'] == $post_id) {
		if(get_post_status($post_id)) {

			header("Pragma: public");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment;filename=tempfile.pdf ");
			header("Content-Transfer-Encoding: binary ");
			
			require_once('classes/vendor/tcpdf/tcpdf.php');
			// create new PDF document
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			
			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			
			$pdf->SetAuthor(get_bloginfo('name'));

			global $post;
			$original_post = $post; //save original post for rest of the page
			$post = get_post($post_id);
			$html = "PDF CONTENT";
			if(isset($post->ID)) {
				// set default header data
				$pdf->SetHeaderData(
					'', 
					'', 
					get_bloginfo('name'), 
					'Document Generated at: ' . date(get_option('date_format')) . ' ' . date('H:i:s') . PHP_EOL . esc_html('Tracking Details for ID: ', 'freevision-tracker') . esc_html($post->post_title)
				);

				$pdf->SetTitle(esc_html('Tracking Details for ID: ', 'freevision-tracker') . esc_html($post->post_title));

				$html .= '<h2>ID#: '. esc_html($post->post_title) .'</h2>';
				/*sender group*/
				$html = '<h3>' . esc_html('Sender Information', 'freevision-tracker') .'</h3>';
				$html .= '<table>';
				$html .= '<tr><th>'. esc_attr('Name', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'name', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'company', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'address', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'country', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'city', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'state', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'postal_code', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'telephone', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'email', $post->ID) .'</td></tr>';
				$html .= '</table>';
				/*receiver group*/
				$html .= '<h3>' . esc_html('Receiver Information', 'freevision-tracker') .'</h3>';
				$html .= '<table>';
				$html .= '<tr><th>'. esc_attr('Receiver\'s Name', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'name', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'company', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'address', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'country', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'city', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'state', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'postal_code', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'telephone', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'email', $post->ID) .'</td></tr>';
				$html .= '</table>';
				
				/*Shipment Facts*/
				if(get_meta_field_c('sf', 'show', $post->ID) == 1) {
					$html .= '<h3>' . esc_html('Shipment Facts', 'freevision-tracker') .'</h3>';
					$html .= '<table>';
					$html .= '<tr><th>'. esc_attr('Ship Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'ship_date', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Estimated Delivery Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'estimated_delivery_date', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Shipping Status', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'shipping_status', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Couirier', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'courier', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Patment Method', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'payment_method', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Special Handling Section', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'special_handling_section', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Description', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'description', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Quantity', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'quantity', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Size', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'size', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Weight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'weight', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Total Freight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'total_freight', $post->ID) .'</td></tr>';
					$html .= '</table>';
				}
				
				$html .= '<h3>' . esc_html('Movements', 'freevision-tracker') .'</h3>';
				$meta_boxes = vp_metabox('ozy_tracking_meta.movement_group', $post->ID);
				if(is_array($meta_boxes) && count($meta_boxes) >= 1) {
					$html .= '<table border="1" cellpadding="5">';
					$html .= '<tr><th><strong>'. esc_attr('Status', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Location', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Message', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Date &amp; Time', 'freevision-tracker') .'</strong></th></tr>';
					foreach($meta_boxes as $meta) {
						$html .= '<tr><td>' . $meta['movement_status'] . '</td><td>' . $meta['movement_location'] . '</td><td>' . $meta['movement_message'] . '</td><td>' . $meta['movement_date'] . ' ' . $meta['movement_time'] . '</td></tr>';
					}
					$html .= '</table>';
				}
				$post = $original_post;
				wp_reset_postdata();
			}
						
			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			
			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
			
			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			
			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			
			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
			
			// add a page
			$pdf->AddPage();			 

			$pdf->writeHTML($html, true, false, true, false, '');

			$pdf->Output('tempfile.pdf', 'I');

			exit();
		}
		echo esc_attr('Nothing found or no permission to view this document', 'freevision-tracker');
		exit();				
	}
	echo esc_attr('Nothing found or no permission to view this document', 'freevision-tracker');
	exit();	
}
add_action( 'wp_ajax_nopriv_freevision_tracking_ajax_pdf_generator', 'freevision_tracking_ajax_pdf_generator' ); 
add_action( 'wp_ajax_freevision_tracking_ajax_pdf_generator', 'freevision_tracking_ajax_pdf_generator' ); 


function freevision_tracking_ajax_pdf_email() {		
	if( !session_id())
		session_start();
	$post_id = isset($_GET["post_id"]) ? (sanitize_text_field($_GET["post_id"])) : '';
	
	if($post_id && $_SESSION['freevision_tracker_user_can_view_details'] == $post_id) {
		if(get_post_status($post_id)) {

			require_once('classes/vendor/tcpdf/tcpdf.php');
			// create new PDF document
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			
			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			
			$pdf->SetAuthor(get_bloginfo('name'));

			global $post;
			$receiver_email_address = '';
			//$original_post = $post; //save original post for rest of the page
			$post = get_post($post_id);

			if(isset($post->ID)) {
				// set default header data
				$pdf->SetHeaderData(
					'', 
					'', 
					get_bloginfo('name'), 
					'Document Generated at: ' . date(get_option('date_format')) . ' ' . date('H:i:s') . PHP_EOL . esc_html('Tracking Details for ID: ', 'freevision-tracker') . esc_html($post->post_title)
				);

				$pdf->SetTitle(esc_html('Tracking Details for ID: ', 'freevision-tracker') . esc_html($post->post_title));

				$html = '<h2>ID#: '. esc_html($post->post_title) .'</h2>';
				/*sender group*/
				$html .= '<h3>' . esc_html('Sender Information', 'freevision-tracker') .'</h3>';
				$html .= '<table>';
				$html .= '<tr><th>'. esc_attr('Name', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'name', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'company', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'address', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'country', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'city', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'state', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'postal_code', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'telephone', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('sender', 'email', $post->ID) .'</td></tr>';
				$html .= '</table>';
				/*receiver group*/
				$html .= '<h3>' . esc_html('Receiver Information', 'freevision-tracker') .'</h3>';
				$html .= '<table>';
				$html .= '<tr><th>'. esc_attr('Receiver\'s Name', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'name', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Company', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'company', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Address', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'address', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Country', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'country', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('City', 'freevision-tracker') .'</th><td>'. get_meta_field_c('receiver', 'city', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('State/Province', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'state', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Postal Code', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'postal_code', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('Telephone', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'telephone', $post->ID) .'</td></tr>';
				$html .= '<tr><th>'. esc_attr('E-Mail', 'freevision-tracker') .'</th><td>'. get_meta_field('receiver', 'email', $post->ID) .'</td></tr>';
				$receiver_email_address = get_meta_field_c('receiver', 'email', $post->ID);
				$html .= '</table>';
				/*Shipment Facts*/
				if(get_meta_field_c('sf', 'show', $post->ID) == 1) {
					$html .= '<h3>' . esc_html('Shipment Facts', 'freevision-tracker') .'</h3>';
					$html .= '<table>';
					$html .= '<tr><th>'. esc_attr('Ship Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'ship_date', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Estimated Delivery Date', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'estimated_delivery_date', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Shipping Status', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'shipping_status', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Couirier', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'courier', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Patment Method', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'payment_method', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Special Handling Section', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'special_handling_section', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Description', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'description', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Quantity', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'quantity', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Size', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'size', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Weight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'weight', $post->ID) .'</td></tr>';
					$html .= '<tr><th>'. esc_attr('Total Freight', 'freevision-tracker') .'</th><td>'. get_meta_field_c('sf', 'total_freight', $post->ID) .'</td></tr>';
					$html .= '</table>';
				}
				
				/*meta boxes*/
				$html .= '<h3>' . esc_html('Movements', 'freevision-tracker') .'</h3>';
				$meta_boxes = vp_metabox('ozy_tracking_meta.movement_group', $post->ID);
				if(is_array($meta_boxes) && count($meta_boxes) >= 1) {
					$html .= '<table border="1" cellpadding="5">';
					$html .= '<tr><th><strong>'. esc_attr('Status', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Location', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Message', 'freevision-tracker') .'</strong></th><th><strong>'. esc_attr('Date &amp; Time', 'freevision-tracker') .'</strong></th></tr>';
					foreach($meta_boxes as $meta) {
						$html .= '<tr><td>' . $meta['movement_status'] . '</td><td>' . $meta['movement_location'] . '</td><td>' . $meta['movement_message'] . '</td><td>' . $meta['movement_date'] . ' ' . $meta['movement_time'] . '</td></tr>';
					}
					$html .= '</table>';
				}
				//$post = $original_post;
				wp_reset_postdata();
			}
						
			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			
			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
			
			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			
			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			
			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
			
			// add a page
			$pdf->AddPage();			 

			$pdf->writeHTML($html, true, false, true, false, '');	
						
			include('classes/helper.php');
			
			$mail_title = esc_html('Tracking Details for ID: ', 'freevision-tracker') . esc_html($post->post_title);
			
			$mail_text = esc_html('Your tracking results are attached as PDF file for tracking ID# ', 'freevision-tracker') . esc_html($post->post_title);

			$pdf_file = plugin_dir_path( __FILE__ ) . 'temp_files/tracking-results-for-'. esc_attr($post->post_title) .'.pdf';
			
			$pdf->Output($pdf_file, 'F');
			
			$Freevision_Tracker_myHelper = new Freevision_Tracker_myHelper();
			if($Freevision_Tracker_myHelper->sendMail($receiver_email_address, $mail_text, $mail_title, $pdf_file, $mail_text)) {
				echo esc_attr('We have mailed readable PDF version to: ', 'freevision-tracker') . ozy_tracking_word_mask($receiver_email_address);
				if(file_exists($pdf_file)) {
					unlink($pdf_file);
				}
				exit();
			}else{
				echo esc_attr('We are unable to submit an email to: ', 'freevision-tracker');
				echo ozy_tracking_word_mask($receiver_email_address);
				echo esc_attr(' currently, please try again later.', 'freevision-tracker');
				if(file_exists($pdf_file)) {
					unlink($pdf_file);
				}
				exit();
			}
			exit();
		}
		echo esc_attr('Nothing found or no permission to view this document', 'freevision-tracker');
		exit();
	}
	echo esc_attr('Nothing found or no permission to view this document', 'freevision-tracker');
	exit();	
}
add_action( 'wp_ajax_nopriv_freevision_tracking_ajax_pdf_email', 'freevision_tracking_ajax_pdf_email' ); 
add_action( 'wp_ajax_freevision_tracking_ajax_pdf_email', 'freevision_tracking_ajax_pdf_email' ); 
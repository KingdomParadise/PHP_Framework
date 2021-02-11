<?php
/**
 * Plugin Name: LogiPro Theme Essentials
 * Plugin URI: http://themeforest.net/user/freevision/portfolio
 * Description: This plugin will enable sidebars, custom widgets, demo importer and custom visual shortcodes for your LOGIPRO theme.
 * Version: 1.7
 * Author: freevision
 */
define( 'LOGIPRO_OZY_ESSENTIALS_ACTIVATED', 1 );

/**
 * Custom post types for portfolio and video gallery
 */
function frv_logipro_plugin_create_post_types() {
	
	load_plugin_textdomain('frv-logipro-essentials', false, basename( dirname( __FILE__ ) ) . '/translate');
	
	$essentials_options = get_option('ozy_logipro_essentials');

	if(is_array($essentials_options) && isset($essentials_options['event_slug'])) {
		$event_slug = $essentials_options['event_slug'];
	} else {
		$event_slug = 'event';
	}
	
	if(is_array($essentials_options) && isset($essentials_options['client_slug'])) {
		$client_slug = $essentials_options['client_slug'];
	} else {
		$client_slug = 'client';
	}	
	
	//User managaged sidebars
	register_post_type( 'ozy_sidebars',
		array(
			'labels' => array(
				'name' => esc_attr__( 'Sidebars', 'frv-logipro-essentials'),
				'singular_name' => esc_attr__( 'Sidebars', 'frv-logipro-essentials'),
				'add_new' => 'Add Sidebar',
				'add_new_item' => 'Add Sidebar',
				'edit_item' => 'Edit Sidebar',
				'new_item' => 'New Sidebar',
				'view_item' => 'View Sidebars',
				'search_items' => 'Search Sidebar',
				'not_found' => 'No Sidebar found',
				'not_found_in_trash' => 'No Sidebar found in Trash'				
			),
			'can_export' => true,
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,				
			'has_archive' => false,
			'show_in_nav_menus' => false,
			'show_in_menu' => true,
			'show_in_admin_bar' => false,			
			'rewrite' => false,
			'supports' => array('title'),
			'taxonomies' => array(''),
			'menu_icon' => 'dashicons-align-left'		
		)
	);	

	//User managaged custom fonts
	register_post_type( 'ozy_fonts',
		array(
			'labels' => array(
				'name' => __( 'Custom Fonts', 'frv-logipro-essentials'),
				'singular_name' => __( 'Custom Fonts', 'frv-logipro-essentials'),
				'add_new' => 'Add Font',
				'add_new_item' => 'Add Font',
				'edit_item' => 'Edit Font',
				'new_item' => 'New Font',
				'view_item' => 'View Font',
				'search_items' => 'Search Font',
				'not_found' => 'No Font found',
				'not_found_in_trash' => 'No Font found in Trash'				
			),
			'can_export' => true,
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,				
			'has_archive' => false,
			'rewrite' => false,
			'supports' => array('title'),
			'taxonomies' => array(''),
			'menu_icon' => 'dashicons-editor-textcolor'
		)
	);
	
	//Event Posts
	register_post_type( 'ozy_event',
		array(
			'labels' => array(
				'name' => __( 'Event', 'frv-logipro-essentials'),
				'singular_name' => __( 'Event', 'frv-logipro-essentials'),
				'add_new' => __( 'Add Event', 'frv-logipro-essentials'),
				'edit_item' => __( 'Edit Event', 'frv-logipro-essentials'),
				'new_item' => __( 'New Event', 'frv-logipro-essentials'),
				'view_item' => __( 'View Event', 'frv-logipro-essentials'),
				'search_items' => __( 'Search Event', 'frv-logipro-essentials'),
				'not_found' => __( 'No Event found', 'frv-logipro-essentials'),
				'not_found_in_trash' => __( 'No Event found in Trash', 'frv-logipro-essentials')				
			),
			'can_export' => true,
			'public' => true,
			'sort' => true,
			'exclude_from_search' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => $event_slug, 'with_front' => true),
			'supports' => array('title','editor'),//,'thumbnail','excerpt'),
			'menu_icon' => 'dashicons-calendar'
		)
	);
	
	//Clients Posts
	register_post_type( 'ozy_client',
		array(
			'labels' => array(
				'name' => __( 'Client', 'frv-logipro-essentials'),
				'singular_name' => __( 'Client', 'frv-logipro-essentials'),
				'add_new' => __( 'Add Client', 'frv-logipro-essentials'),
				'edit_item' => __( 'Edit Client', 'frv-logipro-essentials'),
				'new_item' => __( 'New Client', 'frv-logipro-essentials'),
				'view_item' => __( 'View Client', 'frv-logipro-essentials'),
				'search_items' => __( 'Search Client', 'frv-logipro-essentials'),
				'not_found' => __( 'No Client found', 'frv-logipro-essentials'),
				'not_found_in_trash' => __( 'No Client found in Trash', 'frv-logipro-essentials')				
			),
			'can_export' => true,
			'public' => true,
			'sort' => true,
			'exclude_from_search' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => $client_slug, 'with_front' => true),
			'supports' => array('title','thumbnail'),
			'menu_icon' => 'dashicons-businessman'
		)
	);	
}
add_action( 'init', 'frv_logipro_plugin_create_post_types' );

/**
 * Custom taxonomy registration
 */
function frv_logipro_plugin_create_custom_taxonomies() {

	//Event Categories
	$labels = array(
		'name' => esc_attr__( 'Event Categories', 'frv-logipro-essentials' ),
		'singular_name' => esc_attr__( 'Event Category', 'frv-logipro-essentials' ),
		'search_items' =>  esc_attr__( 'Search Event Categories', 'frv-logipro-essentials' ),
		'popular_items' => esc_attr__( 'Popular Event Categories', 'frv-logipro-essentials' ),
		'all_items' => esc_attr__( 'All Event Categories', 'frv-logipro-essentials' ),
		'parent_item' => esc_attr__( 'Parent Event Categories', 'frv-logipro-essentials' ),
		'parent_item_colon' => esc_attr__( 'Parent Event Category:', 'frv-logipro-essentials' ),
		'edit_item' => esc_attr__( 'Edit Event Category', 'frv-logipro-essentials' ),
		'update_item' => esc_attr__( 'Update Event Category', 'frv-logipro-essentials' ),
		'add_new_item' => esc_attr__( 'Add New Event Category', 'frv-logipro-essentials' ),
		'new_item_name' => esc_attr__( 'New Event Category', 'frv-logipro-essentials' ),
	);
	
	register_taxonomy('event_category', array('ozy_event'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'sort' => true,
		'rewrite' => array( 'slug' => 'event_category' ),
	));
	
	//Client Categories
	$labels = array(
		'name' => esc_attr__( 'Client Categories', 'frv-logipro-essentials' ),
		'singular_name' => esc_attr__( 'Client Category', 'frv-logipro-essentials' ),
		'search_items' =>  esc_attr__( 'Search Client Categories', 'frv-logipro-essentials' ),
		'popular_items' => esc_attr__( 'Popular Client Categories', 'frv-logipro-essentials' ),
		'all_items' => esc_attr__( 'All Client Categories', 'frv-logipro-essentials' ),
		'parent_item' => esc_attr__( 'Parent Client Categories', 'frv-logipro-essentials' ),
		'parent_item_colon' => esc_attr__( 'Parent Client Category:', 'frv-logipro-essentials' ),
		'edit_item' => esc_attr__( 'Edit Client Category', 'frv-logipro-essentials' ),
		'update_item' => esc_attr__( 'Update Client Category', 'frv-logipro-essentials' ),
		'add_new_item' => esc_attr__( 'Add New Client Category', 'frv-logipro-essentials' ),
		'new_item_name' => esc_attr__( 'New Client Category', 'frv-logipro-essentials' ),
	);
	
	register_taxonomy('client_category', array('ozy_client'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'sort' => true,
		'rewrite' => array( 'slug' => 'client_category' ),
	));	
}
add_action( 'init', 'frv_logipro_plugin_create_custom_taxonomies', 0 );

/**
* Modify publish box metabox
*/
function frv_logipro_change_publish_btn_txt() {
    echo "<script type='text/javascript'>jQuery(document).ready(function(){
        jQuery('body.post-type-ozy_sidebars #publish').attr('value', '". esc_attr('Save', 'frv-logipro-essentials') ."');
		jQuery('body.post-type-ozy_sidebars h2.hndle.ui-sortable-handle>span').html('". esc_attr('Add / Edit sidebar', 'frv-logipro-essentials') ."');		
    });</script>";
}
add_action('admin_footer-post.php', 'frv_logipro_change_publish_btn_txt', 99);
add_action('admin_footer-post-new.php', 'frv_logipro_change_publish_btn_txt', 99);
/**
 * Options panel for this plugin
 */
class FrvLogiProEssentialsOptionsPage_LogiPro
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
        // This page will be under "Settings"
        add_options_page(
            'Settings Admin', 
            'LogiPro Essentials', 
            'manage_options', 
            'frv-logipro-essentials-setting-admin', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'ozy_logipro_essentials' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2>ozy Essentials Options</h2>           
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'ozy_logipro_essentials_option_group' );
				do_settings_sections( 'frv-logipro-essentials-setting-admin' );
				do_settings_sections( 'frv-logipro-essentials-setting-admin-twitter' );
			
                submit_button(); 
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init() {
        register_setting(
            'ozy_logipro_essentials_option_group', // Option group
            'ozy_logipro_essentials', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

		add_settings_section(
            'frv-logipro-essentials-setting-admin', // ID
            'Options', // Title
            array( $this, 'print_section_info' ), // Callback
            'frv-logipro-essentials-setting-admin' // Page
        );
		
        add_settings_field(
            'event_slug', 
            'Event Slug Name', 
            array( $this, 'field_callback' ), 
            'frv-logipro-essentials-setting-admin', 
            'frv-logipro-essentials-setting-admin'
        );

        add_settings_field(
            'client_slug', 
            'Client Slug Name', 
            array( $this, 'field_client_callback' ), 
            'frv-logipro-essentials-setting-admin', 
            'frv-logipro-essentials-setting-admin'
        );			
		
        add_settings_section(
            'frv-logipro-essentials-setting-admin-twitter', 
            'Twitter Parameters', 
            array( $this, 'print_twitter_section_info' ),
            'frv-logipro-essentials-setting-admin-twitter'
        );		
		
        add_settings_field(
            'twitter_consumer_key', 
            'Consumer Key', 
            array( $this, 'field_callback_twitter_consumer_key' ), 
            'frv-logipro-essentials-setting-admin-twitter', 
            'frv-logipro-essentials-setting-admin-twitter'
        );

		add_settings_field(
            'twitter_secret_key', 
            'Secret Key', 
            array( $this, 'field_callback_twitter_secret_key' ), 
            'frv-logipro-essentials-setting-admin-twitter', 
            'frv-logipro-essentials-setting-admin-twitter'
        );
		
		add_settings_field(
            'twitter_token_key', 
            'Access Token Key', 
            array( $this, 'field_callback_twitter_token_key' ), 
            'frv-logipro-essentials-setting-admin-twitter', 
            'frv-logipro-essentials-setting-admin-twitter'
        );
		
		add_settings_field(
            'twitter_token_secret_key', 
            'Access Token Secret Key', 
            array( $this, 'field_callback_twitter_token_secret_key' ), 
            'frv-logipro-essentials-setting-admin-twitter', 
            'frv-logipro-essentials-setting-admin-twitter'
        );		

    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
		if( !empty( $input['event_slug'] ) )
			$input['event_slug'] = sanitize_text_field( $input['event_slug'] );

		if( !empty( $input['client_slug'] ) )
			$input['client_slug'] = sanitize_text_field( $input['client_slug'] );		

		if( !empty( $input['twitter_consumer_key'] ) )
            $input['twitter_consumer_key'] = sanitize_text_field( $input['twitter_consumer_key'] );

		if( !empty( $input['twitter_secret_key'] ) )
            $input['twitter_secret_key'] = sanitize_text_field( $input['twitter_secret_key'] );

        if( !empty( $input['twitter_token_key'] ) )
            $input['twitter_token_key'] = sanitize_text_field( $input['twitter_token_key'] );

        if( !empty( $input['twitter_token_secret_key'] ) )
            $input['twitter_token_secret_key'] = sanitize_text_field( $input['twitter_token_secret_key'] );
			
        if( !is_numeric( $input['ozy_shortcodes'] ) )
            $input['ozy_shortcodes'] = '1'; 			

        return $input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'If you want your event post types to have a custom slug in the URL, please enter it here.
		<p><strong>You have to refresh your permalinks after saving this!</strong>
		<br>This could be done by going to Settings > Permalinks and clicking save.</p>';
    }	
	
    /** 
     * Print the Section text
     */
	
    public function print_twitter_section_info()
    {
        print 'Enter required parameters of your Twitter Dev. account <a href="https://dev.twitter.com/apps" target="_blank">https://dev.twitter.com/apps</a>';
    }	

    /** 
     * Get the settings option array and print one of its values : Event Slug
     */ 
    public function field_callback()
    {
        printf(
            '<input type="text" id="event_slug" name="ozy_logipro_essentials[event_slug]" value="%s" />',
            (!isset($this->options['event_slug']) ? 'event' : esc_attr( $this->options['event_slug']))
        );
    }
	
    /** 
     * Get the settings option array and print one of its values : Client Slug
     */ 
    public function field_client_callback()
    {
        printf(
            '<input type="text" id="client_slug" name="ozy_logipro_essentials[client_slug]" value="%s" />',
            (!isset($this->options['client_slug']) ? 'client' : esc_attr( $this->options['client_slug']))
        );
    }	
	
    /** 
     * Get the settings option array and print one of its values : Twitter Consumer Key
     */	
    public function field_callback_twitter_consumer_key()
    {
        printf(
            '<input type="text" id="twitter_consumer_key" name="ozy_logipro_essentials[twitter_consumer_key]" value="%s" />',
            (!isset($this->options['twitter_consumer_key']) ? '' : esc_attr( $this->options['twitter_consumer_key']))
        );
    }

    /** 
     * Get the settings option array and print one of its values : Twitter Secret Key
     */	
    public function field_callback_twitter_secret_key()
    {
        printf(
            '<input type="text" id="twitter_secret_key" name="ozy_logipro_essentials[twitter_secret_key]" value="%s" />',
            (!isset($this->options['twitter_secret_key']) ? '' : esc_attr( $this->options['twitter_secret_key']))
        );		
    }

    /** 
     * Get the settings option array and print one of its values : Twitter Token Key
     */	
    public function field_callback_twitter_token_key()
    {
        printf(
            '<input type="text" id="twitter_token_key" name="ozy_logipro_essentials[twitter_token_key]" value="%s" />',
            (!isset($this->options['twitter_token_key']) ? '' : esc_attr( $this->options['twitter_token_key']))
        );		
    }

    /** 
     * Get the settings option array and print one of its values : Twitter Token Secret Key
     */
    public function field_callback_twitter_token_secret_key()
    {
        printf(
            '<input type="text" id="twitter_token_secret_key" name="ozy_logipro_essentials[twitter_token_secret_key]" value="%s" />',
            (!isset($this->options['twitter_token_secret_key']) ? '' : esc_attr( $this->options['twitter_token_secret_key']))
        );		
    }

}

/** 
 * Register activation redirection
 */
register_activation_hook(__FILE__, 'frv_logipro_essentials_plugin_activate');
add_action('admin_init', 'frv_logipro_essentials_plugin_activate_redirect');

function frv_logipro_essentials_plugin_activate() {
    add_option('frv_logipro_essentials_plugin_activate_redirect', true);
}

function frv_logipro_essentials_plugin_activate_redirect() {
    if (get_option('frv_logipro_essentials_plugin_activate_redirect', false)) {
        delete_option('frv_logipro_essentials_plugin_activate_redirect');
        wp_redirect('options-general.php?page=frv-logipro-essentials-setting-admin');
    }
}

/**
 * We need this plugin to work only on admin side
 */

if( is_admin() ) {
    $ozy_essentials_options_page = new FrvLogiProEssentialsOptionsPage_LogiPro();
}

/*
* Widgets
*/
require_once plugin_dir_path( __FILE__ ) . 'frv-logipro-essentials-widgets.php';

/**
 *	Samples Importer
 */
require_once plugin_dir_path( __FILE__ ) .'frv-logipro-essentials-importer-init.php';

/**
* Update Notifier
*/
require(plugin_dir_path( __FILE__ ) . 'updater/update-notifier.php');
define( 'LOGIPRO_OZY_NOTIFIER_THEME_NAME', 'LOGIPRO' );
define( 'LOGIPRO_OZY_NOTIFIER_THEME_FOLDER_NAME', 'logipro' );
define( 'LOGIPRO_OZY_NOTIFIER_XML_FILE', 'http://s3-eu-west-1.amazonaws.com/themeversion/logipro.xml' );
define( 'LOGIPRO_OZY_NOTIFIER_CACHE_INTERVAL', 43200);

/**
* ozy_add_extra_page
*
* We are adding and extra page to include documentation into to the admin.
*/
function frv_logipro_ozy_add_extra_page() {
	add_menu_page(
		esc_attr__('Documentation','frv-logipro-essentials'), 
		esc_attr__('Documentation','frv-logipro-essentials'), 
		'read',
		'frv-logipro-frv-logipro-documentation', 
		'frv_logipro_ozy_logipro_documentation', 
		'dashicons-editor-help' 
	);
}
add_action('admin_menu', 'frv_logipro_ozy_add_extra_page');

function frv_logipro_ozy_logipro_documentation() {
	echo '<iframe src="http://doc.freevision.me/logipro/" id="frv-help-iframe" width="100%" height="800px" frameborder="0"></iframe>';
}

function get_country_list() {
	return array_flip(array (
		'AF|Afghanistan' => 'Afghanistan',
		'AX|Aland Islands' => 'Aland Islands',
		'AL|Albania' => 'Albania',
		'DZ|Algeria' => 'Algeria',
		'AS|American Samoa' => 'American Samoa',
		'AD|Andorra' => 'Andorra',
		'AO|Angola' => 'Angola',
		'AI|Anguilla' => 'Anguilla',
		'AQ|Antarctica' => 'Antarctica',
		'AG|Antigua and Barbuda' => 'Antigua and Barbuda',
		'AR|Argentina' => 'Argentina',
		'AM|Armenia' => 'Armenia',
		'AW|Aruba' => 'Aruba',
		'AU|Australia' => 'Australia',
		'AT|Austria' => 'Austria',
		'AZ|Azerbaijan' => 'Azerbaijan',
		'BS|Bahamas' => 'Bahamas',
		'BH|Bahrain' => 'Bahrain',
		'BD|Bangladesh' => 'Bangladesh',
		'BB|Barbados' => 'Barbados',
		'BY|Belarus' => 'Belarus',
		'BE|Belgium' => 'Belgium',
		'BZ|Belize' => 'Belize',
		'BJ|Benin' => 'Benin',
		'BM|Bermuda' => 'Bermuda',
		'BT|Bhutan' => 'Bhutan',
		'BO|Bolivia' => 'Bolivia',
		'BQ|Bonaire, Saint Eustatius and Saba' => 'Bonaire, Saint Eustatius and Saba',
		'BA|Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
		'BW|Botswana' => 'Botswana',
		'BV|Bouvet Island' => 'Bouvet Island',
		'BR|Brazil' => 'Brazil',
		'IO|British Indian Ocean Territory' => 'British Indian Ocean Territory',
		'VG|British Virgin Islands' => 'British Virgin Islands',
		'BN|Brunei' => 'Brunei',
		'BG|Bulgaria' => 'Bulgaria',
		'BF|Burkina Faso' => 'Burkina Faso',
		'BI|Burundi' => 'Burundi',
		'KH|Cambodia' => 'Cambodia',
		'CM|Cameroon' => 'Cameroon',
		'CA|Canada' => 'Canada',
		'CV|Cape Verde' => 'Cape Verde',
		'KY|Cayman Islands' => 'Cayman Islands',
		'CF|Central African Republic' => 'Central African Republic',
		'TD|Chad' => 'Chad',
		'CL|Chile' => 'Chile',
		'CN|China' => 'China',
		'CX|Christmas Island' => 'Christmas Island',
		'CC|Cocos Islands' => 'Cocos Islands',
		'CO|Colombia' => 'Colombia',
		'KM|Comoros' => 'Comoros',
		'CK|Cook Islands' => 'Cook Islands',
		'CR|Costa Rica' => 'Costa Rica',
		'HR|Croatia' => 'Croatia',
		'CU|Cuba' => 'Cuba',
		'CW|Curacao' => 'Curacao',
		'CY|Cyprus' => 'Cyprus',
		'CZ|Czech Republic' => 'Czech Republic',
		'CD|Democratic Republic of the Congo' => 'Democratic Republic of the Congo',
		'DK|Denmark' => 'Denmark',
		'DJ|Djibouti' => 'Djibouti',
		'DM|Dominica' => 'Dominica',
		'DO|Dominican Republic' => 'Dominican Republic',
		'TL|East Timor' => 'East Timor',
		'EC|Ecuador' => 'Ecuador',
		'EG|Egypt' => 'Egypt',
		'SV|El Salvador' => 'El Salvador',
		'GQ|Equatorial Guinea' => 'Equatorial Guinea',
		'ER|Eritrea' => 'Eritrea',
		'EE|Estonia' => 'Estonia',
		'ET|Ethiopia' => 'Ethiopia',
		'FK|Falkland Islands' => 'Falkland Islands',
		'FO|Faroe Islands' => 'Faroe Islands',
		'FJ|Fiji' => 'Fiji',
		'FI|Finland' => 'Finland',
		'FR|France' => 'France',
		'GF|French Guiana' => 'French Guiana',
		'PF|French Polynesia' => 'French Polynesia',
		'TF|French Southern Territories' => 'French Southern Territories',
		'GA|Gabon' => 'Gabon',
		'GM|Gambia' => 'Gambia',
		'GE|Georgia' => 'Georgia',
		'DE|Germany' => 'Germany',
		'GH|Ghana' => 'Ghana',
		'GI|Gibraltar' => 'Gibraltar',
		'GR|Greece' => 'Greece',
		'GL|Greenland' => 'Greenland',
		'GD|Grenada' => 'Grenada',
		'GP|Guadeloupe' => 'Guadeloupe',
		'GU|Guam' => 'Guam',
		'GT|Guatemala' => 'Guatemala',
		'GG|Guernsey' => 'Guernsey',
		'GN|Guinea' => 'Guinea',
		'GW|Guinea-Bissau' => 'Guinea-Bissau',
		'GY|Guyana' => 'Guyana',
		'HT|Haiti' => 'Haiti',
		'HM|Heard Island and McDonald Islands' => 'Heard Island and McDonald Islands',
		'HN|Honduras' => 'Honduras',
		'HK|Hong Kong' => 'Hong Kong',
		'HU|Hungary' => 'Hungary',
		'IS|Iceland' => 'Iceland',
		'IN|India' => 'India',
		'ID|Indonesia' => 'Indonesia',
		'IR|Iran' => 'Iran',
		'IQ|Iraq' => 'Iraq',
		'IE|Ireland' => 'Ireland',
		'IM|Isle of Man' => 'Isle of Man',
		'IL|Israel' => 'Israel',
		'IT|Italy' => 'Italy',
		'CI|Ivory Coast' => 'Ivory Coast',
		'JM|Jamaica' => 'Jamaica',
		'JP|Japan' => 'Japan',
		'JE|Jersey' => 'Jersey',
		'JO|Jordan' => 'Jordan',
		'KZ|Kazakhstan' => 'Kazakhstan',
		'KE|Kenya' => 'Kenya',
		'KI|Kiribati' => 'Kiribati',
		'XK|Kosovo' => 'Kosovo',
		'KW|Kuwait' => 'Kuwait',
		'KG|Kyrgyzstan' => 'Kyrgyzstan',
		'LA|Laos' => 'Laos',
		'LV|Latvia' => 'Latvia',
		'LB|Lebanon' => 'Lebanon',
		'LS|Lesotho' => 'Lesotho',
		'LR|Liberia' => 'Liberia',
		'LY|Libya' => 'Libya',
		'LI|Liechtenstein' => 'Liechtenstein',
		'LT|Lithuania' => 'Lithuania',
		'LU|Luxembourg' => 'Luxembourg',
		'MO|Macao' => 'Macao',
		'MK|Macedonia' => 'Macedonia',
		'MG|Madagascar' => 'Madagascar',
		'MW|Malawi' => 'Malawi',
		'MY|Malaysia' => 'Malaysia',
		'MV|Maldives' => 'Maldives',
		'ML|Mali' => 'Mali',
		'MT|Malta' => 'Malta',
		'MH|Marshall Islands' => 'Marshall Islands',
		'MQ|Martinique' => 'Martinique',
		'MR|Mauritania' => 'Mauritania',
		'MU|Mauritius' => 'Mauritius',
		'YT|Mayotte' => 'Mayotte',
		'MX|Mexico' => 'Mexico',
		'FM|Micronesia' => 'Micronesia',
		'MD|Moldova' => 'Moldova',
		'MC|Monaco' => 'Monaco',
		'MN|Mongolia' => 'Mongolia',
		'ME|Montenegro' => 'Montenegro',
		'MS|Montserrat' => 'Montserrat',
		'MA|Morocco' => 'Morocco',
		'MZ|Mozambique' => 'Mozambique',
		'MM|Myanmar' => 'Myanmar',
		'NA|Namibia' => 'Namibia',
		'NR|Nauru' => 'Nauru',
		'NP|Nepal' => 'Nepal',
		'NL|Netherlands' => 'Netherlands',
		'NC|New Caledonia' => 'New Caledonia',
		'NZ|New Zealand' => 'New Zealand',
		'NI|Nicaragua' => 'Nicaragua',
		'NE|Niger' => 'Niger',
		'NG|Nigeria' => 'Nigeria',
		'NU|Niue' => 'Niue',
		'NF|Norfolk Island' => 'Norfolk Island',
		'KP|North Korea' => 'North Korea',
		'MP|Northern Mariana Islands' => 'Northern Mariana Islands',
		'NO|Norway' => 'Norway',
		'OM|Oman' => 'Oman',
		'PK|Pakistan' => 'Pakistan',
		'PW|Palau' => 'Palau',
		'PS|Palestinian Territory' => 'Palestinian Territory',
		'PA|Panama' => 'Panama',
		'PG|Papua New Guinea' => 'Papua New Guinea',
		'PY|Paraguay' => 'Paraguay',
		'PE|Peru' => 'Peru',
		'PH|Philippines' => 'Philippines',
		'PN|Pitcairn' => 'Pitcairn',
		'PL|Poland' => 'Poland',
		'PT|Portugal' => 'Portugal',
		'PR|Puerto Rico' => 'Puerto Rico',
		'QA|Qatar' => 'Qatar',
		'CG|Republic of the Congo' => 'Republic of the Congo',
		'RE|Reunion' => 'Reunion',
		'RO|Romania' => 'Romania',
		'RU|Russia' => 'Russia',
		'RW|Rwanda' => 'Rwanda',
		'BL|Saint Barthelemy' => 'Saint Barthelemy',
		'SH|Saint Helena' => 'Saint Helena',
		'KN|Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
		'LC|Saint Lucia' => 'Saint Lucia',
		'MF|Saint Martin' => 'Saint Martin',
		'PM|Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
		'VC|Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
		'WS|Samoa' => 'Samoa',
		'SM|San Marino' => 'San Marino',
		'ST|Sao Tome and Principe' => 'Sao Tome and Principe',
		'SA|Saudi Arabia' => 'Saudi Arabia',
		'SN|Senegal' => 'Senegal',
		'RS|Serbia' => 'Serbia',
		'SC|Seychelles' => 'Seychelles',
		'SL|Sierra Leone' => 'Sierra Leone',
		'SG|Singapore' => 'Singapore',
		'SX|Sint Maarten' => 'Sint Maarten',
		'SK|Slovakia' => 'Slovakia',
		'SI|Slovenia' => 'Slovenia',
		'SB|Solomon Islands' => 'Solomon Islands',
		'SO|Somalia' => 'Somalia',
		'ZA|South Africa' => 'South Africa',
		'GS|South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
		'KR|South Korea' => 'South Korea',
		'SS|South Sudan' => 'South Sudan',
		'ES|Spain' => 'Spain',
		'LK|Sri Lanka' => 'Sri Lanka',
		'SD|Sudan' => 'Sudan',
		'SR|Suriname' => 'Suriname',
		'SJ|Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
		'SZ|Swaziland' => 'Swaziland',
		'SE|Sweden' => 'Sweden',
		'CH|Switzerland' => 'Switzerland',
		'SY|Syria' => 'Syria',
		'TW|Taiwan' => 'Taiwan',
		'TJ|Tajikistan' => 'Tajikistan',
		'TZ|Tanzania' => 'Tanzania',
		'TH|Thailand' => 'Thailand',
		'TG|Togo' => 'Togo',
		'TK|Tokelau' => 'Tokelau',
		'TO|Tonga' => 'Tonga',
		'TT|Trinidad and Tobago' => 'Trinidad and Tobago',
		'TN|Tunisia' => 'Tunisia',
		'TR|Turkey' => 'Turkey',
		'TM|Turkmenistan' => 'Turkmenistan',
		'TC|Turks and Caicos Islands' => 'Turks and Caicos Islands',
		'TV|Tuvalu' => 'Tuvalu',
		'VI|U.S. Virgin Islands' => 'U.S. Virgin Islands',
		'UG|Uganda' => 'Uganda',
		'UA|Ukraine' => 'Ukraine',
		'AE|United Arab Emirates' => 'United Arab Emirates',
		'GB|United Kingdom' => 'United Kingdom',
		'US|United States' => 'United States',
		'UM|United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
		'UY|Uruguay' => 'Uruguay',
		'UZ|Uzbekistan' => 'Uzbekistan',
		'VU|Vanuatu' => 'Vanuatu',
		'VA|Vatican' => 'Vatican',
		'VE|Venezuela' => 'Venezuela',
		'VN|Vietnam' => 'Vietnam',
		'WF|Wallis and Futuna' => 'Wallis and Futuna',
		'EH|Western Sahara' => 'Western Sahara',
		'YE|Yemen' => 'Yemen',
		'ZM|Zambia' => 'Zambia',
		'ZW|Zimbabwe' => 'Zimbabwe',
	));
}

function frv_logipro_include_shortcodes() {	
	include_once(plugin_dir_path( __FILE__ ) . 'frv-logipro-essentials-shortcodes.php');
}
add_action( 'init', 'frv_logipro_include_shortcodes', 99 );

/**
* Sets up theme defaults and registers support for various WordPress features.
*/
function frv_logipro_theme_setup() {
	// Enable shortcodes in the widgets
	add_filter('widget_text', 'shortcode_unautop');
	add_filter('widget_text', 'do_shortcode');	
}
add_action('after_setup_theme', 'frv_logipro_theme_setup');	

?>
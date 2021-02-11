<?php
/**
 * Theme & Plugin Extender
 */
define('FREEVISION_ITEM_ID', '20362738');
define('FREEVISION_ITEM_VERSION', logipro_get_theme_data());

if (is_admin() && isset($_GET['activated']) && 'themes.php' == $GLOBALS['pagenow']) {
	wp_redirect(admin_url('themes.php?page=logipro_activation_options'));
	exit();
}

add_action('admin_menu', 'logipro_activation_options_add_page', 50);

function logipro_activation_options_add_page() {
	if( current_user_can('administrator') ) {
		$logipro_activation_options = get_option( 'logipro_purchase_code' );
		global $wp_rewrite;
		if ( $logipro_activation_options == '' ) {
			$theme_page = add_theme_page(
					esc_html__('Theme Verification', 'logipro'),
					esc_html__('Theme Verification', 'logipro'),
					'edit_theme_options',
					'logipro_activation_options',
					'logipro_activation_options_render_page'
			);
		} else {
			if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'logipro_activation_options' ) {
				$wp_rewrite->flush_rules();
				if( get_option( 'logipro_plugins' ) ){
					wp_redirect( esc_url( admin_url('themes.php?page=tgmpa-install-plugins') ) );
				}else{
					wp_redirect( esc_url( admin_url() ) );
				}
				exit();
			}
		}
		add_action('admin_init', 'logipro_activation_options_init');
	}
}

function logipro_activation_options_init() {
	register_setting( 'section', 'logipro_purchase_code', 'logipro_validate_purchase_code' );
}

function logipro_get_default_activation_options() {
	$default_activation_options = '';

	return apply_filters('logipro_default_activation_options', $default_activation_options);
}

function logipro_activation_options_render_page() {
	?>
	<div class="logipro-activation-form">
		<div class="activation-form-inner">
			<h2>
				<?php printf( esc_html__( '%s Theme Verification', 'logipro' ), wp_get_theme() ); ?>
				<a href="<?php echo esc_url( 'https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-' ); ?>" target="_blank" class="logipro-activation-help" title="<?php echo esc_attr__( 'Need help? Please follow this url', 'logipro' ); ?>"> <?php echo esc_html__( 'Where is my purchase code?', 'logipro' ); ?></a>
			</h2>
			<?php settings_errors(); ?>


			<form method="post" action="options.php">

				<?php
					settings_fields('section');
					do_settings_sections( 'section' );
				?>
				<div class="logipro-activation">
					<ul>
						<li>
							<label for="logipro_purchase_code" class="clearfix">
								<!--<input type="text" id="logipro_purchase_code" placeholder="<?php echo esc_attr__( 'Enter Your Purchase Code', 'logipro' ); ?>" name="logipro_purchase_code" value="<?php echo esc_attr( get_option( 'logipro_purchase_code' ) ); ?>"/>-->
								<input type="text" id="logipro_purchase_code_js" placeholder="<?php echo esc_attr__( 'Enter Your Purchase Code', 'logipro' ); ?>" name="logipro_purchase_code_js" value="<?php echo esc_attr( get_option( 'logipro_purchase_code_js' ) ); ?>"/>
								<input type="hidden" id="logipro_purchase_code" name="logipro_purchase_code" value="<?php echo esc_attr( get_option( 'logipro_purchase_code_js' ) ); ?>">
								<small><?php echo esc_attr__('When you verify the theme, your domain name ('. get_site_url() .'), current ip address ('. logipro_get_user_ip() .') and purchase code will be stored in our servers.', 'logipro') ?></small>
							</label>
						</li>
					</ul>
				</div>

				<?php submit_button(null, 'primary', 'purchase-code-save'); ?>
			</form>
		</div>
	</div>

	<?php
}

function logipro_validate_purchase_code( $purchase_code_return ){
	$purchase_code_return = json_decode($purchase_code_return);

	if( isset($purchase_code_return->code) &&
	isset($purchase_code_return->purchase_code) &&
	isset($purchase_code_return->version) &&
	isset($purchase_code_return->item_id) &&
	isset($purchase_code_return->plugin_path) ) {
		if($purchase_code_return->code == '1' || $purchase_code_return->code == '11') {
			if($purchase_code_return->code == '11') { update_option( 'ozy-purchase-code-multi-use-notice', '0' ); }
			return json_encode($purchase_code_return);
		}
	}

	if( isset($purchase_code_return->code) && isset($purchase_code_return->message) ) {
		add_settings_error(
			'logiproInvalidRequestError',
			esc_attr( 'settings_updated' ),
			$purchase_code_return->message,
			'error'
		);
		return '';
	}

	add_settings_error(
		'logiproPurchaseCodeNotCorrectError',
		esc_attr( 'settings_updated' ),
		esc_html__( 'Your Purchase Code is not valid, please fill correct code to verify your theme.', 'logipro' ),
		'error'
	);
	return '';
}

function logipro_settings() {
	$settings = json_decode(get_option('logipro_purchase_code'));
	if( isset($settings->code) &&
	   isset($settings->item_id) &&
	   isset($settings->plugin_path) &&
	   isset($settings->version) ) {
		if( $settings->item_id == FREEVISION_ITEM_ID ) {
			return $settings->plugin_path;
		}
	}
	return false;
}

function logipro_verify_version_check() {
	if(!wp_doing_ajax()) {
		$date = new DateTime();
		$settings = json_decode(get_option('logipro_purchase_code'));
		if( isset($settings->code) &&
		   isset($settings->purchase_code) &&
		   isset($settings->item_id) &&
		   isset($settings->plugin_path) &&
		   isset($settings->version) ) {
			if( $settings->version != FREEVISION_ITEM_VERSION ) {
				//logipro_verify_version_update($settings->purchase_code);
				define('FREEVISION_ITEM_VERSION_PURCHASE_CODE', $settings->purchase_code);
				add_action( 'admin_print_footer_scripts', 'logipro_verify_scripts_version' );
			}
			if(get_option('logipro_purchase_code_cache') == '') { update_option('logipro_purchase_code_cache', $date->getTimestamp()); }
			if( logipro_timestampdiff($date->getTimestamp(), get_option('logipro_purchase_code_cache')) > 20160 ) {//10080
				update_option('logipro_purchase_code_cache', $date->getTimestamp());
				//logipro_verify_version_update($settings->purchase_code);
				define('FREEVISION_ITEM_VERSION_PURCHASE_CODE', $settings->purchase_code);
				add_action( 'admin_print_footer_scripts', 'logipro_verify_scripts_version' );
			}
		}else{
			if( isset($settings->purchase_code) ) {
				update_option('logipro_purchase_code_cache', $date->getTimestamp());
				//logipro_verify_version_update($settings->purchase_code);
				define('FREEVISION_ITEM_VERSION_PURCHASE_CODE', $settings->purchase_code);
				add_action( 'admin_print_footer_scripts', 'logipro_verify_scripts_version' );
			}else{
				update_option('logipro_purchase_code_cache', $date->getTimestamp()); update_option('logipro_purchase_code', ''); delete_option( 'ozy-purchase-code-multi-use-notice' );
			}
		}
	}
}

add_action( 'admin_init', 'logipro_verify_version_check', 1 );

function logipro_verify_version_update( $purchase_code_return ){
	$purchase_code_return = json_decode(htmlspecialchars_decode(stripslashes(filter_var($_POST["purchase_code_return"], FILTER_SANITIZE_STRING))));

	if( isset($purchase_code_return->code) &&
	   isset($purchase_code_return->purchase_code) &&
	   isset($purchase_code_return->version) &&
	   isset($purchase_code_return->item_id) &&
	   isset($purchase_code_return->plugin_path) ) {
		if($purchase_code_return->code == '1' || $purchase_code_return->code == '11') {
			update_option('logipro_purchase_code', json_encode($purchase_code_return));
			if($purchase_code_return->code == '11') { update_option( 'ozy-purchase-code-multi-use-notice', '0' ); }
		}
	}else{
		update_option('logipro_purchase_code', ''); delete_option( 'ozy-purchase-code-multi-use-notice' );
	}
}
add_action( 'wp_ajax_logipro_verify_version_update', 'logipro_verify_version_update' );

if( !get_option( 'logipro_purchase_code' ) ) {
	function logipro_admin_notice_validate_purchase_code() {
    if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'logipro_activation_options' ) return;
		delete_option( 'ozy-purchase-code-multi-use-notice' );
		$class = 'notice notice-error';
		$message = esc_html__( 'Your theme is not verified, please fill your purchase code to install/update latest version of the necessary extensions.', 'logipro' );
		$message.= esc_html__(' Please ', 'logipro');
		$message.= '<a href="themes.php?page=logipro_activation_options" class="click-to-verify-theme button button-primary">';
		$message.= esc_html__('click here', 'logipro');
		$message.= '</a>';
		$message.= esc_html__(' to go verification page.', 'logipro');

		printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), wp_kses(__($message, 'logipro'), array('a' => array('class' => array(), 'href' => array(), 'target' => array()))) );
	}
	add_action( 'admin_notices', 'logipro_admin_notice_validate_purchase_code' );
}else{
	require_once ( get_template_directory() . '/functions/plugins.php' );
}

if(!function_exists('logipro_timestampdiff')) {
    function logipro_timestampdiff($qw, $saw) {
        $datetime1 = new DateTime("@"."$qw");
        $datetime2 = new DateTime("@"."$saw");
        $interval = $datetime1->diff($datetime2);

        return $interval->format('%I');
    }
}

function logipro_get_theme_data($param = "Version") {
    $theme_data = wp_get_theme();
    $parent = $theme_data->parent();
    if ( ! empty( $parent ) ) {
        return $theme_data->parent()->get( $param );
    }
    return $theme_data->get( $param );
}

function logipro_get_user_ip() {
    $ipaddress = 'UNKNOWN';
    $keys = array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR');
    foreach($keys as $k)
    {
        if (isset($_SERVER[$k]) && !empty($_SERVER[$k]) && filter_var($_SERVER[$k], FILTER_VALIDATE_IP))
        {
            $ipaddress = $_SERVER[$k];
            break;
        }
    }
    return $ipaddress;
}

function logipro_purchase_code_multi_use_notice() {
    ?>
    <div class="notice notice-error ozy-purchase-code-multi-use-notice is-dismissible">
        <p><?php printf( wp_kses( __('Your %s theme purchase code seems used for other domains too. Please do not share your purchase code with others. For further information go to <a href="https://freevision.ticksy.com">https://freevision.ticksy.com</a> and submit a support ticket.', 'logipro' ), array('a' => array('class' => array(), 'href' => array(), 'target' => array()))), wp_get_theme() ); ?></p>
		<p><a href="#close-purchase-code-multi-use" class="purchase-code-multi-use-notice-dismiss-link button button-primary"><?php esc_html_e('Close', 'henna') ?></a></p>
    </div>
    <?php
}
function logipro_purchase_code_multi_use_notice_check() {
	if(get_option( 'ozy-purchase-code-multi-use-notice' ) != '1' && get_option( 'ozy-purchase-code-multi-use-notice' ) != '') {
		add_action( 'admin_notices', 'logipro_purchase_code_multi_use_notice' );
	}
}
add_action( 'admin_init', 'logipro_purchase_code_multi_use_notice_check' );

function logipro_purchase_code_multi_use_notice_dismiss() {
	update_option('ozy-purchase-code-multi-use-notice', '1');
	exit();
}
add_action( 'wp_ajax_logipro_purchase_code_multi_use_notice_dismiss', 'logipro_purchase_code_multi_use_notice_dismiss' );

/**
* Show pointer to admin user for installing plugins
*/
add_action( 'admin_enqueue_scripts', 'logipro_verify_dashboard_pointers' );
function logipro_verify_dashboard_pointers() {

	$dismissed_wp_pointers = get_user_meta( get_current_user_id(), 'dismissed_wp_pointers' );

	if(is_array($dismissed_wp_pointers) && isset($dismissed_wp_pointers[0])) {
		$dismissed_wp_pointers = explode(',', $dismissed_wp_pointers[0]);
	}else{
		$dismissed_wp_pointers = array();
	}

	// Install plugins pointer
	if(is_array($dismissed_wp_pointers) && !in_array('logipro_verify_install_plugins', $dismissed_wp_pointers)) {
		wp_enqueue_style( 'wp-pointer' );
		wp_enqueue_script( 'wp-pointer' );
		add_action( 'admin_print_footer_scripts', 'logipro_verify_install_plugins_pointer' );
	}

	if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'logipro_activation_options' ) {
		add_action( 'admin_print_footer_scripts', 'logipro_verify_scripts' );
	}
}

function logipro_verify_install_plugins_pointer() {
?>
    <script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready( function($) {
		$('.click-to-verify-theme.button').pointer({
			content: '<h3><?php esc_html_e('Theme Verification', 'logipro') ?></h3><p><?php esc_html_e('Please click here to verify your purchase code.', 'logipro') ?></p>',
			position: {
				edge: 'left',
				align: 'center',
			},
			show: function(event, t){ t.pointer.css({'position':'fixed'}); },
			close: function() {
				$.post( ajaxurl, {
					pointer: 'logipro_verify_install_plugins',
					action: 'dismiss-wp-pointer'
				});
			}
		}).pointer('open');
    });
    //]]>
    </script>
<?php
}

function logipro_verify_scripts() {
?>
    <script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready( function($) {
		var logipro_domain = "<?php echo urlencode(get_site_url()) ?>";
		var logipro_item_id = "<?php echo esc_attr(FREEVISION_ITEM_ID) ?>";
		var logipro_ip_address = "<?php echo urlencode(logipro_get_user_ip()) ?>";
		var logipro_version = "<?php echo FREEVISION_ITEM_VERSION ?>";

		$('#purchase-code-save').on('click', function(e){
			e.preventDefault();
			var logipro_puchase_code_val = $('#logipro_purchase_code_js').val();
			if(logipro_puchase_code_val != '' ) {
				$.post('https://freevision.me/v/v.php', {
					code : logipro_puchase_code_val,
					domain: logipro_domain,
					item_id : logipro_item_id,
					ip_address : logipro_ip_address,
					version : logipro_version
				},
				function(data, status) {
					if(status == 'success') {
						$('#logipro_purchase_code').val(JSON.stringify(data));
						$('.activation-form-inner>form').submit();
					}else{
						alert(status);
					}
				});
			}else{
				alert('<?php esc_attr_e('Your Purchase Code is not valid, please fill correct code to verify your theme.', 'logipro'); ?>');
			}
			return false;
		});
	});
    //]]>
    </script>
<?php
}

function logipro_verify_scripts_version() {
	?>
		<script type="text/javascript">
		//<![CDATA[
		jQuery(window).load(function() {
			var logipro_domain = "<?php echo urlencode(get_site_url()) ?>";
			var logipro_item_id = "<?php echo esc_attr(FREEVISION_ITEM_ID) ?>";
			var logipro_ip_address = "<?php echo urlencode(logipro_get_user_ip()) ?>";
			var logipro_version = "<?php echo FREEVISION_ITEM_VERSION ?>";
			var logipro_puchase_code_val = "<?php echo FREEVISION_ITEM_VERSION_PURCHASE_CODE ?>";
			if(logipro_puchase_code_val != '' ) {
				jQuery.post('https://freevision.me/v/v.php', {
					code : logipro_puchase_code_val,
					domain: logipro_domain,
					item_id : logipro_item_id,
					ip_address : logipro_ip_address,
					version : logipro_version
				},
				function(data, status) {
					if(status == 'success') {
						jQuery.post( ajaxurl, {
							purchase_code_return: JSON.stringify(data),
							action: 'logipro_verify_version_update'
						});
					}else{
						console.log(status);
					}
				});
			}else{
				console.log('<?php esc_attr_e('Your Purchase Code is not valid, please fill correct code to verify your theme.', 'logipro'); ?>');
			}
		});
		//]]>
		</script>
	<?php
	}

<?php
/**
* Plugin Name: OTP Login/Signup Woocommerce
* Plugin URI: http://xootix.com/mobile-login-woocommerce
* Author: XootiX
* Version: 2.0
* Text Domain: mobile-login-woocommerce
* Domain Path: /languages
* Author URI: http://xootix.com
* Description: Allows user to signup/login in woocommerce
* Tags: woocommerce, OTP Login, mobile login woocommerce, phone login, signup
*/


//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

define("XOO_ML_PATH",plugin_dir_path(__FILE__)); // Plugin path
define("XOO_ML_URL",plugins_url('',__FILE__)); // plugin url
define("XOO_ML_PLUGIN_BASENAME",plugin_basename( __FILE__ ));
define("XOO_ML_VERSION","2.0"); //Plugin version
define("XOO_ML_LITE",true);


if(function_exists( 'xoo_el' ) && version_compare( XOO_EL_VERSION , '2.1', '<' ) ){
	add_action( 'admin_notices',function(){
		?>
		<div style="padding: 10px 20px; font-size: 16px;" class="notice notice-success xoo-wl-admin-notice is-dismissible">
			<p>OTP login is not compatible with the current version of Login/Signup popup plugin. Please update your login popup plugin.</p>
		</div>
		<?php
	} );
	return;
}

/**
 * Initialize
 *
 * @since    1.0.0
 */
function xoo_ml_init(){
	

	do_action('xoo_ml_before_plugin_activation');

	if ( ! class_exists( 'Xoo_Ml' ) ) {
		require XOO_ML_PATH.'/includes/class-xoo-ml.php';
	}

	xoo_ml();

	
}
add_action( 'plugins_loaded','xoo_ml_init', 15 );

function xoo_ml(){
	return Xoo_Ml::get_instance();
}


/**
 * WooCommerce not activated admin notice
 *
 * @since    1.0.0
 */
function xoo_ml_install_wc_notice(){
	?>
	<div class="error">
		<p><?php _e( 'WooCommerce Login/Signup Popup is enabled but not effective. It requires WooCommerce in order to work.', 'xoo-ml-woocommerce' ); ?></p>
	</div>
	<?php
}


//Allow easy login to refresh fields on activate/deactivate
function xoo_ml_activate_deactivate(){
	add_option( 'xoo_ml_el_refresh_fields', 'yes' );
}
register_activation_hook( __FILE__, 'xoo_ml_activate_deactivate' );
register_deactivation_hook( __FILE__, 'xoo_ml_activate_deactivate' );
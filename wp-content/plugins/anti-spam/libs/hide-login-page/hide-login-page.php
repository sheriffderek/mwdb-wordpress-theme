<?php
/**
 * Plugin Name: Webcraftic Hide login page
 * Plugin URI: https://wordpress.org/plugins/hide-login-page/
 * Description: Hide wp-login.php login page and close wp-admin access to avoid hacker attacks and brute force.
 * Author: Webcraftic <wordpress.webraftic@gmail.com>
 * Version: 1.1.0
 * Text Domain: hide-login-page
 * Domain Path: /languages/
 * Author URI: http://clearfy.pro
 */

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

/**
 * Developers who contributions in the development plugin:
 *
 * Alexander Kovalev
 * ---------------------------------------------------------------------------------
 * Full plugin development.
 *
 * Email:         alex.kovalevv@gmail.com
 * Personal card: https://alexkovalevv.github.io
 * Personal repo: https://github.com/alexkovalevv
 * ---------------------------------------------------------------------------------
 */

/**
 * -----------------------------------------------------------------------------
 * CHECK REQUIREMENTS
 * Check compatibility with php and wp version of the user's site. As well as checking
 * compatibility with other plugins from Webcraftic.
 * -----------------------------------------------------------------------------
 */

require_once(dirname(__FILE__) . '/libs/factory/core/includes/class-factory-requirements.php');

// @formatter:off
$wgnz_plugin_info = array(
	'prefix' => 'wbcr_gnz_',
	'plugin_name' => 'wbcr_gonzales',
	'plugin_title' => __('Webcraftic assets manager', 'gonzales'),

	// PLUGIN SUPPORT
	'support_details' => array(
		'url' => 'https://clearfy.pro',
		'pages_map' => array(
			'support' => 'support',           // {site}/support
			'docs' => 'docs'               // {site}/docs
		)
	),

	// PLUGIN ADVERTS
	'render_adverts' => true,
	'adverts_settings' => array(
		'dashboard_widget' => true, // show dashboard widget (default: false)
		'right_sidebar' => true, // show adverts sidebar (default: false)
		'notice' => true, // show notice message (default: false)
	),

	// FRAMEWORK MODULES
	'load_factory_modules' => array(
		array('libs/factory/bootstrap', 'factory_bootstrap_427', 'admin'),
		array('libs/factory/forms', 'factory_forms_424', 'admin'),
		array('libs/factory/pages', 'factory_pages_426', 'admin'),
		array('libs/factory/clearfy', 'factory_clearfy_218', 'all'),
		array('libs/factory/adverts', 'factory_adverts_000', 'admin')
	)
);

$wgnz_compatibility = new Wbcr_Factory426_Requirements(__FILE__, array_merge($wgnz_plugin_info, array(
	'plugin_already_activate' => defined('WHLP_PLUGIN_ACTIVE'),
	'required_php_version' => '5.4',
	'required_wp_version' => '4.2.0',
	'required_clearfy_check_component' => false
)));

/**
 * If the plugin is compatible, then it will continue its work, otherwise it will be stopped,
 * and the user will throw a warning.
 */
if( !$wgnz_compatibility->check() ) {
	return;
}

/**
 * -----------------------------------------------------------------------------
 * CONSTANTS
 * Install frequently used constants and constants for debugging, which will be
 * removed after compiling the plugin.
 * -----------------------------------------------------------------------------
 */

// This plugin is activated
define('WHLP_PLUGIN_ACTIVE', true);
define('WHLP_PLUGIN_VERSION', $wgnz_compatibility->get_plugin_version());
define('WHLP_PLUGIN_DIR', dirname(__FILE__));
define('WHLP_PLUGIN_BASE', plugin_basename(__FILE__));
define('WHLP_PLUGIN_URL', plugins_url(null, __FILE__));



/**
 * -----------------------------------------------------------------------------
 * PLUGIN INIT
 * -----------------------------------------------------------------------------
 */

require_once(WHLP_PLUGIN_DIR . '/libs/factory/core/boot.php');
require_once(WHLP_PLUGIN_DIR . '/includes/class-plugin.php');

try {
	new WHLP_Plugin(__FILE__, array_merge($wgnz_plugin_info, array(
		'plugin_version' => WHLP_PLUGIN_VERSION,
		'plugin_text_domain' => $wgnz_compatibility->get_text_domain(),
	)));
} catch( Exception $e ) {
	// Plugin wasn't initialized due to an error
	define('WHLP_PLUGIN_THROW_ERROR', true);

	$wgnz_plugin_error_func = function () use ($e) {
		$error = sprintf("The %s plugin has stopped. <b>Error:</b> %s Code: %s", 'Webcraftic Hide Login Page', $e->getMessage(), $e->getCode());
		echo '<div class="notice notice-error"><p>' . $error . '</p></div>';
	};

	add_action('admin_notices', $wgnz_plugin_error_func);
	add_action('network_admin_notices', $wgnz_plugin_error_func);
}
// @formatter:on

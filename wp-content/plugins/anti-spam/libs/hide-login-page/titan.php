<?php
/**
 * Этот файл инициализирует этот плагин, как аддон для плагина Clearfy.
 *
 * Файл будет подключен только в плагине Clearfy, используя особый вариант загрузки. Это более простое решение
 * пришло на смену встроенной системы подключения аддонов в фреймворке.
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 * @copyright (c) 2018 Webraftic Ltd
 */

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

if( !defined('WHLP_PLUGIN_ACTIVE') ) {
	define('WHLP_PLUGIN_VERSION', '1.0.8');
	define('WHLP_TEXT_DOMAIN', 'hide-login-page');
	define('WHLP_PLUGIN_ACTIVE', true);

	// Этот плагин загружен, как аддон для плагина Clearfy
	define('LOADING_HIDE_LOGIN_PAGE_AS_ADDON', true);

	if( !defined('WHLP_PLUGIN_DIR') ) {
		define('WHLP_PLUGIN_DIR', dirname(__FILE__));
	}

	if( !defined('WHLP_PLUGIN_BASE') ) {
		define('WHLP_PLUGIN_BASE', plugin_basename(__FILE__));
	}

	if( !defined('WHLP_PLUGIN_URL') ) {
		define('WHLP_PLUGIN_URL', plugins_url(null, __FILE__));
	}

	try {
		global $whlp_plugin;

		// Global scripts
		require_once(WHLP_PLUGIN_DIR . '/includes/3rd-party/class-titan-plugin.php');

		new WHLP_Plugin($whlp_plugin);
	} catch( Exception $e ) {
		$wgnz_plugin_error_func = function () use ($e) {
			$error = sprintf("The %s plugin has stopped. <b>Error:</b> %s Code: %s", 'Webcraftic Hide Login Page', $e->getMessage(), $e->getCode());
			echo '<div class="notice notice-error"><p>' . $error . '</p></div>';
		};

		add_action('admin_notices', $wgnz_plugin_error_func);
		add_action('network_admin_notices', $wgnz_plugin_error_func);
	}
}



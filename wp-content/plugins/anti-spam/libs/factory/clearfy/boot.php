<?php
/**
 * Factory clearfy
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>, Github: https://github.com/alexkovalevv
 * @since         1.0.0
 * @package       clearfy
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( defined( 'FACTORY_CLEARFY_218_LOADED' ) ) {
	return;
}

define( 'FACTORY_CLEARFY_218_LOADED', true );

define( 'FACTORY_CLEARFY_218', '2.1.8' );

define( 'FACTORY_CLEARFY_218_DIR', dirname( __FILE__ ) );
define( 'FACTORY_CLEARFY_218_URL', plugins_url( null, __FILE__ ) );

load_plugin_textdomain( 'wbcr_factory_clearfy_218', false, dirname( plugin_basename( __FILE__ ) ) . '/langs' );

require( FACTORY_CLEARFY_218_DIR . '/includes/ajax-handlers.php' );
require( FACTORY_CLEARFY_218_DIR . '/includes/class-helpers.php' );
require( FACTORY_CLEARFY_218_DIR . '/includes/class-configurate.php' );

// module provides function only for the admin area
if ( is_admin() ) {
	/**
	 * Подключаем скрипты для установки компонентов Clearfy
	 * на все страницы админпанели.
	 */
	add_action( 'admin_enqueue_scripts', function () {
		wp_enqueue_script( 'wbcr-factory-clearfy-218-global', FACTORY_CLEARFY_218_URL . '/assets/js/globals.js', [ 'jquery' ], FACTORY_CLEARFY_218 );
	} );
	
	if ( defined( 'FACTORY_PAGES_426_LOADED' ) ) {
		require( FACTORY_CLEARFY_218_DIR . '/pages/class-pages.php' );
		require( FACTORY_CLEARFY_218_DIR . '/pages/class-page-more-features.php' );
		require( FACTORY_CLEARFY_218_DIR . '/pages/class-page-license.php' );
	}
}
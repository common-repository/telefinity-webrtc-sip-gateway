<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link  https://www.tele-finity.com/
 * @since 1.0.0
 *
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/includes
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/includes
 * @author     TeleFinity <sales@tele-finity.com>
 */
class TFW_Telefinity_Webrtc_Sip_Gateway_i18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'telefinity-webrtc-sip-gateway',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}

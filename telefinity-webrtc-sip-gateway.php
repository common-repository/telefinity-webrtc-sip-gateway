<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.tele-finity.com/
 * @since             1.0.0
 * @package           TFW_TELEFINITY_WEBRTC_SIP_GATEWAY
 *
 * @wordpress-plugin
 * Plugin Name:       TeleFinity WebRTC-SIP Gateway
 * Plugin URI:        https://www.tele-finity.com/webrtcsip/
 * Description:       Turns your website into a phone and let your abroad customers connect to your PBX /Call Center directly at zero-cost and without a telecom operator. Try it on https://www.tele-finity.com/webrtcsip/.
 * Version:           1.1.4
 * Requires at least: 5.3
 * Requires PHP:      7.0
 * Author:            TeleFinity
 * Author URI:        https://www.tele-finity.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       telefinity-webrtc-sip-gateway
 * Domain Path:       /languages
 */

/*
TeleFinity WebRTC-SIP Gateway is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

TeleFinity WebRTC-SIP Gateway is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with TeleFinity WebRTC-SIP Gateway. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
if ( ! defined( 'TFW_TELEFINITY_WEBRTC_SIP_GATEWAY' ) ) {
	define( 'TFW_TELEFINITY_WEBRTC_SIP_GATEWAY_VERSION', '1.0.0' );
}

/**
 * Plugin basename
 */
if ( ! defined( 'TFW_TELEFINITY_WEBRTC_SIP_GATEWAY_PLUGIN_BASNAME' ) ) {
	define( 'TFW_TELEFINITY_WEBRTC_SIP_GATEWAY_PLUGIN_BASNAME', plugin_basename( __FILE__ ) );
}

/**
 * Plugin option name
 */
if ( ! defined( 'TFW_TOKEN_OPTION_NAME' ) ) {
	define( 'TFW_TOKEN_OPTION_NAME', 'tfw_telefinity_webrtc_sip_gateway_token' );
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tfw-telefinity-webrtc-sip-gateway.php';

if ( ! function_exists( 'tfw_run_telefinity_webrtc_sip_gateway' ) ) {
	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since    1.0.0
	 */
	function tfw_run_telefinity_webrtc_sip_gateway() {

		$plugin = new TFW_Telefinity_Webrtc_Sip_Gateway();

	}
}
tfw_run_telefinity_webrtc_sip_gateway();

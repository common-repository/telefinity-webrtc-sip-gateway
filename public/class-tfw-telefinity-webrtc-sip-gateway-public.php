<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link  https://www.tele-finity.com/
 * @since 1.0.0
 *
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/public
 */

if ( class_exists( 'TFW_Telefinity_Webrtc_Sip_Gateway_Public' ) ) {
	return;
}

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/public
 * @author     TeleFinity <sales@tele-finity.com>
 */
class TFW_Telefinity_Webrtc_Sip_Gateway_Public {

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public static function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		$tfw_token = get_option( TFW_TOKEN_OPTION_NAME, '' );
		if ( '' !== $tfw_token ) {
			wp_enqueue_script( 'telefinity-webrtc-sip-gateway', plugin_dir_url( __FILE__ ) . 'js/telefinity-webrtc-sip-gateway-public.js', array(), TFW_TELEFINITY_WEBRTC_SIP_GATEWAY_VERSION, true );
			wp_localize_script( 'telefinity-webrtc-sip-gateway', 'tfw_object', array( 'token' => $tfw_token ) );
		}

	}

}

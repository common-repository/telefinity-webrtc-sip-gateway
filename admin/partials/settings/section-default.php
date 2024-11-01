<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link  https://www.tele-finity.com/
 * @since 1.0.0
 *
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/admin/partials/settings
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

printf( __( 'Please get the TeleFinity WebRTC-SIP Gateway token from %1$sTeleFinity WebRTC-SIP Gateway%2$s and fill it in the below text box.', 'telefinity-webrtc-sip-gateway' ), '<a href="https://www.tele-finity.com/webrtcsip/" target="_blank">', '</a>' );

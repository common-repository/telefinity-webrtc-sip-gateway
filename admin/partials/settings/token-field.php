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
?>
<input type="text" name="tfw_telefinity_webrtc_sip_gateway_token" value="<?php echo esc_attr( get_option( TFW_TOKEN_OPTION_NAME, '' ) ); ?>" required size="80" />

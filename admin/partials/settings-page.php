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
 * @subpackage Telefinity_Webrtc_Sip_Gateway/admin/partials
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="wrap">
	<h1>TeleFinity WebRTC-SIP Gateway</h1>
	<form method="post" action="options.php">
		<?php
		settings_fields( $this->slug );
		do_settings_sections( $this->slug );
		submit_button();
		?>
	</form>
</div>


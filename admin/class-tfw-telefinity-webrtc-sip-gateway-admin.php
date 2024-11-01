<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link  https://www.tele-finity.com/
 * @since 1.0.0
 *
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/admin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'TFW_Telefinity_Webrtc_Sip_Gateway_Admin' ) ) {
	return;
}

class TFW_Telefinity_Webrtc_Sip_Gateway_Admin {

	/**
	 * The slug of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $page_slug    The page_slug of this plugin.
	 */
	private $slug = 'tfw-telefinity-webrtc-sip-gateway';

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->slug = 'tfw-telefinity-webrtc-sip-gateway';
	}

	/**
	 * Add initialization to admin side
	 *
	 * @since 1.0.0
	 */
	public function init() {

		register_setting(
			$this->slug,
			'tfw_telefinity_webrtc_sip_gateway_token',
			array(
				'type'              => 'string',
				'description'       => esc_html_x( 'TeleFinity WebRTC to SIP Gateway Token', 'register setting description', 'telefinity-webrtc-sip-gateway' ),
				'sanitize_callback' => 'sanitize_text_field',
				'show_in_rest'      => false,
				'default'           => '',
			)
		);

		$default_section_name = $this->slug . '-default-section';
		add_settings_section( $default_section_name, __( 'Configuration', 'telefinity-webrtc-sip-gateway' ), array( $this, 'render_setting_default_section' ), $this->slug );
		add_settings_field( $this->slug . '-token', _x( 'WebRTC-SIP Gateway Token', 'Setting field title', 'telefinity-webrtc-sip-gateway' ), array( $this, 'render_setting_token_field' ), $this->slug, $default_section_name );

	}

	/**
	 * Add settings link in plugin row in plugin page
	 *
	 * @since 1.0.0
	 */
	public function plugin_add_settings_link( $links ) {
		$setting_page_url = add_query_arg( 'page', $this->slug, admin_url( 'options-general.php' ) );
		$settings_link    = array( '<a href="' . $setting_page_url . '">' . __( 'Settings', 'telefinity-webrtc-sip-gateway' ) . '</a>' );
		$links            = array_merge( $settings_link, $links );
		return $links;
	}

	/**
	 * Add admin side menu
	 *
	 * @since 1.0.0
	 */
	public function menu() {
		add_options_page( esc_html_x( 'TeleFinity WebRTC-SIP Gateway', 'Page Title', 'telefinity-webrtc-sip-gateway' ), esc_html_x( 'TeleFinity WebRTC-SIP Gateway', 'Menu Title', 'telefinity-webrtc-sip-gateway' ), 'manage_options', $this->slug, array( $this, 'render_settings_page' ) );
	}

	/**
	 * Render settings page
	 *
	 * @since 1.0.0
	 */
	public function render_settings_page() {
		require_once plugin_dir_path( __FiLE__ ) . '/partials/settings-page.php';
	}

	/**
	 * Render settings default section
	 *
	 * @since 1.0.0
	 */
	public function render_setting_default_section() {
		require_once plugin_dir_path( __FiLE__ ) . '/partials/settings/section-default.php';
	}

	/**
	 * Render settings page
	 *
	 * @since 1.0.0
	 */
	public function render_setting_token_field() {
		require_once plugin_dir_path( __FiLE__ ) . '/partials/settings/token-field.php';
	}

}

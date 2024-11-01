<?php
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link  https://www.tele-finity.com/
 * @since 1.0.0
 *
 * @package    TFW_Telefinity_Webrtc_Sip_Gateway
 * @subpackage TFW_Telefinity_Webrtc_Sip_Gateway/includes
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'TFW_Telefinity_Webrtc_Sip_Gateway' ) ) {
	return;
}

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Telefinity_Webrtc_Sip_Gateway
 * @subpackage Telefinity_Webrtc_Sip_Gateway/includes
 * @author     TeleFinity <sales@tele-finity.com>
 */
class TFW_Telefinity_Webrtc_Sip_Gateway {

	/**
	 * The current version of the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		if ( defined( 'TELEFINITY_WEBRTC_SIP_GATEWAY_VERSION' ) ) {
			$this->version = TELEFINITY_WEBRTC_SIP_GATEWAY_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'telefinity-webrtc-sip-gateway';

		$this->load_dependencies();
		$this->set_locale();
		if ( is_admin() ) {
			$this->define_admin_hooks();
		}
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - TFW_Telefinity_Webrtc_Sip_Gateway_i18n. Defines internationalization functionality.
	 * - TFW_Telefinity_Webrtc_Sip_Gateway_Admin. Defines all hooks for the admin area.
	 * - TFW_Telefinity_Webrtc_Sip_Gateway_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function load_dependencies() {

		$plugin_root_path = plugin_dir_path( dirname( __FILE__ ) );

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		include_once $plugin_root_path . 'includes/class-tfw-telefinity-webrtc-sip-gateway-i18n.php';

		if ( is_admin() ) {
			/**
			 * The class responsible for defining all actions that occur in the admin area.
			 */
			include_once $plugin_root_path . 'admin/class-tfw-telefinity-webrtc-sip-gateway-admin.php';
		}

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		include_once $plugin_root_path . 'public/class-tfw-telefinity-webrtc-sip-gateway-public.php';

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the TFW_Telefinity_Webrtc_Sip_Gateway_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function set_locale() {

		$plugin_i18n = new TFW_Telefinity_Webrtc_Sip_Gateway_i18n();
		add_action( 'plugins_loaded', array( $plugin_i18n, 'load_plugin_textdomain' ) );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new TFW_Telefinity_Webrtc_Sip_Gateway_Admin();
		add_action( 'admin_init', array( $plugin_admin, 'init' ) );
		add_filter( 'plugin_action_links_' . TFW_TELEFINITY_WEBRTC_SIP_GATEWAY_PLUGIN_BASNAME, array( $plugin_admin, 'plugin_add_settings_link' ), 10, 1 );
		add_action( 'admin_menu', array( $plugin_admin, 'menu' ) );
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function define_public_hooks() {
		add_action( 'wp_enqueue_scripts', 'TFW_Telefinity_Webrtc_Sip_Gateway_Public::enqueue_scripts', PHP_INT_MAX );
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since  1.0.0
	 * @return string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since  1.0.0
	 * @return string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}

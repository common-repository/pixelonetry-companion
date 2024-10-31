<?php
/*
Plugin Name: pixelonetry Companion
Plugin URI:
Description: The pixelonetry Companion plugin adds sections functionality to the pixelonetry Themes.
Version: 1.0.2
Author: pixelonetry
Author URI: https://pixelonetry.com
Text Domain: pixelonetry-companion
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Prevent direct access

define( 'PIXELONETRY_COMPANION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PIXELONETRY_COMPANION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function pixelonetry_companion_activate() {
	/**
	 * Load Custom control in Customizer
	 */
	if ( class_exists( 'WP_Customize_Control' ) ) {
		require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/custom-controls/range-validator/range-control.php' );		
	}
	require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/custom-controls/customizer-repeater/functions.php' );
	require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/customizer/controls/font-control.php' );
	require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/customizer/sanitization.php' );	

	$theme = wp_get_theme(); // gets the current theme
	
	if ( 'Elina Lite Portfolio Gallery' === $theme->name ) {
		require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/elina.php' );
	}
}
add_action( 'init', 'pixelonetry_companion_activate' );

/**
 * The code during plugin activation.
 */
function pixelonetry_companion_activated() {
	require_once( PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/pixelonetry-companion-activator.php' ); // Fixed typo in the file name
	Pixelonetry_Companion_Activator::activate();
}
register_activation_hook( __FILE__, 'pixelonetry_companion_activated' );
?>

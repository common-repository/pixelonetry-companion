<?php
/**
 * @package   Elina
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/extras.php';
require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/features/elina-general.php';
require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/features/elina-cta.php';
// require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/features/elina-typography.php';

if ( ! function_exists( 'pixelonetry_companion_elina_frontpage_sections' ) ) :
	function pixelonetry_companion_elina_frontpage_sections() {    
	    require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/elina/sections/section-cta.php';
    }
    add_action( 'elina_sections', 'pixelonetry_companion_elina_frontpage_sections' );
endif;

<?php

/**
 * Fired during plugin activation
 *
 * @package   Pixelonetry Companion
 */

/**
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class Pixelonetry_Companion_Activator {

    public static function activate() {
        // Get the current theme
        $theme = wp_get_theme();
        
        // Check for existing option
        $item_details_page = get_option('pixelonetry_companion_item_details_page'); 

        // If option doesn't exist, set it
        if (!$item_details_page) {
            // Uncomment and modify the following code if needed
            /*
            if ('Spiral Lite One Page' == $theme->name || 'Lora One Page' == $theme->name) {
                require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/spiral/default-pages/upload-media.php';
                require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/spiral/default-pages/home-page.php';
                require PIXELONETRY_COMPANION_PLUGIN_DIR . 'inc/spiral/default-widgets/default-widget.php';
            }
            */

            // Set the option with the common prefix
            update_option('pixelonetry_companion_item_details_page', 'Done');
        }
    }
}

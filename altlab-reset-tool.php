<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://luetkemj.github.io
 * @since             1.0.0
 * @package           Altlab_Reset_Tool
 *
 * @wordpress-plugin
 * Plugin Name:       ALT Lab Reset Tool
 * Plugin URI:        https://github.com/luetkemj/reset-tool
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mark Luetke
 * Author URI:        http://luetkemj.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       altlab-reset-tool
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-altlab-reset-tool-activator.php
 */
function activate_altlab_reset_tool() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altlab-reset-tool-activator.php';
	Altlab_Reset_Tool_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-altlab-reset-tool-deactivator.php
 */
function deactivate_altlab_reset_tool() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-altlab-reset-tool-deactivator.php';
	Altlab_Reset_Tool_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_altlab_reset_tool' );
register_deactivation_hook( __FILE__, 'deactivate_altlab_reset_tool' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-altlab-reset-tool.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_altlab_reset_tool() {

	$plugin = new Altlab_Reset_Tool();
	$plugin->run();

}
run_altlab_reset_tool();

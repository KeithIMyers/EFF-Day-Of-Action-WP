<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kmyers.me
 * @since             1.0.0
 * @package           Eff_Day_Of_Action
 *
 * @wordpress-plugin
 * Plugin Name:       EFF Day of Action
 * Plugin URI:        https://www.eff.org/deeplinks/2017/06/internet-activate-stand-net-neutrality-july-12
 * Description:       This plugin will display a message on July 12th to show your support for net neutraility. Please read more at https://www.eff.org/deeplinks/2017/06/internet-activate-stand-net-neutrality-july-12
 * Version:           1.0.0
 * Author:            Keith I Myers
 * Author URI:        https://kmyers.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       eff-day-of-action
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-eff-day-of-action-activator.php
 */
function activate_eff_day_of_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-eff-day-of-action-activator.php';
	Eff_Day_Of_Action_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-eff-day-of-action-deactivator.php
 */
function deactivate_eff_day_of_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-eff-day-of-action-deactivator.php';
	Eff_Day_Of_Action_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_eff_day_of_action' );
register_deactivation_hook( __FILE__, 'deactivate_eff_day_of_action' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-eff-day-of-action.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_eff_day_of_action() {

	$plugin = new Eff_Day_Of_Action();
	$plugin->run();

}
run_eff_day_of_action();

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kmyers.me
 * @since      1.0.0
 *
 * @package    Eff_Day_Of_Action
 * @subpackage Eff_Day_Of_Action/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Eff_Day_Of_Action
 * @subpackage Eff_Day_Of_Action/includes
 * @author     Keith I Myers <Keith@KMyers.me>
 */
class Eff_Day_Of_Action_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'eff-day-of-action',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

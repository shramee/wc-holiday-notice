<?php
/*
Plugin Name:  WooCommerce holiday notice
Plugin URI:   http://shramee.me/wc-holiday-notice
Description:  Basic WordPress Plugin Header Comment
Version:      1.0.0
Author:       Shramee
Author URI:   http://shramee.me
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wchn
*/

class WC_Holiday_Notice {

	private static $instance;

	public static function instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function __construct() {

	}
}

WC_Holiday_Notice::instance();
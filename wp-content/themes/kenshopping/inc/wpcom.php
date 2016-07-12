<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package kenshopping
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function kenshopping_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if (!isset($themecolors)) {
		$themecolors = array(
			'bg' => '',
			'border' => '',
			'text' => '',
			'link' => '',
			'url' => '',
		);
	}
}
add_action('after_setup_theme', 'kenshopping_wpcom_setup');

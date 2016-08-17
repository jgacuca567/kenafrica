<?php
/**
 * Custom Login Page for WP-Admin
 * Version: 1.2.1
 * Author: JamesVanWaza @jeezysevenrwd
 * AuthorURI: https://jamesvanwaza.com
 * Email: jgacuca@dosbranding.com
 */

function kenshopping_login_logo_url() {
	return home_url();
}
add_filter('login_headerurl', 'kenshopping_login_logo_url');

function kenshopping_login_logo_url_title() {
	return 'Kenafrica Arts';
}
add_filter('login_headertitle', 'kenshopping_login_logo_url_title');

function kenshopping_login_stylesheet() {
	wp_enqueue_style('kenshopping-style', get_stylesheet_uri());
}
add_action('login_enqueue_scripts', 'kenshopping_login_stylesheet');

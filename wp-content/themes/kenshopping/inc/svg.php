<?php
/**
 * Inserts SVG into Wordpress
 * Version: 1.0.0
 * Author: JamesVanWaza @jeezysevenrwd
 * AuthorURI: https://jamesvanwaza.com
 * Email: jgacuca@dosbranding.com
 */
function kenshopping_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'kenshopping_mime_types');
?>
<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenshopping
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="secondary" class="col-xs-12 col-md-12 col-lg-3" role="complementary">
	<?php dynamic_sidebar('sidebar-1');?>
</aside><!-- #secondary .col-xs-12 col-md-12 col-lg-3 -->

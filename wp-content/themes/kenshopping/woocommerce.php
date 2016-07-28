<?php
/**
 * Template Name: WooCommerce
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kenshopping
 */

get_header();?>
<div class="container">
	<main class="row">
		<?php woocommerce_content();?>
	</main><!--#main-->
</div><!--#container-->

<?php
get_sidebar();
get_footer();

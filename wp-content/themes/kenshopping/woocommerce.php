<?php
/**
 * Template Name: WooCommerce
 * The template for displaying the WooCommerce Section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kenshopping
 */

get_header();?>
<div id="primary" class="container-fluid">
		<main id="main" class="row" role="main">
		<?php woocommerce_content();?>
	</main><!--#main-->
</div><!--#primary .container-fluid-->

<?php
get_sidebar();
get_footer();

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
		<section class="col-xs-12 col-md-9 col-lg-9">
			<?php woocommerce_content();?>
		</section><!--.col-xs-12col-md-9col-g-9-->
		<section class="col-xs-12 col-md-3 col-lg-3">
			<?php get_sidebar();?>
		</section><!--.col-xs-12col-md-3col-g-3-->
	</main><!--#main-->
</div><!--#primary .container-fluid-->

<?php
get_footer();

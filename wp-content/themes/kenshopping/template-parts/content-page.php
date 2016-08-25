<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kenshopping
 */

?>

<article id="post-<?php the_ID();?>" class="col-xs-12 col-md-12 col-lg-9">
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>');?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
the_content();

wp_link_pages(array(
	'before' => '<div class="page-links">' . esc_html__('Pages:', 'kenshopping'),
	'after' => '</div>',
));
?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()): ?>
		<footer class="entry-footer">
			<?php
edit_post_link(
	sprintf(
		/* translators: %s: Name of current post */
		esc_html__('Edit %s', 'kenshopping'),
		the_title('<span class="screen-reader-text">"', '"</span>', false)
	),
	'<span class="edit-link">',
	'</span>'
);
?>
		</footer><!-- .entry-footer -->
	<?php endif;?>
</article><!-- #post-## -->

<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kenshopping_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'kenshopping'),
		'id' => 'sidebar-1',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	$args = array(
		'name' => __('Contact Information', 'kenshopping'),
		'id' => 'contact-sidebar',
		'description' => 'Displays the contact information about the company',
		'class' => '',
		'before_widget' => '',
		'after_widget' => '',
	);

	register_sidebar($args);
}
add_action('widgets_init', 'kenshopping_widgets_init');

<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kenshopping_widgets_init() {
	$args = array(
		'name' => __('Sidebar name', 'kenshopping'),
		'id' => 'sidebar-one',
		'description' => 'Displays the information on the sidebar',
		'class' => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	);

	register_sidebar($args);
}
add_action('widgets_init', 'kenshopping_widgets_init');

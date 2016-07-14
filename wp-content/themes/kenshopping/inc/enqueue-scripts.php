<?php
/**
 * Enqueue scripts and styles.
 */
function kenshopping_scripts()
{
    wp_enqueue_style('kenshopping-style', get_stylesheet_uri());

    /** Font Awesome 4.6.3 */
    wp_register_style('fontawesome', get_stylesheet_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css', '4.6.3');

    /** Deregister the jquery version bundled with wordpress */
    wp_deregister_script('jquery');

    /** Local Version of jQuery */
    wp_register_script('jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '3.1.0');

    /** Script.JS */
    wp_register_script('scriptjs', get_template_directory_uri() . '/js/script.js');

    /** Enqueue all registered scripts */
    wp_enqueue_style('fontawesome');
    wp_enqueue_script('jquery');
    wp_enqueue_script('scriptjs');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'kenshopping_scripts');

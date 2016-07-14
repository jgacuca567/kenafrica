<?php
/** Declaring WooCommerce */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'kenshopping_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'kenshopping_wrapper_end', 10);

function kenshopping_wrapper_start()
{
    echo '<section id="main">';
}

function kenshopping_wrapper_end()
{
    echo '</section>';
}
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

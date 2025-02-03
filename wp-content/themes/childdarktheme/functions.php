<?php
function my_child_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');

function load_css_child()
{
    wp_register_style('style', get_stylesheet_directory_uri() . '/css/styles.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css_child');

<?php

function load_css()
{
    wp_register_style('style', get_stylesheet_directory_uri() . '/css/styles.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');

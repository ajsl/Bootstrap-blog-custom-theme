<?php

function bootstrap_theme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . "/style.css", array('bootstrap-theme-bootstrap'), $version, 'all');
    wp_enqueue_style('bootstrap-theme-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap-theme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'bootstrap_theme_register_styles' );

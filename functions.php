<?php

add_theme_support('title-tag');

function amit_css_js_file_calling(){

    // Bootstrap CSS CDN
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2',
        'all'
    );

    // Custom CSS (css folder theke)
    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/css/custom.css',
        array('bootstrap-css'),
        '1.0',
        'all'
    );

    // Theme main style.css (optional)
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('custom-css'),
        '1.0'
    );

}

add_action('wp_enqueue_scripts','amit_css_js_file_calling');
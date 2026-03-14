<?php

// Add theme support
add_theme_support('title-tag');

// Enqueue CSS and JS
function amit_css_js_file_calling()
{

    /* =========================
       CSS FILES
    ==========================*/

    // Bootstrap CSS CDN
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2',
        'all'
    );

    // Custom CSS (css/custom.css)
    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/css/custom.css',
        array('bootstrap-css'),
        '1.0',
        'all'
    );

    // Theme main style.css
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('custom-css'),
        '1.0'
    );


    /* =========================
       JS FILES
    ==========================*/

    // WordPress built-in jQuery
    wp_enqueue_script('jquery');

    // Bootstrap JS CDN
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.2',
        true
    );

    // Main JS file (js/main.js)
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        '1.0',
        true
    );

}

// Hook
add_action('wp_enqueue_scripts', 'amit_css_js_file_calling');


// Theme Function

function amit_customizer_register($wp_customize)
{

    $wp_customize->add_section(
        'amit_customizer_section',
        array(
            'title' => __(
                'Header Area',
                'learntheme'
            ),
            'description' => 'Customizer Section Description here . and if you interested logo upload here',
        )
        //    array(
        //        'title' => 'Customizer Section',
        //        'description' => 'Customizer Section Description',
        //    )
    );


    $wp_customize->add_setting(
        'amit_logo',
        array(
            'default' => get_bloginfo('template directory') . '/img/logo1.png',
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "amit_logo",
            array(
                'label' => 'Logo Upload',
                'description' => 'if you interested logo upload here',
                'setting' => 'amit_logo',
                'section' => 'amit_customizer_section',
            )
        )
    );
}

add_action('customize_register', 'amit_customizer_register');
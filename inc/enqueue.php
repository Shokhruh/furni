<?php

    // Enqueue styles
    function furni_enqueue_styles() {
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
        wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/assets/css/tiny-slider.css');
        wp_enqueue_style('furni-style', get_template_directory_uri() . '/assets/css/style.css');
        echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.png">';
    }
    add_action('wp_enqueue_scripts', 'furni_enqueue_styles');

    // Enqueue scripts
    function furni_enqueue_scripts() {
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), null, true);
        wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/assets/js/tiny-slider.js', array(), null, true);
        wp_enqueue_script('furni-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true);
    }
    add_action('wp_enqueue_scripts', 'furni_enqueue_scripts');
<?php
    // Theme setup
    function furni_setup_theme() {
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'furni_setup_theme');

    // Customize title separator
    function furni_title_separator($sep) {
    return '|';
    }
    add_filter('document_title_separator', 'furni_title_separator');
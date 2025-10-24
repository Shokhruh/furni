<?php
    function my_custom_init(){

        // Register Testimonial Post Type
        register_post_type('testimonial', array(
            'labels'             => array(
                'name'               => __('Testimonials'),
                'singular_name'      => __('Testimonial'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Testimonial'),
                'edit_item'          => __('Edit Testimonial'),
                'new_item'           => __('New Testimonial'),
                'view_item'          => __('View Testimonial'),
                'search_items'       => __('Search Testimonials'),
                'not_found'          => __('No Testimonials found'),
                'not_found_in_trash' => __('No Testimonials found in Trash'),
                'parent_item_colon'  => '',
                'menu_name'          => __('Testimonials')

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'menu_icon'          => 'dashicons-format-quote',
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array('title','editor', 'author', 'excerpt', 'thumbnail'),
        ) );


        // Register Product Post Type
        register_post_type('product', array(
            'labels'             => array(
                'name'               => __('Products'),
                'singular_name'      => __('Product'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Product'),
                'edit_item'          => __('Edit Product'),
                'new_item'           => __('New Product'),
                'view_item'          => __('View Product'),
                'search_items'       => __('Search Products'),
                'not_found'          => __('No Products found'),
                'not_found_in_trash' => __('No Products found in Trash'),
                'parent_item_colon'  => '',
                'menu_name'          => __('Products')

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'menu_icon'          => 'dashicons-products',
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array('title','editor', 'author', 'excerpt', 'thumbnail', 'custom-fields'),
        ) );

        // Register Services Post Type
        register_post_type('service', array(
            'labels'             => array(
                'name'               => __('Services'),
                'singular_name'      => __('Service'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Service'),
                'edit_item'          => __('Edit Service'),
                'new_item'           => __('New Service'),
                'view_item'          => __('View Service'),
                'search_items'       => __('Search Services'),
                'not_found'          => __('No Services found'),
                'not_found_in_trash' => __('No Services found in Trash'),
                'parent_item_colon'  => '',
                'menu_name'          => __('Services')

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'menu_icon'          => 'dashicons-admin-tools',
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array('title', 'excerpt', 'thumbnail'),
        ) );

        // Register Team Post Type
        register_post_type('team', array(
            'labels'             => array(
                'name'               => __('Teams'),
                'singular_name'      => __('Team'),
                'add_new'            => __('Add New'),
                'add_new_item'       => __('Add New Team'),
                'edit_item'          => __('Edit Team'),
                'new_item'           => __('New Team'),
                'view_item'          => __('View Team'),
                'search_items'       => __('Search Teams'),
                'not_found'          => __('No Teams found'),
                'not_found_in_trash' => __('No Teams found in Trash'),
                'parent_item_colon'  => '',
                'menu_name'          => __('Teams')

            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'menu_icon'          => 'dashicons-universal-access',
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 4,
            'supports'           => array('title', 'excerpt', 'thumbnail', 'custom-fields', 'editor'),
        ) );
    }

    add_action( 'init', 'my_custom_init' );
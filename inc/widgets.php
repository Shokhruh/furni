<?php 
    function register_custom_widgets() {
        // Footer Widget Area
        register_sidebar( array(
            'name'          => esc_html__( 'Main Footer Widget Area', 'furni' ),
            'id'            => 'footer-widget-area',
            'before_widget' => '<div class="footer-widget %2$s">',
            'after_widget'  => '</div>',
        ) );

        //Footer Bottom Widget Area
        register_sidebar( array(
            'name'          => esc_html__( 'Bottom Footer Widget Area', 'furni' ),
            'id'            => 'footer-bottom-widget-area',
            'before_widget' => '<div class="footer-widget row pt-4 %2$s">',
            'after_widget'  => '</div>',
        ) );
    }

    add_action( 'widgets_init', 'register_custom_widgets' );
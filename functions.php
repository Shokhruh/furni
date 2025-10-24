<?php
    // Enqueue scripts and styles
    require get_template_directory() . '/inc/enqueue.php';

    // Theme setup
    require get_template_directory() . '/inc/setup.php';

    // Register menus
    require get_template_directory() . '/inc/menus.php';

    //Post types
    require get_template_directory() . '/inc/post-types.php';

    // Allow SVG uploads
    function allow_svg_uploads($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'allow_svg_uploads');

    // Fix SVG thumbnail display in admin
    function fix_svg_thumb_display() {
        echo '<style>
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
        </style>';
    }
    add_action('admin_head', 'fix_svg_thumb_display');

    // Include custom widgets
    require get_template_directory() . '/inc/widgets.php';

    // Custom email sender
    add_filter( 'wp_mail_from', function($old) {
        return 'info@furni.local'; // haqiqiy domen manzili bo‘lsin
    });
    add_filter( 'wp_mail_from_name', function($old) {
        return 'Furni';
    });

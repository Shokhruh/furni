<?php
    function furni_menus() {
        $locations = array(
            'primary' => __("Desktop Primary Menu", 'furni'),
            'primary_mobile' => __("Desktop Primary Mobile Menu", 'furni'),
            'footer_first'  => __("Footer First Menu Items", 'furni'),
            'footer_second'  => __("Footer Second Menu Items", 'furni'),
            'footer_third'  => __("Footer Third Menu Items", 'furni'),
            'footer_fourth'  => __("Footer Fourth Menu Items", 'furni')
        );
        register_nav_menus($locations);
    }

    add_action( 'init', 'furni_menus' );


    // Custom Walker Class for PRIMARY DESKTOP MENU
    class Furni_Walker_Nav_Menu extends Walker_Nav_Menu {

        function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
            $classes = empty($item->classes) ? [] : (array) $item->classes;

            // Agar joriy sahifa bo'lsa yoki "current-menu-item" bo'lsa
            if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)) {
                $classes[] = 'active';
            }

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
            $class_names = ' class="nav-item ' . esc_attr($class_names) . '"';

            $output .= '<li' . $class_names . '>';

            $attributes  = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= ' class="nav-link"';

            $item_output  = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }


    // Custom Walker Class for FOOTER MENUS
    class Furni_Footer_Walker extends Walker_Nav_Menu {

        function start_lvl(&$output, $depth = 0, $args = null) {
        }

        function end_lvl(&$output, $depth = 0, $args = null) {
        }

        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $output .= '<li>';

            $attributes  = !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
            $output .= '<a' . $attributes . '>';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }

        function end_el(&$output, $item, $depth = 0, $args = null) {
            $output .= '</li>';
        }
    }



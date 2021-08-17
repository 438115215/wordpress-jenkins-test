<?php
/*
Functions to provide support for the One Click Demo Import plugin (wordpress.org/plugins/one-click-demo-import)

Set import files */
if ( !function_exists( 'webriti_companion_starter_sites_import_files' ) ) {
    function webriti_companion_starter_sites_import_files() {
        $theme = wp_get_theme();
        if ('Appointment' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointment.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointment.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointment.dat';
            $preview_url = 'https://appointment.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointment.jpg';
        }
        if ('Appointment Green' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointment-green.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointment-green.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointment-green.dat';
            $preview_url = 'https://appointment-green.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointment-green.jpg';
        }
        if ('Appointment Blue' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointment-blue.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointment-blue.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointment-blue.dat';
            $preview_url = 'https://appointment-blue.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointment-blue.jpg';
        }
        if ('Appointment Red' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointment-red.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointment-red.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointment-red.dat';
            $preview_url = 'https://appointment-red.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointment-red.jpg';
        }
        if ('Appointee' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointee.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointee.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointee.dat';
            $preview_url = 'https://appointee.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointee.jpg';
        }
        if ('Appointment Dark' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/appointment-dark.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/appointment-dark.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/appointment-dark.dat';
            $preview_url = 'https://appointment-dark.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/appointment-dark.jpg';
        }
        if ('vice' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/vice.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/vice.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/vice.dat';
            $preview_url = 'https://vice.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/vice.jpg';
        }
        if ('Shk Corporate' == $theme->name) {
            $local_import = 'inc/appointment/webriti-starter-sites/demo-content/shk-corporate.xml';
            $local_import_widget = 'inc/appointment/webriti-starter-sites/demo-content/shk-corporate.wie';
            $local_import_customizer = 'inc/appointment/webriti-starter-sites/demo-content/shk-corporate.dat';
            $preview_url = 'https://shk-corporate.webriti.com/';
            $preview_image_url = 'inc/appointment/webriti-starter-sites/demo-content/previews/shk-corporate.jpg';
        }
        return array(
            //Default Demo
            array(
                'import_file_name'              => __('Default', 'webriti-companion'),
                'local_import_file'             => WC_DIR . $local_import,
                'local_import_widget_file'      => WC_DIR . $local_import_widget,
                'local_import_customizer_file'  => WC_DIR . $local_import_customizer,
                'preview_url'                   => $preview_url,
                'import_preview_image_url'      => WC_URI . $preview_image_url,
            ),

            //Elementor Demo's
            array(
                'import_file_name'              => __('Business', 'webriti-companion'),
               'local_import_file'             => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-business.xml',
                'local_import_widget_file'      => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-business.wie',
                'local_import_customizer_file'  => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-business.dat',
                'preview_url'                   => 'https://ap-business.webriti.com/',
                'import_preview_image_url'      => WC_URI . 'inc/appointment/webriti-starter-sites/demo-content/previews/business-demo.jpg',
            ),

            array(
                'import_file_name'              => __('Restaurants', 'webriti-companion'),
                'local_import_file'             => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-restaurants.xml',
                'local_import_widget_file'      => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-restaurants.wie',
                'local_import_customizer_file'  => WC_DIR . 'inc/appointment/webriti-starter-sites/demo-content/appointment-restaurants.dat',
                'preview_url'                   => 'https://ap-restaurants.webriti.com/',
                'import_preview_image_url'      => WC_URI . 'inc/appointment/webriti-starter-sites/demo-content/previews/restaurants-demo.jpg',
            )
        );
    }
}
add_filter( 'pt-ocdi/import_files', 'webriti_companion_starter_sites_import_files' );

/* Define actions that happen after import */
if ( !function_exists( 'webriti_companion_starter_sites_after_import_mods' ) ) {
    function webriti_companion_starter_sites_after_import_mods() {

        //Assign the menu
        $main_menu = get_term_by( 'name', 'Menu 1', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
                'primary' => $main_menu->term_id,
            )
        );

        //Asign the static front page and the blog page
        $front_page = get_page_by_title( 'Home' );
        $blog_page  = get_page_by_title( 'Blog' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page -> ID );
        update_option( 'page_for_posts', $blog_page -> ID );

        $args = array(
        'post_type' => 'post',
        );
        $appoint_posts = get_posts($args);
        foreach ($appoint_posts as $appoint_post){
            $appoint_post->post_title = $appoint_post->post_title.'';
            wp_update_post( $appoint_post );
        }

        $appointment_setting = wp_parse_args(get_option('appointment_options', array()), appointment_theme_setup_data());
        $cat1 = get_cat_ID('Adventure');
        $cat2 = get_cat_ID('Latest News');
        $cat_id = array($cat1, $cat2);
        $appointment_setting['blog_selected_category_id']= $cat_id;
        update_option('appointment_options', $appointment_setting );

        $theme = wp_get_theme();
        if ('Appointment Green' == $theme->name) {
          $appointment_green_setting = wp_parse_args(get_option('appointment_options', array()), appointment_theme_setup_data());
          $cat1 = get_cat_ID('Business');
          $cat2 = get_cat_ID('Corporate');
          $cat_id = array($cat1, $cat2);
          $appointment_green_setting['slider_select_category']= $cat_id;
          update_option('appointment_options', $appointment_green_setting );
        }

    }
}
add_action( 'pt-ocdi/after_import', 'webriti_companion_starter_sites_after_import_mods' );

/* Remove branding */
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

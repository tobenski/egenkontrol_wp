<?php

if (!class_exists('TobenskiHeader')){

    class TobenskiHeader
    {
        function __construct()
        {
            // actions
            add_action('init',                  array($this, 'tobenski_custom_nav_menu'));

            // filters

        }

        public function tobenski_custom_nav_menu()
        {
            register_nav_menus(
                [
                    'tobenski-header-menu' => esc_html__( 'Egenkontrol - Top Navigation', 'tobenski'),
                    'tobenski-footer-menu' => esc_html__( 'Egenkontrol - Footer Navigation', 'tobenski'),
                    'tobenski-side-menu' => esc_html__( 'Egenkontrol - Side Navigation', 'tobenski'),
                ]
            );
        }
    }
    global $TobenskiHeader;

    $TobenskiHeader = new TobenskiHeader();
}
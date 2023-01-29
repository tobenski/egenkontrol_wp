<?php

if (!class_exists('TobenskiSettings')){

    class TobenskiSettings
    {
        function __construct()
        {
            // actions
            add_action('admin_menu',                  array($this, 'add_settings_page'));

            // filters

        }

        /**
         * Adds settings page for the plugin in the dashboard.
         */
        public function add_settings_page()
        {
            $menu_plugin_title = __( 'Opsætning', 'tobenski');

            // Create new top-level menu
            add_menu_page(
                __(
                    'Egenkontrol Settings',
                    'tobenski'
                ),
                $menu_plugin_title,
                'administrator',
                'tobenski-egenkontrol-menu-page',
                array($this, 'plugin_settings_page_content'),
                'dashicons-admin-generic'
            );

            // Call register settings function.
            add_action( 'admin_init', array($this, 'register_plugin_settings'));

        }

        /**
         * Register out settings
         */
        public function register_plugin_settings()
        {
            register_setting( 'tobenski-egenkontrol-settings-group', 'tobenski_egenkontrol_options');
        }

        /**
         * Settings Page Content for our plugin.
         */
        public function plugin_settings_page_content()
        {
            // Check user capabilities
            if (! current_user_can('manage_options')) {
                return;
            }

            /**
             * Add error / update messages.
             * Check if the user have submitted the settings.
             * Wordpress will add the "settings-updated" $_GET parameter to the url
             */
            if (isset( $_GET['settings-updated'])) {
                // Add settings saved message with the class of "updated".
                add_settings_error('tobenski_app_messages', 'tobenski_app_message', __('Settings Saved', 'tobenski'), 'updated');

            }

            // Show the error/update messages.
            settings_errors( 'tobenski_app_messages');

            include_once TOBENSKI_EGENKONTROL_TEMPLATE_PATH . 'settings-form-template.php';
        }
    }
    global $TobenskiSettings;

    $TobenskiSettings = new TobenskiSettings();
}
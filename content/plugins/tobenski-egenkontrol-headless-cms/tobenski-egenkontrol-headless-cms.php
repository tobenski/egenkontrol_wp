<?php
/**
 * Plugin Name: Tobenski Egenkontrol Headless CMS
 * Description: A WordPress plugin that adds features to use WordPress as a headless CMS for Tobenski Egenkontrol.
 * Plugin URI:  
 * Author:      Knud Rishøj
 * Author URI:  https://tobenski.dk
 * Version:     0.0.1
 * Text Domain: tobenski
 *
 * @package tobenski-egenkontrol-headless-cms
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TOBENSKI_EGENKONTROL_TEMPLATE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/' );
define( 'TOBENSKI_EGENKONTROL_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'TOBENSKI_EGENKONTROL_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
// define( 'TOBENSKI_EGENKONTROL_BUILD_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) . '/assets/build' );
// define( 'TOBENSKI_EGENKONTROL_BUILD_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/assets/build' );

require_once(plugin_dir_path( __FILE__ ) . '/classes/custom-functions.php');
require_once(plugin_dir_path( __FILE__ ) . '/classes/header.php');
require_once(plugin_dir_path( __FILE__ ) . '/classes/settings.php');

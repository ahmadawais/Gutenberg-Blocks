<?php
/**
 * Plugin Name: Gutenberg Blocks
 * Plugin URI: http://AhmadAwais.com/
 * Description: New blocks for Gutenberg editor in WordPress.
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package GB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'GB_VERSION' ) ) {
    define( 'GB_VERSION', '1.0.0' );
}

if ( ! defined( 'GB_NAME' ) ) {
    define( 'GB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('GB_DIR' ) ) {
    define( 'GB_DIR', WP_PLUGIN_DIR . '/' . GB_NAME );
}

if ( ! defined('GB_URL' ) ) {
    define( 'GB_URL', WP_PLUGIN_URL . '/' . GB_NAME );
}

/**
 * Init.
 *
 * @since 1.0.0
 */
if ( file_exists( GB_DIR . '/blocks/init.php' ) ) {
    require_once( GB_DIR . '/blocks/init.php' );
}

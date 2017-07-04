<?php
/**
 * Init
 *
 * Run code for all blocks.
 *
 * @since   1.0.0
 * @package GB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * BLOCK: Tweet.
 */
require_once( GB_DIR . '/blocks/tweet/block.php' );

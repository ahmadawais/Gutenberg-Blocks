<?php
/**
 * BLOCK: Tweet
 *
 * Tweet button.
 *
 * @since 	1.0.0
 * @package GB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Make sure the function is unique.
if ( ! function_exists( 'gb_block_tweet' ) ) {
	// Hook.
	if ( isset( $_GET['page'] ) && 'gutenberg' === $_GET['page'] ) {
		add_action( 'admin_enqueue_scripts', 'gb_block_tweet' );
	}
	/**
	 * Tweet block.
	 *
	 * @since 1.0.0
	 */
	function gb_block_tweet() {
		// Tweet block.
		wp_enqueue_script(
		    'gb-block-tweet',
		    GB_URL . '/blocks/tweet/block-build.js',
		    array( 'wp-element' ),
		    false,
		    true
		);
	} // End fucntion gb_block_tweet().
} // End if().

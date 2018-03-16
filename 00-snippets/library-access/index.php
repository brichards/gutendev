<?php

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
 */
function gutendev_00_library_access_init() {

	// Register editor JS
	wp_enqueue_script(
		'gutendev-00-library-access-editor',
		plugins_url( 'assets/block.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		)
	);

}
add_action( 'enqueue_block_editor_assets', 'gutendev_00_library_access_init' );

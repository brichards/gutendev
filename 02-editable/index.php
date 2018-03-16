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
function gutendev_02_editable_block_init() {

	// Register editor JS
	wp_register_script(
		'gutendev-02-editable-block-editor',
		plugins_url( 'assets/block.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		)
	);

	// Register editor CSS
	wp_register_style(
		'gutendev-02-editable-block-editor',
		plugins_url( 'assets/editor.css', __FILE__ ),
		array(
			'wp-blocks',
		)
	);

	// Register front-end CSS
	wp_register_style(
		'gutendev-02-editable-block',
		plugins_url( 'assets/style.css', __FILE__ ),
		array(
			'wp-blocks',
		)
	);

	// Register block assets
	if ( function_exists( 'register_block_type' ) ) {
		register_block_type(
			'gutendev/gutendev-02-editable-block',
			array(
				'editor_script' => 'gutendev-02-editable-block-editor',
				'editor_style'  => 'gutendev-02-editable-block-editor',
				'style'         => 'gutendev-02-editable-block',
			)
		);
	}
}
add_action( 'init', 'gutendev_02_editable_block_init' );

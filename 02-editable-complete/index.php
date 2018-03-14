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
function gutendev_02_editable_block_complete_init() {

	wp_register_script(
		'gutendev-02-editable-block-complete-editor',
		plugins_url( 'assets/block.js', __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		)
	);

	wp_register_style(
		'gutendev-02-editable-block-complete-editor',
		plugins_url( 'assets/editor.css', __FILE__ ),
		array(
			'wp-blocks',
		)
	);

	wp_register_style(
		'gutendev-02-editable-block-complete',
		plugins_url( 'assets/style.css', __FILE__ ),
		array(
			'wp-blocks',
		)
	);

	register_block_type( 'gutendev/gutendev-02-editable-block-complete', array(
		'editor_script' => 'gutendev-02-editable-block-complete-editor',
		'editor_style'  => 'gutendev-02-editable-block-complete-editor',
		'style'         => 'gutendev-02-editable-block-complete',
	) );
}
add_action( 'init', 'gutendev_02_editable_block_complete_init' );

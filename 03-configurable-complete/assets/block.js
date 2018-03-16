( function( wp ) {
	/**
	 * Registers a new block provided a unique name and an object defining its behavior.
	 * @see https://github.com/WordPress/gutenberg/tree/master/blocks#api
	 */
	var registerBlockType = wp.blocks.registerBlockType;

	/**
	 * Retrieves the translation of text.
	 * @see https://github.com/WordPress/gutenberg/tree/master/i18n#api
	 */
	var __ = wp.i18n.__;

	/**
	 * Returns a new element of given type. Element is an abstraction layer atop React.
	 * @see https://github.com/WordPress/gutenberg/tree/master/element#element
	 */
	var el = wp.element.createElement;

	/**
	 * Returns a custom component for editable text.
	 * @see https://github.com/WordPress/gutenberg/tree/master/blocks/rich-text#richtext
	 */
	var RichText = wp.blocks.RichText;

	/**
	 * Register Block: Hello, block
	 * @see https://wordpress.org/gutenberg/handbook/block-api/
	 *
	 * This simple, static block is designed to output a basic greeting.
	 *
	 * @param  {string}   name     Block name.
	 * @param  {Object}   settings Block settings.
	 * @return {?WPBlock}          The block, if it has been successfully
	 *                             registered; otherwise `undefined`.
	 */
	registerBlockType(

		// Block name. Must include a namespace prefix (e.g. my-plugin/my-custom-block).
		'gutendev/gutendev-03-configurable-block-complete',

		// Block settings
		{
			/**
			 * This is the display title for the block, which can be translated with `i18n` functions.
			 * The block inserter will show this name.
			 */
			title: __( 'Configurable Notice (complete)' ),

			/**
			 * An icon property should be specified to make it easier to identify a block.
			 * These can be any of WordPress’ Dashicons, or a custom svg element.
			 * @see https://developer.wordpress.org/resource/dashicons/
			 */
			icon: 'warning',

			/**
			 * Blocks are grouped into categories to help with browsing and discovery.
			 * The categories provided by core are common, embed, formatting, layout, and widgets.
			 */
			category: 'formatting',

			/**
			 * Optional block extended support features.
			 */
			supports: {
				// Removes support for an HTML mode.
				html: false,
			},

			/**
			 * Additional keywords to surface this block via search input.
			 */
			keywords: [
				__( 'gutendev' ),
			],

			/**
			 * Attributes for accessing configurable block data
			 */
			attributes: {
				message: {					
					source: 'text', 
					type: 'string',
					selector: '.gutendev-notice',
				},
			},

			/**
			 * The edit function describes the structure of the block in the context of the editor.
			 * This represents what the editor will render when the block is used.
			 * @see https://wordpress.org/gutenberg/handbook/block-edit-save/#edit
			 *
			 * @param  {Object} [props] Properties passed from the editor.
			 * @return {Element}        Element to render.
			 */
			edit: function( props ) {
				// Helper function for setting message value during edit
				function onChangeMessage( value ) {
					props.setAttributes( { message: value } );
				}

				// Return HTML to editor
				return el(
					// Creates <div class="wp-block-gutendev-gutendev-03-configurable-block-complete">.
					'div',
					{ className: props.className },
					el(
						// Creates custom <RichText /> component (from wp.blocks), passing along all relevant properties.
						RichText,
						{
							tagName: 'div',
							className: 'gutendev-notice',
							placeholder: __( 'Important notice message...', 'learn-gutenberg' ),
							value: props.attributes.message,
							onChange: onChangeMessage,
							focus: props.focus,
							onFocus: props.setFocus,
						}
					)
				);
			},

			/**
			 * The save function defines the way in which the different attributes should be combined
			 * into the final markup, which is then serialized by Gutenberg into `post_content`.
			 * @see https://wordpress.org/gutenberg/handbook/block-edit-save/#save
			 *
			 * @param  {Object} [props] Properties passed from the editor.
			 * @return {Element} Element to render.
			 */
			save: function( props ) {
				return el(
					// Creates <div class="wp-block-gutendev-gutendev-03-configurable-block-complete">.
					'div',
					{ className: props.className },
					el(
						// Creates <div class="gutendev-notice"> to wrap message content.
						'div',
						{ className: 'gutendev-notice' },
						props.attributes.message
					)
				);
			}
		}
	);
} )( window.wp );

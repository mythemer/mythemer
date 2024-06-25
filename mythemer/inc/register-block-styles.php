<?php
/**
 * Block styles.
 *
 * @package mythemer
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function mythemer_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'mythemer-flat-button',
			'label' => __( 'Flat button', 'mythemer' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'mythemer-list-underline',
			'label' => __( 'Underlined list items', 'mythemer' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'mythemer-box-shadow',
			'label' => __( 'Box shadow', 'mythemer' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'mythemer-box-shadow',
			'label' => __( 'Box shadow', 'mythemer' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'mythemer-box-shadow',
			'label' => __( 'Box shadow', 'mythemer' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'mythemer-plus',
			'label' => __( 'Plus & minus', 'mythemer' ),
		)
	);
}
add_action( 'init', 'mythemer_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function mythemer_unregister_block_style() {
	wp_enqueue_script(
		'mythemer-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		MYTHEMER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'mythemer_unregister_block_style' );

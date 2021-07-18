<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Kamba_One
 * @since Kamba-One 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Kamba-One 1.0.0
	 *
	 * @return void
	 */
	function kamba_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kambaone-columns-overlap',
				'label' => esc_html__( 'Overlap', 'kambaone' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'kambaone-border',
				'label' => esc_html__( 'Borders', 'kambaone' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'kambaone-border',
				'label' => esc_html__( 'Borders', 'kambaone' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kambaone-border',
				'label' => esc_html__( 'Borders', 'kambaone' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kambaone-image-frame',
				'label' => esc_html__( 'Frame', 'kambaone' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kambaone-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'kambaone' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kambaone-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'kambaone' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'kambaone-border',
				'label' => esc_html__( 'Borders', 'kambaone' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'kambaone-separator-thick',
				'label' => esc_html__( 'Thick', 'kambaone' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'kambaone-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'kambaone' ),
			)
		);
	}
	add_action( 'init', 'kamba_one_register_block_styles' );
}

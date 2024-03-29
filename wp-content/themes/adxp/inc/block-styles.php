<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since ADXP 1.0
	 *
	 * @return void
	 */
	function adxp_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'adxp-columns-overlap',
				'label' => esc_html__( 'Overlap', 'adxp' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'adxp-border',
				'label' => esc_html__( 'Borders', 'adxp' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'adxp-border',
				'label' => esc_html__( 'Borders', 'adxp' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'adxp-border',
				'label' => esc_html__( 'Borders', 'adxp' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'adxp-image-frame',
				'label' => esc_html__( 'Frame', 'adxp' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'adxp-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'adxp' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'adxp-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'adxp' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'adxp-border',
				'label' => esc_html__( 'Borders', 'adxp' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'adxp-separator-thick',
				'label' => esc_html__( 'Thick', 'adxp' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'adxp-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'adxp' ),
			)
		);
	}
	add_action( 'init', 'adxp_register_block_styles' );
}

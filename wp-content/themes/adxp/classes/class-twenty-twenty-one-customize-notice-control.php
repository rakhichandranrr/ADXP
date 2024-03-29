<?php
/**
 * Customize API: adxp_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since ADXP 1.0
 *
 * @see WP_Customize_Control
 */
class adxp_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since ADXP 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since ADXP 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'adxp' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/twenty-twenty-one/#dark-mode-support', 'adxp' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'adxp' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}

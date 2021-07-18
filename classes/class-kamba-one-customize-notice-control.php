<?php
/**
 * Customize API: Kamba_One_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Kamba_One
 * @since Kamba-One 1.0.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Kamba-One 1.0.0
 *
 * @see WP_Customize_Control
 */
class Kamba_One_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Kamba-One 1.0.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since Kamba-One 1.0.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'kambaone' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'kambaone' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'kambaone' ); ?>
			</a></p>
		</div>
		<?php
	}
}

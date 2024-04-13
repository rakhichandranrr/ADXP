<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>

<h1>
	<?php
	the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	adxp_post_thumbnail();
	?>
</h1>

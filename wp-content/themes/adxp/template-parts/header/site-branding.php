<?php

/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>
<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $image[0]; ?>" alt="logo"> </a>
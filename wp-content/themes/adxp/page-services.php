<?php
/*Template Name: Services*/
get_header();

echo banner_image();

echo banner_title();

echo banner_content();
?>
<?php
$services_args = array(
	'numberposts' => -1,
	'post_type'   => 'post-services',
	'order'       => 'ASC',
	'orderby'     => 'title'
);
$services = get_posts($services_args);

if ($services) {
?>

	<ul>
		<?php
		foreach ($services as $services_res) : setup_postdata($services);

			$imgurl = wp_get_attachment_url(get_post_thumbnail_id($services_res->ID), 'full');
		?>
			<li>
				<a href="<?php echo get_permalink($services_res->ID); ?>"><img src="<?php echo $imgurl; ?>">
					<?php echo $services_res->post_title; ?>
					<?php echo $services_res->post_content; ?></a>
			</li>
		<?php
		endforeach;
		wp_reset_postdata();
		?>
	</ul>
<?php
} ?>
<?php
get_footer();
?>
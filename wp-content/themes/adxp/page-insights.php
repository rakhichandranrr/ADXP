<?php
/*Template Name: Insights*/
get_header();

echo banner_image();

echo banner_title();

echo banner_content();
?>
<?php
$insight_args = array(
	'numberposts' => -1,
	'post_type'   => 'post-insights',
	'order'       => 'ASC',
	'orderby'     => 'title'
);
$insights = get_posts($insight_args);

if ($insights) {
?>

	<ul>
		<?php
		foreach ($insights as $insights_res) : setup_postdata($insights);

			$imgurl = wp_get_attachment_url(get_post_thumbnail_id($insights_res->ID), 'full');
		?>
			<li>
				<a href="<?php echo get_permalink($insights_res->ID); ?>"><img src="<?php echo $imgurl; ?>">
					<p><?php echo $insights_res->post_title; ?></p>
					<p><?php echo get_field('short_description', $home_insights_res->ID); ?></p>
				</a>
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
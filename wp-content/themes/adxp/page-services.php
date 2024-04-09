<?php
/*Template Name: Services*/
get_header();

?>
<?php
$services_args = array(
  'numberposts' => -1,
  'post_type'   => 'post-services',
  'order'       => 'ASC',
  'suppress_filters' => false,
  'orderby'     => 'title'
);
$services = get_posts($services_args);

if ($services) {
?>

  <section class="indistries common-padd mt-5" id="industries_section">
    <div class="container">
      <div class="row">
        <?php
        foreach ($services as $services_res) : setup_postdata($services);

          $imgurl = wp_get_attachment_url(get_post_thumbnail_id($services_res->ID), 'full');
        ?>
          <div class="col-lg-6">
            <div class="industries-grid">
              <div class="industries-img"> <a href="<?php echo get_permalink($services_res->ID); ?>"> <img src="<?php echo $imgurl; ?>" alt="img"></a> </div>
              <a href="<?php echo get_permalink($services_res->ID); ?>">
                <h4 class="mb-3 mt-4"><?php echo $services_res->post_title; ?></h4>
              </a>
              <div class="paragraph"><?php echo $services_res->post_content; ?></div>
            </div>
          </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
<?php
}
?>
<?php
get_footer();
?>
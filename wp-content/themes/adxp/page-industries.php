<?php
/*Template Name: Industries*/
get_header();
?>

<section class="indistries common-padd mt-5" id="industries_section">
  <div class="container">
    <div class="row">
      <?php
      $ind_args = array(
        'numberposts' => -1,
        'post_type'   => 'post-industries',
        'order'       => 'ASC',
        'orderby'     => 'title'
      );
      $industries = get_posts($ind_args);

      if ($industries) {
        foreach ($industries as $industries_res) : setup_postdata($industries);

          $imgurl = wp_get_attachment_url(get_post_thumbnail_id($industries_res->ID), 'full');
      ?>
          <div class="col-lg-4">
            <div class="industries-grid">
              <div class="industries-img"> <a href="<?php echo get_permalink($industries_res->ID); ?>"> <img src="<?php echo $imgurl; ?>" alt="img"></a> </div>
              <a href="<?php echo get_permalink($industries_res->ID); ?>">
                <h4 class="mb-3 mt-4"><?php echo $industries_res->post_title; ?></h4>
              </a>
              <div class="paragraph"><?php echo $industries_res->post_content; ?></div>
            </div>
          </div>
      <?php
        endforeach;
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>
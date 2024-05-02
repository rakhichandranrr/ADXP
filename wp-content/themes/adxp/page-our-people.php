<?php
/*Template Name: Our People*/
get_header();
?>

<section class="peoples common-padd pt-5" id="People">
  <div class="container">
    <div class="row">
      <?php

      $people_args = array(

        'numberposts' => -1,

        'post_type'   => 'post-people',

        'suppress_filters' => false,

      );

      $people = get_posts($people_args);



      if ($people) {

        foreach ($people as $people_res) : setup_postdata($people);



          $imgurl = wp_get_attachment_url(get_post_thumbnail_id($people_res->ID), 'full');

      ?>
          <div class="col-lg-3">
            <div class="peoples-grid  text-light mb-5">
              <div class="industries-img"> <img src="<?php echo $imgurl; ?>" alt="img"> </div>
              <h4 class="mb-2 mt-3"><?php echo $people_res->post_title; ?></h4>
              <span class="designation "><?php echo get_field('designation', $people_res->ID); ?></span>
              <div class="paragraph mb-3 mt-3"><?php echo $people_res->post_content; ?></div>
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
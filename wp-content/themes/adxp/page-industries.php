<?php

/*Template Name: Industries*/

get_header();

?>



<section class="indistries common-padd mt-3 mob-pt" id="industries_section">

  <div class="container">
  
   <h1 class="main-tittle mb-5 text-light page-title"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo get_field('page_heading'); ?></h1>

      <div class="paragraph text-light sub-desc mb-5 page-content"><?php echo get_field('page_description'); ?></div>


    <div class="row">

      <?php

      $ind_args = array(

        'numberposts' => -1,

        'post_type'   => 'post-industries',

		'suppress_filters' => false,

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
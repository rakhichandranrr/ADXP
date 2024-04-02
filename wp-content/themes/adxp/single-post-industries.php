<?php
get_header();

$overview = get_field('overview', $post_id);
$services = get_field('services', $post_id);
$services_list = $services['services'];

?>

<section class="p-3">
  <div class="container">
    <ul class="submenu text-light d-flex">
      <li><a href="#Overview">Overview</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="#Results">Results</a></li>
      <li><a href="#People">Our People</a></li>
    </ul>
  </div>
</section>

<!--OVERVIEW STARTS-->
<?php
if ($overview) {
?>
  <section class="innovation common-padd bg-light " id="Overview">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-7">
          <?php if ($overview['overview_title']) { ?>
            <h3 class="inner-heading"><?php echo $overview['overview_title']; ?></h3>
          <?php
          }
          ?>
          <div class="paragraph"><?php echo $overview['overview_description']; ?> </div>
        </div>
        <div class="col-lg-5">
          <?php if ($overview['overview_image']['url']) {
          ?>
            <img src="<?php echo $overview['overview_image']['url']; ?>" alt="img">
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php
}
?>
<!--OVERVIEW ENDS-->

<!--SERVICES STARTS-->
<?php
if ($services) {
?>
  <section class="ind-services common-padd" id="Services">
    <div class="container">
      <div class="row">
        <h3 class="inner-heading text-light mb-4"><?php echo $services['service_block_heading']; ?></h3>
        <div class="ind-service">
          <?php
          if ($services_list) {
            $i = 0;
            $j = 0;
            foreach ($services_list as $service_res) {
              $i++;
              $j++;

              if ($i % 3 == 1) {
                echo '<div class="ind-serv-itm row">';
              }
          ?>
              <div class="card-header col-lg-4 card-header<?php echo $j; ?>" onClick="showCardBody(<?php echo $i; ?>)">
                <div class="wrp-grd">
                  <h4 class="text-light"><?php echo $service_res['service_title']; ?></h4>
                  <div class="paragraph mt-3"> <?php echo $service_res['service_description']; ?> </div>
                </div>
              </div>
              <?php
              $services_click_block = $service_res['service_click_block'];
              if ($services_click_block) {
                if ($services_click_block['service_click_block_title']) {
              ?>
                  <div class="card-body col-lg-12 card-body<?php echo $j; ?>" id="cardBody<?php echo $i; ?>" style="display: none;">
                    <h4 class="text-light"><?php echo $services_click_block['service_click_block_title']; ?></h4>
                    <div class="paragraph mt-3"> <?php echo $services_click_block['service_click_block_description']; ?></div>
                  </div>
            <?php
                }
              }
              if ($i % 3 == 0) {
                echo '</div>';
                $j = 0;
              }
            }
            ?>
            <?php
            if ($i % 3 != 0) {
            ?>
        </div>
    <?php

            }
          }
    ?>
      </div>
    </div>
    </div>
  </section>
<?php
}
?>

<!--SERVICES ENDS-->

<section class="Client-results common-padd bg-light" id="Results">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="inner-heading text-light mb-4"><?php echo get_field('client_results_heading', $post_id); ?></h3>
        <div class="paragraph"> <?php echo get_field('client_results_description', $post_id); ?></div>
      </div>


      <?php
      $client_results = get_field('select_client_results');
      if ($client_results) {
        foreach ($client_results as $client_results_res) {
      ?>
          <div class="col-lg-4">
            <div class="industries-grid">
              <div class="industries-img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($client_results_res->ID), 'full'); ?>" alt="img"> </div>
              <span class="designation ">#ServiceName</span>
              <h4 class="mb-3 mt-4"><?php echo $client_results_res->post_title; ?></h4>
              <div class="paragraph"><?php echo get_field('short_description', $client_results_res->ID); ?> </div>
            </div>
          </div>

      <?php
        }
      }
      ?>

    </div>
  </div>
</section>

<!--PEOPLE STARTS-->
<?php
$people = get_field('choose_people');
if ($people) {
?>
  <section class="peoples inner common-padd bg-light" id="People">
    <div class="container">
      <h3 class="inner-heading text-light mb-4">People</h3>
      <div class="row">
        <?php foreach ($people as $people_res) { ?>
          <div class="col-lg-3">
            <div class="peoples-grid  text-light mb-5">
              <div class="industries-img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($people_res->ID), 'full'); ?>" alt="img"> </div>
              <h4 class="mb-2 mt-3"><?php echo $people_res->post_title; ?></h4>
              <span class="designation "><?php echo get_field('designation', $people_res->ID); ?></span>
              <div class="paragraph mb-3 mt-3"><?php echo $people_res->post_content; ?></div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
?>
<!--PEOPLE ENDS-->
<?php
get_footer();
?>
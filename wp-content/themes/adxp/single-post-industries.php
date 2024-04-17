<?php
get_header();

$overview = get_field('overview', $post_id);
$services = get_field('services', $post_id);
$services_list = $services['services'];

?>

<section class="p-3 submenu">
  <div class="container">
    <ul class="submenu text-light d-flex">
      <li><a href="#Overview">Overview</a></li>
      <li><a href="#Services">Services</a></li>
      <li><a href="#Results">Client Results</a></li>
      <li><a href="#People">People</a></li>
    </ul>
  </div>
</section>

<!--OVERVIEW STARTS-->
<?php
if ($overview) {
?>
  <section class="innovation common-padd bg-light " id="Overview">
    <div class="container mt-4">
      <div class="row overview-block">
        <div class="col-lg-7">
          <?php if ($overview['overview_title']) { ?>
            <h3 class="inner-heading"><?php echo $overview['overview_title']; ?></h3>
          <?php
          }
          ?>
          <div class="paragraph"><?php echo $overview['overview_description']; ?> </div>
        </div>
        
          <?php if ($overview['overview_image']['url']) {
          ?>
          <div class="col-lg-5">
            <img src="<?php echo $overview['overview_image']['url']; ?>" alt="img">
            </div>
          <?php } ?>
        
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
			  
			  $services_click_block = $service_res['service_click_block'];
			  
			  if($service_res['service_description'])
			  {
				   $cls = 'card-header-click';
			  }
			  else
			  {
				$cls = '';  
			  }
          ?>
              <div class="card-header col-lg-4 card-header<?php echo $j; ?> <?php echo $cls;?> " onClick="showCardBody(<?php echo $i; ?>)">
                <div class="wrp-grd">
                  <h4 class="text-light"><?php echo $service_res['service_title']; ?></h4>
                 
                </div>
              </div>
              <?php
              
              if ($services_click_block || $service_res['service_description']) {
              ?>
                  <div class="card-body col-lg-12 card-body<?php echo $j; ?>" id="cardBody<?php echo $i; ?>" style="display: none;">
                  <div class="paragraph mt-3"> <?php echo $service_res['service_description']; ?> </div>
                    <h4 class="text-light"><?php echo $services_click_block['service_click_block_title']; ?></h4>
                    <div class="paragraph mt-3"> <?php echo $services_click_block['service_click_block_description']; ?></div>
                    <?php

                    $service_click_block_sub_items = $services_click_block['service_click_block_sub_items'];
                    if ($service_click_block_sub_items) {
                      foreach ($service_click_block_sub_items as $service_click_block_sub_items_res) {
						  if($service_click_block_sub_items_res['service_click_block_sub_title'])
						  {
                    ?>
                        <div class="framework">
                          <h5><?php echo $service_click_block_sub_items_res['service_click_block_sub_title']; ?>
                            <mg src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg"></mg>
                          </h5>
                          <div class="paragraph"> <?php echo $service_click_block_sub_items_res['service_click_block_sub_description']; ?> </div>
                        </div>
                    <?php
						  }

                      }
                    }
                    ?>
                  </div>
            <?php
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

$client_results = get_field('select_client_results');
      if ($client_results) {
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
      
        foreach ($client_results as $client_results_res) {

          $insight_services = get_field('services', $client_results_res->ID);
          $insight_industry = get_field('industry', $client_results_res->ID);
          if ($insight_services[0]->post_title) {
            $insight_cat = $insight_services[0]->post_title;
          } else if ($insight_industry[0]->post_title) {
            $insight_cat = $insight_industry[0]->post_title;
          } else {
            $insight_cat = '';
          }
      ?>
          <div class="col-lg-4">
            <div class="industries-grid">
              <div class="industries-img"> <a href="<?php echo get_permalink($client_results_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($client_results_res->ID), 'full'); ?>" alt="img"> </a></div>
              <span class="designation "><?php echo $insight_cat; ?></span>
              <h4 class="mb-3 mt-4"><?php echo $client_results_res->post_title; ?></h4>
              <div class="paragraph"><?php echo get_field('short_description', $client_results_res->ID); ?> </div>
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
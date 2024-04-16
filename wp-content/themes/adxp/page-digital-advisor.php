<?php
/*Template Name: Digital Advisor*/
get_header();
?>

<section class="innovation common-padd" id="Overview">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-12 digital-disc">
        <h3 class="inner-heading text-light" ><?php echo get_field('content_heading'); ?></h3>
        <div class="paragraph text-light"> <?php echo get_field('content'); ?> </div>
      </div>
    </div>
  </div>
</section>
<?php
	  $services = get_field('services');
      $services_list = $services['services'];
      ?>

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
			  if($services_click_block['service_click_block_title'] || $services_click_block['service_click_block_description'])
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
          <h4 class="text-light sub-head"><?php echo $services_click_block['service_click_block_title']; ?></h4>
          <div class="paragraph mt-3 click-description"> <?php echo $services_click_block['service_click_block_description']; ?></div>
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
?>
<?php
get_footer();
?>

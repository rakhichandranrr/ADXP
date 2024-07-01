<?php

/*Template Name: Insights*/

get_header();



?>

<section class="insights-m common-padd" id="Services">
  <div class="container">
  <div class="row">
    <div class="col-lg-12 mb-3">
      <form action="" method="post" id="ind_form">
        <div class="container filter-section">
          <label>Filter by</label>
          
          <!--Filter Type Starts-->
          
          <div class="offcanvas-overlay0"></div>
          <div class="custom-dropdown custom-dropdown0 me-3">
            <button class="custom-dropdown-toggle" type="button" id="customDropdownButton1"> Type
            <?php if($_POST['type_filter']){?>
            <div class="Count-filter" >(<span><?php echo count($_POST['type_filter']);?></span>)</div>
            <?php

			 }

			 ?>
            <span class="dropdown-arrow0"> <i class="bi bi-chevron-down"></i></span> </button>
            <div class="custom-dropdown-menu custom-dropdown-menu0" aria-labelledby="customDropdownButton">
                <h4>Type</h4>
              <?php

                $type_args = array(

                  'numberposts' => -1,

                  'post_type'   => 'type',

                  'order'       => 'ASC',

                  'suppress_filters' => false,

                  'orderby'     => 'title'

                );

                $types = get_posts($type_args);



                if ($types) {

                  foreach ($types as $types_res) {



                    if (!empty($_POST['type_filter']) && in_array($types_res->ID, $_POST['type_filter'])) {



                      $checked = 'checked="checked"';

                    } else {

                      $checked = '';

                    }

                ?>
              <label class="custom-dropdown-item custom-dropdown-item0">
                  
                <input type="checkbox" value="<?php echo $types_res->ID; ?>" name="type_filter[]" class="check_<?php echo $types_res->ID; ?> check" <?php echo $checked; ?>>
                <?php echo $types_res->post_title; ?> <span class="checkmark"></span> </label>
              <?php

                  }

                }

                ?>
              <button type="submit" name="submit" class="custom-button mt-2 custom-button0" id="customFilterButton">Apply Filter</button>
            </div>
          </div>
          
          
          <!--filter Type Ends-->
          
          
          
          
          <div class="offcanvas-overlay1"></div>
          <div class="custom-dropdown custom-dropdown1 me-3">
            <button class="custom-dropdown-toggle" type="button" id="customDropdownButton"> Industry
            <?php if($_POST['industry']){?>
            <div class="Count-filter" >(<span><?php echo count($_POST['industry']);?></span>)</div>
            <?php

			 }

			 ?>
            <span class="dropdown-arrow1"> <i class="bi bi-chevron-down"></i></span> </button>
            <div class="custom-dropdown-menu custom-dropdown-menu1" aria-labelledby="customDropdownButton">
                <h4>Industry</h4>
              <?php

                $ind_args = array(

                  'numberposts' => -1,

                  'post_type'   => 'post-industries',

                  'order'       => 'ASC',

                  'suppress_filters' => false,

                  'orderby'     => 'title'

                );

                $industries = get_posts($ind_args);



                if ($industries) {

                  foreach ($industries as $industries_res) {
					  
					  
					  $ind_type = get_field('select_type', $industries_res->ID);



                    if (!empty($_POST['industry']) && in_array($industries_res->ID, $_POST['industry'])) {



                      $checked = 'checked="checked"';

                    } else {

                      $checked = '';

                    }

                ?>
              <label class="custom-dropdown-item custom-dropdown-item1">
                  
                <input type="checkbox" value="<?php echo $industries_res->ID; ?>" name="industry[]" class="check_<?php echo $industries_res->ID; ?> check" <?php echo $checked; ?>>
                <?php echo $industries_res->post_title; if($ind_type){ ?><span class="type-cls"> (<?php echo $ind_type->post_title;?>)</span><?php } ?> <span class="checkmark"></span> </label>
              <?php

                  }

                }

                ?>
              <button type="submit" name="submit" class="custom-button mt-2 custom-button1" id="customFilterButton">Apply Filter</button>
            </div>
          </div>
          <div class="offcanvas-overlay2"></div>
          <div class="custom-dropdown custom-dropdown2">
            <button class="custom-dropdown-toggle" type="button" id="customDropdownButton2"> Services
            <?php if($_POST['services']){?>
            <div class="Count-filter" >(<span><?php echo count($_POST['services']);?></span>)</div>
            <?php } ?>
            <span class="dropdown-arrow2"> <i class="bi bi-chevron-down"></i></span> </button>
            <div class="custom-dropdown-menu custom-dropdown-menu2" aria-labelledby="customDropdownButton">
                 <h4>Services</h4>
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

                  foreach ($services as $services_res) {
					  
					  $serv_type = get_field('select_type', $services_res->ID);

                    if (!empty($_POST['services']) && in_array($services_res->ID, $_POST['services'])) {


                      $checked = 'checked="checked"';

                    } else {

                      $checked = '';

                    }

                ?>
              <label class="custom-dropdown-item custom-dropdown-item1">
                <input type="checkbox" value="<?php echo $services_res->ID; ?>" name="services[]" class="check_<?php echo $services_res->ID; ?> " <?php echo $checked; ?>>
                <?php echo $services_res->post_title; if($serv_type){ ?><span class="type-cls"> (<?php echo $serv_type->post_title;?>)</span><?php }?> <span class="checkmark"></span> </label>
              <?php

                  }

                }

                ?>
              <button type="submit" name="submit" class="custom-button mt-2 custom-button2" id="customFilterButton">Apply Filter</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <?php

      if (!empty($_POST['industry']) || !empty($_POST['services']) || !empty($_POST['type_filter'])) {

      ?>
    <div class="col-lg-12 mb-4">
      <div class="d-flex filter-list">
        <?php

            if ($_POST['industry']) {

              foreach ($_POST['industry'] as $ind) {

            ?>
        <div class="filter-listing me-3"> <span><?php echo get_the_title($ind); ?></span>
          <button onclick="refresh_search_ind('<?php echo $ind; ?>')"><i class="bi bi-x"></i></button>
        </div>
        <?php

              }

            }  if ($_POST['services']) {

              foreach ($_POST['services'] as $serv) {

              ?>
        <div class="filter-listing me-3"> <span><?php echo get_the_title($serv); ?></span>
          <button onclick="refresh_search_ser('<?php echo $serv; ?>')"><i class="bi bi-x"></i></button>
        </div>
        <?php

              }

            }
			if ($_POST['type_filter']) {

              foreach ($_POST['type_filter'] as $typ) {

              ?>
        <div class="filter-listing me-3"> <span><?php echo get_the_title($typ); ?></span>
          <button onclick="refresh_search_type('<?php echo $typ; ?>')"><i class="bi bi-x"></i></button>
        </div>
        <?php

              }

            }


            ?>
        <div> <a class="clear-all" href="<?php echo site_url();?>/insights/" >Clear all </a> </div>
      </div>
      
     
        
        <!--   INDUSTRY SEARCH STARTS-->
        
        <?php
		 $industry_result_ids = array();
		 $type_result_ids = array();
		 $service_result_ids = array();

          if ($_POST['industry']) {			  

            foreach ($_POST['industry'] as $ind) {

              $search_ind_args = array(

                'post_type' => 'post-insights',

                'post_status' => 'publish',

				'suppress_filters' => false,

                'meta_query' => array(

                  array(

                    'key' => 'industry',

                    'value' => $ind,

                    'compare' => 'LIKE'

                  )

                )

              );

              $search_ind_insights = get_posts($search_ind_args);


              if ($search_ind_insights) {
				  

                foreach ($search_ind_insights as $search_ind_res) {
					
					$industry_result_ids[] = $search_ind_res->ID;


                }

              }

            }

          }

          ?>
        
        <!--   INDUSTRY SEARCH ENDS--> 
        
        <!--   SERVICE SEARCH STARTS-->
        
        <?php

          if ($_POST['services']) {

            foreach ($_POST['services'] as $serv) {


              $search_serv_args = array(

                'post_type' => 'post-insights',

                'post_status' => 'publish',

				'suppress_filters' => false,

                'meta_query' => array(

                  array(

                    'key' => 'services',

                    'value' => $serv,

                    'compare' => 'LIKE'

                  )

                )

              );

              $search_serv_insights = get_posts($search_serv_args);

              if ($search_serv_insights) {

                foreach ($search_serv_insights as $search_serv_res) {
					
					$service_result_ids[] = $search_serv_res->ID;

                }

              }

            }

          }

          ?>
        
        <!--   SERVICE SEARCH ENDS--> 
        
        
        <!--   TYPE SEARCH STARTS-->
        
        <?php

          if ($_POST['type_filter']) {

            foreach ($_POST['type_filter'] as $type_f) {


              $search_type_args = array(

                'post_type' => 'post-insights',

                'post_status' => 'publish',

				'suppress_filters' => false,

                'meta_query' => array(

                  array(

                    'key' => 'select_type',

                    'value' => $type_f,

                    'compare' => 'LIKE'

                  )

                )

              );


              $search_type_insights = get_posts($search_type_args);

              if ($search_type_insights) {

                foreach ($search_type_insights as $search_type_res) {
					
					$type_result_ids[] = $search_type_res->ID;

                }

              }

            }

          }

          ?>
        
        <!--   TYPE SEARCH ENDS--> 
        
      <!--DISPLAY SEARCH RESULTS STARTS HERE-->
      
      <div class="insights-list-wrapper paragraph search-result-box"> 
      <?php
	  $result_ids = array_merge($industry_result_ids, $type_result_ids, $service_result_ids );
	  $final_result_ids = array_unique($result_ids);
	  if($final_result_ids)
	  {
		  foreach($final_result_ids as $final_result_ids_res)
		  {
			  $final_result_insights = get_post($final_result_ids_res);
			  
			  ?>
              <div class="insights-search-res">
          <div class="insights-grD text-light d-flex flex-column">
            <div class="img-ins mb-3"><a href="<?php echo get_permalink($final_result_insights->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($final_result_insights->ID), 'full'); ?>" alt="img"> </a></div>
            <div class="res-details"><span class="tags-list"><?php echo get_insight_tags($final_result_insights->ID); ?></span>
              <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($final_result_insights->ID); ?>"><?php echo $final_result_insights->post_title; ?></a></h2>
              <span><?php echo date('F d, Y', strtotime($final_result_insights->post_date)); ?></span> </div>
          </div>
        </div>
              <?php
		  }
	  }
	  ?>
	   
        
      </div>
      
      <!--DISPLAY SEARCH RESULTS ENDS HERE-->
      
      <?php
	   

      } else {

      ?>
      <?php

        $pinned_insights = get_field('select_top_3_insights');

        if (!$pinned_insights) {

          $pinnedinsight_args = array(

            'numberposts' => 3,

            'post_type'   => 'post-insights',

            'suppress_filters' => false,


          );

          $pinned_insights = get_posts($pinnedinsight_args);

        }



        ?>
      
      <!--PINNED INSIGHT 1 STARTS-->
      
      <?php

        if ($pinned_insights[0]) {



        ?>
      <div class="col-lg-8 mb-5 ins-mob-2">
        <div class="insights-grD text-light d-flex flex-column">
          <div class="img-ins mb-3"><a href="<?php echo get_permalink($pinned_insights[0]->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($pinned_insights[0]->ID), 'full'); ?>" class="pin-insight" alt="img"></a> </div>
          <span class="tags-list"><?php echo get_insight_tags($pinned_insights[0]->ID); ?></span> 
          <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[0]->ID); ?>"><?php echo $pinned_insights[0]->post_title; ?></a></h2>
         
          
          <span><?php echo date('F d, Y', strtotime($pinned_insights[0]->post_date)); ?></span> </div>
      </div>
      
      <!--PINNED INSIGHT 1 ENDS-->
      
      <?php

        }

        ?>
      
      <!--Recent Insights STARTS-->
      
      <div class="col-lg-4 ins-mob1">
        <div class="Recent-Insights">
          <h3>Recent Insights</h3>
          <?php

            $recentinsight_args = array(

              'numberposts' => 4,

              'post_type'   => 'post-insights',

              'suppress_filters' => false,

             

            );

            $recent_insights = get_posts($recentinsight_args);



            if ($recent_insights) {

            ?>
          <ol>
            <?php

                foreach ($recent_insights as $recent_insights_res) {

                ?>
            <li>
              <h5><a href="<?php echo get_permalink($recent_insights_res->ID); ?>"><?php echo $recent_insights_res->post_title; ?></a></h5>
              
            </li>
            <?php

                }

                ?>
          </ol>
          <?php

            }

            ?>
        </div>
      </div>
      
      <!--Recent Insights ENDS--> 
      
      <!--PINNED INSIGHT 2 STARTS-->
      
      <?php

        if ($pinned_insights[1]) {





        ?>
      <div class="col-lg-6 pin2">
        <div class="insights-grD text-light d-flex flex-column">
          <div class="img-ins mb-3"> <a href="<?php echo get_permalink($pinned_insights[1]->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($pinned_insights[1]->ID), 'full'); ?>" alt="img"> </a></div>
          <div class="res-details"> <span class="tags-list"><?php echo get_insight_tags($pinned_insights[1]->ID); ?></span>
            <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[1]->ID); ?>"><?php echo $pinned_insights[1]->post_title; ?></a></h2>
            
            <span><?php echo date('F d, Y', strtotime($pinned_insights[1]->post_date)); ?></span> </div>
        </div>
      </div>
      <?php

        }

        ?>
      
      <!--PINNED INSIGHT 2 ENDS--> 
      
      <!--PINNED INSIGHT 3 STARTS-->
      
      <?php

        if ($pinned_insights[2]) {





        ?>
      <div class="col-lg-6 pin2">
        <div class="insights-grD text-light d-flex flex-column">
          <div class="img-ins mb-3"><a href="<?php echo get_permalink($pinned_insights[2]->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($pinned_insights[2]->ID), 'full'); ?>" alt="img"> </a></div>
          <div class="res-details"> <span class="tags-list"><?php echo get_insight_tags($pinned_insights[2]->ID); ?></span>
            <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[2]->ID); ?>"><?php echo $pinned_insights[2]->post_title; ?></a></h2>
            
            <span><?php echo date('F d, Y', strtotime($pinned_insights[2]->post_date)); ?></span> </div>
        </div>
      </div>
      <?php

        }

        ?>
      
      <!--PINNED INSIGHT 3 ENDS--> 
      
      <!--INSIGHT LISTINGS STARTS-->
      
      <div class="insights-list-wrapper paragraph">
        <?php

          $insight_args = array(

            'numberposts' => -1,

            'post_type'   => 'post-insights',

            'post__not_in' => array($pinned_insights[0]->ID, $pinned_insights[1]->ID, $pinned_insights[2]->ID),

            'suppress_filters' => false,

          );

          $insights = get_posts($insight_args);



          if ($insights) {

          ?>
        <?php

            $i = 0;

            foreach ($insights as $insights_res) {

              $i++;





              if ($i % 7 == 1) {

                echo '<div class="insights-itm-1">';

              }





            ?>
        <div class="insights-grD text-light d-flex flex-column" id="<?php echo $i; ?>">
          <div class="img-ins mb-3"><a href="<?php echo get_permalink($insights_res->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($insights_res->ID), 'full'); ?>" alt="img"></a> </div>
          <div class="res-details"> <span class="tags-list"><?php echo get_insight_tags($insights_res->ID); ?></span>
            <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($insights_res->ID); ?>"><?php echo $insights_res->post_title; ?></a></h2>
            
            <span><?php echo date('F d, Y', strtotime($insights_res->post_date)); ?></span> </div>
        </div>
        <?php



              if ($i % 7 == 0) {

                echo '</div>';

              }

            }

            if ($i % 7 != 0) {

              ?>
      </div>
      <?php



            }

          }

        }

  ?>
    </div>
  </div>
</section>
<?php

get_footer();

?>
<script>

$('input:checkbox').change(function(){
    if($(this).is(":checked")) {
        $(this).parent().addClass("makebold");
    } else {
        $(this).parent().removeClass("makebold");
    }
});

  function refresh_search_ind(val) {

    $('.check_' + val).prop('checked', false);

    $('.custom-button1').click();

  }



  function refresh_search_ser(val) {

    $('.check_' + val).prop('checked', false);

    $('.custom-button2').click();

  }
  
  
  function refresh_search_type(val) {

    $('.check_' + val).prop('checked', false);

    $('.custom-button0').click();

  }

</script>
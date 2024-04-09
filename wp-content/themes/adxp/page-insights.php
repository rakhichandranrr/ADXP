<?php
/*Template Name: Insights*/
get_header();

?>

<section class="insights-m common-padd" id="Services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-3">
        <div class="container filter-section">
          <label>Filter by</label>
          <div class="custom-dropdown custom-dropdown1 me-3">
            <form action="" method="post" id="ind_form">
              <button class="custom-dropdown-toggle" type="button" id="customDropdownButton"> Industry <span class="dropdown-arrow1"> <i class="bi bi-chevron-down"></i></span> </button>
              <div class="custom-dropdown-menu custom-dropdown-menu1" aria-labelledby="customDropdownButton">
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

                    if (!empty($_POST['industry']) && in_array($industries_res->ID, $_POST['industry'])) {

                      $checked = 'checked="checked"';
                    } else {
                      $checked = '';
                    }
                ?>
                    <label class="custom-dropdown-item custom-dropdown-item1">
                      <input type="checkbox" value="<?php echo $industries_res->ID; ?>" name="industry[]" class="check_<?php echo $industries_res->ID; ?>" <?php echo $checked; ?>>
                      <?php echo $industries_res->post_title; ?></label>
                <?php
                  }
                }
                ?>
                <button type="submit" name="submit" class="custom-button mt-2 custom-button1" id="customFilterButton">Apply Filter</button>
              </div>
            </form>
          </div>
          <div class="custom-dropdown custom-dropdown2">
            <form action="" method="post">
              <button class="custom-dropdown-toggle" type="button" id="customDropdownButton"> Services <span class="dropdown-arrow2"> <i class="bi bi-chevron-down"></i></span> </button>
              <div class="custom-dropdown-menu custom-dropdown-menu2" aria-labelledby="customDropdownButton">
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

                    if (!empty($_POST['services']) && in_array($services_res->ID, $_POST['services'])) {

                      $checked = 'checked="checked"';
                    } else {
                      $checked = '';
                    }
                ?>
                    <label class="custom-dropdown-item custom-dropdown-item2">
                      <input type="checkbox" value="<?php echo $services_res->ID; ?>" name="services[]" class="check_<?php echo $services_res->ID; ?>" <?php echo $checked; ?>>
                      <?php echo $services_res->post_title; ?></label>
                <?php
                  }
                }
                ?>
                <button type="submit" name="submit" class="custom-button mt-2 custom-button2" id="customFilterButton">Apply Filter</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php
      if (!empty($_POST['industry']) || !empty($_POST['services'])) {
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
            } else if ($_POST['services']) {
              foreach ($_POST['services'] as $serv) {
              ?>
                <div class="filter-listing me-3"> <span><?php echo get_the_title($serv); ?></span>
                  <button onclick="refresh_search_ser('<?php echo $serv; ?>')"><i class="bi bi-x"></i></button>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>

        <!--DISPLAY SEARCH RESULTS STARTS HERE-->

        <div class="insights-list-wrapper paragraph search-result-box">

          <!--   INDUSTRY SEARCH STARTS-->

          <?php
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

                  $insight_services = get_field('services', $search_ind_res->ID);
                  $insight_industry = get_field('industry', $search_ind_res->ID);
                  if ($insight_services[0]->post_title) {
                    $insight_cat = $insight_services[0]->post_title;
                  } else if ($insight_industry[0]->post_title) {
                    $insight_cat = $insight_industry[0]->post_title;
                  } else {
                    $insight_cat = '';
                  }

          ?>
                  <div class="insights-search-res">
                    <div class="insights-grD text-light d-flex flex-column" id="<?php echo $i; ?>">
                      <div class="img-ins mb-3"><a href="<?php echo get_permalink($search_ind_res->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($search_ind_res->ID), 'full'); ?>" alt="img"></a> </div>
                      <div class="res-details"> <span><?php echo get_insight_categories($search_ind_res->ID); ?></span>
                        <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($search_ind_res->ID); ?>"><?php echo $search_ind_res->post_title; ?></a></h2>
                        <div class="paragraph mb-3"><?php echo get_field('short_description', $search_ind_res->ID); ?></div>
                        <span><?php echo date('F d, Y', strtotime($search_ind_res->post_date)); ?></span>
                      </div>
                    </div>
                  </div>
          <?php


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


          ?>
                  <div class="insights-search-res">
                    <div class="insights-grD text-light d-flex flex-column">
                      <div class="img-ins mb-3"><a href="<?php echo get_permalink($search_serv_res->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($search_serv_res->ID), 'full'); ?>" alt="img"> </a></div>
                      <div class="res-details"> <span><?php echo get_insight_categories($search_serv_res->ID); ?></span>
                        <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($search_serv_res->ID); ?>"><?php echo $search_serv_res->post_title; ?></a></h2>
                        <div class="paragraph mb-3"><?php echo get_field('short_description', $search_serv_res->ID); ?></div>
                        <span><?php echo date('F d, Y', strtotime($search_serv_res->post_date)); ?></span>
                      </div>
                    </div>
                  </div>
          <?php
                }
              }
            }
          }
          ?>
          <!--   SERVICE SEARCH ENDS-->
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
            'order'       => 'DESC',
            'orderby'     => 'ID'
          );
          $pinned_insights = get_posts($pinnedinsight_args);
        }

        ?>

        <!--PINNED INSIGHT 1 STARTS-->
        <?php
        if ($pinned_insights[0]) {

        ?>
          <div class="col-lg-8 mb-5">
            <div class="insights-grD text-light d-flex flex-column">
              <div class="img-ins mb-3"><a href="<?php echo get_permalink($pinned_insights[0]->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($pinned_insights[0]->ID), 'full'); ?>" class="pin-insight" alt="img"></a> </div>
              <span><?php echo get_insight_categories($pinned_insights[0]->ID); ?></span> <a href="insight_details.html">
                <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[0]->ID); ?>"><?php echo $pinned_insights[0]->post_title; ?></a></h2>
              </a>
              <div class="paragraph mb-3"><?php echo get_field('short_description', $pinned_insights[0]->ID); ?></div>
              <span><?php echo date('F d, Y', strtotime($pinned_insights[0]->post_date)); ?></span>
            </div>
          </div>

          <!--PINNED INSIGHT 1 ENDS-->
        <?php
        }
        ?>

        <!--Recent Insights STARTS-->

        <div class="col-lg-4">
          <div class="Recent-Insights">
            <h3>Recent Insights</h3>
            <?php
            $recentinsight_args = array(
              'numberposts' => 4,
              'post_type'   => 'post-insights',
              'suppress_filters' => false,
              'order'       => 'DESC',
              'orderby'     => 'ID'
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
                    <div class="paragraph"> <?php echo get_field('short_description', $recent_insights_res->ID); ?></div>
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
              <div class="res-details"> <span><?php echo get_insight_categories($pinned_insights[1]->ID); ?></span>
                <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[1]->ID); ?>"><?php echo $pinned_insights[1]->post_title; ?></a></h2>
                <div class="paragraph mb-3"><?php echo get_field('short_description', $pinned_insights[1]->ID); ?></div>
                <span><?php echo date('F d, Y', strtotime($pinned_insights[1]->post_date)); ?></span>
              </div>
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
              <div class="res-details"> <span><?php echo get_insight_categories($pinned_insights[2]->ID); ?></span>
                <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($pinned_insights[2]->ID); ?>"><?php echo $pinned_insights[2]->post_title; ?></a></h2>
                <div class="paragraph mb-3"><?php echo get_field('short_description', $pinned_insights[2]->ID); ?></div>
                <span><?php echo date('F d, Y', strtotime($pinned_insights[2]->post_date)); ?></span>
              </div>
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
            'order'       => 'ASC',
            'suppress_filters' => false,
            'orderby'     => 'title'
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
                <div class="res-details"> <span><?php echo get_insight_categories($pinned_insights[0]->ID); ?></span>
                  <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($insights_res->ID); ?>"><?php echo $insights_res->post_title; ?></a></h2>
                  <div class="paragraph mb-3"><?php echo get_field('short_description', $insights_res->ID); ?></div>
                  <span><?php echo date('F d, Y', strtotime($insights_res->post_date)); ?></span>
                </div>
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
  function refresh_search_ind(val) {
    $('.check_' + val).prop('checked', false);
    $('.custom-button1').click();
  }

  function refresh_search_ser(val) {
    $('.check_' + val).prop('checked', false);
    $('.custom-button2').click();
  }
</script>
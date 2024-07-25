<?php
/*Template Name: Careers*/
get_header();

$what_we_offer = get_field('what_we_offer');
$work_culture = get_field('work_culture');
$career_development =  get_field('career_development');
?>

<section class="p-3 submenu">
  <div class="container">
    <ul class="submenu text-light d-flex">
      <li><a href="#Overview">What we offer</a></li>
      <li><a href="#Services">Work Culture</a></li>
      <li><a href="#Results">Career Development</a></li>
      <li><a href="#People">Job Openings</a></li>
    </ul>
  </div>
</section>
<?php
if ($what_we_offer) {
?>
  <section class="innovation common-padd flexW  ca-bg " id="Overview">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h3 class="inner-heading"><?php echo $what_we_offer['what_we_offer_title']; ?></h3>
          <div class="paragraph"> <?php echo $what_we_offer['what_we_offer_content']; ?> </div>
        </div>
        <div class="col-lg-6 car-img-wrp"> <img src="<?php echo $what_we_offer['what_we_offer_image']['url']; ?>" alt="img"> </div>
      </div>
    </div>
  </section>
<?php
}
if ($work_culture) {
?>
  <section class="ind-services common-padd grd-bg" id="Services">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 mb-5 main-p">
          <h3 class="inner-heading mb-5 text-light"><?php echo $work_culture['work_culture_title']; ?></h3>
          <div class="paragraph "> <?php echo $work_culture['work_culture_content']; ?> </div>
        </div>
        <?php
        if ($work_culture['work_culture_sub_content']) {
          foreach ($work_culture['work_culture_sub_content'] as $work_culture_sub_content) {
        ?>
            <div class="col-lg-3">
              <div class="values-grid keyareas wc">
                <?php
                if ($work_culture_sub_content['work_culture_sub_icon']['url']) {
                ?>
                  <img src="<?php echo $work_culture_sub_content['work_culture_sub_icon']['url']; ?>" alt="img">
                <?php
                }
                ?>
                <div>
                  <h5 class="kyhd text-light"><?php echo $work_culture_sub_content['work_culture_sub_title']; ?></h5>
                  <div class="paragraph "> <?php echo $work_culture_sub_content['work_culture_sub_content']; ?></div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
if ($career_development) {
?>
  <section class="career-dv common-padd " id="Results">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <h3 class="inner-heading mb-5 text-light"><?php echo $career_development['career_development_title']; ?></h3>
          <div class="paragraph "> <?php echo $career_development['career_development_content']; ?> </div>
        </div>
        <div class="col-lg-12 m-0 p-0">
          <div class="d-flex align-items-end timeline">
            <?php
            if ($career_development['career_development_levels']) {
              foreach ($career_development['career_development_levels'] as $career_development_levels) {
            ?>
                <div class="ca-d">
                  <div class="arrow-line">
                    <div class="position-relative"></div>
                  </div>
                  <div class="career-grid itmc1">
                    <button class="border levels"><?php echo $career_development_levels['career_development_level_title']; ?></button>
                    <h5 class="kyhd text-light"><?php echo $career_development_levels['career_development_level_heading']; ?></h5>
                    <div class="paragraph text-light"> <?php echo $career_development_levels['career_development_level_content']; ?></div>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}

?>
<section class="job section-apply inner common-padd bg-light mob-jov-pt job-detailss" id="People">
  <div class="container">
    <h1 class="inner-headingmb-4"><?php echo get_field('job_openings_title'); ?></h1>
    <div class="paragraph mb-3 mt-3 dark-para"><?php echo get_field('job_openings_content'); ?></div>
    <div class="row">
    <div class="job-itm"><?php echo get_field('recruit_zoho_embed_code'); ?></div>
    </div>
    <?php
    /*$args = array('child_of' => 11, 'hide_empty' => false);
    $categories = get_categories($args);
    if ($categories) {
    ?>
      <div class="row">

        <div class="job-itm"><?php echo get_field('recruit_zoho_embed_code'); ?></div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <?php
          $i = 0;
          //print_r($categories);
          foreach ($categories as $category) {
            $i++;
          ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link <?php if ($i == 1) { ?>active<?php } ?>" id="tab<?php echo $i; ?>" data-bs-toggle="tab" data-bs-target="#tab<?php echo $i; ?>-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><?php echo $category->name; ?></button>
            </li>
          <?php
          }
          ?>
        </ul>
        <div class="tab-content" id="myTabContent">
          <?php
          $i = 0;
          foreach ($categories as $category) {
            $i++;
          ?>
            <div class="tab-pane fade  <?php if ($i == 1) { ?> show active<?php } ?>" id="tab<?php echo $i; ?>-pane" role="tabpane<?php echo $i; ?>" aria-labelledby="tab<?php echo $i; ?>" tabindex="0">
              <div class="jobs-wrapper">
                <?php
                $jobs = get_posts(array(
                  'posts_per_page' => -1,
                  'post_type'   => 'job_openings',
                  'suppress_filters' => false,
                  'category'       => $category->term_id
                ));
                if ($jobs) {
                  foreach ($jobs  as $job_res) {

                ?>
                    <div class="job-itm">
                      <div class=" grid-job-wrp">
                        <h5 class="main-tittle ins-tittle mb-5mt-4"><?php echo $job_res->post_title; ?></h5>
                        <div class="loc-date f-column">
                          <div class="paragraph"> <img class="job-icons" src="<?php echo get_template_directory_uri(); ?>/assets/img/Location.svg" alt="img"> <?php echo get_field('job_location', $job_res->ID); ?> </div>
                          <div class="paragraph"><img class="job-icons" src="<?php echo get_template_directory_uri(); ?>/assets/img/Calendar.svg" alt="img"><?php echo get_field('job_type', $job_res->ID); ?></div>
                        </div>
                        <div class="loc-date mt-0 mb-5">
                          <?php $curr_categories = get_the_category($job_res->ID);
                          if (!empty($curr_categories)) {
                            foreach ($curr_categories as $cat_res) {
                          ?>
                              <button class="sec-button"><?php echo $cat_res->name; ?></button>
                          <?php
                            }
                          }
                          ?>
                        </div>
                      </div>
                      <a href="<?php echo get_permalink($job_res->ID); ?>"><button class="apply-btn">Apply</button></a>
                    </div>
                  <?php
                  }
                } else {
                  ?>
                  <div class="job-itm">Thank you for your interest, but there are no job openings available at this time. Please check back at another time</div>
                <?php
                }
                ?>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    <?php
    }*/
    ?>
</section>
<?php
get_footer();
?>
<script>
  //      $(function(){
  //     $(window).scroll(function () {
  //         var windscroll = $(window).scrollTop();
  //         $('ul.submenu li a').each(function(i) {
  //             var posTop = $($(this).attr('href')).position().top, 
  //                 h = $($(this).attr('href')).height();

  //             if (posTop  <= windscroll && posTop + h > windscroll ) {
  //                 $('ul.submenu li a').removeClass('active');
  //                 $(this).addClass('active');
  //             } else {
  //                 $(this).removeClass('active');
  //             }
  //         });
  //     });
  // });

  $(function() {
    // Function to handle adding/removing active class
    function setActiveLink(link) {
      $('ul.submenu li a').removeClass('active');
      link.addClass('active');
    }

    // Scroll event handler
    $(window).scroll(function() {
      var windowHeight = $(window).height();
      var windscroll = $(window).scrollTop() + (windowHeight * 0.5); // Adjusted to half the window height

      $('ul.submenu li a').each(function(i) {
        var target = $($(this).attr('href'));
        var posTop = target.offset().top;
        var posBottom = posTop + target.height();

        if (posTop <= windscroll && posBottom >= windscroll) {
          setActiveLink($(this));
        }
      });
    });

    // Click event handler for <a> tags
    $('ul.submenu li a').click(function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      var additionalSpacing = 150; // Additional spacing value
      $('html, body').animate({
        scrollTop: $(target).offset().top - additionalSpacing
      }, 500);
      setActiveLink($(this));
    });
  });

  // document.addEventListener('DOMContentLoaded', function() {
  //     var links = document.querySelectorAll('ul.submenu li a');
  //     links.forEach(function(link) {
  //         link.addEventListener('click', function(event) {
  //             event.preventDefault();
  //             var container = link.closest('ul.submenu');
  //             var containerWidth = container.clientWidth;
  //             var contentWidth = container.scrollWidth;
  //             container.scrollLeft = contentWidth - containerWidth;
  //         });
  //     });
  // });

  // document.addEventListener('DOMContentLoaded', function() {
  //     var links = document.querySelectorAll('ul.submenu li a');
  //     links.forEach(function(link) {
  //         link.addEventListener('click', function(event) {
  //             event.preventDefault();
  //             var container = link.closest('ul.submenu');
  //             var linkRect = link.getBoundingClientRect();
  //             var containerRect = container.getBoundingClientRect();
  //             var isLeft = linkRect.left < containerRect.left + container.clientWidth / 2;
  //             container.scrollLeft = isLeft ? 0 : container.scrollWidth; // Scroll to the left end if link is on the left, otherwise scroll to the right end
  //         });
  //     });
  // });
</script>
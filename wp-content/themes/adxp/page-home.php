<?php
/*Template Name: Home*/
get_header();
?>

<!--INSIGHT STARTS-->
<?php
$home_insights = get_field('select_insights');
if ($home_insights) {
?>
  <section class="insights common-padd" id="insights_section">
    <div class="container">
      <div class="row">

        <?php foreach ($home_insights as $home_insights_res) {

          $insight_services = get_field('services', $home_insights_res->ID);
          $insight_industry = get_field('industry', $home_insights_res->ID);
          if ($insight_services[0]->post_title) {
            $insight_cat = $insight_services[0]->post_title;
          } else if ($insight_industry[0]->post_title) {
            $insight_cat = $insight_industry[0]->post_title;
          } else {
            $insight_cat = '';
          }

        ?>

          <div class="col-lg-6">
            <div class="insights-grD text-light d-flex flex-column">
              <div class="img-ins mb-3"> <a href="<?php echo get_permalink($home_insights_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_insights_res->ID), 'full'); ?>" alt="img"> </a></div>
              <span><?php echo $insight_cat; ?></span>
              <h2 class="mt-2 mb-2"><?php echo $home_insights_res->post_title; ?></h2>
              <div class="paragraph mb-3"><?php echo get_field('short_description', $home_insights_res->ID); ?></div>
              <span><?php echo date('F d, Y', strtotime($home_insights_res->post_date)); ?></span>
            </div>
          </div>

        <?php
        }
        ?>

        <div class="col-lg-12 mt-4"> <a class="text-light " href="<?php echo site_url(); ?>/insights/">Explore more insights <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a> </div>
      </div>
    </div>
  </section>
<?php
}
?>

<!--INSIGHT ENDS-->

<!--SERVICES SECTION STARTS-->
<?php
$home_services = get_field('select_services');
if ($home_services) {
?>
  <section class="service common-padd" id="service_section">
    <div class="container">
      <div class="row">
        <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo get_field('service_heading'); ?> </h1>
        <div class="service-main d-flex justify-content-between g-2">
          <?php foreach ($home_services as $home_services_res) { ?>
            <div class="service-itm">
              <div class="ser_img"><a href="<?php echo get_permalink($home_services_res->ID); ?>"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_services_res->ID), 'full'); ?>" alt="img"></a> </div>
              <div class="service-details">
                <h4 class="mb-4"><?php echo $home_services_res->post_title; ?></h4>
                <div class="service_hover">
                  <div class="paragraph mb-3"><?php echo $home_services_res->post_content; ?> </div>
                  <a class="text-light" href="<?php echo get_permalink($home_services_res->ID); ?>">Learn more <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php
}
?>

<!--SERVICES SECTION ENDS-->

<!--MISSION STARTS-->
<?php
$mission_section = get_field('mission_section');

?>

<section class="mission common-padd" id="mission_section">
  <div class="container">
    <div class="row"> <!--<span class="upper-heading text-light">OUR MISSION</span>-->
      <h1 class="mission mb-5 text-light"><?php echo $mission_section['mission_title']; ?></h1>
    </div>
  </div>
</section>
<section class="features common-padd flexW" id="features_section" style="background: linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url('<?php echo $mission_section['mission_background_image']['url']; ?>'); background-position: center;background-size: cover;">
  <div class="container">
    <div class="row flexW">
      <div class="flexW flex-column w-70">
        <h1 class="main-tittle mb-3 text-light text-center"><?php echo $mission_section['mission_image_title']; ?></h1>
        <div class="paragraph text-light text-center"><?php echo $mission_section['mission_image_description']; ?></div>
      </div>
    </div>
  </div>
</section>

<!--MISSION ENDS-->

<!--INDUSTRIES STARTS-->
<?php
$home_industries = get_field('select_industries');
if ($home_industries) {
?>
  <section class="indistries common-padd" id="industries_section">
    <div class="container">
      <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo get_field('industries_heading'); ?></h1>
      <div class="row">
        <?php foreach ($home_industries as $home_industries_res) { ?>
          <div class="col-lg-4">
            <div class="industries-grid">
              <div class="industries-img"> <a href="<?php echo get_permalink($home_industries_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_industries_res->ID), 'full'); ?>" alt="img"> </a></div>
              <h4 class="mb-3 mt-4"><?php echo $home_industries_res->post_title; ?></h4>
              <div class="paragraph"><?php echo $home_industries_res->post_content; ?></div>
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
<!--INDUSTRIES ENDS-->

<!--DIGITAL CONSULTING STARTS-->
<?php
$digital_consulting = get_field('digital_consulting_section');
?>

<section class="digital-portal common-padd" id="digita_portal_section">
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-6">
        <h1 class="main-tittle mb-5 text-light digital-head"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo $digital_consulting['digital_consulting_heading']; ?></h1>
        <div class="paragraph text-light"><?php echo $digital_consulting['digital_consulting_description']; ?></div>

        <?php
        if ($digital_consulting['digital_consulting_link_text']) {
        ?>
          <a class="text-light" href="<?php echo $digital_consulting['digital_consulting_link_url']; ?>"><?php echo $digital_consulting['digital_consulting_link_text']; ?> <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a>
        <?php
        }
        ?>
      </div>
      <div class="col-lg-6 dc-img">
        <div class="dc-portal">
          <?php if ($digital_consulting['digital_consulting_image']['url']) {
          ?>
            <img src="<?php echo $digital_consulting['digital_consulting_image']['url']; ?>" alt="img">
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--DIGITAL CONSULTING ENDS-->

<!--PEOPLE STARTS-->

<?php
$home_people = get_field('select_people');
if ($home_people) {
?>
  <section class="peoples common-padd" id="peoples_section">
    <div class="container">
      <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"> <?php echo get_field('people_heading'); ?></h1>
      <div class="row">
        <?php foreach ($home_people as $home_people_res) { ?>
          <div class="col-lg-3">
            <div class="peoples-grid  text-light mb-5">
              <div class="industries-img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_people_res->ID), 'full'); ?>" alt="img"> </div>
              <h4 class="mb-2 mt-3"><?php echo $home_people_res->post_title; ?></h4>
              <span class="designation "><?php echo get_field('designation', $home_people_res->ID); ?></span>
              <div class="paragraph mb-3 mt-3"><?php echo $home_people_res->post_content; ?></div>
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
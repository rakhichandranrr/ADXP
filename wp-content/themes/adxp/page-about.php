<?php

/*Template Name: About Us*/

get_header();

$about_adxp =  get_field('about_adxp');

$our_vision = get_field('our_vision');

$our_mission = get_field('our_mission');

$our_philosophy = get_field('our_philosophy');

$our_values = get_field('our_values');

$why_us = get_field('why_us');

$facts_and_figure = get_field('facts_and_figure');

?>

<section class="abt-adxp common-padd">
  <div class="container">
    <div class="row pdl-1 pdr-1">
      <div class="col-lg-4">
        <div class="abt-lg">
         
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
        <dotlottie-player src="<?php echo get_template_directory_uri(); ?>assets/animation/ADXP_WebOption.json" 
        background="transparent" 
        speed="1" style="width: 600px; height: 360px;" 
        autoplay=true and loop=false>
      </dotlottie-player>












      
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-center">
        <div class="ad-xt-main"> <span class="upper-heading text-light"><?php echo $about_adxp['about_adxp_title']; ?></span>
          <h1 class="adxp-des"><?php echo $about_adxp['about_adxp_headline']; ?></h1>
        </div>
      </div>
      <div class="col-lg-12 mt-5">
        <div class="ad-xp-paragraph">
          <div class="paragraph"><?php echo $about_adxp['about_adxp_content']; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="vision bor-0 mobSpc">
  <div class="container">
    <div class="row flexW pdl-1 pdr-1">
      <div class="col-lg-7 col-md-7">
        <div class="ad-xt-main"> <span class="upper-heading text-light"><?php echo $our_vision['vision_title']; ?></span>
          <h1 class="adxp-des"><?php echo $our_vision['vision_content']; ?> </h1>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 dc-img">
        <div class="dc-portal">
          <?php if ($our_vision['vision_image']['url']) {

          ?>
          <img src="<?php echo $our_vision['vision_image']['url']; ?>" alt="img">
          <?php

          }

          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mission bor-0 mobSpc">
  <div class="container">
    <div class="row flexW pdl-1 pdr-1">
      <div class="col-lg-5 col-md-5 dc-img">
        <div class="dc-portal mssn">
          <?php if ($our_mission['mission_image']['url']) {

          ?>
          <img src="<?php echo $our_mission['mission_image']['url']; ?>" alt="img">
          <?php

          }

          ?>
        </div>
      </div>
      <div class="col-lg-7 col-md-7">
        <div class="ad-xt-main"> <span class="upper-heading text-light"><?php echo $our_mission['mission_title']; ?></span>
          <h1 class="adxp-des"><?php echo $our_mission['mission_content']; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Philosophy common-padd">
  <div class="container">
    <div class="row pdl-1 pdr-1">
      <h3 class="inner-heading text-light mb-4"><?php echo $our_philosophy['our_philosophy_title']; ?></h3>
      <div class="col-lg-12">
        <div class="paragraph"> <?php echo $our_philosophy['our_philosophy_short_description']; ?></div>
      </div>
      <?php

      $our_philosophy_sub = $our_philosophy['our_philosophy_sub_content'];

      if ($our_philosophy_sub) {

        foreach ($our_philosophy_sub as $our_philosophy_sub_res) {

      ?>
      <div class="col-lg-6">
        <h5 class="text-light"><?php echo $our_philosophy_sub_res['our_philosophy_sub_title']; ?></h5>
        <div class="paragraph"> <?php echo $our_philosophy_sub_res['our_philosophy_sub_content']; ?></div>
      </div>
      <?php

        }

      }

      ?>
    </div>
  </div>
</section>
<section class="common-padd why-us">
  <div class="container">
    <div class="row pdl-1 pdr-1">
      <div class="col-lg-12">
        <div class="ad-xt-main"> <span class="upper-heading text-light"><?php echo $why_us['why_us_title']; ?></span>
          <h1 class="adxp-des"><?php echo $why_us['why_us_content']; ?> </h1>
        </div>
      </div>
      <div class="col-lg-12 mb-5">
        <div class="paragraph"> <?php echo $our_values['our_values_short_description']; ?> </div>
      </div>
      <?php

      $our_values_sub = $our_values['our_values_sub_content'];

      if ($our_values_sub) {

        foreach ($our_values_sub as $our_values_sub_res) {

      ?>
      <div class="col-lg-4">
        <div class="values-grid">
          <?php if ($our_values_sub_res['our_values_sub_icon']['url']) {

              ?>
          <img src="<?php echo $our_values_sub_res['our_values_sub_icon']['url']; ?>" alt="img">
          <?php

              }

              ?>
          <div>
            <h5 class="text-light"><?php echo $our_values_sub_res['our_values_sub_title']; ?></h5>
            <div class="paragraph"> <?php echo $our_values_sub_res['our_values_sub_content']; ?></div>
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
<section class="Facts_and_Figures common-padd">
  <div class="container">
    <div class="row pdl-1 pdr-1">
      <h3 class="inner-heading text-light mb-4"><?php echo $facts_and_figure['facts_and_figure_title']; ?></h3>
      <div class="col-lg-12 mb-5 mobSpce">
        <div class="paragraph"> <?php echo $facts_and_figure['facts_and_figure_short_description']; ?> </div>
      </div>
      <?php

      $facts_and_figure_sub = $facts_and_figure['facts_and_figure_sub_items'];

      if ($facts_and_figure_sub) {
		  $i=0;

        foreach ($facts_and_figure_sub as $facts_and_figure_sub_res) {
			$i++;

      ?>
      <div class="col-lg-6">
        <div class="facts-grid">
          <h1 id="value<?php echo $i;?>" class="value"><?php echo $facts_and_figure_sub_res['figure']; ?><?php echo $facts_and_figure_sub_res['figure_suffix']; ?></h1>
          <div class="paragraph"><?php echo $facts_and_figure_sub_res['figure_content']; ?></div>
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

$display_people = get_field('display_people_section');

if($display_people == 'Yes')
{
	
$leadership_team = get_field('select_leadership_team');

if ($leadership_team) {

?>
<section class="peoples common-padd">
  <div class="container">
    <div class="row pdl-1 pdr-1">
      <div class="col-lg-12">
        <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"> <?php echo get_field('leadership_team_heading'); ?></h1>
      </div>
      <?php foreach ($leadership_team as $leadership_team_res) { ?>
      <div class="col-lg-3">
        <div class="peoples-grid  text-light mb-5">
          <div class="industries-img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($leadership_team_res->ID), 'full'); ?>" alt="img"> </div>
          <h4 class="mb-2 mt-3"><?php echo $leadership_team_res->post_title; ?></h4>
          <span class="designation "><?php echo get_field('designation', $leadership_team_res->ID); ?></span>
          <?php
		  if($leadership_team_res->post_content)
		  {
		  ?>
          <div class="paragraph mb-3 mt-3"><?php echo $leadership_team_res->post_content; ?> </div>
          <?php
		  }
		  ?>
           <a href="<?php echo get_field('linkedin_url', $home_people_res->ID); ?>" class="linkdin-link"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <?php

        }

        ?>
      <!--<div class="col-lg-12">
        <div class="flexW"> <a href="/our-people/" class="viewall">View All</a> </div>
      </div>-->
    </div>
  </div>
</section>
<?php

}
}

?>
<?php

get_footer();

?>
<script>
  // Function to animate the value
function animateValue(obj, start, end, duration, figure_suffix) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    const value = Math.floor(progress * (end - start) + start);
    obj.innerHTML = `${value}`+figure_suffix;
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

// PHP part to generate the animation script
<?php
 if ($facts_and_figure_sub) {
    $i = 0;
    foreach ($facts_and_figure_sub as $facts_and_figure_sub_res) {
        $i++;
       // $int = intval(preg_replace('/[^0-9]+/', '', $facts_and_figure_sub_res['figure']), 10);
        ?>
        document.addEventListener('DOMContentLoaded', function() {
          const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                animateValue(document.querySelector("#value<?php echo $i;?>"), 0, <?php echo $facts_and_figure_sub_res['figure'];?>, 1000, '<?php echo $facts_and_figure_sub_res['figure_suffix'];?>');
                observer.unobserve(entry.target); // Stop observing after animation starts
              }
            });
          }, { threshold: 0.1 });
          
          observer.observe(document.querySelector("#value<?php echo $i;?>"));
        });
        <?php
    }
 }
?>

</script>

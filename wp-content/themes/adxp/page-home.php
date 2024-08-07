<?php

/*Template Name: Home*/

get_header();

?>

<!--INSIGHT STARTS-->

<?php

$home_insights = get_field('select_insights');



?>

<section class="insights common-padd" id="insights_section">
  <div class="container">
    <div class="row">
      <?php 
		
		if ($home_insights) {
		foreach ($home_insights as $home_insights_res) {



          $insight_services = get_field('services', $home_insights_res->ID);

          $insight_industry = get_field('industry', $home_insights_res->ID);

          /*if ($insight_services[0]->post_title) {

            $insight_cat = $insight_services[0]->post_title;

          } else if ($insight_industry[0]->post_title) {

            $insight_cat = $insight_industry[0]->post_title;

          } else {

            $insight_cat = '';

          }*/



        ?>
      <div class="col-lg-6">
        <div class="insights-grD text-light d-flex flex-column mobl-vw">
          <div class="img-ins mb-3"> <a href="<?php echo get_permalink($home_insights_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_insights_res->ID), 'full'); ?>" alt="img"> </a></div>
          <span class="tags-list"><?php echo get_insight_tags($home_insights_res->ID); ?></span>
          <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($home_insights_res->ID); ?>"><?php echo $home_insights_res->post_title; ?></a></h2>
          <span><?php echo date('F d, Y', strtotime($home_insights_res->post_date)); ?></span> </div>
      </div>
      <?php

        }
		}
		else
		{
		
		$recentinsight_args = array(
		
		  'numberposts' => 4,
		
		  'post_type'   => 'post-insights',
		
		  'suppress_filters' => false,
		
		 
		
		);
		
		$recent_insights = get_posts($recentinsight_args);
		if ($recent_insights) {
			foreach ($recent_insights as $recent_insights_res) {
		
		?>
      <div class="col-lg-6">
        <div class="insights-grD text-light d-flex flex-column mobl-vw">
          <div class="img-ins mb-3"> <a href="<?php echo get_permalink($recent_insights_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_insights_res->ID), 'full'); ?>" alt="img"> </a></div>
          <span class="tags-list"><?php echo get_insight_tags($recent_insights_res->ID); ?></span>
          <h2 class="mt-2 mb-2"><a href="<?php echo get_permalink($recent_insights_res->ID); ?>"><?php echo $recent_insights_res->post_title; ?></a></h2>
          <span><?php echo date('F d, Y', strtotime($recent_insights_res->post_date)); ?></span> </div>
      </div>
      <?php
			}
		}
		}
		
		?>
      <div class="col-lg-12 mt-4"> <a class="text-light " href="<?php echo site_url(); ?>/insights/">Explore more insights <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a> </div>
    </div>
  </div>
</section>

<!--INSIGHT ENDS-->

<?php

$mission_section = get_field('mission_section');



?>
<section class="mission common-padd flexW pb-0 h-auto bor-0" id="mission_section">
  <div class="container">
    <h1 class="mission mb-4 text-light"><?php echo $mission_section['mission_title']; ?></h1>
  </div>
</section>

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
        <div class="service-itm"> <a href="<?php echo get_permalink($home_services_res->ID); ?>">
          <div class="ser_img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_services_res->ID), 'full'); ?>" alt="img"></div>
          </a>
          <div class="service-details"> <a href="<?php echo get_permalink($home_services_res->ID); ?>">
            <h4 class="mb-4"><?php echo $home_services_res->post_title; ?></h4>
            </a>
            <div class="service_hover">
              <div class="paragraph mb-3"><?php echo $home_services_res->post_content; ?> </div>
              <a class="text-light" href="<?php echo get_permalink($home_services_res->ID); ?>">Learn more <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a> </div>
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

<section class="features common-padd flexW" id="features_section" style="background: linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url('<?php echo $mission_section['mission_background_image']['url']; ?>'); background-position: center;background-size: cover;">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row flexW">
      <div class="flexW flex-column w-70">
        <h1 class="main-tittle mb-3 text-light text-center mission-title"><?php echo $mission_section['mission_image_title']; ?></h1>
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
<section class="indistries common-padd cs-sec" id="industries_section">
  <div class="container">
    <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo get_field('industries_heading'); ?></h1>
    <div class="paragraph text-light sub-desc mb-5 f-20"><?php echo get_field('industries_short_description'); ?></div>
    <div class="row">
      <?php foreach ($home_industries as $home_industries_res) { ?>
      <div class="col-lg-4">
        <div class="industries-grid">
          <div class="industries-img"> <a href="<?php echo get_permalink($home_industries_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_industries_res->ID), 'full'); ?>" alt="img"> </a></div>
          <h4 class="mb-3 mt-4"><a href="<?php echo get_permalink($home_industries_res->ID); ?>"><?php echo $home_industries_res->post_title; ?></a></h4>
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
<?php
$cities_block = get_field('cities_block');
$left_block = $cities_block['left_block'];
$right_block = $cities_block['right_block'];

?>

<!--CONTACT US STARTS-->
<section class="contact-us-wrappeR common-padd">
  <div class="container">
    <h1 class="main-tittle mb-5 text-light d-block"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"> <?php echo $cities_block['heading'];?></h1>
    <div class="paragraph text-light sub-desc mb-5 f-20"><?php echo $cities_block['description'];?></div>
    <div class="row mt-4">
      <div class="col-lg-3">
        <ul class="list-itm-wraP">
          <?php 
			if($left_block['cities'])
			{
				$i =0;
				foreach($left_block['cities'] as $cites)
				{
					$i++;
			?>
          <li> <a data-bs-toggle="offcanvas" href="#contact<?php echo $i;?>" role="button" aria-controls="offcanvasExample">
            <div class="location-WrappR">
              <div class="d-flex type"> <span><?php echo $cites['sub_heading'];?></span> <img class="head-arrowC" src="<?php echo $cites['image']['url'];?>" alt="img-icon"> </div>
              <h3><?php echo $cites['heading'];?></h3>
              <div class="paragraph"> <?php echo $cites['description'];?> </div>
            </div>
            </a> </li>
          <div class="offcanvas offcanvas-end"  tabindex="-1" id="contact<?php echo $i;?>" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <button type="button" class=" text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="offcanvas-body"> <?php echo $cites['embed_iframe'];?> </div>
          </div>
          <?php
				}
			}
			?>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="contact-map-cu">
          <h6><?php echo $right_block['right_description'];?></h6>
          <div class="main-map wrp0vc"> <img class="head-arrowC" src="<?php echo $right_block['map_image']['url'];?>" alt="img-icon">
            <div class="second-place map-main-loc">
              <div class="badge-cons">
                <h3>2nd</h3>
                <span id="second_figure"><?php echo $right_block['second_figure'];?></span> </div>
              <span class="country-maps" ><?php echo $right_block['second_title'];?></span> </div>
            <div class="fourth-place map-main-loc">
              <div class="badge-cons">
                <h3>4th</h3>
                <span id="fourth_figure"><?php echo $right_block['fourth_figure'];?></span> </div>
              <span class="country-maps" ><?php echo $right_block['fourth_title'];?></span> </div>
            <div class="fist-place map-main-loc">
              <div class="badge-cons">
                <h3>1st</h3>
                <span id="first_figure"><?php echo $right_block['first_figure'];?></span> </div>
              <span class="country-maps" ><?php echo $right_block['first_title'];?></span> </div>
            <div class="third-place map-main-loc">
              <div class="badge-cons">
                <h3>3rd</h3>
                <span id="third_figure"><?php echo $right_block['third_figure'];?></span> </div>
              <span class="country-maps" ><?php echo $right_block['third_title'];?></span> </div>
          </div>
          <div class="paragraph"> <?php echo $right_block['source_description'];?> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--CONTACT US END--> 

<!--DIGITAL CONSULTING STARTS-->

<?php

$digital_consulting = get_field('digital_consulting_section');

?>
<section class="digital-portal common-padd dig-home" id="digita_portal_section">
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-7 col-md-7 imgsz">
        <h1 class="main-tittle mb-5 text-light digital-head dig-nw"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo $digital_consulting['digital_consulting_heading']; ?></h1>
        <div class="paragraph text-light"><?php echo $digital_consulting['digital_consulting_description']; ?></div>
        <?php

        if ($digital_consulting['digital_consulting_link_text']) {

        ?>
        <a class="text-light" href="<?php echo $digital_consulting['digital_consulting_link_url']; ?>"><?php echo $digital_consulting['digital_consulting_link_text']; ?> <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a>
        <?php

        }

        ?>
      </div>
      <div class="col-lg-5 col-md-5 dc-img">
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
$display_people = get_field('display_people_section');

if($display_people == 'Yes')
{

$home_people = get_field('select_people');

if ($home_people) {

?>
<section class="peoples common-padd" id="peoples_section">
  <div class="container">
    <h1 class="main-tittle mb-5 text-light hme"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"> <?php echo get_field('people_heading'); ?></h1>
    <div class="row">
      <?php foreach ($home_people as $home_people_res) { ?>
      <div class="col-lg-3">
        <div class="peoples-grid  text-light mb-5">
          <div class="industries-img"> <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($home_people_res->ID), 'full'); ?>" alt="img"> </div>
          <h4 class="mb-2 mt-3"><?php echo $home_people_res->post_title; ?></h4>
          <span class="designation "><?php echo get_field('designation', $home_people_res->ID); ?></span>
          <?php
		  if($home_people_res->post_content)
		  {
		  ?>
          <div class="paragraph mb-3 mt-3"><?php echo $home_people_res->post_content; ?></div>
          <?php
		  }
		  ?>
          <a href="<?php echo get_field('linkedin_url', $home_people_res->ID); ?>" class="linkdin-link"><i class="bi bi-linkedin"></i></a> </div>
      </div>
      <?php

        }

        ?>
      
      <!--    <div class="col-lg-12">

              <div class="flexW">

                  <!-- <a href="<?php echo site_url();?>/our-people/" class="viewall">View All</a> --> 
      
    </div>
  </div>
  -->
  </div>
  </div>
</section>
<?php

}
}

?>

<!--PEOPLE ENDS-->

<?php

get_footer();

?>

<script>
  // Function to animate the value
function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    const value = Math.floor(progress * (end - start) + start);
    obj.innerHTML = `${value}`;
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

// PHP part to generate the animation script
document.addEventListener('DOMContentLoaded', function() {
  function animateValue(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      const currentValue = start + progress * (end - start);
      element.textContent = currentValue.toFixed(2); // Use toFixed(2) to display two decimal places
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  const figures = [
    { id: "#first_figure", value: <?php echo $right_block['first_figure'];?> },
    { id: "#second_figure", value: <?php echo $right_block['second_figure'];?> },
    { id: "#third_figure", value: <?php echo $right_block['third_figure'];?> },
    { id: "#fourth_figure", value: <?php echo $right_block['fourth_figure'];?> }
  ];

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const figure = figures.find(f => f.id === `#${entry.target.id}`);
        if (figure) {
          animateValue(entry.target, 0, figure.value, 1000);
          observer.unobserve(entry.target); // Stop observing after animation starts
        }
      }
    });
  }, { threshold: 0.1 });

  figures.forEach(figure => {
    const element = document.querySelector(figure.id);
    if (element) {
      observer.observe(element);
    }
  });
});    

</script>


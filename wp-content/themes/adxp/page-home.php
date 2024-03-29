<?php
/*Template Name: Home*/
get_header();

//echo banner_image();

//echo banner_title();

//echo banner_content();
?>

<section class="insights common-padd" id="insights_section" >
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="insights-grD text-light d-flex flex-column">
          <div class="img-ins mb-3"> <img src="<?php echo get_template_directory_uri();?>/assets/img/abt1.webp" alt="img"> </div>
          <span>Mobility and Transport</span>
          <h2 class="mt-2 mb-2">Translating your digital agenda into reality</h2>
          <div class="paragraph mb-3">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </div>
          <span>Feb 28, 2024</span> </div>
      </div>
      <div class="col-lg-6">
        <div class="insights-grD text-light d-flex flex-column">
          <div class="img-ins mb-3"> <img src="<?php echo get_template_directory_uri();?>/assets/img/abt2.webp" alt="img"> </div>
          <span>Mobility and Transport</span>
          <h2 class="mt-2 mb-2">Translating your digital agenda into reality</h2>
          <div class="paragraph mb-3" >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </div>
          <span>Feb 28, 2024</span> </div>
      </div>
      <div class="col-lg-12 mt-4"> <a class="text-light " href="#">Explore more insights <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrowR.svg" alt="img"> </a> </div>
    </div>
  </div>
</section>

<!--SERVICES SECTION STARTS-->
<?php
$home_services = get_field('select_services');
if($home_services)
{
?>
<section class="service common-padd" id="service_section">
  <div class="container">
    <div class="row">
      <h1 class="main-tittle mb-5 text-light" ><img class="head-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow.svg" alt="img-icon" > Our <i>Services</i></h1>
      <div class="service-main d-flex justify-content-between g-2">
        <?php foreach( $home_services as $home_services_res ){?>
        <div class="service-itm">
          <div class="ser_img"> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($home_services_res->ID), 'full' );?>" alt="img"> </div>
          <div class="service-details">
            <h4 class="mb-4" ><?php echo $home_services_res->post_title;?></h4>
            <div class="service_hover">
              <div class="paragraph mb-3" ><?php echo $home_services_res->post_content;?> </div>
              <a class="text-light" href="<?php echo get_permalink( $home_services_res->ID );?>">Learn more <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrowR.svg" alt="img"> </a> </div>
          </div>
        </div>
        <?php }?>
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
    <div class="row"> <span class="upper-heading text-light" >OUR MISSION</span>
      <h1 class="mission mb-5 text-light"><?php echo $mission_section['mission_title'];?></h1>
    </div>
  </div>
</section>
<section class="features common-padd flexW" id="features_section"  style="background: linear-gradient(0deg, rgb(0 0 0 / 50%), rgb(0 0 0 / 50%)), url('<?php echo $mission_section['mission_background_image']['url'];?>');">
  <div class="container">
    <div class="row flexW">
      <div class="flexW flex-column w-70">
        <h1 class="main-tittle mb-3 text-light text-center"><?php echo $mission_section['mission_image_title'];?></h1>
        <div class="paragraph text-light text-center" ><?php echo $mission_section['mission_image_description'];?></div>
      </div>
    </div>
  </div>
</section>

<!--MISSION ENDS-->

<!--INDUSTRIES STARTS-->
<?php
$home_industries = get_field('select_industries');
if($home_industries)
{
?>
<section class="indistries common-padd" id="industries_section">
  <div class="container">
    <h1 class="main-tittle mb-5 text-light" ><img class="head-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow.svg" alt="img-icon" ><i>Industries</i> we serve</h1>
    <div class="row">
      <?php foreach( $home_industries as $home_industries_res ){?>
      <div class="col-lg-4">
        <div class="industries-grid">
          <div class="industries-img"> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($home_industries_res->ID), 'full' );?>" alt="img"> </div>
          <h4 class="mb-3 mt-4" ><?php echo $home_industries_res->post_title;?></h4>
          <div class="paragraph" ><?php echo $home_industries_res->post_content;?></div>
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

<section class="digital-portal common-padd" id="digita_portal_section">
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-6">
        <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow.svg" alt="img-icon" >ADXP Digital Consulting <i>Portal</i></h1>
        <div class="paragraph text-light" >Our digital consulting portal is seamlessly designed to allow organizations to leverage our tailored tools and resources to enhance their performance.</div>
        <ul class="text-light my-5" >
          <li>Conduct Maturity Assessments</li>
          <li>Obtain Advice from our Consultants</li>
          <li>Gain Access to our Resources</li>
        </ul>
        <a class="text-light" href="#">Seek Advice from our experts <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrowR.svg" alt="img"> </a> </div>
      <div class="col-lg-6 dc-img">
        <div class="dc-portal"> <img src="<?php echo get_template_directory_uri();?>/assets/img/dcportal.webp" alt="img"> </div>
      </div>
    </div>
  </div>
</section>

<!--PEOPLE STARTS-->

<?php
$home_people = get_field('select_people');
if($home_people)
{
?>
<section class="peoples common-padd" id="peoples_section">
  <div class="container">
    <h1 class="main-tittle mb-5 text-light"><img class="head-arrow" src="<?php echo get_template_directory_uri();?>/assets/img/arrow.svg" alt="img-icon" > Our <i> People</i></h1>
    <div class="row">
      <?php foreach( $home_people as $home_people_res ){?>
      <div class="col-lg-3">
        <div class="peoples-grid  text-light mb-5">
          <div class="industries-img"> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($home_people_res->ID), 'full' );?>" alt="img"> </div>
          <h4 class="mb-2 mt-3" ><?php echo $home_people_res->post_title;?></h4>
          <span class="designation " ><?php echo get_field('designation',$home_people_res->ID);?></span>
          <div class="paragraph mb-3 mt-3" ><?php echo $home_people_res->post_content;?></div>
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

<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

if (is_singular('post-insights')) {
  $section_cls = 'inner-detail detail_page';
  $attr = '';
} else if (is_single() || is_page('insights')) {
  $section_cls = 'detail_page';
  $attr = '';
} else if ( is_page('about')) {
  $section_cls = 'detail_page about-banner ';
  $attr = '';
} else if ( is_page('digital-advisor')) {
  $section_cls = 'industries Digital_A';
  $attr = 'id="banner_section" style="background: url(' . banner_image() . ');  background-position: center;background-size: cover; background-repeat: no-repeat;"';


}else {
  $section_cls = '';
  $attr = 'id="banner_section" style="background: url(' . banner_image() . ');  background-position: center;background-size: cover;"';
}

$banner_video = get_field('banner_video', get_the_ID());
if ($banner_video['url']) {
?>

<section class="banner-vw" id="banner_section">
<video class="video-banner" autoplay muted loop>
  <source src="<?php echo $banner_video['url']; ?>" type="video/mp4">
  Your browser does not support the video tag. </video>
<?php
} else {
  ?>
<section class="banner-vw <?php echo $section_cls; ?>" <?php echo $attr; ?>>
  <?php
  }
    ?>
  <header id="myHeader">
    <div class="container">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid p-0 m-0">
          <?php get_template_part('template-parts/header/site-branding'); ?>
          <?php get_template_part('template-parts/header/site-nav'); ?>
        </div>
      </nav>
    </div>
  </header>
  <section class="mobile-header p-2" id="dynamic">
    <div class="container">
      <div class="row">
        <div class="mob-head d-flex justify-content-between align-items-center">
          <button class="mobile-menu-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> <i class="bi bi-list"></i> </button>
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $image[0]; ?>" alt="logo"> </a>
          <button class="Search" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>
  </section>
  
  <!--BANNER STARTS-->
  
  <?php

    if (!is_singular('post-insights')) {

      if (is_single() || is_page('insights')) {
        $title = banner_title();
        $result = explode(" ", $title, 2);
        $post_type = get_post_type(get_the_ID());
        if ($post_type == 'post-industries') {
          $type = 'INDUSTRY';
        } else if ($post_type == 'post-services') {
          $type = 'SERVICES';
        } else {
          $type = '';
        }
    ?>
  <div class="container b_contents-main flexW inner-banner-content">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center">
        <div class="flex-column">
          <?php if ($type) {
                ?>
          <span class="upper-heading text-light"><?php echo $type; ?></span>
          <?php
                }
                ?>
          <?php
                if (is_page('insights')) {
                ?>
          <h1 class="main-tittle mb-5 text-light mt-4 insight-head"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><?php echo $title; ?></h1>
          <div class="paragraph"> <?php echo banner_content(); ?> </div>
          <?php
                } else {
                ?>
          <h1 class="main-tittle mb-5 text-light mt-4"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"><i><?php echo $result[0]; ?></i> <?php echo $result[1]; ?> </h1>
          <?php
                }
                ?>
        </div>
      </div>
    </div>
  </div>
  <?php
	  }else if(is_page('about')){
	  ?>
  <div class="container b_contents-main flexW inner-banner-content pdl-1 pdr-1">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center">
        <div class="flex-column" > <span class="upper-heading text-light"><?php echo banner_title(); ?></span>
          <h1 class="main-tittle mb-5 text-light mt-4" ><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon" ><?php echo get_field('banner_headline'); ?></h1>
          <div class="paragraph"> <?php echo get_field('banner_short_description'); ?> </div>
        </div>
      </div>
    </div>
  </div>
  <?php
	  
	  
      } else {
      ?>
  <div class="container b_contents-main flexW">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center">
        <div class="flexW flex-column">
          <h1 class="mb-4 text-center"><?php echo banner_title(); ?></h1>
          <div class="paragraph"><?php echo banner_content(); ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php
      }
    }
    ?>
  
  <!-- BANNER ENDS--> 
  
</section>

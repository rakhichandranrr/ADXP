<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */
 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

<section class="banner-vw" id="banner_section" style="background: url('<?php echo banner_image();?>');  background-position: center;background-size: cover;">
  <header id="myHeader">
    <div class="container">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid p-0 m-0">
          <?php get_template_part( 'template-parts/header/site-branding' ); ?>
          <?php get_template_part( 'template-parts/header/site-nav' ); ?>
        </div>
      </nav>
    </div>
  </header>
  <section class="mobile-header p-2" id="dynamic">
    <div class="container">
      <div class="row">
        <div class="mob-head d-flex justify-content-between align-items-center">
          <button class="mobile-menu-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> <i class="bi bi-list"></i> </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $image[0]; ?>" alt="logo" > </a>
          <button class="Search" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>
  </section>
  
  <!--BANNER STARTS-->
  
  <div class="container b_contents-main flexW">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center">
        <div class="flexW flex-column" >
          <h1 class="mb-4 text-center" ><?php echo banner_title();?></h1>
          <div class="paragraph" ><?php echo banner_content();?></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BANNER ENDS--> 
  
</section>

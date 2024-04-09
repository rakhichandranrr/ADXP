<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

?>

<section class="subscribe common-padd" id="subscribe_section">
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-6">
        <h1 class="main-tittle mb-5 text-light">Stay informed about the latest news and events.</h1>
      </div>
      <div class="col-lg-6">
        <div class="d-flex flex-column">
          <p>Receive monthly insights into the critical challenges confronting global businesses in today's demanding environment, delivered straight to your inbox.</p>
          <div class="subscrive-sec mt-4">
            <div class="form-group d-flex">

              <?php //echo do_shortcode(' [mailpoet_form id="1"]');
              ?>
              <input type="text" placeholder="Email address">
              <input type="submit" class="subscribe-btn" value="Subscribe">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="common-padd pb-0" id="footer_section">
  <div class="container">
    <div class="row pb-5">
      <div class="col-lg-6">
        <div class="company-details"> <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" alt="logo"> </a>
          <ul class="d-flex text-light my-4">
            <li class="me-3"> <a href="#"><i class="bi bi-instagram"></i></a> </li>
            <li class="me-3"> <a href="#"><i class="bi bi-twitter-x"></i></a> </li>
            <li class="me-3"> <a href="#"><i class="bi bi-linkedin"></i></a> </li>
          </ul>
          <a href="#" class="text-light"><i class="bi bi-envelope me-3"></i>sales@adxpconsult.com</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="usefull-links text-light d-flex justify-content-between">
          <ul>
            <li>
              <h3>Industries</h3>
            </li>
            <?php
            $ind_args = array(
              'numberposts' => -1,
              'post_type'   => 'post-industries',
			  'suppress_filters' => false,
              'order'       => 'ASC',
              'orderby'     => 'title'
            );
            $industries = get_posts($ind_args);
            if ($industries) {
              foreach ($industries as $industries_res) {
            ?>
                <li><a href="<?php echo get_permalink($industries_res->ID); ?>"><?php echo $industries_res->post_title; ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
          <ul>
            <li>
              <h3>Services</h3>
            </li>
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
            ?>
                <li><a href="<?php echo get_permalink($services_res->ID); ?>"><?php echo $services_res->post_title; ?></a></li>
            <?php
              }
            }
            ?>
          </ul>
          <ul>
            <li>
              <h3>About</h3>
            </li>
            <li><a href="<?php echo site_url(); ?>/careers/">Careers</a></li>
            <li><a href="<?php echo site_url(); ?>/contact/">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row py-4 copyright"> <span class="text-light">Copyright ©
        <?php echo date('Y'); ?>
        ADXP Consultancy. All rights reserved.</span><?php echo do_action('wpml_add_language_selector');?> </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
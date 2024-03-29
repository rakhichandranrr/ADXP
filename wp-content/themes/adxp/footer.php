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
<section class="subscribe common-padd" id="subscribe_section" >
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-6">
        <h1 class="main-tittle mb-5 text-light">Know about the latest news & events</h1>
      </div>
      <div class="col-lg-6">
        <div class="d-flex flex-column">
          <p>Our perspectives on critical issues global businesses face in a challenging environment,delivered to your inbox monthly.</p>
          <div class="subscrive-sec mt-4">
            <div class="form-group d-flex">
              <input type="text" placeholder="Email address">
              <input type="submit" class="subscribe-btn" value="Subscribe" >
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
        <div class="company-details"> <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.webp" alt="logo" > </a>
          <ul class="d-flex text-light my-4" >
            <li class="me-3"> <a href="#"><i class="bi bi-instagram"></i></a> </li>
            <li class="me-3"> <a href="#"><i class="bi bi-twitter-x"></i></a> </li>
            <li class="me-3"> <a href="#"><i class="bi bi-linkedin"></i></a> </li>
          </ul>
          <a href="#" class="text-light" ><i class="bi bi-envelope me-3"></i>sales@adxpconsult.com</a> </div>
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
            'order'       => 'ASC',
            'orderby'     => 'title'
        );
        $industries = get_posts($ind_args);
		if ($industries){
		?>
            <li><a href="<?php echo get_permalink( $industries_res->ID );?>" ><?php echo $industries_res->post_title;?></a></li>
            <?php
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
				'orderby'     => 'title'
			);
			$services = get_posts($services_args);
			
			if ($services){
				foreach ($services as $services_res)
				{
			?>
            <li><a href="<?php echo get_permalink( $services_res->ID );?>" ><?php echo $services_res->post_title;?></a></li>
            <?php
				}
			}
			?>
          </ul>
          <ul>
            <li>
              <h3>About</h3>
            </li>
            <li><a href="#" >Careers</a></li>
            <li><a href="#" >Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row py-4 copyright"> <span class="text-light" >Copyright © 2024 ADXP Consultancy. All rights reserved.</span> </div>
  </div>
</footer>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <button type="button" class="menu-close" data-bs-dismiss="offcanvas" ><i class="bi bi-x-lg"></i></button>
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.webp" alt="logo" > </a> </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Services </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Industries </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item"> <a class="nav-link" href="#">Insights</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Digital Advisor</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Careers</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Insights</a> </li>
    </ul>
  </div>
</div>
<?php wp_footer(); ?>
</body></html>
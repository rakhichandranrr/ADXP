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

$custom_logo_id = get_theme_mod('custom_logo');

$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>

<section class="subscribe common-padd" id="subscribe_section">
  <div class="container">
    <div class="row flexW">
      <div class="col-lg-6">
        <h1 class="main-tittle mb-5 text-light">
          <?php the_field('newsletter_heading', 'option'); ?>
        </h1>
      </div>
      <div class="col-lg-6">
        <div class="d-flex flex-column">
          <p>
            <?php the_field('newsletter_description', 'option'); ?>
          </p>
          <div class="subscrive-sec mt-4">
            <div class="form-group d-flex"> <?php //echo do_shortcode(' [mailpoet_form id="1"]'); ?><?php echo do_shortcode(' [contact-form-7 id="5a2a803" title="Newsletter"]'); ?> </div>
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
        <div class="company-details"> <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo $image[0]; ?>" alt="logo"> </a>
          <ul class="d-flex text-light my-4">
            <li class="me-3"> <a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><i class="bi bi-instagram"></i></a> </li>
            <li class="me-3"> <a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="bi bi-twitter-x"></i></a> </li>
            <li class="me-3"> <a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank"><i class="bi bi-linkedin"></i></a> </li>
          </ul>
          <a href="mailto:<?php the_field('email_address', 'option'); ?>" class="text-light"><i class="bi bi-envelope me-3"></i>
          <?php the_field('email_address', 'option'); ?>
          </a> </div>
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

              'suppress_filters' => false,

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
    <div class="row py-4 copyright"> <span class="text-light">Copyright © <?php echo date('Y'); ?> ADXP Consultancy. All rights reserved.</span>
      <?php //echo do_action('wpml_add_language_selector'); ?>
    </div>
  </div>
</footer>

<!--MOBILE MENU STARTS-->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <button type="button" class="menu-close" data-bs-dismiss="offcanvas"><i class="bi bi-x-lg"></i></button>
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="logo"> </a> </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php

      $menu_items = wp_get_menu_array('Mobile Menu');

      foreach ($menu_items as $item) {

      ?>
      <?php if (!empty($item['children'])) { ?>
      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo $item['title']; ?> </a>
        <div class="dropdown-menu mega-menu" aria-labelledby="megaMenuDropdown">
          <div class="container">
            <div class="row text-light">
              <div class="col-md-8 usefull-links mega-link">
                <ul>
                  <li>
                    <div class="all-list mobile-only"><a href="<?php echo $item['url']; ?>" class="">View All <?php echo $item['title']; ?></a></div>
                  </li>
                  <?php foreach ($item['children'] as $child) { ?>
                  <li><a href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a></li>
                  <?php

                      }

                      ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php

        } else {



        ?>
      <li class="nav-item"> <a class="nav-link" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?> </a> </li>
      <?php

        }
      }

      ?>
    </ul>
  </div>
</div>

<!--MOBILE MENU ENDS-->

<div class="searcharea">
  <div class="search-hrader position-relative container"> <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="logo"> </a>
    <div><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
    <button class="closearch" id="close-button"><i class="bi bi-x" id="close-icon"></i></button>
  </div>
</div>
<?php wp_footer(); ?>
</body></html><script>
function search_default(val)
{
	$('.search_input').val(val);
	$('#searchform').submit();
}


$('.mailpoet_submit').click(function(e) {
 
 $('.mailpoet_message').css('display','block'); 
 $('.mailpoet_validate_success').append('<span class="msg-close" onclick="msg_close();"><i class="bi bi-x"></i></span>');  
	
	
});

function msg_close()
{
	$('.mailpoet_message').css('display','none'); 
	$('.mailpoet_paragraph').css('visibility','visible');
	
}

document.addEventListener('wpcf7submit', function(event) {
  setTimeout(function() {
        jQuery('form.wpcf7-form').removeClass('sent');
        jQuery('form.wpcf7-form').removeClass('failed');
        jQuery('form.wpcf7-form').addClass('init');
  }, 7000);

}, false);


/*$(document).on('change','.wpcf7-drag-n-drop-file' , function(){ 
  console.log("function");
  $('.dnd-icon-remove').html('<img src="<?php// echo get_template_directory_uri(); ?>/assets/img/Vector.svg"> <span class="remo-text">Remove</span>');
});
*/
</script>
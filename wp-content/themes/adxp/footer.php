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
            <div class="form-group d-flex">
            <!--NEWSLETTER CODE FROM ZOHO STARTS-->

            <script type="text/javascript" src="https://kifr-cmpzourl.maillist-manage.com/js/optin.min.js" onload="setupSF('sf3zb3c0161beafc1b3a78502b6863822d7475ed08e3e3f1be42ee7be3b1896ed9f3','ZCFORMVIEW',false,'light',false,'0')"></script><script type="text/javascript">function runOnFormSubmit_sf3zb3c0161beafc1b3a78502b6863822d7475ed08e3e3f1be42ee7be3b1896ed9f3(th){/*Before submit, if you want to trigger your event, "include your code here"*/};</script><style>#customForm p{display:inline;}.quick_form_12_css * { -webkit-box-sizing: border-box !important; -moz-box-sizing: border-box !important; box-sizing: border-box !important; overflow-wrap: break-word }@media only screen and (max-width: 600px) {.quick_form_12_css[name="SIGNUP_BODY"] { width: 100% !important; min-width: 100% !important; margin: 0px auto !important; padding: 0px !important } .SIGNUP_FLD { width: 90% !important; margin: 10px 5% !important; padding: 0px !important } .SIGNUP_FLD input { margin: 0 !important; border-radius: 25px !important } }</style><div id="sf3zb3c0161beafc1b3a78502b6863822d7475ed08e3e3f1be42ee7be3b1896ed9f3" data-type="signupform" style="opacity: 1;"><div id="customForm"><div class="quick_form_12_css" style="background-color: rgb(23, 44, 59); z-index: 2; font-family: Arial; border-width: 1px; border-color: rgb(235, 235, 235); overflow: hidden; border-style: none; width: 603px" name="SIGNUP_BODY"><div><div style="font-size: 14px; font-family: &quot;Arial&quot;; font-weight: bold; color: rgb(166, 166, 166); text-align: left; padding: 10px 15px 5px; width: 100%; display: block" id="SIGNUP_HEADING"></div><div style="position:relative;"><div id="Zc_SignupSuccess" style="display:none;position:absolute;margin-left:4%;width:90%;background-color: white; padding: 3px; border: 3px solid rgb(194, 225, 154);  margin-top: 10px;margin-bottom:10px;word-break:break-all"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tbody><tr><td width="10%"><img class="successicon" src="https://kifr-cmpzourl.maillist-manage.com/images/challangeiconenable.jpg" align="absmiddle"></td><td><span id="signupSuccessMsg" style="color: rgb(73, 140, 132); font-family: sans-serif; font-size: 14px;word-break:break-word">&nbsp;&nbsp;Thank you for Signing Up</span></td></tr></tbody></table></div></div><form method="POST" id="zcampaignOptinForm" style="margin: 0px; width: 100%; padding: 0px 15px" action="https://kifr-cmpzourl.maillist-manage.com/weboptin.zc" target="_zcSignup"><div style="background-color: rgb(255, 235, 232); padding: 10px; color: rgb(210, 0, 0); font-size: 11px; margin: 20px 10px 0px; border: 1px solid rgb(255, 217, 211); opacity: 1; display: none" id="errorMsgDiv">Please correct the marked field(s) below.</div><div style="position: relative; margin: 10px 0px 15px; display: inline-block; height: 48px; width: 422px" class="SIGNUP_FLD"><input type="text" style="border: 1px solid #fff!important; border-radius: 8px; width: 100%; height: 100%; z-index: 4;  padding: 5px 10px; ma color: rgb(255, 255, 255); text-align: left; font-family: Arial; background-color: rgb(46, 65, 79); box-sizing: border-box; font-size: 13px" placeholder="Email Address" changeitem="SIGNUP_FORM_FIELD" name="CONTACT_EMAIL" id="EMBED_FORM_EMAIL_LABEL"></div><div style="position: relative; margin: 0px 0px 15px; text-align: left; display: inline-block; height: 48px; width: 103px" class="SIGNUP_FLD"><input type="button" style="text-align: center; width: 100%; height: 100%; z-index: 5; border: 2px rgb(255, 255, 255); color: rgb(255, 255, 255); cursor: pointer;  font-size: 14px; background-color: rgb(23, 44, 59); margin: 0px 0px 0px 5px; border-radius: 8px" name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" value="Join Now"></div><input type="hidden" id="fieldBorder" value=""><input type="hidden" id="submitType" name="submitType" value="optinCustomView"><input type="hidden" id="emailReportId" name="emailReportId" value=""><input type="hidden" id="formType" name="formType" value="QuickForm"><input type="hidden" name="zx" id="cmpZuid" value="132dc2d53"><input type="hidden" name="zcvers" value="3.0"><input type="hidden" name="oldListIds" id="allCheckedListIds" value=""><input type="hidden" id="mode" name="mode" value="OptinCreateView"><input type="hidden" id="zcld" name="zcld" value="1122b9080e7c6e86f"><input type="hidden" id="zctd" name="zctd" value="1122b9080e7c6e7a9"><input type="hidden" id="document_domain" value=""><input type="hidden" id="zc_Url" value="kifr-cmpzourl.maillist-manage.com"><input type="hidden" id="new_optin_response_in" value="2"><input type="hidden" id="duplicate_optin_response_in" value="2"><input type="hidden" name="zc_trackCode" id="zc_trackCode" value="ZCFORMVIEW"><input type="hidden" id="zc_formIx" name="zc_formIx" value="3zb3c0161beafc1b3a78502b6863822d7475ed08e3e3f1be42ee7be3b1896ed9f3"><input type="hidden" id="viewFrom" value="URL_ACTION"><span style="display: none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span></form></div></div></div><img src="https://kifr-cmpzourl.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;"></div><input type="hidden" id="signupFormType" value="QuickForm_Horizontal"><div id="zcOptinOverLay" oncontextmenu="return false" style="display:none;text-align: center; background-color: rgb(0, 0, 0); opacity: 0.5; z-index: 100; position: fixed; width: 100%; top: 0px; left: 0px; height: 988px;"></div><div id="zcOptinSuccessPopup" style="display:none;z-index: 9999;width: 800px; height: 40%;top: 84px;position: fixed; left: 26%;background-color: #FFFFFF;border-color: #E6E6E6; border-style: solid; border-width: 1px;  box-shadow: 0 1px 10px #424242;padding: 35px;"><span style="position: absolute;top: -16px;right:-14px;z-index:99999;cursor: pointer;" id="closeSuccess"><img src="https://kifr-cmpzourl.maillist-manage.com/images/videoclose.png"></span><div id="zcOptinSuccessPanel"></div></div>
            
            <!--NEWSLETTER CODE FROM ZOHO ENDS-->
            
            
            
            
          
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
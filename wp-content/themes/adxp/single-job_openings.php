<?php
get_header();
global $post;
$post_id = get_the_ID();
$job_res = get_post($post_id);
?>
<section class="ins-inner-detail  common-padd bg-light " id="Overview">
           <div class="container b_contents-main flexW inner-banner-content">
            <div class="row">
               <div class="banner-content d-flex flex-column align-items-center justify-content-center extra-padd">
                  <div class="flex-column" >
                     <h1 class="main-tittle ins-tittle  mb-5 text-light mt-4" ><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon" >   <?php echo $job_res->post_title;?></h1>
                      <div class="loc-date f-column">
                          <div class="paragraph">
                             <i class="bi bi-geo-alt"></i> <?php echo get_field('job_location',$job_res->ID);?>
                          </div>
                          <div class="paragraph">
                              <i class="bi bi-calendar"></i> <?php echo get_field('job_type',$job_res->ID);?>
                          </div>
                      </div>
                      <div class="loc-date">
                          <?php $curr_categories = get_the_category($job_res->ID);
			 if ( ! empty( $curr_categories ) ) {
				 foreach($curr_categories as $cat_res)
				 {
					 ?>
                <button class="sec-button" ><?php echo $cat_res->name ;?></button>
                <?php
				 }
			 }
			 ?>
                      </div>
                      <div class="">
                       <div class="con-list">
                           <h4><?php echo get_field('job_description_heading',$job_res->ID);?></h4>
                           <div class="paragraph"><?php echo get_field('job_description',$job_res->ID);?>
                           </div>
                       </div>
                       <div class="con-list">
                           <h4><?php echo get_field('job_qualification_heading',$job_res->ID);?></h4>
                           <?php echo get_field('job_qualification',$job_res->ID);?>
                       </div>
                   </div>
                  </div>
               </div>
            </div>
         </div>
        </section>
        
        <section class="common-padd bg-light Applyjob pdl-1 pdr-1 pt-0" id="Applyjob">
         <div class="container">
            
            <div class="row custom-grid-mobile">
                <div class="col-lg-12">
                    <h3 class="inner-heading mb-4" > <?php echo get_field('apply_for_heading',$job_res->ID);?></h3>
                    <div class="paragraph">
                         <?php echo get_field('apply_for_description',$job_res->ID);?>
                    </div>
                </div>
            </div>
             <?php echo do_shortcode('[contact-form-7 id="c1955e9" title="Careers"]');?>
         </div>
      </section>
<?php
get_footer();
?>
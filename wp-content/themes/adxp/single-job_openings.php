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
             <div class="row">
                 <div class="col-lg-6">
                     <div class="form-group">
                         <input type="text" class="form-controlnew" placeholder="Full name">
                         
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="form-group">
                         <input type="text" class="form-controlnew" placeholder="Email">
                     </div>
                 </div>
                 <div class="col-lg-12">
                     <div class="form-group">
                         <div class="position-relative">
                             <select class="custom-select country-code position-absolute">
                                <option value="+1">+1 (US)</option>
                                <option value="+44">+44 (UK)</option>
                                <option value="+91">+91 (India)</option>
                                <!-- Add more options as needed -->
                            </select>
                        <input type="text" class="form-controlnew" id="countryInput" placeholder="Mobile Number">
                         </div>
                    </div>
                 </div>
                 <div class="col-lg-12">
                     <label>Upload CV</label>
                     <div class="form-group" id="drop-area">
                        <input type="file" id="fileElem" multiple class="file" accept="image/*" onchange="handleFiles(this.files)">
                        <label for="fileElem" class="drop-label">Drag & Drop here to upload…</label>
                         <p><i>PDF 5MB max</i></p>
                    </div>
                 </div>
                  <div class="col-lg-12">
                      <button class="btn adxp-btn mw-200" >Apply</button>
                 </div>
             </div>
         </div>
      </section>
<?php
get_footer();
?>
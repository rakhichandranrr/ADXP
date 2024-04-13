<?php
/*Template Name: Careers*/
get_header();

$what_we_offer = get_field('what_we_offer');
$work_culture = get_field('work_culture');
?>

<section class="p-3 submenu" >
  <div class="container">
    <ul class="submenu text-light d-flex" >
      <li><a href="#Overview">What we offer</a></li>
      <li><a href="#Services">Work Culture</a></li>
      <li><a href="#Results">Career Development</a></li>
      <li><a href="#People">Job Openings</a></li>
    </ul>
  </div>
</section>
<?php
if($what_we_offer)
{
?>
<section class="innovation common-padd bg-light " id="Overview">
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-7">
        <h3 class="inner-heading" ><?php echo $what_we_offer['what_we_offer_title'];?></h3>
        <div class="paragraph"> <?php echo $what_we_offer['what_we_offer_content'];?> </div>
      </div>
      <div class="col-lg-5"> <img src="<?php echo $what_we_offer['what_we_offer_title']['url'];?>" alt="img"> </div>
    </div>
  </div>
</section>

<?php
}
if($work_culture)
{
?>
<section class="ind-services common-padd grd-bg" id="Services">
  <div class="container">
    <div class="row ">
      <div class="col-lg-12 mb-5">
        <h3 class="inner-heading mb-5 text-light"><?php echo $work_culture['work_culture_title'];?></h3>
        <div class="paragraph "> <?php echo $work_culture['work_culture_content'];?> </div>
      </div>
      
      <?php
	  if($work_culture['work_culture_sub_content'])
	  {
	    foreach($work_culture['work_culture_sub_content'] as $work_culture_sub_content)
		{
	 ?>
      
      <div class="col-lg-3">
        <div class="values-grid keyareas wc"> 
        <?php
		if($work_culture_sub_content['work_culture_sub_icon']['url'])
		{
		?>
        <img src="<?php echo $work_culture_sub_content['work_culture_sub_icon']['url'];?>" alt="img">
        <?php
		}
		?>
          <div>
            <h5 class="kyhd text-light"><?php echo $work_culture_sub_content['work_culture_sub_title'];?></h5>
            <div class="paragraph "> <?php echo $work_culture_sub_content['work_culture_sub_content'];?></div>
          </div>
        </div>
      </div>
      <?php
		}
	  }
		?>
      
      
      
    </div>
  </div>
</section>

<?php
}
?>
<section class="career-dv common-padd" id="Results">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <h3 class="inner-heading mb-5 text-light">Career Development</h3>
        <div class="paragraph "> ADXP provides a progressive career development path. Consultants that join our team with exceptional skills and proven track record of accomplishments are rewarded accordingly, and promoted within a relatively short period of time. </div>
      </div>
      <div class="col-lg-12 m-0 p-0">
        <div class="d-flex align-items-end timeline">
          <div class="ca-d">
            <div class="arrow-line">
              <div class="position-relative" ></div>
            </div>
            <div class="career-grid itmc1">
              <button class="border levels" >Level 1</button>
              <h5 class="kyhd text-light">Analyst</h5>
              <div class="paragraph text-light"> Consultants own project specific work streams and are responsible for structuring problems, analyzing client issues </div>
            </div>
          </div>
          <div class="ca-d">
            <div class="arrow-line">
              <div class="position-relative" ></div>
            </div>
            <div class="career-grid itmc2">
              <button class="border levels" >Level 2</button>
              <h5 class="kyhd text-light">Consultants</h5>
              <div class="paragraph text-light"> Managers supervise, coach and coordinate working group activities. They establish contact with clients and nurture relationships to build trust and value. </div>
            </div>
          </div>
          <div class="ca-d">
            <div class="arrow-line">
              <div class="position-relative" ></div>
            </div>
            <div class="career-grid itmc3">
              <button class="border levels" >Level 3</button>
              <h5 class="kyhd text-light">Managers</h5>
              <div class="paragraph text-light"> Principals have distinguished themselves as key players and industry specialists. They manage bigger teams and grow ADXP portfolio of clients. </div>
            </div>
          </div>
          <div class="ca-d">
            <div class="arrow-line">
              <div class="position-relative" ></div>
            </div>
            <div class="career-grid itmc4">
              <button class="border levels" >Level 4</button>
              <h5 class="kyhd text-light">Principals</h5>
              <div class="paragraph text-light"> Principals have distinguished themselves as key players and industry specialists. They manage bigger teams and grow ADXP portfolio of clients. </div>
            </div>
          </div>
          <div class="ca-d">
            <div class="career-grid itmc5">
              <button class="border levels" >Level 5</button>
              <h5 class="kyhd  text-light">Partners</h5>
              <div class="paragraph"> Partners are responsible for taking strategic decisions concerning ADXP, budget planning and realization of ADXP strategic and financial plans. </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="job section-apply inner common-padd bg-light" id="People">
  <div class="container">
  <h1 class="inner-headingmb-4" >Job Openings</h1>
  <div class="paragraph mb-3 mt-3 dark-para" >Lorem ipsum dolor sit amet consectetur. Luctus lorem pharetra massa vitae. Morbi posuere consectetur leo egestas aliquet sit lorem ac. Dui morbi pulvinar vulputate lobortis non posuere. </div>
  <div class="row">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab1" data-bs-toggle="tab" data-bs-target="#tab1-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Management Consulting</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab2" data-bs-toggle="tab" data-bs-target="#tab2-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Analytics, Data & Research</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab3" data-bs-toggle="tab" data-bs-target="#tab3-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Business Operations</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab4" data-bs-toggle="tab" data-bs-target="#tab4-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Design</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab5" data-bs-toggle="tab" data-bs-target="#tab5-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Marketing</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab6" data-bs-toggle="tab" data-bs-target="#tab6-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Product Management</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab7" data-bs-toggle="tab" data-bs-target="#tab7-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Human Resources</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="tab1-pane" role="tabpanel" aria-labelledby="tab1" tabindex="0">
        <div class="jobs-wrapper">
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
          <div class="job-itm">
            <div class=" grid-job-wrp">
              <h5 class="main-tittle ins-tittle  mb-5mt-4" >Associate (Supply Chain) - Performance Improvement CoE</h5>
              <div class="loc-date f-column">
                <div class="paragraph"> <i class="bi bi-geo-alt"></i> New Delhi </div>
                <div class="paragraph"> <i class="bi bi-calendar"></i> Permanent Full time </div>
              </div>
              <div class="loc-date">
                <button class="sec-button" >Business Operations</button>
                <button class="sec-button" >Management</button>
              </div>
            </div>
            <button class="apply-btn" >Apply</button>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="tab2-pane" role="tabpanel" aria-labelledby="tab2" tabindex="0">Tab content 2</div>
      <div class="tab-pane fade" id="tab3-pane" role="tabpanel" aria-labelledby="tab3" tabindex="0">Tab content 3</div>
      <div class="tab-pane fade" id="tab4-pane" role="tabpanel" aria-labelledby="tab4" tabindex="0">Tab content 4</div>
      <div class="tab-pane fade" id="tab5-pane" role="tabpanel" aria-labelledby="tab5" tabindex="0">Tab content 5</div>
      <div class="tab-pane fade" id="tab6-pane" role="tabpanel" aria-labelledby="tab6" tabindex="0">Tab content 6</div>
      <div class="tab-pane fade" id="tab7-pane" role="tabpanel" aria-labelledby="tab7" tabindex="0">Tab content 7</div>
    </div>
  </div>
</section>
<?php
get_footer();
?>

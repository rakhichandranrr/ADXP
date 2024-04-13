<?php
/*Template Name: Contact*/
get_header();
?>

<section class="innovation common-padd location-custom" >
  <div class="container">
    <div class="row">
      <h1 class="main-tittle mb-5 text-light"><?php echo get_field('office_map_heading');?></h1>
    </div>
  </div>
  <div id="Map">
    <?php echo get_field('office_map');?>
  </div>
</section>
<?php 
$regional_ofc = get_field('regional_offices');
$international_ofc = get_field('international_offices');

?>
<section class="Regional Offices common-padd" >
  <div class="container">
    <?php
	if($regional_ofc)
    {
    ?>
    <div class="row">
      <h4 class="text-light mb-4" ><?php echo get_field('regional_ofc_heading');?></h4>
      
      <?php
	  foreach($regional_ofc as $regional_ofc_res)
	  {
	  ?>
      <div class="col-lg-6">
        <div class="off-address">
          <div class="contact-itms">
            <h4 class="text-light" ><?php echo $regional_ofc_res['regional_ofc_heading'];?></h4>
            <div class="paragraph"><i class="bi bi-telephone-fill"></i><?php echo $regional_ofc_res['regional_ofc_phone'];?></div>
          </div>
          <a href="<?php echo $regional_ofc_res['regional_ofc_direction_url'];?>" class="direction text-light" >Get Directions <img src="assets/img/arrowR.svg" alt="img" > </a> </div>
      </div>
      <?php
	  }
	  ?>
    </div>
    
    <?php
	}
	if($international_ofc)
	{
	?>
    
    <div class="row">
      <h4  class="text-light mb-4 mt-5" ><?php echo get_field('international_ofc_heading');?></h4>
      <?php
	  foreach($international_ofc as $international_ofc_res)
	  {
	  ?>
      <div class="col-lg-6">
        <div class="off-address">
          <div class="contact-itms">
            <h4 class="text-light" ><?php echo $international_ofc_res['international_ofc_heading'];?></h4>
            <div class="paragraph"><i class="bi bi-telephone-fill"></i><?php echo $international_ofc_res['international_ofc_phone'];?></div>
          </div>
          <a href="<?php echo $international_ofc_res['international_ofc_direction_url'];?>" class="direction text-light" >Get Directions <img src="assets/img/arrowR.svg" alt="img" > </a> </div>
      </div>
      <?php
	  }
	  ?>
    </div>
    
    <?php
	}
	?>
  </div>
</section>

<section class="common-padd bg-light Applyjob pdl-1 pdr-1" id="Applyjob">
         <div class="container">
            
            <div class="row custom-grid-mobile">
                <div class="col-lg-12">
                    <h3 class="inner-heading mb-4"><?php echo get_field('contact_form_heading');?></h3>
                    <div class="paragraph">
                       <?php echo get_field('contact_form_description');?>
                    </div>
                </div>
            </div>
             <?php echo do_shortcode('[contact-form-7 id="9cc1aa1" title="Contact form 1"]');?>
         </div>
      </section>
<?php
get_footer();
?>

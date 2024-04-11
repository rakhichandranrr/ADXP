<?php
get_header();
?>

<section class="innovation common-padd bg-light " id="Overview">
  <div class="container mt-4">
    <div class="row pdl-1 pdr-1">
      <div class="col-lg-12">
        <h3 class="inner-heading mb-5"><?php echo get_field('content_heading');?></h3>
      </div>
      <?php
	   $digital_adv_content = get_field('contents');
	   if($digital_adv_content)
	   {
		   foreach($digital_adv_content as $digital_adv_content_res)
		   {
		?>
      <div class="col-lg-3">
        <div class="values-grid keyareas"> <img src="<?php echo $digital_adv_content_res['icon']['url'];?>" alt="img">
          <h5 class="kyhd"><?php echo $digital_adv_content_res['title'];?></h5>
          <div class="paragraph"> <?php echo $digital_adv_content_res['content'];?> </div>
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
get_footer();
?>

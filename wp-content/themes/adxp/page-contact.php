<?php
/*Template Name: Contact*/
get_header();
?>


<section class="common-padd location-custom">
	<div class="container">
		<?php

		$banner_address = get_field('banner_address');

		if ($banner_address) {

		?>
			<div class="row">
				<?php

				foreach ($banner_address as $banner_address_res) {

				?>
					<div class="col-lg-6 addreNew">
						<div class="address-wrp">
							<h2 class="text-light"><?php echo $banner_address_res['banner_address_heading']; ?></h2>
							<div class="contact-n d-flex">
								<?php

								if ($banner_address_res['banner_address_phone']) {

								?>
									<div class="c-list divWid"> <span class="text-light">PHONE NUMBER</span>
										<div class="paragraph"> <?php echo $banner_address_res['banner_address_phone']; ?> </div>
									</div>
								<?php

								}

								if ($banner_address_res['banner_address_fax']) {

								?>
									<div class="c-list divWid"> <span class="text-light">FAX NUMBER</span>
										<div class="paragraph"> <?php echo $banner_address_res['banner_address_fax']; ?> </div>
									</div>
								<?php

								}

								if ($banner_address_res['banner_address_po_box']) {

								?>
									<div class="c-list"> <span class="text-light">P.O.BOX.</span>
										<div class="paragraph"> <?php echo $banner_address_res['banner_address_po_box']; ?> </div>
									</div>
							</div>
						<?php

								}

								if ($banner_address_res['banner_address_location']) {

						?>
							<div class="location-wrp">
								<div class="c-list"> <span class="text-light">LOCATION</span>
									<div class="paragraph"> <?php echo $banner_address_res['banner_address_location']; ?> </div>
								</div>
							</div>
						<?php

								}

						?>
						<a href="<?php echo $banner_address_res['get_direction_url']; ?>" class="direction text-light">Get Directions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a>
						</div>
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
<section class="common-padd location-custom">
	<div class="container">
		<div class="row">
			<h1 class="main-tittle mb-5 text-light"><?php echo get_field('office_map_heading'); ?></h1>
		</div>
	</div>

	<div class="map">
		<div class="maps-container unselectable" style="overflow: auto;">
			<div class="map-control map-control-zoomin"></div>
			<div class="map-control map-control-zoomout"></div>

			<!-- maps-container-inner -->
			<div class="maps-container-inner zoomedElement zoomedElement414" style="transform: scale(2.0); left: 0px; top: 0px;">
				<!-- maps-zoomed-container -->
				<div class="maps-zoomed-container">

					<div class="mapWraper">
						<?php
						$map = get_field('office_map');
						?>
						<div id="image-map"> <img class="mapImg" src="<?php echo $map['url']; ?>" alt="img">
							<?php
							$uk_tooltip =  get_field('map_uk_tooltip');
							if ($uk_tooltip) {
								$lanmark_img = $uk_tooltip['landmark_image']['url'];
							?>
								<div class="pin pin-down location1" data-xpos="46" data-ypos="28.8">
									<h2><?php echo $uk_tooltip['title']; ?></h2>
									<ul>
										<li><a href="tel:<?php echo $uk_tooltip['phone']; ?>" target="_blank"><img class="phnIc" src="<?php echo get_template_directory_uri(); ?>/assets/img/phoneIc.svg" alt="img"> <?php echo $uk_tooltip['phone']; ?> </a></li>
										<li><a href="<?php echo $uk_tooltip['get_directions_url']; ?>" class="direction text-light">Get Directions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a></li>
										<?php
										if($lanmark_img)
										{
										?>
                                        
                                        <li class="towr-img uk" > <img src="<?php echo $lanmark_img; ?>" alt="img"> </li>
                                        <?php
										}
										?>
									</ul>
								</div>
							<?php
							}
							?>
							<?php
							$riyad_tooltip =  get_field('map_riyadh_tooltip');
							if ($riyad_tooltip) {
								$lanmark_img = $riyad_tooltip['landmark_image']['url'];
							?>
								<div class="pin pin-down location2" data-xpos="58" data-ypos="47.5">
									<h2><?php echo $riyad_tooltip['title']; ?></h2>
									<ul>
										<li><a href="tel:<?php echo $riyad_tooltip['phone']; ?>" target="_blank"><img class="phnIc" src="<?php echo get_template_directory_uri(); ?>/assets/img/phoneIc.svg" alt="img"> <?php echo $riyad_tooltip['phone']; ?></a></li>
										<li><a href="<?php echo $riyad_tooltip['get_directions_url']; ?>" class="direction text-light">Get Directions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a></li>
										<?php
										if($lanmark_img)
										{
										?>
                                        <li class="towr-img riyadh" > <img src="<?php echo $lanmark_img; ?>" alt="img"> </li>
                                        <?php
										}
										?>
									</ul>
								</div>
							<?php
							}
							?>
							<?php
							$abu_dhabi_tooltip =  get_field('map_abu_dhabi_tooltip');
							if ($abu_dhabi_tooltip) {
								$lanmark_img = $abu_dhabi_tooltip['landmark_image']['url'];
							?>
								<div class="pin pin-down location3" data-xpos="60.7" data-ypos="48.5">
									<h2><?php echo $abu_dhabi_tooltip['title']; ?></h2>
									<ul>
										<li><a href="tel:<?php echo $abu_dhabi_tooltip['phone']; ?>" target="_blank"><img class="phnIc" src="<?php echo get_template_directory_uri(); ?>/assets/img/phoneIc.svg" alt="img"> <?php echo $abu_dhabi_tooltip['phone']; ?> </a></li>
										<li><a href="<?php echo $abu_dhabi_tooltip['get_directions_url']; ?>" class="direction text-light">Get Directions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a></li>
										<?php
										if($lanmark_img)
										{
										?>
                                        <li class="towr-img abubabi" > <img src="<?php echo $lanmark_img; ?>" alt="img"> </li>
                                        <?php
										}
										?>
									</ul>
								</div>
							<?php
							}
							?>
							<?php
							$dubai_tooltip =  get_field('map_dubai_tooltip');
							if ($dubai_tooltip) {
								$lanmark_img = $dubai_tooltip['landmark_image']['url'];
							?>
								<div class="pin pin-down location4" data-xpos="62.2" data-ypos="49">
									<h2><?php echo $dubai_tooltip['title']; ?></h2>
									<ul>
										<li><a href="tel:<?php echo $dubai_tooltip['phone']; ?>" target="_blank"><img class="phnIc" src="<?php echo get_template_directory_uri(); ?>/assets/img/phoneIc.svg" alt="img"><?php echo $dubai_tooltip['phone']; ?></a></li>
										<li><a href="<?php echo $dubai_tooltip['get_directions_url']; ?>" class="direction text-light">Get Directions <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrowR.svg" alt="img"> </a></li>
										<?php
										if($lanmark_img)
										{
										?>
                                        <li class="towr-img dubai" > <img src="<?php echo $lanmark_img; ?>" alt="img"> </li>
                                        <?php
										}
										?>
									</ul>
								</div>
							<?php
							}
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


</section>
<section class="common-padd Applyjob contactNew" id="Applyjob">
	<div class="container">
		<div class="row custom-grid-mobile">
			<div class="col-lg-12">
				<h3 class="inner-heading mb-3"><?php echo get_field('contact_form_heading'); ?></h3>
				<div class="paragraph"> <?php echo get_field('contact_form_description'); ?> </div>
			</div>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="9cc1aa1" title="Contact form 1"]'); ?>
	</div>
</section>
<?php
get_footer();
?>
<script>
	$(document).ready(function() {

		// set the image-map width and height to match the img size
		$('#image-map').css({
			'width': $('#image-map img').width(),
			'height': $('#image-map img').height()
		})

		//tooltip direction
		var tooltipDirection;

		for (i = 0; i < $(".pin").length; i++) {
			// set tooltip direction type - up or down             
			if ($(".pin").eq(i).hasClass('pin-down')) {
				tooltipDirection = 'tooltip-down';
			} else {
				tooltipDirection = 'tooltip-up';
			}

			// append the tooltip
			$("#image-map").append("<div style='left:" + $(".pin").eq(i).data('xpos') + "%;top:" + $(".pin").eq(i).data('ypos') + "%' class='" + tooltipDirection + "'>\
                                          <div class='tooltip'>" + $(".pin").eq(i).html() + "</div>\
                                  </div>");
		}

		// show/hide the tooltip
		$('.tooltip-up, .tooltip-down').mouseenter(function() {
			$(this).children('.tooltip').fadeIn(100);
		}).mouseleave(function() {
			$(this).children('.tooltip').fadeOut(100);
		})
	});
</script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/map/zoom.jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/map/main.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/map/jquery.zoom.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/map/styles.css">
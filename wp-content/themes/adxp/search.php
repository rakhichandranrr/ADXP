<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

get_header();


	?>

<section class="ins-inner-detail  common-padd bg-light pb-0" id="Overview">
  <div class="container b_contents-main flexW inner-banner-content mb-0">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center extra-padd">
        <div class="flex-column" >
          <h1 class="main-tittle ins-tittle  mb-3 text-light mt-4" >Results for
            <div> "<?php echo  get_search_query();?>"</div>
          </h1>
          <div class="loc-date f-column">
            <div class="paragraph">
              <?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'adxp'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
            </div>
          </div>
          <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active"  type="button" >All Results</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg-light common-padd search-result-list  pdl-1 pdr-1">
  <div class="container">
    <div class="row">
      <?php
	  if ( have_posts() ) {
		  while ( have_posts() ) {
			  the_post();
			  $post_id = get_the_ID();
			  $post = get_post($post_id);
              $thumb_id = get_post_thumbnail_id($post_id);
			  
			  $postType = get_post_type_object(get_post_type($post_id));

		  ?>
      <div class="col-lg-12">
        <div class="insights-grD search-itm  d-flex flex-column">
          <div class="img-ins mb-3 search-img">
            <?php
  if($thumb_id ==  242)
  {
 ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img_insight.png" alt="img">
            <?php
  }
 else
 {
	 ?>
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full'); ?>" alt="img"  />
            <?php
 }
 ?>
          </div>
          <div class="s-list-details" > <span>
            <?php if ($postType) {
    echo esc_html($postType->labels->singular_name);
}?>
            </span>
            <h2 class="mt-2 mb-2"><?php echo $post->post_title;?></h2>
            <div class="paragraph mb-3">
              <?php the_excerpt();?>
            </div>
            <span><?php echo date('F d, Y', strtotime($post->post_date)); ?></span> </div>
        </div>
      </div>
      <?php
		  }
	  }
	  else
	  {
	  ?>
      <div class="col-lg-12">
        <div class="insights-grD search-itm  d-flex flex-column"> No search Result Found!! </div>
      </div>
      <?php
	  }
	  ?>
    </div>
  </div>
</section>
<?php


get_footer();




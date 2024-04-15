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

<form role="search" method="get" id="searchform" action="">
  <input type="hidden" value="<?php echo  get_search_query();?>" name="s" id="s" />
  <div id="post_field">
    <input type="hidden" value="" name="customset[]" />
  </div>
  <input type="hidden" value="1" name="asl_active" />
  <input type="hidden" value="1" name="p_asl_data" />
  <input type="hidden" value="1" name="filters_initial" />
  <input type="hidden" value="0" name="filters_changed" />
</form>

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
		
		if (in_array("post-insights", $_REQUEST['customset']) && in_array("post-industries", $_REQUEST['customset']) && in_array("job_openings", $_REQUEST['customset']) && in_array("post-services", $_REQUEST['customset']))
		{
			$all = 'active';
		}
		
		
		?>
            </div>
          </div>
          <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php echo $all;?>"  type="button" onclick="filter_post_type('all');" >All Results</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php if (in_array("post-insights", $_REQUEST['customset'])){?>active<?php }?>"  type="button" onclick="filter_post_type('post-insights');" >Insights</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php if (in_array("post-industries", $_REQUEST['customset'])){?>active<?php } ?>"  type="button" onclick="filter_post_type('post-industries');" >Industries</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php if (in_array("job_openings", $_REQUEST['customset'])){?>active<?php } ?>"  type="button" onclick="filter_post_type('job_openings');" >Careers</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?php if (in_array("post-services", $_REQUEST['customset'])){?>active<?php } ?>"  type="button" onclick="filter_post_type('post-services');" >Services</button>
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
            <a href="<?php echo get_permalink($post_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img_insight.png" alt="img"></a>
            <?php
  }
 else
 {
	 ?>
            <a href="<?php echo get_permalink($post_id); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full'); ?>" alt="img"  /></a>
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
?>
<script>
function filter_post_type(posttype)
{
	var html_data = '';
	
	if(posttype == 'all')
	{
		
		html_data = '<input type="hidden" value="post-insights" name="customset[]" /><input type="hidden" value="post-industries" name="customset[]" /><input type="hidden" value="job_openings" name="customset[]" /><input type="hidden" value="post-services" name="customset[]" />';
		
	}
	else
	{
	   html_data = '<input type="hidden" value="'+posttype+'" name="customset[]" />';
	}
	
	
	$('#post_field').html(html_data);
	
	$('#searchform').submit();
}
</script> 

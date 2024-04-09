<?php
get_header();
global $post;
$post_id = get_the_ID();
$insight = get_post($post_id);
$thumb_id = get_post_thumbnail_id($post_id);

?>

<section class="bg-light common-padd">
  <div class="container ">
  <?php
  if($thumb_id ==  242)
  {
 ?>
 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_img_insight.png" alt="img" class="insight-single-img" />
 <?php
  }
 else
 {
	 ?>
  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full'); ?>" alt="img" class="insight-single-img" /> <?php
 }
 ?></div>
</section>
<section class="ins-inner-detail  common-padd bg-light " id="Overview">
  <div class="container b_contents-main flexW inner-banner-content">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center extra-padd">
        <div class="flex-column"> <span class="upper-heading"><?php echo get_insight_categories($post_id); ?></span>
          <h1 class="main-tittle ins-tittle  mb-5 text-light mt-4"><img class="head-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="img-icon"> <?php echo $insight->post_title; ?></h1>
          <span class="upper-heading"><?php echo date('F d, Y', strtotime($insight->post_date)); ?></span>
          <div class="paragraph"> <?php echo get_field('short_description', $post_id); ?></div>
          <div class="">
            <?php
            $inner = get_field('insight_content');
            if ($inner) {
              foreach ($inner as $inner_res) {
            ?>
                <div class="con-list">
                  <?php
                  if ($inner_res['heading']) {
                  ?>
                    <h4><?php echo $inner_res['heading']; ?></h4>
                  <?php
                  }
                  if ($inner_res['description']) {
                  ?>
                    <div class="paragraph"><?php echo $inner_res['description']; ?> </div>
                  <?php
                  }

                  if ($inner_res['image_1']['url'] &&  $inner_res['image_2']['url']) {
                  ?>
                    <div class="im-ins img-multiple"> <img src="<?php echo $inner_res['image_1']['url']; ?>" alt="img"> <img src="<?php echo $inner_res['image_2']['url']; ?>" alt="img"> </div>
                  <?php
                  } else if ($inner_res['image_1']['url']) {
                  ?>
                    <div class="im-ins img-single"> <img src="<?php echo $inner_res['image_1']['url']; ?>" alt="img"> </div>
                  <?php
                  } else if ($inner_res['image_2']['url']) {
                  ?>
                    <div class="im-ins img-single"> <img src="<?php echo $inner_res['image_2']['url']; ?>" alt="img"> </div>
                  <?php
                  }
                  ?>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Client-results other common-padd otherinsights" id="Results">
  <div class="container">
    <div class="row custom-grid-mobile">
      <div class="col-lg-12">
        <h3 class="inner-heading text-light mb-4"><?php echo get_field('other_insight_heading', 97); ?></h3>
        <div class="paragraph"> <?php echo get_field('other_insights_description', 97); ?> </div>
      </div>
      <?php
      $recentinsight_args = array(
        'numberposts' => 3,
        'post_type'   => 'post-insights',
		'suppress_filters' => false,
        'post__not_in' => array(get_the_ID()),
        'order'       => 'DESC',
        'orderby'     => 'ID'
      );
      $recent_insights = get_posts($recentinsight_args);

      if ($recent_insights) {
        foreach ($recent_insights as $recent_insights_res) {


      ?>
          <div class="col-lg-4">
            <div class="industries-grid">
              <div class="industries-img"> <a href="<?php echo get_permalink($recent_insights_res->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_insights_res->ID), 'full'); ?>" alt="img"></a> </div>
              <div class="res-details"> <span class="designation "><?php echo get_insight_categories($recent_insights_res->ID); ?></span>
                <h4 class="mb-3 mt-4"><a href="<?php echo get_permalink($recent_insights_res->ID); ?>"><?php echo $recent_insights_res->post_title; ?></a></h4>
                <div class="paragraph"><?php echo get_field('short_description', $recent_insights_res->ID); ?></div>
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
get_footer();
?>
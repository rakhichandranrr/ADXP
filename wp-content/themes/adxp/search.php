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
    
    
 <section class="ins-inner-detail  common-padd bg-light " >    
    
  <div class="container b_contents-main flexW inner-banner-content">
    <div class="row">
      <div class="banner-content d-flex flex-column align-items-center justify-content-center extra-padd">
      <?php
	  if ( have_posts() ) {
		  ?>
          <h1 class="main-tittle ins-tittle  mb-5 text-light mt-4"><?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'adxp' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?></h1>
          <span class="upper-heading"><?php echo date('F d, Y', strtotime($insight->post_date)); ?></span>
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
          
           <div class="paragraph">
           <?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	adxp_the_posts_navigation();
	?>
           </div>
          <?php
} else {
	get_template_part( 'template-parts/content/content-none' );
}
	  ?>
        </div>
      </div>
    </div>
  </div>
</section>
    
<?php


get_footer();

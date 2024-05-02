<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php adxp_the_html_classes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/header/site-header'); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <input type="hidden" value="<?php echo  get_search_query();?>" name="s" id="s" class="search_input" />
  <div id="post_field">
    <input type="hidden" value="post-insights" name="customset[]" />
    <input type="hidden" value="post-industries" name="customset[]" />
    <input type="hidden" value="job_openings" name="customset[]" />
    <input type="hidden" value="post-services" name="customset[]" />
  </div>
  
  <input type="hidden" value="title" name="asl_gen[]" />
  <input type="hidden" value="1" name="asl_active" />
  <input type="hidden" value="1" name="p_asl_data" />
  <input type="hidden" value="1" name="filters_initial" />
  <input type="hidden" value="0" name="filters_changed" />
</form>

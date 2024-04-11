<?php

/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage adxp
 * @since ADXP 1.0
 */

?>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
<button class="Search mobile-search d-none" type="submit"><i class="bi bi-search"></i></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <?php
    $menu_items = wp_get_menu_array('Header');

    foreach ($menu_items as $item) {
      $child_ids = array();
      if (!empty($item['children'])) {
        foreach ($item['children'] as $child) {
          $child_ids[] = $child['page_id'];
        }
      }
      if (get_the_ID() == $item['page_id'] || in_array(get_the_ID(), $child_ids)) {
        $act_cls = 'active';
      } else {
        $act_cls = '';
      }
	  
	  if (is_singular('post-insights')) {
		  $insight_cls = 'active';
	  }
	  else
	  {
		  $insight_cls = '';
	  }
	  
	  if (is_singular('digital_advisor_asse')) {
		  $dig_adv_cls = 'active';
	  }
	  else
	  {
		  $dig_adv_cls = '';
	  }
    ?>
      <?php if (!empty($item['children'])) { ?>
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle <?php echo $act_cls; ?>" href="<?php echo $item['url']; ?>" role="button" aria-expanded="false"> <?php echo $item['title']; ?> </a>

          <div class="dropdown-menu mega-menu" aria-labelledby="megaMenuDropdown">
            <div class="container">
              <div class="row text-light">
                <div class="col-md-4 pe-4">
                  <h2><?php echo $item['title']; ?></h2>
                  <div class="paragraph"> <?php echo $item['description']; ?> </div>
                  <!-- Add your content for column 1 -->
                </div>
                <div class="col-md-8 usefull-links mega-link">
                  <ul>
                    <?php foreach ($item['children'] as $child) {
                      if (get_the_ID() == $child['page_id']) {
                        $child_act_cls = 'active';
                      } else {
                        $child_act_cls = '';
                      }

                    ?>
                      <li><a href="<?php echo $child['url']; ?>" class="<?php echo $child_act_cls; ?>"><?php echo $child['title']; ?></a></li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </li>
      <?php
      } else {

      ?>
        <li class="nav-item">
          <a class="nav-link <?php echo $act_cls; if($item['title']=='Insights'){ echo $insight_cls; }else if($item['title']=='Digital Advisor'){ echo $dig_adv_cls; }?>" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?> </a>
        </li>
    <?php
      }
    }
    ?>
  </ul>
  <form class="d-flex" role="search">

    <?php //echo do_shortcode('[wpdreams_ajaxsearchlite]'); 
    ?>
    <button class="Search" type="submit"><i class="bi bi-search"></i></button>
  </form>
</div>
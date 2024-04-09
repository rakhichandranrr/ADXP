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
                foreach ($menu_items as $item)
				{
				?>
    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="<?php echo $item['url']; ?>" role="button"  aria-expanded="false"> <?php echo $item['title']; ?> </a>
      <?php if( !empty($item['children']) ){?>
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
                <?php foreach($item['children'] as $child){ ?>
                <li><a href="<?php echo $child['url']; ?>" ><?php echo $child['title'];?></a></li>
                <?php
			  }
			  ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
							  }
							  ?>
    </li>
    <?php
				}
				?>
  </ul>
  <form class="d-flex" role="search">
    <button class="Search" type="submit"><i class="bi bi-search"></i></button>
  </form>
</div>





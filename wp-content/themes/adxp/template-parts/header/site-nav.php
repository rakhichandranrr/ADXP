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
    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Services </a>
      <?php
$services_args = array(
	'numberposts' => -1,
	'post_type'   => 'post-services',
	'order'       => 'ASC',
	'orderby'     => 'title'
);
$services = get_posts($services_args);

if ($services){
?>
      <ul class="dropdown-menu">
        <?php
	foreach ($services as $services_res)
	{
		?>
        <li><a class="dropdown-item" href="<?php echo get_permalink( $services_res->ID );?>"><?php echo $services_res->post_title;?></a></li>
        <?php
	}
	?>
      </ul>
      <?php
} ?>
    </li>
    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="<?php echo site_url();?>/industries" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Industries </a>
      <?php
        $ind_args = array(
            'numberposts' => -1,
            'post_type'   => 'post-industries',
            'order'       => 'ASC',
            'orderby'     => 'title'
        );
        $industries = get_posts($ind_args);
		if ($industries){
        ?>
      <ul class="dropdown-menu">
        <?php
	    foreach ($industries as $industries_res)
		{
		?>
        <li><a class="dropdown-item" href="<?php echo get_permalink( $industries_res->ID );?>"><?php echo $industries_res->post_title;?></a></li>
        <?php
		}
		?>
      </ul>
      <?php
		}
		?>
    </li>
    <li class="nav-item"> <a class="nav-link" href="#">Insights</a> </li>
    <li class="nav-item"> <a class="nav-link" href="#">Digital Advisor</a> </li>
    <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
    <li class="nav-item"> <a class="nav-link" href="#">Careers</a> </li>
    <li class="nav-item"> <a class="nav-link" href="#">Insights</a> </li>
  </ul>
  <form class="d-flex" role="search">
    <button class="Search" type="submit"><i class="bi bi-search"></i></button>
  </form>
</div>

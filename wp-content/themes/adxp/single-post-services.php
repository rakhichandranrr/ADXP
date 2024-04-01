<?php
get_header();
global $post;
$post_id = get_the_ID();
$url = wp_get_attachment_url(get_post_thumbnail_id($post_id), 'full');
$overview = get_field('overview', $post_id);
$services = get_field('services', $post_id);

$services_list = $services['services'];

?>
<p><?php the_title(); ?></p>
<p><?php the_content(); ?></p>
-------------------------------------------------
<p><b>Overview</b></p>
-------------------------------------------------

<p><?php echo $overview['overview_title']; ?></p>
<p><?php echo $overview['overview_description']; ?></p>
<p><?php echo $overview['overview_image']['url']; ?></p>

-------------------------------------------------
<p><b>Services</b></p>
-------------------------------------------------

<p><?php echo $services['service_block_heading']; ?></p>
<ul class="slides">
    <?php
    if ($services_list) {
        foreach ($services_list as $service_res) {
    ?>
            <li>
                <p><?php echo $service_res['service_title']; ?></p>
                <p><?php echo $service_res['service_description']; ?></p>
            </li>


            <?php

            $services_click_block = $service_res['service_click_block'];

            ?>
            <ul>
                <li>
                    <p><?php echo $services_click_block['service_click_block_title']; ?></p>
                    <p><?php echo $services_click_block['service_click_block_description']; ?></p>
                </li>
            </ul>
            <?php

            $service_click_block_sub_items = $services_click_block['service_click_block_sub_items'];
            if ($service_click_block_sub_items) {
                foreach ($service_click_block_sub_items as $service_click_block_sub_items_res) {
            ?>
                    <ul>
                        <li>
                            <p><?php echo $service_click_block_sub_items_res['service_click_block_sub_title']; ?></p>
                            <p><?php echo $service_click_block_sub_items_res['service_click_block_sub_description']; ?></p>
                        </li>
                    </ul>
    <?php

                }
            }
        }
    }
    ?>
</ul>
-------------------------------------------------
<p><b>People</b></p>
-------------------------------------------------
<?php
$people = get_field('choose_people');

if ($people) { ?>
    <ul>
        <?php foreach ($people as $people_res) {

            // Setup this post for WP functions (variable must be named $post).
        ?>
            <li>
                <p><?php echo $people_res->post_title; ?></p>
                <p><?php echo get_field('designation', $people_res->ID); ?></p>
                <p><?php echo $people_res->post_content; ?></p>
                <p><?php echo wp_get_attachment_url(get_post_thumbnail_id($people_res->ID), 'full'); ?></p>

            </li>
        <?php } ?>
    </ul>
    <?php
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php } ?>



<?php
get_footer();
?>
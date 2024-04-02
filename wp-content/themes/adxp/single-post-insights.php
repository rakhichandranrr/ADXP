<?php
get_header();
global $post;
$post_id = get_the_ID();


echo the_title();
?>

<p><?php echo get_field('short_description',$post_id); ?></p>

<?php
get_footer();
?>

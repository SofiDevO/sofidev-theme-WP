<?php get_header(); ?>


<div class="posts__container">
  <?php
while (have_posts()) {
  the_post(); ?>
    <?php get_template_part('/template-parts/home/post-cards'); ?>

    <?php }
?>
</div>

<?php get_footer() ?>
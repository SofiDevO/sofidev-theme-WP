<?php get_header(); ?>


<section class="posts__container">
  <?php
while (have_posts()) {
  the_post(); ?>
    <?php get_template_part('/template-parts/home/post-cards'); ?>

    <?php }
?>
</section>

<?php get_footer() ?>
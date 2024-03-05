<?php get_header(); ?>

<?php
if (is_front_page()) {
  echo get_template_part('/template-parts/home/heroSection/hero-section');
}
?>


<section class="posts__container">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <?php get_template_part('/template-parts/home/post-cards'); ?>

  <?php }
  ?>
</section>

<?php get_footer() ?>

<?php get_header();?>

<main>

  <?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <h2><?php the_title(); ?><h2>
    <?php the_content(); ?>
    <hr>
    <?php }
  get_footer();
  ?>
  </main>

  <?php get_footer() ?>


<?php get_header(); ?>
<section class="single__page-sidebar">

  <?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <article class="post__section">
    <div class="post__container">
      <h1 class="post__title"><?php the_title(); ?><h2>
        <?php the_content(); ?>
      </div>
      <?php }
    ?>
    </article>
    <aside class="sidebar">
    <?php dynamic_sidebar( 'primary' ); ?>
    </aside>
  </section>

<?php get_footer() ?>

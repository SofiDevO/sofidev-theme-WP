<?php get_header();?>

<main>

  <?php

while(have_posts()){
  the_post(); ?>
  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
  <?php the_content_feed( ); ?>
  <hr>
  <?php }
?>
</main>
<?php get_footer() ?>

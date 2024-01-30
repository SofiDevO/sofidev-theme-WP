<a class="card__container" href="<?php the_permalink(); ?> ">
  <?php the_post_thumbnail();?>
  <h2 class="card__title">
    <?php the_title(); ?>
  </h2>
    <?php the_excerpt(); ?>
</a>

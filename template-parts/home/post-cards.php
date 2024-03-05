<a class="card__container" href="<?php the_permalink(); ?> ">
 <div class="img__container">
   <?php the_post_thumbnail(); ?>
  </div>
  <h2 class="card__title">
    <?php the_title(); ?>
  </h2>
  <p>
    <?php echo wp_trim_words(get_the_excerpt(), 13); ?>
  </p>
</a>
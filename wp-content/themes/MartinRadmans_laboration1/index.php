<?php get_header(); ?>

<div class="container mt-5">
  <?php
  if (is_home() && !is_front_page()) :
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;
    else : ?>
      <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
  <?php endif;
  endif;
  ?>
</div>

<?php get_footer(); ?>

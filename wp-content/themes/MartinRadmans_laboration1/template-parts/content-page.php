<div id="primary" class="col-xs-12 col-md-9">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile;
  endif;
  ?>
</div>
<div id="primary" class="col-xs-12 col-md-9">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <h1>GOT HERE 2</h1>
  <?php endwhile;
  endif;
  ?>
</div>

<?php get_header(); ?>
<div class="container mt-5">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1 class="mb-4"><?php the_title(); ?></h1>
      <?php the_content(); ?>
  <?php endwhile;
  endif;
  ?>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container mt-5">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <h1 class="mb-4"><?php the_title(); ?></h1>
      <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-4" alt="<?php the_title(); ?>">
      <?php endif; ?>
      <p>Publicerad: <?php echo get_the_date(); ?></p>
      <p>Kategori: <?php the_category(', '); ?></p>
      <?php the_content(); ?>
    <?php endwhile;
  else : ?>
    <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>

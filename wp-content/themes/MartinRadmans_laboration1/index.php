<main>
  <h1>Senaste inläggen</h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Inga inlägg hittades.</p>
  <?php endif; ?>

</main>

<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <header class="page-header">
    <h1 class="page-title">
      <?php printf(__('Sökresultat för: %s', 'textdomain'), '<span>' . get_search_query() . '</span>'); ?>
    </h1>
  </header>

  <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </article>
  <?php endwhile; ?>

  <?php the_posts_pagination(); ?>

<?php else : ?>
  <article class="no-results not-found">
    <header class="entry-header">
      <h1 class="entry-title"><?php _e('Inga resultat hittades', 'textdomain'); ?></h1>
    </header>
    <div class="entry-content">
      <p><?php _e('Tyvärr, men inget matchade dina söktermer. Försök igen med några andra nyckelord.', 'textdomain'); ?></p>
      <?php get_search_form(); ?>
    </div>
  </article>
<?php endif; ?>

<?php get_footer(); ?>

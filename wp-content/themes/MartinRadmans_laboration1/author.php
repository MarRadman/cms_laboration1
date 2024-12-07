<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div id="primary" class="col-xs-12 col-md-9">
      <h1><?php the_archive_title(); ?></h1>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article>
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <h2 class="title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php echo get_the_date('j F, Y'); ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php echo get_the_category_list(', '); ?>
              </li>
            </ul>
            <p><?php the_excerpt(); ?></p>
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
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>

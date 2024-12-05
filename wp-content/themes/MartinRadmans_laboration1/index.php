<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div id="primary" class="col-xs-12 col-md-9">
      <h1><?php single_post_title(); ?></h1>
      <?php
      if (is_home() && !is_front_page()) :
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <article>
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-4" alt="<?php the_title(); ?>">
              <?php endif; ?>
              <h2 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <ul class="meta">
                <li>
                  <i class="fa fa-calendar"></i> <?php the_date(); ?>
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
          <?php endwhile;
          get_the_posts_pagination();
        else : ?>
          <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
      <?php endif;
      endif;
      ?>
    </div>
    <div id="secondary" class="col-xs-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

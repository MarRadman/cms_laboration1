<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div id="primary" class="col-xs-12 col-md-9">
      <h1><?php _e('Blogg', 'textdomain'); ?></h1>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article>
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-4" alt="<?php the_title(); ?>">
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
        <?php endwhile;
        echo get_the_posts_pagination(array(
          'prev_text' => __('Föregående', 'textdomain'),
          'next_text' => __('Nästa ', 'textdomain'),
        ));
      else : ?>
        <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>

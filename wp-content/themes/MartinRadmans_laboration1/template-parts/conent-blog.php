<?php get_header(); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article>
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-4" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i>
                <?php echo get_the_date(); ?>
              </li>
              <li>
                <i class="fa fa-user"></i>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Inlägg av <?php the_author(); ?>" rel="author"><?php the_author(); ?></a>
              </li>
              <li>
                <i class="fa fa-tag"></i>
                <?php the_category(', '); ?>
              </li>
            </ul>
            <p><?php the_excerpt(); ?></p>
          </article>
        <?php endwhile;
        the_posts_pagination();
      else : ?>
        <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

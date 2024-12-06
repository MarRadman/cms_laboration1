<?php get_header(); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
              <div class="text">
                <div>
                  <div>
                    <?php
                    remove_filter('the_content', 'wpautop');
                    the_content();
                    add_filter('the_content', 'wpautop');
                    ?>
                  </div>
                </div>
              </div>
            <?php endwhile;
          else : ?>
            <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<?php get_header(); ?>
<section>
  <div class="container">
    <div class="row">
      <?php if (is_page('undersida')) : ?>
        <div id="primary" class="col-xs-12 col-md-9">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              }
              the_content();
            endwhile;
          endif;
          ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul id="menu-sidomeny" class="side-menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'pagemenu',
              'menu_class' => 'menu',
              'container' => false,
              'items_wrap' => '%3$s' // This removes the <ul> wrapper added by wp_nav_menu
            ));
            ?>
          </ul>
        </aside>
      <?php elseif (is_page('undersida-2')) : ?>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul id="menu-sidomeny" class="side-menu">
            <?php wp_nav_menu(array(
              'theme_location' => 'pagemenu',
              'menu_class' => 'menu',
              'container' => false,
              'items_wrap' => '%3$s' // This removes the <ul> wrapper added by wp_nav_menu
            ));
            ?>
          </ul>
        </aside>
        <div id="primary" class="col-xs-12 col-md-9">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              }
              the_content();
            endwhile;
          endif;
          ?>
        </div>
      <?php elseif (is_page('undersida-4')) : ?>
        <div class="col-xs-12 col-sm-8 col-md-6">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <?php the_content(); ?>
          <?php
            endwhile;
          endif;
          ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'img-responsive'));
          }
          ?>
        </div>
    </div>
  </div>
</section>
<?php else : ?>
  <div id="primary" class="col-xs-12">
    <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            }
            the_content();
          endwhile;
        endif;
    ?>
  </div>
  <?php get_sidebar(); ?>
<?php endif; ?>
</div>
</div>
</section>
<?php get_footer(); ?>

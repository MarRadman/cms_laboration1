<?php get_header(); ?>
<div class="container mt-5">
  <div class="row">
    <?php if (is_page('undersida-2')) : ?>
      <div id="primary" class="col-xs-12 col-md-9">
        <?php get_template_part('template-parts/content', 'page'); ?>
      </div>
      <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
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
    <?php elseif (is_page('undersida')) : ?>
      <div id="primary" class="col-xs-12 col-md-9">
        <?php get_template_part('template-parts/content', 'page'); ?>
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
    <?php else : ?>
      <div id="primary" class="col-xs-12 col-md-9">
        <?php get_template_part('template-parts/content', 'page'); ?>
      </div>
      <aside id="secondary" class="col-xs-12 col-md-3">
        <?php get_sidebar(); ?>
      </aside>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>

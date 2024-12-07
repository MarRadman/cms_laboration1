<?php if (is_page(array('undersida', 'undersida-2'))) : ?>
  <ul id="menu-sidomeny" class="side-menu">
    <?php wp_nav_menu(array(
      'theme_location' => 'pagemenu',
      'menu_class' => 'menu',
      'container' => false,
      'items_wrap' => '%3$s' // This removes the <ul> wrapper added by wp_nav_menu
    ));
    ?>
  </ul>
<?php endif; ?>

<?php if (is_home() || is_single() || is_archive() || is_category() || is_author()) : ?>
  <aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
      <ul>
        <li id="search-2" class="widget widget_search">
          <?php get_search_form(); ?>
        </li>
      </ul>
      <ul role="navigation">
        <li id="pages-2" class="widget widget_pages">
          <h2 class="widgettitle"><?php _e('Sidor', 'textdomain'); ?></h2>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'custom-sidebar-menu',
            'menu_class' => 'menu',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          ));
          ?>
        </li>
        <li id="archives-2" class="widget widget_archive">
          <h2 class="widgettitle"><?php _e('Arkiv', 'textdomain'); ?></h2>
          <ul>
            <?php wp_get_archives(array('type' => 'monthly')); ?>
          </ul>
        </li>
        <li id="categories-2" class="widget widget_categories">
          <h2 class="widgettitle"><?php _e('Kategorier', 'textdomain'); ?></h2>
          <ul>
            <?php wp_list_categories(array('title_li' => '', 'show_count' => true)); ?>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
<?php endif; ?>

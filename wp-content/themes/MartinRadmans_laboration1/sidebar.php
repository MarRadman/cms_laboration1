<aside id="secondary" class="col-xs-12 col-md-3">
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
</aside>

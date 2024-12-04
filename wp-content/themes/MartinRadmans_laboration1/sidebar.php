<aside id="sidebar">
  <?php if (is_page(array('undersida', 'undersida-2'))) : ?>
    <nav>
      <?php wp_nav_menu(array(
        'theme_location' => 'pagemenu',
        'menu_class' => 'menu'
      ));
      ?>
    </nav>
  <?php endif; ?>
</aside>

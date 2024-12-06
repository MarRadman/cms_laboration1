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
  <div class="sidebar">
    <?php if (is_home()) : ?>
      <div id="secondary" class="col-xs-12 col-md-3">
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div class="sidebar">
            <div class="widget-area">
              <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
          <?php endif; ?>
          </div>
        </aside>
      </div>
  </div>
  </div>
</aside>

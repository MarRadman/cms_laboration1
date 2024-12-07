<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div id="primary" class="col-xs-12 col-md-9">
      <h1><?php _e('Sidan kunde inte hittas', 'textdomain'); ?></h1>
      <p><?php _e('Tyvärr, men sidan du letar efter finns inte. Du kan försöka söka efter något annat.', 'textdomain'); ?></p>
      <?php get_search_form(); ?>
    </div>
    <div id="secondary" class="col-xs-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

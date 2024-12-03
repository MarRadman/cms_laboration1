<form role="search" method="get" class="searchform" action="<?php echo home_url('/'); ?>">
  <div>
    <label class="screen-reader-text" for="s"><?php _x('Sök efter:', 'label'); ?></label>
    <input type="search" id="s" name="s" value="<?php echo get_search_query(); ?>" />
    <input type="submit" value="<?php echo esc_attr_x('Sök', 'submit button'); ?>" />
  </div>
</form>

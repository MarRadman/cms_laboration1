</main>

<footer id="footer">
  <div class="container">
    <div class="row top">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <?php if (is_active_sidebar('footer-1')) : ?>
          <?php dynamic_sidebar('footer-1'); ?>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php if (is_active_sidebar('footer-2')) : ?>
          <?php dynamic_sidebar('footer-2'); ?>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php if (is_active_sidebar('footer-3')) : ?>
          <?php dynamic_sidebar('footer-3'); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row bottom">
      <div class="col-xs-12">
        <p>Copyright &copy; Grupp X, <?php echo date('Y'); ?></p>
      </div>
    </div>
  </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>

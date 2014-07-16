<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
      <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
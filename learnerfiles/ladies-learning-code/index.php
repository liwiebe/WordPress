<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="left">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/left-->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
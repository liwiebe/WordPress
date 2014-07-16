<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="left">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <?php /* START: PUT POST THUMBNAIL HERE */ ?>
            <?php the_post_thumbnail('wide'); ?>
          <?php /* STOP: PUT POST THUMBNAIL HERE */ ?>
          
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <?php twentyten_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->


          <div class="entry-utility">
            <?php twentyten_posted_in(); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
          <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div>
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
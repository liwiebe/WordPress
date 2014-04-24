<?php get_header(); ?>
<div class="section">
  <div class="innerWrapper">
    <div class="left">

      <?php
      	/* Queue the first post, that way we know who
      	 * the author is when we try to get their name,
      	 * URL, description, avatar, etc.
      	 */
      	if ( have_posts() )
      		the_post();
      ?>

      	<h1><?php printf( __( 'Author Archives: %s', 'twentyten' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>

      <?php
      	// If a user has filled out their description, show a bio on their entries.
      	if ( get_the_author_meta( 'description' ) ) : ?>

      		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
      		<h2>About <?php echo get_the_author(); ?>  </h2>
      		<?php the_author_meta( 'description' ); ?>
      	<?php endif; ?>

      	<?php
      		rewind_posts();
      		get_template_part( 'loop', 'author' );
      	?>
    </div> <!-- /.left -->
    <?php get_sidebar(); ?>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
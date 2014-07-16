<?php /* Template Name: Home Page */  ?>
<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper home">
    
    <div class="welcome">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </div>

    <div class="homeColumn">
      <h3>Latest Posts</h3>
      <?php wp_get_archives('type=postbypost&limit=10'); ?>
    </div>

    <div class="homeColumn">
      <h3>Tweet @WesBos</h3>
      <a class="twitter-timeline" href="https://twitter.com/wesbos" data-widget-id="458700948462780416">Tweets by @wesbos</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="homeColumn">
      <h3>#LifeWithSnickers</h3>
      <!-- SnapWidget -->
      <iframe src="http://snapwidget.com/in/?h=bGlmZXdpdGhzbmlja2Vyc3xpbnwxMjV8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXM=&v=24414" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:390px; height:390px"></iframe>
    </div>



  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->
<?php get_footer(); ?>
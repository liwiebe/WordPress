<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css"  href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/mq.css">

  <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

  <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

  <!-- Load jQuery and our own scripts file -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>
</head>


<body <?php body_class(); ?>>

<div class="header">
  
  <div class="menuWrap">
    <?php wp_nav_menu(); ?>
  </div>

  <!-- HERO STARTS HERE -->
  <div class="hero">
    
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
    <h3><?php bloginfo('description'); ?></h3>

  </div>
  <!-- HERO ENDS HERE -->

</div><!--/.header-->


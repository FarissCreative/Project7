<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <title>Document</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <h1><?php bloginfo('name');?></h1>
    <?php
  wp_nav_menu( $args );
    //the post loop
    if ( have_posts() ){
      while (have_posts() ){
        the_post();
        ?>
        <h1> <?php the_title();?> </h1>
    <?php
        //post content here
        the_content();

          echo "<hr>";

      } //end while
    } //end if
  ?>

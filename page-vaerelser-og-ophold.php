<?php get_header(); ?>

<div class="page-articles">
  <h2 class="section-title"> Værelser på Hotel Villa Gulle </h2>
    <?php

    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => '3',
      'category_name' => 'værelser'
    );

    $loop = new WP_Query($args);


    if ($loop->have_posts()):
      while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="post-content">
          <h2 class="page-title">
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
          </h2>
          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
          <?php
          the_excerpt();
          //display post content
          ?>
        </div>
      <?php
      endwhile;
    endif;
    wp_reset_query();
    ?>
  <h2 class="section-title"> Ophold på Hotel Villa Gulle </h2>
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => '3',
      'category_name' => 'ophold'
    );

    $second_loop = new WP_Query($args);


    if ($loop->have_posts()):
      while ($second_loop->have_posts()) : $second_loop->the_post(); ?>
        <div class="post-content">
          <h2 class="page-title">
            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
          </h2>
          <?php
          the_post_thumbnail();
          the_excerpt();
          //display post content
          ?>
        </div>
      <?php
      endwhile;
    endif;
    ?>
  </div>
</div>


<?php get_footer();?>

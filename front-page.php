
<?php
    get_header(); // dynamicly load the header file
    ?>  



<article class="content px-3 py-5 p-md-5">
	    
        <!-- the loop 
dinamicly queries the database and fine which rows corresponds to the page we one.
Pull the information and displays it in that section below
-->      

        <?php
            if(have_posts() ){ //if post exists then execute
                while(have_posts()){ // while we have posts then execute every single time as long there is a posts.
                    the_post(); //calls the post and wordpress query the database and fect out a single post.
                    the_content(); //grabs the content
                    
                }
            } 
        ?>


	    </article>


  <article class="focus">     
    <?php

    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => '1',
      'category_name' => 'mainpost'
    );

    $loop = new WP_Query($args);


    if ($loop->have_posts()):
      while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="focus-content-outer">
          <h2 class="focus-content-title">
            <?php the_title(); ?>
            <a  href="<?php the_permalink(); ?>">  </a>
          </h2>
          <div class="focus-content-inner">
            <a class="focus-content-img" href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
            <div  class="more" >
              <?php
              the_excerpt();
              ?>    
              <a href="<?php the_permalink(); ?>">  <a class="wp-block-button__link" >Læs mere</a> </a>
            </div>
            
          </div>
        </div>
      <?php
      endwhile;
    endif;
    wp_reset_query();
    ?>
 
  </div>
  </article>

      


      <div class="page-articles">
  <h2 class="section-title"> Læs også... </h2>
    <?php

    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => '3',
      'category_name' => 'blogpost'
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
          <div class="more">
             <a href="<?php the_permalink(); ?>">  <a class="wp-block-button__link" >Læs mere</a> </a>
          </div>
         
        </div>
      <?php
      endwhile;
    endif;
    wp_reset_query();
    ?>
 
  </div>
</div>

	    
<?php

    get_footer(); // dynamicly load the footer file
    ?> 
    
 
<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="wordpresstemplate"> 
    
  
    <?php
    wp_head(); // wordpress gonna inject the files it needs for the page by itself from functions php file.
    ?>  

</head> 

<body>
    <header class="header">	 
	   <a class="site-title pt-lg-4 mb-0" href="index.html">Hotel Villagulle</a> 
	    <nav class="navbar" >
        
			<!-- logo image -->
      <?php
        if(function_exists('the_custom_logo')){
          $custom_logo_class = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_class);

        }
        ?>
        <img class="" src="<?php echo $logo[0] ?>" alt="not working">
   
                <!-- menu function -->
                <?php
                wp_nav_menu(
                    array( // takes an array that contain different parameters 
                        'menu' => 'primary', //name of the menu we trying to output, which is the primary menu (Desktop Primary Navigation line 21, funtions.php)
                        'container' => '',
                        'theme_location' => 'primary'// when the user selected the theme location => this is the primary location
                        //'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                );
                ?>
        <div class="book">
          <p class="phonenumber"> +45 55 55 55 55</p>
          <button class="bookbtn" >Book</button>
        </div>
	    </nav>
    </header>

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			  <h1 class="heading"><?php the_title(); ?></h1>  <!-- shows the current page titel or post titel -->
		  </header>
    </div>

</body>

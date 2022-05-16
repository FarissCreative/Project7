<?php
 function support_theme()
 {
    //add dynamic title support
    add_theme_support('title-tag');
    //add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
 }

 add_action( 'after_setup_theme', 'support_theme' );

 function logo_size_change(){
	remove_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo', array(
	    'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
	) );
}
add_action( 'after_setup_theme', 'logo_size_change', 11 );


  //theme options
//display menus in the wordpress

function add_theme_menus()
{
    $location = array('primary' => "primary menu items",
    'footer' => "footer menu items");

    register_nav_menus($location);
}

add_action( 'init', 'add_theme_menus' );


    

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER css/screen.css **/
    wp_register_style( 'screen-style', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
     
// ENQUEUE SCRIPTS
     
function enqueue_scripts() {
     
    /** REGISTER HTML5 Shim **/
    wp_register_script( 'html5-shim', 'https://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'html5-shim' );
         
    /** REGISTER HTML5 OtherScript.js **/
    wp_register_script( 'custom-script', THEME_DIR . '/assets/js/main.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'custom-script' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// footer dynamic widges
function wpb_widgets_init() {

    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'wpb_widgets_init' );

 
?>



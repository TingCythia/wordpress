<?php

/**
 * Theme Functions.
 * 
 * @package TingsThemes
 */

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

// add widget and register function
/* add_action('widgets_init'.'register_sidebars');
function register_sidebars(){
    [
        'name' => 'widget1',
        'id' => 'wigdet1',
        'description'=> 'This is the first widget'
    ];
}; */




//lägg till menyer
/* add_action('after_setup_theme'.'registreta_meny');

function registrera_meny(){
    register_nav_menu('mainmenu', 'Main Menu');
    register_nav_menu('socialmenu','Soical Menu');
}
 */
function TingsThemes_enqueue_scripts(){

    //register styles with update time 
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory().'/css/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', [], false, 'all');


    //register scripts with update time
    wp_register_script('bootstrap-js', get_template_directory_uri().'/js/jquery.js', [],null, true);
    wp_register_style('script-js', get_template_directory_uri().'/js/script.js', [], filemtime(get_template_directory().'/js/script.js'), true);
   

    //enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    
    //enqueue scripts
    wp_enqueue_script('script-js');
    wp_enqueue_script('bootstrap-js');
 }

 add_action( 'wp_enqueue_scripts', 'TingsThemes_enqueue_scripts');

 // Enqueuing Font Awesome icon in WordPress
 
function fontswesomestyles(){
 
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri().'/css/font-awesome.css', );    
 
}
 
add_action( 'wp_enqueue_scripts', 'fontswesomestyles');
 
// Ends Here

?>

<?php  add_filter('the_content', 'byt_bokstav_funktion');
function byt_bokstav_funktion($texten){
   $text=  str_replace('example','sample', $texten);
   return $text;
} 
?>
<?php
/**
 * theme function
 * 
 * @package mytheme2
 */
if( ! defined( 'MYTHEME2_DIR_PATH' ) ) {
        define( 'MYTHEME2_DIR_PATH', untrailingslashit( get_template_directory()));

        
}
require_once MYTHEME2_DIR_PATH . '/inc/helpers/autoloader.php';
function mytheme2_get_theme_instance(){
    \MYTHEME2\Inc\MYTHEME2::get_instance();
}
mytheme2_get_theme_instance();
//  echo '<pre>';


//  print_r(MYTHEME2_DIR_PATH);


//  wp_die();
 function mytheme2_enqueue_style (){
    //registring styles
wp_register_style('mytheme2_style',  get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
wp_register_style('bootstrap-css',  get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false, 'all');

//registering script
wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'), true);
wp_register_style('bootstrap-js',  get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

//enqueue style
wp_enqueue_style('mytheme2_style');
wp_enqueue_style('bootstrap-css');

//enqueue script
wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'mytheme2_enqueue_style');





 
<?php
/**
 * theme function
 * 
 * @package mytheme2
 */
if( ! defined( 'MYTHEME2_DIR_PATH' ) ) {
        define( 'MYTHEME2_DIR_PATH', untrailingslashit( get_template_directory()));
}

if( ! defined( 'MYTHEME2_DIR_URI' ) ) {
        define( 'MYTHEME2_DIR_URI', untrailingslashit( get_template_directory_uri()));

}
require_once MYTHEME2_DIR_PATH . '/inc/helpers/autoloader.php';
function mytheme2_get_theme_instance(){
    \MYTHEME2\Inc\MYTHEME2::get_instance();
}
mytheme2_get_theme_instance();
//  echo '<pre>';


//  print_r(MYTHEME2_DIR_PATH);


//  wp_die();
 






 
<?php
/**
 * theme function
 * 
 * @package mytheme2
 */
// echo '<pre>';


// print_r(filemtime(get_template_directory().'/style.css') );


// wp_die();
 function mytheme2_enqueue_style (){
    
//wp_enqueue_script('mytheme2_style',  get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
//wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory_uri().'assets/main.js'), true );
wp_register_style('mytheme2_style',  get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'), 'all' );
wp_register_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory_uri().'assets/main.js'), true);
wp_enqueue_style('mytheme2_style');
wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'mytheme2_enqueue_style');




 
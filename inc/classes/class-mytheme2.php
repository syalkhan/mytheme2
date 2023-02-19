<?php 
/**
 * Bootstraps the Theme.
 * 
 * @pakage mytheme2
 */
 
 namespace MYTHEME2\Inc;
 use MYTHEME2\Inc\Traits\Singleton;

 class MYTHEME2 {
    use Singleton;

    protected function __construct() {
        wp_die('hello');
        //load class.
        $this-> set_hooks(); 
    }

    protected function set_hooks(){
        // actions and filters
    }
 }
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
        // LOAD CLASS
        Assets::get_instance();
        $this-> setup_hooks(); 
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */

    }
 }
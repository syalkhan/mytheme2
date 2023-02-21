<?php 
/**
 * Register menus 
 * 
 * @pakage mytheme2
 */

 namespace mytheme2\Inc;
 use MYTHEME2\Inc\Traits\Singleton;

 class Menus {
    use Singleton;
    protected function __construct() {
        // LOAD CLASS
        $this-> setup_hooks(); 
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action( 'init', [ $this, 'register_menus'] );
   

    }

    public function register_menus() {
        register_nav_menus(
          [ 
            'mytheme2-header-menu' => esc_html__( 'Header Menu', 'mytheme2' ),
            'mytheme2-footer-menu' => esc_html__( 'Footer Menu', 'mytheme2' )
          ]
         );
       }
       

       // Function for getting the location of the menus

       public function get_menu_id( $location ){
        // Get all the locations.
        $locations = get_nav_menu_locations();
        echo '<pre>';
        print_r( $locations );
        wp_die();
       }

 }
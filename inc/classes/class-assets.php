<?php 
/**
 * mytheme2 theme assets
 * 
 * @pakage mytheme2
 */

 namespace mytheme2\Inc;
 use MYTHEME2\Inc\Traits\Singleton;

 class Assets {
    use Singleton;
    protected function __construct() {
        // LOAD CLASS
        $this-> setup_hooks(); 
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */

        add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
        add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);

    }

    public function register_styles(){

        // registring styles

        wp_register_style('mytheme2_style',  get_stylesheet_uri(), [], filemtime(MYTHEME2_DIR_PATH.'/style.css'), 'all' );
        wp_register_style('bootstrap-css',  MYTHEME2_DIR_URI.'/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        //enqueue style
        wp_enqueue_style('mytheme2_style');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts(){

        //registering script
        wp_register_script('main-js', MYTHEME2_DIR_URI.'/assets/main.js', [], filemtime(MYTHEME2_DIR_PATH.'/assets/main.js'), true);
        wp_register_style('bootstrap-js',  MYTHEME2_DIR_URI.'/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        // enqueue script
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
 }
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
        add_action( 'after_setup_theme', [$this, 'setup_theme']);

    }

    public function setup_theme(){
        add_theme_support( 'title-tag' );

        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );

        add_theme_support('custom-background', ['default-color' => '0000ff',
        'default-image' => ''] );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize_selective_refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ] );
    
        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if (! isset ( $content_width )) {
            $content_width = 1240;
        }
    }
 }
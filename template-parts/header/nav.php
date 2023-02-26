<?php 

/**
 * navigation header template
 * 
 * @pakage mytheme2
 */



$menu_class = \mytheme2\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id ( 'mytheme2-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );

echo '<pre>';
print_r($header_menus);
wp_die();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <?php if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
 }?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<!-- <?php 
wp_nav_menu(
  [ 
    'theme_location' => 'mytheme2-header-menu',
    'container_class' => 'my_extra_menu_class'
  ]
);

?> -->
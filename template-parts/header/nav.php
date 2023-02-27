<?php 

/**
 * navigation header template
 * 
 * @pakage mytheme2
 */



$menu_class = \mytheme2\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id ( 'mytheme2-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );



?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <?php if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
 }?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">


    <?php
    if ( !empty( $header_menus) && is_array( $header_menus) ){
    ?>
  <ul class="navbar-nav mr-auto">

  <?php
  foreach ( $header_menus as $menu_item ){
    if ( ! $menu_item->menu_item_parent ){
      $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
      $has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items);
      if( ! $has_children ){
        ?>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( $menu_item->url );?>">
      <?php echo esc_html( $menu_item->title); ?>
      </a>
      </li>
      <?php 
      }else{
        ?>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url); ?>" id="navbarDropdown" role="button" data-toggle="dropdown">
        <?php echo esc_html( $menu_item->title);
        ?>
        
      </a> 

<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php 
foreach( $child_menu_items as $child_menu_items){
?>
<a class="dropdown-item" href="<?php echo esc_url( $child_menu_items->url );?>">
<?php echo esc_html( $child_menu_items->title);
?>
</a>
<?php
}

?>

</div>
      </li>

    <?php
      }

      ?>
      <?php
    }
  }
    }
    ?>
   </nav>
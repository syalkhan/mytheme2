<?php
/**
 * header.php
 * 
 * 
 * @package mytheme2
 */
?>
<!DOCTYPE html>
<html lang="<?php get_language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('hello-class'); ?>>
  
  <?php
  
  
  if(function_exists('wp_body_open')){ 
  wp_body_open();
  }
  ?>

  <header>
    header
  </header>
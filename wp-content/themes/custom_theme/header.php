<?php 
/**
 * Header File.
 * 
 * @package custom_theme
 */

?>
<!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>">
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress custom_theme</title>
    <?php wp_head();?>
 </head>
 <body <?php body_class(); ?> >
   <?php wp_body_open(); ?>
   <header>Header</header>
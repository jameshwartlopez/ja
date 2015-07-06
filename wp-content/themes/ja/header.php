<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<head>
 <title><?php bloginfo('name'); ?>  <?php echo is_front_page() ? " 	| ".bloginfo('description') : " | ".get_the_title(); ?></title>
  <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- favicon here-->
  <link rel="shortcut icon" href="screenshot.png">
  
  <!-- Web Fonts -->
  <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<div id="header">
<?php wp_nav_menu(); ?>
</div>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <!-- Stylesheets-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <!--[if IE]>
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="all">
  <![endif]-->
  <!--[if IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie7.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 7]>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie6.css" type="text/css" media="all">
  <![endif]-->
  
  <!-- Favicon -->
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('url');?>/favicon.ico" />

  <!-- jQuery -->
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>

  <!-- Cufón Font Replacement -->
  <script src="<?php bloginfo('template_url'); ?>/js/cufon-yui.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/Rockwell.font.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    Cufon.replace('h2, h3, .summary p');
  </script>

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
  <div id="header" class="clearfix">
    <a href="<?php bloginfo('url'); ?>">
      <h1>this is my <strong>portfolio.</strong> i hope you like it. <span>julian wilke.</span></h1>
    </a>

    <ul id="nav" class="clearfix">
      <?php
      wp_list_pages( array('include' => '2',
                           'title_li' => '') );
     
      /* When displaying the single work pages set work ('3') as current_category so work in the menu is still underlined */ 
      if ( is_single() && in_category( '3' ) ) {
        wp_list_categories( array('include' => '3',
                                  'title_li' => '',
                                  'current_category'   => 3) );
      } else {
        wp_list_categories( array('include' => '3',
                                  'title_li' => '') );
      }
      
      wp_list_pages( array('include' => '3',
                           'title_li' => '') );
      ?>
    </ul><!-- END #nav -->
  </div><!-- END #header -->
<!-- END HEADER.PHP -->
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image" content="<?php bloginfo('template_directory')?>/build/images/mockup-portfolio-6.jpg">
  <meta property="og:image:width" content="200">
  <meta property="og:image:height" content="200">
  <meta property="og:title" content='MW | Portfolio'>
  <meta property='og:description' content="Maddies Portfolio. Budding frontend developer, based in Sydney Australia.">
  <meta property='og:url' content="/www.madwester.com">
  <meta name="keywords" content="frontend, wordpress, web, design, development, coder, sydney, australia"/>
  <meta name="description" content="Maddie's Portfolio. Budding frontend developer, based in Sydney Australia."/>
  <meta name="author" content="Madeleine Westerstrom, madwester@gmail.com">
  <title>MW | Junior Frontend Developer</title>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory')?>/build/images/mw-favoicon.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="logotype">
        <a href="http://madwester.com/home/"><img src="<?php bloginfo('template_directory')?>/build/images/logotype/mw-smaller.png"></a>
      </div>
    </div>
    <nav class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php 
              wp_nav_menu(array( 
                'theme_location' => 'header-menu',
                'walker' => new Custom_Walker_Nav_Menu_Top
                ) ); 
      ?>
      </ul>
		</nav>
  </div>
</nav>


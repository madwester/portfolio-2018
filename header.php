<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>MW | Frontend Developer</title>
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
        <a href="http://localhost:8888/home/"><img src="<?php bloginfo('template_directory')?>/build/images/logotype/mw-smaller.png"></a>
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


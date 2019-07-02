<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP SKELETON</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark custom_nav" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <?php
    wp_nav_menu( array(
      'theme_location'    => 'top_navigation_bar',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'bs-example-navbar-collapse-1',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
      <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>
 

  <header>
    <div id="custom-header">
      <img class="header-img img-fluid" src="<?php header_image();?>" alt=""/>
    </div>
  </header>





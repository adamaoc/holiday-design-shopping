<?php
  include('core/init.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online shopping for all your seasonal or holiday decorations. Great for the home or office and sold at amazing prices!">
    <meta name="author" content="ampnetmedia.com">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>Holiday Design - Online Shopping for the holidays.</title>
    <?php // make a getTitle() function that dynamically displays title name for diff pages. ?>
    <link href="/css/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <!--[if IE]>
        <link href="/css/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
<div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
              <span class="logo-h">H</span>oliday 
              <span class="logo-design"><span class="logo-d">D</span>esign</span>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li <?php if ($onpage == 'index') { echo 'class="active"'; } ?>><a href="/">Home</a></li>
              <li <?php if ($onpage == 'store') { echo 'class="active"'; } ?>><a href="/store/">Store</a></li>
              <li <?php if ($onpage == 'about') { echo 'class="active"'; } ?>><a href="/about">About</a></li>
              <li <?php if ($onpage == 'contact') { echo 'class="active"'; } ?>><a href="/contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Categories</li>
                  <li class="divider"></li>
                  <li><a href="/store/#!/~/category/id=6515126&offset=0&sort=normal">Thanksgiving/Fall</a></li>
                  <li><a href="/store/#!/~/category/id=6515114&offset=0&sort=normal">Christmas/Winter</a></li>
                  <li><a href="/store/#!/~/category/id=6515165&offset=0&sort=normal">Floral Decor</a></li>
                  <li><a href="/store/#!/~/category/id=6515127&offset=0&sort=normal">General Deals</a></li>
                  <!-- <li class="divider"></li> -->
                  <!-- <li class="dropdown-header">Sort By</li>
                  <li><a href="&sort=priceAsc">Price: (low - high)</a></li>
                  <li><a href="&sort=priceDesc">Price: (high - low)</a></li> -->
                </ul>
              </li>
            </ul>
          </div><?php // off nav collapse ?>
        </div><?php // off container ?>
      </div><?php // off navbar ?>
<?php
  include('core/init.php');
  $HDstore = new EcwidProductApi('2557029');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Online shopping for all your seasonal or holiday decorations. Great for the home or office and sold at amazing prices!">
    <meta name="author" content="ampnetmedia.com">

    <link rel="shortcut icon" href="/img/favicon.png">

    <title>Holiday Design - <?php echo dynamicTitle($onpage); ?></title>
    
    <link rel="apple-touch-icon" href="/img/touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/img/touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/img/touch-icon-ipad-retina.png" />

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
              <li <?php if ($onpage == 'store' or $onpage == 'categories') { echo 'class="active"'; } ?>><a href="/store/categories/">Store</a></li>
              <li <?php if ($onpage == 'about') { echo 'class="active"'; } ?>><a href="/about">About</a></li>
              <li <?php if ($onpage == 'contact') { echo 'class="active"'; } ?>><a href="/contact">Contact</a></li>
              <li class="cart"><a href="/store/#!/~/cart"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Categories</li>
                  <li class="divider"></li>
                  <li><a href="/store/category/halloween-decorations/">Halloween/Fall</a></li>
                  <li><a href="/store/category/thanksgiving-decorations/">Thanksgiving/Fall</a></li>
                  <li><a href="/store/category/christmas-decorations/">Christmas/Winter</a></li>
                  <li><a href="/store/category/floral-decor/">Floral Decor</a></li>
                  <li><a href="/store/category/general-deals/">General Deals</a></li>
                </ul>
              </li>
            </ul>
          </div><?php // off nav collapse ?>
        </div><?php // off container ?>
      </div><?php // off navbar ?>
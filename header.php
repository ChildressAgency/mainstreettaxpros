<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Main Street Accounting Services, Inc.</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if gte IE 9]
    <style type="text/css">
      .message-bar{
        filter: none;
      }
    </style>
  <![endif]-->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <nav id="header-nav">
    <div class="masthead">
      <a href="tel:<?php the_field('phone', 'option'); ?>" class="phone"><?php the_field('phone', 'option'); ?></a>
      <a href="mailto:<?php the_field('email', 'option'); ?>" class="email"><?php the_field('email', 'option'); ?></a>
      <a href="<?php echo home_url(); ?>" class="header-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Main Street Tax Pros Logo" />
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <?php
      $header_nav_args = array(
        'theme_location' => 'header_nav',
        'menu' => '',
        'container' => 'div'>,
        'container_class' => 'navbar-collapse collapse',
        'container_id' => 'navbar',
        'menu_class' => 'nav navbar-nav',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'mainstreettaxpros_header_fallback_menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new wp_bootstrap_navwalker()
      );
      wp_nav_menu($header_nav_args); ?>
  </nav>
  <?php if(get_field('message_bar_message', 'option')): ?>
    <div class="message-bar">
      <p><?php the_field('message_bar_message', 'option'); ?></p>
    </div>
  <?php endif; ?>
  <?php if(is_front_page()): ?>
    <div id="hero" class="hp-hero">
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height text-side">
            <div class="hero-caption hp-hero-caption">
              <h2><?php the_field('home_page_hero_title'); ?></h2>
              <?php the_field('home_page_hero_content'); ?>
              <a href="<?php the_field('home_page_hero_link'); ?>" class="btn-main"><?php the_field('home_page_hero_link_text'); ?></a>
            </div>
          </div>
          <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php the_field('home_page_hero_image'); ?>);<?php the_field('home_page_hero_image_css'); ?>"></div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div id="hero">
      <div class="container-fluid container-sm-height">
        <div class="row row-sm-height">
          <div class="col-sm-6 col-sm-height text-side">
            <div class="hero-caption">
              <h1><?php the_field('hero_title'); ?></h1>
              <?php the_field('hero_content'); ?>
            </div>
          </div>
          <?php
            $hero_image = get_stylesheet_directory_uri() . '/images/calculator-money.jpg';
            $hero_image_css = 'background-position:center center;';
            if(get_field('hero_image')){
              $hero_image = get_field('hero_image');
              $hero_image_css = get_field('hero_image_css');
            }
          ?>
          <div class="col-sm-6 col-sm-height image-side" style="background-image:url(<?php echo $hero_image; ?>);<?php echo $hero_image_css; ?>"></div>
        </div>
      </div>
    </div>
  <?php endif; ?>
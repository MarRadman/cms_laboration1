<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <head>
    <title>Labb 1</title>
  </head>

  <body>

    <div id="wrap">

      <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-8 col-sm-6">
              <a class="logo" href="./">Labb 1</a>
            </div>
            <div class="col-sm-6 hidden-xs">
              <form class="searchform">
                <div>
                  <label class="screen-reader-text">Sök efter:</label>
                  <input type="text" />
                  <input type="submit" value="Sök" />
                </div>
              </form>
            </div>
            <div class="col-xs-4 text-right visible-xs">
              <div class="mobile-menu-wrap">
                <i class="fa fa-search"></i>
                <i class="fa fa-bars menu-icon"></i>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="mobile-search">
        <form class="searchform">
          <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" />
            <input type="submit" value="Sök" />
          </div>
        </form>
      </div>

      <nav id="nav">
        <?php
        wp_nav_menu();
        ?>
      </nav>

      <main>

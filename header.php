<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class="container"> <!-- Begin Container Div -->
        <header class="row">
            <div class="twelve columns">
              <?php
                  wp_nav_menu( array(
                      'sort_column' => 'menu_order',
                      'container_class' => 'blank-menu-header'
                  ));
                  ?>
            </div>
         </header>
          <div class="row">
              <div class="twelve columns">

                      <h1 id="title"><a href="<?php $url = home_url('/'); echo $url; ?>">
                        <?php bloginfo('name'); ?>
                      </a></h1>
                      <h6 id="subtitle"><?php bloginfo('description'); ?></h6>
              </div>
          </div>

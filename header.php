<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
  <header class="row">
   </header>
    <div class="container"> <!-- Begin Container Div -->
          <div class="row">
              <div class="twelve columns">
                <div class="twelve columns">
                  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                      <input type="submit" id="searchsubmit" value="Search" class="btn" />
                    </div>
                  </form>
                  <?php
                      wp_nav_menu( array(
                          'sort_column' => 'menu_order',
                          'container_class' => 'blank-menu-header'
                      ));
                      ?>
                </div>

                      <h1 id="title"><a href="<?php $url = home_url('/'); echo $url; ?>">
                        <?php bloginfo('name'); ?>
                      </a></h1>
                      <h6 id="subtitle"><?php bloginfo('description'); ?></h6>
              </div>
          </div>

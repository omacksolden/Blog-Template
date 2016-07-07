<?php get_header(); ?>

<!-- Begin Section Container -->
     <section class="row">
          <div class="eight columns">
              <!-- Begin Loop -->
              <?php
                  if ( have_posts() ) {
                      while ( have_posts() ) {
                        the_post(); ?>

                        <h2 id="article-title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>

                <?php
                    } //end while
                  } //end if
              ?>
              <!-- End Loop -->
          </div>

          <div class="four columns">
              <?php get_sidebar(); ?>
          </div>

     </section>
 <!-- End Section Container -->

 <?php get_footer(); ?>

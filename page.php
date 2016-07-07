<?php get_header(); ?>

<!-- Begin Section Container -->
     <section class="row">
          <div class="twelve columns">
            <div id="page-content">
              <!-- Begin Loop -->
              <?php
                  if ( have_posts() ) {
                      while ( have_posts() ) {
                        the_post(); ?>

                        <?php the_content(); ?>

                <?php
                    } //end while
                  } //end if
              ?>
              <!-- End Loop -->
            </div>
          </div>

     </section>
 <!-- End Section Container -->

 <?php get_footer(); ?>

<?php get_header(); ?>

<!-- Begin Section Container -->
     <section class="row">
          <div class="eight columns">
            <div id="page-content">
              <!-- Begin Loop -->
              <?php
                  if ( have_posts() ) {
                      while ( have_posts() ) {
                        the_post(); ?>

                        <h2 id="page-heading"><?php the_title(); ?></h2>
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

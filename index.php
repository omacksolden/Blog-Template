    <?php get_header(); ?>

    <!-- Begin Section Container -->
         <section class="row">
              <div class="twelve columns">
                  <!-- Begin Loop -->
                  <?php query_posts('showposts=4'); ?>
                  <?php
                      if ( have_posts() ) {
                          while ( have_posts() ) {
                            the_post(); ?>
                            <?php
                            if ( has_post_thumbnail() ) {
                              the_post_thumbnail('full');
                                }
                            ?>
                            <h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <a href="<?php the_permalink(); ?>">Read More</a>

                    <?php
                        } //end while
                      } //end if
                  ?>
                  <!-- End Loop -->
              </div>
         </section>
     <!-- End Section Container -->

     <?php get_footer(); ?>

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
                            <div id="post">
                            <p id="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            <p id="date"><?php echo get_the_date(); ?></p>
                            <a href="<?php the_permalink(); ?>"><p id="readmore">READ MORE</a>
                            </div>
                    <div id="space"></div>
                    <?php
                        } //end while
                      } //end if
                  ?>
                  </div>
                  <!-- End Loop -->
         </section>

     <!-- End Section Container -->

     <?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
       <div class="inner ">
        
        <h2><span>Upcoming Trips</span></h2>
        <div class="upcoming-trips">  
          <?php 
                $args=array(
                    'post_type'=>'travel-menu',
                    'posts_per_page'=>3
                );
                $travels=new WP_Query($args);

                while($travels->have_posts()):$travels->the_post();
                ?>
                <a href="<?php the_permalink(); ?>">
                  <div class="trip">
                    <div class="trip-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="trip-title">
                      <h3><?php the_title() ?></h3>
                      <p><?php echo get_field('leaving_date').' till '.get_field('return_date');?></p>
                    </div>
                  </div>
                </a>

              <?php endwhile; ?>
          </div>

          
        
         <div class="blog-and-testimonials">
                <div class="home-blog">
                <h2><span>Travel Tips From Our Blog</span></h2>
                  <?php 
                  $args=array(
                      'post_type'=>'post',
                      'posts_per_page'=>2
                  );
                  $blog=new WP_Query($args);

                  while($blog->have_posts()):$blog->the_post();
                  ?>
                  <div class="smallBlog">

                    <div class="smallBlog-img">
                    <?php the_post_thumbnail(); ?>
                    <span class="boxImg"></span>
                    </div>

                    <div class="smallBlog-content">
                      <h3><?php the_title(); ?></h3>
                      <a href="<?php the_permalink(); ?>">
                      <p><?php the_excerpt('Continue Reading'); ?></p>
                      </a>
                    </div>


                  </div>
                  <?php endwhile; ?>
                </div>

                <div class="home-testimonials">
                <h2><span>Testimonials</span></h2>
                <?php 
                    $args=array(
                        'post_type'=>'testimonial-menu'
                    );
                    $test=new WP_Query($args);
                    while($test->have_posts()):$test->the_post(); ?>
                          

                          <div class="test">
                              <div class="test-title">
                              
                              </div>
                              
                              <div class="test-content">
                              <?php the_content(); ?>
                                <div class="test-author">
                                    <?php the_field('author') ?>
                                </div>
                              </div>

                          </div>

                          
                      <?php endwhile; ?>
                      <div class="view-test">
                       <a href="<?php echo get_permalink(get_page_by_title('Testimonials')); ?>">
                        View All
                       <a>
                      </div>
                </div>
         </div>

       </div>
</div>

<?php get_footer(); ?>
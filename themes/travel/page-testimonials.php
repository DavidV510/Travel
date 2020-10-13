<?php

/*
    Template Name: Testimonials Page
*/ 

get_header(); ?>

<div class="container">
      <div class="inner">
       <h2><span><?php echo get_the_title(); ?></span></h2>
       
       <p class="happy">Read the Testimonials from our happy clients</p>
       <div class="inner-test">

       <?php 
       $args=array(
           'post_type'=>'testimonial-menu'
       );
       $test=new WP_Query($args);
       while($test->have_posts()):$test->the_post(); ?>
            

            <div class="test">
                <div class="test-title">
                <?php the_title(); ?>
                </div>
                
                <div class="test-content">
                <?php the_content(); ?>
                   <div class="test-author">
                       <?php the_field('author') ?>
                   </div>
                </div>

            </div>

            
        <?php endwhile; ?>
       </div>
       
    </div>
  </div>

<?php get_footer(); ?>
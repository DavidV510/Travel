<?php

/*
    Template Name: Tours Page
*/ 

get_header(); ?>

   
     <div class="container">
       <div class="inner ">
        <h2><span><?php echo get_the_title(); ?></span></h2>
        <div class="toursGrid">
                <?php 
                $args=array(
                    'post_type'=>'travel-menu'
                );
                $travels=new WP_Query($args);

                while($travels->have_posts()):$travels->the_post();
                ?>
        
        <div class="inner-cont tour">
           <div class="tour-img">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
           </div>
           <div class="tour-content">
                <div class="tour-inner">
                   <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                  </a>
                    <div class="tourDate">
                        <?php echo get_field('leaving_date').' till '.get_field('return_date');?>
                        <div class="tour-price">
                        <p><?php the_field('price'); ?>$</p>
                        </div>
                    </div>
                    <p>Starting from:<?php the_field('location_for_depa'); ?></p>
                    <p>Available Seats: <?php the_field('available_seats'); ?></p>
                   
                    <p><?php the_field('small_description'); ?></p>
                </div>
                
                
           </div>
          
        </div>
        
        <?php endwhile; ?>
        </div>


      </div>
   </div>

<?php get_footer(); ?>
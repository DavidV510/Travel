<?php 

  /*
  Template Name:About Us
  */ 
  get_header();
?>

<?php while(have_posts()):the_post(); ?>
  
   <div class="container">
       <div class="inner">
        <h2><span><?php the_title(); ?></span></h2>
        
        <div class="inner-cont">
           <div class="par">
           <p><?php the_content(); ?></p>
           </div>
           <div class="images">
                <div class="img1">
                    <img src="<?php the_field('aboutimg_1'); ?>" alt="">
                    <span class="boxImg"></span>
                </div>
                <div class="img2">
                    <img src="<?php the_field('aboutimg_2'); ?>" alt="">
                    <span class="boxImg"></span>
                </div>
           </div>
        </div>

      </div>
   </div>
<?php endwhile; ?>
<?php get_footer(); ?>
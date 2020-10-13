<?php 

  get_header();
?>

<?php while(have_posts()):the_post(); ?>
  
   <div class="container">
       <div class="inner">
        <h2><span><?php the_title(); ?></span></h2>
        
        <div class="contact" style="display: block;">
        <?php the_content(); ?>
        </div>

      </div>
   </div>
<?php endwhile; ?>
<?php get_footer(); ?>
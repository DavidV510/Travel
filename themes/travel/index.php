<?php get_header(); ?>

<div class="container">
      <div class="inner">
       <h2><span>Our Blog</span></h2>
      </div>
    
      <div class="blog-container">
        <?php while(have_posts()):the_post(); ?>
         <div class="blog">
            <div class="blog-image">
                <?php the_post_thumbnail() ?>
                <span class="boxImg"></span>
            </div>
            <div class="blog-content">

                <div class="blog-semi-cont">
                    <div class="blog-title">
                     <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                     </a>
                    </div>
                    <div class="blog-cont">
                       <p> <?php the_excerpt(); ?></p>
                    </div>
                </div>

                <div class="blog-date">
                    <p>Published on:<?php the_date('F M,Y') ?><br><br>
                    By: <?php the_author(); ?>
                    </p>
                </div>

            </div>
         </div>
        <?php endwhile; ?>
      </div>
</div>
<?php get_footer(); ?>
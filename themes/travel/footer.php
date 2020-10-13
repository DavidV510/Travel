<div class="foot">
    <div class="about">
        <?php 
        $post = get_post(6); 
        $content = apply_filters('the_content', $post->post_content); 
        
        ?>
        <h1>About Us</h1>
        <p>
            <?php echo $content;   ?>
        </p>
    </div>


    <div class="blogAndTours">
        <div class="tour">
            <h1>Upcoming Tours</h1>
            <?php $q=array(
                    'post_type'=>'travel-menu',
                    'posts_per_page'=>2,
                    'order'=>'rand'
                ); ?>

                <ul class="tours">
                    <?php 
                    $travels=new WP_Query( $q );
                    while($travels->have_posts()):$travels->the_post();
                    ?>
                    <li class="clear">
                        <div class="feature-tour">
                            <?php the_post_thumbnail(); ?>
                            <span class="boxImg"></span>
                        </div>

                        <div class="content-tour">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                        </div>
                    </li>

                <?php endwhile;wp_reset_postdata(); ?>
                </ul>
        </div>

        <div class="Blog">
            <h1>Blog Tips</h1>
            <?php $args=array(
                        'post_type'=>'post',
                        'posts_per_page'=>2,
                        'order'=>'rand'
                    ); ?>

                    <ul class="blogs">
                        <?php 
                        $posts=new WP_Query( $args );
                        while($posts->have_posts()):$posts->the_post();
                        ?>
                        <li class="clear">
                            <div class="feature-tour">
                                <?php the_post_thumbnail(); ?>
                                <span class="boxImg"></span>
                            </div>

                            <div class="content-tour">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                            </div>
                        </li>

                    <?php endwhile;wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>


    <div class="coupons">
             <h1>Coupons</h1>
             <?php $args=array(
                        'post_type'=>'Coupon-menu',
                        'posts_per_page'=>2,
                        'order'=>'rand'
            ); ?>
            <ul class="Cpns">
                        <?php 
                        $coupons=new WP_Query( $args );
                        while($coupons->have_posts()):$coupons->the_post();
                        ?>
                        <li class="clear">
                            <div class="feature-tour">
                                <img src="<?php the_field('coupon_img') ?>" alt="">
                                <span class="boxImg"></span>
                            </div>
                        </li>

                    <?php endwhile;wp_reset_postdata(); ?>
            </ul>
    </div>
</div>

<?php wp_footer() ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</body>
</html>
<?php get_header(); ?>

    <div class="BigSearch">
    <?php echo sprintf(_('%s Search Results for '),$wp_query->found); ?>
    <?php get_template_part('template-parts/page','loop'); ?>
    </div>

<?php get_footer(); ?>
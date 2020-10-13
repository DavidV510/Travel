<?php 

if(file_exists(dirname(__FILE__).'/inc/widgets.php')){
    require_once dirname(__FILE__).'/inc/widgets.php';
};

function travel_menu(){
    register_nav_menus(array(
        'main-menu'=>'Main Menu'
    ));
}

function travel_scripts(){
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css',array(),'8.0.1');
    wp_enqueue_style('head',get_template_directory_uri().'/css/header.css',NULL, '1.0.4.4');
    wp_enqueue_style('foot',get_template_directory_uri().'/css/footer.css',NULL, '1.0.4.4');
    wp_enqueue_style('about',get_template_directory_uri().'/css/about.css',NULL, '1.0.4.4');
    wp_enqueue_style('sideAbout',get_template_directory_uri().'/css/sideAbout.css',NULL, '1.0.4.4');
    wp_enqueue_style('home',get_template_directory_uri().'/css/home.css',NULL, '1.0.4.4');
    wp_enqueue_style('test',get_template_directory_uri().'/css/test.css',NULL, '1.0.4.4');
    
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','head','foot','about','sideAbout','test','home'), '1.0.4.4');

    
    wp_enqueue_script('jquery');

    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.2',true);
}

function travel_thumbnails(){
    add_image_size( 'small',100,100,true );
    add_image_size('medium',250,300,true);

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

function slider(){
    $args=array(
        'post_type'=>'slide-menu',
    );
    $slider=new WP_Query($args);
    echo "<ul class='slider'";
    while($slider->have_posts()):$slider->the_post();
        echo "<li>";
        the_post_thumbnail();
        echo "</li>";
    endwhile;wp_reset_postdata();
    echo "</ul>";
}

function responsive_img($post_id){
    $attach_id=get_post_thumbnail_id($post_id);

    $thumb_large=wp_get_attachment_image_src($attach_id,'tourFront');
    $thumb_medium=wp_get_attachment_image_src($attach_id,'featuredTour');

    // $thumb_data=array(
    //     'thumb_large'=> $thumb_large[0];
    //     'thumb_medium'=>$thumb_medium[0];
    // );
}




function wpdocs_excerpt_more( $more ) {
    global $post;
    get_permalink($post->ID);
    return '<br> <a href="'. get_permalink($post->ID) .'"> <div class="more"> Continue Reading</div> </a>';
}


function travel_widgets(){
    register_sidebar(array(
        'name'=>'Widget 1',
        'id'=> 'widget_1',
        'before_widget'=> '<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));
    register_sidebar(array(
        'name'=>'Widget 2',
        'id'=> 'widget_2',
        'before_widget'=> '<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));
}

// register Up Coming widget
function register_upcoming_tours() {
    register_widget( 'Upcoming_Tours' );
}

// Register Blog Widget

function register_blog(){
    register_widget('Blog_Entries');
}


function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('travel-menu','page'));
    }
 
return $query;
}




// Admin Support 
function admin_styles(){
    wp_enqueue_style('loginCSS', get_template_directory_uri().'/login/css/loginStyles.css','1.0.3.9');
    wp_enqueue_style('vegasCSS', get_template_directory_uri().'/login/css/vegas.min.css',false);


    wp_enqueue_script('jquery');
    wp_enqueue_script('loginJS', get_template_directory_uri().'/login/js/login.js', array('jquery'),' 1.0.1', true);
    wp_enqueue_script('vegasJS', get_template_directory_uri().'/login/js/vegas.min.js', array('jquery'),' 1.0.0', true);

    wp_localize_script(
        'loginJS',
        'logOptions',
        array(
            "full_path"=>get_template_directory_uri().'/login/img/overlays/'
        )
    );
}
add_action('login_enqueue_scripts','admin_styles',10);



 

//Hooks
add_action('init','travel_menu');
add_action('wp_enqueue_scripts', 'travel_scripts');
add_action('after_setup_theme','travel_thumbnails');
add_action('slider_index','slider');
add_action('widgets_init','travel_widgets');
add_filter('excerpt_more', 'wpdocs_excerpt_more' );
add_action('widgets_init', 'register_upcoming_tours' );
add_action('widgets_init','register_blog');
add_filter('pre_get_posts','searchfilter');
?>
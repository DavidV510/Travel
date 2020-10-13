<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>Travel David</title>
    <?php wp_head(); ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css" integrity="sha512-1gVXQF5Q9gL1HvHBLK0y3IAWCorLY9EU+JMTsLBlXgWfgf6EIS/8B27R/nUq1joeKz2N7ZHCNnLCjc+PuqDqDA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js" integrity="sha512-0kQqdmb3fpKtRwrbCZDlmiwuZgDyPAOLDOu/HyAt4py7lAVDXKknqtqS6dFNV8U8JrHZymQxlO9SFPZ2u8dhMw==" crossorigin="anonymous"></script>
     
  
</head>
<body>

 


    
       <section class="sliderbig">
      
        <?php do_action('slider_index'); ?>
          <div class="headSub">
           <div class="head-cont">

                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                    <img class="logo-img" src="<?php echo get_template_directory_uri()."/img/logo.svg" ?>" alt="">
                    </a>
                </div>
                <div class="mobile-menu">
                  <a href="#" class="mobileBar"><i class="fa fa-bars">  <span class="mobileText">Menu</span></i></a>
               </div>
               <div class="travel-menu">
                <?php 
                    wp_nav_menu( array('theme_location'=>'main-menu'));
                ?>
                </div>

           </div>
        </div>
        <div class="travel-menu-mobile">
                <?php 
                    wp_nav_menu( array('theme_location'=>'main-menu'));
                ?>
         </div>
        <?php get_template_part('template-parts/searchform') ?>
       </section>
      
    <?php  ?>
    
    
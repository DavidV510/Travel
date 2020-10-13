jQuery(document).ready(function(){
    jQuery('.slider').bxSlider({
        mode:'horizontal'
    });

    jQuery('.mobile-menu a').on('click',function(){
        jQuery('.travel-menu-mobile #menu-head-menu-1').toggle('slow')
    });

})
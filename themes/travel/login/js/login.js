jQuery(document).ready(function(){
    jQuery('body').vegas({
        slides: [
            { src: logOptions.full_path+'01.jpg' },
            { src: logOptions.full_path+'02.jpg' },
            { src: logOptions.full_path+'03.jpg' }           
           
        ],
        overlays: logOptions.full_path+'03.png'
    });
})
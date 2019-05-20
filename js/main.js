jQuery(window).on('load', function () {
    $('.carousel').carousel({
        interval: 2000
    });

    /* Select arrow control  */ 
    var open = 0;
    $('.custom-select').blur(function(){
        if(open != 0) {
            $('.custom-select').removeClass('opened');
            open = 0;
        } 
    });

    $('.custom-select').click(function(){
        if(open == 0) {
            $('.custom-select').addClass('opened');
            open = 1;
        } else {
            $('.custom-select').removeClass('opened');
            open = 0;
        }
    });
    
});



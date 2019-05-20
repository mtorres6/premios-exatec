jQuery(window).on('load', function () {
    $('.carousel').carousel({
        interval: 2000
    });
    
    $('.custom-select').click(function(){
        $(this).toggleClass('opened');
    });

});

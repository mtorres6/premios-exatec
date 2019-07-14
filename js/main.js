jQuery(window).on('load', function () {
    $('.slider-states').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        nextArrow: '<button class="button-general button-control button-states button-right"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="button-general button-control button-states button-left"><i class="fas fa-chevron-left"></i></button>',
    });

    /*var fileInput = document.querySelector('.form-input-file');
    var fileInputText = document.querySelector('.form-input--file-text');
    fileInputTextContent = fileInputText.textContent;

    fileInput.addEventListener('change', function(e) {
        var value = e.target.value.length > 0 ? e.target.value : fileInputTextContent;
        
        fileInputText.textContent = value.replace('C:\\fakepath\\', '');
    });*/

});


jQuery(window).on('load', function () {
    $('.slider-states').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        nextArrow: '<button class="button-general button-control button-states button-right"></button>',
        prevArrow: '<button class="button-general button-control button-states button-left"></button>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ]
    });

    $('.slider-testimonial').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        infinite: true,
        centerPadding: '9%',
        speed: 500,
        variableWidth: false,
        nextArrow: '<button class="button-general button-control button-testimonial button-right"></button>',
        prevArrow: '<button class="button-general button-control button-testimonial button-left"></button>',
        responsive: [
            {
                breakpoint: 1290,
                settings: {
                    centerPadding: '7%'
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '8%'
                }
            },
            {
                breakpoint: 1120,
                settings: {
                    centerPadding: '6%'
                }
            },
            {
                breakpoint: 1030,
                settings: {
                    centerPadding: '4%'
                }
            },
            {
                breakpoint: 992,
                settings: {
                    centerPadding: '8%'
                }
            },
            {
                breakpoint: 850,
                settings: {
                    centerPadding: '5%'
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '8%'
                }
            },
            {
                breakpoint: 717,
                settings: {
                    centerPadding: '6%'
                }
            },
            {
                breakpoint: 727,
                settings: {
                    centerPadding: '4%'
                }
            },
            {
                breakpoint: 632,
                settings: {
                    centerPadding: '4%'
                }
            },
            {
                breakpoint: 600,
                settings: {
                    centerPadding: '6%'
                }
            },
            {
                breakpoint: 580,
                settings: {
                    centerPadding: '2%'
                }
            },
            {
                breakpoint: 540,
                settings: {
                    centerPadding: '9%'
                }
            },
            {
                breakpoint: 521,
                settings: {
                    centerPadding: '10%'
                }
            },
            {
                breakpoint: 510,
                settings: {
                    centerPadding: '9%'
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerPadding: '9%'
                }
            },
            {
                breakpoint: 488,
                settings: {
                    centerPadding: '8%'
                }
            },
            {
                breakpoint: 400,
                settings: {
                    centerPadding: '5%'
                }
            }
        ]
    });

    /*var fileInput = document.querySelector('.form-input-file');
    var fileInputText = document.querySelector('.form-input--file-text');
    fileInputTextContent = fileInputText.textContent;

    fileInput.addEventListener('change', function(e) {
        var value = e.target.value.length > 0 ? e.target.value : fileInputTextContent;
        
        fileInputText.textContent = value.replace('C:\\fakepath\\', '');
    });*/

});


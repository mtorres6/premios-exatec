jQuery(window).on('load', function () {
    $('.carousel').carousel({
        interval: 4000
    });

    /* Select arrow control */ 
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

    /* Display campus information */ 
    $(".custom-select").change(function(){
        var selectedCampus = $(this).children("option:selected").val();
        
        if(selectedCampus == "0") {
            $('.info-campus').removeClass('open-info-campus'); 
        }

        if(selectedCampus == "ags") { 
            $('.info-campus').removeClass('open-info-campus'); 
            $('.info-campus-ags').addClass('open-info-campus'); 
        }

        if(selectedCampus == "obr") { 
            $('.info-campus').removeClass('open-info-campus'); 
            $('.info-campus-obr').addClass('open-info-campus'); 
        }

        if(selectedCampus == "sin") { 
            $('.info-campus').removeClass('open-info-campus'); 
            $('.info-campus-sin').addClass('open-info-campus'); 
        }

        if(selectedCampus == "son-nte") { 
            $('.info-campus').removeClass('open-info-campus'); 
            $('.info-campus-son-nte').addClass('open-info-campus');
        }

        if(selectedCampus == "zac") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-zac').addClass('open-info-campus');
        }

        if(selectedCampus == "gdl") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-gdl').addClass('open-info-campus');
        }

        if(selectedCampus == "hdgo") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-hdgo').addClass('open-info-campus');
        }

        if(selectedCampus == "cva") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-cva').addClass('open-info-campus');
        }

        if(selectedCampus == "tol") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-tol').addClass('open-info-campus');
        }

        if(selectedCampus == "pue") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-pue').addClass('open-info-campus');
        }

        if(selectedCampus == "chia") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-chia').addClass('open-info-campus');
        }

        if(selectedCampus == "cdmx") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-cdmx').addClass('open-info-campus');
        }

        if(selectedCampus == "edomex") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-edomex').addClass('open-info-campus');
        }

        if(selectedCampus == "sta-fe") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-sta-fe').addClass('open-info-campus');
        }

        if(selectedCampus == "qro") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-qro').addClass('open-info-campus');
        }
        
        if(selectedCampus == "mor") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-mor').addClass('open-info-campus');
        }

        if(selectedCampus == "slp") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-slp').addClass('open-info-campus');
        }

        if(selectedCampus == "leon") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-leon').addClass('open-info-campus');
        }

        if(selectedCampus == "ira") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-ira').addClass('open-info-campus');
        }

        if(selectedCampus == "mty") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-mty').addClass('open-info-campus');
        }

        if(selectedCampus == "sal") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-sal').addClass('open-info-campus');
        }

        if(selectedCampus == "cdjrz") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-cdjrz').addClass('open-info-campus');
        }

        if(selectedCampus == "tam") {
            $('.info-campus').removeClass('open-info-campus'); 
            $('.info-campus-tam').addClass('open-info-campus');
        }

        if(selectedCampus == "lag") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-lag').addClass('open-info-campus');
        }

        if(selectedCampus == "chih") { 
            $('.info-campus').removeClass('open-info-campus');
            $('.info-campus-chih').addClass('open-info-campus');
        }
    });
    
});



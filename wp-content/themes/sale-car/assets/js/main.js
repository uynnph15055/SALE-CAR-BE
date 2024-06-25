jQuery( document ).ready(function($) {
     // Btn back top
     $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('#backTop').fadeIn();
        } else {
            $('#backTop').fadeOut();
        }
    });

    $("#backTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
    });
    
    // SLIDER DESCRIPTION
    $('.slider-bag .list').owlCarousel({
        nav: true,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        navText: [$('.btn-prev'),$('.btn-next')],
        animateIn: 'fadeIn',
        mouseDrag: true,
        singleItem: true,
        responsive: {
            0:{
                items:1,
            },
            749:{
                items:2,
            },
            1000:{
                items:1,
            },
            1470:{
                items:1,
            },
            1800:{
                items:1,
            }   
        }
    });

    $('.company .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout:3000,
        autoplayHoverPause: true,
        animateIn: 'fadeIn',
        mouseDrag: true,
        singleItem: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        responsive: {
            0:{
                items:1,
            },
            749:{
                items:1,
            },
            1000:{
                items:1,
            },
            1470:{
                items:1,
            },
            1800:{
                items:1,
            }   
        }
    });

    
$('.service-slider').owlCarousel({
        nav: true,
        loop: true,
        margin: 30,
        // autoplay: true,
        autoplayTimeout:3000,
        autoplayHoverPause: true,
        navText: [$('.btn-service-prev'),$('.btn-service-next')],
        animateIn: 'fadeIn',
        mouseDrag: true,
        singleItem: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        responsive: {
            0:{
                items:1,
            },
            749:{
                items:2,
            },
            1000:{
                items:3,
            },
            1470:{
                items:3,
            },
            1800:{
                items:3,
            }   
        }
    });
})
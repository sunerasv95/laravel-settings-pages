$(window).on("load", function () {



    "use strict";

    /* ===================================

            Loading Timeout

     ====================================== */



    $('.side-menu').removeClass('hidden');



    setTimeout(function(){

        $('.loader-bg').fadeToggle();



    }, 1500);



    // $('.navbar-collapse .navbar-nav .nav-link:nth-child(1)').addClass('active');

    $('.navbar-collapse .navbar-nav .nav-link:nth-child(2)').removeClass('active');

});



jQuery(function ($) {



    "use strict";



    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 260) { // Set position from top to add class

            $('header').addClass('header-appear');

        }

        else {

            $('header').removeClass('header-appear');

        }

    });



    //scroll to appear

    $(window).on('scroll', function () {

        if ($(this).scrollTop() > 500)

            $('.scroll-top-arrow').fadeIn('slow');

        else

            $('.scroll-top-arrow').fadeOut('slow');

    });



    //Click event to scroll to top

    $(document).on('click', '.scroll-top-arrow', function () {

        $('html, body').animate({scrollTop: 0}, 800);

        return false;

    });



    $(".scroll").on("click", function (event) {

        event.preventDefault();

        $("html,body").animate({

            scrollTop: $(this.hash).offset().top - 60}, 1200);

    });



    $(".slider-btn").on("click", function (event) {

        event.preventDefault();

        $("html,body").animate({

            scrollTop: $(this.hash).offset().top - 60}, 1200);

    });



    /* ===================================

        Side Menu

    ====================================== */



    // if ($("#sidemenu_toggle").length) {

    //     $("#sidemenu_toggle").on("click", function () {

    //         $(".pushwrap").toggleClass("active");

    //         $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)

    //     }), $("#close_side_menu").on("click", function () {

    //         $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")

    //     }), $(".side-nav .navbar-nav .nav-link").on("click", function () {

    //         $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")

    //     }), $("#btn_sideNavClose").on("click", function () {

    //         $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")

    //     });

    // }

    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function () {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }),
         $(".side-nav .dropdown-content-subnav-mobile-subnav a").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
            
        }), 
        $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }



    /* ===================================

         Side Menu Animation

    ====================================== */



    $(".side-nav .navbar-nav .nav-item .nav-link").on("mouseenter", function () {

        var value = $(this).text();

        $("#mega-title .inner-mega-title").addClass('animation-effect').text(value);

    });



    $(".side-nav .navbar-nav .nav-item .nav-link").on("mouseleave", function () {

        $("#mega-title .inner-mega-title").removeClass('animation-effect');

    });



    $(".side-nav .navbar-nav .nav-item .nav-link").on("click", function () {

        $('body').addClass('cursor-change');



        setTimeout(function(){

            $('body').removeClass('cursor-change');

        }, 1500);

    });



    /* ===================================

       Mouse parallax

     ====================================== */



    $('.slider-section').mousemove(function(e) {

        $('[data-depth]').each(function () {

            var depth = $(this).data('depth');

            var amountMovedX = (e.pageX * -depth/4);

            var amountMovedY = (e.pageY * -depth/4);



            $(this).css({

                'transform':'translate3d(' + amountMovedX +'px,' + amountMovedY +'px, 0)',

            });

        });

    });



    /* ====================================

       da-thumb (Portfolio)

    *==================================== */



   $(function() {

    $('.da-thumbs > li ').each( function() { $(this).hoverdir(); } );

});



/* =====================================

    Portfolio-Isotope

====================================== */



        

    

    

    /*===================================

        Animated Progress Bar

   ====================================== */



    $(".progress-bar").each(function () {

        $(this).appear(function () {

            $(this).animate({width: $(this).attr("aria-valuenow") + "%"}, 2000)

        });

    });



    

    /*===================================

        Go Top Scroll

   ====================================== */

    $(function(){

        // Scroll Event

        $(window).on('scroll', function(){

            var scrolled = $(window).scrollTop();

            if (scrolled > 600) $('.go-top').addClass('active');

            if (scrolled < 600) $('.go-top').removeClass('active');

        });

        // Click Event

        $('.go-top').on('click', function() {

            $("html, body").animate({ scrollTop: "0" },  500);

        });

    });



    /* =====================================

          Parallax

   ====================================== */



    if ($(window).width() > 992) {

        $(".parallax").parallaxie({

            speed: 0.55,

            offset: 0,

        });

    }



    /* ===================================

        WOW Animation

    ====================================== */



    if ($(window).width() > 991) {

        var wow = new WOW({

            boxClass: 'wow',

            animateClass: 'animated',

            offset: 0,

            mobile: false,

            live: true

        });

        new WOW().init();

    }



    



    /*===================================

        Owl Carousel

    ====================================== */

    



    //Partner Owl

    $('.partners-slider').owlCarousel({

        items: 5,

        autoplay: 1500,

        smartSpeed: 1500,

        autoplayHoverPause: true,

        slideBy: 1,

        loop: true,

        margin: 30,

        dots: true,

        nav: false,

        responsiveClass:true,

        responsive: {

            1200: {

                items: 4,

            },

            768: {

                items: 3,

            },

            480: {

                items: 2,

            },

            320: {

                items: 1,

            },

        }

    });



    //Media & Awards Owl

    $('.media-awards-slider').owlCarousel({

        items: 5,

        autoplay: 1500,

        smartSpeed: 1500,

        autoplayHoverPause: true,

        slideBy: 1,

        loop: true,

        margin: 30,

        dots: true,

        nav: false,

        responsiveClass:true,

        responsive: {

            1200: {

                items: 5,

            },

            768: {

                items: 3,

            },

            480: {

                items: 2,

            },

            320: {

                items: 1,

            },

        }

    });



    

    /* ===================================

     Products Carousel

    ====================================== */



    $(".owl-sdgs").owlCarousel({

        items: 5,

        dots: true,

        nav: true,

        loop: true,

        center:false,

        autoplay: false,

        autoplayHoverPause:true,

        slideSpeed: 3000,

        paginationSpeed: 5000,

        smartSpeed:1000,

        responsive: {

            

            1200: {

                items: 4

            },

            

            600: {

                items: 2

            },

            320: {

                items: 1

            },

            280: {

                items: 1

            }

        }

    });



    var owl = $('.owl-sdgs');

    owl.owlCarousel();

    $('#team-circle-left').click(function () {

        owl.trigger('prev.owl.carousel');

    });



    $('#team-circle-right').click(function () {

        owl.trigger('next.owl.carousel');

    });



    //Slider home index

    $("#vertical-bullets").show().revolution({

        sliderType: "standard",

        sliderLayout: "fullscreen",

        scrollbarDrag: "true",

        dottedOverlay: "none",

        navigation: {

            keyboardNavigation: "on",

            keyboard_direction: "horizontal",

            mouseScrollNavigation: "off",

            mouseScrollReverse: "default",

            onHoverStop: "off",

            bullets: {

                enable: false,

                hide_onmobile: true,

                hide_under: 769,

                style: "agency",

                hide_onleave: false,

                direction: "vertical",

                h_align: "left",

                v_align: "center",

                h_offset: 30,

                v_offset: 0,

                space: 5,

                tmp: '<div class="tp-bullet-inner"></div><div class="tp-line"></div>'

            },

            touch: {

                touchenabled: "on",

                swipe_threshold: 75,

                swipe_min_touches: 1,

                swipe_direction: "horizontal",

                drag_block_vertical: false

            },

        },

        viewPort: {

            enable: true,

            outof: "pause",

            visible_area: "90%",

            presize: true

        },

        responsiveLevels: [4096, 1260, 778, 480],

        visibilityLevels: [4096, 1260, 778, 480],

        gridwidth: [1300, 1024, 750, 480],

        gridheight: [700, 500, 500, 350],

        lazyType: "none",

        parallax: {

            type: "mouse",

            origo: "enterpoint",

            speed: 400,

            speedbg: 0,

            speedls: 0,

            levels: [2, 3, 5, 10, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],

            disable_onmobile: "on"

        },

        shadow: 0,

        spinner: "off",

        stopLoop: "off",

        stopAfterLoops: -1,

        stopAtSlide: -1,

        shuffle: "off",

        autoHeight: "off",

        hideThumbsOnMobile: "off",

        hideSliderAtLimit: 0,

        hideCaptionAtLimit: 360,

        hideAllCaptionAtLilmit: 360,

        debugMode: false,

        fallbacks: {

            simplifyAll: "on",

            nextSlideOnWindowFocus: "off",

            disableFocusListener: false,

        }

    });





//*******************NEWS SECTION CAROUSAL***************

    $('.news-carousal').owlCarousel({

        items:3,

        loop:false,

        center:false,

        // margin:20,

        nav:true,

        dots:true,

        responsive:{

            0:{

                items:1

            },

            800:{

                items:2

            },

            1000:{

                items:3

            }

        }

    });







});
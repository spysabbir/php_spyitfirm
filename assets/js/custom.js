$(document).ready(function () {

    // Scroll Menubar
    window.addEventListener("scroll", function () {
        var header = document.querySelector("#header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });

    // Slick Slider 
    //-----------------------------------------------

    // Banner Slider
    $('.banner_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        fade: true,
        speed: 3000,
        draggable: true,
    });

    // testimonial slider
    $('.testimonial_slide').slick({
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        draggable: true,
        asNavFor: '.slider_nav'
    });

    $('.slider_nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.testimonial_slide',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 991.98,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // Team Slider
    $('.team_slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 991.98,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                }
            },
        ]
    });

    // Latest Project Slider
    $('.latest_project_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 991.98,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // Clients Slider
    $('.clients_slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 991.98,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                }
            },
        ]
    });

    // Blog Slider
    $('.blog_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 991.98,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // Process Slider
    $('.process_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
    });

    // Counter Up
    $('.counter_up').counterUp({
        delay: 10,
        time: 3000
    });

    // Isotope filters
    if ($('.isotope-container').length > 0) {
        $(window).load(function () {
            $('.isotope-container').fadeIn();
            var $container = $('.isotope-container').isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'masonry',
                transitionDuration: '0.6s',
                filter: "*"
            });
            // filter items on button click
            $('.filters').on('click', 'ul li a', function () {
                var filterValue = $(this).attr('data-filter');
                $(".filters").find("li.active").removeClass("active");
                $(this).parent().addClass("active");
                $container.isotope({
                    filter: filterValue
                });
                return false;
            });
        });
    };


    // Top to bottom
    $(window).scroll(function () {
        let scrollToTop = $(this).scrollTop();

        if (scrollToTop > 300) {
            $('.top_to').fadeIn();
        } else {
            $('.top_to').fadeOut();
        }
    });

    $('.top_to').click(function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 3000);
    });


});



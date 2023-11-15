$(document).ready(function () {

    $(window).scroll(function () {
        var scrollfixed = $(this).scrollTop()
        if (scrollfixed > 0) {
            $(".main-nav").addClass("fixed")
        } else {
            $(".main-nav").removeClass("fixed")
        }
    });

    $(".login_sec_top").click(function () {
        $(this).toggleClass("active");
    });
    
    $(".top_search_btn").click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active")
            $(".main_wapper_header").fadeOut("slow");
            $(".close_btn").fadeOut()
        } else {
            $(this).addClass("active")
            $(".main_wapper_header").fadeIn("slow");
            $(".close_btn").fadeIn()
        }
    });

    $(".main_banner_slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
    });

    $(".best_saller_bottom_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
    });




});

// Range


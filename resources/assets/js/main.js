$(document).ready(function () {

    if ($(window).scrollTop() >= 200) {
        $('.header__main').addClass('reduce');
    } else {
        $('.header__main').removeClass('reduce');
    }


    $(window).scroll(function(event) {

        if ($(window).scrollTop() >= 200) {
            $('.header__main').addClass('reduce');
        } else {
            $('.header__main').removeClass('reduce');
        }

        if($(window).scrollTop() >= 100) {
            $('.scroll-down').removeClass('fadeInDown');
            $('.scroll-down').addClass('fadeOutUp');
        } else {
            $('.scroll-down').removeClass('fadeOutUp');
            $('.scroll-down').addClass('fadeInDown');
        }

    });


});

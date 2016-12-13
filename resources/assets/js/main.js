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
    });


});
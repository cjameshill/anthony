$(document).ready(function () {

    $(window).scroll(function(event) {

        if ($(window).scrollTop() >= 200) {
            $('nav.nav__main').addClass('reduce');
        } else {
            $('nav.nav__main').removeClass('reduce');
        }
    });


});
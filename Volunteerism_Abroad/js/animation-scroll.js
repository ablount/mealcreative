$(document).ready(function () {

    $(window).on('load', function () {
        console.log($(window).scrollTop());

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 0) {

            $('#carousel_logo').addClass('animated slideInLeft');
        }

    });
    
        $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 0) {

            $('#faq_title').addClass('animated slideInLeft');
        }

    });


    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 700) {

            $('#collage').addClass('animated fadeInDown');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1000) {

            $('#blue_photo').addClass('animated fadeInLeft');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1600) {

            $('#contact_button').addClass('animated bounce');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 2300) {

            $('#my_faq').addClass('animated tada');
        }

    });



});
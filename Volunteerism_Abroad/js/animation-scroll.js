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

        if (verticalScroll >= 500) {

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

        if (verticalScroll >= 1700) {

            $('#class_photo').addClass('animated fadeInRight');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1900) {

            $('#contact_button').addClass('animated bounce');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 2400) {

            $('#my_faq').addClass('animated tada');
        }

    });



});
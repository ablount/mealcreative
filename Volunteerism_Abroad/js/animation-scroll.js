$(document).ready(function () {


    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 500) {

            $('#collage').addClass('animated fadeInDown');
            $('#collage').removeClass('hide_me');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1500) {

            $('#blue_photo').addClass('animated fadeInLeft');
            $('#blue_photo').removeClass('hide_me');
        }

    });
    
    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1800) {

            $('#class_photo').addClass('animated fadeInRight');
            $('#class_photo').removeClass('hide_me');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 2200) {

            $('#contact_button').addClass('animated bounce');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 2750) {

            $('#my_faq').addClass('animated tada');
        }

    });



});
$(document).ready(function () {

    
    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 500) {

            $('#left_pic').addClass('animated fadeInRight');
            $('#left_pic').removeClass('hide_me');
        }

    });
    
        $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 500) {

            $('#right_pic').addClass('animated fadeInLeft');
            $('#right_pic').removeClass('hide_me');
        }

    });
    

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 500) {

            $('#blue_photo').addClass('animated fadeInLeft');
            $('#blue_photo').removeClass('hide_me');
        }

    });
    
    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 800) {

            $('#class_photo').addClass('animated fadeInRight');
            $('#class_photo').removeClass('hide_me');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1000) {

            $('#contact_button').addClass('animated bounce');
        }

    });

    $(window).scroll(function () {

        var verticalScroll = $(this).scrollTop();

        if (verticalScroll >= 1500) {

            $('#my_faq').addClass('animated tada');
        }

    });



});
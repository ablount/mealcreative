$(document).ready(function () {

    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 0) {

            $('#carousel_logo').addClass('animated slideInLeft');
        }

    });
    
      $(window).on('load', function () {
        console.log($(window).scrollTop());

    });
    
    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 500) {

            $('#collage').addClass('animated fadeInDown');
        }

    });
    
        $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 1220) {

            $('#blue_photo').addClass('animated fadeInLeft');
        }

    });
    
            $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 1920) {

            $('#contact_button').addClass('animated bounce');
        }

    });
    
    
    
});

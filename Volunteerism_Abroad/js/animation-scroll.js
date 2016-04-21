$(document).ready(function () {

    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= 0) {

            $('#carousel_logo').addClass('animated slideInLeft');
        }

    });
    
});

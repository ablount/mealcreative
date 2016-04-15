$(document).ready(function () {

    $(window).scroll(function() {

        var verticalScroll = $(this).scrollTop();

        if(verticalScroll >= x) {

            $('#element').addClass('effect');
        }

    });
});
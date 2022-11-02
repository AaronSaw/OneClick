$(document).ready(function () {

    //Dropdown Menu
    $('.side-dropdown-content').hide();
    $('.sidenav-dropdown').click(function () {
        $('.side-dropdown-content').hide();

        $('.drop-arrow').removeClass('rotate');
        $('.side-dropdown-content').removeClass('show')
        $(this).children('.side-dropdown-content').slideToggle(500);
        $(this).find('.drop-arrow').toggleClass('rotate');

    });

    //Toggle Menu
    $('.btn-gnavi').click(function () {
        var rightVal = 0;
        if ($(this).hasClass('hb-open')) {
            rightVal = -768;
            $(this).removeClass('hb-open');
        } else {
            $(this).addClass('hb-open');
        }

        $('.side-nav').stop().animate({
            right: rightVal
        }, 1000);
    });

    //Alert
    setTimeout(function () {
        $('.alert').fadeOut('fast');
    }, 2000); // <-- time in milliseconds
});




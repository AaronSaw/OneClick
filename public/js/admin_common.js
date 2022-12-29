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
        var leftVal = 0;
        if ($(this).hasClass('hb-open')) {
            leftVal = -768;
            $(this).removeClass('hb-open');
        } else {
            $(this).addClass('hb-open');
        }
        $('.side-nav').toggle(50, "swing");
    });

    //Alert
    setTimeout(function () {
        $('.alert').fadeOut('fast');
    }, 2000); // <-- time in milliseconds
});

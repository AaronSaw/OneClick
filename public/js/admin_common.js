$(document).ready(function(){
    $('ul li a').click(function(){
        $('li a').removeClass("active");
        $(this).addClass("active");
    });
});

$(function(){
    $('li.sidenav-dropdown > a').on('click',function(event){
        event.preventDefault()
        $(this).parent().find('ul').first().toggle(1000,'swing');
        $(this).parent().siblings().find('ul').hide(500);
        //Hide menu when clicked outside
        $(this).parent().find('ul').mouseleave(function(){
        var thisUI = $(this);
        $('html').click(function(){
            thisUI.hide();
            $('html').unbind('click');
        });
        });
    });
});

$(document).ready(function () {
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
});

$(document).ready(function () {
    $('.side-dropdown-content').hide();
    //$('.side-dropdown-content:last-child').show();
    $('.pttl').on('click', function () {
        if ($(this).hasClass('active')) {
            $('.pttl').removeClass('active');
            $(this).addClass('active');
        }
        else {
            $(".pttl").removeClass('active');
            $(this).addClass('active');
            $('.side-dropdown-content').hide(slow);
            $(this).next().show(slow);
        }
    });
});

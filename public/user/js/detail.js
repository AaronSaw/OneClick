$(document).ready(function (){
    $('.seemore').click(function(e){
        e.preventDefault();
        $('.detail-description').addClass('show');
        $(this).css('display', 'none');
        $('.seeless').show();
    });
    $('.seeless').click(function(e){
        e.preventDefault();
        $('.detail-description').removeClass('show');
        $(this).css('display', 'none');
        $('.seemore').show();
    });
});

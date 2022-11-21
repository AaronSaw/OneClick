$(document).ready(function () {
    $('.detail-description').hide();
    let words = $('.detail-short-description').val().length;
    $('.detail-short-description').click(function(e){
        e.preventDefault();
        $('.detail-short-description').hide();
        $('.detail-description').show();
        $(this).css('display', 'none');
    });
    $('.detail-description').click(function(e){
        e.preventDefault();
        $('.detail-short-description').show();
        $('.detail-description').hide();
        $(this).css('display', 'none');
    });
});

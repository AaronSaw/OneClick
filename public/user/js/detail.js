$(document).ready(function () {
    $('.seemore').click(function (e) {
        e.preventDefault();
        $('.detail-shortdescription').hide();
        $('.detail-description').show();
        $('.seeless').show();
        $(this).hide();
    });
    $('.seeless').click(function (e) {
        e.preventDefault();
        $('.detail-shortdescription').show();
        $('.detail-description').hide();
        $('.seemore').show();
        $(this).hide();
    });
});

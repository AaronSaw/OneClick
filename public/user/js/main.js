// Toggle Menu
$(document).ready(function () {
  $(window).on("resize", function () {
    location.reload();
  });
  $(".js-menu").on("click", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(".menu-section").slideDown();
    } else $(".menu-section").slideUp();
  });

    //$('.menu-items .link').on("click", function () {
    //    $('.menu-items .link').removeClass("active");
    //    $(this).addClass("active");
    //});

   // animation
  new WOW().init();

});

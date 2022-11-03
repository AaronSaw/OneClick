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

  // Toggle Menu Accordion
  $(".js-accordion").click(function () {
    $(this).toggleClass("active").next().slideToggle(300);
  });

});

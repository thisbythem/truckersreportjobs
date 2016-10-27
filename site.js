$(document).ready(function () {
  $(".toggle-button").click(function() {
    $(this).toggleClass("on");
    $(".drop-nav-wrap").toggleClass("open");
    $(".site-nav").toggleClass("open");
  });
});

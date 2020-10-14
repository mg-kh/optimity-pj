import * as $ from "jquery";
import "bootstrap";

$(document).ready(function() {
  // console.log(text);
  $(".sub-menu").addClass("animate__animated animate__fadeIn");
  $(".side__menu").addClass("animate__animated animate__fadeInRight");

  $(".show__side__menu").click(function() {
    if (
      $(this)
        .children()
        .hasClass("fa-bars")
    ) {
      $(this)
        .children()
        .removeClass("fa-bars");
      $(this)
        .children()
        .addClass("fa-times");
    } else {
      $(this)
        .children()
        .removeClass("fa-times");
      $(this)
        .children()
        .addClass("fa-bars");
    }
    // console.log($(this).children());
    // <i class="fas fa-times"></i>
    $(".side__menu").toggleClass("d-none");
  });
});

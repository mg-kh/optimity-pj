import * as $ from "jquery";
import "bootstrap";

$(document).ready(function() {
  // menu show hide based on dynamically changing screen size
  $(window).on("resize", function() {
    if ($(this).innerWidth() > 991) {
      $("body").removeClass("show-global-overlay");
      $(".show__side__menu").removeClass("close");
      $(".side__menu").css("right", "-300px");

      $("body").removeClass("global__scroll__hide");
    }
  });

  $(".show__side__menu  , .global-overlay").click(function() {
    let $sideMenu = $(".side__menu");

    $("body").toggleClass("show-global-overlay global__scroll__hide");
    $(".show__side__menu").toggleClass("close");

    !$(this).hasClass("close")
      ? $sideMenu.animate({ right: "-300px" }, "slow")
      : $sideMenu.animate({ right: "0" }, "slow");
  });

  $("#menu-primary-menu>li>.sub-menu").addClass(
    "animate__animated animate__fadeIn"
  );
});

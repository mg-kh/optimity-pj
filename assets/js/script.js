import * as $ from "jquery";
import "bootstrap";

$(document).ready(function() {
  // menu show hide based on dynamically changing screen size
  $(window).on('resize', function() {
    if ($(this).innerWidth() > 991) {
      $('body').removeClass('show-global-overlay');
      $('.show__side__menu').removeClass('close');
      $('.side__menu').css("right", "-300px");
    }
  })

  $(".show__side__menu").click(function() {
    let $sideMenu = $('.side__menu');

    $('body').toggleClass('show-global-overlay');
    $('.show__side__menu').toggleClass('close');

    (! $(this).hasClass('close')) ? $sideMenu.animate({ "right": "-300px" }, "slow" ) : $sideMenu.animate({ "right": "0" }, "slow" );
  });
});

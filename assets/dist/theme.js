"use strict";

jQuery(document).ready(function ($) {
  // Mobile navigation
  $(".menu-toggle").click(function () {
    $(".main-navigation_wrap").fadeToggle();
    $(this).toggleClass("menu-open");
    $(this).hasClass("menu-open") ? $("body").css("overflow", "hidden") : $("body").css("overflow", "auto");
  });

  // Sub Menu Trigger
  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass("sub-menu-open");
    $(this).siblings(".sub-menu").slideToggle();
  });

  //Sticky Header
  // $(window).on("load scroll", function () {
  // 	let header = $(".header-main");
  // 	let scrollHeader = window.scrollY;

  // 	if (scrollHeader >= 316) {
  // 		header.addClass("sticky-header");
  // 	} else {
  // 		header.removeClass("sticky-header");
  // 	}
  // });

  // const observer = new IntersectionObserver(
  // 	([e]) => e.target.toggleAttribute("stuck", e.intersectionRatio < 1),
  // 	{ threshold: [1] }
  // );

  // observer.observe(document.querySelector(".header-main"));

  // Accordion
  $(".st_accordion-header").click(function () {
    $(this).siblings(".st_accordion-body").slideToggle();
    $(this).parent(".st_accordion-item ").toggleClass("open");
  });

  //Fancybox
  if ($("body").hasClass("single-project")) {
    Fancybox.bind("[data-fancybox]", {});
  }

  //Sticky header
  function headerSticky() {
    var $stickyElement = $(".header-main");
    var headerHeight = $stickyElement.outerHeight();
    if ($(window).scrollTop() >= headerHeight) {
      headerHeight = $stickyElement.outerHeight();
      $stickyElement.addClass("sticky-header");
    } else {
      headerHeight = $stickyElement.outerHeight();
      $stickyElement.removeClass("sticky-header");
    }
  }
  $(window).on("scroll load", function () {
    headerSticky();
  });
});
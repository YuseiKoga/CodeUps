jQuery(function ($) {
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      if ($(this).hasClass("is-open")) {
        openDrawer();
      } else {
        closeDrawer();
      }
    });

    $(".js-drawer a[href]").on("click", function () {
      closeDrawer();
    });

    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
  });

  function openDrawer() {
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
  }

  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
  }

  const mv__swiper = new Swiper(".js-mv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });

  const campaign__swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: "auto",
    loop: true,
    speed: 300,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        navigation: {
          nextEl: ".js-campaign__next-button",
          prevEl: ".js-campaign__prev-button",
        },
      },
    },
  });
});

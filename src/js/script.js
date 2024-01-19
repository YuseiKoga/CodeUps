jQuery(function ($) {
  let webStorage = function () {
    if (sessionStorage.getItem("access")) {
      $(".js-loading").remove();
    } else {
      sessionStorage.setItem("access", "true");
      $(".js-loading").addClass("is-loading");
    }
  };
  webStorage();

  // ヘッダーの高さを取得し、スクロール位置の調整
  const headerHeight = $(".js-header").height();
  $("html").css("scroll-padding-top", headerHeight + "px");

  // ページトップに戻るボタン
  $(function () {
    const pageTop = $(".js-page-top");
    const mv = $(".js-mv");
    const showPosFactor = 1 / 3;
    pageTop.hide();

    pageTop.on("click", function () {
      $("body,html").animate({ scrollTop: 0 }, 500);
      return false;
    });

    $(window).on("scroll", function () {
      const mvHeight = mv.height();
      const showPos = mvHeight * showPosFactor;

      if ($(this).scrollTop() > showPos) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
  });

  // ハンバーガーアイコンとドロワーメニュー
  $(function () {
    $(".js-hamburger").click(function () {
      $(this).toggleClass("is-open");
      if ($(this).hasClass("is-open")) {
        openDrawer();
      } else {
        closeDrawer();
      }
    });

    // backgroundまたはページ内リンクをクリックで閉じる
    $(".js-drawer a[href], .js-header a[href]").on("click", function () {
      closeDrawer();
    });

    // resizeイベント
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
  });

  function openDrawer() {
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
    $("html").css({ overflow: "hidden", height: "100%" });
  }

  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("html").css({ overflow: "auto", height: "auto" });
  }

  // mvSwiperのオプション
  const mvSwiperOptions = {
    loop: true,
    loopAdditionalSlides: 1,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  };
  const mvSwiper = new Swiper(".js-mv-swiper", mvSwiperOptions);

  // キャンペーンSwiperのオプション
  const campaignSwiperOptions = {
    loop: true,
    loopAdditionalSlides: 1,
    speed: 300,
    slidesPerView: "auto",
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
  };
  const campaignSwiper = new Swiper(
    ".js-campaign-swiper",
    campaignSwiperOptions
  );

  // 画像に対して初期設定を行う
  function initializeImages() {
    $(".js-image").each(function () {
      const $imageContainer = $(this);
      $imageContainer
        .append('<div class="image-mask"></div>')
        .find("img")
        .css("opacity", "0");
    });
  }
  // 画像をスクロールに応じてフェードインさせる
  function fadeInImagesOnScroll() {
    const fadeOffset = 100;
    const windowHeight = $(window).height();

    $(".js-image").each(function () {
      const $currentImage = $(this);
      const imagePosition = $currentImage.offset().top;
      const scrollPosition = $(window).scrollTop();

      if (
        scrollPosition > imagePosition - windowHeight + fadeOffset &&
        !$currentImage.hasClass("is-visible")
      ) {
        $currentImage
          .addClass("is-visible")
          .find(".image-mask")
          .addClass("is-visible");

        setTimeout(() => {
          $currentImage.find("img").css("opacity", "1");
        }, 400);
      }
    });
  }

  // ページロード時に初期設定を実行
  initializeImages();

  // スクロール時に画像をフェードインさせる
  $(window).on("scroll", fadeInImagesOnScroll);
});

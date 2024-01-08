jQuery(function ($) {
  // ヘッダーの高さを取得し、スクロール位置の調整
  const headerHeight = $(".js-header").height();
  $("html").css("scroll-padding-top", headerHeight + "px");

  // ページトップに戻るボタン
  $(function () {
    const pageTop = $(".js-page-top");
    const mv = $(".js-mv");
    const showPosFactor = 1 / 3;
    pageTop.hide();

    // ページトップボタンがクリックされた時の処理
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
    const $hamburger = $(".js-hamburger");
    const $drawerLinks = $(".js-drawer a[href], .js-header a[href]");

    // ハンバーガーアイコンがクリックされた時の処理
    $hamburger.click(function () {
      const $this = $(this);
      $this.toggleClass("is-open");
      $this.hasClass("is-open") ? toggleDrawer(true) : toggleDrawer(false);
    });

    // リンクがクリックされた時の処理
    $drawerLinks.on("click", function () {
      toggleDrawer(false);
    });

    // ウィンドウのリサイズ時の処理
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width:768px)").matches) {
        toggleDrawer(false);
      }
    });

    // ドロワーメニューの開閉
    function toggleDrawer(open) {
      const $drawer = $(".js-drawer");
      $drawer.toggleClass("is-open", open);
      $hamburger.toggleClass("is-open", open);
    }
  });

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
      delay: 11000,
      disableOnInteraction: false,
    },
  };
  // mvSwiperの初期化
  const mvSwiper = new Swiper(".js-mv-swiper", mvSwiperOptions);

  setTimeout(function () {
    mvSwiper.params.autoplay.delay = 4000;
    mvSwiper.autoplay.start();
  }, 11000);

  $(".js-mv-img").each(function () {
    var $element = $(this);
    setTimeout(function () {
      $element.addClass("is-animation");
    }, 7000);
  });

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
      // 768px以上の画面幅の場合の設定
      768: {
        navigation: {
          nextEl: ".js-campaign__next-button",
          prevEl: ".js-campaign__prev-button",
        },
      },
    },
  };

  // キャンペーンSwiperの初期化
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

jQuery(function ($) {
  // ヘッダーの高さを取得し、スクロール位置の調整
  const headerHeight = $(".js-header").height();
  $("html").css("scroll-padding-top", headerHeight + "px");

  // ドロワーメニューの操作関連の処理
  const setupDrawerMenu = function () {
    const hamburgerButton = $(".js-hamburger");
    const drawerLinks = $(".js-drawer a[href]");
    const drawer = $(".js-drawer");
    const headerLogoLink = $(".header__logo a");

    // ハンバーガーボタンがクリックされたときの処理
    hamburgerButton.click(toggleDrawer);

    // ドロワー内のリンクやロゴがクリックされたときの処理
    drawerLinks.add(headerLogoLink).on("click", closeDrawerAndEnableScroll);

    // ウィンドウがリサイズされたときの処理
    $(window).on("resize", handleWindowResize);

    // ドロワーの開閉とスクロールの制御
    function toggleDrawer() {
      const isOpen = hamburgerButton.toggleClass("is-open").hasClass("is-open");
      isOpen ? openDrawer() : closeDrawerAndEnableScroll();
    }

    // ドロワーを開く処理
    function openDrawer() {
      drawer.addClass("is-open");
      disableScroll();
    }

    // ドロワーを閉じる処理
    function closeDrawer() {
      drawer.removeClass("is-open");
    }

    // ドロワーを閉じてスクロールを有効にする処理
    function closeDrawerAndEnableScroll() {
      closeDrawer();
      enableScroll();
    }

    // ウィンドウリサイズ時の処理
    function handleWindowResize() {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawerAndEnableScroll();
      }
    }

    // スクロールを無効にする処理
    function disableScroll() {
      setScrollProperties("hidden", "100%");
    }

    // スクロールを有効にする処理
    function enableScroll() {
      setScrollProperties("auto", "auto");
    }

    // スクロールプロパティを設定する共通処理
    function setScrollProperties(overflow, height) {
      $("body, html").css({
        overflow,
        height,
      });
    }
  };

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

  // mvSwiperの初期化
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
    // フェードインのオフセット
    const fadeOffset = 100;
    // ウィンドウの高さを取得
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

  // ドロワーメニューのセットアップ
  setupDrawerMenu();
});

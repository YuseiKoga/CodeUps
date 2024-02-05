jQuery(function ($) {
  /* ========================================
  // ローディングアニメーション
  ======================================== */
  function webStorage() {
    if (sessionStorage.getItem("access")) {
      $(".js-loading").remove();
    } else {
      sessionStorage.setItem("access", "true");
      $(".js-loading").addClass("is-loading");
    }
  }

  webStorage();

  /* ========================================
  // スムーススクロール時の高さ調整
  ======================================== */
  function scrollPositionSet() {
    const headerHeight = $(".js-header").height();
    $("html").css("scroll-padding-top", headerHeight + "px");
  }

  scrollPositionSet();

  /* ========================================
  // ページトップボタン
  ======================================== */
  function scrollPageTop() {
    const Button = $(".js-page-top");
    const mvHeight = $(".js-mv").height();
    const showPosFactor = 1 / 3;
    const showPos = mvHeight * showPosFactor;

    // ボタン非表示
    Button.hide();

    // ボタンの表示・非表示
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > showPos) {
        Button.fadeIn();
      } else {
        Button.fadeOut();
      }
    });

    // クリックでページトップに戻る
    Button.on("click", function () {
      $("html,body").animate({ scrollTop: 0 }, 500);
      return false;
    });
  }

  scrollPageTop();

  /* ========================================
  // ドロワーメニュ
  ======================================== */
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

  /* ========================================
  // Swiper（メインビュー）
  ======================================== */
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

  /* ========================================
  // Swiper（キャンペーン）
  ======================================== */
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
          nextEl: ".js-campaign-next-button",
          prevEl: ".js-campaign-prev-button",
        },
      },
    },
  };
  const campaignSwiper = new Swiper(
    ".js-campaign-swiper",
    campaignSwiperOptions
  );

  /* ========================================
  // スクロールアニメーション（画像）
  ======================================== */

  /* 画像初期設定
  ------------------------------ */
  function initializeImages() {
    $(".js-image").each(function () {
      const $imageContainer = $(this);
      $imageContainer
        .append('<div class="image-mask"></div>')
        .find("img")
        .css("opacity", "0");
    });
  }

  initializeImages();

  /* スクロールアニメーション
  ------------------------------ */
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

  $(window).on("scroll", fadeInImagesOnScroll);

  /* ========================================
  // モーダル（ギャラリー）
  ======================================== */
  function galleryModal() {
    const windowSize = $(window).width();
    const modalImage = $(".js-modal-img img");
    const modal = $(".js-modal");

    modalImage.click(function () {
      if (windowSize < 768) {
        return false;
      } else {
        // modal内に画像を複製して表示(背景をスクロール不可)
        modal.html($(this).prop("outerHTML"));
        modal.fadeIn();
        $("html,body").css("overflow", "hidden");
        return false;
      }
    });

    // モーダル画像を非表示（背景をスクロール可）
    modal.click(function () {
      modal.fadeOut();
      $("html,body").css("overflow", "auto");
      return false;
    });
  }

  galleryModal();

  /* ========================================
// タブ
======================================== */

  /* タブ切り替え
------------------------------ */
  function activateTab() {
    const tabButtons = $(".js-tab-button");
    const tabContents = $(".js-tab-content");

    tabButtons.click(function () {
      const index = tabButtons.index(this);

      tabButtons.removeClass("is-active");
      tabContents.removeClass("is-active");

      $(this).addClass("is-active");
      tabContents.eq(index).addClass("is-active");
    });
  }

  activateTab();

  /* タブ ダイレクトリンク
------------------------------ */
  function activateTabFromHash() {
    let hash = location.hash;
    hash = (hash.match(/^#tab\d+$/) || [])[0];
    let tabName = "tab01";

    if ($(hash).length) {
      tabName = hash.slice(1);
    }

    const tabButtons = $(".js-tab-button");
    const tabContents = $(".js-tab-content");

    tabButtons.removeClass("is-active");
    tabContents.removeClass("is-active");

    const tabNumber = tabButtons.filter("#" + tabName).index();

    tabButtons.eq(tabNumber).addClass("is-active");
    tabContents.eq(tabNumber).addClass("is-active");
  }

  activateTabFromHash();

  /* ========================================
  // アコーディオン（アーカイブ）
  ======================================== */
  function archiveAccordion() {
    const accordionSelector = $(".js-archive-accordion");
    const firstAccordionSelector = accordionSelector.first();
    const accordionContent = $(".js-archive-content");

    // 最初のアイテムを展開
    firstAccordionSelector.find(accordionContent).css("display", "block");
    firstAccordionSelector.addClass("is-active");

    accordionSelector.on("click", function () {
      $(this).find(accordionContent).slideToggle();
      $(this).toggleClass("is-active");
    });
  }

  archiveAccordion();

  /* ========================================
  // アコーディオン（FAQ）
  ======================================== */
  function faqAccordion() {
    const accordionSelector = $(".js-faq-accordion");
    const accordionContent = $(".js-faq-content");

    accordionContent.css("display", "block");

    accordionSelector.addClass("is-open");

    accordionSelector.on("click", function () {
      $(this).next().slideToggle();
      $(this).toggleClass("is-open");
    });
  }

  faqAccordion();

  /* ========================================
  // フォームバリデーション
  ======================================== */
  // function formValidation() {
  //   /* バリデーション関数
  //   ------------------------------ */
  //   function validateField(field, regex, errorMessage) {
  //     if (!regex.test($(field).val())) {
  //       $(field).addClass("is-error");
  //       $(field).next(".error-message").remove();
  //       $(field).after('<p class="error-message">' + errorMessage + "</p>");
  //       return false;
  //     } else {
  //       $(field).removeClass("is-error");
  //       $(field).next(".error-message").remove();
  //       return true;
  //     }
  //   }

  //   /* お問い合わせ項目のバリデーション関数
  //   ------------------------------ */
  //   function validateCheckboxGroup(groupName, errorMessage) {
  //     if ($('input[name="' + groupName + '"]:checked').length === 0) {
  //       let errorContainer = $("#checkboxError");
  //       if (errorContainer.length === 0) {
  //         $(".form__check").append(
  //           '<p id="checkboxError" class="error-message">' +
  //             errorMessage +
  //             "</p>"
  //         );
  //       }
  //       return false;
  //     } else {
  //       $("#checkboxError").remove();
  //       return true;
  //     }
  //   }

  //   /* 個人情報同意バリデーション関数
  //   ------------------------------ */
  //   function validateConsentCheckbox(errorMessage) {
  //     if (!$("#consent").is(":checked")) {
  //       let errorContainer = $("#consentError");
  //       if (errorContainer.length === 0) {
  //         $("#consent").addClass("is-error");
  //         $(".form__privacy").append(
  //           '<p id="consentError" class="error-message"><span>個人情報取り扱いに</span><span>同意する必要があります。</span></p>'
  //         );
  //       }
  //       return false;
  //     } else {
  //       $("#consent").removeClass("is-error");
  //       $("#consentError").remove();
  //       return true;
  //     }
  //   }

  //   /* リアルタイムバリデーション
  //   ------------------------------ */
  //   $("#name, #email, #phone, #message, #consent").on(
  //     "input change",
  //     function () {
  //       switch (this.id) {
  //         case "name":
  //           validateField(
  //             this,
  //             /^[ぁ-んァ-ン一-龥\u3000 ]+$/,
  //             "有効な名前を入力してください。"
  //           );
  //           break;
  //         case "email":
  //           validateField(
  //             this,
  //             /^[^@]+@[^@]+\.[^@]+$/,
  //             "有効なメールアドレスを入力してください。"
  //           );
  //           break;
  //         case "phone":
  //           validateField(
  //             this,
  //             /^(\d{2,4}-\d{2,4}-\d{4}|\d{10,11})$/,
  //             "有効な電話番号を入力してください。"
  //           );
  //           break;
  //         case "message":
  //           validateField(this, /.+/, "メッセージを入力してください。");
  //           break;
  //         case "consent":
  //           validateConsentCheckbox();
  //           break;
  //       }
  //     }
  //   );

  //   /* チェックボックスのリアルタイムバリデーション
  // ------------------------------ */
  //   $('input[name="inquiryType"]').on("change", function () {
  //     validateCheckboxGroup(
  //       "inquiryType",
  //       "お問い合わせ項目を選択してください。"
  //     );
  //   });

  //   /* 送信時のバリデーション
  //   ------------------------------ */
  //   $("#contactForm").submit(function (e) {
  //     let isValid = true;
  //     isValid &= validateField(
  //       "#name",
  //       /^[ぁ-んァ-ン一-龥\u3000 ]+$/,
  //       "有効な名前を入力してください。"
  //     );
  //     isValid &= validateField(
  //       "#email",
  //       /^[^@]+@[^@]+\.[^@]+$/,
  //       "有効なメールアドレスを入力してください。"
  //     );
  //     isValid &= validateField(
  //       "#phone",
  //       /^(\d{2,4}-\d{2,4}-\d{4}|\d{10,11})$/,
  //       "有効な電話番号を入力してください。"
  //     );
  //     isValid &= validateCheckboxGroup(
  //       "inquiryType",
  //       "お問い合わせ項目を選択してください。"
  //     );
  //     isValid &= validateField(
  //       "#message",
  //       /.+/,
  //       "メッセージを入力してください。"
  //     );
  //     isValid &= validateConsentCheckbox();

  //     if (!isValid) {
  //       e.preventDefault();
  //       let errorContainer = $("#formError");
  //       if (errorContainer.length === 0) {
  //         $("#contactForm").prepend(
  //           '<p id="formError" class="error-message"><span>※必須項目が入力されていません。</span><span>入力してください。</span></p>'
  //         );
  //       }
  //     } else {
  //       $("#formError").remove();
  //     }
  //   });
  // }

  // formValidation();
});

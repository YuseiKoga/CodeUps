<?php get_header(); ?>

  <!-- ローディング -->
  <div class="loading js-loading">
    <div class="loading__logo js-loading-logo">
      <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/img-loading-logo.svg" alt="diving">
    </div>
  </div>

  <main>

    <!-- メインビジュアル -->
    <section class="mv js-mv">
      <div class="mv__inner">
        <!-- タイトル -->
        <div class="mv__title-wrap">
          <h2 class="mv__main-title">DIVING</h2>
          <p class="mv__sub-title">into the ocean</p>
        </div>
        <!-- Swiper -->
        <div class="swiper mv__swiper js-mv-swiper">
          <div class="swiper-wrapper">
            <!-- Swiper-item -->
            <div class="swiper-slide">
              <div class="mv__img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv00.jpg" media="(min-width: 768px)">
                  <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv00-sp.jpg" alt="">
                </picture>
              </div>
            </div>
            <!-- Swiper-item -->
            <div class="swiper-slide">
              <div class="mv__img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv01.jpg" media="(min-width: 768px)">
                  <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv01-sp.jpg" alt="">
                </picture>
              </div>
            </div>
            <!-- Swiper-item -->
            <div class="swiper-slide">
              <div class="mv__img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv02.jpg" media="(min-width: 768px)">
                  <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv02-sp.jpg" alt="">
                </picture>
              </div>
            </div>
            <!-- Swiper-item -->
            <div class="swiper-slide">
              <div class="mv__img">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv03.jpg" media="(min-width: 768px)">
                  <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-mv03-sp.jpg" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- キャンペーン セクション -->
    <section class="campaign layout-campaign">
      <div class="campaign__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="campaign__title section-title">
          <p class="section-title__main">Campaign</p>
          <h2 class="section-title__sub">キャンペーン</h2>
        </hgroup>
        <!-- Swiper -->
        <div class="swiper campaign__swiper campaign-swiper js-campaign-swiper">
          <div class="swiper-wrapper campaign-swiper__items">
            <!-- Swiper-item -->
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign1.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">ライセンス講習</span>
                <h3 class="campaign-card__title">ライセンス取得</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥56,000</p>
                  <p class="campaign-card__after-price">¥46,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign2.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">体験ダイビング</span>
                <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥24,000</p>
                  <p class="campaign-card__after-price">¥18,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign3.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">体験ダイビング</span>
                <h3 class="campaign-card__title">ナイトダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥10,000</p>
                  <p class="campaign-card__after-price">¥8,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign4.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">ファンダイビング</span>
                <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥20,000</p>
                  <p class="campaign-card__after-price">¥16,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign1.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">ライセンス講習</span>
                <h3 class="campaign-card__title">ライセンス取得</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥56,000</p>
                  <p class="campaign-card__after-price">¥46,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign2.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">体験ダイビング</span>
                <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥24,000</p>
                  <p class="campaign-card__after-price">¥18,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign3.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">体験ダイビング</span>
                <h3 class="campaign-card__title">ナイトダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥10,000</p>
                  <p class="campaign-card__after-price">¥8,000</p>
                </div>
              </div>
            </article>
            <article class="swiper-slide campaign-swiper__item campaign-card">
              <figure class="campaign-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-campaign4.webp" alt="">
              </figure>
              <div class="campaign-card__body">
                <span class="campaign-card__category">ファンダイビング</span>
                <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price">
                  <p class="campaign-card__before-price">¥20,000</p>
                  <p class="campaign-card__after-price">¥16,000</p>
                </div>
              </div>
            </article>
          </div>
        </div>
        <!-- ボタン -->
        <div class="campaign__button">
          <a href="./campaign.html" class="button">View more<span></span></a>
        </div>
        <!-- Swiper-button -->
        <div class="campaign__swiper-button u-desktop">
          <div class="swiper-button-prev campaign__prev-button  js-campaign-prev-button"></div>
          <div class="swiper-button-next campaign__next-button  js-campaign-next-button"></div>
        </div>
      </div>
    </section>

    <!-- アバウト セクション -->
    <section class="about layout-about">
      <div class="about__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="about__title section-title">
          <p class="section-title__main">About us</p>
          <h2 class="section-title__sub">私たちについて</h2>
        </hgroup>
        <!-- コンテンツ -->
        <div class="about__content-wrap">
          <div class="about__bg-container">
            <figure class="about__bg-left">
              <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-about01.jpg" alt="">
            </figure>
            <figure class="about__bg-right">
              <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-about02.jpg" alt="">
            </figure>
          </div>
          <div class="about__container">
            <div class="about__left">
              <p class="about__lead">Dive into<br>the Ocean</p>
            </div>
            <div class="about__right">
              <p class="about__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
              <div class="about__button">
                <a href="./about.html" class="button">View more<span></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- インフォメーション セクション -->
    <section class="information layout-information">
      <div class="information__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="information__title section-title">
          <p class="section-title__main">Information</p>
          <h2 class="section-title__sub">ダイビング情報</h2>
        </hgroup>
        <!-- コンテンツ -->
        <div class="information__container">
          <figure class="information__img js-image">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-information.jpg" alt="">
          </figure>
          <div class="information__body">
            <h3 class="information__lead">ライセンス講習</h3>
            <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information__button">
              <a href="./information.html" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ブログ　セクション -->
    <section class="blog layout-blog">
      <div class="blog__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="blog__title section-title">
          <p class="section-title__main section-title__main--white">Blog</p>
          <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
        </hgroup>
        <!-- カードリスト -->
        <div class="blog__items blog-cards">
          <!-- カード -->
          <article class="blog-cards__item blog-card">
            <a href="#">
              <figure class="blog-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-blog01.jpg" alt="">
              </figure>
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ライセンス取得</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </a>
          </article>
          <article class="blog-cards__item blog-card">
            <a href="#">
              <figure class="blog-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-blog02.jpg" alt="">
              </figure>
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </a>
          </article>
          <article class="blog-cards__item blog-card">
            <a href="#">
              <figure class="blog-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-blog03.jpg" alt="">
              </figure>
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">カクレクマノミ</h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </a>
          </article>
        </div>
        <!-- ボタン -->
        <div class="blog__button">
          <a href="./blog.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <!-- 口コミ　セクション -->
    <section class="voice layout-voice">
      <div class="voice__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="voice__title section-title">
          <p class="section-title__main">Voice</p>
          <h2 class="section-title__sub">お客様の声</h2>
        </hgroup>
        <!-- カードリスト -->
        <div class="voice__items voice-cards">
          <article class="voice-cards__item voice-card">
            <div class="voice-card__head">
              <div class="voice-card__content">
                <div class="voice-card__meta">
                  <span class="voice-card__tag">20代(女性)</span>
                  <span class="voice-card__category">ライセンス講習</span>
                </div>
                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <figure class="voice-card__img js-image">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-voice01.jpg" alt="">
              </figure>
            </div>
            <div class="voice-card__body">
              <p class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </article>
          <article class="voice-cards__item voice-card">
            <div class="voice-card__head">
              <div class="voice-card__content">
                <div class="voice-card__meta">
                  <span class="voice-card__tag">30代(男性)</span>
                  <span class="voice-card__category">ファンダイビング</span>
                </div>
                <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
              </div>
              <figure class="voice-card__img js-image">
                <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-voice02.jpg" alt="">
              </figure>
            </div>
            <div class="voice-card__body">
              <p class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </article>
        </div>
        <!-- ボタン -->
        <div class="voice__button">
          <a href="./voice.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

    <!-- 料金　セクション -->
    <section class="price layout-price">
      <div class="price__inner inner">
        <!-- セクションタイトル -->
        <hgroup class="price__title section-title">
          <p class="section-title__main">Price</p>
          <h2 class="section-title__sub">料金一覧</h2>
        </hgroup>
        <div class="price__container">
          <!-- 画像 -->
          <figure class="price__img js-image">
            <picture>
              <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-price-pc.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-price-sp.jpg" alt="">
            </picture>
          </figure>
          <!-- 料金リスト -->
          <ul class="price__items">
            <li class="price__item">
              <h3 class="price__item-title">ライセンス講習</h3>
              <dl class="price__sub-items">
                <div class="price__sub-item">
                  <dt class="price__sub-title">オープンウォーターダイバーコース</dt>
                  <dd class="price__sub-body">¥50,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">アドバンスドオープンウォーターコース</dt>
                  <dd class="price__sub-body">¥60,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">レスキュー＋EFRコース</dt>
                  <dd class="price__sub-body">¥70,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <h3 class="price__item-title">体験ダイビング</h3>
              <dl class="price__sub-items">
                <div class="price__sub-item">
                  <dt class="price__sub-title">ビーチ体験ダイビング(半日)</dt>
                  <dd class="price__sub-body">¥7,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">ビーチ体験ダイビング(1日)</dt>
                  <dd class="price__sub-body">¥14,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">ボート体験ダイビング(半日)</dt>
                  <dd class="price__sub-body">¥10,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">ボート体験ダイビング(1日)</dt>
                  <dd class="price__sub-body">¥18,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <h3 class="price__item-title">ファンダイビング</h3>
              <dl class="price__sub-items">
                <div class="price__sub-item">
                  <dt class="price__sub-title">ビーチダイビング(2ダイブ)</dt>
                  <dd class="price__sub-body">¥14,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">ボートダイビング(2ダイブ)</dt>
                  <dd class="price__sub-body">¥18,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="price__sub-body">¥24,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">ナイトダイビング(1ダイブ)</dt>
                  <dd class="price__sub-body">¥10,000</dd>
                </div>
              </dl>
            </li>
            <li class="price__item">
              <h3 class="price__item-title">スペシャルダイビング</h3>
              <dl class="price__sub-items">
                <div class="price__sub-item">
                  <dt class="price__sub-title">貸切ダイビング(2ダイブ)</dt>
                  <dd class="price__sub-body">¥24,000</dd>
                </div>
                <div class="price__sub-item">
                  <dt class="price__sub-title">1日ダイビング(3ダイブ)</dt>
                  <dd class="price__sub-body">¥32,000</dd>
                </div>
              </dl>
            </li>
          </ul>
        </div>
        <!-- ボタン -->
        <div class="price__button">
          <a href="./price.html" class="button">View more<span></span></a>
        </div>
      </div>
    </section>

  </main>


<?php get_footer(); ?>
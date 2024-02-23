<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <?php if(is_404()) : ?>
  <meta http-equiv="refresh" content="3; url=<?php echo esc_url(home_url('')); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ヘッダー -->
  <header class="header layout-header js-header">
    <div class="header__inner">
      <!-- ロゴ -->
      <?php if (is_front_page()) : ?>
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo.svg"
            alt="WildQuest Adventures">
        </a>
      </h1>
      <?php else : ?>
      <div class="header__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo.svg"
            alt="WildQuest Adventures">
        </a>
      </div>
      <?php endif; ?>

      <!-- ナビゲーション -->
      <nav class="header__nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/campaign')); ?>">
              <span class="pc-nav__en">Campaign</span>
              <span class="pc-nav__ja">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/about')); ?>">
              <span class="pc-nav__en">About us</span>
              <span class="pc-nav__ja">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/information')); ?>">
              <span class="pc-nav__en">Information</span>
              <span class="pc-nav__ja">サービス情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/blog')); ?>">
              <span class="pc-nav__en">Blog</span>
              <span class="pc-nav__ja">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/voice')); ?>">
              <span class="pc-nav__en">Voice</span>
              <span class="pc-nav__ja">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/price')); ?>">
              <span class="pc-nav__en">Price</span>
              <span class="pc-nav__ja">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/faq')); ?>">
              <span class="pc-nav__en">FAQ</span>
              <span class="pc-nav__ja">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">
              <span class="pc-nav__en">Contact</span>
              <span class="pc-nav__ja">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- ハンバーガーボタン -->
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- ドロワーメニュー -->
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav sp-nav">
          <div class="sp-nav__wrap">
            <ul class="sp-nav__items">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign_category/safari')); ?>">サファリツアー</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign_category/photo')); ?>">フォトワーク</br>ショップ</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign_category/nature')); ?>">自然保護活動体験</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/about')); ?>">私たちについて</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/information')); ?>">サービス情報</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information#tab01')); ?>">サファリツアー</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information#tab02')); ?>">フォトワーク</br>ショップ</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information#tab03')); ?>">自然保護活動体験</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__wrap">
            <ul class="sp-nav__items">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price#safari')); ?>">サファリツアー</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price#photo')); ?>">フォトワーク</br>ショップ</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price#nature')); ?>">自然保護活動体験</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br>ポリシー</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
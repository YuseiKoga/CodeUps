<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header layout-header js-header">
    <div class="header__inner">
      <!-- ロゴ -->
      <h1 class="header__logo">
        <a href="./index.html">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo.svg" alt="CodeUps">
        </a>
      </h1>
      <!-- ナビゲーション -->
      <nav class="header__nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="./campaign.html">
              <span class="pc-nav__en">Campaign</span>
              <span class="pc-nav__ja">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./about.html">
              <span class="pc-nav__en">About us</span>
              <span class="pc-nav__ja">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./information.html">
              <span class="pc-nav__en">Information</span>
              <span class="pc-nav__ja">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./blog.html">
              <span class="pc-nav__en">Blog</span>
              <span class="pc-nav__ja">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./voice.html">
              <span class="pc-nav__en">Voice</span>
              <span class="pc-nav__ja">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./price.html">
              <span class="pc-nav__en">Price</span>
              <span class="pc-nav__ja">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./faq.html">
              <span class="pc-nav__en">FAQ</span>
              <span class="pc-nav__ja">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="./contact.html">
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
                <a href="./campaign.html">キャンペーン</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="./campaign.html">ライセンス取得</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./campaign.html">貸切体験ダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./campaign.html">ナイトダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="./about.html">私たちについて</a>
              </li>
              <li class="sp-nav__item">
                <a href="./information.html">ダイビング情報</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="./information.html#info01">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./information.html#info03">体験ダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./information.html#info02">ファンダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="./blog.html">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__wrap">
            <ul class="sp-nav__items">
              <li class="sp-nav__item">
                <a href="./voice.html">お客様の声</a>
              </li>
              <li class="sp-nav__item">
                <a href="./price.html">料金一覧</a>
                <!-- サブナビゲーション -->
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="./price.html#priceLicence">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./price.html#priceExperience">体験ダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="./price.html#priceFun">ファンダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="./faq.html">よくある質問</a>
              </li>
              <li class="sp-nav__item">
                <a href="./privacy.html">プライバシー<br>ポリシー</a>
              </li>
              <li class="sp-nav__item">
                <a href="./terms.html">利用規約</a>
              </li>
              <li class="sp-nav__item">
                <a href="./contact.html">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>


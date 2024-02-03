<?php if(!is_404() && !is_page('contact')) : ?>
<!-- お問い合わせ　セクション -->
<section class="contact layout-contact--top">
  <div class="contact__inner inner">
    <div class="contact__container">
      <div class="contact__left">
        <!-- ロゴ -->
        <div class="contact__logo">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/logo02.svg" alt="CodeUps">
        </div>
        <hr class="contact__border">
        <div class="contact__wrap">
          <!-- 情報リスト -->
          <ul class="contact__items">
            <li class="contact__item">沖縄県那覇市1-1</li>
            <li class="contact__item">TEL:0120-000-0000</li>
            <li class="contact__item">営業時間:8:30-19:00</li>
            <li class="contact__item">定休日:毎週火曜日</li>
          </ul>
          <!-- Google Map -->
          <figure class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28636.51051461177!2d127.66410248727117!3d26.210863832614724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1704689012340!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </div>
      </div>
      <div class="contact__right">
        <!-- セクションタイトル -->
        <hgroup class="contact__title section-title">
          <p class="section-title__main section-title__main--contact">Contact</p>
          <h2 class="section-title__sub section-title__sub--contact">お問い合わせ</h2>
        </hgroup>
        <p class="contact__text">ご予約・お問い合わせはコチラ</p>
        <!-- ボタン -->
        <div class="contact__button">
          <a href="./contact.html" class="button">Contact us<span></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- フッター -->
<footer class="footer layout-footer <?php if (is_404() || is_page('contact')) { echo 'layout-footer--mt0';} ?>">
  <div class="footer__inner inner">
    <div class="footer__logo-wrap">
      <!-- ロゴ -->
      <div class="footer__logo">
        <a href="./index.html">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo.svg" alt="CodeUps">
        </a>
      </div>
      <!-- SNS -->
      <ul class="footer__sns-items">
        <li class="footer__sns-item">
          <a href="#">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/icon-facebook.svg"
              alt="facebook">
          </a>
        </li>
        <li class="footer__sns-item">
          <a href="#">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/icon-instagram.svg"
              alt="instagram">
          </a>
        </li>
      </ul>
    </div>
    <!-- ナビゲーション -->
    <nav class="footer__nav">
      <div class="footer__nav-wrap">
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="./campaign.html">キャンペーン</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="./campaign.html">ライセンス取得</a>
              </li>
              <li class="footer__sub-item">
                <a href="./campaign.html">貸切体験ダイビング</a>
              </li>
              <li class="footer__sub-item">
                <a href="./campaign.html">ナイトダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer__nav-item">
            <a href="./about.html">私たちについて</a>
          </li>
        </ul>
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="./information.html">ダイビング情報</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="./information.html#tab01">ライセンス講習</a>
              </li>
              <li class="footer__sub-item">
                <a href="./information.html#tab03">体験ダイビング</a>
              </li>
              <li class="footer__sub-item">
                <a href="./information.html#tab02">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer__nav-item">
            <a href="./blog.html">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="footer__nav-wrap">
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="./voice.html">お客様の声</a>
          </li>
          <li class="footer__nav-item">
            <a href="./price.html">料金一覧</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="./price.html#priceLicence">ライセンス講習</a>
              </li>
              <li class="footer__sub-item">
                <a href="./price.html#priceExperience">体験ダイビング</a>
              </li>
              <li class="footer__sub-item">
                <a href="./price.html#priceFun">ファンダイビング</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="./faq.html">よくある質問</a>
          </li>
          <li class="footer__nav-item">
            <a href="./privacy.html">プライバシー<br class="u-mobile">ポリシー</a>
          </li>
          <li class="footer__nav-item">
            <a href="./terms.html">利用規約</a>
          </li>
          <li class="footer__nav-item">
            <a href="./contact.html">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- コピーライト -->
    <div class="footer__copyright">
      <small>Copyright &copy; <?php echo wp_date("Y"); ?> CodeUps LLC. All Rights Reserved.</small>
    </div>
  </div>

  <!-- ページトップボタン -->
  <div class="page-top js-page-top"></div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
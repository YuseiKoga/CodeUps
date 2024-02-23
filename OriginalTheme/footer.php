<?php if(!is_404() && !is_page('contact') && !is_page('thanks')) : ?>
<!-- お問い合わせ　セクション -->
<section class="contact layout-contact--top">
  <div class="contact__inner inner">
    <div class="contact__container">
      <div class="contact__left">
        <!-- ロゴ -->
        <div class="contact__logo">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo02.svg"
            alt="WildQuest Adventures">
        </div>
        <hr class="contact__border">
        <div class="contact__wrap">
          <!-- 情報リスト -->
          <ul class="contact__items">
            <li class="contact__item">福岡県野生動物市<br>自然区サファリ1-2</li>
            <li class="contact__item"><a href="tel:0120-000-0000">TEL:0120-000-0000</a></li>
            <li class="contact__item">営業時間:10:30-22:00</li>
            <li class="contact__item">定休日:毎週火曜日</li>
          </ul>
          <!-- Google Map -->
          <figure class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.3819035064703!2d130.35954827627143!3d33.59539417333252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541924d02e6b64b%3A0xb79cd978d2ed54c2!2z56aP5bKhUGF5UGF544OJ44O844Og!5e0!3m2!1sja!2sjp!4v1708643566360!5m2!1sja!2sjp"
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
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us<span></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- フッター -->
<footer
  class="footer layout-footer <?php if (is_404() || is_page('contact') || is_page('thanks')) { echo 'layout-footer--mt0';} ?>">
  <div class="footer__inner inner">
    <div class="footer__logo-wrap">
      <!-- ロゴ -->
      <div class="footer__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/logo.svg"
            alt="WildQuest Adventures">
        </a>
      </div>
      <!-- SNS -->
      <ul class="footer__sns-items">
        <li class="footer__sns-item">
          <a href="https://www.facebook.com/" target="_blank">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/icon-facebook.svg"
              alt="facebook">
          </a>
        </li>
        <li class="footer__sns-item">
          <a href="https://www.instagram.com/" target="_blank">
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
            <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/campaign_category/safari')); ?>">サファリツアー</a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/campaign_category/photo')); ?>"><span>フォトワーク</span><span>ショップ</span></a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/campaign_category/nature')); ?>">自然保護活動体験</a>
              </li>
            </ul>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/about')); ?>">私たちについて</a>
          </li>
        </ul>
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/information')); ?>">サービス情報</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/information#tab01')); ?>">サファリツアー</a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/information#tab02')); ?>"><span>フォトワーク</span><span>ショップ</span></a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/information#tab03')); ?>">自然保護活動体験</a>
              </li>
            </ul>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="footer__nav-wrap">
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
            <!-- サブナビゲーション -->
            <ul class="footer__sub-items">
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/price#safari')); ?>">サファリツアー</a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/price#photo')); ?>"><span>フォトワーク</span><span>ショップ</span></a>
              </li>
              <li class="footer__sub-item">
                <a href="<?php echo esc_url(home_url('/price#nature')); ?>">自然保護活動体験</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="footer__nav-items">
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br class="u-mobile">ポリシー</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- コピーライト -->
    <div class="footer__copyright">
      <small>&copy;&nbsp;WildQuest&nbsp;Adventures&nbsp;Inc.</small>
    </div>
  </div>

  <!-- ページトップボタン -->
  <div class="page-top js-page-top"></div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
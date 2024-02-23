<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--common js-mv">
    <h1 class="sub-mv__title">Site map</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="sitemap layout-sub-contents ornament">
    <div class="inner">
      <!-- サイトマップリンク -->
      <div class="sitemap__container">
        <div class="sitemap__wrap">
          <ul class="sitemap__items">
            <li class="sitemap__item">
              <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
              <ul class="sitemap__sub-items">
                <li class="sitemap__sub-item"><a
                    href="<?php echo esc_url(home_url('/campaign_category/safari')); ?>">サファリツアー</a></li>
                <li class="sitemap__sub-item"><a
                    href="<?php echo esc_url(home_url('/campaign_category/photo')); ?>">フォトワーク<br
                      class="u-mobile">ショップ</a></li>
                <li class="sitemap__sub-item"><a
                    href="<?php echo esc_url(home_url('/campaign_category/nature')); ?>">自然保護活動体験</a></li>
              </ul>
            </li>
            <li class="sitemap__item"><a href="<?php echo esc_url('/about'); ?>">私たちについて</a></li>
          </ul>
          <ul class="sitemap__items">
            <li class="sitemap__item">
              <a href="<?php echo esc_url(home_url('/information')); ?>">サービス情報</a>
              <ul class="sitemap__sub-items">
                <li class="sitemap__sub-item"><a
                    href="<?php echo esc_url(home_url('/information#tab01')); ?>">サファリツアー</a>
                </li>
                <li class="sitemap__sub-item"><a href="<?php echo esc_url(home_url('/information#tab02')); ?>">フォトワーク<br
                      class="u-mobile">ショップ</a>
                </li>
                <li class="sitemap__sub-item"><a
                    href="<?php echo esc_url(home_url('/information#tab03')); ?>">自然保護活動体験</a></li>
              </ul>
            </li>
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          </ul>
        </div>
        <div class="sitemap__wrap">
          <ul class="sitemap__items">
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
            <li class="sitemap__item">
              <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
              <ul class="sitemap__sub-items">
                <li class="sitemap__sub-item"><a href="<?php echo esc_url(home_url('/price#safari')); ?>">サファリツアー</a>
                </li>
                <li class="sitemap__sub-item"><a href="<?php echo esc_url(home_url('/price#photo')); ?>">フォトワーク<br
                      class="u-mobile">ショップ</a></li>
                <li class="sitemap__sub-item"><a href="<?php echo esc_url(home_url('/price#nature')); ?>">自然保護活動体験</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="sitemap__items">
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br
                  class="u-mobile">ポリシー</a></li>
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a></li>
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
            <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
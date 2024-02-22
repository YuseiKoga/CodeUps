<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--info js-mv">
    <h1 class="sub-mv__title">Information</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="info layout-sub-contents ornament">
    <div class="inner">

      <!-- タブメニュー -->
      <ul class="info__tab">
        <li class="info__tab-item js-tab-button is-active" id="tab01">サファリ<br class="u-mobile">ツアー</li>
        <li class="info__tab-item js-tab-button" id="tab02">フォトワーク<br>ショップ</li>
        <li class="info__tab-item js-tab-button" id="tab03">自然保護活動<br>体験</li>
      </ul>

      <!-- タブコンテンツ -->
      <div class="info__contents">
        <article class="info__content js-tab-content is-active">
          <div class="info__body">
            <h2 class="info__title">サファリツアー</h2>
            <p class="info__text">
              泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
            </p>
          </div>
          <figure class="info__img">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/information01.webp"
              alt="ライセンス講習の様子">
          </figure>
        </article>

        <article class="info__content js-tab-content">
          <div class="info__body">
            <h2 class="info__title">フォトワークショップ</h2>
            <p class="info__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
          </div>
          <figure class="info__img">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/information02.webp"
              alt="ファンダイビングの様子">
          </figure>
        </article>

        <article class="info__content js-tab-content">
          <div class="info__body">
            <h2 class="info__title">自然保護活動体験</h2>
            <p class="info__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
          </div>
          <figure class="info__img">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/information03.webp"
              alt="体験ダイビングの様子">
          </figure>
        </article>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
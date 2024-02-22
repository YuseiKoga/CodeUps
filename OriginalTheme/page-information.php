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
              経験豊かなガイドと共に、息をのむようなガイド付きサファリツアーに出かけましょう。壮大な野生動物との近接遭遇や、自然の美しさに触れる機会が待っています。ライオン、ゾウ、キリンといった動物たちの生態を学びながら、冒険に満ちた一日を過ごしましょう。
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
              プロのフォトグラファーの指導の下、野生動物写真ワークショップで撮影技術を磨きましょう。基本から高度な技術までを学び、野生動物の魅力を捉える方法を身につけます。あなたのカメラで、自然の素晴らしい瞬間を永遠に残しましょう。
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
              自然保護活動体験では、実際に自然保護の現場で活動することで、地球とのつながりを深めましょう。野生動物保護や環境調査に参加し、環境意識を高める貴重な体験を提供します。自然を守るための第一歩を踏み出しましょう。
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
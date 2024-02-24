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
        <?php
        for ($i = 1; $i <= 3; $i++) :
          $name = get_field('plan_name0' . $i);
          $image = get_field('plan_image0' . $i);
          $description = get_field('plan_description0' . $i);
        ?>
        <article class="info__content js-tab-content <?php echo $i === 1 ? 'is-active' : ''; ?>">
          <div class="info__body">
            <?php if ($name) : ?>
            <h2 class="info__title"><?php echo esc_html($name); ?></h2>
            <?php endif; ?>
            <?php if ($description) : ?>
            <p class="info__text"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
          </div>
          <figure class="info__img">
            <?php if ($image) : ?>
            <img src="<?php echo esc_url($image); ?>" alt="">
            <?php endif; ?>
          </figure>
        </article>
        <?php endfor; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
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
        <h2 class="mv__main-title"><span>Journey</span>&nbsp;<span>into</span>&nbsp;<span>the&nbsp;Wild</span></h2>
        <p class="mv__sub-title">Experience&nbsp;Nature's&nbsp;Majesty</p>
      </div>
      <!-- Swiper -->
      <div class="swiper mv__swiper js-mv-swiper">
        <div class="swiper-wrapper">
          <?php
            // SCFの繰り返しフィールドから情報を取得
            $images = SCF::get_option_meta('mainVisual','mv_images');

            if (!empty($images)) :
              foreach ($images as $image) :
                $pc_image_url = esc_url(wp_get_attachment_url($image['pc_image']));
                $sp_image_url = esc_url(wp_get_attachment_url($image['sp_image']));
          ?>
          <div class="swiper-slide">
            <div class="mv__img">
              <picture>
                <source srcset="<?php echo $pc_image_url; ?>" media="(min-width: 768px)">
                <img src="<?php echo $sp_image_url; ?>" alt="">
              </picture>
            </div>
          </div>
          <?php endforeach; ?>
          <?php else : // カスタムフィールドが設定されていない場合のデフォルト画像 ?>
          <div class="swiper-slide">
            <div class="mv__img">
              <picture>
                <source srcset="<?php esc_url(get_theme_file_uri('/assets/images/top/img-mv-pc')); ?>"
                  media="(min-width: 768px)">
                <img src="<?php esc_url(get_theme_file_uri('/assets/images/top/img-mv-sp')); ?>" alt="">
              </picture>
            </div>
          </div>
          <?php endif;  ?>
        </div>
      </div>
    </div>
  </section>


  <!-- キャンペーン セクション -->
  <?php
    $args = array(
      'post_type' => 'campaign',
      'posts_per_page' => -1,
    );
    $campaign_query = new WP_Query($args);
  ?>
  <?php if ($campaign_query->have_posts()) : ?>
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
          <?php
            // ループ開始
            while ($campaign_query->have_posts()) : $campaign_query->the_post();

            // アイキャッチ画像のURLを取得
            $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');

            // カテゴリーを取得
            $terms = get_the_terms(get_the_ID(), 'campaign_category');
            $category_name = (!empty($terms) && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '未分類';

            // ACFから値を取得
            $price_group = get_field('price_group');
            if ($price_group) {
              $regular_price = number_format($price_group['regular_price']);
              $special_price = number_format($price_group['special_price']);
            }
          ?>
          <article class="swiper-slide campaign-swiper__item campaign-card">
            <!-- アイキャッチ画像 -->
            <figure class="campaign-card__img">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            </figure>
            <div class="campaign-card__body">
              <!-- カテゴリー -->
              <span class="campaign-card__category"><?php echo $category_name; ?></span>
              <!-- 投稿タイトル -->
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <!-- 料金 -->
              <div class="campaign-card__price">
                <!-- 通常料金 -->
                <?php if (!empty($regular_price)) : ?>
                <p class="campaign-card__before-price">¥<?php echo $regular_price; ?></p>
                <?php endif; ?>
                <!-- 特別料金 -->
                <?php if (!empty($special_price)) : ?>
                <p class="campaign-card__after-price">¥<?php echo $special_price; ?></p>
                <?php endif; ?>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        </div>
      </div>
      <!-- ボタン -->
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View more<span></span></a>
      </div>
      <!-- Swiper-button -->
      <div class="campaign__swiper-button u-desktop">
        <div class="swiper-button-prev campaign__prev-button  js-campaign-prev-button"></div>
        <div class="swiper-button-next campaign__next-button  js-campaign-next-button"></div>
      </div>
    </div>
  </section>
  <?php endif; wp_reset_postdata(); ?>


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
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/img-about02.jpg" alt="">
          </figure>
          <figure class="about__bg-right">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/img-about01.jpg" alt="">
          </figure>
        </div>
        <div class="about__container">
          <div class="about__left">
            <p class="about__lead">Journey into<br>the Wild</p>
          </div>
          <div class="about__right">
            <p class="about__text">
              私たちは自然との調和を大切にし、野生生物の美しさと多様性を深く理解しています。<br>私たちのサファリ体験は、単なる観光を超え、野生動物との貴重な出会い、自然の中での冒険、そして地球への敬意を深める旅を提供します。<br>あなたを待っているのは、息をのむようなサファリ体験と地球への深い敬意です。
            </p>
            <div class="about__button">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="button">View more<span></span></a>
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
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/common/information01.webp" alt="">
        </figure>
        <div class="information__body">
          <h3 class="information__lead">サファリツアー</h3>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo esc_url(home_url('/information')); ?>" class="button">View more<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ブログ　セクション -->
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
    );
    $blog_query = new WP_Query($args);
  ?>
  <?php if ($blog_query->have_posts()) : ?>
  <section class="top-blog layout-top-blog">
    <div class="top-blog__inner inner">
      <!-- セクションタイトル -->
      <hgroup class="top-blog__title section-title">
        <p class="section-title__main section-title__main--white">Blog</p>
        <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
      </hgroup>
      <!-- ブログカードリスト -->
      <div class="top-blog__items blog-cards">
        <?php
        // ループ開始
        while ($blog_query->have_posts()) : $blog_query->the_post();

        // アイキャッチ画像のURLを取得
        $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
        ?>
        <article class="blog-cards__item blog-card">
          <a href="<?php the_permalink(); ?>">
            <!-- アイキャッチ画像 -->
            <figure class="blog-card__img">
              <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
            </figure>
            <!-- 投稿日 -->
            <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
            <!-- 投稿タイトル -->
            <h3 class="blog-card__title"><?php the_title(); ?></h3>
            <!-- 投稿抜粋 -->
            <p class="blog-card__text"><?php echo get_the_excerpt(); ?></p>
          </a>
        </article>
        <?php endwhile; // ループ終了 ?>
      </div>
      <!-- ボタン -->
      <div class="top-blog__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <?php endif; wp_reset_postdata(); ?>


  <!-- 口コミ　セクション -->
  <?php
    $args = array(
      'post_type' => 'voice',
      'posts_per_page' => 2,
    );
    $voice_query = new WP_Query($args);
  ?>
  <?php if ($voice_query->have_posts()) : ?>
  <section class="voice layout-voice">
    <div class="voice__inner inner">
      <!-- セクションタイトル -->
      <hgroup class="voice__title section-title">
        <p class="section-title__main">Voice</p>
        <h2 class="section-title__sub">お客様の声</h2>
      </hgroup>
      <!-- 口コミカードリスト -->
      <div class="archive-voice__items voice-cards">
        <?php
        // ループ開始
        while ($voice_query->have_posts()) : $voice_query->the_post();

        // ACFから情報を取得
        // タグ情報
        $tag_group = get_field('tag_group');
        if ($tag_group) {
          $age = $tag_group['age'];
          $type = $tag_group['type'];
        }
        // 口コミ
        $text = esc_html(get_field('text'));

        // カスタムタクソノミーの名前を取得、存在しない場合は'未分類'を設定
        $terms = get_the_terms(get_the_ID(), 'voice_category');
        $term_name = !empty($terms) ? esc_html($terms[0]->name) : '未分類';

        // 画像URLを取得、存在しない場合はデフォルト画像を設定
        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
        ?>
        <article class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__content">
              <div class="voice-card__meta">
                <!-- タグ -->
                <?php if (!empty($age) && !empty($type)) : ?>
                <span class="voice-card__tag"><?php echo esc_html($age); ?>代(<?php echo esc_html($type); ?>)</span>
                <?php endif; ?>
                <!-- カテゴリー -->
                <span class="voice-card__category"><?php echo $term_name; ?></span>
              </div>
              <!-- タイトル -->
              <h3 class="voice-card__title"><?php the_title(); ?></h3>
            </div>
            <!-- 画像 -->
            <figure class="voice-card__img  js-image">
              <img src="<?php echo esc_url($image_url); ?>" alt="">
            </figure>
          </div>
          <div class="voice-card__body">
            <!-- 本文 -->
            <?php if (!empty($text)) : ?>
            <p class="voice-card__text"><?php echo nl2br($text); ?></p>
            <?php endif; ?>
          </div>
        </article>
        <?php endwhile; // ループ終了 ?>
      </div>
      <!-- ボタン -->
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <?php endif; wp_reset_postdata(); ?>


  <!-- 料金　セクション -->
  <section class="price layout-price">
    <div class="price__inner inner">
      <!-- セクションタイトル -->
      <hgroup class="price__title section-title">
        <p class="section-title__main">Price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </hgroup>
      <!-- コンテンツ -->
      <div class="price__container">
        <!-- 画像 -->
        <figure class="price__img js-image">
          <picture>
            <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/price-pc.jpg"
              media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/price-sp.jpg" alt="">
          </picture>
        </figure>
        <!-- 料金リスト -->
        <ul class="price__items">
          <?php
          function displayPriceItems($metaKey, $itemTitle, $courseKey, $feeKey) {
            $items = SCF::get_option_meta('price', $metaKey);

            if (!empty($items)) {
              echo '<li class="price__item">';
              echo "<h3 class=\"price__item-title\">$itemTitle</h3>";
              echo '<dl class="price__sub-items">';

              foreach ($items as $item) {
                $course = isset($item[$courseKey]) ? $item[$courseKey] : '';
                $fee = isset($item[$feeKey]) ? $item[$feeKey] : '';

                if (!empty($course) && !empty($fee)) {
                  echo '<div class="price__sub-item">';
                  echo '<dt class="price__sub-title">' . esc_html($course) . '</dt>';
                  echo '<dd class="price__sub-body">' . esc_html($fee) . '</dd>';
                  echo '</div>';
                }
              }

              echo '</dl>';
              echo '</li>';
            }
          }

          displayPriceItems('licence', 'サファリツアー', 'licence_course', 'licence_fee');
          displayPriceItems('trial', 'フォトワークショップ', 'trial_course', 'trial_fee');
          displayPriceItems('fun', '自然保護活動体験', 'fun_course', 'fun_fee');
          ?>
        </ul>
      </div>
      <!-- ボタン -->
      <div class="price__button">
        <a href="<?php echo esc_url(home_url('/price')); ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
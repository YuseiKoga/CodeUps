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
          <?php
          // カスタムフィールドを取得
          $slides = SCF::get_option_meta('mainVisual','top-mainVisual'); // 'slides'はカスタムフィールドのグループ名を想定
          foreach ($slides as $slide) {
            $pc_image_url = wp_get_attachment_url($slide['pc-image']);
            $sp_image_url = wp_get_attachment_url($slide['sp-image']);
          ?>
          <div class="swiper-slide">
            <div class="mv__img">
              <picture>
                <source srcset="<?php echo $pc_image_url; ?>" media="(min-width: 768px)">
                <img src="<?php echo $sp_image_url; ?>" alt="">
              </picture>
            </div>
          </div>
          <?php } ?>
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

      <?php // クエリ
      $args = array(
        'post_type' => 'campaign',
        'posts_per_page' => -1,
      );

      $campaign_query = new WP_Query($args);

      if ($campaign_query->have_posts()) : ?>
      <div class="swiper campaign__swiper campaign-swiper js-campaign-swiper">
        <div class="swiper-wrapper campaign-swiper__items">
          <?php while ($campaign_query->have_posts()) : $campaign_query->the_post();
          // アイキャッチ画像のURLを取得
          if (has_post_thumbnail()) {
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
          } else {
            $image_url = get_theme_file_uri("/assets/images/common/no-image.webp");
          }

          // カテゴリーを取得
          $terms = get_the_terms(get_the_ID(), 'campaign_category');
          $category_name = (!empty($terms) && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '未分類';
          ?>
          <article class="swiper-slide campaign-swiper__item campaign-card">
            <figure class="campaign-card__img">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            </figure>
            <div class="campaign-card__body">
              <span class="campaign-card__category"><?php echo $category_name; ?></span>
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <div class="campaign-card__price">
                <p class="campaign-card__before-price">¥<?php echo number_format(get_field('regular_price')); ?></p>
                <p class="campaign-card__after-price">¥<?php echo number_format(get_field('special_price')); ?></p>
              </div>
            </div>
          </article>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; wp_reset_postdata(); ?>

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
          <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-information.jpg" alt="">
        </figure>
        <div class="information__body">
          <h3 class="information__lead">ライセンス講習</h3>
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
  <section class="blog layout-blog">
    <div class="blog__inner inner">
      <!-- セクションタイトル -->
      <hgroup class="blog__title section-title">
        <p class="section-title__main section-title__main--white">Blog</p>
        <h2 class="section-title__sub section-title__sub--white">ブログ</h2>
      </hgroup>

      <?php // クエリ
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );

      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
      ?>
      <div class="blog__items blog-cards">
        <?php // ループ START
        while ($blog_query->have_posts()) : $blog_query->the_post();

        // アイキャッチ画像のURLを取得
        $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_theme_file_uri('/assets/images/common/no-image.webp');
        ?>
        <article class="blog-cards__item blog-card">
          <a href="<?php the_permalink(); ?>">
            <figure class="blog-card__img">
              <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?>">
            </figure>
            <time class="blog-card__date"
              datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
            <h3 class="blog-card__title"><?php the_title(); ?></h3>
            <p class="blog-card__text"><?php the_excerpt(); ?></p>
          </a>
        </article>
        <?php endwhile; ?>
      </div>
      <?php endif; wp_reset_postdata(); ?>

      <!-- ボタン -->
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View more<span></span></a>
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

      <?php // クエリ
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 2,
      );

      $voice_query = new WP_Query($args);

      if ($voice_query->have_posts()) :
      ?>

      <div class="archive-voice__items voice-cards">
        <?php // ループ開始
        while ($voice_query->have_posts()) : $voice_query->the_post();

        // ACFから情報を取得
        $age = get_field('age');
        $type = get_field('type');
        $text = get_field('text');

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
                <span class="voice-card__tag"><?php echo esc_html($age); ?>代(<?php echo esc_html($type); ?>)</span>
                <span class="voice-card__category"><?php echo $term_name; ?></span>
              </div>
              <h3 class="voice-card__title"><?php the_title(); ?></h3>
            </div>
            <figure class="voice-card__img  js-image">
              <img src="<?php echo esc_url($image_url); ?>" alt="">
            </figure>
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text"><?php echo esc_html($text); ?></p>
          </div>
        </article>
        <?php endwhile; // ループ終了 ?>
      </div>
      <?php endif; wp_reset_postdata(); ?>

      <!-- ボタン -->
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View more<span></span></a>
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
            <source srcset="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-price-pc.jpg"
              media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_theme_file_uri("/")); ?>/assets/images/top/img-price-sp.jpg" alt="">
          </picture>
        </figure>

        <!-- 料金リスト -->
        <ul class="price__items">
          <?php
          // 料金表を表示する関数(引数：料金表のタイトル)
          function displayPriceInfo($title) {
            // 固定ページ"price"の情報を取得(カスタムフィールドを含む)
            $page_object = get_page_by_path('price');
            if ($page_object) {
              $page_id = $page_object->ID;
              $licence_fields = SCF::get('licence', $page_id);

              if (!empty($licence_fields)) {
                echo '<li class="price__item">';
                echo '<h3 class="price__item-title">' . $title . '</h3>';
                echo '<dl class="price__sub-items">';
                foreach ($licence_fields as $fields) {
                  echo '<div class="price__sub-item">';
                  echo '<dt class="price__sub-title">' . esc_html($fields['licence_course']) . '</dt>';
                  echo '<dd class="price__sub-body">' . esc_html($fields['licence_fee']) . '</dd>';
                  echo '</div>';
                }
                echo '</dl>';
                echo '</li>';
              } else {
                echo '<li class="price__item">' . $title . ': 情報が設定されていません</li>';
              }
            }
          }

        // 各料金表の表示
        displayPriceInfo('ライセンス講習');
        displayPriceInfo('体験ダイビング');
        displayPriceInfo('ファンダイビング');
        displayPriceInfo('スペシャルダイビング');
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
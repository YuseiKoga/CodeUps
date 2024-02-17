<aside class="sidebar">

  <!-- 人気記事 -->
  <?php
    $popular_posts_args = array(
      'posts_per_page' => 3, // 表示する記事の数
      'meta_key' => 'post_views_count', // 閲覧数を格納するカスタムフィールド
      'orderby' => 'meta_value_num', // 閲覧数に基づいて並べ替え
      'order' => 'DESC' // 降順で表示
    );
    $popular_posts_query = new WP_Query($popular_posts_args);
  ?>

  <?php if ($popular_posts_query->have_posts()) : ?>
  <section class="sidebar__popular popular layout-sidebar-section">
    <h2 class="sidebar-title">人気記事</h2>
    <!-- カードリスト -->
    <div class="popular__items">
      <?php
        // ループ START
        while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post();

        // 画像URLを取得、存在しない場合はデフォルト画像を設定
        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
      ?>

      <article class="popular__item popular-card">
        <a href="<?php the_permalink(); ?>">
          <!-- アイキャッチ画像 -->
          <figure class="popular-card__img">
            <img src="<?php echo esc_url($image_url); ?>" alt="">
          </figure>
          <div class="popular-card__body">
            <!-- 投稿日 -->
            <time class="popular-card__date" datetime="<?php the_time('c'); ?>">
              <?php the_time('Y.m/d'); ?>
            </time>
            <!-- 投稿タイトル -->
            <h3 class="popular-card__title"><?php the_title(); ?></h3>
          </div>
        </a>
      </article>
      <?php endwhile; // ループ END ?>
    </div>
  </section>
  <?php endif; wp_reset_postdata(); ?>


  <!-- 口コミ -->
  <?php
    $args = array(
      'post_type' => 'voice',
      'posts_per_page' => 1
    );
    $voice_query = new WP_Query($args);
  ?>

  <?php if ($voice_query->have_posts()) : ?>
  <section class="sidebar__comment comment layout-sidebar-section">
    <h2 class="sidebar-title">口コミ</h2>
    <?php
    // ループ開始
      while ($voice_query->have_posts()) : $voice_query->the_post();

      // カスタムフィールドがから値を取得
      $tag_group = get_field('tag_group');
      if ($tag_group) {
        $age = $tag_group['age'];
        $type = $tag_group['type'];
      }

      // 画像URLを取得、存在しない場合はデフォルト画像を設定
      $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
    ?>
    <article class="comment__item comment-card">
      <figure class="comment-card__img">
        <img src='<?php echo esc_url($image_url); ?>' alt=''>
      </figure>
      <div class="comment-card__body">
        <?php if (!empty($age) && !empty($type)) : ?>
        <span class="comment-card__tag"><?php echo esc_html($age); ?>代(<?php echo esc_html($type); ?>)</span>
        <?php endif; ?>
        <h3 class="comment-card__title"><?php the_title(); ?></h3>
        <div class="comment-card__button">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View more<span></span></a>
        </div>
      </div>
    </article>
    <?php endwhile; ?>
  </section>
  <?php endif; wp_reset_postdata(); ?>


  <!-- キャンペーン -->
  <?php
  // サブループ情報取得
  $args = array(
    'post_type' => 'campaign',
    'posts_per_page' => 2
  );
  $campaign_query = new WP_Query($args);
  ?>

  <?php if ($campaign_query->have_posts()) : ?>
  <section class="sidebar__pr pr layout-sidebar-section">
    <h2 class="sidebar-title">キャンペーン</h2>

    <div class="pr__items campaign-cards campaign-cards--side">
      <?php
      // ループ開始
      while ($campaign_query->have_posts()) : $campaign_query->the_post();

      // ACFから情報を取得
      $price_group = get_field('price_group');
      if ($price_group) {
        $regular_price = number_format($price_group['regular_price']);
        $special_price = number_format($price_group['special_price']);
      }

      // 画像URLを取得、存在しない場合はデフォルト画像を設定
      $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
      ?>

      <article class="campaign-cards__item campaign-card">
        <figure class="campaign-card__img campaign-card__img--side">
          <img src="<?php echo esc_url($image_url); ?>" alt="">
        </figure>
        <div class="campaign-card__body campaign-card__body--side">
          <h3 class="campaign-card__title campaign-card__title--side"><?php the_title(); ?></h3>
          <p class="campaign-card__text campaign-card__text--side">全部コミコミ(お一人様)</p>
          <div class="campaign-card__price">
            <?php if (!empty($regular_price)) : ?>
            <p class="campaign-card__before-price campaign-card__before-price--side">
              ¥<?php echo esc_html($regular_price); ?></p>
            <?php endif; ?>
            <?php if (!empty($special_price)) : ?>
            <p class="campaign-card__after-price campaign-card__after-price--side">
              ¥<?php echo esc_html($special_price); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </article>
      <?php endwhile; // ループここまで ?>
    </div>

    <div class="pr__button">
      <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View more<span></span></a>
    </div>
  </section>
  <?php endif; wp_reset_postdata(); ?>


  <!-- アーカイブ -->
  <section class="sidebar__archive archive layout-sidebar-section">
    <h2 class="sidebar-title">アーカイブ</h2>

    <?php
      // 現在の年を取得
      $current_year = date('Y');

      // データベースから最も古い投稿の年を取得
      $oldest_post_year = $wpdb->get_var("SELECT YEAR(min(post_date)) FROM $wpdb->posts WHERE post_status = 'publish'");
      $start_year = $oldest_post_year ?: $current_year; // もし投稿がなければ現在の年を使用
    ?>
    <ul class="archive__items">
      <!-- 最も古い年から現在の年までループ -->
      <?php for ($year = $current_year; $year >= $start_year; $year--) : ?>
      <li class="js-archive-accordion">
        <span><?php echo $year; ?></span>
        <ul class="archive__sub-items js-archive-content">
          <!-- 12月から1月までループ -->
          <?php for ($month = 12; $month >= 1; $month--) : ?>
          <!-- WP_Queryでその月の投稿を検索 -->
          <?php
            $archive_query = new WP_Query([
              'year' => $year,
              'monthnum' => $month,
              'posts_per_page' => -1 // すべての投稿を取得
            ]);
          ?>

          <!-- その月に投稿がある場合のみリストを表示 -->
          <?php
            if ($archive_query->have_posts()) {
              $month_link = get_month_link($year, $month);
              echo '<li><a href="' . esc_url($month_link) . '">' . $month . '月</a></li>';
            }
          ?>
          <?php endfor; ?>
        </ul>
      </li>
      <?php endfor; ?>
    </ul>
  </section>

</aside>
<aside class="column__side sidebar">
  <!-- 人気記事 -->
  <section class="sidebar__popular popular layout-sidebar-section">
    <h2 class="sidebar-title">人気記事</h2>
    <!-- カードリスト -->
    <?php
    $popular_posts_args = array(
      'posts_per_page' => 3, // 表示する記事の数
      'meta_key' => 'post_views_count', // 閲覧数を格納するカスタムフィールド
      'orderby' => 'meta_value_num', // 閲覧数に基づいて並べ替え
      'order' => 'DESC' // 降順で表示
      );

    $popular_posts_query = new WP_Query($popular_posts_args);

    if ($popular_posts_query->have_posts()) :
    ?>
    <div class="popular__items">
      <?php
      // ループ START
      while ($popular_posts_query->have_posts()) :
        $popular_posts_query->the_post();

      // 画像URLを取得、存在しない場合はデフォルト画像を設定
      $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
      ?>

      <article class="popular__item popular-card">
        <a href="<?php the_permalink(); ?>">
          <figure class="popular-card__img">
            <img src="<?php echo esc_url($image_url); ?>" alt="">
          </figure>
          <div class="popular-card__body">
            <time class="popular-card__date"
              datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
            <h3 class="popular-card__title"><?php the_title(); ?></h3>
          </div>
        </a>
      </article>
      <?php endwhile; wp_reset_postdata(); // ループ END ?>
    </div>
    <?php endif; ?>
  </section>


  <!-- 口コミ -->
  <section class="sidebar__comment comment layout-sidebar-section">
    <h2 class="sidebar-title">口コミ</h2>

    <?php
    $args = array(
      'post_type' => 'voice',
      'posts_per_page' => 1
    );
    $voice_query = new WP_Query($args);

    if ($voice_query->have_posts()) :
      while ($voice_query->have_posts()) : $voice_query->the_post();
      $age = get_field('age');
      $type = get_field('type');
    ?>

    <article class="comment__item comment-card">
      <figure class="comment-card__img">
        <?php
        if (has_post_thumbnail()) :
          the_post_thumbnail();
          else :
        ?>
        <img src='<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.webp')); ?>' alt=''>
        <?php endif; ?>
      </figure>
      <div class="comment-card__body">
        <span class="comment-card__tag"><?php echo esc_html($age); ?>代(<?php echo esc_html($type); ?>)</span>
        <h3 class="comment-card__title"><?php the_title(); ?></h3>
        <div class="comment-card__button">
          <a href="./voice.html" class="button">View more<span></span></a>
        </div>
      </div>
    </article>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </section>


  <!-- キャンペーン -->
  <section class="sidebar__pr pr layout-sidebar-section">
    <h2 class="sidebar-title">キャンペーン</h2>

    <?php
    // サブループ情報取得
    $args = array(
      'post_type' => 'campaign',
      'posts_per_page' => 2
    );
    $campaign_query = new WP_Query($args);
    ?>

    <?php if ($campaign_query->have_posts()) : ?>
    <div class="pr__items campaign-cards campaign-cards--side">

      <?php
      // ループ開始
      while ($campaign_query->have_posts()) : $campaign_query->the_post();

      // ACFから情報を取得
      $regular_price = get_field('regular_price');
      $special_price = get_field('special_price');

      // 価格を3桁区切りにフォーマット
      $formatted_regular_price = number_format($regular_price);
      $formatted_special_price = number_format($special_price);

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
            <p class="campaign-card__before-price campaign-card__before-price--side">
              ¥<?php echo esc_html($formatted_regular_price); ?></p>
            <p class="campaign-card__after-price campaign-card__after-price--side">
              ¥<?php echo esc_html($formatted_special_price); ?></p>
          </div>
        </div>
      </article>

      <?php endwhile; wp_reset_postdata(); // ループここまで ?>
    </div>
    <?php endif; ?>

    <div class="pr__button">
      <a href="./campaign.html" class="button">View more<span></span></a>
    </div>
  </section>


  <!-- アーカイブ -->
  <section class="sidebar__archive archive layout-sidebar-section">
    <h2 class="sidebar-title">アーカイブ</h2>

    <?php
    // 現在の年を取得
    $current_year = date('Y');

    // データベースから最も古い投稿の年を取得
    $oldest_post_year = $wpdb->get_var("SELECT YEAR(min(post_date)) FROM $wpdb->posts WHERE post_status = 'publish'");
    $start_year = $oldest_post_year ?: $current_year; // もし投稿がなければ現在の年を使用

    echo '<ul class="archive__items">';

    // 最も古い年から現在の年までループ
    for ($year = $current_year; $year >= $start_year; $year--) {
      echo '<li class="js-archive-accordion">';
      echo '<span>' . $year . '</span>';
      echo '<ul class="archive__sub-items js-archive-content">';

      // 12月から1月までループ
      for ($month = 12; $month >= 1; $month--) {
        // WP_Queryでその月の投稿を検索
        $archive_query = new WP_Query([
          'year' => $year,
          'monthnum' => $month,
          'posts_per_page' => -1 // すべての投稿を取得
        ]);

        // その月に投稿がある場合のみリストを表示
        if ($archive_query->have_posts()) {
          $month_link = get_month_link($year, $month);
          echo '<li><a href="' . esc_url($month_link) . '">' . $month . '月</a></li>';
        }
      }

      echo '</ul>';
      echo '</li>';
    }

    echo '</ul>';
    ?>
  </section>
</aside>
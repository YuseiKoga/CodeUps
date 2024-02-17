<?php if (have_posts()) : ?>
<div class="campaign-cards">
  <?php
    // ループ開始
    while (have_posts()) : the_post();

      // ACFから情報を取得
      // 通常価格・特別価格
      $price_group = get_field('price_group');
      if ($price_group) {
        $regular_price = number_format($price_group['regular_price']);
        $special_price = number_format($price_group['special_price']);
      }
      // キャンペーン日時
      $date_group = get_field('date_group');
      if ($date_group) {
        $start_date = $date_group['start_date'];
        $end_date = $date_group['end_date'];
      }
      // キャンペーン内容
      $campaign_text = get_field('campaign_text');

      // カスタムタクソノミーの名前を取得、存在しない場合は'未分類'を設定
      $terms = get_the_terms(get_the_ID(), 'campaign_category');
      $term_name = !empty($terms) ? esc_html($terms[0]->name) : '未分類';

      // 画像URLを取得、存在しない場合はデフォルト画像を設定
      $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
  ?>

  <article class="campaign-cards__item campaign-card">
    <figure class="campaign-card__img campaign-card__img--sub">
      <img src="<?php echo esc_url($image_url); ?>" alt="">
    </figure>
    <div class="campaign-card__body campaign-card__body--sub">
      <span class="campaign-card__category"><?php echo $term_name; ?></span>
      <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
      <p class="campaign-card__text campaign-card__text--sub">全部コミコミ(お一人様)</p>
      <div class="campaign-card__price">
        <?php if (!empty($regular_price)) : ?>
        <p class="campaign-card__before-price">¥<?php echo esc_html($regular_price); ?></p>
        <?php endif; ?>
        <?php if (!empty($special_price)) : ?>
        <p class="campaign-card__after-price campaign-card__after-price--sub">
          ¥<?php echo esc_html($special_price); ?></p>
        <?php endif; ?>
      </div>
      <div class="campaign-card__wrap">
        <?php if (!empty($campaign_text)) : ?>
        <p class="campaign-card__description"><?php echo nl2br(esc_html($campaign_text)); ?></p>
        <?php endif; ?>
        <?php if (!empty($start_date) && !empty($end_date)) : ?>
        <p class="campaign-card__date"><?php echo esc_html($start_date); ?>-<?php echo esc_html($end_date); ?></p>
        <?php endif; ?>
        <p class="campaign-card__contact">ご予約・お問い合わせはコチラ</p>
        <div class="campaign-card__button">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us<span></span></a>
        </div>
      </div>
    </div>
  </article>
  <?php endwhile; // ループ終了 ?>
</div>
<?php else : ?>
<p>現在開催中のキャンペーンはありません</p>
<?php endif; ?>
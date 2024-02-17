<?php if (have_posts()) : ?>
<div class="voice-cards">
  <?php
    // ループ開始
    while (have_posts()) : the_post();

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
          <?php if (!empty($age) && !empty($type)) : ?>
          <span class="voice-card__tag"><?php echo esc_html($age); ?>代(<?php echo esc_html($type); ?>)</span>
          <?php endif; ?>
          <span class="voice-card__category"><?php echo $term_name; ?></span>
        </div>
        <h3 class="voice-card__title"><?php the_title(); ?></h3>
      </div>
      <figure class="voice-card__img">
        <img src="<?php echo esc_url($image_url); ?>" alt="">
      </figure>
    </div>
    <div class="voice-card__body">
      <?php if (!empty($text)) : ?>
      <p class="voice-card__text"><?php echo nl2br($text); ?></p>
      <?php endif; ?>
    </div>
  </article>
  <?php endwhile; // ループ終了 ?>
</div>
<?php else : ?>
<p>投稿がありません</p>
<?php endif; ?>
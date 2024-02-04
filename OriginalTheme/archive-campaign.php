<?php get_header(); ?>

<section class="archive-campaign layout-sub-contents ornament">
  <div class="inner">

    <!-- タブメニュー -->
    <div class="archive-campaign__tab tab">
      <?php get_template_part('template-parts/tab', null, array('taxonomy' => 'campaign_category', 'post_type' => 'campaign', 'is_archive' => true)); ?>
    </div>

    <!-- カードリスト -->
    <?php if(have_posts()) : ?>
    <div class="archive-campaign__items campaign-cards">
      <?php while(have_posts()) : the_post(); ?>
      <?
      // ACFから値を取得
      $regular = get_field('regular_price');
      $special = get_field('special_price');
      $text = get_field('campaign_text');
      $start = get_field('start_date');
      $end = get_field('end_date');
      // 3桁区切りにフォーマット
      $regular_formatted = number_format($regular);
      $special_formatted = number_format($special);
      // カスタムタクソノミーを取得
      $terms = get_the_terms( get_the_ID(), 'campaign_category');
      $term_name = !empty($terms) ? esc_html($terms[0]->name) : '未分類';
      //　画像を取得
      $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
      ?>
      <!-- ループ START -->
      <article class="campaign-cards__item campaign-card">
        <figure class="campaign-card__img campaign-card__img--sub">
          <img src="<?php echo esc_url($image_url); ?>" alt="">
        </figure>
        <div class="campaign-card__body campaign-card__body--sub">
          <span class="campaign-card__category"><?php echo $term_name; ?></span>
          <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
          <p class="campaign-card__text campaign-card__text--sub">全部コミコミ(お一人様)</p>
          <div class="campaign-card__price">
            <p class="campaign-card__before-price">¥<?php echo esc_html($regular_formatted); ?></p>
            <p class="campaign-card__after-price campaign-card__after-price--sub">
              ¥<?php echo esc_html($special_formatted); ?></p>
          </div>
          <div class="campaign-card__wrap u-desktop">
            <p class="campaign-card__description"><?php echo nl2br(esc_html($text)); ?></p>
            <p class="campaign-card__date"><?php echo esc_html($start);?>-<?php echo esc_html($end);?></p>
            <p class="campaign-card__contact">ご予約・お問い合わせはコチラ</p>
            <div class="campaign-card__button">
              <a href="./contact.html" class="button">Contact us<span></span></a>
            </div>
          </div>
        </div>
      </article>
      <!-- ループ END -->
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagenavi'); ?>
  </div>
</section>
</main>

<?php get_footer(); ?>
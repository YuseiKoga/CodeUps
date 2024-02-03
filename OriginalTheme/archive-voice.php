<?php get_header(); ?>

<section class="archive-voice layout-sub-contents ornament">
  <div class="inner">
    <!-- タブメニュー -->
    <div class="archive-voice__tab tab">
      <span class="tab__item is-active">ALL</span>
      <?php
          $terms = get_terms([
            'taxonomy'  => 'voice_category',
            'hide_empty' => true,
          ]);
          foreach ($terms as $term) {
            echo '<a href="' . esc_url(get_term_link($term)) .'" class="tab__item">' .esc_html($term->name) .'</a>';
          }
          ?>
    </div>
    <!-- カードリスト -->
    <?php if(have_posts()) : ?>
    <div class="archive-voice__items voice-cards">
      <?php while(have_posts()) : the_post(); ?>
      <?
      // ACFから値を取得
      $age = get_field('age');
      $type = get_field('type');
      $text = get_field('text');
      // カスタムタクソノミーを取得
      $terms = get_the_terms( get_the_ID(), 'voice_category');
      $term_name = !empty($terms) ? esc_html($terms[0]->name) : '未分類';
      //　画像を取得
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
          <figure class="voice-card__img">
            <img src="<?php echo esc_url($image_url); ?>" alt="">
          </figure>
        </div>
        <div class="voice-card__body">
          <p class="voice-card__text"><?php echo esc_html($text); ?></p>
        </div>
      </article>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagenavi') ?>
  </div>
</section>

<?php get_footer(); ?>
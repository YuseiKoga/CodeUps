<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--price js-mv">
    <h1 class="sub-mv__title">Price</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="sub-price layout-sub-contents ornament">
    <div class="inner sub-price__inner">
      <div class="sub-price__container">
        <!-- 料金ブロック -->
        <?php
        // SCFからカスタムフィールド情報を取得
        function get_price_fields($field_name) {
          return SCF::get_option_meta('price', $field_name);
        }

        // 料金表の生成
        function render_price_block($id, $title, $fields, $course_key, $fee_key) {
          if (!empty($fields)) {
            echo '<div class="sub-price__block" id="' . esc_attr($id) . '">';
            echo '<h2 class="sub-price__title"><span>' . esc_html($title) . '</span></h2>';
            echo '<dl class="sub-price__items">';

          foreach ($fields as $field) {
            if (!empty($field[$course_key]) && !empty($field[$fee_key])) {
              echo '<dt class="sub-price__term">' . esc_html($field[$course_key]) . '</dt>';
              echo '<dd class="sub-price__description">' . esc_html($field[$fee_key]) . '</dd>';
            }
          }

            echo '</dl>';
            echo '</div>';
          }
        }
      ?>

        <?php
      // サファリツアーの料金
      $safari_fields = get_price_fields('safari');
      render_price_block('safari', 'サファリツアー', $safari_fields, 'safari_course', 'safari_fee');

      // 体験ダイビングの料金
      $photo_fields = get_price_fields('photo');
      render_price_block('photo', 'フォトワークショップ', $photo_fields, 'photo_course', 'photo_fee');

      // ファンダイビングの料金
      $nature_fields = get_price_fields('nature');
      render_price_block('nature', '自然保護活動体験', $nature_fields, 'nature_course', 'nature_fee');

      ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
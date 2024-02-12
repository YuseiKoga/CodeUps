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
      function render_price_block($title, $fields, $course_key, $fee_key) {
        if (!empty($fields)) {
          echo '<div class="sub-price__block" id="price' . esc_attr($title) . '">';
          echo '<h2 class="sub-price__title"><span>' . esc_html($title) . '</span></h2>';
          echo '<dl class="sub-price__items">';

        foreach ($fields as $field) {
          echo '<dt class="sub-price__term">' . esc_html($field[$course_key]) . '</dt>';
          echo '<dd class="sub-price__description">' . esc_html($field[$fee_key]) . '</dd>';
        }

        echo '</dl>';
        echo '</div>';
        }
      }
      ?>

        <?php
      // ライセンス講習
      $licence_fields = get_price_fields('licence');
      render_price_block('ライセンス講習', $licence_fields, 'licence_course', 'licence_fee');

      // 体験ダイビングの料金
      $trial_fields = get_price_fields('trial');
      render_price_block('体験ダイビング', $trial_fields, 'trial_course', 'trial_fee');

      // ファンダイビングの料金
      $fun_fields = get_price_fields('fun');
      render_price_block('ファンダイビング', $fun_fields, 'fun_course', 'fun_fee');

      // スペシャルダイビングの料金
      $special_fields = get_price_fields('special');
      render_price_block('スペシャルダイビング', $special_fields, 'special_course', 'special_fee');
      ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
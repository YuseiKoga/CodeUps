<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--contact js-mv">
    <h1 class="sub-mv__title">Contact</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="sub-contact layout-sub-contents ornament">
    <div class="inner sub-contact__inner">
      <!-- ContactForm7読み込み（管理画面で設定） -->
      <?php echo do_shortcode('[contact-form-7 id="c2a5504" title="お問い合わせ入力"]'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
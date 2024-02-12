<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--faq js-mv">
    <h1 class="sub-mv__title">FAQ</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="faq layout-sub-contents ornament">
    <div class="inner faq__inner">
      <?php $faq_items = SCF::get_option_meta('faq', 'faq_field'); ?>
      <?php if (! empty($faq_items)) : ?>
      <!-- 質問リスト -->
      <ul class="faq__items">
        <?php foreach ($faq_items as $item) : ?>
        <li class="faq__item faq-block">
          <p class="faq-block__question js-faq-accordion"><?php echo nl2br( esc_html($item['question'])); ?></p>
          <p class="faq-block__answer js-faq-content"><?php echo nl2br( esc_html($item['answer'])); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
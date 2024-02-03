<?php get_header(); ?>

<section class="faq layout-sub-contents ornament">
  <div class="inner faq__inner">
    <?php $faq_items = SCF::get('faq'); ?>
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
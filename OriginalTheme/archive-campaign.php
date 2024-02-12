<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--campaign js-mv">
    <h1 class="sub-mv__title">Campaign</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <section class="archive-campaign layout-sub-contents ornament">
    <div class="inner">
      <!-- タブメニュー -->
      <div class="archive-campaign__tab tab">
        <?php get_template_part('template-parts/tab', null, array('taxonomy' => 'campaign_category', 'post_type' => 'campaign', 'is_archive' => true)); ?>
      </div>

      <!-- カードリスト -->
      <?php get_template_part('template-parts/campaign-article') ?>

      <!-- ページネーション -->
      <div class="archive-campaign__pagination">
        <?php get_template_part('template-parts/pagenavi'); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--voice js-mv">
    <h1 class="sub-mv__title">Voice</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="archive-voice layout-sub-contents ornament">
    <div class="inner">
      <!-- タブメニュー -->
      <div class="archive-voice__tab tab">
        <?php get_template_part('template-parts/tab', null, array('taxonomy' => 'voice_category', 'post_type' => 'voice', 'is_archive' => true)); ?>
      </div>

      <!-- カードリスト -->
      <?php get_template_part('template-parts/voice-article'); ?>

      <!-- ページネーション -->
      <?php get_template_part('template-parts/pagenavi'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
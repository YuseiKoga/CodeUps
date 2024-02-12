<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--voice js-mv">
    <h1 class="sub-mv__title"><?php single_term_title(); ?></h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="archive-voice layout-sub-contents ornament">
    <div class="inner">

      <!-- タブメニュー -->
      <div class="archive-voice__tab">
        <?php get_template_part('template-parts/tab', null, array('taxonomy' => 'voice_category', 'post_type' => 'voice', 'is_archive' => false)); ?>
      </div>

      <!-- カードリスト -->
      <?php get_template_part('template-parts/voice-article'); ?>

      <!-- ページネーション -->
      <div class="archive-voice__pagination">
        <?php get_template_part('template-parts/pagenavi') ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
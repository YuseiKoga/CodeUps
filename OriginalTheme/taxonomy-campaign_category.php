<?php get_header(); ?>

<section class="archive-campaign layout-sub-contents ornament">
  <div class="inner">
    <!-- タブメニュー -->
    <div class="archive-campaign__tab tab">
      <?php get_template_part('template-parts/tab', null, array('taxonomy' => 'campaign_category', 'post_type' => 'campaign', 'is_archive' => false)); ?>
    </div>

    <!-- カードリスト -->
    <?php get_template_part('template-parts/campaign-article') ?>

    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagenavi'); ?>
  </div>
</section>

</main>

<?php get_footer(); ?>
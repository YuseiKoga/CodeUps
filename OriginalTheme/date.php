<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--blog js-mv">
    <h1 class="sub-mv__title"><?php the_archive_title(); ?></h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <div class="column layout-sub-contents ornament">
    <div class="inner">
      <div class="column__container">
        <!-- メインコンテンツ -->
        <div class="column__main archive-blog">

          <!-- カードリスト -->
          <div class="archive-blog-items">
            <?php get_template_part('template-parts/blog-article'); ?>
          </div>

          <!-- ページネーション -->
          <div class="archive-blog__pagination">
            <?php get_template_part('template-parts/pagenavi') ?>
          </div>
        </div>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
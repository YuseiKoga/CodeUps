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
          <?php if (have_posts()) : ?>
          <div class="archive-blog__items blog-cards blog-cards--sub">
            <?php while (have_posts()) : the_post(); ?>
            <article class="blog-cards__item blog-card">
              <a href="<?php the_permalink(); ?>">
                <figure class="blog-card__img">
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                  <img src='<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.webp')); ?>'
                    alt='アイキャッチ画像が設定されていません'>
                  <?php endif; ?>
                </figure>
                <time class="blog-card__date"
                  datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                <h2 class="blog-card__title"><?php the_title(); ?></h2>
                <p class="blog-card__text"><?php the_excerpt(); ?></p>
              </a>
            </article>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>

          <!-- ページネーション -->
          <?php get_template_part('template-parts/pagenavi') ?>
        </div>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
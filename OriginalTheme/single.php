<?php get_header(); ?>

<?php
if (!is_user_logged_in() && !is_robots()) {
  setPostViews(get_the_ID());
}
?>

<div class="column layout-sub-contents ornament">
  <div class="inner">
    <div class="column__container">

      <!-- メインコンテンツ -->
      <div class="column__main single-blog">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();

        // アイキャッチ画像URLを取得、存在しない場合はデフォルト画像を設定
        $image_url = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_file_uri('/assets/images/common/no-image.webp');
        ?>

        <article class="single-blog__article">
          <time class="single-blog__date"
            datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
          <h1 class="single-blog__title"><?php the_title(); ?></h1>
          <figure class="single-blog__thumbnail">
            <img src="<?php echo esc_url($image_url); ?>" alt="">
          </figure>
          <div class="single-blog__content">
            <?php the_content(); ?>
          </div>
        </article>
        <?php endwhile; endif ?>

        <!-- ページネーション -->
        <div class="single-blog__pagination">
          <div class="single-blog__pagination-wrap">
            <?php
            // 前の記事を取得
            $prev_post = get_previous_post();
            // 前の記事が存在する場合、リンクを取得し、href属性に設定
            if (!empty($prev_post)): ?>
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"
              class="single-blog__pagination-link single-blog__pagination-link--prev"></a>
            <?php endif; ?>

            <?php
            // 次の記事を取得
            $next_post = get_next_post();
            // 次の記事が存在する場合、リンクを取得し、href属性に設定
            if (!empty($next_post)): ?>
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"
              class="single-blog__pagination-link single-blog__pagination-link--next"></a>
            <?php endif; ?>
          </div>
        </div>

      </div>

      <!-- サイドバー -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

</main>

<?php get_footer(); ?>
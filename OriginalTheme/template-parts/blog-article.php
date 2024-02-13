<?php if (have_posts()) : ?>
<div class="blog-cards blog-cards--sub">
  <!-- ループ開始 -->
  <?php while (have_posts()) : the_post(); ?>
  <article class="blog-cards__item blog-card">
    <a href="<?php the_permalink(); ?>">
      <!-- アイキャッチ画像 -->
      <figure class="blog-card__img">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
        <?php else : ?>
        <img src='<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.webp')); ?>'
          alt='アイキャッチ画像が設定されていません'>
        <?php endif; ?>
      </figure>
      <!-- 投稿日 -->
      <time class="blog-card__date" datetime="<?php the_time('c'); ?>">
        <?php the_time('Y.m/d'); ?>
      </time>
      <!-- 投稿タイトル -->
      <h2 class="blog-card__title"><?php the_title(); ?></h2>
      <!-- 投稿抜粋 -->
      <p class="blog-card__text"><?php the_excerpt(); ?></p>
    </a>
  </article>
  <?php endwhile; ?>
  <!-- ループ終了 -->
</div>
<?php else : ?>
<p>ブログが投稿されていません</p>
<?php endif; ?>
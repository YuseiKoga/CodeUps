<?php if (have_posts()) : ?>
<div class="blog-cards blog-cards--sub">
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
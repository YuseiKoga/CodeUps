<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <?php
  if (is_page('privacypolicy')) {
    $class = 'common';
    $title = 'Privacy Policy';
  } elseif (is_page('terms-of-service')) {
    $class = 'common';
    $title = 'Terms of Service';
  }
  ?>
  <section class="sub-mv sub-mv--<?php echo $class ?> js-mv">
    <h1 class="sub-mv__title"><?php echo $title ?></h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="common-page layout-sub-contents ornament">
    <div class="inner common-page__inner">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="common-page__container">
        <h2 class="common-page__title"><?php the_title(); ?></h2>
        <!-- 内容は固定ページで管理 -->
        <div class="common-page__content">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <p>準備中です</p>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
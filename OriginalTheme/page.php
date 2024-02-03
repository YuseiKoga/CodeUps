<?php get_header(); ?>

<section class="common-page layout-sub-contents ornament">
  <div class="inner common-page__inner">
    <div class="common-page__container">
      <h2 class="common-page__title"><?php the_title(); ?></h2>
      <!-- 内容は固定ページで管理 -->
      <div class="common-page__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
</main>

<?php get_footer(); ?>
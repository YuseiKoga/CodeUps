<?php get_header(); ?>

<div class="not-found">
  <!-- パンくず -->
  <div class="breadcrumb breadcrumb--white layout-breadcrumb">
    <div class="inner">
      <span><a href="<?php echo esc_url(home_url()); ?>">TOP</a></span>
      <span>404</span>
    </div>
  </div>
  <!-- 404 -->
  <div class="not-found__container">
    <p class="not-found__title">404</p>
    <p class="not-found__text">
      申し訳ありません。<br>
      お探しのページが見つかりません。
    </p>
    <div class="not-found__button">
      <a href="<?php echo esc_url(home_url())?>" class="button button--white">Page Top<span></span></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
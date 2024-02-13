<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--about js-mv">
    <h1 class="sub-mv__title">About</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <!-- About　セクション -->
  <section class="sub-about layout-sub-contents ornament">
    <div class="inner">
      <div class="sub-about__wrap">
        <h2 class="sub-about__title">Dive into<br>the Ocean</h2>
        <p class="sub-about__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
  </section>

  <!-- Gallery　セクション -->
  <?php
    //カスタムフィールドから画像を取得
    $gallery_images = SCF::get_option_meta('gallery', 'gallery_field');

    if (!empty($gallery_images)) :
  ?>
  <section class="gallery layout-gallery">
    <div class="inner">
      <hgroup class="gallery__title section-title">
        <p class="section-title__main">Gallery</p>
        <h2 class="section-title__sub">フォト</h2>
      </hgroup>
      <div class="gallery__modal js-modal"></div>
      <div class="gallery__items">
        <?php
        foreach($gallery_images as $gallery_image) {
          // 画像IDを取得
          $image_id = $gallery_image['gallery_image'];
          // 画像URLを取得
          $image_url = wp_get_attachment_url($image_id);
          echo '<div class="gallery__item js-modal-img">';
          echo '<img src="' . esc_url($image_url) .'" alt="">';
          echo '</div>';
        }
      ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
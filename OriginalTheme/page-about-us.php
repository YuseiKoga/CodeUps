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
        「海の魅力をあなたに届ける」をモットーに、私たちのダイビングショップは、初心者から上級者まで全てのダイバーを歓迎します。<br>海の美しさと安全なダイビングを提供するため、経験豊かなインストラクターと最高品質の機材を用意しています。<br>私たちと一緒に、海の冒険を始めましょう。
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
          foreach($gallery_images as $gallery_image) :
            $image_id = $gallery_image['gallery_image'];
            $image_url = wp_get_attachment_url($image_id);
        ?>
        <div class="gallery__item js-modal-img">
          <img src="<?php echo esc_url($image_url); ?>" alt="">
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
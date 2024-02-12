<?php get_header(); ?>

<main>

  <!-- メインビジュアル -->
  <section class="sub-mv sub-mv--contact js-mv">
    <h1 class="sub-mv__title">Contact</h1>
  </section>

  <!-- パンくず -->
  <?php get_template_part('template-parts/breadcrumb') ?>

  <section class="contact-thanks layout-sub-contents ornament">
    <div class="inner">
      <p class="contact-thanks__title">お問い合わせ内容を送信完了しました。</p>
      <p class="contact-thanks__text">
        <span>このたびは、お問い合わせ頂き</span><span>誠にありがとうございます。</span><span>お送り頂きました内容を確認の上、</span><span>3営業日以内に折り返しご連絡させて頂きます。</span><span>また、ご記入頂いたメールアドレスへ、</span><span>自動返信の確認メールをお送りしております。</span>
      </p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
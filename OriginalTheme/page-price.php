<?php get_header(); ?>

<section class="sub-price layout-sub-contents ornament">
  <div class="inner sub-price__inner">
    <div class="sub-price__container">
      <!-- 料金ブロック -->
      <div class="sub-price__block" id="priceLicence">
        <h2 class="sub-price__title"><span>ライセンス講習</span></h2>
        <!-- 料金表 -->
        <?php $licence_fields = SCF::get('licence'); ?>
        <?php if(!empty($licence_fields)) : ?>
        <dl class="sub-price__items">
          <?php foreach ( $licence_fields as $fields ) : ?>
          <dt class="sub-price__term"><?php echo esc_html( $fields['licence_course'] ); ?></dt>
          <dd class="sub-price__description"><?php echo esc_html( $fields['licence_fee'] ); ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php endif; ?>
      </div>
      <!-- 料金ブロック -->
      <div class="sub-price__block" id="priceExperience">
        <h2 class="sub-price__title"><span>体験ダイビング</span></h2>
        <!-- 料金表 -->
        <?php $trial_fields = SCF::get('trial'); ?>
        <?php if(!empty($trial_fields)) : ?>
        <dl class="sub-price__items">
          <?php foreach ( $trial_fields as $fields ) : ?>
          <dt class="sub-price__term"><?php echo esc_html( $fields['trial_course'] ); ?></dt>
          <dd class="sub-price__description"><?php echo esc_html( $fields['trial_fee'] ); ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php endif; ?>
      </div>
      <!-- 料金ブロック -->
      <div class="sub-price__block" id="priceFun">
        <h2 class="sub-price__title"><span>ファンダイビング</span></h2>
        <!-- 料金表 -->
        <?php $fun_fields = SCF::get('fun'); ?>
        <?php if(!empty($fun_fields)) : ?>
        <dl class="sub-price__items">
          <?php foreach ( $fun_fields as $fields ) : ?>
          <dt class="sub-price__term"><?php echo esc_html( $fields['fun_course'] ); ?></dt>
          <dd class="sub-price__description"><?php echo esc_html( $fields['fun_fee'] ); ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php endif; ?>
      </div>
      <!-- 料金ブロック -->
      <div class="sub-price__block">
        <h2 class="sub-price__title"><span>スペシャルダイビング</span></h2>
        <!-- 料金表 -->
        <?php $special_fields = SCF::get('special'); ?>
        <?php if(!empty($special_fields)) : ?>
        <dl class="sub-price__items">
          <?php foreach ( $special_fields as $fields ) : ?>
          <dt class="sub-price__term"><?php echo esc_html( $fields['special_course'] ); ?></dt>
          <dd class="sub-price__description"><?php echo esc_html( $fields['special_fee'] ); ?></dd>
          <?php endforeach; ?>
        </dl>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
</main>

<?php get_footer(); ?>
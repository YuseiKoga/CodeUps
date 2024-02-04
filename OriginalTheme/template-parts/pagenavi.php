<?php if (function_exists('wp_pagenavi')) : ?>
<?php
if (is_post_type_archive('campaign') || (is_tax('campaign_category'))) {
  $pagination_class = 'archive-campaign__pagination';
} elseif (is_home()) {
  $pagination_class = 'archive-blog__pagination';
} elseif (is_post_type_archive('voice') || (is_tax('voice_category'))) {
  $pagination_class = 'archive-voice__pagination';
}
?>
<?php if (isset($pagination_class)) : ?>
<div class="<?php echo $pagination_class; ?>">
  <?php wp_pagenavi(); ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php
// 基本設定
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

// 読み込み
function my_script_init()
{
  // jquery
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', '', '3.6.1', true);
  // Swiper
  wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0.1',true);
  wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.1');
  // GoogleFonts
  wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
  // my-script
  wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
  wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');

// アーカイブの表示投稿数の制御
function set_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if (is_post_type_archive('voice') || is_tax('voice_category')) {
      $query->set('posts_per_page', 6);
    } elseif (is_post_type_archive('campaign') || is_tax('campaign_category')) {
      $query->set('posts_per_page', 4);
    }
  }
}
add_action('pre_get_posts', 'set_posts_per_page');
?>
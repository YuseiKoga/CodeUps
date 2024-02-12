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


// デフォルト投稿の情報変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');


// ブログの抜粋文の文字数制限
function custom_excerpt_length($length)
{
  return 80;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// ブログの抜粋の末尾を変更
function new_excerpt_more($more)
{
  return '[続きを読む...]';
}
add_filter('excerpt_more', 'new_excerpt_more');


// 記事のPVを取得
function getPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count. 'Views';
}

// 記事のPVをカウント
function setPostViews($postID)
{
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//　ContactForm7のセレクトボックでカスタム投稿の投稿タイトルを出力
function dynamic_dropdown_for_campaigns($tag)
{
  if ('your-select' != $tag['name']) {
    return $tag;
  }

  $args = array(
      'post_type' => 'campaign',
      'posts_per_page' => -1,
  );

  $campaigns = new WP_Query($args);
  $tag['raw_values'] = [];
  $tag['values'] = [];
  $tag['labels'] = [];

  // 最初の選択肢を追加（ユーザーが選択できないようにする）
  $tag['values'][] = '#'; // 非選択可能な値
  $tag['labels'][] = 'キャンペーン内容を選択';

  if ($campaigns->have_posts()) {
      while ($campaigns->have_posts()) {
          $campaigns->the_post();
          $tag['values'][] = get_the_title();
          $tag['labels'][] = get_the_title();
      }
  }

  wp_reset_postdata();
  return $tag;
}
add_filter('wpcf7_form_tag', 'dynamic_dropdown_for_campaigns', 10, 2);


// Contact Form 7で自動挿入されるPタグ・brタグを削除
function wpcf7_autop_return_false()
{
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


// Thanksページへリダイレクト
function redirect_to_thanks_page()
{
  $home = home_url();
  echo <<< EOD
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event) {
      location = '{$home}/thanks/';
    }, false);
  </script>
  EOD;
}
add_action('wp_footer', 'redirect_to_thanks_page');


// SCFのオプションページ設定
SCF::add_options_page(
  'メインビジュアル',
  'メインビジュアル画像',
  'manage_options',
  'mainVisual',
  'dashicons-cover-image',
  7
);
SCF::add_options_page (
  'ギャラリー',
  'ギャラリー画像',
  'manage_options',
  'gallery',
  'dashicons-format-gallery',
  7
);
SCF::add_options_page (
  'よくある質問',
  'よくある質問',
  'manage_options',
  'faq',
  'dashicons-editor-paste-text',
  7
);
SCF::add_options_page (
  '料金一覧',
  '料金一覧',
  'manage_options',
  'price',
  'dashicons-money-alt',
  7
);

// the_archive_titleのプレフィックスを取り除く
add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

?>
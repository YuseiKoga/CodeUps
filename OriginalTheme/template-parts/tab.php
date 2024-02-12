<?php
/**
 * タクソノミーと投稿タイプに基づいてタブをレンダリングする。
 *
 * @param string $taxonomy タクソノミー。
 * @param string $post_type 投稿タイプ。
 * @param bool $is_archive アーカイブページかどうか。
 */
function render_tabs($taxonomy, $post_type, $is_archive = false) {
    $current_term = get_queried_object();
    $is_term_page = is_term_page($current_term, $taxonomy, $is_archive);

    // タブの開始
    echo '<div class="tab">';

    // 'ALL'タブのリンク
    $all_tab_link = get_post_type_archive_link($post_type);
    $all_tab_class = !$is_term_page ? 'is-active' : '';
    echo '<a href="' . esc_url($all_tab_link) . '" class="tab__item ' . esc_attr($all_tab_class) . '">ALL</a>';

    // 各タームのタブ
    $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
    foreach ($terms as $term) {
        $term_link = get_term_link($term);
        $is_active = $is_term_page && ($current_term->term_id === $term->term_id);
        $term_class = $is_active ? 'is-active' : '';
        echo '<a href="' . esc_url($term_link) . '" class="tab__item ' . esc_attr($term_class) . '">' . esc_html($term->name) . '</a>';
    }

    // タブの終了
    echo '</div>';
}

/**
 * 現在のページが特定のタームページであるかどうかを判断する。
 *
 * @param WP_Term|null $current_term 現在のタームオブジェクト。
 * @param string $taxonomy タクソノミー。
 * @param bool $is_archive アーカイブページかどうか。
 * @return bool タームページであればtrue、そうでなければfalse。
 */
function is_term_page($current_term, $taxonomy, $is_archive) {
    return !$is_archive && $current_term instanceof WP_Term && $current_term->taxonomy === $taxonomy;
}

// レンダリング関数の呼び出し
if (isset($args['taxonomy']) && isset($args['post_type'])) {
    render_tabs($args['taxonomy'], $args['post_type'], $args['is_archive'] ?? false);
}
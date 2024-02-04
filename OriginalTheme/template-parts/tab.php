<?php
/**
 * タクソノミーと投稿タイプに基づいてタブをレンダリングする。
 *
 * @param string $taxonomy タブに使用するタクソノミー。
 * @param string $post_type タブに使用する投稿タイプ。
 * @param bool $is_archive アーカイブページであるかどうかを示す。
 */
function render_tabs($taxonomy, $post_type, $is_archive = false) {
    $current_term = get_queried_object();
    $is_term_page = isTermPage($current_term, $taxonomy, $is_archive);

    // 'ALL'タブのリンクは常に投稿タイプのアーカイブページへのリンクを生成
    echo '<a href="' . get_post_type_archive_link($post_type) . '" class="tab__item ' . (!$is_term_page ? 'is-active' : '') . '">ALL</a>';

    // 各タームのタブをレンダリング
    $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
    foreach ($terms as $term) {
        $is_active = $is_term_page && ($current_term->term_id === $term->term_id);
        echo '<a href="' . esc_url(get_term_link($term)) . '" class="tab__item ' . ($is_active ? 'is-active' : '') . '">' . esc_html($term->name) . '</a>';
    }
}

/**
 * 現在のページがタームページかどうかを確認する。
 *
 * @param object $current_term 現在クエリされているオブジェクト。
 * @param string $taxonomy チェックするタクソノミー。
 * @param bool $is_archive アーカイブページであるかどうか。
 * @return bool タームページであればtrue、そうでなければfalse。
 */
function isTermPage($current_term, $taxonomy, $is_archive) {
    return !$is_archive && $current_term instanceof WP_Term && $current_term->taxonomy === $taxonomy;
}

if (isset($args['taxonomy']) && isset($args['post_type'])) {
    render_tabs($args['taxonomy'], $args['post_type'], $args['is_archive'] ?? false);
}
?>
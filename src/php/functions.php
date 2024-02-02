<?php
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

function my_script_init()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "3.6.0", true);
    wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', "", "11.0.1", true);
    wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.1');
    wp_enqueue_style('NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
    wp_enqueue_style('Lato', '//fonts.googleapis.com/css2?family=Lato&family:wght@400;500;700&display=swap');
    wp_enqueue_style('Gotu', '//fonts.googleapis.com/css2?family=Gotu&family:wght@400;500;700&display=swap');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'my_script_init');
?>
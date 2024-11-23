<?php
function my_setup() {
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // titleタグ自動生成
  add_theme_support('html5', array( // HTML5による出力
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

function my_script_init() {
  // WordPressに含まれているjquery.jsを読み込まない
  wp_deregister_script('jquery');

  wp_enqueue_style('common-css', get_template_directory_uri() . './css/common.css', array(), '1.0.1');
  wp_enqueue_style('style-css', get_template_directory_uri() . './css/style.css', array(), '1.0.1');
  wp_enqueue_script('menu-js', get_template_directory_uri() . './js/menu.js', array(), '1.0.1', true);
  wp_enqueue_script('button-js', get_template_directory_uri() . './js/button.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

add_action('wp_enqueue_scripts', function () {
  // トップページのとき読み込む
  if (is_front_page()) {
    wp_enqueue_style('window-css', get_template_directory_uri() . '/css/window.css', array(), '1.0.1');
    wp_enqueue_script('window-js', get_template_directory_uri() . '/js/window.js', array(), '1.0.1', true);
    wp_enqueue_script('bubbles-js', get_template_directory_uri() . '/js/bubbles.js', array(), '1.0.1', true);
    wp_enqueue_script('skills-js', get_template_directory_uri() . '/js/skills.js', array(), '1.0.1', true);
  } else {
    // トップページ以外のとき読み込む
    wp_enqueue_style('pages-css', get_template_directory_uri() . '/css/pages.css', array(), '1.0.1');
  }

  // お問い合わせページのとき読み込む
  if (is_page('contact')) {
    wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css', array(), '1.0.1');
  }

  // 制作実績とウェブアプリの個別ページのとき読み込む
  if (is_singular(array('works', 'web-app'))) {
    wp_enqueue_style('window-css', get_template_directory_uri() . '/css/window.css', array(), '1.0.1');
    wp_enqueue_script('window-js', get_template_directory_uri() . '/js/window.js', array(), '1.0.1', true);
    wp_enqueue_style('single-css', get_template_directory_uri() . '/css/single.css', array(), '1.0.1');
  }
  // 制作実績とウェブアプリの一覧ページのとき読み込む
  if (is_post_type_archive(array('works', 'web-app'))) {
    wp_enqueue_style('archive-css', get_template_directory_uri() . '/css/archive.css', array(), '1.0.1');
  }
});

// アップロード画像のリサイズ機能を無効化
add_filter("big_image_size_threshold", "__return_false");

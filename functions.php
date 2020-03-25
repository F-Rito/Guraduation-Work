<?php

// カスタムヘッダー
add_theme_support(
  'custom-header',
  array(
    'width' => 1095,
    'height' => 650,
    'default-image' => '%s/image/image/top.jpg',
  )
);


// カスタムメニュー
register_nav_menus(
  array(
    'place_global' => 'グローバル',
  )
);


// ウィジェット
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Gallery Sidebar',
    'id' => 'gallery-sidebar',
    'description' => 'ギャラリーのサイドバーです。',
  ));

  register_sidebar(array(
    'name' => 'Blog Widgets',
    'id' => 'blog-widgets',
    'description' => 'ブログのサイドバーです。'

  ));
}
add_action('widgets_init', 'my_theme_widgets_init');


// アイキャッチ画像
// アイキャッチ画像を利用できるようにする。
add_theme_support('post-thumbnails');

// アイキャッチ画像サイズ
set_post_thumbnail_size(350, 230, true);

// ブログ投稿用
add_image_size('post_thumbnail', 400, 267);

// ブログアーカイブ用
add_image_size('post_archive_thumbnail', 350, 230);

// ギャラリー投稿用
add_image_size('gallery_thumbnail', 350, 230);

// ギャラリーアーカイブ用
add_image_size('gallery_archive_thumbnail', 350, 230);



/* 【出力カスタマイズ】wp_get_archives の年表記を置き換える */
add_filter('gettext', 'my_gettext', 20, 3);
function my_gettext($translated_text, $original_text, $domain)
{
  if ($original_text == '%1$s %2$d') {
    $translated_text = '%2$s.%1$02d';
  }
  return $translated_text;
}

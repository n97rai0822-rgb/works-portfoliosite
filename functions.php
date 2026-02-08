<?php 
add_theme_support('title-tag');/* <title>を出力 */

add_theme_support('post-thumbnails');/* アイキャッチ画像を使用可能にする */
add_image_size(
  'home_thumb', // サイズ名
  500,                // 横幅
  350,                // 高さ
  false                // トリミング（中央）
);
add_image_size(
  'works_thumb', // サイズ名
  1140,                // 横幅
  650,                // 高さ
  false                // トリミング（中央）
);
add_image_size(
  'more_works_thumb', // サイズ名
  450,                // 横幅
  300,                // 高さ
  false                // トリミング（中央）
);

add_theme_support('menus');/* カスタムメニューを有効にする */

// cssファイル、jsファイルの読み込みを指定
function mytheme_enqueue_styles() {

  // 共通CSS
  wp_enqueue_style(
    'destyle-style',
    get_template_directory_uri() . '/assets/css/destyle.css',
    array(),
    '1.0.0'
  );
  wp_enqueue_style(
    'common-style',
    get_template_directory_uri() . '/assets/css/common.css',
    array(),
    '1.0.0'
  );
  //共通js
  wp_enqueue_script(
    'common-script',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0.0',
    true
  );


  // front-page.php
  if (is_front_page()) {
    wp_enqueue_style(
      'home-style',
      get_template_directory_uri() . '/assets/css/home.css',
      array('common-style'),
      '1.0.0'
    );
    wp_enqueue_script(
      'home-script',
      get_template_directory_uri() . '/assets/js/home.js',
      array(),
      '1.0.0',
      true
    );
  };

  // single-works.php（カスタム投稿 works）
  if (is_singular('works')) {
    wp_enqueue_style(
      'works-style',
      get_template_directory_uri() . '/assets/css/works.css',
      array('common-style'),
      '1.0.0'
    );
    wp_enqueue_script(
      'works-script',
      get_template_directory_uri() . '/assets/js/works.js',
      array(),
      '1.0.0',
      true
    );
  };

  // page-profile.php（固定ページスラッグ profile）
  if (is_page('profile')) {
    wp_enqueue_style(
      'profile-style',
      get_template_directory_uri() . '/assets/css/profile.css',
      array('common-style'),
      '1.0.0'
    );
    wp_enqueue_script(
      'profile-script',
      get_template_directory_uri() . '/assets/js/profile.js',
      array('common-script'),
      '1.0.0',
      true
    );
  }

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// カスタム投稿タイプを投稿一覧に表示
function add_custom_post_to_home( $query ) {

  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }

  if ( $query->is_front_page() ) {
    $query->set( 'post_type', array( 'post', 'works' ) );
  }

}
add_action( 'pre_get_posts', 'add_custom_post_to_home' );


//WordPressの自動更新の通知メールを停止するコード
add_filter( 'auto_core_update_send_email', '__return_false' );

//テーマの自動更新の通知メールを停止するコード
add_filter( 'auto_theme_update_send_email', '__return_false' );

//プラグインの自動更新の通知メールを停止するコード
add_filter( 'auto_plugin_update_send_email', '__return_false' );
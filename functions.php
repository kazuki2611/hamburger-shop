<?php 

// テーマサポート
function hamburger_setup() {
  // html5のフォーマットで吐き出す
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',  
      ) );
      // アイキャッチ画像有効にする
      add_theme_support( 'post-thumbnails' );
      // タイトルタグを管理画面から導入できるようにする
      add_theme_support( 'title-tag' );
      // カスタムメニュー有効化
      add_theme_support( 'menus' );
}
add_action( 'after_setup_theme', 'hamburger_setup');
  // CSS JS 呼び出し
  function hamburger_script () {
    // css
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all' );
    

    // js
    wp_enqueue_script('javascript', get_template_directory_uri(). '/js/script.js', array(), '1.0.0','all');

    action( 'wp_enqueue_scripts', 'hamburger_script' );

	
  }

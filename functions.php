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
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
     // js
    wp_enqueue_script('javascript', get_template_directory_uri(). '/js/script.js', array(), '1.0.0','all');
// font
    function enqueue_scripts(){
      wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
      }
    }
  add_action('wp_enqueue_scripts','hamburger_script' );

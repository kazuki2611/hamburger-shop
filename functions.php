<?php

// テーマサポート
function hamburger_setup()
{
  // html5のフォーマットで吐き出す
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  // アイキャッチ画像有効にする
  add_theme_support('post-thumbnails');
  // タイトルタグを管理画面から導入できるようにする
  add_theme_support('title-tag');
  // カスタムメニュー有効化
  add_theme_support('menus');

  register_nav_menus([
    'p-container' => 'フッターナビゲーション',
  ]);

}
add_action('after_setup_theme', 'hamburger_setup');


// CSS JS 呼び出し
function hamburger_script()
{
  // css
  wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
  // js
  // wp_enqueue_script( 'javascript', get_template_directory_uri() . '/js/script.js', array(), '1.0.0','all');

  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');


  // font


  wp_enqueue_style('mplus-general', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array(), '');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
}

add_action('wp_enqueue_scripts', 'hamburger_script');

function widgetarea_init()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'side-widget',
    'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
  ));
}
add_action('widgets_init', 'widgetarea_init');

//タイトル出力
function wpbeg_title($title)
{
  if (is_front_page() && is_home()) { //トップページなら
    $title = get_bloginfo('name', 'display');
  } elseif (is_singular()) { //シングルページなら
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'wpbeg_title');

register_nav_menus(array('global_nav' => esc_html__('p-global-nav', 'Hamburger'), 'sub_nav' => esc_html__('p-global-nav__list', 'Hamburger'),));
add_theme_support('post-thumbnails');

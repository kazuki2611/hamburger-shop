<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="Sass/styles.scss">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
  <link rel="stylesheet" type="text/css"
 href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
<link rel="stylesheet" type="text/css"
 href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/script.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

   -->

  <!-- <title>ハンバーガーサイト</title> -->
  <?php wp_head(); ?>
</head>
<body>
  <div class="p-wrapper">
    <div class="p-grid">

   

    <header class="l-header">
      <div class="l-header__left">
        <h1 class="c-title u-color">
          <!-- Hamburger -->  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
         
        </h1>
      </div>
      <div class="l-header__right">
      <?php get_search_form(); ?>
      </header>
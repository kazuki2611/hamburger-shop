<div class="l-sidebar">
<!-- <nav class="p-global-nav">
        <ul class="p-global-nav__list u-padding">
          バーガー
          <div class="p-global-nav__wrap">

            <li class="c-global-nav__item u-padding2" ><a href="">ハンバーガー</a></li>
            <li class="c-global-nav__item"><a href="">チーズバーガー</a></li>
            <li class="c-global-nav__item"><a href="">テリヤキバーガー</a></li>
            <li class="c-global-nav__item"><a href="">アボカドバーガー</a></li>
            <li class="c-global-nav__item"><a href="">フィッシュバーガー</a></li>
            <li class="c-global-nav__item"><a href="">ベーコンバーガー</a></li>
            <li class="c-global-nav__item"><a href="">チキンバーガー</a></li>
          </div>
        </ul>
        <ul class="p-global-nav__list">
          サイド
          <div class="p-global-nav__wrap">

            <li class="c-global-nav__item u-padding2"><a href="">ポテト</a></li>
            <li class="c-global-nav__item"><a href="">サラダ</a></li>
            <li class="c-global-nav__item"><a href="">ナッゲット</a></li>
            <li class="c-global-nav__item"><a href="">コーン</a></li>
            
          </div>
        </ul>
        <ul class="p-global-nav__list">
          ドリンク
          <div class="p-global-nav__wrap">

            <li class="c-global-nav__item u-padding2"><a href="">コーラ</a></li>
            <li class="c-global-nav__item"><a href="">ファンタ</a></li>
            <li class="c-global-nav__item"><a href="">オレンジ</a></li>
            <li class="c-global-nav__item"><a href="">アップル</a></li>
            <li class="c-global-nav__item"><a href="">紅茶（Ice／Hot）</a></li>
            <li class="c-global-nav__item"><a href="">コーヒー（Ice／Hot）</a></li>
            
          </div>
        </ul>
      </nav> -->
<?php
                    wp_nav_menu(
                        array(
                        'theme_location'=>'category_nav',
                        'menu' => 'ハンバーガー',
                        'menu_class' => 'p-global-nav p-global-nav__list p-global-nav__wrap c-global-nav__item u-padding',
                        'container' => 'p-global-nav__list',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                      )
                    );
                    ?>
    <button class="p-hamburger  is-hamburger">
      <span></span>
    </button>
    <button class="p-hamburger_button">Menu</button>
   
  <div class="black-bg" id="js-black-bg"></div>


  </div>
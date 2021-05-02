<?php get_header(); ?>
        <div class="l-main-archive">

          <div class="p-hero p-hero__archive">
            <div class="c-header__title2">
              <h1>
               Menu:
              </h1>
              <p>
                チーズバーガー
              </p>
    
            </div>
            
            
          </div>
          <div class="p-service__archive">
            <h2 class="c-service__archive__title">
              小見出しが入ります
            </h2>
            <p>
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
          </div>
          <div class="p-service-archive__menu">
            <div class="p-menu">
            
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">チーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button">詳しく見る</button>
              </div>
          
          
            </div>
            </div>
          
            <div class="p-menu">
    
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">ダブルチーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button" >詳しく見る</button>
              </div>
          
          
            </div>
            </div>
          
            <div class="p-menu">
          
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">スペシャルチーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button">詳しく見る</button>
              </div>
          
          
            </div>
            <?php
    if( have_posts() ) : //1.投稿データがあるかの条件分岐。
        while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
            the_post(); //3.ループ処理に必要なカウント処理等
            
           
            
        endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
    else : //6.投稿データがなければ
        ?><p>表示する記事がありません</p><?php //7.ない時の処理
    endif; ?> //8.条件分岐終了
?>
    
          
          <div class="p-page">
            
            <span class="p-page__pages">page 1/10</span>
            <a class="p-page__link" href="#">≪<span class="p-page-navi__pre">前へ</span></a>
            <a class="c-page-button"  href="#">1</a>
            <a class="c-page-button"  href="#">2</a>
            <a class="c-page-button"  href="#">3</a>
            <a class="c-page-button"  href="#">4</a>
            <a class="c-page-button"  href="#">5</a>
            <a class="c-page-button"  href="#">6</a>
            <a class="c-page-button"  href="#">7</a>
            <a class="c-page-button"  href="#">8</a>
            <a class="c-page-button u-margin" title="Page 9" href="#">9</a>
            <a class="p-page__link" href="#"><span class="p-page-navi__pre u-padding3">次へ</span>≫</a>
        </div>
          
  
        </div>
        </div>
        
    
        
      </div>
    </div>
    

   

    <?php get_sidebar(); ?> 
    <?php get_footer(); ?>
     
      
    
    
    
</body>
  
    
    
     
      
  
   

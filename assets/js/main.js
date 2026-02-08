'use strict'
{
    /*====================
    グローバルナビゲーション　表示/非表示
    =====================*/
    (function($){
        var pos = 0;
        var header = $('.header');
    
        $(window).on('scroll',function(){
            if($(this).scrollTop() < pos){
                header.removeClass('hide');
            }else{
                header.addClass('hide');
            }
            pos = $(this).scrollTop();
        });
    });


    /*====================
    ハンバーガーメニュー
    =====================*/
    (function($) {
    var nav   = $('.nav');
    var btn   = $('.toggle_btn');
    var navItem   = $('.menu-item a');
    var mask  = $('#mask');
    var open   = 'open'; // class
    // menu open close
    btn.add(navItem).on( 'click', function() {
        if ( ! nav.hasClass( open ) ) {
        nav.addClass( open );
        } else {
        nav.removeClass( open );
        }
    });
    // toggle_btn open close
    btn.add(navItem).on( 'click', function() {
        if ( ! btn.hasClass( open ) ) {
        btn.addClass( open );
        } else {
        btn.removeClass( open );
        }
    });
    // mask open
    btn.add(navItem).on( 'click', function() {
        if ( ! mask.hasClass( open ) ) {
        mask.addClass( open );
        } else {
        mask.removeClass( open );
        }
    });
    // mask close
    mask.on('click', function() {
        nav.removeClass( open );
    });
    } )(jQuery);


    /*====================
    スクロールイベント
    ====================*/
    const showElements = () => {
    //フェードインする要素を全て取得
    const elements = document.querySelectorAll(".works__item");
    //ブラウザの高さの80%を計算
    const displayPos = window.innerHeight * 0.9;
    
    elements.forEach((element) => {
        //ブラウザの上から要素の上までの距離
        const elementPos = element.getBoundingClientRect().top;
    　　//要素がブラウザの下から10%の位置よりも上に到達したら実行する
        if(displayPos > elementPos) {
        //要素に「show」クラスを追加
        element.classList.add("fadeIn");
        }
    });
    };

    window.addEventListener("load", showElements);
    window.addEventListener("scroll", showElements);
    


}
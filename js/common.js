jQuery(function(){
    jQuery('.slider').slick({
        autoplay:true,
        autoplaySpeed:3000,
        dots:true,
        centerMode: true,
        centerPadding: '700px',
        responsive:[
            {
                breakpoint: 896,
                settings:{
                    centerMode:false,
                    centerPadding:'0px',
                    slidesToShow:1,
                }
            }
        ]
    });
});


jQuery(function(){
    jQuery('a[href^="#"]').click(function(){
      var speed = 500;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - 50;
      jQuery("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });



//   facebook 埋め込み：レスポンシブ対応
if (jQuery('.fb-page').length) {

    // iframeリロードの[ON/OFF]を切り替えるウィンドウサイズ。
    var reloadWidth = 896;

    jQuery(function(){
        // まずウインドウの横幅を変数に入れる
        var timer = false;
        var winWidth = jQuery(window).width();
        var winWidth_resized;
    
        // ウインドウのリサイズイベントに処理をバインド
        jQuery(window).on("resize", function(){
            // リサイズ後の放置時間が指定ミリ秒以下なら何もしない(リサイズ中に何度も処理が行われるのを防ぐ)
            if (timer !== false) {
                clearTimeout(timer);
            }
            // 放置時間が指定ミリ秒以上なので処理を実行
            timer = setTimeout(function() {
            // リサイズ後のウインドウの横幅を取得
            winWidth_resized = jQuery(window).width();
    
            // リサイズ前のウインドウ幅とリサイズ後のウインドウ幅が異なる場合
            if ( winWidth != winWidth_resized ) {

            var windowWidth = parseInt(jQuery(window).width());
            if(windowWidth >= reloadWidth) {
                // 画面サイズ大のとき
                //location.reload();
            } else {
                // 画面サイズ小のとき
                location.reload();
            }
            console.log("ウインドウ横幅のリサイズ");
            console.log("現在の横幅: ", winWidth);
            console.log("リサイズ後の横幅: ", winWidth_resized);
    
            // 次回以降使えるようにリサイズ後の幅をウインドウ幅に設定する
            winWidth = jQuery(window).width();
                }
            }, 200);
        });
    });
}




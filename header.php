<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<meta property="og:url" content="http://womanmoney-expo.com/" />
<meta property="og:site_name" content="WOMAN MONEY EXPO 2020（ウーマンマネーエキスポ）" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/ogp_facebook.jpg" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
<link href="<?php bloginfo('template_directory'); ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/js/slick.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/android-chrome-256x256.png">
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>

<?php wp_head(); ?>
<script>
var windowWidth = $(window).width();
var windowSm = 640;
if (windowWidth <= windowSm) {
	//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
	$(function() {
		$(".menu_button").on("click", function() {
			$(".nav_inner").slideToggle();
		});
	});
} else {
    //横幅640px超のとき（タブレット、PC）に行う処理を書く
}
</script>

</head>
<body <?php body_class(); ?>>
<div id="top"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v4.0&appId=415590758518893&autoLogAppEvents=1"></script>
<header>
  <div class="header-inner clearfix">
    <div class="headinfo clearfix">
      <a class="logo" href="<?php echo home_url(); ?>"><img src="http://womanmoney-expo.com/wp/wp-content/uploads/2020/01/logo.jpg" alt="womanmoneyexpo" class="header_logo" style="margin-top:8px;"></a>
      <img class="data" src="<?php bloginfo('template_directory'); ?>/img/date.png" alt="2019.10.20[SUN]11:00 - 17:30">
    </div>
    <div class="headbutton"><a href="" target="_blank">お申し込みはこちら</a><div class="backDrop -header"></div><span class="banner__preparation">準備中</span></div>
  </div>
  <div class="nav">
    <div class="menu_button">
			<div>
				<span></span>
				<p>メニュー</p>
			</div>
		</div>
    <div class="nav_inner">
      <li><a href="<?php echo home_url(); ?>/about">開催概要</a></li>
      <li><a href="<?php echo home_url(); ?>/category/speakers">登壇者情報</a></li>
      <li><a href="<?php echo home_url(); ?>/schedule">講演スケジュール</a></li>
      <li><a href="<?php echo home_url(); ?>/booth">展示ブース</a></li>
      <li><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
      <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
    </div>
  </div>
</header>

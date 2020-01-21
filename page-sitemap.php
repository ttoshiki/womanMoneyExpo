<?php get_header(); ?>
<div class="container_wrapper">
  <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/sitemap_udrttl.png" alt="サイトマップ"></div>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <div class="sitemap">
          <a href="<?php echo home_url(); ?>">トップページ</a>
          <a href="<?php echo home_url(); ?>/about">開催概要</a>
          <a href="<?php echo home_url(); ?>/category/speakers">登壇者情報</a>
          <a href="<?php echo home_url(); ?>/schedule">講演スケジュール</a>
          <a href="<?php echo home_url(); ?>/booth">展示ブース</a>
          <a href="<?php echo home_url(); ?>/faq">FAQ</a>
          <a href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
          <a href="<?php echo home_url(); ?>/privacy">プライバシーポリシー</a>
          <a href="<?php echo home_url(); ?>/sitemap">サイトマップ</a>
          <a href="<?php echo home_url(); ?>/company">運営会社</a>
          <a href="<?php echo home_url(); ?>/exhibit">出展のご案内</a>  
      </div>      
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

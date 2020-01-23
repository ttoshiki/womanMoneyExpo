<?php get_header(); ?>
<div class="container_wrapper">
  <!-- <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/contact_udrttl.png" alt=""></div>
  </div> -->
  <div class="about__pageHeader">
    <h1 class="pageHeaderHeading">Contact<span class="pageHeaderJp">お問い合わせ</span></h1>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <div class="contact mb80">
        <h3><img src="<?php bloginfo('template_directory'); ?>/img/contact_ttl.png" alt=""></h3>
      <?php echo do_shortcode('[mwform_formkey key="852"]'); ?>
      </div>
      <div class="contact_houdou">
          <h3>報道関係者様</h3>
        メディア等の取材に関しては、以下までご連絡ください。<br>
        <br>
			  WOMAN MONEY EXPO 広報事務局<br>
        担当：<a href="mailto:info@smartbe8.com" target="_blank">info@smartbe8.com</a>	  
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

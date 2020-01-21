<?php get_header(); ?>
<div class="container_wrapper">
  <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/contact_udrttl.png" alt=""></div>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <div class="contact">
        <h3><img src="<?php bloginfo('template_directory'); ?>/img/contact_ttl.png" alt=""></h3>
      <?php echo do_shortcode('[mwform_formkey key="852"]'); ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

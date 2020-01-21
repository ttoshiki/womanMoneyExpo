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
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '486440015036599');
  fbq('track', 'PageView');
  fbq('track', 'Contact');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=486440015036599&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php get_footer(); ?>

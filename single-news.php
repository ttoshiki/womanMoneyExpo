<?php get_header(); ?>
<div class="container_wrapper">
  <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/news_udrttl.png" alt=""></div>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <div class="news">
        <?php $loop = new WP_Query(array("post_type" => "news"));
        while(have_posts()):the_post(); ?>
        <div class="news_one">
          <h4 class="news_title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
          <div class="news_date"><p><?php echo get_the_date('Y.m.d'); ?></p></div>
          <div class="news_subtxt"><p><?php the_content(); ?></p></div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="backtotop"><a href="<?php echo home_url(); ?>">TOPに戻る</a></div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

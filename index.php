<?php get_header(); ?>
<div class="slider_wrapper">
  <ul class="slider">

<!-- トップスライダー -->

 <li><a href="https://smartbeauty-expo.com/speakers/uno-kanda/"><img src="<?php bloginfo('template_directory'); ?>/img/slider4.png" alt="神田うのさん登壇決定！"></a>
 <li><a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/slider1.png" alt="image01"></a></li>
<li><a href="<?php echo home_url(); ?>/category/speakers"><img src="<?php bloginfo('template_directory'); ?>/img/slider2.png" alt="image02"></a></li>
 <li><a href="<?php echo home_url(); ?>/about"><img src="<?php bloginfo('template_directory'); ?>/img/slider3.png" alt="image03"></a></li>



  </li>
  </ul>
</div>
<div class="container_wrapper">
  <div class="container clearfix">
    <div class="contents">
      <div class="news">
      <h3><img src="<?php bloginfo('template_directory'); ?>/img/news_ttl.png" alt=""></h3>
        <?php $loop = new WP_Query(array("post_type" => "news", "posts_per_page" => 10 ));
        while ($loop->have_posts()): $loop->the_post(); ?>
        <div class="news_all">
          <h4 class="news_title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h4>
          <div class="news_subtxt"><p><?php echo mb_substr(strip_tags($post-> post_content), 0, 100) . '...'; ?></p></div>
          <div class="news_date"><p><?php echo get_the_date('Y.m.d'); ?></p></div>
          <a href="<?php the_permalink(); ?>" class="newslink">詳しくはこちら</a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

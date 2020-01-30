<?php get_header(); ?>
<?php
    $cat = get_the_category();
    $cat = $cat[0];
?>
<div class="container_wrapper container_each_<?php echo $cat->category_nicename; ?>">
  <!-- <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img
        src="<?php bloginfo('template_directory'); ?>/img/<?php echo $cat->category_nicename; ?>_udrttl.png"
        alt="<?php echo $cat->category_nicename; ?>"></div>
  </div> -->
  <?php
    $term_id = get_queried_object_id();
    $term = get_term_by('id', $term_id, 'category');
  ?>
  <div class="about__pageHeader">
    <h1 class="pageHeaderHeading"><?php echo ucfirst($term->slug) ?><span class="pageHeaderJp"><?php echo single_term_title(); ?></span></h1>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <?php
      if ($term->slug === 'booth') {
          ?>
      <h1 class="comingSoon">Coming Soon</h1>
      <?php
      } else {?>
      <div class="archive_info info_<?php echo $cat->category_nicename; ?>">
        <p>お金の各分野の第一線で活躍中のスペシャリストをお招きして、最新情報をお届けいたします。</p>
        <h1 class="comingSoon">Coming Soon</h1>
        <!-- <p>美容、ダイエット、女性のお悩み、多岐にわたる分野の第一線で活躍する女性たちをお招きし最新の情報をお届けします。</p> -->
        <!-- <div class="info_link">
          <a href="" class="info_linkbtn">会場マップ</a>
          <a href="" class="info_linkbtn">タイムスケジュール</a>
        </div> -->
        <div class="archive_theme">
          <!-- <h3><img src="<?php bloginfo('template_directory'); ?>/img/theme_ttl.png" alt=""></h3> -->
        </div>
        <!-- <div class="archive_beauty">
          <a href="<?php echo home_url(); ?>/speakers/jitsuko-okada/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty01.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/ayako-kakiuchi/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty02.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/sayaka-konishi/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty03.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/chabi/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty04.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/mayumi-muroya/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty05.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/kayoko-asai/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty06.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/akiko-yamamoto/"><img src="<?php bloginfo('template_directory'); ?>/img/beauty07.png"></a>
        </div>
        <div class="archive_diet">
          <a href="<?php echo home_url(); ?>/speakers/homi-takasugi/"><img src="<?php bloginfo('template_directory'); ?>/img/diet01.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/matty/"><img src="<?php bloginfo('template_directory'); ?>/img/diet02.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/mako/"><img src="<?php bloginfo('template_directory'); ?>/img/diet03.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/yumiko-murata/"><img src="<?php bloginfo('template_directory'); ?>/img/diet04.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/tomoko-banba/"><img src="<?php bloginfo('template_directory'); ?>/img/diet05.png"></a>
        </div>
        <div class="archive_trouble">
          <a href="<?php echo home_url(); ?>/speakers/kankoro/"><img src="<?php bloginfo('template_directory'); ?>/img/trouble04.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/ruriko-tsushima/"><img src="<?php bloginfo('template_directory'); ?>/img/trouble05.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/naoko-komuro/"><img src="<?php bloginfo('template_directory'); ?>/img/trouble06.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/suiren/"><img src="<?php bloginfo('template_directory'); ?>/img/trouble07.png"></a>
          <a href="<?php echo home_url(); ?>/speakers/mayu-fuchigami/"><img src="<?php bloginfo('template_directory'); ?>/img/trouble08.png"></a>
        </div> -->

        <!-- </div> -->
        <div class="archive_title">
          <!-- <h3><img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $cat->category_nicename; ?>_ttl.png" alt=""></h3> -->
        </div>
        <!-- <p class="archive_mainsubtitle info_<?php echo $cat->category_nicename; ?>">講演は今、女性が最も気になる17の旬のテーマでお送りします。<br>
    各セッションの写真やタイトルをクリックすると、詳しい内容をご確認いただけます。講演は事前申込制ですので、お席の確保をご希望の方は<a href="https://ex-pa.jp/item/14406/s38069" target="_blank">こちら</a>よりお申し込みください。</p>
    <p class="info_<?php echo $cat->category_nicename; ?>"><font size=2>※予告なしに登壇者が変更する可能性もございます。</font></p>
    <div class="archive_banner_img01 info_<?php echo $cat->category_nicename; ?>">
      <a href="<?php echo home_url(); ?>/speakers/uno-kanda/">
        <img src="<?php bloginfo('template_directory'); ?>/img/slider4.png"/>
      </a> -->
      </div>
      <?php } ?>



      <div class="archive_tag tag_<?php echo $cat->category_nicename; ?>">
        <!-- <?php
          // パラメータを指定
          $args = array(
            // タグ名順で指定
              'orderby' => 'name',
              // 昇順で指定
              'order' => 'ASC'
          );
          $posttags = get_tags($args);

          if ($posttags) {
              echo ' <ul class="tag-list"> ';
              foreach ($posttags as $tag) {
                  echo '<li><a href="'. get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
              }
              echo ' </ul> ';
          }
        ?> -->
      </div>
      <div class="archive_all">
        <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="article">
                <?php if (has_post_thumbnail()): ?>
                  <a class="article_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>"/>
                  </a>
                <?php endif; ?>
              <h2 class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="article_subtitle"><?php the_subtitle(); ?></p>
              <div class="article_sentence"><p><?php echo mb_substr(strip_tags($post-> post_content), 0, 50) . '...'; ?></p></div>
              <div class="article_tag"><?php the_tags('', ''); ?></div>
          </div>
          <?php endwhile; else: ?>
            <div>記事がありませんでした。</div>
          <?php endif; ?> -->
      </div>
      <!-- <div class="archive_pager">
              <div><?php previous_posts_link('前のページ'); ?></div>
              <div><?php next_posts_link('次のページ'); ?></div>
          </div> -->
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
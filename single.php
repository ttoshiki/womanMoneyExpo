<?php get_header(); ?>
<?php 
	$cat = get_the_category();
	$cat = $cat[0];
?>
<div class="container_wrapper container_eachone_<?php echo $cat->category_nicename; ?>">
  <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $cat->category_nicename; ?>_udrttl.png" alt=""></div>
  </div>
  <div class="container clearfix">
    <div class="contents">
      <div class="single">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="single_udrmain clearfix">
          <div class="single_udrmainleft">
            <h2 class="single_title"><?php the_title(); ?></h2>
            <p class="single_subtitle"><?php the_subtitle(); ?></p>
          </div>
          <div class="single_udrmainright">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>"/>
            <?php endif; ?>
          </div>
        </div>
          <div class="single_sentence mb20_<?php echo $cat->category_nicename; ?>"><p><?php the_content(); ?></p></div>
          <div class="single_tag tag_<?php echo $cat->category_nicename; ?>">
            <span>タグ</span><?php the_tags( '', '' ); ?>
          </div>
        <?php endwhile; endif; ?>
        <div class="single_udrnav">
          <?php previous_post_link('%link','前へ'); ?>
          <a href="<?php echo home_url(); ?>/category/<?php echo $cat->category_nicename; ?>">一覧に戻る</a>
          <?php next_post_link('%link','次へ'); ?>
        </div>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

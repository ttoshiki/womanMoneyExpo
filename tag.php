<?php get_header(); ?>
<?php 
	$cat = get_the_category();
	$cat = $cat[0];
?>
<div class="container_wrapper">
  <div class="udr_ttlimg">
    <div class="udr_ttlimg_inner"><img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $cat->category_nicename; ?>_udrttl.png" alt="<?php echo $cat->category_nicename; ?>"></div>
  </div>
  <div class="container clearfix">
    <div class="contents">
    <div class="archive_title">
      <h3><img src="<?php bloginfo('template_directory'); ?>/img/<?php echo $cat->category_nicename; ?>_ttl.png" alt=""></h3>
    </div>
      <div class="archive_tag tag_<?php echo $cat->category_nicename; ?>">
        <?php
          // パラメータを指定
          $args = array(
            // タグ名順で指定
              'orderby' => 'name',
              // 昇順で指定
              'order' => 'ASC'
          );
          $posttags = get_tags( $args );

          if ( $posttags ){
            echo ' <ul class="tag-list"> ';
            foreach( $posttags as $tag ) {
              echo '<li><a href="'. get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li>';
            }
            echo ' </ul> ';
          }
        ?>
        </div>
        <h4 class="tag_title">タグ：<?php single_cat_title(); ?></h4>
      <div class="archive_all">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="article">
                <?php if(has_post_thumbnail()): ?>
                  <a class="article_thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>"/>
                  </a>
                <?php endif; ?>
              <p class="article_subtitle"><?php the_subtitle(); ?></p>
              <h2 class="article_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div class="article_sentence"><p><?php echo mb_substr(strip_tags($post-> post_content),0,50) . '...'; ?></p></div>
              <div class="article_tag"><?php the_tags( '', '' ); ?></div>
          </div>
          <?php endwhile; else: ?>
            <div>記事がありませんでした。</div>
          <?php endif; ?>
        </div>
          <div class="archive_pager">
              <div><?php previous_posts_link('前のページ'); ?></div>
              <div><?php next_posts_link('次のページ'); ?></div>
          </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>

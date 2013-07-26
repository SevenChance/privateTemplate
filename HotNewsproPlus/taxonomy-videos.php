<?php include('header_video.php'); ?>
<div id="images_content">
    <div id="images_featured">
<?php $posts = query_posts($query_string . '&orderby=date&showposts=16');?>
<?php while ( have_posts() ) : the_post(); ?>
        <div class="picGrid">
            <div class="picBox">
<?php if ( get_post_meta($post->ID, 'small', true) ) : ?>
<?php $image = get_post_meta($post->ID, 'small', true); ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/>
            </a>
<?php else: ?>
            <!-- 截图 -->
<?php 
    if ( has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
        echo '<a href="' . the_permalink() . '" rel="example4" title="' . the_title_attribute('echo=0') . '" >';
        the_post_thumbnail('hot');
        echo '</a>';
    }
?>
<?php endif; ?>
            <div class="zoom">
                <a href="<?php the_permalink()?>" title="<?php the_title() ?>"></a>
            </div>
        <dl>
           <dt><a href="<?php the_permalink(); ?>" rel="bookmark"><strong><?php the_title(); ?></strong></a></dt>
           <hr/>
           <dd><?php echo get_the_excerpt(); ?>...<a href="<?php the_permalink(); ?>" title="详细阅读-><?php the_title(); ?>">[详细阅读]</a></dd>
        </dl>
        </div>
        <div class="picTags">类别: <?php echo get_the_term_list($post->ID,  'videos', '', ', ', ''); ?>
            <?php echo get_the_term_list($post->ID,  'video_tags', '标签: ', ' ', ''); ?></div>
        <div class="picLinkBox">
            <span class="estorm_date">自<?php the_time('Y-m-d') ?></span>
            <span class="estorm_views">被围观<?php the_views();?>+</span>
            <span class="estorm_comm"><?php comments_popup_link( '抢沙发', '坐板凳', '% 条评论'); ?></span>
        </div>
        <div class="clear"></div>
        </div>
        <?php endwhile;?>
        <div class="clear"></div>
    </div>
    <div class="navigation"><?php previous_posts_link("上页"); ?> <?php if (function_exists('pagenavi')) { pagenavi(); } ?><?php next_posts_link("下页"); ?></div>
</div>
<script type="text/javascript">
    var $container = $('#images_featured');
    
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.picGrid'
      });
    });
</script>
<?php get_footer(); ?>
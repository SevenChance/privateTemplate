<?php include('header_img_s.php'); ?>
<?php include('includes/addclass.php'); ?>
<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <!-- menu -->
		<div id="map">
			<div class="browse">现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; <?php echo get_the_term_list($post->ID,  'gallery', '', ', ', ''); ?> &gt; 正文<!-- <?php the_title();?> --></div>
			<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
		</div>
		<!-- end: menu -->
        <div class="gallery_fix">
            <div id="estorm_gallery">
                <div class="estorm_gallery_bg">
                <h1><?php the_title(); ?></h1>
                <div id="estorm_gallery_show">
                    <div id="estorm_gallery_bigimg">
                        <img width="700" height="600"/>
                        <a href="javascript:void(0);" id="estorm_gallery_bigimg_prev">上一张</a>
                        <a href="javascript:void(0);" id="estorm_gallery_bigimg_next">下一张</a>
                    </div>
                    <div id="estorm_gallery_intro">
                        <?php the_excerpt(); ?>
                    </div>
                    <div id="estorm_gallery_tools">
                        <ul>
                            <li class="estorm_quk">快捷键支持：<small>←</small>(上一张)&nbsp;&nbsp;<small>→</small>(下一张)</li>
                            <li id="estorm_gallery_auto"><a href="javascript:void(0);">自动播放</a></li>
                            <li class="estorm_comm"><?php comments_popup_link(); ?></li>
                            <!--<li><a href="#">分享</a></li>-->
                        </ul>
                    </div>
                    <div id="estorm_gallery_tools">
                        <!-- JiaThis Button BEGIN -->
                            <div id="ckepop" style="margin: 5px 0 5px 0;">
                                <span class="jiathis_txt">分享到：</span>
                                <a class="jiathis_button_qzone"></a>
                                <a class="jiathis_button_tsina"></a>
                                <a class="jiathis_button_tqq"></a>
                                <a class="jiathis_button_renren"></a>
                                <a class="jiathis_button_kaixin001"></a>
                                <a class="jiathis_button_douban"></a>
                                <a class="jiathis_button_t163"></a>
                                <a class="jiathis_button_tsohu"></a>
                                <a class="jiathis_button_xiaoyou"></a>
                                <a class="jiathis_button_51"></a>
                                <a class="jiathis_button_tianya"></a>
                                <a class="jiathis_button_googleplus"></a>
                                <a class="jiathis_button_tifeng"></a>
                                <a class="jiathis_button_diandian"></a>
                                <a class="jiathis_button_miliao"></a>
                                <a class="jiathis_button_fb"></a>
                                <a class="jiathis_button_twitter"></a>
                                <a class="jiathis_button_digg"></a>
                                <a class="jiathis_button_printfriendly"></a>
                                <a class="jiathis_button_fav"></a>
                                <a class="jiathis_button_copy"></a>
                                <a href="http://www.jiathis.com/share?uid=1544723" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                <a class="jiathis_counter_style"></a>
                            </div>
                            <script type="text/javascript">var jiathis_config = {data_track_clickback:true};</script>
                            <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1544723" charset="utf-8"></script>
                            <!-- JiaThis Button END -->
                    </div>
                    <div id="estorm_gallery_smallimg">
                        <div id="estorm_gallery_smallimg_list">
                            <ul>
                             <?php if ( get_post_meta($post->ID, 'small', true) ) : ?>
                             <?php $image = get_post_meta($post->ID, 'small', true); ?>
                                <li><img src="<?php echo $image?>" width="80" height="60"/></li>
                             <?php else: ?>
                             <?php 
                             if ( has_post_thumbnail()) {
                               $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                               echo '<li><img src="' . $large_image_url[0] . '" width="80" height="60"/></li>';
                             }
                             ?>
                             <?php endif; ?>
                             <?php the_content(); ?>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" id="estorm_gallery_smallimg_arrleft">上一屏</a>
                        <a href="javascript:void(0);" id="estorm_gallery_smallimg_arright">下一屏</a>
                        <div id="estorm_gallery_smallimg_scrollbar">
                            <div id="estorm_gallery_smallimg_flow">slide</div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- UJian Button BEGIN -->
            <div class="ujian-hook"></div>
            <script type="text/javascript">var ujian_config = {num:10};</script>
            <script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js?uid=1544723"></script>
            <!-- UJian Button END -->
            </div>
            </div>
		<div class="entry_sb">
			<i class="lb"></i>
			<i class="rb"></i>
		</div>
		<?php if (get_option('swt_adt') == '关闭') { ?>
        <?php { echo ''; } ?>
        <?php } else { include(TEMPLATEPATH . '/includes/adt.php'); } ?>
		<!-- end: entrymeta -->
	<div class="context_b">
		<?php previous_post_link('【上篇】%link') ?><br/><?php next_post_link('【下篇】%link') ?>
		<i class="lt"></i>
		<i class="rt"></i>
		<i class="lb"></i>
		<i class="rb"></i>
	</div>
	<div class="ct"></div>
	<a href="#response"></a>
	<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<!-- end: content -->
<?php get_sidebar('img'); ?>
<?php get_footer(); ?>
<?php include('header_video_s.php'); ?>
<?php include('includes/addclass.php'); ?>
<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <!-- menu -->
		<div id="map">
			<div class="browse">现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; <?php echo get_the_term_list($post->ID,  'videos', '', ', ', ''); ?> &gt; 正文<!-- <?php the_title();?> --></div>
			<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
		</div>
        <!-- end: menu -->
        <div class="entry_box_s">
            <div class="context">
                <div class="context_t">
                    <?php previous_post_link('%link', '上篇', TRUE); ?>
                    <?php next_post_link('%link', '下篇', TRUE); ?>
                </div>
            </div>
            <div class="entry_title_box">
                <div class="entry_title"><?php the_title(); ?></div>
                <div class="archive_info">
                    <span class="date"><?php the_time('Y年m月d日') ?></span>
                    <span class="category"> &#8260; <?php echo get_the_term_list($post->ID,  'videos', '', ', ', ''); ?></span>
                    <?php include('includes/source.php'); ?>
                    <span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论数 1', '评论数 %'); ?></span>
                    <?php if(function_exists('the_views')) { print ' &#8260; 被围观 '; the_views(); print '+';  } ?>
                    <span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
                </div>
            </div>
            <!-- end: entry_title_box -->
            <div class="entry">
                <div id="entry">
                    <?php if (get_option('swt_ad_r') == '关闭') { ?>
                    <?php { echo ''; } ?>
                    <?php } else { include(TEMPLATEPATH . '/includes/ad_r.php'); } ?>
                    <?php the_content('Read more...'); ?>
                    <?php $movie = get_post_meta($post->ID, 'movie', true); if ($movie) : ?>
                        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.movie.min.js"></script>
                        <hr/>
                        <div style="width:697px; height:auto; float:left; border: solid 1px #777777; display:inline-block; line-height: 2em; text-align: center;">
                            &nbsp;本片需要<a href="http://kuaibo.com">快播</a>的支持,如果您没有安装快播,请先<a href="http://dl.kuaibo.com/QvodSetup5.exe" target="_blank">点击下载快播</a>,安装之后刷新该页面观看影片.
                        </div>
                        <div id="movie" style="width:697px; height:500px; float: left; border:solid 1px #111111; ">
                        </div>
                        <script type="text/javascript">
                            $('#movie').moviePlay('<?php echo $movie ?>');
                        </script>
                    <?php endif; ?>
                    <?php wp_link_pages( array( 'before' => '<p class="pages">' . __( '日志分页:'), 'after' => '</p>' ) ); ?>
                    <div class="clear"></div>
                </div>
                <?php include('includes/download.php'); ?>
            </div>
            <div class="back_b">
                <a href="javascript:void(0);" onclick="history.back();">返回</a>
            </div>
            <div class="clear"></div>
            <!-- end: entry -->
            <i class="lt"></i>
            <i class="rt"></i>
        </div>
        <div class="entry_sb">
            <i class="lb"></i>
            <i class="rb"></i>
        </div>
        <!-- ad -->
        <?php if (get_option('swt_adt') == '关闭') { ?>
        <?php { echo ''; } ?>
        <?php } else { include(TEMPLATEPATH . '/includes/adt.php'); } ?>
    <div class="context_b">
        <?php previous_post_link('【上篇】%link') ?><br/><?php next_post_link('【下篇】%link') ?>
        <i class="lt"></i>
        <i class="rt"></i>
        <i class="lb"></i>
        <i class="rb"></i>
    </div>
    <!-- relatedposts -->
    <?php if (get_option('swt_related') == '关闭') { ?>
    <?php { echo ''; } ?>
    <?php } else { include(TEMPLATEPATH . '/includes/related_a.php'); } ?>
    <!-- end: relatedposts -->
    <div class="ct"></div>
    <a href="#response"></a>
    <?php comments_template(); ?>
    <?php endwhile; else: ?>
    <?php endif; ?>
</div>
<!-- end: content -->
<?php get_sidebar('img'); ?>
<?php get_footer(); ?>
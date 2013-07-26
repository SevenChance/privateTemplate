<?php
//添加属性
add_filter('the_content', 'pirobox_auto', 99);
add_filter('the_excerpt', 'pirobox_auto', 99);
function pirobox_auto($content) {
    global $post;
    $pattern = "/<p\><a(.*?)href=('|\")([A-Za-z0-9\/_\.\~\:-]*?)(\.bmp|\.gif|\.jpg|\.jpeg|\.png)('|\")([^\>]*?)>(.*)<\/a\><\/p\>/i";
    //$replacement = '<a$1href=$2$3$4$5$6 class="cboxElement" rel="example4"'.$post->ID.'">';
    if (get_post_type( $post ) == "picture") {
       $replacement = '<li><img$1src=$2$3$4$5$6 width="80" height="60" /></li>';
       $content = preg_replace($pattern, $replacement, $content);
    }
    return $content;
}
?>
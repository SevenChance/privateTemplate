<div id="roll_n">
	<div id="roll">
		<?php query_posts('showposts='.get_option('swt_roll_n').'&cat='.get_option('swt_roll'));?><?php while (have_posts()) : the_post(); ?>
		<ul>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读<?php the_title(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 40, '');?></a></li>
		</ul>
		<?php endwhile; ?>
 	</div>
	<i class="lt"></i>
	<i class="rt"></i>
	<i class="lb"></i>
	<i class="rb"></i>
 </div>
<script type="text/javascript">
var c,_=Function;
with(o=document.getElementById("roll")){ innerHTML+=innerHTML; onmouseover=_("c=1"); onmouseout=_("c=0");}
(F=_("if(#%26||!c)#++,#%=o.scrollHeight>>1;setTimeout(F,#%26?10:3500);".replace(/#/g,"o.scrollTop")))();
</script>
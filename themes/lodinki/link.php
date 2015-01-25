<?php
/*
Template Name: Link
*/
?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){
$(".flink a").each(function(e){
	$(this).prepend("<img src=http://www.google.com/s2/favicons?domain="+this.href.replace(/^(http:\/\/[^\/]+).*$/, '$1').replace( 'http://', '' )+" style=float:left;padding:5px;>");
}); 
});
</script>
<div class="article">
<div class="left">
<h2 class="page_title" style="font-size: 15px;font-weight: normal;color: #969696;">友情链接</h2>
<div class="flink"><ul>
<?php wp_list_bookmarks('orderby=id&category_orderby=id'); ?></ul>
</div>
<div class="clear"></div>
<div class="linkstandard">
<h2 class="page_title">链接须知</h2><ul>
<li>一、在您申请本站友情链接之前请先做好本站链接，然后在下面留言。</li>
<li>二、谢绝任何以利益为目的的友情链接，小站很小，不会给你带来什么利益。</li>
<li>三、本站友链要求一年以上的IT类、唯美类博客，其他的恕不通过（如果你的站很有特色，我会考虑）。</li>
<li>四、本站暂不受理Baidu和Google没有收录的站点。</li>
<li>五、要求大部分内容原创、用心做站，完全以盈利为目的，采集类或其他没有实质内容的站点恕不受理。</li>
</ul>
</div>

</div>
</div>

<div class="articles">
<h2 class="page_title" style="font-size: 15px;font-weight: normal;color: #969696;">温情留言板</h2>
<?php comments_template(); ?>
</div>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
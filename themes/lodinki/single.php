<?php get_header(); ?>
<div id="content">
<div class="main">

<div class="post-top-ad">
<script type="text/javascript">/*336*280，创建于2012-8-3*/ var cpro_id = 'u1009503';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
<span></span>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="left">
<div class="post_date">
<span class="date_d"><?php the_time('d') ?></span>
<span class="date_ym"><?php the_time('Y') ?>.<?php echo date('m',get_the_time('U'));?></span>
</div>
<div class="articles">
<div class="post-title-single">
<h2><?php the_title(); ?></h2></div>
<div class="infosingle">
<div id="singleinfo">
<span class="info-user-icon">作者：<?php the_author() ?></span>
<span class="info-category-icon"><?php the_category(', ') ?></span>
<span class="info-view-icon">超过<?php if(function_exists(the_views)) { the_views(' 次', true);}?>围观</span>
<span class="info-comment-icon"><?php comments_popup_link ('0条评论','1条评论','%条评论'); ?></span></div>
<!-- Baidu Button BEGIN -->
    <div id="baidushare"><div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://www.8090st.com/2/wp-content/themes/weisaysimple/images/sharebutton.jpg" />
		<a class="shareCount"></a>
	</div>
<script type="text/javascript" id="bdshare_js" data="type=button&amp;mini=1&amp;uid=131350" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script></div>
<!-- Baidu Button END -->
</div>

        <div class="context">
        <?php if (get_option('swt_adb') == 'Display') { ?><div style="float:right;border:1px #ccc solid;padding:2px;overflow:hidden;margin:12px 0 1px 2px;"><?php echo stripslashes(get_option('swt_adbcode')); ?></div><?php { echo ''; } ?><?php } else { } ?><?php the_content('Read more...'); ?></div>
        <?php if (get_option('swt_adc') == 'Display') { ?><p style="text-align:center;"><?php echo stripslashes(get_option('swt_adccode')); ?></p><?php { echo ''; } ?><?php } else { } ?>
</div>
</div>

<div class="articles">
<div class="post-nav">
<div class="prev"><?php if (get_previous_post()) {previous_post_link('%link','<<·上一篇');} else {echo "<<·没有了";} ?></div>
<div id="wumiiLikeRecBtnDiv" class="wumii"></div>
<div class="next"><?php if (get_next_post()) {next_post_link('%link','下一篇·>>');}else {echo "没有了·>>";} ?></div>
</div>
</div>

<div class="articles">
<div class="post-author"><div class="avatar"><?php echo get_avatar( get_the_author_email(), '70' ); ?></div>
<div class="post-author-desc">
<a class="post-author-name" target="_blank" title="去看看他/她的专栏" href="#"><span><?php  echo the_author_meta( 'nickname' ); ?></span></a><br>
<div class="post-author-description"><?php  echo the_author_meta( 'description' ); ?></div>
<div class="post-author-links"><a rel="nofollow" target="_blank" href="#">查看Ta的专栏</a><?php if (get_the_author_meta('weibo_sina')!=""){ ?><?php echo "<a href='" . get_the_author_meta('weibo_sina') . "' target='_blank'> | 新浪微博</a>"; ?><?php } ?><?php if (get_the_author_meta('weibo_tx')!=""){ ?><?php echo "<a href='" . get_the_author_meta('weibo_tx') . "' target='_blank'> | 腾讯微博</a>"; ?><?php } ?><?php if (get_the_author_meta('renren')!=""){ ?><?php echo "<a href='" . get_the_author_meta('renren') . "' target='_blank'> | 人人</a>"; ?><?php } ?></div>
<div class="clear" style="clear both"></div>
<div class="post-author-title">关于本文小编</div>
</div>
</div>
</div>

<div class="articles">
<div id="singlead">
<div class="adleft">
<div class="ad-l">
<script type="text/javascript">BAIDU_CLB_fillSlot("430223");</script>
</div>
<span></span>
</div>
<div class="adright">
<div class="ad-r">
<script type="text/javascript">BAIDU_CLB_fillSlot("430224");</script>
</div>
<span></span>
</div>
</div>
</div>


<div class="articles">
<div class="section_title">
<span>相关文章</span>
</div>
</div>
<div class="articles">
<div id="wumiiDisplayDiv" class="wumiidisplay"></div>
</div>

<div class="articles">
<div class="section_title">
<span>为您推荐</span>
</div>
</div>
<div class="articles">
<?php include('includes/related.php'); ?>
<div class="nf-ad">
<!-- nuffnang -->
<script type="text/javascript">
nuffnang_bid = "84290eb38055ad34637441cd16a840f8";
document.write( "<div id='nuffnang_ss'></div>" );
(function() {	
var nn = document.createElement('script'); nn.type = 'text/javascript';    
nn.src = 'http://synad2.nuffnang.com.cn/ss2.js';    
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(nn, s.nextSibling);
})();
</script>
<!-- nuffnang-->
	</div>
<div class="clear"></div>
</div>

<div class="articles">
<div class="section_title">
<span>各种观点</span>
</div>
</div>
<div class="articles">
<?php comments_template(); ?>
</div>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
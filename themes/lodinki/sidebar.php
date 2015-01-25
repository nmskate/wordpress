<div id="sidebar">
<div class="sidebar-roll">
<div class="sidebar-img2">
<a href="http://mail.qq.com/cgi-bin/bookcol?colid=20335" target="_blank" title="订阅到QQ邮箱">
<img alt="订阅到QQ邮箱" width="264" src="http://www.8090st.com/wp-content/themes/Metrobeta/images/qqmail.png"></a></div>

<div class="sidebar-img3">
<a href="http://feed.8090st.com" target="_blank" title="通过RSS订阅本站">
<img alt="通过RSS订阅本站" width="264" src="http://www.8090st.com/wp-content/themes/Metrobeta/images/orderrss.png"></a></div>

</div>

<!--TAB选项卡-->
<li class="widget tab_box" id="tab_box_posts">
<ul class="tab_menu">
<li class="current">热门围观</li>
<li>最新文章</li>
<li>最新评论</li></ul>
<div class="tab_content">
<div class>
<ul class="tab_post_links">
<?php simple_get_most_viewed(); ?>
</ul>
</div>
<div class="hide">
<ul class="tab_post_links"><?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,37); ?></a></li><?php endforeach; ?>
</ul>
</div>

<div class="hide">
<div class="r_comment">
<ul>
		<?php
			global $wpdb;
			$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,comment_author_email, SUBSTRING(comment_content,1,16) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' ORDER BY comment_date_gmt DESC LIMIT 10";
			$comments = $wpdb->get_results($sql);
			$output = $pre_HTML;
			foreach ($comments as $comment) {$output .= "\n<li>".get_avatar(get_comment_author_email(), 32).strip_tags($comment->comment_author).":<br />" . " <a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"查看 " .$comment->post_title . "\">" . strip_tags($comment->com_excerpt)."</a></li>";}
			$output .= $post_HTML;
			$output = convert_smilies($output);
			echo $output;
		?> 
</ul></div>
</div>
</li>

<!--
<div id="sidebar-roll-2">
<li class="widget tab_box">
<div class="widget-ad">
<script type="text/javascript">var cpro_id = 'u1009251';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
<span></span>
</div>
</li></div>
-->

<!--读者和留言-->

<li class="widget tab_box">
<ul class="tab_menu">
<li class="current">发现精彩</li>
<li>标签云集</li>
<li>更多精彩</li></ul>
<div class="tab_content">
<div class>
<ul class="tab_post_links"><?php $myposts = get_posts('numberposts=7&orderby=rand');foreach($myposts as $post) :?>
<li><a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,37); ?></a></li><?php endforeach; ?>
</ul>
</div>

<div class="hide" style="margin-bottom:5px"><div class="tags">
<ul>
	<?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=50&orderby=count&order=RAND');?>		
</ul></div><div style="clear:both"></div>
</div>

<div class="hide">
<ul class="tab_post_links">
<li><a href="http://www.8090st.com?random" target="_blank" title="点我随机推荐一篇文章">点我试试手气</a></li>
<li><a href="http://mail.qq.com/cgi-bin/bookcol?colid=20335" target="_blank" title="通过QQ订阅本站">订阅到QQ邮箱</a></li>
<li><a href="http://feed.8090st.com" target="_blank" title="通过RSS订阅本站">通过RSS订阅</a></li>
<li><a href="http://www.8090st.com/?page_id=5" target="_blank" title="去留言板吐槽一番吧">温情留言板</a></li>
</ul><div style="clear:both"></div>
</div>
</li>


<div id="rollstart"></div>


<!--边栏end-->

</div>
</div>
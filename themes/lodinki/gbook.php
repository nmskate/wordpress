<?php
/*
Template Name: Guestbook
*/
?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="left">
<div class="article">

<div class="linkstandard">
<h2 class="page_title">小站和小站长</h2><ul>
<li>1.8090st是一个以互联网新鲜资讯为核心，兼有生活情感、唯美杂谈、摄影、图片、音乐灯光内容的互联网</li>
<li>  资讯博客，旨在与您分享生活中、互联网中的唯美文字，图片，音乐，创意，新鲜事！</li>
<li>2.站长是一位狂热的互联网和前端技术爱好者，同时喜欢设计，热爱生活。现在是一名IT民工，表面冷漠的</li>
<li>  挨踢男，其实内心略显文艺和犯二，同时很热情。看上去很懒，其实是个完美主义者和好强的人。看似成</li>
<li>  熟，其实有时候很幼稚，很傻。</li>
</ul>
</div>

<h2 class="page_title" style="font-size: 15px;font-weight: normal;color: #969696;">尽情吐槽吧</h2>
<div class="clear"></div>
<p class="articles_all">非常欢迎大家灌水和吐槽，有什么想法和问题可以和我们沟通！我习惯了寂寞，并不代表我不渴望快乐！只要是留言或者评论都有机会上我我们的读者墙和首页的热心读者墙，欢迎大家积极踊跃的留言和交流，有什么问题，意见和建议也可以在这里提。希望能为大家打造一个自由轻松的交流环境！</p>

<?php if (get_option('swt_type') == 'Display') { ?>
<div class="v_comment"><ul>
<?php
$counts = $wpdb->get_results("SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 3 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 56");
foreach ($counts as $count) {
$a = get_bloginfo('wpurl') . '/avatar/' . md5(strtolower($count->comment_author_email)) . '.jpg';
$c_url = $count->comment_author_url;
$mostactive .= '<li class="mostactive">' . '<a href="'. $c_url . '" title="' . $count->comment_author . ' (留下'. $count->cnt . '个脚印)" target="_blank" rel="external nofollow"><img src="' . $a . '" alt="' . $count->comment_author . ' (留下'. $count->cnt . '个脚印)" class="avatar" /></a></li>';
}
echo $mostactive;
?></ul>
</div>
    <?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/gbook2.php'); } ?>
<div class="clear"></div>
</div></div>

<div class="articles">
<h2 class="page_title" style="font-size: 15px;font-weight: normal;color: #969696;">温情留言板</h2>
<?php comments_template(); ?>
</div>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php/*Template Name: avatar*/?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="left">
<div class="article">
<div class="linkstandard">
<h2 class="page_title">教你玩转Gravatar全球通用头像</h2><ul>
<div class="context"><?php the_content('Read more...'); ?></div>
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
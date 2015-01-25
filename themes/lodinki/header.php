<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php include('includes/seo.php'); ?>
<?php if (get_option('swt_alt_stylesheet')==''):?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<?php endif;?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="http://www.8090st.com/favicon.ico" type="image/x-icon" />
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<?php if ( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/realgravatar.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hoveraccordion.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/metrobeta.js"></script>
<script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
<?php include('includes/lazyload.php'); ?>
</head>

<body>
<div id="page">
<script type="text/javascript">
if(screen.width>1030){document.getElementsByTagName('body')[0].className = "widescreen";}
</script>
<div id="container" style="overflow-x: visible; overflow-y: visible; ">
<div id="header">
<div id="logo">
<h1>
<a title="返回 8090st.com 首页" href="http://www.8090st.com">8090st.com</a>
</h1>
</div>
</div>
<div id="nav">
<ul class="nav-ul">
<li class="current_page_item">
<a id="nav_home" href="http://www.8090st.com">首页</a>
</li>
<li><?php
if(function_exists('wp_nav_menu')) {
    wp_nav_menu(array('theme_location'=>'primary','menu_id'=>'nav','container'=>'ul'));
}
?></li>
</ul>
<a class="nav-rand" title="点我吧，点我吧！我能随机给你找一篇好看的文章！" target="_blank" rel="nofollow" href="http://www.8090st.com?random">随机</a>
<div class="search">	
<div class="search_site addapted" style="overflow: hidden; width: 260px; ">	
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="submit" value id="searchsubmit" class="button">
				<input type="text" id="s" name="s" value="">
			</form>
		</div></div>
<div class="clear"></div>
<div id="map"><div class="position">
当前位置：<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
 ><?php
if( is_single() ){
$categorys = get_the_category();
$category = $categorys[0];
echo( get_category_parents($category->term_id,true,' >') );echo $s.' 查看文章';
} elseif ( is_page() ){
the_title();
} elseif ( is_category() ){
single_cat_title();
} elseif ( is_tag() ){
single_tag_title();
} elseif ( is_day() ){
the_time('Y年Fj日');
} elseif ( is_month() ){
the_time('Y年F');
} elseif ( is_year() ){
the_time('Y年');
} elseif ( is_search() ){
echo $s.' 的搜索结果';
}
?>
</div>
<div class="baiduad">
<script type="text/javascript">/*468*15，创建于2012-8-3*/ var cpro_id = 'u1009348';</script><script src="http://cpro.baidu.com/cpro/ui/c.js" type="text/javascript"></script>
</div>
</div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.dropdownlink').hover(function() {
            $('submenu tab_box', this).slideDown(300)
        },
        function() {
            $('submenu tab_box', this).slideUp(300)
        });
    });
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    if (!isie6()) {
        var rollStart = $('#rollstart'),
        rollSet = $('.sidebar-roll,#sidebar-roll-2');
        rollStart.before('<div class="sidebar_rollbox"></div>');
        var offset = rollStart.offset(),
        objWindow = $(window),
        rollBox = rollStart.prev();
        if (objWindow.width() > 960) {
            objWindow.scroll(function() {
                if (objWindow.scrollTop() > offset.top) {
                    if (rollBox.html(null)) {
                        rollSet.clone().prependTo('.sidebar_rollbox')
                    }
                    rollBox.show().stop().animate({
                        top: 0,
                        paddingTop: 15
                    },
                    400)
                } else {
                    rollBox.hide().stop().animate({
                        top: 0
                    },
                    400)
                }
            })
        }
    }
    function isie6() {
        if ($.browser.msie) {
            if ($.browser.version == "6.0") return true;
        }
        return false;
    }
});
</script>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div id="footer-body">
<a id="footer-logo" rel="nofollow" href="http://www.8090st.com"></a>
<div id="footer-content">
Copyright <?php echo comicpress_copyright(); ?> <?php bloginfo('name'); ?>. Powered by <a href="http://www.wordpress.org/" rel="external">WordPress</a>.
 <?php if (get_option('swt_beian') == 'Display') { ?>
<a href="http://www.miitbeian.gov.cn/" rel="external"><?php echo stripslashes(get_option('swt_beianhao')); ?></a>
<?php { echo '.'; } ?><?php } else { } ?> <?php if (get_option('swt_tj') == 'Display') { ?><?php echo stripslashes(get_option('swt_tjcode')); ?><?php { echo '.'; } ?>	<?php } else { } ?>
</div>
<!-- 返回顶部 -->
<div style="display: none;" id="gotop"></div>
<script type='text/javascript'>
	backTop=function (btnId){
		var btn=document.getElementById(btnId);
		var d=document.documentElement;
		var b=document.body;
		window.onscroll=set;
		btn.onclick=function (){
			btn.style.display="none";
			window.onscroll=null;
			this.timer=setInterval(function(){
				d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
			},10);
		};
		function set(){btn.style.display=(d.scrollTop+b.scrollTop>100)?'block':"none"}
	};
	backTop('gotop');
</script>
<!-- 返回顶部END -->
</div>
<?php wp_footer(); ?>

</body>
</html>
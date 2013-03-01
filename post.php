<?php $this->need('header.php'); ?>
<section id="content">
	<article class="post">
		<div class="info">
			<?php $this->views(); //$this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?>℃
		</div>
		<div class="date">
			<span class="day"><?php $this->date('d'); ?></span>
			<span class="time"><?php $this->date('M'); ?></span>
			<span class="year"><?php $this->date('Y'); ?></span>
		</div>
		<header>
			<h2><?php $this->title() ?></h2>
		</header>
		<div class="con">
			<?php $this->content(''); ?>
		</div>
	</article>
<div class="entry_meta">
<ul>
<div class="lblue"><b>声明:</b>&nbsp;本文采用&nbsp;<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh_TW" rel="nofollow" title="署名-非商业性使用-相同方式共享">BY-NC-SA</a>&nbsp;协议进行授权
<br />转载请注明转自<a href="http://ben-lab.com">Ben's Lab</a>，原文地址《<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>》
</div>
				<p><span class="float_l"><?php _e('标签'); ?>: <?php $this->tags(', ', true, 'none'); ?></span>
<span class="float_r"><?php _e('分类'); ?>: <?php $this->category(','); ?></span></p><br /><br />
	<div class="share2">
		<ul class="drop-menu">
		<li class="title">分享到：</li>
<!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <a class="bds_qzone"></a>
        <a class="bds_tsina"></a>
        <a class="bds_tqq"></a>
        <a class="bds_renren"></a>
        <a class="bds_kaixin001"></a>
        <a class="bds_tqf"></a>
        <a class="bds_douban"></a>
        <a class="bds_tsohu"></a>
        <a class="bds_taobao"></a>
        <a class="bds_sohu"></a>
        <a class="bds_t163"></a>
        <a class="bds_tfh"></a>
        <a class="bds_hx"></a>
        <a class="bds_ff"></a>
        <a class="bds_xg"></a>
        <a class="bds_ty"></a>
        <a class="bds_hi"></a>
        <a class="bds_msn"></a>
        <a class="bds_deli"></a>
        <a class="bds_s51"></a>
        <a class="bds_fbook"></a>
        <a class="bds_copy"></a>
        <span class="bds_more"></span>
		<a class="shareCount"></a>
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=190950" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	//在这里定义bds_config
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
		</li>
		</ul>
	</div><!--end share-->
<span class="float_l"  id="pre_post" style="color: rgb(65, 60, 54); font-family: 'Century Gothic', 'Trebuchet MS', 'Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma, Helvetica, Arial, 'SimSun', sans-serif; line-height: 21px; "><a class="shangxia">上一篇： </a><?php $this->thePrev(); ?></span>
<span class="float_r" id="next_post" style="color: rgb(65, 60, 54); font-family: 'Century Gothic', 'Trebuchet MS', 'Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma, Helvetica, Arial, 'SimSun', sans-serif; line-height: 21px; "><a class="shangxia">下一篇： </a><?php $this->theNext(); ?>
</span>
<br /><br />
	<div class="postunder">
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<aside class="sidebar">
	<?php $this->need('sidebar.php'); ?>
</aside>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>
<?php $this->need('header.php'); ?>
	<section id="content">
		<article class="post">
			<div class="date">
				<span class="day">!!!</span>
				<span class="time">404</span>
				<span class="year">EROR</span>
			</div>
			<header>
				<h2>请求的页面未能找到</h2>
			</header>
			<div class="con">
<article id="nopage"><article>
				<p>欢迎您的到来. 您会到达这个页面证明您刚刚点击了失效的链接. 当然, 也可能是我们搞错了... 但与其向您展示一个混乱的, 没有任何说明的 404 出错页面, 我们创建这个页面可以向您解释究竟出了些什么错.</p>
				<p>您现在可以 (a) 点击浏览器上的 "返回" 按钮并尝试通过其他方式进入我们的页面, 或者 (b) 点击右边的链接转跳到网站的其它页面.</p>
				<p>Welcome to this customized error page. You've reached this page because you've clicked on a link that does not exist. This is probably our fault... but instead of showing you the basic '404 Error' page that is confusing and doesn't really explain anything, we've created this page to explain what went wrong.</p>
				<p>You can either (a) click on the 'back' button in your browser and try to navigate through our site in a different direction, or (b) click on the link on the right side to go to visit another post.</p>
			</div>
		</article>
	</section>
	<aside class="sidebar">
		<div class="sidebar-fixed">
			<div class="block">
				<h3><?php _e('最新文章'); ?></h3> 
				<ul>
				<?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul> 
			</div> 
			<div class="clear"></div> 
		</div>
	</aside>
	<div class="clear"></div>
<?php $this->need('footer.php'); ?>
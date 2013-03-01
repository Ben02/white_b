<?php $this->need('header.php'); ?>
    	<div id="content">
			<?php if ($this->have()): ?>
        	<?php while($this->next()): ?>
            <div class="post">
				<div class="info">
					<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a>
				</div>
				<div class="date">
						<span class="day"><?php $this->date('d'); ?></span>
						<span class="time"><?php $this->date('M'); ?></span>
						<span class="year"><?php $this->date('Y'); ?></span>
				</div>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				<div class="con">
<?php Thumbnail_Plugin::show($this); ?>
					<?php //$this->content('阅读剩余部分...'); ?><?php $this->excerpt(180, '...');//200就是摘要的字数 ?>
				</div>
			</div>
			 <?php endwhile; ?>
			 <?php else: ?>
			 <div class="post">
				<div class="date">
						<span class="day">!!!</span>
						<span class="time">?</span>
						<span class="year">EROR</span>
				</div>
				<h2>没有搜索到与“<?php $this->archiveTitle(' &lt; ','',''); ?>”相关的内容</h2>
				<div class="con">
					请更换关键词重新搜索
				</div>
			</div>
			<?php endif; ?>
			<div class="post"><?php $this->pageNav('上一页','下一页',10,'...');?></div>
		</div>
		 <div class="sidebar">
			<div class="block">
			<h3><?php _e('最新文章'); ?></h3> 
				<ul>
				<?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
			</ul> 
			</div>
			<div class="block block-s">
			<h3><?php _e('搜索全站'); ?></h3> 
				<form action="/search" class="head-search" method="get">
				<input id="search-input" type="text" name="s" class="inputbox" value="" />
				</form>
			</div>
			<div class="clear"></div> 
		</div>
		<div class="clear"></div>
	<?php $this->need('footer.php'); ?>
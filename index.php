<?php
/**
 * 简单清爽的HTML5模板。双栏、简洁、蓝白、清新。Ben修改版
 * 
 * @package white_p
 * @author cho
 * @version 2.0.2
 * @link http://pagecho.com
 */
 
 $this->need('header.php');
 ?>
<section id="content">
	<?php while($this->next()): ?>
		<article class="post">
			<div class="info">
				<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a>
			</div>
			<div class="date">
				<span class="day"><?php $this->date('d'); ?></span>
				<span class="time"><?php $this->date('M'); ?></span>
				<span class="year"><?php $this->date('Y'); ?></span>
			</div>
			<header>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			</header>
			<div class="con">
<?php Thumbnail_Plugin::show($this); ?>
				<?php $this->excerpt(180, '...');//180就是摘要的字数 ?>
				
			</div>
		</article>
		<?php endwhile; ?>	
		<div class="post">
			<?php $this->pageNav('上一页','下一页',10,'...');?>
		</div>
</section>
<aside class="sidebar">
	<?php $this->need('sidebar.php'); ?>
</aside>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>
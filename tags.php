<?php
    /**
    * 标签
    *
    * @package custom
    */
?><?php $this->need('header.php'); ?>
<section id="content">
	<article class="post">
		<header>
			<h2><?php $this->title() ?></h2>
		</header>
		<div class="con">
		<h3>文章</h3>
			<?php $this->content(''); ?>
					<style>
		.size-8{font-size:10pt;} 
        .size-18{font-size:12pt;} 
        .size-28{font-size:14pt;} 
        .size-35{font-size:15pt;} 
		</style>
		<div class="jBox" style="margin-bottom:10px;">
<div class="jBoxH"><h3><?php _e('标签'); ?></h3></div>
<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
<?php if($tags->have()): ?>
    <?php while ($tags->next()): ?>
   <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink(); ?>" class="size-<?php $tags->split(8, 18, 28, 35); ?>"title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
    <?php endwhile; ?>
<?php endif; ?>
		</div>
	</article>
	<div class="postunder">
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<aside class="sidebar">
	<?php $this->need('sidebar.php'); ?>
</aside>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>
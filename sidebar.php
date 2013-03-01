<div class="sidebar-fixed">
<?php if ($this->is('post')): ?>
	<?php $this->related(5)->to($relatedPosts); ?>
		<?php if ($this->related(5)->have()): ?>
			<div class="block">
				<h3><?php _e('相关文章'); ?></h3> 
					<ul>
						<?php while ($relatedPosts->next()): ?>
						<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
						<?php endwhile; ?>	
					</ul>
			</div>
		<?php else: ?>
				<div class="block">
					<h3><?php _e('最新文章'); ?></h3> 
					<ul>
						<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					</ul> 
				</div>
		<?php endif; ?>
<?php else: ?>
	<div class="block">
		<h3><?php _e('最近回复'); ?></h3> 
		<ul>
			<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><?php $comments->author(false); ?> : <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(50, '...'); ?></a></li>
            <?php endwhile; ?>
		</ul> 
	</div>
<?php endif; ?>
<div class="clear"></div>
	<div class="block bicolumn block-s"><h3><?php _e('文章分类'); ?></h3> 
			<ul> 
				<?php $this->widget('Widget_Metas_Category_List')
                ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
			</ul> 
	</div>
<div class="clear"></div>
<?php if ($this->is('index')): ?>
<div class="block links bicolumn"><h3><?php _e('友情链接'); ?><span class="float_r"><a href="/links/" target="_blank" title="点此查看全部">more</a></span></h3> 
	<ul> 
 <?php Links_Plugin::output(); ?> 
</ul></div>
<?php endif; ?>
<?php if ($this->is('post')): ?>
		<?php endif; ?>
<div class="block" style="margin-top:20px;">
	<form action="/search" class="head-search" method="get" >
		<input id="search-input" style="color:#333;font-family: 'Century Gothic', 'Trebuchet MS','Microsoft JhengHei',微软雅黑,'Microsoft Yahei',Tahoma, Helvetica, Arial, 'SimSun', sans-serif;" type="text" name="s" class="inputbox" value="输入搜索关键词回车..." onfocus="if (value =='输入搜索关键词回车...'){value =''}" onblur="if (value ==''){value='输入搜索关键词回车...'}" x-webkit-speech lang="zh-CN" />
	</form>
</div>
<div class="clear"></div> 
</div>
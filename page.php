<?php $this->need('header.php'); ?>
<section id="content">
	<article class="post">
		<header>
			<h2><?php $this->title() ?></h2>
		</header>
		<div class="con">
			<?php $this->content(''); ?>
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
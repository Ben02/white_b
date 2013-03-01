<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>"/>
<?php if ($this->is('post')): ?>
<link rel="canonical" href="<?php $this->permalink() ?>" />
<?php endif; ?>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">if (top.location != self.location){top.location=self.location;}</script>
<script language="javascript" src="<?php $this->options->themeUrl('base.js'); ?>"></script> 
<?php $this->header("generator=&template="); ?>
</head>
<body>
<div id="wrap">
	<div id="header">
		<header id="blog_title"> 
        	<h1><a title="Ben's Lab" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('images/logo.png'); ?>" /></a></h1>
        </header>
		<nav id="menu">
			<ul class="header-nav">
				<li <?php if($this->is('index')): ?> class="current"<?php endif; ?><?php if ($this->is('post')): ?>class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">博客</a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
				<?php endwhile; ?>
				<li><a href="<?php $this->options->siteUrl(); ?>feed/" class="menu-rss" target="_blank">订阅</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
    </div>
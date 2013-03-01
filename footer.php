<footer id="footer"> 
    <div class="foot">
		<div class="copy">Copyright &copy;  2012 <?php $this->options->title() ?> | Theme by <a href="http://pagecho.com" target="_blank">Cho</a> | Powered by <a href="http://typecho.org" target="_blank">Typecho</a></div>
	</div>
</footer>
</div>
<script type="text/javascript">
$(document).ready(function() {
$('h2 a').click(function(){
myloadoriginal = this.text;
$(this).text('请稍等，正在努力加载中...');
var myload = this;
setTimeout(function() { $(myload).text(myloadoriginal); }, 2011);
});
});
</script>
<div data-widget="backtop"><script src="<?php $this->options->themeUrl('backtop.js'); ?>" charset="utf-8"></script></div>
	</body>
</html>
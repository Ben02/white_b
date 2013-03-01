<?php function threadedComments($comments, $singleCommentOptions) {
    
	$commentClass = '';
	if ($comments->authorId) {
		if ($comments->authorId == $comments->ownerId) {
			$commentClass .= ' comment-by-author';
		} else {
			$commentClass .= ' comment-by-user';
		}
	} 
	
	$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>



<li id="<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
?>">
    <div class="comment-author">
		<?php $comments->gravatar($singleCommentOptions->avatarSize,"http://ww1.sinaimg.cn/large/67252e9ajw1dqn0haiinwj.jpg");?>  
	</div>
    <div class="comment-meta">
       <cite class="fn"><?php $singleCommentOptions->beforeAuthor();
                $comments->author();$singleCommentOptions->afterAuthor();  ?></cite>
				
				<a href="<?php $comments->permalink(); ?>"><?php $singleCommentOptions->beforeDate();
                $comments->date($singleCommentOptions->dateFormat);
                $singleCommentOptions->afterDate(); ?></a> <span class="comment-reply"><?php $comments->reply($singleCommentOptions->replyWord); ?></span>
    </div>
    <div class="comment-p">
		<?php $comments->content();?>
	</div>
	<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($singleCommentOptions);?>
    </div>
    <?php } ?>
</li>

<?php
}
?>



<div id="comments">
            <?php $this->comments()->to($comments); ?>
			<?php $this->commentsNum(_t(''), _t('<h4>仅有一条评论</h4>'), _t('<h4>已有 %d 条评论</h4>')); ?>
            <?php $comments->pageNav(); ?>
            <?php $comments->listComments(); ?>

			<div class="comment-box">
            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
			
            <div class="addcomment"></div>
			<h4 id="response"><?php _e('添加新评论'); ?></h4>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
				<div class="ie6show"></div>
				<div class="col2">
				<p><textarea name="text" tabindex="1" class="textarea"><?php $this->remember('text'); ?></textarea></p>
				</div>			
				<div class="col1">
				<?php if($this->user->hasLogin()): ?>
				<p>已经以 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> 的身份登录. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('[退出]'); ?></a></p>
                <?php else: ?>
				<p>
                    <label for="author"><?php _e('昵称'); ?></label>
					<input type="text" tabindex="2" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" />
				</p>
				<p>
                    <label for="mail"><?php _e('邮箱'); ?></label>
					<input type="text" tabindex="3" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>" />
				</p>
				<p>
                    <label for="url"><?php _e('网站'); ?></label>
					<input type="text" tabindex="4" name="url" id="url" class="text" value="<?php $this->remember('url'); ?>" />
				</p>
				<?php endif; ?>
				<p><input type="submit" tabindex="5" value="<?php _e('提交评论'); ?>" class="submit"/></p>		
				</div>
				<div class="clear"></div>
			</form>
            </div>
            <?php else: ?>
            <?php endif; ?>
			<div class="clear"></div>
			</div>
</div>

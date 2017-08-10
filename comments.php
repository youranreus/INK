<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">

        <div class="comment-main">
            <?php $comments->content(); ?>
            <div class="comment-meta">
<span class="comment-author"><?php $comments->author(); ?></span>
                <span class="comment-reply"><?php $comments->reply('讲道理'); ?></span>
            </div>
        </div>
    </div>

<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>

<div id="comments" class="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <span id="pl"><?php $this->commentsNum(_t('没有吐槽QAQ'), _t('只有一发吐槽吖'), _t(' %d 发吐槽啦')); ?></span>

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo;', '&raquo;'); ?>

    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>

        <span class="response"><?php _e('我要和博主讲道理'); ?></span>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('已登入: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
            <div>
                <input type="text" name="author" maxlength="12" id="author" class="text" placeholder="<?php _e('昵称 *'); ?>" value="<?php $this->remember('author'); ?>" required>

<input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('邮箱 *'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>

<input type="url" name="url" id="url" class="text" placeholder="<?php _e('网址'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
            </div>
            <?php endif; ?>
            <div>
                <textarea name="text" id="textarea" class="textarea" placeholder="<?php _e('评论的人最可爱~'); ?>" required ><?php $this->remember('text'); ?></textarea>
            </div>
            <div>
                <center><button type="submit" id="submit"><?php _e('走你'); ?></button></center>
            </div>
        </form>
    </div>
    <?php else: ?>
    <p>奏凯，这里不能评论</p>
    <?php endif; ?>
</div>

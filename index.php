<?php
/**
 * 简单到只剩下墨水
 *
 *
 * @package INK
 * @author YOURAN
 * @version 1.5
 * @link https://blog.mitsuha.space/
 */

 $this->need('header.php');
 ?>
	<?php while($this->next()): ?>
	<div class="box">
	<center>

	<div class="post-title">
		<p><a href="<?php $this->permalink() ?>#title"><?php $this->sticky(); ?>「<?php $this->title() ?>」</a></p>
	</div>
	<div class="meta">
		<span><?php echo formatTime($this->modified);?></span>
	</div>
	</center>
		 <center><a href="<?php $this->permalink() ?>#title" class="go">&nbsp阅读&nbsp</a></center>
	</div>
	<?php endwhile; ?>

	<p style="
	height:100px;line-height:100px;
    border-radius: .5em;font-size: 1.5em;
    text-align: center;"><?php $this->pageLink('<span id="left-navigator">上一页</span>','prev'); ?>
	<?php $this->pageLink('<span id="right-navigator">下一页</span>','next'); ?></p>
	<?php $this->need('footer.php'); ?>

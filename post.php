<?php $this->need('header.php'); ?>

	<div class="post">
	<?php $this->content(''); ?>
	<?php if(isset($this->fields->av)): ?>
	<embed height="415" width="544" quality="high" allowfullscreen="true" type="application/x-shockwave-flash" src="//static.hdslb.com/miniloader.swf" flashvars="aid=<?php echo $this->fields->av;?>&page=1" pluginspage="//www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
	<?php endif ?>
       </div>
	<center>
		<p class="over">-完-</p>
	</center>
	<div class="tag">
	<center>

<?php $this->author->gravatar('200'); ?>

<p style="color:#999;font-size:0.5em;">@<?php echo gmdate('Y-m-d H:i:s', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></p>

<?php $this->tags('  ', true, '臭博主忘了贴标签'); ?>

</center>
	</div>
	<div class="box">
	<?php include('comments.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>



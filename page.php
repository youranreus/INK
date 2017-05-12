<?php $this->need('header.php'); ?>
	<div class="post">
	     <?php $this->content(''); ?>
	</div>
	<div class="box">
	<?php include('comments.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>
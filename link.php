<?php
/**
* LINK
*
* @package custom
*/
?>
<?php $this -> need('header.php'); ?>
		<br>
		<br>
		<div class="friends">
    	<ul class="links">
		<?php Links_Plugin::output("SHOW_MIX"); ?>
	</ul>
</div>
<?php $this -> need('footer.php'); ?>

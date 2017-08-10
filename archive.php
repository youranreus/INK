<?php $this -> need('header.php'); ?>

        <?php if ($this->have()): ?>
    		<?php while($this->next()): ?>
          <center>
    		<div class="box">
			<center>
			<div class="post-title">
				<p><a href="<?php $this->permalink() ?>">「<?php $this->title() ?>」</a></p>
			</div>
			<div class="meta">
				<span><a><?php $this->author(); ?></a> | <?php $this->date('F j, Y'); ?> | <?php $this->category(','); ?></span>
			</div>
			</center>
				<center><a href="<?php $this->permalink() ?>" class="go">&nbsp阅读&nbsp</a></center>
			</div>
    </center>
    		<?php endwhile; ?>
    	</div>
        <?php else: ?>
        	<div class="a-item" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="title nf-title" itemprop="name headline"><?php _e('没有找到内容 (╯‵□′)╯︵┻━┻'); ?></h2>
    			<form method="post">
			        <p class="search"><input type="text" name="s" class="text" placeholder="关键字" autofocus /><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
			    </form>
    		</div>
        <?php endif; ?>

        <?php $this -> pageNav('上', ' 下'); ?>
    </div><!-- end #main -->
<?php $this -> need('footer.php'); ?>


<?php
/**
* ARCHIVE
*
* @package custom
*/
?>

<?php $this->need('header.php'); ?>
<div class="GD">
    <div class="fenlei">
      <h2>分类</h2>
      <div class="fenlei-list">
      <?php $this->widget('Widget_Metas_Category_List')
      ->parse('<p style="font-size:1.3em;">在<a style="color:black;" href="{permalink}">{name}</a>下有 {count} 篇文章</p>'); ?>
      </div>
    </div>

      <!--<div class="tags">
        <h2>标签云</h2>
        <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
        <?php while($tags->next()): ?>
            <a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
        <?php endwhile; ?>
    </div>-->

    <div class="timeline">
      <h2>时光鸡</h2>
      <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
	$year=0; $mon=0; $i=0; $j=0;
	$output = '<div id="archives">';
	while($archives->next()):
		$year_tmp = date('Y',$archives->created);
		$mon_tmp = date('m',$archives->created);
		$y=$year; $m=$mon;
    if ($year != $year_tmp) {
			$year = $year_tmp;
      $output .= '<p style="font-size:1.3em;">'. $year .' 年</p><ul>'; //输出月份
		}
		//if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
		if ($mon != $mon_tmp) {
			$mon = $mon_tmp;
			//$output .= '<li>'. $mon .' 月<ul>'; //输出月份
		}
		$output .= '<li><a href="'.$archives->permalink .'">「'. $mon.'-'.date('d」',$archives->created).''. $archives->title .'<em style="color:#FF706C;">'.$archives->commentsNum.'条评论</em></a> </li>'; //输出文章日期和标题
	endwhile;
	$output .= '</ul>';
	echo $output;
?>

  </div>
</div>
</div>
<?php $this->need('footer.php'); ?>

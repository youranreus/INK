
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
		if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
		if ($year != $year_tmp && $year > 0) $output .= '</ul>';
		if ($year != $year_tmp) {
			$year = $year_tmp;
			$output .= '<h3>'. $year .' 年</h3><ul>'; //输出年份
		}
		if ($mon != $mon_tmp) {
			$mon = $mon_tmp;
			$output .= '<li><span>'. $mon .' 月</span><ul>'; //输出月份
		}
		$output .= '<li class="list-item">'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> <em>('. $archives->commentsNum.')</em></li>'; //输出文章日期和标题
	endwhile;
	$output .= '</ul></li></ul></div>';
	echo $output;
?>

  </div>
</div>
<?php $this->need('footer.php'); ?>

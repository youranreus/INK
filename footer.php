
<?php $this->footer(); ?>
</div>
</div>
<script data-no-instant>InstantClick.init();</script>
	</body>
  <footer>
  <center>
    <p style="color:#666;font-size:0.8em;">©<?php $this->options->title(); ?> 2017</p>
    <p style="color:#666;font-size:0.8em;"><SPAN id=span_dt_dt></SPAN></p></center>
    <script>
    function show_date_time(){
      window.setTimeout("show_date_time()", 1000);
      BirthDay=new Date("8/8/2016 11:30:00");//这里设置时间
      today=new Date();
      timeold=(today.getTime()-BirthDay.getTime());
      sectimeold=timeold/1000
      secondsold=Math.floor(sectimeold);
      msPerDay=24*60*60*1000
      e_daysold=timeold/msPerDay
      daysold=Math.floor(e_daysold);
      e_hrsold=(e_daysold-daysold)*24;
      hrsold=Math.floor(e_hrsold);
      e_minsold=(e_hrsold-hrsold)*60;
      minsold=Math.floor((e_hrsold-hrsold)*60);
      seconds=Math.floor((e_minsold-minsold)*60);
      span_dt_dt.innerHTML="我被续了"+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";

    }
    show_date_time();
    </script>
		<script>
		//pjax 刷新
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
	container: '#container',
	fragment: '#container',
	timeout: 8000
})
		</script>
    <script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>

  </footer>

</html>

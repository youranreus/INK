//标题
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange', function() {
   	 if (document.hidden) {
     	   document.title = '别抛下我QAQ | ' + OriginTitile;
        clearTimeout(titleTime);
    }
    else {
        document.title = '诶嘿 | ' + OriginTitile;
        titleTime = setTimeout(function() {
            document.title = OriginTitile;
        }, 2000);
    }
});


//pjax 刷新
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
container: '#container',
fragment: '#container',
timeout: 8000
})

//计时
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

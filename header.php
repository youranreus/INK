<!DOCTYPE html>
<!--全局-->
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width"/>
<!--编码-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />--><!--自动选择去掉上面的注释-->
<!--网站标题-->
<title><?php $this->archiveTitle(' &raquo; ', '', ' | '); ?><?php $this->options->title(); ?></title>
<!-- css -->
<link href="<?php $this->options->themeUrl('css/i.css'); ?>" rel="stylesheet" />
<link href="<?php $this->options->themeUrl('css/prism.css'); ?>" rel="stylesheet" />
<!--<link href='http://fonts.googlefonts.net/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>-->
<!--<link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">-->
<!-- JS -->

<!--Favicon-->
<link rel="icon" type="image/png" href="https://blog.mitsuha.space/favicon.ico">
<!-- 输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<div class="m">
<header>
<div class="hd">
		<img src="https://ooo.0o0.ooo/2017/04/29/590469d795e8d.png" />
		<nav class="hd-n">
<a href="<?php $this->options->siteUrl(); ?>"
<?php if ($this->is('index')) : ?>
style="border-bottom:2px solid skyblue;
<?php endif; ?>
">首页</a>
&nbsp&nbsp&nbsp

<a href="/links.html"
<?php if ($this->is('page','links')) : ?>
style="border-bottom:2px solid skyblue;"
<?php endif; ?>
>友人帐</a>&nbsp&nbsp&nbsp

<a href="/about.html"

<?php if ($this->is('page','About')) : ?>
style="border-bottom:2px solid skyblue;"
<?php endif; ?>
>关于</a>&nbsp&nbsp&nbsp

<a href="/arch.html#title"
<?php if ($this->is('page','arch')) : ?>
style="border-bottom:2px solid skyblue;"
<?php endif; ?>
<?php if ($this->is('archive')) : ?>
style="border-bottom:2px solid skyblue;"
<?php endif; ?>
>归档</a>&nbsp&nbsp&nbsp

<?php if ($this->is('post')) : ?>
<a style="border-bottom:2px solid skyblue;">文章</a>
<?php endif; ?>


</nav>
</div>


<?php if ($this->is('post')) : ?>
<center>
<div id="title"class="title">
		<p>「<?php $this->title() ?>」</p>
	</div>

	<div class="meta">
		<span><a><?php $this->author(); ?></a> | <?php $this->category(','); ?>向 | <?php echo art_count($this->cid); ?>字</span>
	</div>
<?php endif; ?>

<?php if ($this->is('page')) : ?>
<center>
<div id="title"class="title">
		<p>「<?php $this->title() ?>」</p>
	</div>
	<div class="meta">
		<span><?php $this->author(); ?> | <?php $this->date('F j, Y'); ?></span>
	</div>
<?php endif; ?>

<?php if ($this->is('archive')) : ?>
<center>
<div class="title">
		<p id="title"><a href="<?php $this->options->siteUrl(); ?>"><?php $this -> archiveTitle(array('category' => _t('分类「%s」下的文章'), 'search' => _t('包含关键字「%s」的文章'), 'tag' => _t('标签 「%s」 下的文章'), 'author' => _t('「%s」 发布的文章')), '', ''); ?></a></p>
	</div>
</center>
<?php endif; ?>



</header>
<div id="container">

<!-- end #header -->

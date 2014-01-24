<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 08:37:10
         compiled from "D:\HP\www\QiHaizhi\SmartyTemplates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:27143524f840770b516-16344248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8273d1b9e0f47e22cb6e2c387e756c1f1366375' => 
    array (
      0 => 'D:\\HP\\www\\QiHaizhi\\SmartyTemplates\\index.html',
      1 => 1381048627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27143524f840770b516-16344248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524f84078717f8_20217145',
  'variables' => 
  array (
    'title' => 0,
    'homePageLink' => 0,
    'homePageText' => 0,
    'selfIntroLink' => 0,
    'selfIntroText' => 0,
    'footprint' => 0,
    'fp1Link' => 0,
    'fp1' => 0,
    'fp2Link' => 0,
    'fp2' => 0,
    'fp3Link' => 0,
    'fp3' => 0,
    'fp4Link' => 0,
    'fp4' => 0,
    'fp5Link' => 0,
    'fp5' => 0,
    'fp51Link' => 0,
    'fp51' => 0,
    'fp52Link' => 0,
    'fp52' => 0,
    'fp6Link' => 0,
    'fp6' => 0,
    'awardsLink' => 0,
    'awardsText' => 0,
    'projectsLink' => 0,
    'projectsText' => 0,
    'interestsLink' => 0,
    'interestsText' => 0,
    'dreamLink' => 0,
    'dreamText' => 0,
    'contactLink' => 0,
    'contactText' => 0,
    'keyword' => 0,
    'search' => 0,
    'newsLink' => 0,
    'notesLink' => 0,
    'webInfoLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524f84078717f8_20217145')) {function content_524f84078717f8_20217145($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="../jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$("#college").mouseover(function(){
		$("#college-stages").toggle();
	});
	$("#college-stages").mouseout(function(){
		$("#college-stages").toggle();
	});
	$("#btn_zh").click(function(){
		window.location.href = "index.php";
	});
	$("#btn_en").click(function(){
		window.location.href = "index.php?lan=en";
	});
	$("#btn_jp").click(function(){
		window.location.href = "index.php?lan=jp";
	});
});
</script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<style type="text/css">
.right-caret {
    border-bottom: 5px solid transparent;
    border-top: 5px solid transparent;
    border-left: 5px solid #000000;
    float:right;
}
.rightMenu {
    position:absolute;
	float:right;
	top: 0;
	left: 160px;
}
.news{
	width:15%;
}
.notes{
	width:60%;
}
.webInfo{
	width:15%;
}
.frames{
	border:1 solid #ffffff;
	height:1000px;
}
</style>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
	</div>
	<div class="navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['homePageLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['homePageText']->value;?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['selfIntroLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['selfIntroText']->value;?>
</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp1Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp1']->value;?>
(1989~1992)</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp2Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp2']->value;?>
(1992~1999)</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp3Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp3']->value;?>
(1999~2002)</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp4Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp4']->value;?>
(2002~2005)</a></li>
					<li class="dropdown">
						<a id="college" href="<?php echo $_smarty_tpl->tpl_vars['fp5Link']->value;?>
" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['fp5']->value;?>
(2005~2013)<b class="right-caret"></b>
						</a>
						<ul class="dropdown-menu rightMenu" id="college-stages">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp51Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp51']->value;?>
(2005~2009)</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp52Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp52']->value;?>
(2009~2013)</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['fp6Link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fp6']->value;?>
</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['awardsLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['awardsText']->value;?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['projectsLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['projectsText']->value;?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['interestsLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['interestsText']->value;?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['dreamLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dreamText']->value;?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['contactLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contactText']->value;?>
</a></li>
		</ul>
		<form class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">
			</div>
			<button type="submit" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</button>
		</form>
		<div class="navbar-form navbar-right">
			<button type="button" class="btn btn-default" id="btn_zh">中文</button>
			<button type="button" class="btn btn-primary" id="btn_en">English</button>
			<button type="button" class="btn btn-success" id="btn_jp">日本語</button>
		</div>
	</div>
</nav>
<div class="text-center">
	<iframe class="news frames" src="<?php echo $_smarty_tpl->tpl_vars['newsLink']->value;?>
">
	
	</iframe>
	
	<iframe class="notes frames" src="<?php echo $_smarty_tpl->tpl_vars['notesLink']->value;?>
">
	
	</iframe>
	
	<iframe class="webInfo frames" src="<?php echo $_smarty_tpl->tpl_vars['webInfoLink']->value;?>
">
	
	</iframe>
</div>

<footer class="footer">
	<div class="container">
		<p>常用链接：</p>
		<p>
			<a href="http://www.233.com/ccbp/">银行从业考试</a> | 
			<a href="http://opencv.org/">OpenCV | </a>
			<a href="http://jlpt.etest.net.cn/index.do#">JLPT</a>
		</p>
	</div>
</footer>

</body>

</html><?php }} ?>
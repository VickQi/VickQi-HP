<?php
require_once 'SmartyConfig/SmartyConfig.php';
$newsPool=array();
$newsPool[]='test1';
$newsPool[]='test2';
$smarty->assign("newsPool",$newsPool);
$smarty->display("news.html");
?>
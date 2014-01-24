<?php
$lan = $_GET['lan'];
require_once 'SmartyConfig/SmartyConfig.php';
if($lan=="en"){
	$countryCode = "en";
	$counterInfo1 = "You are the";
	$counterInfo2 = "th vistor!";
}
elseif($lan=="jp"){
	$countryCode = "ja";
	$counterInfo1 = "あなたは第";
	$counterInfo2 = "番の訪問者！";
}
else{
	$countryCode = "zh-cn";
	$counterInfo1 = "您是第";
	$counterInfo2 = "位来访者！";
}
$smarty->assign("countryCode",$countryCode);
$smarty->assign("counterInfo1",$counterInfo1);
$smarty->assign("counterInfo2",$counterInfo2);
$smarty->display("webinfo.html");
?>
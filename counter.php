<?php
session_start();
require_once 'connect.php';
/*counter work*/
if(!isset($_SESSION['hasVisited'])){
	$_SESSION['hasVisited']="yes";
	$ip = GetIP();
	$sql = "INSERT INTO  `tfr586004`.`counter` (`id` , `ip` , `time`) VALUES (NULL ,  \"$ip\",  NOW())";
	mysql_query($sql);
}
$sql = "SELECT COUNT( * ) FROM  `counter`";//read current value of counter
$result = mysql_query($sql);
$count = mysql_fetch_row($result);
$count = $count[0];
$count = str_pad($count, 7, "0", STR_PAD_LEFT);
$chars = preg_split('//', $count);
$im = imagecreatefrompng("image/blank-wanted-poster.png");
$src1 = imagecreatefrompng("image/$chars[1].png");
$src2 = imagecreatefrompng("image/$chars[2].png");
$src3 = imagecreatefrompng("image/$chars[3].png");
$src4 = imagecreatefrompng("image/$chars[4].png");
$src5 = imagecreatefrompng("image/$chars[5].png");
$src6 = imagecreatefrompng("image/$chars[6].png");
$src7 = imagecreatefrompng("image/$chars[7].png");
imagecopymerge($im, $src1, 0, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src2, 60, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src3, 120, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src4, 180, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src5, 240, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src6, 300, 0, 0, 0, 56, 75, 100);
imagecopymerge($im, $src7, 360, 0, 0, 0, 56, 75, 100);
// Output and free from memory
header('Content-Type: image/png');
echo imagepng($im);
imagedestroy($im);

function GetIP(){
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
		$ip = $_SERVER['REMOTE_ADDR'];
	else
		$ip = "unknown";
	return($ip);
}
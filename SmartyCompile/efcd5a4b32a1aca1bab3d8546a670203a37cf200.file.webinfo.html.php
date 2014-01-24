<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 13:05:45
         compiled from "D:\HP\www\QiHaizhi\SmartyTemplates\webinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:48415250b4e0302d25-58162778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efcd5a4b32a1aca1bab3d8546a670203a37cf200' => 
    array (
      0 => 'D:\\HP\\www\\QiHaizhi\\SmartyTemplates\\webinfo.html',
      1 => 1381151142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48415250b4e0302d25-58162778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5250b4e0356232_90028310',
  'variables' => 
  array (
    'countryCode' => 0,
    'counterInfo1' => 0,
    'counterInfo2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250b4e0356232_90028310')) {function content_5250b4e0356232_90028310($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="../jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/moments.js"></script>
<script>
$(document).ready(showTime());
function showTime(){
	var timeObj = moment();
	timeObj.lang('<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
');
	$("#divTime").html(timeObj.format('LL a h:mm:ss'));
	setTimeout("showTime()", 500);
}
</script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<title>Web Info</title>
</head>
<body>
	<div id="divTime"></div>
	<div><?php echo $_smarty_tpl->tpl_vars['counterInfo1']->value;?>
<img src="../counter.php" width="100px"/><?php echo $_smarty_tpl->tpl_vars['counterInfo2']->value;?>
</div>
</body>
</html><?php }} ?>
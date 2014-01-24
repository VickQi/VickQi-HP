<?php /* Smarty version Smarty-3.1.14, created on 2014-01-24 04:06:36
         compiled from "D:\HP\SmartyTemplates\webinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1041552e1e6cca8af06-80105627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92272d7a2347ff6e1f51a7449cf4778a718bd5d1' => 
    array (
      0 => 'D:\\HP\\SmartyTemplates\\webinfo.html',
      1 => 1390534519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041552e1e6cca8af06-80105627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countryCode' => 0,
    'counterInfo1' => 0,
    'counterInfo2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e1e6ccc2b844_49920060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1e6ccc2b844_49920060')) {function content_52e1e6ccc2b844_49920060($_smarty_tpl) {?><!DOCTYPE html>
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
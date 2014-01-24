<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 15:18:54
         compiled from "D:\www\web\tfr586004_4A4w8qKLF\wwwroot\SmartyTemplates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:74545252b830bc11a1-92641521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7695b58890e5efa56f8ba3eae21386f60578fd0e' => 
    array (
      0 => 'D:\\www\\web\\tfr586004_4A4w8qKLF\\wwwroot\\SmartyTemplates\\news.html',
      1 => 1381159086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74545252b830bc11a1-92641521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5252b830c65a26_77615501',
  'variables' => 
  array (
    'newsPool' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252b830c65a26_77615501')) {function content_5252b830c65a26_77615501($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="../jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<title>News</title>
</head>
<body>
<marquee direction="up" scrollamount="2" onMouseOver="this.stop()" onMouseOut="this.start()">
<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsPool']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value){
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>
<a><?php echo $_smarty_tpl->tpl_vars['newsItem']->value;?>
</a><br>
<?php } ?>
</marquee>
</body>
</html><?php }} ?>
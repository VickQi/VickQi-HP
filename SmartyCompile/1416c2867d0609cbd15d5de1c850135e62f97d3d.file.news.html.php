<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 00:51:39
         compiled from "D:\HP\www\QiHaizhi\SmartyTemplates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:16023525026bab54745-22297230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1416c2867d0609cbd15d5de1c850135e62f97d3d' => 
    array (
      0 => 'D:\\HP\\www\\QiHaizhi\\SmartyTemplates\\news.html',
      1 => 1381020696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16023525026bab54745-22297230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525026babb0a23_46133657',
  'variables' => 
  array (
    'newsPool' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525026babb0a23_46133657')) {function content_525026babb0a23_46133657($_smarty_tpl) {?><!DOCTYPE html>
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
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-24 04:06:36
         compiled from "D:\HP\SmartyTemplates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:3099452e1e6cc540613-81304622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65429001bdab7a9c8b3794b7054eec0e42fd5e9c' => 
    array (
      0 => 'D:\\HP\\SmartyTemplates\\news.html',
      1 => 1390534521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099452e1e6cc540613-81304622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newsPool' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e1e6cc9a0261_75231225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1e6cc9a0261_75231225')) {function content_52e1e6cc9a0261_75231225($_smarty_tpl) {?><!DOCTYPE html>
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
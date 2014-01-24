<?php /* Smarty version Smarty-3.1.14, created on 2013-10-07 15:18:54
         compiled from "D:\www\web\tfr586004_4A4w8qKLF\wwwroot\SmartyTemplates\notes.html" */ ?>
<?php /*%%SmartyHeaderCode:163025252b830bdf6b1-60080483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb9b515cb1c731767399b869bab343fae2f18bb' => 
    array (
      0 => 'D:\\www\\web\\tfr586004_4A4w8qKLF\\wwwroot\\SmartyTemplates\\notes.html',
      1 => 1381159087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163025252b830bdf6b1-60080483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5252b830c89db1_38995494',
  'variables' => 
  array (
    'headerText' => 0,
    'notes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252b830c89db1_38995494')) {function content_5252b830c89db1_38995494($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</title>

<script src="../notes/js/jquery-1.4.0.min.js"></script>
<script src="../notes/js/jquery-1.7.2-ui.min.js"></script>
<script src="../notes/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script src="../notes/js/notes.js"></script>

<link rel="stylesheet" type="text/css" href="../notes/css/notes.css" />
<link rel="stylesheet" type="text/css" href="../notes/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
</head>

<body>
	<h1><?php echo $_smarty_tpl->tpl_vars['headerText']->value;?>
</h1>
	<div id="main">
		<?php echo $_smarty_tpl->tpl_vars['notes']->value;?>

	</div>
</body>
</html><?php }} ?>
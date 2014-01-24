<?php /* Smarty version Smarty-3.1.14, created on 2013-10-06 15:22:13
         compiled from "D:\HP\www\QiHaizhi\SmartyTemplates\notes.html" */ ?>
<?php /*%%SmartyHeaderCode:1001752514e9a58a673-66328484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab9357ab1aad10e0f467c7acb6615f5c3a360ca' => 
    array (
      0 => 'D:\\HP\\www\\QiHaizhi\\SmartyTemplates\\notes.html',
      1 => 1381072929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001752514e9a58a673-66328484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52514e9af25482_89485131',
  'variables' => 
  array (
    'headerText' => 0,
    'notes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52514e9af25482_89485131')) {function content_52514e9af25482_89485131($_smarty_tpl) {?><!DOCTYPE html>
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
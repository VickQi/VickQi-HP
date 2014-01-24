<?php /* Smarty version Smarty-3.1.14, created on 2014-01-24 04:06:58
         compiled from "D:\HP\SmartyTemplates\notes.html" */ ?>
<?php /*%%SmartyHeaderCode:1651452e1e6e2542424-34809569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '711d53d86ff59d3a828f272f9d2e7e3b7b61f063' => 
    array (
      0 => 'D:\\HP\\SmartyTemplates\\notes.html',
      1 => 1390534520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651452e1e6e2542424-34809569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerText' => 0,
    'notes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e1e6e267a639_69442037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1e6e267a639_69442037')) {function content_52e1e6e267a639_69442037($_smarty_tpl) {?><!DOCTYPE html>
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
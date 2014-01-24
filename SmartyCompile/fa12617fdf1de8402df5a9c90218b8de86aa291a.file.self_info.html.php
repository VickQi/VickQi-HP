<?php /* Smarty version Smarty-3.1.14, created on 2014-01-24 04:13:57
         compiled from "D:\HP\SmartyTemplates\self_info.html" */ ?>
<?php /*%%SmartyHeaderCode:1456352e1e885d16d43-35258518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa12617fdf1de8402df5a9c90218b8de86aa291a' => 
    array (
      0 => 'D:\\HP\\SmartyTemplates\\self_info.html',
      1 => 1390534519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456352e1e885d16d43-35258518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile' => 0,
    'sex' => 0,
    'height' => 0,
    'width' => 0,
    'age' => 0,
    'degree' => 0,
    'familySituation' => 0,
    'parentsExp' => 0,
    'myExp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e1e88601e559_34129024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e1e88601e559_34129024')) {function content_52e1e88601e559_34129024($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="../jquery-1.10.2.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<title>自我介绍</title>
</head>
<body>
<div class="container">
	<table class="table table-condensed table-hover">
		<thead><th>交友信息</th></thead>
		<th>基本信息</th>	
		<tbody>
			<tr><td>照片</td><td><image src=<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
></image></td></tr>
			<tr><td>性别</td><td><?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</td></tr>
			<tr><td>身高</td><td><?php echo $_smarty_tpl->tpl_vars['height']->value;?>
</td></tr>
			<tr><td>体重</td><td><?php echo $_smarty_tpl->tpl_vars['width']->value;?>
</td></tr>
			<tr><td>年龄</td><td><?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</td></tr>
			<tr><td>学历</td><td><?php echo $_smarty_tpl->tpl_vars['degree']->value;?>
</td></tr>
			<tr><td>家庭情况</td><td><?php echo $_smarty_tpl->tpl_vars['familySituation']->value;?>
</td></tr>		
		<th>爸妈期望</th>
			<tr><td colspan="2"><?php echo $_smarty_tpl->tpl_vars['parentsExp']->value;?>
</td></tr>
		<th>我的期望</th>
			<tr><td colspan="2"><?php echo $_smarty_tpl->tpl_vars['myExp']->value;?>
</td></tr>
		</tbody>
	</table>
</div>
</body>
</html><?php }} ?>
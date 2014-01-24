<?php
include 'Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$RootPath = $_SERVER['DOCUMENT_ROOT'];

$smarty->template_dir = $RootPath."/SmartyTemplates";
$smarty->compile_dir = $RootPath."/SmartyCompile";
$smarty->config_dir = $RootPath."/SmartyConfig";
$smarty->caching = false;

$smarty->left_delimiter = "{{";
$smarty->right_delimiter = "}}";
?>
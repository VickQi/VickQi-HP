<?php
require_once '../../connect.php';
$id = $_POST['id'];
mysql_query("DELETE FROM notes WHERE id=$id");
?>
<?php


/* Database config */

$db_host		= '223.4.216.56';
$db_user		= 'tfr586004';
$db_pass		= 'IqLnIuH7Gb';
$db_database	= 'tfr586004';

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>
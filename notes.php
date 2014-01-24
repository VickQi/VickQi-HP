<?php
$lan = $_GET['lan'];
require_once 'SmartyConfig/SmartyConfig.php';
// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
require 'connect.php';

$query = mysql_query("SELECT * FROM notes ORDER BY id DESC");

$notes = '';
$left='';
$top='';
$zindex='';
if($lan=="en"){
	$headerText = "Wall of Notes";
}
elseif($lan=="jp"){
	$headerText = "メモの壁";
}
else{
	$headerText = "便签墙";
}
while($row=mysql_fetch_assoc($query))
{
	// The xyz column holds the position and z-index in the form 200x100x10:
	list($left,$top,$zindex) = explode('x',$row['xyz']);

	$notes.= '
			<div id="note_'.$row['id'].'" class="note '.$row['color'].'" style="left:'.$left.'px;top:'.$top.'px;z-index:'.$zindex.'">
					'."<div style=\"text-align:right;font-size:10px\"></div>".htmlspecialchars($row['text']).'
							<div class="author">'.htmlspecialchars($row['name']).'</div>
									<span class="data">'.$row['id'].'</span>
											</div>';
}
$smarty->assign("headerText",$headerText);
$smarty->assign("notes",$notes);
$smarty->display("notes.html")
?>



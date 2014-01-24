<?
require_once 'SmartyConfig/SmartyConfig.php';
$smarty->assign("width","65公斤");
$smarty->assign("height","163厘米");
$smarty->assign("sex","男");
$age = getAge();
$smarty->assign("age","$age");
$smarty->assign("profile","../image/profile.jpg");
$smarty->assign("familySituation","工薪家庭，父母都是工人，母亲已退休。父亲喜欢聊天、炒股，母亲喜欢园艺。");
$smarty->assign("degree","本科：北邮-通信工程</br>研究生: 北邮-计算机应用");
$smarty->assign("parentsExp","年龄小于等于$age,善良、孝顺老人，尽快生娃。学历：本科以上。固定工作。");
$smarty->assign("myExp","性格开朗、外向，明事理、会做面儿，尊敬长辈。会做饭，爱整理，不懒得。
从小生活在城市，非单亲家庭，目前在北京上班，爱生活爱音乐，有点小资情结。
月收入能养活自己，不要求车房。生活不铺张不过于节约，月生活费在1000-3000之间。
接受经济相对独立。喜欢冒险，能接受一起出国。热爱小动物，尤其是狗。
能在婚后1~2年内生娃。");
$smarty->display("self_info.html");

function getAge(){
$birth='1986-2-27';
list($by,$bm,$bd)=explode('-',$birth);
$cm=date('n');
$cd=date('j');
$age=date('Y')-$by-1;
if ($cm>$bm || $cm==$bm && $cd>$bd) $age++;
return "$age";
}
?>
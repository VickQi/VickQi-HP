<?
require_once 'SmartyConfig/SmartyConfig.php';//load smarty config file
$lan = $_GET['lan'];//read language flag
/*process language flag*/
if(empty($lan)){
	$appendix = '';
	require_once 'language/zh.php';
}
else{
	$appendix = "?lan=$lan";
	if($lan=="en")
	{
		require_once 'language/en.php';
	}
	elseif($lan=="jp")
	{
		require_once 'language/jp.php';
	}
	else{
		die("UNKONW LANGUAGE!");
	}
}
$homePageLink = "index.php".$appendix;
$selfIntroLink = "self_info.php".$appendix;
$fp1Link="kindergarten.php".$appendix;
$fp2Link="primarySchool.php".$appendix;
$fp3Link="middleSchool.php".$appendix;
$fp4Link="highSchool.php".$appendix;
$fp5Link="university.php".$appendix;
$fp51Link="bachelor.php".$appendix;
$fp52Link="master.php".$appendix;
$fp6Link="work.php".$appendix;
$awardsLink="glory.php".$appendix;
$projectsLink="projects.php".$appendix;
$interestsLink="interests.php".$appendix;
$dreamLink="dream.php".$appendix;
$contactLink="contact.php".$appendix;
$newsLink = "news.php".$appendix;
$notesLink = "notes.php".$appendix;
$webInfoLink = "webInfo.php".$appendix;

$smarty->assign("title",$title);
$smarty->assign("homePageText",$homePageText);
$smarty->assign("homePageLink",$homePageLink);
$smarty->assign("selfIntroText",$selfIntroText);
$smarty->assign("selfIntroLink",$selfIntroLink);
$smarty->assign("footprint",$footprint);
$smarty->assign("fp1",$fp1);
$smarty->assign("fp2",$fp2);
$smarty->assign("fp3",$fp3);
$smarty->assign("fp4",$fp4);
$smarty->assign("fp5",$fp5);
$smarty->assign("fp51",$fp51);
$smarty->assign("fp52",$fp52);
$smarty->assign("fp6",$fp6);
$smarty->assign("fp1Link",$fp1Link);
$smarty->assign("fp2Link",$fp2Link);
$smarty->assign("fp3Link",$fp3Link);
$smarty->assign("fp4Link",$fp4Link);
$smarty->assign("fp5Link",$fp5Link);
$smarty->assign("fp51Link",$fp51Link);
$smarty->assign("fp52Link",$fp52Link);
$smarty->assign("fp6Link",$fp6Link);
$smarty->assign("awardsText",$awardsText);
$smarty->assign("awardsLink",$awardsLink);
$smarty->assign("projectsText",$projectsText);
$smarty->assign("projectsLink",$projectsLink);
$smarty->assign("interestsText",$interestsText);
$smarty->assign("interestsLink",$interestsLink);
$smarty->assign("dreamText",$dreamText);
$smarty->assign("dreamLink",$dreamLink);
$smarty->assign("contactText",$contactText);
$smarty->assign("contactLink",$contactLink);
$smarty->assign("keyword",$keyword);
$smarty->assign("search",$search);
$smarty->assign("newsLink",$newsLink);
$smarty->assign("notesLink",$notesLink);
$smarty->assign("webInfoLink",$webInfoLink);
$smarty->display("index.html");
?>
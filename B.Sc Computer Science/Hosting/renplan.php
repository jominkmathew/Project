<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$k1=$_GET['k'];
$smartyObj->assign("view1",$k1);

session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$obj->renewal();

$smartyObj->assign("view",$s);
$smartyObj->display("staffsubheader.tpl");
$smartyObj->display("renplans.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
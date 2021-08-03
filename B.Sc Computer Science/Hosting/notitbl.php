<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$va=$obj->notitbl();
$smartyObj->assign("view",$va);


$smartyObj->display("usersubheader.tpl");
$smartyObj->display("notitbl.tpl");
$smartyObj->display("userfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
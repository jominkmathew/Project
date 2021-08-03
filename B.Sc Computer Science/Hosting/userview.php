<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$obj->userview();
$smartyObj->assign("view",$s);
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("userview.tpl");
$smartyObj->display("userfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$obj->advertisetbl();
$smartyObj->assign("view",$s);
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("advertisetbl.tpl");
}
else
{	
	Header("location:login.php");
}
//$smartyObj->display("adminfooter.tpl");
?>
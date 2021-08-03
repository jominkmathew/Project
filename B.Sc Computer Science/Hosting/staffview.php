<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$b=$obj->staffview();
$smartyObj->assign("view",$b);
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("staffview.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$obj->domainview();
$smartyObj->assign("view",$s);
session_start();

$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("domainview.tpl");
}
else
{	
	Header("location:login.php");
}
//$smartyObj->display("adminfooter.tpl");
?>
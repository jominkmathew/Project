<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$m=$_COOKIE['loginkey'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$ac=$obj->sel31($m);
$smartyObj->assign("view1",$ac);

$smartyObj->display("usersubheader.tpl");
$smartyObj->display("rentbl.tpl");
$smartyObj->display("userfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$s1=$obj->sel24();
$smartyObj->assign("view2",$s1);
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$smartyObj->display("staffsubheader.tpl");
$smartyObj->display("customer2.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
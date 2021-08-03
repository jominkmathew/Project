<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$k=$_COOKIE['loginkey'];
$s=$obj->sel18($k);
$smartyObj->assign("view",$s);
$p=$obj->sumcart($k);
$smartyObj->assign("view1",$p);
$ppp=$obj->sel22($k);
$smartyObj->assign("view2",$ppp);

$smartyObj->display("viewcart.tpl");
}
else
{	
	Header("location:login.php");
}
?>
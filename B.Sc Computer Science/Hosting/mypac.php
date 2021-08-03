<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$d=$_GET['b'];
$k=$_COOKIE['loginkey'];

$s=$obj->sel27($k,$d);
$smartyObj->assign("view",$s);
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("mypac.tpl");
$smartyObj->display("userfooter.tpl");

?>
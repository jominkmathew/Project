<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$k=$_COOKIE['loginkey'];
$s=$obj->sel26($k);
$smartyObj->assign("view",$s);
$p=$obj->sel28($k);
$smartyObj->assign("view2",$p);

$smartyObj->display("usersubheader.tpl");
$smartyObj->display("myplan.tpl");
$smartyObj->display("userfooter.tpl");

?>
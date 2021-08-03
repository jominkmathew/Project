<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();



$s=$obj->sel29();
$smartyObj->assign("view",$s);
$p=$obj->sel30();
$smartyObj->assign("view2",$p);

$smartyObj->display("usersubheader.tpl");
$smartyObj->display("licence.tpl");
$smartyObj->display("footer.tpl");

?>
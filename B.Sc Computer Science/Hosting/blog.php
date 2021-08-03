<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

$s=$obj->sel7();
$smartyObj->assign("view",$s);
$smartyObj->display("blog.tpl");

?>
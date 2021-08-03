<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$v=$obj->adminfeedview();
$smartyObj->assign("view1",$v);
$b=$obj->admincompview();
$smartyObj->assign("view",$b);
$d=$obj->domsel();
$smartyObj->assign("view3",$d);
$p=$obj->packsel();
$smartyObj->assign("view4",$p);
$x=$obj->domsel1();
$smartyObj->assign("view5",$x);
$y=$obj->packsel1();
$smartyObj->assign("view6",$y);
$f=$obj->domcount();
$smartyObj->assign("view7",$f);
$s=$obj->pkgcount();
$smartyObj->assign("view8",$s);
$t=$obj->typecount();
$smartyObj->assign("view9",$t);
$o=$obj->feedcount();
$smartyObj->assign("view10",$o);
$m=$obj->compcount();
$smartyObj->assign("view11",$m);

$smartyObj->display("adminhome.tpl");
}
else
{	
	Header("location:login.php");
}
?>
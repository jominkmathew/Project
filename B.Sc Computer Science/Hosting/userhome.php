<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$obj->sel12();
$x=$obj->sel13();
$y=$obj->sel14();
$w=$obj->sel15();
$o=$obj->sel16();
$z=$obj->sel17();
$smartyObj->assign("view",$s);
$smartyObj->assign("view1",$x);
$smartyObj->assign("view2",$y);
$smartyObj->assign("view3",$w);
$smartyObj->assign("view4",$o);
$smartyObj->assign("view5",$z);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['domain'])AND($_POST['domain'])!=null)
{
	//echo "hii";exit;
	$a=trim($_POST['domain']);
//  echo"hiiii";exit;
	$k=$obj->sel19($a);
	$k1=$obj->sel20($a);
	//echo$k1;exit;
    $smartyObj->assign("view7",$k);
//	echo "hiiii";exit;
    
    // echo$a;exit;
    $smartyObj->assign("dd",$a,$k1);
}
else
echo"<script>alert('Enter Domain')</script>";
}
$smartyObj->display("usermainheader.tpl");
$smartyObj->display("userfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
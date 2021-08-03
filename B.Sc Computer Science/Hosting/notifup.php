<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['b'];
$s=$obj->sel5($key);
$smartyObj->assign("update",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{
	    $a=trim($_POST['notification']);
        $obj->upnot($a,$key);
	}
	else
		echo "<script>alert('Enter Notification!!!')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("notifup.tpl");
$smartyObj->display("adminfooter.tpl");
}

else
{	
	Header("location:login.php");
}
?>
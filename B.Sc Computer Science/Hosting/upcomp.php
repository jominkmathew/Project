<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['loginkey'];
$s=$obj->sel3($key);
$smartyObj->assign("update",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['subject'])AND($_POST['subject'])!=null)
	{
		if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
	{
	    $a=trim($_POST['subject']);
		$b=trim($_POST['complaint']);
        $obj->upcomp($a,$b,$key);
	}
	else
		echo "<script>alert('Complaint is empty')</script>";
	}
	else
		echo "<script>alert('Subject is empty')</script>";
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("upcomp.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['b'];
$s=$obj->sel4($key);
$smartyObj->assign("update",$s);
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['domaincategory'])AND($_POST['domaincategory'])!=null)
	{
		if(isset($_POST['validity'])AND($_POST['validity'])!=null)
			{
		if(isset($_POST['amount'])AND($_POST['amount'])!=null)
	{
	    $a=trim($_POST['domaincategory']);
		$b=trim($_POST['validity']);
		$c=trim($_POST['amount']);
        $obj->updom($a,$b,$c,$key);
	}
	else
		echo "<script>alert('Enter amount!!!')</script>";
	}
	else
		echo "<script>alert('Enter validity!!!')</script>";
	}
	else
		echo "<script>alert('Enter domaincategory!!!')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("domainup.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
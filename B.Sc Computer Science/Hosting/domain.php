<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
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
		$obj->domain($a,$b,$c);
	
	}
	else
		echo "<script>alert('PLease Enter The Amount')</script>";
    }
    else
		echo "<script>alert('Validity not Chosen')</script>";
    }
    else
		echo "<script>alert('Enter Domain Category')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("domain.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}

?>
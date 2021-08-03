<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['b'];
$s=$obj->sel6($key);
$smartyObj->assign("update",$s);
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['companyname'])AND($_POST['companyname'])!=null)
	{

	// if(isset($_POST['image'])AND($_POST['image'])!=null)
	// {

	if(isset($_POST['validity'])AND($_POST['validity'])!=null)
	{
	   $a=trim($_POST['companyname']);
	   // $b=trim($_POST['image']);
	   $c=trim($_POST['validity']);
		$obj->advertiseup($a,$c,$_FILES['ucl'],$key);
	
	}
	else
		echo "<script>alert('Enter Validity')</script>";
  //   }
  //   else
		// echo "<script>alert('Insert Image')</script>";
    }
    else
		echo "<script>alert('Enter Company Name')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("advertiseup.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}

?>
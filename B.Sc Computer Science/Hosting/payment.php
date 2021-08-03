<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$_GET['f'];
$key=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['number'])AND($_POST['number'])!=null)
	{
		if(isset($_POST['cvc'])AND($_POST['cvc'])!=null)
	{
		

		if(isset($_POST['expiration'])AND($_POST['expiration'])!=null)
	{
		$a=trim($_POST['name']);
        $b=trim($_POST['number']); 
        $c=trim($_POST['cvc']);
        $d=trim($_POST['expiration']);
      
        $obj->card($a,$b,$c,$d,$s,$key);
    }
   
    else
		echo "<script>alert('Enter Expire date')</script>";
	 }
	  else
		echo "<script>alert('Enter CVC')</script>";
	 }
    else
		echo "<script>alert('Enter Card Number')</script>";
	 }
	  else
		echo "<script>alert('Enter Name On Card')</script>";
	 }
	

$smartyObj->display("payment.tpl");
}
else
{	
	Header("location:login.php");
}
?>
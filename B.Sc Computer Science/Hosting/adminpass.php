<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$m=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
if(isset($_POST['currentpassword'])AND($_POST['currentpassword'])!=null)
{
if(isset($_POST['newpassword'])AND($_POST['newpassword'])!=null)
{
if(isset($_POST['confirmpassword'])AND($_POST['confirmpassword'])!=null)
{
$a=trim($_POST['currentpassword']);
$b=trim($_POST['newpassword']);
$c=trim($_POST['confirmpassword']);
$obj->pass($a,$b,$c,$m);
}
else
echo"<script> alert('Confirm Password is empty') </script>";
}
else
echo"<script> alert('New Password is empty') </script>";
}
else
echo"<script> alert('Current Password is empty') </script>";
}
$smartyObj-> display("adminsubheader.tpl");
$smartyObj-> display("adminpass.tpl");
$smartyObj-> display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
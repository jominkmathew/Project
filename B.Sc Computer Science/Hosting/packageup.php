<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['b'];
$s=$obj->sel11($key);
$v=$obj->sel10();
$smartyObj->assign("view",$s);
$smartyObj->assign("view1",$v);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['servertype'])AND($_POST['servertype'])!=null)
	{
		if(isset($_POST['planname'])AND($_POST['planname'])!=null)
	{
		if(isset($_POST['amount'])AND($_POST['amount'])!=null)
	{
		if(isset($_POST['databases'])AND($_POST['databases'])!=null)
	{
		if(isset($_POST['websites'])AND($_POST['websites'])!=null)
	{
		if(isset($_POST['space'])AND($_POST['space'])!=null)
	{
		if(isset($_POST['cpu'])AND($_POST['cpu'])!=null)
	{
		if(isset($_POST['bandwidth'])AND($_POST['bandwidth'])!=null)
	{
		if(isset($_POST['ram'])AND($_POST['ram'])!=null)
	{
		if(isset($_POST['validity'])AND($_POST['validity'])!=null)
	{
		if(isset($_POST['other'])AND($_POST['other'])!=null)
	{
$a=trim($_POST['servertype']);
$b=trim($_POST['planname']);
$c=trim($_POST['amount']);
$d=trim($_POST['databases']);
$e=trim($_POST['websites']);
$f=trim($_POST['space']);
$g=trim($_POST['cpu']);
$h=trim($_POST['bandwidth']);
$i=trim($_POST['ram']);
$j=trim($_POST['validity']);
$k=trim($_POST['other']);
$obj->packup($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$key);
  }
    else
		echo "<script>alert('Enter Details')</script>";
	 }
    else
		echo "<script>alert('Enter Validity')</script>";
	 }
	  else
		echo "<script>alert('Enter RAM')</script>";
	 }
    else
		echo "<script>alert('Enter Bandwidth')</script>";
	 }
	  else
		echo "<script>alert('Enter CPU')</script>";
	 }
    else
		echo "<script>alert('Enter Space')</script>";
	 }
    else
		echo "<script>alert('Enter the no.of Websites')</script>";
	 }
    else
		echo "<script>alert('Enter the no.of Databases')</script>";
	}
	else
		echo "<script>alert('Enter Amount')</script>";
	}
    else
		echo "<script>alert('Enter Plan Name')</script>";
	 }
    else
		echo "<script>alert('Enter Server Type')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("packageup.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}

?>
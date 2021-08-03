<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$key2=$_GET['k'];
$key1=$_GET['k1'];
$key3=$_GET['kk'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{
		
		$a=trim($_POST['notification']);
		$obj->renewnot($a,$key,$key2,$key1,$key3);
	}
	else
		echo "<script>alert('Enter Notification!!')</script>";
}
	
$smartyObj-> display("staffsubheader.tpl");
$smartyObj->display("renewnot.tpl");
$smartyObj-> display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
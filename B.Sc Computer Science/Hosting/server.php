<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['servertype'])AND($_POST['servertype'])!=null)
	{
	   $a=trim($_POST['servertype']);
		$obj->serv($a);
	}
	else
		echo "<script>alert('Server type is empty')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("server.tpl");
$smartyObj->display("adminfooter.tpl");
}
else
{	
	Header("location:login.php");
}

?>
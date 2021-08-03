<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=null)
	{
	   $a=trim($_POST['notification']);
		$obj->notif($a);
	}
	else
		echo "<script>alert('Notification is Empty')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("notification.tpl");
$smartyObj->display("adminfooter.tpl");

?>
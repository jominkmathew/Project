<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['reply'])AND($_POST['reply'])!=null)
	{
	   $c=trim($_POST['reply']);
		$obj->reply($c,$key);
	}
	else
		echo "<script>alert('Enter Reply')</script>";
}
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("reply.tpl");
$smartyObj->display("adminfooter.tpl");

?>
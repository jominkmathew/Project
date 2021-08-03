<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
if(isset($_POST['fed'])AND($_POST['fed'])!=null)
{
$a=trim($_POST['fed']);
$obj->feedback($a);
}
else
echo"<script> alert('Feedback is empty') </script>";
}
$smartyObj-> display("feedback.tpl");
}
else
{	
	Header("location:login.php");
}
?>
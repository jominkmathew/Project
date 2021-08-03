<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['b'];
$obj->staffaprv($key);
}
else
{	
	Header("location:login.php");
}
?>
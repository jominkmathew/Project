<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['b'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$obj->deldomain($key);
}
else
{	
	Header("location:login.php");
}
?>
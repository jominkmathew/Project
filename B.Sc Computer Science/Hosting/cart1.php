<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$lky=$_COOKIE['loginkey'];
$a=$_GET['f'];
$obj->cart1($a,$lky);
}
else
{	
	Header("location:login.php");
}
//$obj->cart2();

?>
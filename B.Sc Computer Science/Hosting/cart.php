<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s=$_GET['f'];
$t=$_GET['n'];
$key=$_COOKIE['loginkey'];
$obj->cart($t,$s,$key);
}
else
{	
	Header("location:login.php");
}
//$smartyObj->display("cart.tpl");
?>
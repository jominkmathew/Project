<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{ 
if(isset($_POST['email'])AND($_POST['email'])!=null)
{
if(isset($_POST['password'])AND($_POST['password'])!=null)
{ 
	$a=trim($_POST['email']);
    $b=trim($_POST['password']);
    $obj->login($a,$b);
}
else
echo"<script>alert('Password missing')</script>";
}
else
echo"<script>alert('Email missing')</script>";
}


$smartyObj->display("login.tpl");


?>
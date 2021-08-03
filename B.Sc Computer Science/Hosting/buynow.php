<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$s=$_GET['f'];
$t=$_GET['n'];
$key=$_COOKIE['loginkey'];
$obj->buynow($t,$s,$key);

?>
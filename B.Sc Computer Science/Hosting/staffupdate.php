<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['loginkey'];
$s=$obj->sel1($key);
$smartyObj->assign("update",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	
	if(isset($_POST['staffname'])AND($_POST['staffname'])!=null)
	{
		if (preg_match('/^[A-Z a-z]*$/', $_POST['staffname']))
	{
		if(isset($_POST['staffid'])AND($_POST['staffid'])!=null)
	{
		if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
	{

		if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
												{

												$nm1=strlen($_POST['contactno']);

												if($nm1>=10 and $nm1<=12)

												{
		if(isset($_POST['gender'])AND($_POST['gender'])!=null)
	{
		if(isset($_POST['dob'])AND($_POST['dob'])!=null)

	{
		$a=trim($_POST['staffname']);
		$b=trim($_POST['staffid']);
		$c=trim($_POST['contactno']);
		$d=trim($_POST['gender']);
		$e=trim($_POST['dob']);	
		$obj->staffupdate($a,$b,$c,$d,$e,$key);
	
	}
	else
		echo "<script>alert('DOB is empty')</script>";
	}
	else
		echo "<script>alert('Gender is empty')</script>";
	}
	else
	    echo "<script> alert('Contact Number should be 10 digit or 12 digit')</script>";	
	}
    else
	    echo "<script> alert('Please enter numbers for Contact Number')</script>";	
	}
	else
		echo "<script>alert('Contactno is empty')</script>";
	}
	else
		echo "<script>alert('Staffid is empty')</script>";
}
else
	    echo "<script> alert('Please enter alphabets for Name')</script>";	
	}
	else
		echo "<script>alert('Staffname is empty')</script>";
}
$smartyObj->display("staffsubheader.tpl");
$smartyObj->display("staffupdate.tpl");
$smartyObj->display("stfooter.tpl");
}
else
{	
	Header("location:login.php");
}
?>
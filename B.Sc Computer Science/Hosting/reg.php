<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{

		if (preg_match('/^[A-Z a-z]*$/', $_POST['name']))
	{

		if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
	{
		if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
												{

												$nm1=strlen($_POST['contactno']);

												if($nm1>=10 and $nm1<=12)

												{
		if(isset($_POST['org'])AND($_POST['org'])!=null)
	{
		if(isset($_POST['email'])AND($_POST['email'])!=null)
	{
		if(isset($_POST['pass'])AND($_POST['pass'])!=null)
	{
		if(isset($_POST['confirmpass'])AND($_POST['confirmpass'])!=null)
	{  
	    if($_POST['pass']==$_POST['confirmpass'])
	{    	
		$a=trim($_POST['name']);
		$b=trim($_POST['contactno']);
		$c=trim($_POST['org']);
		$d=trim($_POST['email']);
		$e=trim($_POST['pass']);
		$obj->reg($a,$b,$c,$d,$e);
	} 
	else
        echo"<script>alert('Password missmatch')</script>";
	}
	else
		echo "<script>alert('Confirm password is empty')</script>";
	}
	else
		echo "<script>alert('Password is empty')</script>";
	}
	else
		echo "<script>alert('Email is empty')</script>";
	}
	else
		echo "<script>alert('Organisation name is empty')</script>";
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
	    echo "<script> alert('Please enter alphabets for Name')</script>";	
	}
	else
		echo "<script>alert('Name is empty')</script>";
}

$smartyObj->display("reg2.tpl");

?>
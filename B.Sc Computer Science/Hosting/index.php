<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();


$s=$obj->sel12();
$x=$obj->sel13();
$y=$obj->sel14();
$w=$obj->sel15();
$o=$obj->sel16();
$z=$obj->sel17();

$smartyObj->assign("view",$s);
$smartyObj->assign("view1",$x);
$smartyObj->assign("view2",$y);
$smartyObj->assign("view3",$w);
$smartyObj->assign("view4",$o);
$smartyObj->assign("view5",$z);

if(isset($_POST['hidden'])AND($_POST['hidden'])=="h")
{
if(isset($_POST['fed'])AND($_POST['fed'])!=null)
{
   $a=trim($_POST['fed']);
   $obj->feedback($a);
}
else
echo "<script>alert('Feedback is empty')</script>";
}

if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{
	if(isset($_POST['domain'])AND($_POST['domain'])!=null)
{
   $a=trim($_POST['domain']);
    // echo$a;exit;
   $smartyObj->assign("dd",$a);
  
   $k=$obj->sel19($a);
   $smartyObj->assign("view7",$k);
}
else
echo "<script>alert('Enter Domain')</script>";
}
$smartyObj->display("index.tpl");

?>
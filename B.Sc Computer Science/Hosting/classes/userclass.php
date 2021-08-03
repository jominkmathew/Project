<?php
class userclass
{ function reg($a,$b,$c,$d,$e)
  {
  	$enc=md5($e);
  	$w=uniquekey("login","loginkey");
  	$qry="insert into login(loginkey,email,password,utype,status)values('".$w."','".$d."','".$enc."','2','1')";
  	$ex=mysql_query($qry);
  	$m=uniquekey("regs","regskey");
  	$f=keytoid("login","loginkey",$w);
  	$qsy="insert into regs(regskey,name,contactno,organisationname,loginid)values('".$m."','".$a."','".$b."','".$c."','".$f."')";
  	$em=mysql_query($qsy);
  	if ($ex&&$em)
  	{ 
  		echo"<script>alert('Registration Completed')</script>";
  	}
  	else
  	{
  		echo"<script>alert('Registration Incompleted')</script>";
    }	
  }
  function staffreg($a,$b,$c,$d,$e,$f,$g)
  {
  	$enc=md5($g);
  	$w=uniquekey("login","loginkey");
  	$qry="insert into login(loginkey,email,password,utype)values('".$w."','".$f."','".$enc."','1')";
  	$ex=mysql_query($qry);
  	$m=uniquekey("staff","staffkey");
  	$l=keytoid("login","loginkey",$w);
  	$qsy="insert into staff(staffkey,staffname,staffid,contactno,gender,dob,loginid)values('".$m."','".$a."','".$b."','".$c."','".$d."','".$e."','".$l."')";
  	$em=mysql_query($qsy);
  	if ($ex&&$em)
  	{ 
  		echo"<script>alert('Registration Completed')</script>";
  	}
  	else
  	{
  		echo"<script>alert('Registration Incompleted')</script>";
    }	
  }
     function login($a,$b)
    {
      $enc=md5($b);
      $qry="select loginkey,status,utype from login where email='".$a."'and password='".$enc."'";
      $exe=mysql_query($qry);
      $key=null;
      $c=0;
      while($rr=mysql_fetch_array($exe))
      {
        $key=$rr['loginkey'];
        $u=$rr['utype'];
        $st=$rr['status'];
        $c=$c+1;
      }
      if($c>0)
        { if($st==1)
          {
          setcookie("loginkey",$key);
          setcookie("logined",1);
          if($u==0)
          {
            header("location:adminhome.php");
          }
          elseif($u==1)
          {
            header("location:staffhome.php");
          }
          elseif($u==2)
          {
            header("location:userhome.php");
          }
          }
        else
        {
          echo"<script>alert('reject')</script>";

        }
        }
        else
        {
          echo"<script>alert('invalid')</script>";

        }
    }
 
  function staffview()
  { $qry="select * from staff inner join login on login.id=staff.loginid";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
    	$ar[]=$rr;
    }
    return $ar;
  }
   function userview()
  { 
  	$qry="select * from regs inner join login on login.id=regs.loginid";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
    	$ar[]=$rr;
    }
    return $ar;
  }
  function staffaprv($key)
  {
  	$a=keytoid("login","loginkey",$key);
  	$d="update login set status='1' where id='".$a."'";
  	$em=mysql_query($d);
  	if($em)
  	{
  		header("location:staffview.php");
  	}
  }
  function staffregt($key)
  {
  	$a=keytoid("login","loginkey",$key);
  	$d="update login set status='2' where id='".$a."'";
  	$em=mysql_query($d);
  	if($em)
  	{
  		header("location:staffview.php");
  	}
  }
   function sel1($key)
  {
    $a=keytoid("login","loginkey",$key);
    $d="select * from staff where loginid='".$a."'";
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {$arr[]=$rr;
    }
    return $arr;
   }
  
  function sel2($key)
  {
    $a=keytoid("login","loginkey",$key);
    $d="select * from regs where loginid='".$a."'";
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
    	$arr[]=$rr;
    }
    return $arr;
    
  }
  function staffupdate($a,$b,$c,$d,$e,$key)
  {
    $id=keytoid("login","loginkey",$key);
    $qry="update staff set staffname='".$a."',staffid='".$b."',contactno='".$c."',gender='".$d."',dob='".$e."' where loginid='".$id."'" ;
    $exe=mysql_query($qry);
    if($exe)
    { 
      	echo"<script>alert('updation succesfull')</script>";
    }
  else
    {
    	echo"<script>alert('updation unsuccesfull')</script>";
    }
 }
  function regsup($a,$b,$c,$key)
  {
    $id=keytoid("login","loginkey",$key);
    $qry="update regs set name='".$a."',contactno='".$b."',organisationname='".$c."' where loginid='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    if($exe)
  { 
  	echo"<script>alert('updation succesfull')</script>";
  }
  else
  {
  	echo"<script>alert('updation unsuccesfull')</script>";
  }
 }

 function comp($a,$b,$c,$key)
 {
  $id=keytoid("login","loginkey",$key);
   $r=date('Y-m-d');
   $m=uniquekey("complaint","compkey");
    $qry="insert into complaint(compkey,subject,complaint,currentdate,loginid)values('".$m."','".$a."','".$b."','".$r."','".$id."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('Complaint Registered')</script>";
    }
    else
    {
      echo"<script>alert('Registration Failed')</script>";
    } 
  }

  function reply($c,$key)
 {
  $id=keytoid("login","loginkey",$key);
  $qryy="update complaint set reply='".$c."'";
    $exe1=mysql_query($qryy);
    if ($exe1)
    { 
      echo"<script>alert('Complaint Registered')</script>";
    }
    else
    {
      echo"<script>alert('Registration Failed')</script>";
    } 
  }



  function feedback($a)
{
$r=date('Y-m-d');
$q=uniquekey("feedback","fkey");
$w="insert into feedback(fkey,feedback,currentdate)values('".$q."','".$a."','".$r."')";
$e=mysql_query($w);
if($e)
{
echo "<script>alert('FEEDBACK SEND SUCCESFULL')</script>";  
}
else
{
echo "<script>alert('FEEDBACK SEND UNSUCCESFULL')</script>";  
}
}
function feedbackview()
{
$a="select * from feedback";
$s=mysql_query($a);
$g=array();
while($f=mysql_fetch_array($s))
{$g[]=$f;
}
return $g;
}

function regdcomp()
  { 
    $qry="select * from complaint ";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }
function delcomp($key)
{ 
  $q=keytoid("complaint","compkey",$key);
  $w="delete from complaint where id='".$q."'";
  $s=mysql_query($w);
  header("location:regdcomp.php");
}
  function sel3($key)
  {
    $a=keytoid("login","loginkey",$key);
    $d="select * from complaint where loginid='".$a."'";
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    
  }
    function upcomp($a,$b,$key)
  {
    $id=keytoid("login","loginkey",$key);
    $qry="update complaint set subject='".$a."',complaint='".$b."' where loginid='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    if($exe)
  { 
    echo"<script>alert('updation succesfull')</script>";
  }
  else
  {
    echo"<script>alert('updation unsuccesfull')</script>";
  }
 }
    function admincompview()
  { 
    $qry="select * from complaint inner join regs on complaint.loginid=regs.loginid inner join login on login.id=complaint.loginid";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }
  function adminfeedview()
  { 
    $qry="select * from feedback order by currentdate desc";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }
  function serv($a)
 {
   $m=uniquekey("server","serverkey");
    $qry="insert into server(serverkey,servertype)values('".$m."','".$a."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('Server Type Added..')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  } 

   function domain($a,$b,$c)
 {
  // echo$c;exit;
   $m=uniquekey("domain","domkey");
    $qry="insert into domain(domkey,domaincategory,validity,amount)values('".$m."','".$a."','".$b."','".$c."')";
    // echo
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('Domain Added.')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  } 
  function domainview()
  { 
    $qry="select * from domain ";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }
  function sel4($key)
  {
    $a=keytoid("domain","domkey",$key);
    $d="select * from domain where id='".$a."'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    
  }
    function updom($a,$b,$c,$key)
  {
    $id=keytoid("domain","domkey",$key);
    $qry="update domain set domaincategory='".$a."',validity='".$b."',amount='".$c."' where id='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    if($exe)
  { 
    echo"<script>alert('The Domain is Updated Successfully!!!')</script>";
  }
  else
  {
    echo"<script>alert('An Error Occuried')</script>";
  }
 }
 function deldomain($key)
{ 
  $q=keytoid("domain","domkey",$key);
  $w="delete from domain where id='".$q."'";
  $s=mysql_query($w);
  header("location:domainview.php");
}
  function notif($a)
 {
   $m=uniquekey("notification","notkey");
   $r=date('Y-m-d');
    $qry="insert into notification(notkey,notification,currentdate)values('".$m."','".$a."','".$r."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('Notification is Added..')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!!!')</script>";
    } 
  } 
    function notificationview()
  { 
    $qry="select * from notification ";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }
    function sel5($key)
  {
    $a=keytoid("notification","notkey",$key);
    $d="select * from notification where id='".$a."'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    
  }
     function upnot($a,$key)
  {
    $id=keytoid("notification","notkey",$key);
    $qry="update notification set notification='".$a."' where id='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    if($exe)
  { 
    echo"<script>alert('The Domain is Updated Successfully!!!')</script>";
  }
  else
  {
    echo"<script>alert('An Error Occuried')</script>";
  }
 }

 function notitbl()
{
$a="select * from notification";
$s=mysql_query($a);
$g=array();
while($f=mysql_fetch_array($s))
{$g[]=$f;
}
return $g;
}
 function notifdel($key)
{ 
  $q=keytoid("notification","notkey",$key);
  $w="delete from notification where id='".$q."'";
  $s=mysql_query($w);
  header("location:notificationview.php");
}



function advertise($a,$c,$file=NULL)
 {
   $r=date('Y-m-d');
   $m=uniquekey("advertisement","advkey");
    $qry="insert into advertisement(advkey,companyname,image,validity,currentdate)values('".$m."','".$a."','".$file["name"]."','".$c."','".$r."')";
    $exe=mysql_query($qry);
    $img="uploads/".$m;
    mkdir($img);
    if ($exe)
    { 
      move_uploaded_file($file["tmp_name"],$img."/" . $file["name"]);
      echo"<script>alert('Advertisement Added')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  } 

  function advertisetbl()
  { 
    $qry="select * from advertisement";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $path="uploads/".$rr['advkey']."/".$rr["image"];
      // echo $path;exit;
      $rr['path']=$path;
      $ar[]=$rr;
    }
    return $ar;
  }

  function advertiseup($a,$c,$file=null,$key)
  {
    $id=keytoid("advertisement","advkey",$key);
    $qry="update advertisement set companyname='".$a."',validity='".$c."',image='".$file["name"]."' where id='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    $img="uploads/".$key;
    mkdir($img);
    if ($exe)
    { 
      move_uploaded_file($file["tmp_name"],$img."/" . $file["name"]);
      echo"<script>alert('Advertisement Added')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  }
  function sel6($key)
  {
    $a=keytoid("advertisement","advkey",$key);
    $d="select * from advertisement where id='".$a."'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }
   function advertisedel($key)
{ 
  $q=keytoid("advertisement","advkey",$key);
  $w="delete from advertisement where id='".$q."'";
  $s=mysql_query($w);
  header("location:advertisetbl.php");
}

 function sel7()
  {
    $d="select * from advertisement";
    //echo $d;exit;
    $exe=mysql_query($d);
    $ar=array();
   while($rr=mysql_fetch_array($exe))
    {
      $path="uploads/".$rr['advkey']."/".$rr["image"];
      // echo $path;exit;
      $rr['path']=$path;
      $ar[]=$rr;
    }
    return $ar;
  }

  function package($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)
 {
   $m=uniquekey("package","packey");
    $qry="insert into package(packey,servertype,planname,amount,no_databases,websites,space,cpu,bandwidth,ram,validity,other)values('".$m."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('package created.')</script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  } 
  

  function packageview()
  { 
    $qry="select * from package";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }



  function sel9($key)
  {
    $a=keytoid("package","packey",$key);
    $d="select * from package where id='".$a."'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    
  }
    function packup($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$key)
  {
    $id=keytoid("package","packey",$key);
    $qry="update package set servertype='".$a."',planname='".$b."',amount='".$c."',no_databases='".$d."',websites='".$e."',space='".$f."',cpu='".$g."',bandwidth='".$h."',ram='".$i."',validity='".$j."',other='".$k."' where id='".$id."'";
    //echo$qry;exit;
    $exe=mysql_query($qry);
    if($exe)
  { 
    echo"<script>alert('The Domain is Updated Successfully!!!')</script>";
  }
  else
  {
    echo"<script>alert('An Error Occuried')</script>";
  }
  header("location:packageview.php");
 }

   function packdel($key)
{ 
  $q=keytoid("package","packey",$key);
  $w="delete from package where id='".$q."'";
  $s=mysql_query($w);
  header("location:packageview.php");
}
  function sel10()
  {
   // $a=keytoid("server","serverkey",$key);
    $d="select * from server";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    
  }

  function sel11($key)
  {
    $a=keytoid("package","packey",$key);
    $d="select * from package where id='".$a."'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }
  
  function sel12()
  {
    $d="select * from package where servertype='linux' and planname='Standard Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function sel13()
  {
    $d="select * from package where servertype='linux' and planname='Advanced Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function sel14()
  {
    $d="select * from package where servertype='linux' and planname='Ultimate Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

   function sel15()
  {
    $d="select * from package where servertype='windows' and planname='Standard Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function sel16()
  {
    $d="select * from package where servertype='windows' and planname='Advanced Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function sel17()
  {
    $d="select * from package where servertype='windows' and planname='Ultimate Hosting'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function card($a,$b,$c,$d,$s,$key)
 {
   $enc=md5($c);
   $r=date('Y-m-d');
   $o=date('m');
   $id=keytoid("login","loginkey",$key);

   $qryy="select id,totalamount,accntno from bank where cardno='".$b."' and cvv='".$c."'";
   //echo $qryy;exit;
   $exeq=mysql_query($qryy); 
   $idd=null;
   $ta=null;
   $kk=null;
   while ($rrr=mysql_fetch_array($exeq)) {
     $idd=$rrr['id'];
     $ta=$rrr['totalamount'];
     $kk=$rrr['accntno'];
   }


    $qryy11="select contactno from regs where loginid='".$id."'";
   //echo $qryy;exit;
   $exeq11=mysql_query($qryy11); 
   $idd11=null;
   //$ta=null;
   while ($rrr11=mysql_fetch_array($exeq11)) {
     $idd11=$rrr11['contactno'];
    
   }

   $tim=time();
   if ($idd!=null)
    { 
      if($ta>$s)
      {


   $m=uniquekey("card","cardkey");
    $qr="update bank set totalamount=totalamount-'".$s."' where cardno='".$b."'";
// echo $qr;exit;
    $ex=mysql_query($qr);

    $qryy="update cart set paymentdate='".$r."' where loginid='".$id."'";
    $exx=mysql_query($qryy);

    // $qryy="update domains set status='1' where loginid='".$id."' and paymentdate='".$r."'";
    // $exx=mysql_query($qryy);
    $qry="insert into card(cardkey,nameoncard,cardno,cvv,expiry,amount,currentdate,currentmonth,loginid)values('".$m."','".$a."','".$b."','".$enc."','".$d."','".$s."','".$r."','".$o."','".$id."')";
    $exe=mysql_query($qry);

if ($exe && $ex && $exx)
    { 

      //Your authentication key
$authKey = "106887AeMrZm7GKPq56de8aba";

//Multiple mobiles numbers separated by comma
$mobileNumber = $idd11;

//echo $amount;exit;
$ddd=date('Y-m-d');
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "101010";

//Your message to send, Add URL encoding here.
$aaa="Dear User, Your A/C $kk - debited by Rs $s on $ddd. Ref No. $tim.";
$message = urlencode($aaa);

//Define route 
$route = "1";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

//echo $output;





      //header("location:indexbillpdf.php");
      //echo"<script>alert('Details Entered Successfully')</script>";
      echo "<script type=\"text/javascript\">
            alert('Payment Successfully done!');
      window.open('indexbillpdf.php','_blank')</script>";
     // header("location:userhome.php");
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    } 
  }
  else
  {
    echo"<script>alert('Insufficient Balance!')</script>";
  }
}
   else
   {
    echo"<script>alert('Invalid Card!')</script>";

   }
  }



  function cart($t,$s,$key)
 {
   $r=date('Y-m-d');
   $e=explode('-',$r);
   $y=$e[0];
   $m=$e[1];
   $d=$e[2];

   $qryy="select validity from package where id='".$t."'";
   // echo $qryy;exit;
   $ex=mysql_query($qryy);
   $r1=null;
   while($k=mysql_fetch_array($ex))
   {
    $r1=$k['validity'];
   }
   // echo $r;exit;
   $e1=explode(' ',$r1);
   $val=$e1[0];
   // echo $val;exit;
   $mnth=$m+$val;
   $new=$y.'-'.$mnth.'-'.$d;
   // echo $new;exit;
   $o=date('m');
   $id=keytoid("login","loginkey",$key);
   $m=uniquekey("cart","cartkey");
    $qry="insert into cart(cartkey,packageid,loginid,amount,currentdate,currentmonth,type,expiry)values('".$m."','".$t."','".$id."','".$s."','".$r."','".$o."','package','".$new."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 

      echo"<script>alert('Details Entered Successfully');
      window.location.href='userhome.php';
      </script>";
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    }

  } 

   function sel18($key)
  {
    $id=keytoid("login","loginkey",$key);

    $d="select * from cart inner join package on cart.packageid=package.id where loginid='".$id."' and type='package' and cart.status='0'";
     //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

     function sel22($key)
  {
    $id=keytoid("login","loginkey",$key);

    $d="select * from cart inner join domains on cart.packageid=domains.domainid inner join domain on domains.domainid=domain.id where cart.loginid='".$id."' and domains.status='0' and cart.status='0'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }
  function sumcart($k)
  {
    $id=keytoid("login","loginkey",$k);
    $d="select sum(amount) from cart where loginid='".$id."' and status='0'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(amount)'];
    }
    // echo $arr;exit;
    return $arr;
  }

function cartdel($key,$key1)
{ 
  $q=keytoid("cart","cartkey",$key);


  $w="delete from cart where id='".$q."'";
  $s=mysql_query($w);
   $w1="delete from domains where domainname='".$key1."'";
  $s1=mysql_query($w1);
  header("location:cartview.php");
}


function sel19($b)
  {
    $d="select id from domains where domainname='".$b."'";
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    $arr1=null;
       while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['id'];
      //$arr=$rr['domainskey'];
    }

    if($arr==null)

   return 5;

      else
    return 1;
    
//echo $arr;exit;
   
   //echo $arr;exit;
   
  }
function sel20($a)
  {
     $extension = end(explode(".", $a));
     // echo $extension;exit;
 // return $extension ? $extension : false;
    // echo $a;exit;
//      $parts = explode('.', $a);
// echo $parts;exit;
//     return (sizeof($parts)) ? ('.' . end($parts)) : false;

    $d="select amount from domain where domaincategory='".$extension."'";
    // echo $d;exit;
    //echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    $arr1=null;
      
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }

    return $arr;
    
   
  }

function cart1($a,$lky)
{
  $pieces = explode('.', $a);
    $first=$pieces['0'];
    $second=$pieces['1'];
    $qryy="select id,amount from domain where domaincategory='".$second."' ";
    //echo $qryy;exit;
    $exc=mysql_query($qryy);
    $arr=null;
    $amnt=null;
    while($rr=mysql_fetch_array($exc))
    {
      $arr=$rr['id'];
      $amnt=$rr['amount'];

    }   
    // echo $amnt;exit;
    $lgid=keytoid("login","loginkey",$lky);
    $w=uniquekey("domains","domainskey");
    $qry="insert into domains(domainskey,domainname,domainid,loginid)values('".$w."','".$a."','".$arr."','".$lgid."')";
    $ex=mysql_query($qry);
    $did=keytoid("domains","domainskey",$w);
    
    $dt=date('Y-m-d');
    $o=date('m');
    $yt=uniquekey("cart","cartkey");
    $rt="insert into cart(cartkey,packageid,loginid,amount,currentdate,currentmonth,type)values('".$yt."','".$arr."','".$lgid."','".$amnt."','".$dt."','".$o."','domain')";
    // echo $rt;exit;
    $ex1=mysql_query($rt);
    if($ex&&$ex1)
    { 
      echo"<script>alert('Insertion Completed');
         window.location.href='userhome.php';
         </script>";
    }
    else
    {
      echo"<script>alert('Insertion Incompleted')</script>";
    } 

} 



function sel21()
  {
    $d="select * from regs";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    }



 function renewal()
  { 
    $qry="select * from regs inner join cart on cart.loginid=regs.loginid join package on package.id=cart.packageid";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    return $ar;
  }

  function renewnot($a,$key,$key2,$key1,$key3)
 {
  $id=keytoid("login","loginkey",$key);
  // $id3=keytoid("regs","regskey",$key3);
  $id2=keytoid("package","packey",$key2);
  $id1=keytoid("cart","cartkey",$key1);
  $q="select loginid from cart where id='".$id1."'";
  // echo $q;exit;
  $e=mysql_query($q);
  $rr=null;
  while($k=mysql_fetch_array($e))
  {
    $rr=$k['loginid'];
  }
   $b=date('Y-m-d');
   $m=uniquekey("renew","renewkey");
    $qry="insert into renew(renewkey,notification,currentdate,loginid,regsid,packageid)values('".$m."','".$a."','".$b."','".$rr."','".$key3."','".$id2."')";
    //echo $qry;exit;
    $exe=mysql_query($qry);
    if ($exe)
    { 
      echo"<script>alert('Notification Send')</script>";
    }
    else
    {
      echo"<script>alert('An Error Occured')</script>";
    } 
  }


function sel23()
  {
    $d="select * from cart inner join regs on cart.loginid=regs.loginid inner join package on cart.packageid=package.id inner join login on regs.loginid=login.id ";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

  function sel24()
  {
    $d="select * from cart inner join regs on cart.loginid=regs.loginid inner join domain on cart.packageid=domain.id inner join domains on domain.id=domains.domainid inner join login on regs.loginid=login.id";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
    }

    function domsel()
  {
    $r=date('Y-m-d');
    $d="select sum(cart.amount) from cart inner join card on card.currentdate=cart.currentdate where type='domain' and cart.currentdate='".$r."'  and card.currentdate='".$r."'";
     // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(cart.amount)'];
    }
    //echo $arr;exit;
    return $arr;
    }

    function packsel()
  {
    $r=date('Y-m-d');
    $d="select sum(cart.amount) from cart inner join card on card.currentdate=cart.currentdate where type='package' and cart.currentdate='".$r."' and card.currentdate='".$r."'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(cart.amount)'];
    }
    return $arr;
    }

function domsel1()
  {
    $o=date('m');
    $d="select sum(cart.amount) from cart inner join card on card.currentmonth=cart.currentmonth where type='domain' and card.currentmonth='".$o."' and cart.currentmonth='".$o."'" ;
     // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(cart.amount)'];
    }
    return $arr;
    }


function packsel1()
  {
    $o=date('m');
    $d="select sum(cart.amount) from cart inner join card on card.currentmonth=cart.currentmonth where type='package'  and card.currentmonth='".$o."' and cart.currentmonth='".$o."'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(cart.amount)'];
    }
    return $arr;
    }


    function sel25()
  {
    $d="select reply from complaint ";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }


function sel26($k)
  {
    $id=keytoid("login","loginkey",$k);
 

    $d="select * from cart inner join package on cart.packageid=package.id where loginid='".$id."' and type='package' and status='1' ";
     //echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }

 function sel27($k,$d)
  { 
     $id=keytoid("login","loginkey",$k);
      $idd=keytoid("package","packey",$d);
    $qry="select * from package where id='".$idd."'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    //print_r($ar);exit;
    return $ar;
  }

  function sel28($k)
  { 
     $id=keytoid("login","loginkey",$k);

    $qry="select * from cart inner join domains on cart.packageid=domains.domainid where cart.loginid='".$id."' and cart.status='1' and domains.status='1'" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    //print_r($ar);exit;
    return $ar;
  }


function sel29()
  {

 
    $d="select * from cart inner join package on cart.packageid=package.id inner join regs on cart.loginid=regs.loginid ";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }


function sel30()
  { 
    

    $qry="select * from domains inner join cart on cart.packageid=domains.domainid inner join regs on cart.loginid=regs.loginid inner join domain on domains.domainid=domain.id   ";

    //echo $qry;exit;
    $exe=mysql_query($qry);
    //$qryy="select * from regs inner join cart on regs.loginid=cart.loginid   ";

    //echo $qry;exit;
    //$exe1=mysql_query($qryy);

    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
    }
    //print_r($ar);exit;
    return $ar;
  }



function pass($a,$b,$c,$m)
{
$q=keytoid("login","loginkey",$m);
$qry="select password from login where id='".$q."'";
$ex=mysql_query($qry);
$ar=null;
while($rr=mysql_fetch_array($ex))
{
$ar=$rr['password'];
}
$r=md5($a);
if($r==$ar)
{
    if($b==$c)
    {
        $s=md5($b);
        $t="update login set password='".$s."' where id='".$q."'";
        $ex=mysql_query($t);
        if($ex)
        echo"<script>alert('Password Changed Successfully')</script>";
}
    else
      echo"<script>alert('Re-Enter Password')</script>";
}
else    
  echo"<script>alert('Current Password is not correct')</script>";

}
  


  function sel31($m)
  {
    $q=keytoid("login","loginkey",$m);
    $d="select * from renew where loginid='".$q."' ";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=array();
    while($rr=mysql_fetch_array($exe))
    {
      $arr[]=$rr;
    }
    return $arr;
  }



    function buynow($t,$s,$key)
 {
   $r=date('Y-m-d');
   $e=explode('-',$r);
   $y=$e[0];
   $m=$e[1];
   $d=$e[2];

   $qryy="select validity from package where id='".$t."'";
   // echo $qryy;exit;
   $ex=mysql_query($qryy);
   $r1=null;
   while($k=mysql_fetch_array($ex))
   {
    $r1=$k['validity'];
   }
   // echo $r;exit;
   $e1=explode(' ',$r1);
   $val=$e1[0];
   // echo $val;exit;
   $mnth=$m+$val;
   $new=$y.'-'.$mnth.'-'.$d;
   // echo $new;exit;
   $o=date('m');
   $id=keytoid("login","loginkey",$key);
   $m=uniquekey("cart","cartkey");
    $qry="insert into cart(cartkey,packageid,loginid,amount,currentdate,currentmonth,type,expiry)values('".$m."','".$t."','".$id."','".$s."','".$r."','".$o."','package','".$new."')";
    $exe=mysql_query($qry);
    if ($exe)
    { 

      header("location:payment.php?f=$s&&z=$t");
    }
    else
    {
      echo"<script>alert('Some error occured!')</script>";
    }

  } 



function domcount()
  {

 
    $d="select count(domainname) from domains";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['count(domainname)'];
    }
    return $arr;
    }

function pkgcount()
  {

 
    $d="select count(type) from cart where type='package'";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['count(type)'];
    }
    return $arr;
    }
  

  function typecount()
  {

 
    $d="select count(type) from cart";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['count(type)'];
    }
    return $arr;
    }

    function feedcount()
  {

 
    $d="select count(feedback) from feedback";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['count(feedback)'];
    }
    return $arr;
    }

     function compcount()
  {

 
    $d="select count(complaint) from complaint";
    // echo $d;exit;
    $exe=mysql_query($d);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['count(complaint)'];
    }
    return $arr;
    }
  
  
  

}


?>

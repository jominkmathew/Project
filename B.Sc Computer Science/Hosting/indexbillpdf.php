<?Php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
//$j=$_GET['m'];



if(!file_exists('fpdf/font')){
	echo " Place font directory in this directory before using this page. ";
exit;	
}

require "config1.php";
$dt=date('Y-m-d');

$kk=$_COOKIE['loginkey'];
$idd=keytoid("login","loginkey",$kk);
$dg1=0;
$dg=0;
$dg6=0;




 // connection to database 
 $count="select name from regs where loginid='".$idd."'";
 // echo $count;exit;
  $xc=mysql_query($count);
  while($fr=mysql_fetch_array($xc))
 {
 $gr=$fr['name'];
 }


  //$count4="select contact,address from shopreg where loginid='".$idd."'";
 // echo $count;exit;
 // $xc1=mysql_query($count4);
  //while($fr1=mysql_fetch_array($xc1))
 //{
 //	$addr=$fr1['address'];
 //$gr11=$fr1['contact'];
 //}
 
 
//  $us="select order1  from pdetails ";
// $uk=mysql_query($us);
// while($fr=mysql_fetch_array($uk))
// {
// $gr=$fr['order1'];
// }
 //echo $gr;exit;
 // connection to database 
 
//  if($gr!=null)
//  {
//      $count1="select * from billing inner join itemstore on itemstore.order1=billing.order1 where billing.order1='".$j."'";
//  //	$count1="select * from billing inner join itemstore on itemstore.order1=billing.order1 inner join pdetails on pdetails.order1=itemstore.order1 where billing.order1='".$j."'";
//  }
//  else
//  {
// $count1="select * from billing inner join itemstore on itemstore.order1=billing.order1 where billing.order1='".$j."'";
// }

 //$count10="select ta from gstsubadd where tax='".$tax."'";
         
 
 $date1=date('Y-m-d');
$count1="select * from cart inner join package on cart.packageid=package.id  where currentdate='".$date1."' and loginid='".$idd."' and cart.status='0'";
//echo $count1;exit;

// $count2="select sum(subtotal) from itemstore where order1='".$j."'";
 $xc=mysql_query($count1);
 while($vb=mysql_fetch_array($xc))
 {
 $dg=$vb['servertype'];
 $dg1=$vb['planname'];
  $dg2=$vb['amount'];
   $dg6=$vb['validity'];
 }
 //$count2="select * from gstsubadd inner join shopbill on shopbill.productsubcategory=gstsubadd.productsubcategory inner join shopaddproduct on shopaddproduct.id=shopbill.productname where customerid='".$j."' and shopbill.currentdate='".$date1."'and shopbill.loginid='".$idd."'";
 	 //echo $count2;
 	// exit;
 //$xc3=mysql_query($count3);
// while($vb3=mysql_fetch_array($xc3))
// {
// $dg3=$vb3['sum(discount)'];
// }



 $count5="select sum(amount) from cart where loginid='".$idd."' and status='0'";
     //echo $count5;exit;
    $exe=mysql_query($count5);
    $arr=null;
    while($rr=mysql_fetch_array($exe))
    {
      $arr=$rr['sum(amount)'];
    }
// echo $arr;exit;
//$count6="select sum(taxamount) from shopbill where customerid='".$j."' and currentdate='".$date1."'";
 //$xc6=mysql_query($count6);
 //while($vb6=mysql_fetch_array($xc6))
 //{
 //$dg6=$vb6['sum(taxamount)'];
 //}


 //$totalamt=$dg4+$dg6;

 



 // SQL to get 10 records 
/*$count2="select distinct lname,lphoneno from request inner join labreg on request.labid=labreg.loginid where labid='".$e2."'and rdate='".$dt."'";
$count4="select tamt from bill where labid='".$e2."'and bdate='".$dt."' and uid='".$e1."'";
$count3="select max(bno) from bill where labid='".$e2."'and bdate='".$dt."'";
$xc=mysql_query($count3);
while($vb=mysql_fetch_array($xc))
{
$dg=$vb['max(bno)'];
}
*/
//echo $count3;exit;
require('fpdf/fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();


$width_cell=array(180);
//$pdf->SetFont('Arial','B',16);

$pdf->SetFont('Courier','b',35);
//$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 
$pdf->Cell($width_cell[0],10,'Secure Hosting',0,1,'C');
$pdf->SetFont('Arial','',20);
$pdf->Cell($width_cell[0],10,'Kilimanoor',0,1,'C');
$pdf->SetFont('Arial','',20);


$pdf->Cell($width_cell[0],5,'Contact:8921744188 ',0,1,'C');
$pdf->Cell($width_cell[0],5,'----------------------------------------------------------------',0,1,'C');
$pdf->SetFont('Arial','',10);
$width_cell=array(30,30);

	//$pdf->Cell($width_cell[0],8,'Bill No:',0,0,'L');
//$pdf->Cell($width_cell[0],8,$dg1,0,1,'L');
$pdf->Cell($width_cell[0],8,'Date:',0,0,'L');
$pdf->Cell($width_cell[0],8,$dt,0,1,'L');

$pdf->Cell($width_cell[0],8,'Name',0,0,'L');
$pdf->Cell($width_cell[0],8,$gr,0,1,'L');
// foreach ($dbo->query($count) as $row) {
//  $pdf->Cell($width_cell[0],8,$row['name'],1,1,'L');
 
//  // $pdf->Cell($width_cell[1],8,$row['tax'],1,1,'C');

//  $fill = !$fill; // to give alternate background fill  color to rows
//  }
//$pdf->Cell($width_cell[0],8,'Customer ID:',0,0,'L');
//$pdf->Cell($width_cell[0],8,$dg,0,1,'L');



$fill = !$fill; // to give alternate background fill  color to rows


//bill no
$width_cell=array(30,30);
$pdf->SetFont('Arial','B',9);

//$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 

$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 
 // First header column 

//foreach ($dbo->query($) as $row) {
$pdf->Cell($width_cell[0],8,'Server Type',1,0,'C');
$pdf->Cell($width_cell[0],8,'Plan Name',1,0,'C');
$pdf->Cell($width_cell[0],8,'Amount',1,0,'C');
//$pdf->Cell($width_cell[0],8,'Price',1,0,'C');
$pdf->Cell($width_cell[0],8,'Validity',1,1,'C');




//$pdf->Cell($width_cell[1],10,$row['test'],1,1,'L',$fill);
//$pdf->Cell($width_cell[2],10,$row['class'],1,0,'C',$fill);
//$pdf->Cell($width_cell[3],10,$row['mark'],1,0,'C',$fill);
//$pdf->Cell($width_cell[4],10,$row['sex'],1,1,'C',$fill);
$fill = !$fill; // to give alternate background fill  color to rows





$width_cell=array(30,30);
$pdf->SetFont('Arial','B',16);

$pdf->SetFont('Arial','',10);
//$pdf->SetFillColor(235,236,236); // Background color of header 
$fill=false; // to give alternate background fill color to rows 

$pdf->SetFillColor(193,229,252); // Background color of header 



 

 foreach ($dbo->query($count1) as $row) {
 $pdf->Cell($width_cell[0],8,$row['servertype'],1,0,'C');
 $pdf->Cell($width_cell[0],8,$row['planname'],1,0,'C');
 $pdf->Cell($width_cell[0],8,$row['amount'],1,0,'C');
 $pdf->Cell($width_cell[0],8,$row['validity'],1,1,'C');
 
 // $pdf->Cell($width_cell[1],8,$row['tax'],1,1,'C');

 $fill = !$fill; // to give alternate background fill  color to rows
 }

//total
$width_cell=array(38,38);
$pdf->SetFont('Arial','B',10);

$fill=false; // to give alternate background fill color to rows 

$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 


// foreach ($dbo->query($count2) as $row) {
// $pdf->Cell($width_cell[0],8,'',0,0,'R');
// $pdf->Cell($width_cell[0],8,'',0,0,'R');
// $pdf->Cell($width_cell[0],8,'Price:',0,0,'R');
// $pdf->Cell($width_cell[0],8,$dg,0,1,'C');


// $fill = !$fill; // to give alternate background fill  color to rows
// }


// foreach ($dbo->query($count3) as $row) {
// $pdf->Cell($width_cell[0],8,'',0,0,'R');
// $pdf->Cell($width_cell[0],8,'',0,0,'R');
// $pdf->Cell($width_cell[0],8,'Discount:',0,0,'R');
// $pdf->Cell($width_cell[0],8,$dg3,0,1,'C');


// $fill = !$fill; // to give alternate background fill  color to rows
// }


foreach ($dbo->query($count5) as $row) {
 $pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'Total Amount:',0,0,'R');
 $pdf->Cell($width_cell[0],8,$arr,0,1,'C');


$pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'',0,0,'R');
 $pdf->Cell($width_cell[0],8,'Bill Total:',0,0,'R');
 $pdf->Cell($width_cell[0],8,$arr,0,1,'C');
// $fill = !$fill; // to give alternate background fill  color to rows
 }


$pdf->Cell($width_cell[0],10,'--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C');





$pdf->Output();


$qryy="update cart set status='1' where loginid='".$idd."' and paymentdate='".$date1."'";
    $exx=mysql_query($qryy);
    $qryy1="update domains set status='1' where loginid='".$idd."'";
    $exx1=mysql_query($qryy1);

?>

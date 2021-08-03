<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Flat Cart Widget  Responsive Widget Template | Home :: w3layouts</title>
<link href="cart/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
{literal}
<script src="cart/js/jquery-1.11.0.min.js"></script>

<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.cake-top').fadeOut('slow', function(c){
	  		$('.cake-top').remove();
		});
	});	  
});
</script>

<script>$(document).ready(function(c) {
	$('.close-btm').on('click', function(c){
		$('.cake-bottom').fadeOut('slow', function(c){
	  		$('.cake-bottom').remove();
		});
	});	  
});
</script>
</head>
<body>
<div class="logo">
	<h3>Flat Cart Widget</h3>
</div>
<div class="cart">
   <div class="cart-top">
   	  <div class="cart-experience">
   	  	 <h4>Shopping Cart Experience</h4>
   	  </div>
   	  <div class="cart-login">
   	  	 <div class="cart-login-img">
   	  	 	<img src="images/loggin_man.png">
   	  	 </div>
   	  	 <div class="cart-login-text">
   	  	 	<h5>Logged in as</h5>
   	  	 </div> 	
   	  	  
   	  	 <div class="clear"> </div>
   	  </div>
   	 <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
   	 <div class="table">
   	 	<table>
            
           
   	 		<tbody>
   	 	      <tr  class="main-heading">	  	      	
		 			<th class="long-txt">Product Description</th>
		 			<th>Quantity</th>
		 			<th>Price</th>
		 			<th>Total</th>
               <th></th> 		 			 	
   	 	     </tr>
              {foreach from=$view item='s'}
              <tr>
   	 	     <td class="cake-text">
   	 	     		<div class="product-text">
   	 	     			<h3>{$s.servertype}</h3>
                        <h3>{$s.planname}</h3>
                       

   	 	     		</div>
 	     	    </td>
 	     	    <td class="quantity"> 	 	     	 
   	 	     	  <div class="product-right">
   	 	     	  	 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">				  
   	 	     	  </div>
   	 	     	</td>
   	 	     	<td class="price">
   	 	     		<h4>{$s.amount}</h4>	 	     		
   	 	     	</td>
   	 	     	<td class="top-remove">
   	 	     		<h4>$25.98</h4>
   	 	     		
   	 	           
   	 	     	</td>
                  <td class="top-remove">
                  <h4>$25.98</h4>
                  
                    
               </td>
               <td>
  	 	     	<div class="">
                     <h5>Remove</h5> </div>
   	 	     
     	 	     </tr>
   	 	   </tbody>
   	 	</table>
   	 </div>
   	 <div class="vocher">
   	 	<div class="dis-card">
   	 		<h2>Discount Code or Voucher</h2>
   	 		<p>Enter your discount code or voucher to receive a discount on your total order.</p>
   	 		<form>
   	 			<input type="text" value="">
   	 			<input type="submit"  value="Redeem">
   	 		</form>
   	 	</div>
   	 	<div class="dis-total">
   	 		<h1>Total $38.97</h1>
   	 		<div class="tot-btn">
   	 			<a class="shop" href="cart/userhome.php">Back to Shop</a>
   	 			<a class="check" href="payment.php">Continue to Checkout</a>
   	 		</div>
   	 	</div>
   	   <div class="clear"> </div>
   	 </div>
   </div>
</div>
<div class="copy-right">
			<p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
{/literal}
</body>
</html>

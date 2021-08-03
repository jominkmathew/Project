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
	<h3>User Cart</h3>
</div>
<div class="cart">
   <div class="cart-top">
   	  <div class="cart-experience">
   	  	 <h4>Your Favourite Packages</h4>
   	  </div>
   	  <div class="cart-login">
   	  	 <div class="cart-login-img">
   	  	 	<img src="cart/images/loggin_man.png">
   	  	 </div>
   	  	 <div class="cart-login-text">
   	  	 	<h5>Logged in as</h5>
   	  	 </div> 	
   	  	  <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">This is looking great</option>
					<option value="1">Many variations</option>
					<option value="2">Ipsum is simply</option>
					<option value="3">Nemo enim ipsam</option>
				</select>
			 </div>  	 
   	  	 <div class="clear"> </div>
   	  </div>
   	 <div class="clear"> </div>
   {/literal}</div>

   <div class="cart-bottom">
 
   	 <div class="table">

   	 	<table>
   	 		{if $view!=null}
   	 	      <tr  class="main-heading">	  	      	
		 			<th class="long-txt">Product Description</th>
		 			<th>Quantity</th>
		 			<th>Price</th>
		 			<th>Total</th> 		
               <th><!-- Total --></th>        			 	
   	 	     </tr>
              <tbody>
     {foreach from=$view item="s"}
   	 	     <tr class="cake-top">
               
   	 	      <td class="cake-text">
   	 	     		<div class="product-text">
   	 	     			<h3>{$s.servertype}</h3>
   	 	     			<p>{$s.planname}</p>
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
                  <td class="price">
                  <h4>{$s.amount}</h4>             
               </td>
                  <div class="close">

   	 	     	<td class="top-remove">
   	 	     		<!-- <h4>$25.98</h4> -->
   	 	     	      <td><a href="cartdel.php?b={$s.cartkey}">Remove</a></td>
   	 	     	</td>
                      </div>
               <!--  -->
      
  	 	     	
   	 	     </tr>
              {/foreach}
             {/if}

{if $view2!=null}
   	 	   </tbody>
                 <tr  class="main-heading">             
               <th class="long-txt">Domain Name</th>
                 <th class="long-txt">Domain category</th>
               <th>Price</th>
               
               <th>Total</th>       
               <th><!-- Total --></th>                   
              </tr>
  <tbody>
                    {foreach from=$view2 item="s1"}
              <tr class="cake-top">
               
               <td class="cake-text">
                  <div class="product-text">
                     <h3>{$s1.domainname}</h3>
                     <p>{$s1.domaincategory}</p>
                  </div>
             </td>
             <td class="quantity">            
                 <div class="product-right">
                   <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">             
                 </div>
               </td>
               <td class="price">
                  <h4>{$s1.amount}</h4>             
               </td>
                  <td class="price">
                  <h4>{$s1.amount}</h4>             
               </td>
                  <div class="close">

               <td class="top-remove">
                  <!-- <h4>$25.98</h4> -->
                     <td><a href="cartdel.php?b={$s1.cartkey}&&c={$s1.domainname}">Remove</a></td>
               </td>
                      </div>
               <!--  -->
      
            
              </tr>
              {/foreach}
              </tbody>
              {/if}
   	 	</table>
   	 </div>
       
            
   	 
   	 	<div class="dis-total">

   	 		<h1><b><font color="red">Total Amount</font></b></h1><h1>{$view1}</h1>
           
            
   	 		<div class="tot-btn">
   	 			<a class="shop" href="userhome.php">Back to Home</a>
   	 			<a class="check" href="payment.php?f={$view1}">Continue to Checkout</a>
   	 		</div>
   	 	</div>

   	   <div class="clear"> </div>
   	 </div>
        
   </div>
 {literal}

</div>
<div class="copy-right">
			<p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
{/literal}

</body>
</html>

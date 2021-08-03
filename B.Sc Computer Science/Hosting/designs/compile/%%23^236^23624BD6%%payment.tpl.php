<?php /* Smarty version 2.6.26, created on 2020-02-29 08:06:53
         compiled from payment.tpl */ ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Tabs Payment Form Flat Responsive Widget Template :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tabs Payment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEripayment/on, Motorola web design" />
<?php echo '
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="payment/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="payment/css/creditly.css" type="text/css" media="all" />
<link rel="stylesheet" href="payment/css/easy-responsive-tabs.css">
<script src="payment/js/jquery.min.js"></script>
<!-- font-awesome-icons -->
<link href="payment/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Mirza:400,500,600,700&amp;subset=arabic,latin-ext" rel="stylesheet">
</head>
<body>
	<div class="main">	
		<h1>Tabs Payment Form</h1>
		<div class="w3_agile_main_grids">
		<!-- 	<div class="w3layouts_main_grid_left">
				<div class="agileinfo_main_grid_left_grid">
					<h3>Payment Summary</h3>
					<ul>
						<li>Electronics<span>2017 February 10, at 10:30 PM</span></li>
						<li>CAF</li>
					</ul>
					<ul>
						<li>Food<span>2017 February 25, at 1:30 PM</span></li>
						<li>JFK</li>
					</ul>
					<ul>
						<li>Grocery<span>2017 March 17, at 08:30 PM</span><span>2017 March 19, at 08:30 PM</span></li>
						<li>LHR</li>
					</ul>
					<ul>
						<li>Accessories<span>2017 April 09, at 10:00 AM</span></li>
						<li>JFK</li>
					</ul>
				</div>
				<div class="agile_amount">
					<h3>Total Price</h3>
					<h4>523.63 GBP</h4>
					<p>Price includes all taxes</p>
				</div>
			</div> -->

			<div class="agileits_main_grid_right">
				<div class="wthree_payment_grid">
					<h2>Payment Method</h2>
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li><img src="payment/images/1.jpg" alt=" " /></li>
							<li><img src="payment/images/netbanking.jpg" alt=" " /></li>
						</ul>
						<div class="resp-tabs-container">
							<div class="agileits_w3layouts_tab1">
								<form action="" method="post" class="creditly-card-form agileinfo_form">
                    			   <input type="hidden" name="hide" value="h">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="form-control" type="text" name="number"
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number"
																		  placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">CVV</label>
															<input class="security-code form-control"Â·
																		  inputmode="numeric"
																		  type="text" name="cvc"
																		  placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration" placeholder="MM / YY">
												</div>
											</div>
											<input type="submit" value="Make a payment"><span> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
										</div>
									</section>
								</form>
							</div>
							<div class="agileits_w3layouts_tab2">
								
                               	<form action="" method="post" class="creditly-card-form agileinfo_form">
                    			   <input type="hidden" name="hide" value="h">
									<h3><input type="radio" name="netbanking" value="Federal Bank" onclick="location.href=\'https://www.fednetbank.com/corp/AuthenticationController?__START_TRAN_FLAG__=Y&FORMSGROUP_ID__=AuthenticationFG&__EVENT_ID__=LOAD&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=049&LANGUAGE_ID=001\'">&nbsp;&nbsp;&nbsp;Federal Bank</h3>


									<h3><input type="radio" name="netbanking" value="ICICI Bank" onclick="location.href=\'https://infinity.icicibank.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=ICI&ITM=nli_personalb_personal_login_btn&_ga=2.108623554.1717484351.1582957774-563152913.1582957774\'">&nbsp;&nbsp;&nbsp;ICICI Bank</h3>


									<h3><input type="radio" name="netbanking" value="State Bank of India" onclick="location.href=\'https://retail.onlinesbi.com/retail/login.htm\'">&nbsp;&nbsp;&nbsp;State Bank of India</h3>


									<h3><input type="radio" name="netbanking" value="South Indian Bank" onclick="location.href=\'https://sibernet.southindianbank.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=059\'">&nbsp;&nbsp;&nbsp;South Indian Bank</h3>


									<h3><input type="radio" name="netbanking" value="Canara Bank" onclick="location.href=\'https://candi.canarabank.in/omnichannel/?\'">&nbsp;&nbsp;&nbsp;Canara Bank</h3>


									<h3><input type="radio" name="netbanking" value="Dhanalakshmi Bank" onclick="location.href=\'https://netbank.dhanbank.in/DBRetailBank/\'">&nbsp;&nbsp;&nbsp;Dhanalakshmi Bank</h3>






									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="agileits_copyright">
			<p>© 2017 Tabs Payment Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
	</div>
	<!-- credit-card -->
		<script type="text/javascript" src="payment/js/creditly.js"></script>
		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  \'.creditly-wrapper .expiration-month-and-year\',
				  \'.creditly-wrapper .credit-card-number\',
				  \'.creditly-wrapper .security-code\',
				  \'.creditly-wrapper .card-type\');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->
	<!-- tabs -->
	<script src="payment/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$(\'#horizontalTab\').easyResponsiveTabs({
				type: \'default\', //Types: default, vertical, accordion           
				width: \'auto\', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: \'accordion\', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $(\'#tabInfo\');
				var $name = $(\'span\', $info);
				$name.text($tab.text());
				$info.show();
				}
			});
		});
	</script>
	<!-- //tabs -->
'; ?>

</body>
</html>
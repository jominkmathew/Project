<html>
<head><title>PLAN DETAILS</title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Server Type</th>
		<th>Plan Name</th>
		<th>Purchase Date</th>
		<th>Amount</th>
		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.servertype}</td>
	<td>{$s.planname}</td>
	<td>{$s.currentdate}</td>
	<td>{$s.amount}</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="renewnot.php?k={$s.packey}&&k1={$s.cartkey}&&kk={$view1}" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Sent Notification</a>
                                </div></td>
</tr>
{/foreach}
</form>
</table>
</center>
</body>
</html>
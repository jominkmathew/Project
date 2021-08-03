<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr><th>User Name</th>
		<th>Email</th>
		<th>Server Type</th>
		<th>Plan Name</th>
		<th>Amount</th>
		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.name}</td>
	<td>{$s.email}</td>
	<td>{$s.servertype}</td>
	<td>{$s.planname}</td>
	<td>{$s.amount}</td>
</tr>
{/foreach}







</form>
</table>
</center>
</body>
</html>
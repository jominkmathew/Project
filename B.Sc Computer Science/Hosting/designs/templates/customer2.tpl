<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Domain Name</th>
		<th>Amount</th>
		
	</tr>
{foreach from=$view2 item="s1"}
<tr>
	<td>{$s1.name}</td>
	<td>{$s1.email}</td>
	<td>{$s1.domainname}</td>
	<td>{$s1.amount}</td>
</tr>
{/foreach}

</form>
</table>
</center>
</body>
</html>
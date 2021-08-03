<html>
<head><title></title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Amount</th>
		<th>No of Databases</th>
		<th>Websites</th>
		<th>Space</th>
		<th>CPU</th>
		<th>Bandwidth</th>
		<th>RAM</th>
		<th>Validity</th>
		<th>Other</th>
		
	</tr>
	{foreach from=$view item="b"}
	<tr>
	<td>{$b.amount}</td>
	<td>{$b.no_databases}</td>
	<td>{$b.websites}</td>
	<td>{$b.space}</td>
	<td>{$b.cpu}</td>
	<td>{$b.bandwidth}</td>
    <td>{$b.ram}</td>
    <td>{$b.validity}</td>
    <td>{$b.other}</td>
</tr>
	{/foreach}
</form>
</table>
</center>

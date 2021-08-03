<html>
<head>
<title>TABLE</title>
</head>

<body>
	 
	<center>
<table class="table table-striped">
	<form method="post" action="">
<tr>
<th>Notification</th>
<th>Date</th></tr>
{
foreach from=$view1 item="v"	
}
<tr>
<td>{$v.notification}</td>
<td>{$v.currentdate}</td>
</tr>
{/foreach}
</table>
</center>
</body>

</html>
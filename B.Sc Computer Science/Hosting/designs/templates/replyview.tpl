<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr><th>Reply</th>
		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.reply}</td>
	
</tr>
{/foreach}







</form>
</table>
</center>
</body>
</html>
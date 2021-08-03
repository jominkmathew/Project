<html>
<head>
<title>TABLE</title>
</head>
<body>
<table align="center" class="form-control" border="2">
<tr>
<th>FEEDBACK</th>
<th>currentdate</th></tr>
{
foreach from=$view item="v"	
}
<tr>
<td>{$v.feedback}</td>
<td>{$v.currentdate}</td>
</tr>
{/foreach}
</table>
</body>
</html>

<html>
<head><title>USER DETAILS</title></head>
<body>
	<center>
<table border="2" align="center">
<form method="post" action="">
	<tr><th>Name</th>
		<th>Contactno</th>
		<th>OrganisationName</th>
		<th>Emailid</th>
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.name}</td>
	<td>{$s.contactno}</td>
	<td>{$s.organisationname}</td>
	<td>{$s.email}</td>
</tr>
{/foreach}
</form>
</table>
</center>
</body>
</html>
<html>
<head><title>RENEWAL</title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Name</th>
		<th>Contactno</th>
		<th>OrganisationName</th>
		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.name}</td>
	<td>{$s.contactno}</td>
	<td>{$s.organisationname}</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="renplan.php?k={$s.id}" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>View Plans</a>
                                </div></td>
</tr>
{/foreach}
</form>
</table>
</center>
</body>
</html>
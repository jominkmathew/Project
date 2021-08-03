<html>
<head><title>MY PACKAGE</title></head>
<body>
	<center>
		<h2>Server Plans</h2>
<table class="table table-bordered">
<form method="post" action="">
	{if $view!=null}
	<tr> 
		<th>Name</th>
		<th>Server Type</th>
		<th>Plan Name</th>
		<th>Validity</th>
		<th>Purchase Date</th>

		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.name}</td>
	<td>{$s.servertype}</td>
	<td>{$s.planname}</td>
	<td>{$s.validity}</td>
	<td>{$s.paymentdate}</td>

	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="mypac.php?b={$s.packey}" class="btn hami-btn live--chat--btn"><i  aria-hidden="true">Sent Notification</i></a>
                                </div></td>
    
</tr>
{/foreach}

{/if}
</table>

<h2>Domain Plans</h2>
<table class="table table-bordered">
{if $view2!=null}

<tr>
	    <th>Name</th>
		<th>Domain Name</th>
		<th>Domain Category</th>
		<th>Validity</th>
		<th>Purchase Date</th>
		
	</tr>
{foreach from=$view2 item="p"}
<tr>
	<td>{$p.name}</td>
	<td>{$p.domainname}</td>
	<td>{$p.domaincategory}</td>
	<td>{$p.validity}</td>
	<td>{$p.paymentdate}</td>

	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="mypac.php?b={$s.packey}" class="btn hami-btn live--chat--btn"><i  aria-hidden="true">Sent Notification</i></a>
                                </div></td>
    
</tr>
{/foreach}
{/if}







</form>
</table>
</center>
</body>
</html>
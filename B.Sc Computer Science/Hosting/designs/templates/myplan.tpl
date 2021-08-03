<html>
<head><title>MY PACKAGE</title></head>
<body>
	<center>
		<h2>Server Plans</h2>
<table class="table table-striped">
<form method="post" action="">
	{if $view!=null}
	<tr><th>Server Type</th>
		<th>Plan Name</th>
		
	</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.servertype}</td>
	<td>{$s.planname}</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="mypac.php?b={$s.packey}" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>View More</a>
                                </div></td>
    <td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="filemanager.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Hosting</a>
                                </div></td>                            
</tr>
{/foreach}

{/if}
</table>

<h2>Domain Plans</h2>
<table class="table table-bordered">
{if $view2!=null}

<tr>
		<th>Domain Name</th>
		<th>Date</th>
		
	</tr>
{foreach from=$view2 item="p"}
<tr>
	
	<td>{$p.domainname}</td>
	<td>{$p.currentdate}</td>
</tr>
{/foreach}
{/if}







</form>
</table>
</center>
</body>
</html>
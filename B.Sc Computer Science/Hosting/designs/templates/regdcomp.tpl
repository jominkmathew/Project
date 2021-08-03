<html>
<head><title>REGISTERED COMPLAINTS</title></head>
<body>
	<center>
<table class="table table-striped">
<tr>
	<th>Subject</th>
	<th>Complaint</th>
</tr>
{foreach from=$view item="s"}
<tr>
	<td>{$s.subject}</td>
	<td>{$s.complaint}</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="upcomp.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Update</a>
                                </div></td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="delcomp.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Delete</a>
                                </div></td>
                                {if $s.reply!=null}
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="viewreply.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>View Reply</a>
                                </div></td>
                                {/if}
</tr>
{/foreach}
</form>
</table>
</center>
</body>
</html>
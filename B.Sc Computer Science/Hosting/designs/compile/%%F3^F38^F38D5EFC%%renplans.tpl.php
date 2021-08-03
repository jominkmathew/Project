<?php /* Smarty version 2.6.26, created on 2020-03-07 06:57:20
         compiled from renplans.tpl */ ?>
<html>
<head><title>PLAN DETAILS</title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Server Type</th>
		<th>Plan Name</th>
		<th>Purchase Date</th>
		<th>Amount</th>
		
	</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['servertype']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['planname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['currentdate']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['amount']; ?>
</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="renewnot.php?k=<?php echo $this->_tpl_vars['s']['packey']; ?>
&&k1=<?php echo $this->_tpl_vars['s']['cartkey']; ?>
&&kk=<?php echo $this->_tpl_vars['view1']; ?>
" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Sent Notification</a>
                                </div></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</center>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2020-02-16 10:06:25
         compiled from customer.tpl */ ?>
<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr><th>User Name</th>
		<th>Email</th>
		<th>Server Type</th>
		<th>Plan Name</th>
		<th>Amount</th>
		
	</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['email']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['servertype']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['planname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['amount']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>







</form>
</table>
</center>
</body>
</html>
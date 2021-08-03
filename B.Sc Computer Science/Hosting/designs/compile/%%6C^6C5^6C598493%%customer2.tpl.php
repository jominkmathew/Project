<?php /* Smarty version 2.6.26, created on 2020-02-16 10:12:47
         compiled from customer2.tpl */ ?>
<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Domain Name</th>
		<th>Amount</th>
		
	</tr>
<?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s1']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s1']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s1']['email']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s1']['domainname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s1']['amount']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</form>
</table>
</center>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2020-01-12 07:12:22
         compiled from userview.tpl */ ?>
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
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['contactno']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['organisationname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['email']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</center>
</body>
</html>
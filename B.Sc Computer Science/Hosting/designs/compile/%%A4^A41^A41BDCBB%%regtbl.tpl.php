<?php /* Smarty version 2.6.26, created on 2019-12-29 07:32:44
         compiled from regtbl.tpl */ ?>
<html>
<head><title>Registration</title>
</head>
<body>
<table border="2" align="center">
	<form method="post" action=" ">
<tr>
	<th>Name</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Email</th>
</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['v']['address']; ?>
</td>
	<td><?php echo $this->_tpl_vars['v']['gender']; ?>
</td>
	<td><?php echo $this->_tpl_vars['v']['email']; ?>
</td>
	<td><a href="regup.php?b=<?php echo $this->_tpl_vars['v']['regskey']; ?>
">Update</a>
	<td><a href="del.php?b=<?php echo $this->_tpl_vars['v']['regskey']; ?>
">Delete</a>
</tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>
<a href="logout.php">Logout</a>
</body>
</html>

    
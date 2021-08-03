<?php /* Smarty version 2.6.26, created on 2020-03-07 07:23:51
         compiled from rentbl.tpl */ ?>
<html>
<head>
<title>TABLE</title>
</head>

<body>
	 
	<center>
<table class="table table-striped">
	<form method="post" action="">
<tr>
<th>Notification</th>
<th>Date</th></tr>
<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<tr>
<td><?php echo $this->_tpl_vars['v']['notification']; ?>
</td>
<td><?php echo $this->_tpl_vars['v']['currentdate']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</center>
</body>

</html>
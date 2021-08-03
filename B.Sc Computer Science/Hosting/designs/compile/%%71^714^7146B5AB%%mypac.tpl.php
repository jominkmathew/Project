<?php /* Smarty version 2.6.26, created on 2020-03-07 05:48:48
         compiled from mypac.tpl */ ?>
<html>
<head><title></title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Amount</th>
		<th>No of Databases</th>
		<th>Websites</th>
		<th>Space</th>
		<th>CPU</th>
		<th>Bandwidth</th>
		<th>RAM</th>
		<th>Validity</th>
		<th>Other</th>
		
	</tr>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<tr>
	<td><?php echo $this->_tpl_vars['b']['amount']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['no_databases']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['websites']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['space']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['cpu']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['bandwidth']; ?>
</td>
    <td><?php echo $this->_tpl_vars['b']['ram']; ?>
</td>
    <td><?php echo $this->_tpl_vars['b']['validity']; ?>
</td>
    <td><?php echo $this->_tpl_vars['b']['other']; ?>
</td>
</tr>
	<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</center>
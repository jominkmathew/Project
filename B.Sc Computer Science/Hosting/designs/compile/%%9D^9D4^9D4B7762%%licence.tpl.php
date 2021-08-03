<?php /* Smarty version 2.6.26, created on 2020-03-04 06:51:14
         compiled from licence.tpl */ ?>
<html>
<head><title>MY PACKAGE</title></head>
<body>
	<center>
		<h2>Server Plans</h2>
<table class="table table-bordered">
<form method="post" action="">
	<?php if ($this->_tpl_vars['view'] != null): ?>
	<tr> 
		<th>Name</th>
		<th>Server Type</th>
		<th>Plan Name</th>
		<th>Validity</th>
		<th>Purchase Date</th>

		
	</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['servertype']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['planname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['validity']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['paymentdate']; ?>
</td>

	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="mypac.php?b=<?php echo $this->_tpl_vars['s']['packey']; ?>
" class="btn hami-btn live--chat--btn"><i  aria-hidden="true">Sent Notification</i></a>
                                </div></td>
    
</tr>
<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>
</table>

<h2>Domain Plans</h2>
<table class="table table-bordered">
<?php if ($this->_tpl_vars['view2'] != null): ?>

<tr>
	    <th>Name</th>
		<th>Domain Name</th>
		<th>Domain Category</th>
		<th>Validity</th>
		<th>Purchase Date</th>
		
	</tr>
<?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['p']['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['p']['domainname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['p']['domaincategory']; ?>
</td>
	<td><?php echo $this->_tpl_vars['p']['validity']; ?>
</td>
	<td><?php echo $this->_tpl_vars['p']['paymentdate']; ?>
</td>

	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="mypac.php?b=<?php echo $this->_tpl_vars['s']['packey']; ?>
" class="btn hami-btn live--chat--btn"><i  aria-hidden="true">Sent Notification</i></a>
                                </div></td>
    
</tr>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>







</form>
</table>
</center>
</body>
</html>
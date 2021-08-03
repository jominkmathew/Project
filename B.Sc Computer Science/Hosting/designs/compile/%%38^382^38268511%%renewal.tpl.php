<?php /* Smarty version 2.6.26, created on 2020-03-07 06:52:34
         compiled from renewal.tpl */ ?>
<html>
<head><title>RENEWAL</title></head>
<body>
	<center>
<table class="table table-striped">
<form method="post" action="">
	<tr><th>Name</th>
		<th>Contactno</th>
		<th>OrganisationName</th>
		
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
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="renplan.php?k=<?php echo $this->_tpl_vars['s']['id']; ?>
" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>View Plans</a>
                                </div></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</center>
</body>
</html>
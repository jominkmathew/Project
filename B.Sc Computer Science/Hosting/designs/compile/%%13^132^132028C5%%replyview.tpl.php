<?php /* Smarty version 2.6.26, created on 2020-02-23 05:42:46
         compiled from replyview.tpl */ ?>
<html>
<head><title>CUSTOMER DETAILS</title></head>
<body>
	<center>
<table class="table table-bordered">
<form method="post" action="">
	<tr><th>Reply</th>
		
	</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['reply']; ?>
</td>
	
</tr>
<?php endforeach; endif; unset($_from); ?>







</form>
</table>
</center>
</body>
</html>
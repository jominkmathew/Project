<?php /* Smarty version 2.6.26, created on 2020-03-07 08:44:45
         compiled from regdcomp.tpl */ ?>
<html>
<head><title>REGISTERED COMPLAINTS</title></head>
<body>
	<center>
<table class="table table-striped">
<tr>
	<th>Subject</th>
	<th>Complaint</th>
</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['s']['subject']; ?>
</td>
	<td><?php echo $this->_tpl_vars['s']['complaint']; ?>
</td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="upcomp.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Update</a>
                                </div></td>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="delcomp.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>Delete</a>
                                </div></td>
                                <?php if ($this->_tpl_vars['s']['reply'] != null): ?>
	<td><div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="viewreply.php" class="btn hami-btn live--chat--btn"><i  aria-hidden="true"></i>View Reply</a>
                                </div></td>
                                <?php endif; ?>
</tr>
<?php endforeach; endif; unset($_from); ?>
</form>
</table>
</center>
</body>
</html>
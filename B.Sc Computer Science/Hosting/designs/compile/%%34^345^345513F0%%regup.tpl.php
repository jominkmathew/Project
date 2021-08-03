<?php /* Smarty version 2.6.26, created on 2019-12-28 10:16:58
         compiled from regup.tpl */ ?>
   <html>
   <head><title>UPDATE</title></head>
   <body>
   
   	<form method="post" action=" ">
         <?php $_from = $this->_tpl_vars['update']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?>
   		<table align="center">
      	<input type="hidden" name="hide" value="h">
   		<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['u']['name']; ?>
"></td></tr>
   		<tr><td>Address</td><td><textarea name="addr"><?php echo $this->_tpl_vars['u']['address']; ?>
</textarea></td></tr>
   		<tr><td>Gender</td><td><select name="gender">
            <option><?php echo $this->_tpl_vars['u']['gender']; ?>
</option>
            <option>Male</option>
            <option>Female</option></select></td></tr>
   		<tr><td>Email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['u']['email']; ?>
"></td></tr>
   		
   		<tr><td><td><input type="submit" value="Update"></td></td></tr>

   	</table>	
      <?php endforeach; endif; unset($_from); ?>
   	</form>
   </body>
   </html>
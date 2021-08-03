<?php /* Smarty version 2.6.26, created on 2020-06-15 07:23:41
         compiled from userupdate.tpl */ ?>

<html>
<head><title>UPDATE</title></head>
<body>
   <center>
<form method="post" action=" ">
 <?php $_from = $this->_tpl_vars['update']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
 <table>
         <input type="hidden" name="hide" value="h">
         <tr><td>Name&nbsp;&nbsp;</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['s']['name']; ?>
"></td></tr><tr><td>&nbsp;</td></tr>
         <tr><td>Contactno&nbsp;&nbsp;</td><td><input type="text" name="contactno" class="form-control" value="<?php echo $this->_tpl_vars['s']['contactno']; ?>
"></td></tr><tr><td>&nbsp;</td></tr>
         <tr><td>Organisation Name&nbsp;&nbsp;</td><td><textarea name="org" class="form-control"><?php echo $this->_tpl_vars['s']['organisationname']; ?>
</textarea></td></tr><tr><td>&nbsp;</td></tr>
         
         <tr><td><td><input type="submit" value="Update" class="btn btn-success"></td></td></tr>

      </table> 
      <?php endforeach; endif; unset($_from); ?>
      </form>
   </center>
   </body>
   </html>
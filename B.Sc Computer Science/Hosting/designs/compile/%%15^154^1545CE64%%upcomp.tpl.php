<?php /* Smarty version 2.6.26, created on 2020-01-15 10:49:33
         compiled from upcomp.tpl */ ?>

<html>
<head><title>COMPLAINT UPDATE</title></head>
<body>
   <center>
<form method="post" action=" ">
 <?php $_from = $this->_tpl_vars['update']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
 <table align="center">
         <input type="hidden" name="hide" value="h">
         <tr><td>Subject</td><td><input type="text" name="subject" value="<?php echo $this->_tpl_vars['s']['subject']; ?>
"></td></tr>
         <tr><td>Complaint</td><td><textarea name="complaint"><?php echo $this->_tpl_vars['s']['complaint']; ?>
</textarea></td></tr> 
         <tr><td><td><input type="submit" value="Update"></td></td></tr>

      </table> 
      <?php endforeach; endif; unset($_from); ?>
      </form>
   </center>
   </body>
   </html>
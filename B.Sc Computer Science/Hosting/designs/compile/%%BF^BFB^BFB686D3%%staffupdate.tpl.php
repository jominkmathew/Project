<?php /* Smarty version 2.6.26, created on 2020-03-09 05:56:36
         compiled from staffupdate.tpl */ ?>

<html>
   <head><title></title></head>
   <body>
      
      <center><h2><u>PROFILE UPDATION</u></h2></center>
      <form method="post" action=" ">
         
          <?php $_from = $this->_tpl_vars['update']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
         <table class="table table-bordered">
         <input type="hidden" name="hide" value="h">
         <tr><td>Staff Name</td><td><input type="text" name="staffname" value="<?php echo $this->_tpl_vars['b']['staffname']; ?>
"></td></tr><br>
         <tr><td>Staff Id</td><td><input type="text" name="staffid" value="<?php echo $this->_tpl_vars['b']['staffid']; ?>
"></td></tr>
         <tr><td>Contactno</td><td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['b']['contactno']; ?>
"></td></tr>
         <tr><td>Gender</td><td><select name="gender">
            <option><?php echo $this->_tpl_vars['b']['gender']; ?>
</option>
            <option>Male</option>
            <option>Female</option></select></td></tr>
         <tr><td>DOB</td><td><input type="text" name="dob" value="<?php echo $this->_tpl_vars['b']['dob']; ?>
"></td></tr>     
         <tr><td><td><input type="submit" value="Update" class="btn hami-btn live--chat--btn"></td></td></tr>
      </table> 
       <?php endforeach; endif; unset($_from); ?>
      
   
      </form>
   </body>
   </html>
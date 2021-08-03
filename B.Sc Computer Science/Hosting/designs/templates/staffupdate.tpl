
<html>
   <head><title></title></head>
   <body>
      
      <center><h2><u>PROFILE UPDATION</u></h2></center>
      <form method="post" action=" ">
         
          {foreach from=$update item="b"}
         <table class="table table-bordered">
         <input type="hidden" name="hide" value="h">
         <tr><td>Staff Name</td><td><input type="text" name="staffname" value="{$b.staffname}"></td></tr><br>
         <tr><td>Staff Id</td><td><input type="text" name="staffid" value="{$b.staffid}"></td></tr>
         <tr><td>Contactno</td><td><input type="text" name="contactno" value="{$b.contactno}"></td></tr>
         <tr><td>Gender</td><td><select name="gender">
            <option>{$b.gender}</option>
            <option>Male</option>
            <option>Female</option></select></td></tr>
         <tr><td>DOB</td><td><input type="text" name="dob" value="{$b.dob}"></td></tr>     
         <tr><td><td><input type="submit" value="Update" class="btn hami-btn live--chat--btn"></td></td></tr>
      </table> 
       {/foreach}
      
   
      </form>
   </body>
   </html>
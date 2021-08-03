
<html>
<head><title>UPDATE</title></head>
<body>
   <center>
<form method="post" action=" ">
 {foreach from=$update item="s"}
 <table>
         <input type="hidden" name="hide" value="h">
         <tr><td>Name&nbsp;&nbsp;</td><td><input type="text" name="name" class="form-control" value="{$s.name}"></td></tr><tr><td>&nbsp;</td></tr>
         <tr><td>Contactno&nbsp;&nbsp;</td><td><input type="text" name="contactno" class="form-control" value="{$s.contactno}"></td></tr><tr><td>&nbsp;</td></tr>
         <tr><td>Organisation Name&nbsp;&nbsp;</td><td><textarea name="org" class="form-control">{$s.organisationname}</textarea></td></tr><tr><td>&nbsp;</td></tr>
         
         <tr><td><td><input type="submit" value="Update" class="btn btn-success"></td></td></tr>

      </table> 
      {/foreach}
      </form>
   </center>
   </body>
   </html>
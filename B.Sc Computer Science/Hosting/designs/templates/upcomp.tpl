
<html>
<head><title>COMPLAINT UPDATE</title></head>
<body>
   <center>
<form method="post" action=" ">
 {foreach from=$update item="s"}
 <table class="table table-bordered">
         <input type="hidden" name="hide" value="h">
         <tr><td>Subject</td><td><input type="text" name="subject" value="{$s.subject}"></td></tr>
         <tr><td>Complaint</td><td><textarea name="complaint">{$s.complaint}</textarea></td></tr> 
         <tr><td><td><input type="submit" value="Update"></td></td></tr>

      </table> 
      {/foreach}
      </form>
   </center>
   </body>
   </html>
<?php
session_start() ;
include('headm.html');
?>
<!DOCTYPE html>
<html>
<body>
   
 <img src="formn.jpeg" align="right" style="width:900px;height:570px">

	<div style="position:absolute;left:40px;top:300px ;font-size:25px;font-family:Berlin Sans FB;color:#000;">
	<table >
	
		 <form method = 'post' action='form_make.php' id='store_manager'>
			 <tr><td>Form Name:</td> <td><input type='text' id='NameofTheForm' name = 'form_name'></td></tr>
		
       <tr><td colspan=2><input type='submit' name = 'form_name_make' value='PROCEED'></td></tr>

       </form>
       
      </table>
      

</body>
</html>


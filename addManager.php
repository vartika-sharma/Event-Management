<?php
session_start() ;
include('headm.html');
?>
<!DOCTYPE html>
<html>
<head>
<title>Head Profile</title>
</head>
<body>
<img src="addManager.jpeg" width="100%"height="90%"  style="position:absolute; top:60px;">

<div style="position: absolute;top: 130px;left:550px;">
<table style="font-size:24px;font-family: Malgun Gothic;padding: 10px"  >
<form method = "post" id="add_manager" action="add_manager.php" >
<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Date of birth</td><td><input type="date" name="dob"></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" value="male">male<input type="radio" name="gender" value="female">female</td></tr>
<tr><td>Email:</td><td><input type="email" name="email"></td></tr>
<tr><td>Contact Number</td><td><input type="text" name = "phone"></td></tr>
<tr><td>Address</td><td><input type="textarea" name = "address"></td></tr>
<tr><td align="center" colspan=2><input type="submit" style="width:100px;height: 40px" name = "add_manager" value="submit"></td></tr>
 
</form>
</table>
</div>




</body>
</html>

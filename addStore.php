<?php

include('headm.html');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add a new store</title>
</head>
<body>

<img src="addManager.jpeg" width="99%"height="90%"  style="position:absolute; top:60px;">
<div style="position: absolute;top: 130px;left:550px;">
<table style="font-size:24px;font-family: Malgun Gothic;padding: 10px"  >
<form method="post" id="add_store">
<tr>
<td>city</td>
<td><input type="text" name="city"></td>
</tr>
<tr>
<td>address</td>
<td><input type="textarea" name="address" columns="5" rows="10"></td>
</tr>
<tr>
<td>Select a manager</td>
<td>
<?php

               include('add_store.php');
               $username=$_SESSION['username'];

              // echo $username;
				$sql = "SELECT * FROM sign_in WHERE username = '".$username."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         $org_id = $row["org_id"];
		         $org_name = $row["org_name"];


				$sql = "SELECT * FROM store_managers WHERE org_id = '".$org_id."'";
		         $result = mysqli_query($db,$sql);
		         
		         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		         echo "<select name='name'>";
		         while($row)
		         {
		         	
		         	$manager_name = $row["name"];
		         	echo "<option> $manager_name</option> ";

		         	



		         	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		         }
		         echo "</select>";
		     
?>
</td>
</tr>
<tr><td align="center" colspan=2><input type="submit" style="width:100px;height: 40px" name = "add_store" value="submit"></td></tr></form></table>
</div></body></html>
